<?php

echo json_encode(array('name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'comment' => $_POST['comment']));

/*$name = $_POST['name'];*/

//var_dump($_POST); die;