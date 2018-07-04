;(function ($) {
    $('#ajaxForm').on('submit', function (event) {
        event.preventDefault();
        var $this = $(this),
            data = $this.serialize(),
            url = $this.attr('action'),
            type = $this.attr('method');

        $.ajax({
            url: url,
            method: type,
            data: data,
            dataType: 'json',
            beforeSend: function () {
                console.log("beforeSend");
            },
            success: function (response) {
                console.log("success");
                $('#texthere').html('Your name is ' + response.name);
            },
            error: function () {
                console.log('Some error');
            }
        });
    });

    //Подбор модели зерносушилки
    $('#selectionForm').on('click', '.btn', function (event) {
        event.preventDefault();
        var model,
            $performance = parseInt($('.performance').val()),
            $moisture = $('[name="moisture"]:checked').val(),
            $answer = $('.modelAnswer');

        if (isNaN($performance)) { //Проверяем выбрана ли мощность
            $answer.html('Выберите производительность');
        } else if ($moisture === '25-14' && $performance < 80) {
            switch (true) {
                case $performance < 60:
                    model = 120;
                    break;
                case $performance >= 60 && $performance < 80:
                    model = 140;
                    break;
            }
            $answer.html('Basic ' + model);

        } else if ($moisture === '25-14' && 80 <= $performance < 150) {
            switch (true) {
                case $performance >= 80 && $performance < 100:
                    model = 200;
                    break;
                case $performance >= 100 && $performance < 120:
                    model = 270;
                    break;
                case $performance >= 120 && $performance < 150:
                    model = 300;
                    break;
                case $performance >= 150 && $performance < 200:
                    model = 350;
                    break;
                case $performance >= 200 && $performance < 250:
                    model = 420;
                    break;
                case $performance >= 250 && $performance < 300:
                    model = 550;
                    break;
                case $performance >= 300:
                    model = 550;
                    break;
            }
            $answer.html('Large ' + model);

        } else if ($moisture === '25-14' && 150 <= $performance) {
            switch (true) {
                case $performance >= 150 && $performance < 200:
                    model = 350;
                    break;
                case $performance >= 200 && $performance < 250:
                    model = 420;
                    break;
                case $performance >= 250 && $performance < 300:
                    model = 550;
                    break;
                case $performance >= 300:
                    model = 550;
                    break;
            }
            $answer.html('XL ' + model);

        }  else if ($moisture === '30-14' && $performance < 60) {
            switch (true) {
                case $performance < 45:
                    model = 120;
                    break;
                case $performance >= 45 && $performance < 60:
                    model = 140;
                    break;
            }
            $answer.html('Basic ' + model);

        } else if ($moisture === '30-14' && 60 <= $performance < 115) {
            switch (true) {
                case $performance >= 60 && $performance < 70:
                    model = 200;
                    break;
                case $performance >= 70 && $performance < 90:
                    model = 270;
                    break;
                case $performance >= 90 && $performance < 115:
                    model = 270;
                    break;
            }
            $answer.html('Large ' + model);

        } else if ($moisture === '30-14' && 115 <= $performance) {
            switch (true) {
                case $performance >= 115 && $performance < 150:
                    model = 350;
                    break;
                case $performance >= 150 && $performance < 180:
                    model = 420;
                    break;
                case $performance >= 180 && $performance < 230:
                    model = 550;
                    break;
                case $performance >= 230:
                    model = 700;
                    break;
            }
            $answer.html('XL ' + model);
        }
    });

    //Рассчитываем стоимость сушки
    $('#calcForm').on('click', '.btn', function (event) {
        event.preventDefault();

        var $tons = parseInt($('[name="tons"]').val()),
            $prices_elevator = parseFloat($('[name="prices_elevator"]').val()),
            $diesel_price = parseFloat($('[name="diesel_price"]').val()),
            $gas_price = parseFloat($('[name="gas_price"]').val()),
            $pellet_price = parseFloat($('[name="pellet_price"]').val());

        var diesel_sum = $tons * $prices_elevator * 1.2 * $diesel_price,
            gas_sum = $tons * $prices_elevator * 1.4 * $gas_price,
            pellet_sum = $tons * $prices_elevator * 3 * $pellet_price;

        function addCommas(num) {
            var str = num.toString().split('.');
            if (str[0].length >= 4) {
                //add comma every 3 digits befor decimal
                str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
            }
            return str.join('.');
        }
        diesel_sum = addCommas(diesel_sum);

        $('.resultAnswer').html(
            '<p>На дизельном топливе ' + diesel_sum + ' грн</p>'
            + '<p>На газе ' + addCommas(gas_sum) + ' грн</p>'
            + '<p>На пеллетах ' + addCommas(pellet_sum) + ' грн</p>'
        )
    });

})(jQuery);

