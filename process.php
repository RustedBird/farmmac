<?php

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
$name = $post['name'];
$email = $post['email'];
$phone = $post['phone'];
$comment = $post['comment'];
$question = $post['question'];

require_once($_SERVER['DOCUMENT_ROOT'] . "/language/" . $post['lang'] . '.php');

//Проверка на валидность данных
$response['result'] = true;
$response['message'] = $lang['responseMessage']['success'];

if (!Valid::not_empty($name) || !Valid::not_empty($phone) || !Valid::phone($phone)) {
    $response = ['result' => false,
                'message' => $lang['responseMessage']['errorFields']];
} elseif ($comment != 'Call me back') { // если это не обратный звонок, то валидируем и е-меил
    $response['result'] = (bool)Valid::email($email);
}

if ($response['result']) {

    $request = [
        'to' => ["Фарм Мак Україна <aksenov.andrew@gmail.com>"],
        "sender" => "Farm Mac Ukraine <noreply@farmmac.com.ua>",
        'subject' => 'Заявка с сайта Зерносушилки Pedrotti',
        'html_body' => '<pre>Клиент: ' . $name . '</pre>'
                     . '<pre>Email: ' . $email . '</pre>'
                     . '<pre>Телефон: ' . $phone . '</pre>'
                     . "<pre>Сообщение клиента:\r\n" . $comment . '</pre>'
    ];

    $newMessage = new Message();
//    $newMessage->sendEmail($request, $lang);
    $newMessage->sendTelegram($request['html_body']);

    if ($comment != 'Call me back') {
        // так как вопрос с формы может быть любым и должен записываться в CRM, мы отправлем статичный скрытый input[name='question']
        if ($question != '') {
            $comment = $question;
        }
        $request = $lang['emails'][$comment];
        $response = $newMessage->sendEmail($request, $lang);
    }

} else {
    $response['message'] = $lang['responseMessage']['errorFields'];
}

echo json_encode($response);

class Message
{

    protected $api_url = 'https://api.smtp2go.com/v3/email/send';
    protected $api_key = 'api-F1266D14298611E7A1B4F23C91C88F4E';
    protected $token = '561353685:AAFVHFTMIychcLnJzi1MziPwGYng3tYHlqI';
    protected $chat_id_list = [350981322];

    public function sendEmail($request, $lang)
    {

        $request['api_key'] = $this->api_key;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));
        $result = json_decode(curl_exec($ch));
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        switch ($httpcode) {
            case 200:
                $response['result'] = (bool)$result->data->succeeded;
                $response['message'] = $lang['responseMessage']['success'];
                break;
            default:
                $response['result'] = false;
                $response['message'] = $lang['responseMessage']['errorSend'];
                $date = date_create();
                $fp = fopen('errors/file.txt', 'a');
                fwrite($fp, date_format($date, 'Ymd_H:i:s') . PHP_EOL . 'Ошибка: ' . $result->data->error . PHP_EOL);
                fclose($fp);
        }
        return $response;
    }

    public function sendTelegram($mes)
    {
        for ($i = 0; $i < count($this->chat_id_list); $i++) {
            file_get_contents('https://api.telegram.org/bot' . $this->token
                . '/sendMessage?chat_id=' . $this->chat_id_list[$i]
                . '&text=' . urlencode($mes)
                . '&parse_mode=HTML');
        }
    }
}

Class Valid
{
    /**
     * Checks if a field is not empty.
     *
     * @return  boolean
     */
    public static function not_empty($value)
    {
        if (in_array($value, array(NULL, FALSE, '', array()))) {
            return false;
        }
        // Value cannot be NULL, FALSE, '', or an empty array
        return true;
    }

    /**
     * Check an email address for correct format.
     *
     * @link  http://www.iamcal.com/publish/articles/php/parsing_email/
     * @link  http://www.w3.org/Protocols/rfc822/
     *
     * @param   string $email email address
     * @param   boolean $strict strict RFC compatibility
     * @return  boolean
     */
    public static function email($email)
    {
        $pattern = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';
        if ((mb_strlen($email) > 254) || !preg_match($pattern, $email)) {
            return false;
        }
        return true;
    }

    /**
     * Checks if a phone number is valid.
     *
     * @param   string $number phone number to check
     * @param   array $lengths
     * @return  boolean
     */
    public static function phone($number)
    {
        $pattern = '/^[0-9\-\(\)\/\+\s]*$/';
        if ((mb_strlen($number) > 254) || !preg_match($pattern, $number)) {
            return false;
        }
        return true;
    }
}

