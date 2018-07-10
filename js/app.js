;(function ($) {
    var currentLocation = window.location.pathname;
    if (currentLocation.indexOf('ua') > -1) {
        console.log('Ваша мова українська');
    } else {
        console.log('your language is English');
    }

    $('.myBtn').on('click', function () {
        $('.modal-body .btn').attr('data-comment', $(this).attr('data-comment'));
    });

    $('.btn').removeAttr('disabled');
    $('.ajaxForm').on('submit', function (event) {
        event.preventDefault();
        var $this = $(this);
        $this.find('input[name=comment]').val($this.find('.btn').attr('data-comment')); //присваиваем input type hidden value - иначе не пишется "Commentary": "#comment" в CRM
        var data = $this.serialize(),
            config = {
                fields: {
                    "Name": "input[name=name]", // Имя посетителя, заполнившего форму
                    "Email": "input[name=email]", // Email посетителя
                    "MobilePhone": "input[name=phone]", // Телефон посетителя
                    "Commentary": "input[name=comment]" // Примечание
                },
                landingId: "570cfcd4-dc74-4602-8099-1bf016246fbe",
                serviceUrl: "https://farmmac.bpmonline.com/0/ServiceModel/GeneratedObjectWebFormService.svc/SaveWebFormObjectData",
                redirectUrl: ""
            };

        /**
         * Функция ниже создает объект из введенных данных.
         * Привяжите вызов этой функции к событию "onSubmit" формы или любому другому элементу события.
         * Пример: <form class="mainForm" name="landingForm" onSubmit="createObject(); return false">
         */

        // landing.createObjectFromLanding(config);

        /**
         * Функция ниже инициализирует лендинг из параметров URL.
         */
        function initLanding() {
            // landing.initLanding(config)
        }

        jQuery(document).ready(initLanding);

        $.ajax({
            url: $this.attr('action'),
            method: $this.attr('method'),
            data: data,
            dataType: 'json',
            beforeSend: function () {
                console.log("beforeSend");
            },
            success: function (response) {
                console.log("success");
                $('#texthere').html('Your name is ' + response.name +
                    '<br>' + 'Your mail is ' + response.email +
                    '<br>' + 'Your phone is ' + response.phone +
                    '<br>' + 'Your comment is ' + response.comment);
            },
            error: function () {
                console.log('Some error');
                alert('Ошибка отправки формы');
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

        } else if ($moisture === '30-14' && $performance < 60) {
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


    $('#slickSlider').slick({
        variableWidth: true,
        centerMode: true,
        slidesToShow: 1,
        arrows: true,
        infinite: true
    });

    $(window).scroll(function() {
        var oTop = $('.section2').offset().top - window.innerHeight;
        if ($(window).scrollTop() > oTop) {
            $('.count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({countNum: $this.text()}).animate({
                        countNum: countTo
                    },

                    {   duration: 800,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
            });
        }
    });

})(jQuery);
