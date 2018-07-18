;(function ($) {

    var date = new Date;

    var cookieLang = getCookie('lang') ? getCookie('lang') : 'rus';
    $('.lang span[data-lang=' + cookieLang + ']').addClass('active');


    // запуск показа модального окна на увод мышки вверх
    var alertwin = getCookie("alertwin");
    if (alertwin != "no") {
        $(document).mouseleave(function (e) {
            if (e.clientY < 0) {
                $('#modalLeave').modal('show');
                // записываем cookie на 1 день, с которой мы не показываем окно
                date.setDate(date.getDate() + 1);
                document.cookie = "alertwin=no; path=/; expires=" + date.toUTCString();
            }
        });
    }

    // записываем в куки выбранный язык
    $('.lang span').on('click', function () {
        date.setDate(date.getDate() + 365);
        document.cookie = 'lang=' + $(this).html() + '; path=/; expires=' + date.toUTCString();
        location.reload();
        return false;
    });
//подмена value у кнопки. Необхоимо для корректной отправки данных в CRM заказчика
    $(document).on('click', '.myBtn', function () {
        $('#modalOrder .button').attr('data-comment', $(this).attr('data-comment'));
    });

    $(document).on('click', '.ajaxForm .button', function (event) {
        event.preventDefault();
        var $this = $(this),
            $thisClosestForm = $this.closest('.ajaxForm');

        $thisClosestForm.find("[name='comment']").val($this.attr('data-comment'));
        // $this.find("input[name='comment']").val($this.find('.btn').attr('data-comment')); //присваиваем input type hidden value - иначе не пишется "Commentary": "#comment" в CRM
        var data = $thisClosestForm.serialize() + '&lang=' + cookieLang,
            name = $thisClosestForm.find("input[name='name']"),
            email = $thisClosestForm.find("input[name='email']"),
            phone = $thisClosestForm.find("input[name='phone']"),
            comment = $thisClosestForm.find("[name='comment']"),
            config = {
                fields: {
                    "Name": name, // Имя посетителя, заполнившего форму
                    "Email": email, // Email посетителя
                    "MobilePhone": phone, // Телефон посетителя
                    "Commentary": comment // Примечание
                },
                landingId: "570cfcd4-dc74-4602-8099-1bf016246fbe",
                serviceUrl: "https://farmmac.bpmonline.com/0/ServiceModel/GeneratedObjectWebFormService.svc/SaveWebFormObjectData",
                redirectUrl: ""
            };
        console.log(config);
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

        console.log(data);
        var $preloader = $('.preloader'),
            $modal = $('#modalError');
        $.ajax({
            url: $thisClosestForm.attr('action'),
            method: $thisClosestForm.attr('method'),
            data: data,
            dataType: 'json',
            beforeSend: function () {
                console.log('before send');
                $preloader.find('p').html('Отправка <span>.</span><span>.</span><span>.</span>');
                $preloader.css({opacity: 0, display: 'flex'}).animate({
                    opacity: 1
                }, 500);
            },
            success: function (response) {
                console.log(response);
                console.log(response.result);
                if (response) {
                    console.log("success");
                    $preloader.fadeOut(500);
                    $modal.find('.formTitle').html(response.message);
                    $modal.modal('show');
                } else {
                    $preloader.fadeOut(500);
                    $modal.find('.formTitle').html(response.message);
                    $modal.modal('show');
                    console.log("response-error");
                }
            },
            error: function () {
                $preloader.fadeOut(500);
                $modal.find('.formTitle').html('Произошла системная ошибка при отправке сообщения\\n Пожалуйста позвоните нам по телефону (050)40 444 70 или отправьте письмо на почту secretary@farmmac.com.ua');
                $modal.modal('show');
                console.log('Some error');
            }
        });
    });

    //Подбор модели зерносушилки

    $('.performance').keyup(function () {
        modelCalc();
    });

    $('.inputWrapper input[name="moisture"]').on('click', function () {
        modelCalc();
    });

    $('#askPerformance').on('click', function () {
        $('#modalOrder .button').attr('data-comment', $(this).attr('data-comment'));
        var $modelName = $(this).attr('data-comment');
        $('.modal-body .itemTitle').html($modelName);
    });

    // получаем Cookie, если не установлены, то по умолчанию undefined
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function modelCalc() {
        var model,
            $performance = parseInt($('.performance').val()),
            $moisture = $('[name="moisture"]:checked').val(),
            $answer = $('#resultTarget'),
            $comment = $('#askPerformance');

        /*if (isNaN($performance)) { //Проверяем выбрана ли мощность
            $answer.html('Выберите производительность');
        } else*/
        if ($moisture === '25-14' && $performance < 80) {
            switch (true) {
                case $performance < 60:
                    model = 120;
                    break;
                case $performance >= 60 && $performance < 80:
                    model = 140;
                    break;
            }
            $answer.html('Basic ' + model);
            $comment.attr('data-comment', 'Basic');

        } else if ($moisture === '25-14' && $performance >= 80 && $performance < 150) {
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
            $comment.attr('data-comment', 'Large');

        } else if ($moisture === '25-14' && $performance >= 150) {

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
            $comment.attr('data-comment', 'XL');

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
            $comment.attr('data-comment', 'Basic');

        } else if ($moisture === '30-14' && $performance >= 60 && $performance < 115) {
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
            $comment.attr('data-comment', 'Large');

        } else if ($moisture === '30-14' && $performance >= 115) {
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
            $comment.attr('data-comment', 'XL');
        }
    }


    //Рассчитываем стоимость сушки
    $('#calcForm').on('click', '.button', function (event) {
        event.preventDefault();

        var $tons = parseInt($('[name="tons"]').val()),
            $prices_elevator = parseFloat($('[name="prices_elevator"]').val()),
            $diesel_price = parseFloat($('[name="diesel_price"]').val()),
            $gas_price = parseFloat($('[name="gas_price"]').val()),
            $pellet_price = parseFloat($('[name="pellet_price"]').val()),
            $textParams = $('.calcResult');


        var diesel_sum = Math.round($tons * $prices_elevator * 1.2 * $diesel_price),
            gas_sum = Math.round($tons * $prices_elevator * 1.4 * $gas_price),
            pellet_sum = Math.round($tons * $prices_elevator * 3 * $pellet_price);

        function addSpace(num) {
            if (isNaN(num)) {
                num = 0;
            }
            var str = num.toString().split('.');
            if (str[0].length >= 4) {
                //add comma every 3 digits before decimal
                str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
            }
            return str.join('.');
        }

        $textParams.find('span.tons').html(addSpace($tons));
        $textParams.find('span.prices_elevator').html(addSpace($prices_elevator));

        $('.diesel_price').html(addSpace(diesel_sum) + ' грн');
        $('.gas_price').html(addSpace(gas_sum) + ' грн');
        $('.pellet_price').html(addSpace(pellet_sum) + ' грн');
    });

    /*Slick slider*/
    $('#slickSlider').slick({
        variableWidth: true,
        centerMode: true,
        slidesToShow: 1,
        arrows: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    /*Animation on scroll*/
    var a = 1;
    $(window).scroll(function () {
        //Animate falling pics in third section
        var $sec3 = $('.section3 .row').offset().top - window.innerHeight,
            $sec2 = $('.section2').offset().top - window.innerHeight;

        if ($(window).scrollTop() > $sec2 && a === 1 && $(window).width() >= 1006) {
            a++;
            $('.counter').each(function () {
                var $this = $(this),
                    value = $this.attr('data-count');
                $this.html(0);
                $this.numerator({
                    easing: 'swing', // easing options.
                    duration: 3000, // the length of the animation.
                    rounding: 0, // decimal places.
                    toValue: value // animate to this value.
                });
            });
        }
        if ($(window).scrollTop() > $sec3) {
            $('.whiteBg').css('display', 'none');
            $('.picBlock').addClass('picBlockAnim');
            $('.section3').css('z-index', 1);
        }
    });


    //Animating number only on desktop width
    /*$('.counter').each(function () {
        var $this = $(this),
            value = $this.html();
        if ($(window).width() >= 1006) {
            $this.html(0);
            $this.numerator({
                easing: 'swing', // easing options.
                duration: 3000, // the length of the animation.
                rounding: 0, // decimal places.
                toValue: value // animate to this value.
            });
        }
    });*/

    /*Changing + / - in accordion*/
    $('.card-header').on('click', '.btn', function () {
        var $this = $(this).find('span:last-of-type');
        if ($this.hasClass('plus')) {
            $('.card-header .btn').find('span:last-of-type').not($this).addClass('plus');
            $this.removeClass('plus');
        } else {
            $this.addClass('plus');
        }
    });


    /*adding model name to modal form*/
    $('.section5 .button').on('click', function () {
        var $this = $(this);
        $this.attr('data-modelname');
        console.log($this.attr('data-modelname'));
        $('.modal-body .itemTitle').html($this.attr('data-modelname'));
    });


    /*Call back*/
    var $upperForm = $('.upperMenu form');
    $('.orderCall').on('click', function (event) {
        event.preventDefault();
        $upperForm.toggle(200);
    });

    $(document).on('click', '.close', function () {
        $upperForm.hide(200);
    });


    var $upBtn = $(".upButton");
    $upBtn.hide();
    window.onscroll = function () {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
            $upBtn.show(300);
        } else {
            $upBtn.hide(300);
        }
    };

    $(document).on('click', '.upButton', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    })


})(jQuery);

