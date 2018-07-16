<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FarmMak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/styles.min.css?v=1.2">
    <link rel="stylesheet" href="../css/style.css">
    <script>
        var date = new Date;
        date.setDate(date.getDate() + 365);
    </script>
</head>
<body>
<div class="whiteBg"></div>
<div class="upButton">
    <div class="arrow"></div>
</div>
<!--<h1>--><?php //echo LANG_TITLE ?><!--</h1>-->
<!--<div class="row">
    <div class="col-sm-1 col-sm-offset-10">
        <h5><a href="/"
               onclick="document.cookie = 'lang=eng; expires=' + date.toUTCString(); location.reload(); return false;"><?php /*echo LANG_ENG */?></a>
        </h5>
    </div>
    <div class="col-sm-1">
        <h5><a href="/"
               onclick="document.cookie = 'lang=ru; expires=' +  date.toUTCString(); location.reload(); return false;"><?php /*echo LANG_RUS */?></a>
        </h5>
    </div>
</div>-->

<!-- Modal -->
<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="ajaxForm" action="../process.php" method="post">
                    <h6 class="formTitle text-center">Узнайть технические характеристики модели</h6>
                    <p class="itemTitle">BASIC</p>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="tel" name="phone" placeholder="телефон" required>
                    <input type="email" name="email" placeholder="e - mail" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form">запросить</button>
                    <p class="underText">* -это бесплатно и ни к чему не обязывает </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal from map -->
<div class="modal fade" id="modalLook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="ajaxForm" action="../process.php" method="post">
                    <h6 class="formTitle text-center">Заполните форму, и мы вышле вам контакты
                        фермерских хозяйств, где работает наше оборудование</h6>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="tel" name="phone" placeholder="телефон" required>
                    <input type="email" name="email" placeholder="e - mail" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form">получить контакты</button>
                    <p class="underText">* -это бесплатно и ни к чему не обязывает </p>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid section1">
    <img class="light" src="../img/light.png" alt="light">
    <div class="container">
        <div class="upperMenu">
            <img class="logo" src="../img/logo.png" alt="logo">
            <p class="lang">
                <span>ukr</span>
                <span>rus</span>
            </p>
            <p class="phones">
                <span>(050) 404-44-70</span><br>
                <span>(096) 054-39-91</span>
            </p>
            <div class="button orderCall"><?= $langArray['rus']?></div>
            <form class="ajaxForm" action="../process.php" method="post">
                <p class="texthere"></p>
                <input type="text" name="name" placeholder="имя" required>
                <input type="tel" name="phone" placeholder="телефон" required>
                <input type="hidden" name="comment" value="Call me back">
                <button class="button callBack" data-comment="Call me back">заказать звонок</button>
                <span class="close">&times;</span>
            </form>
        </div>
        <h1>Мобильная зерносушилка<br>
            <span>Pedrotti</span>
        </h1>
        <div class="formBlock">
            <div class="titleWrapper">
                <p class="subTitle">Возврат инвестиций за один сезон</p>
            </div>
            <p class="smallerText">Повысьте доходность каждой собранной тонны зерна</p>
            <div class="blockWrapper">
                <form class="ajaxForm" action="../process.php" method="post">
                    <h6 class="formTitle text-center">Узнайте, как быстро окупить мобильную<br> зерносушилку, получив расчет окупаемости</h6>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="tel" name="phone" placeholder="телефон" required>
                    <input type="email" name="email" placeholder="e - mail" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form">получить расчет</button>
                    <p class="underText">* -это бесплатно и ни к чему не обязывает </p>
                </form>
            </div>
        </div>
    </div>
    <img class="mainImg" src="../img/maindrier.png" alt="drier">
</section>

<section class="container-fluid section2">
    <div class="container">
        <h6 class="sectionTitle text-center">несколько фактов о нас</h6>
        <div class="row col-row">
            <div class="col-md-2 col-item">
                <p class="redText"><span class="counterPeriod">0</span> <span class="addText">ЛЕТ</span></p>
                <p class="subText botText">на рынке Украины</p>
            </div>
            <div class="col-md-3 col-item">
                <p class="subText topText">продукция представлена в</p>
                <p class="redText"><span class="counterRegion">0</span> <span class="smallerText addText">РЕГИОНАХ</span>
                </p>
                <p class="subText botText">Украины</p>
            </div>
            <div class="col-md-2 col-item">
                <p class="redText"><span class="counterClient">0</span><span class="addText">+</span></p>
                <p class="subText botText">довольных клиентов</p>
            </div>
            <div class="col-md-2 col-item">
                <p class="subText topText">выпускается с</p>
                <p class="redText"><span class="counterYear">0</span></p>
                <p class="subText botText">Года</p>
            </div>
            <div class="col-md-3 col-item">
                <p class="subText topText">оборудование Pedrotti представлено в</p>
                <p class="redText"><span class="counterCountry">0</span> <span class="smallerText addText">СТРАНАХ</span>
                </p>
                <p class="subText botText">Мира</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section3">
    <div class="container">
        <h6 class="sectionTitle text-center">Зачем украинскому фермеру<br>
            мобильная зерносушилка Pedrotti</h6>
        <div class="row">
            <div class="col-md-3 picBlock text-left">
                <img src="../img/sec3Roundpic1.jpg" alt="pic1">
                <p class="underText">Сухое зерно стоит дороже, потому что перестает быть скоропортящимся продуктом,
                    который надо быстрее продать по низкой цене</p>
            </div>
            <div class="col-md-4 offset-md-1 picBlock">
                <img src="../img/sec3Roundpic2.jpg" alt="pic2">
                <p class="underText">Сухое зерно лучше хранится, поэтому Вы можете дождаться самой выгодной цены для
                    продажи</p>
            </div>
            <div class="col-md-3 offset-md-1 picBlock text-right">
                <img src="../img/sec3Roundpic3.jpg" alt="pic3">
                <p class="underText">Вы не зависите от элеватора и сушите зерно сами тогда, когда вам это нужно, а не
                    когда подошла очередь
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-2 picBlock">
                <img src="../img/sec3Roundpic4.jpg" alt="pic4">
                <p class="underText">Вы снижаете себестоимость, избавляя себя от лишних расходов на транспортировку и
                    сушку на элеваторе</p>
            </div>
            <div class="col-md-3 offset-md-2 picBlock">
                <img src="../img/sec3Roundpic5.jpg" alt="pic5">
                <p class="underText">Вы управляете качеством своего зерна и прибылью, которую хотите получить</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4 picBlock">
                <img src="../img/sec3Roundpic6.jpg" alt="pic6">
                <p class="underText">Мобильная зерносушилка, в отличие от элеватора, не обманет Вас на влаге, сорности,
                    качестве</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section4">
    <div class="container">
        <h6 class="sectionTitle text-center">В чем главные преимущества<br>
            мобильной зерносушилки Pedrotti</h6>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/gearicon.jpg" alt="gear">
            </div>
            <div class="col-md-3 textItem">
                <p>Простая и надежная конструкция, которая помогает Вам зарабатывать больше</p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/pointericon.jpg" alt="pointer">
            </div>
            <div class="col-md-3 textItem">
                <p>Не нужно разрешительных документаций от государственных органов на установку и эксплуатацию
                    зерносушилки</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/puzzleicon.jpg" alt="puzzle">
            </div>
            <div class="col-md-3 textItem">
                <p>Подбор серии и комплектации под потребности Вашей компании</p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/forkicon.jpg" alt="fork">
            </div>
            <div class="col-md-3 textItem">
                <p>Помогает Вам стать энергетически независимым, потому что Вы сами выбираете топливо для работы
                    зерносушилкизерносушилки</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/planticon.jpg" alt="plant">
            </div>
            <div class="col-md-3 textItem">
                <p>Можно сушить зерновые и масличные культуры</p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/moneyicon.jpg" alt="money">
            </div>
            <div class="col-md-3 textItem">
                <p>Вы грамотно распоряжаетесь урожаем, продавая его по самым выгодным ценам</p>
            </div>
        </div>
        <div class="lineContainer">
            <h4 class="text-center">Если у Вас от 300 га кукурузы и влага 25 % и больше,<br>
                мобильная зерносушилка Pedrotti окупит себя за<br>
                 1 сезон и дальше будет работать только в плюс</h4>
        </div>
    </div>
</section>

<section class="container-fluid section5">
    <div class="container">
        <h6 class="sectionTitle text-center">ТОП 3 серии зерносушилок Pedrotti</h6>
        <div class="topRow">
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle">BASIC</p>
                </div>
                <img src="../img/basicimg.jpg" alt="basic">
                <div class="description">
                    <p class="techName">Объём бункера:</p>
                    <p class="techText">12 -19 м3 (9-14 тонн)</p>
                    <p class="subNme">Кукуруза</p>
                    <p class="techText">(25% -14%) 40-60тонн/сутки</p>
                    <p class="subNme">Пшеница</p>
                    <p class="techText">(20%-15%) 50 - 90 тонн/сутки</p>
                    <p class="subNme">Подсолнух</p>
                    <p class="techText">(14%-8%) 35 - 50 тонн/сутки</p>
                    <p class="techName text-center">Идеальное решение для небольших хозяйств</p>
                </div>
            </div>
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle">LARGE</p>
                </div>
                <img src="../img/largeimg.jpg" alt="large">
                <div class="description">
                    <p class="techName">Объём бункера:</p>
                    <p class="techText">26-40м3 (18 - 30 тонн)</p>
                    <p class="subNme">Кукуруза</p>
                    <p class="techText">(25% -14%) 70-120 тонн/сутки</p>
                    <p class="subNme">Пшеница</p>
                    <p class="techText">(20%-15%) 130-195 тонн/сутки</p>
                    <p class="subNme">Подсолнух</p>
                    <p class="techText">(14%-8%) 90-120 тонн/сутки</p>
                    <p class="techName text-center">Самая популярная серия</p>
                </div>
            </div>
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle">XL</p>
                </div>
                <img src="../img/xlimg.jpg" alt="xl">
                <div class="description">
                    <p class="techName">Объём бункера:</p>
                    <p class="techText">50-93м3 (35 - 70 тонн)</p>
                    <p class="subNme">Кукуруза</p>
                    <p class="techText">(25% -14%) 150-300 тонн/сутки</p>
                    <p class="subNme">Пшеница</p>
                    <p class="techText">(20%-15%) 210-400 тонн/сутки</p>
                    <p class="subNme">Подсолнух</p>
                    <p class="techText">(14%-8%) 130-220 тонн/сутки</p>
                    <p class="techName text-center">Серия с высокой рентабельностью</p>
                </div>
            </div>
        </div>
        <h5>запросить тенические характеристики</h5>
        <div class="topRow">

            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="BASIC" data-comment="Basic">для моделей BASIC</button>
            </div>
            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="LARGE" data-comment="Large">для моделей LARGE</button>
            </div>
            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="XL" data-comment="XL">для моделей XL</button>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section6">
    <div class="container">
        <h6 class="sectionTitle text-center">калькулятор</h6>
        <div class="row">
            <div class="col-md-12 calcWrapper">
                <h5 class="calcTitle">подбор зерносушилки</h5>
                <form id="selectionForm" action="">
                    <div class="form-line">
                        <p class="paramName">снятие влаги</p>
                        <div class="inputWrapper">
                            <label>
                                25%-14%
                                <input class="hiddenInput" type="radio" name="moisture" value="25-14" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                30%-14%
                                <input class="hiddenInput" type="radio" name="moisture" value="30-14">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-line">
                        <p class="paramName">производительность</p>
                        <div class="inputWrapper">
                            <input class="performance" type="number" value="50">
                        </div>
                    </div>
                    <hr>
                </form>
                <p class="answer text-center">С Вашей производительностью Вам подойдет серия:</p>
                <p id="resultTarget" class="result">BASIC 120</p>
                <button id="askPerformance" class="button" data-toggle="modal" data-target="#modalOrder" data-comment="Basic">запросить характиристики</button>
                <p class="answer text-center smallNote">* - с учётом кукурузы</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 calcWrapper">
                <h5 class="calcTitle">стоимость сушки на разных видах топлива</h5>
                <form id="calcForm" action="">
                    <div class="form-line noPadding">
                        <p class="paramName paramWide">количество тонн за сезон</p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="tons" value="3000">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide">сколько снимать за 1 тонну</p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="prices_elevator" value="10">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide">стоимость 1 л<br>
                            дизельного топлива <span>(1,2 л/т% влаги)</span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="diesel_price" value="27">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide">стоимость 1 л газа <span>(1,4 л/т% влаги)</span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="gas_price" value="12.5">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide">стоимость 1 л пеллет <span></span>(3 кг/т% влаги)</span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="pellet_price" value="1.6">
                        </div>
                    </div>
                    <button class="button">рассчитать</button>
                    <p class="calcResult">Для сушки <span class="tons">3000</span> тонн зерна со снятием <span
                                class="prices_elevator">10</span> т/% влаги затраты на топливо составят:</p>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName">на дизельном топливе</p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult diesel_price">972 000 грн</p>
                        </div>
                    </div>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName">на газе</p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult gas_price">525 000 грн</p>
                        </div>
                    </div>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName">на пеллетах</p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult pellet_price">144 000 грн</p>
                        </div>
                    </div>
                    <hr>
                </form>
                <p class="answer text-center">Рассмотрите предложение о самом выгодном виде топлива:</p>
                <p class="subAnswer text-center">зерносушилка + твердотопливный теплогенератор</p>
                <button class="button">рассмотреть</button>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section7">
    <div class="container">
        <h5 class="sectionTitle text-center">главные особенности зерносушилки pedrotti</h5>
        <div class="row">
            <div class="col-md-6 specBlock">
                <p class="specialty">Есть разные комплектации, поэтому можно решить задачу любой сложности</p>
                <p class="specialty">Простой и надежный привод</p>
                <p class="specialty">На каждый механизм свой электрический двигатель</p>
                <p class="specialty">Центральное расположение шнека — удобная и выгодная конструкция</p>
                <p class="specialty">Центральное расположение шнека — удобная и выгодная конструкция</p>
                <p class="specialty">Есть комплектации с теплообменником или прямым воздухом</p>
                <p class="specialty">Множество вариантов организации приема зерна</p>
            </div>
            <div class="col-md-6 specBlock">
                <p class="specialty">3 вида систем управления и безопасности</p>
                <p class="specialty">Полностью мобильна — не нужны строительные работы для установки </p>
                <p class="specialty">Адаптируется к любым очистным системам и зернохранилищам</p>
                <p class="specialty">Центральное расположение шнека — удобная и выгодная конструкция</p>
                <p class="specialty">Можно запускать через 3 дня после поставки</p>
                <p class="specialty">Работает на разных видах топлива: газ, дизель, биотопливо</p>
            </div>
        </div>
    </div>
    <img class="bgImg" src="../img/sec7bgpic.jpg" alt="bg">
</section>

<section class="container-fluid section8">
    <div class="container">
        <h5 class="sectionTitle text-center">Доверьте нам доставку и монтаж Вашей зерносушилки</h5>
        <div class="iconRow clearfix">
            <div class="iconItem">
                <p class="iconCaption topPosition">Полностью сопровождаем<br>
                    клиента от консультации до<br>
                    постгарантийного обслуживания</p>
                <img src="../img/headphones.jpg" alt="headphones">
            </div>
            <div class="iconItem">
                <img src="../img/phone.jpg" alt="phone">
                <p class="iconCaption topPosition">Всегда на связи — 24/7</p>
            </div>
            <div class="iconItem">
                <p class="iconCaption sidePull">Визит сервис - менеджера в<br>
                    течение 24 часов с момента<br> подачи заявки (в период сбора урожая)</p>
                <img src="../img/tools.jpg" alt="tools">
            </div>
        </div>

        <div class="iconRow clearfix">
            <div class="iconItem">
                <p class="iconCaption sidePull">Мы даем честную гарантию 12<br>
                    мес: выезд, запчасть, работа -<br>
                    бесплатно
                </p>
                <img src="../img/star.jpg" alt="star">
            </div>
            <div class="iconItem">
                <img src="../img/book.jpg" alt="book">
                <p class="iconCaption sidePull">Ведем учет проданного<br>
                    оборудования по сервисному<br>
                    регламенту
                </p>
            </div>
            <div class="iconItem">
                <img src="../img/info.jpg" alt="info">
                <p class="iconCaption">Сфокусированы на одном<br>
                    продукте, поэтому знаем<br>
                    его ОТ и ДО</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section9">
    <h5 class="sectionTitle text-center">В этом уже убедились более<br>
        100 фермеров из 15 регионов Украины
    </h5>
    <div id="slickSlider">
        <div class="sliderItem">
            <img src="../img/custumer1.jpg" alt="custumer1">
            <p class="reply">“Работаем на Pedrotti 4-й<br>
                сезон, вопросов нет -<br>
                довольны!”</p>
            <p class="name">Сергей Иванович</p>
            <p class="address">с. Вязовок, Черкасская обл.</p>
        </div>
        <div class="sliderItem">
            <img src="../img/custumer2.jpg" alt="custumer2">
            <p class="reply">"Сушим себе сами с 2013<br>
                года! Нравится в работе и по<br>
                сервису ребята не подводили."</p>
            <p class="name">Александр</p>
            <p class="address">с. Алексеевка, Сумская обл.</p>
        </div>
        <div class="sliderItem">
            <img src="../img/custumer3.jpg" alt="custumer3">
            <p class="reply">"Ярослав молодець, все<br>
                працює, як і обіцяли.<br>
                Плануємо подальшу співпрацю."</p>
            <p class="name">Герасименко Валентина Миколаївна</p>
            <p class="address">с. Вязовок, Черкасская обл.</p>
        </div>
    </div>
</section>

<section class="container-fluid section10">
    <div class="container">
        <h5 class="sectionTitle text-center">На карте мы отметили населенные пункты,<br>
            где расположены наши объекты</h5>


        <div id="map_ua">
            <img src="../css/ajax-loader.gif" id="loader" alt="loader">
        </div>

        <div class="row" style="display: none">

            <span id="m31_wrapper_UQnijxw7ecZ" class="m31_encr_wrapper">
                        <span id="m31_cyphertext_UQnijxw7ecZ" class="m31_encr_item">caefaef600f3f4cbb0fbeff7fa02fdc8f8ef00fd01faef04cef4ef00fbfbeff1bcf1fdfbbc03efb0ccf8ef00fd01faef04cef4ef00fbfbeff1bcf1fdfbbc03efcabdefcc</span>
                        <span id="m31_token_UQnijxw7ecZ" class="m31_encr_item">91HmUzkbNLaUbnx6sYrAvTn44MAMbgB</span>
                        <span id="m31_algorithm_UQnijxw7ecZ" class="m31_encr_item">caesar</span></span>

            <span id="m31_wrapper_RpRsTL5R0Vw4" class="m31_encr_wrapper">
                        <span id="m31_cyphertext_RpRsTL5R0Vw4" class="m31_encr_item">3156155d675a5b321762565e6169642f5e5d6467355b56676262565823586462236a5617335e5d6467355b56676262565823586462236a5631245633</span>
                        <span id="m31_token_RpRsTL5R0Vw4" class="m31_encr_item">8psyu4cB0uLZhPRCyYFbpIH8AQ3oszu2</span>
                        <span id="m31_algorithm_RpRsTL5R0Vw4" class="m31_encr_item">caesar</span></span>

            <span id="m31_wrapper_vEx6APgfSu2d" class="m31_encr_wrapper">
                        <span id="m31_cyphertext_vEx6APgfSu2d" class="m31_encr_item">5b803f879184855c418c80888b938e598f80958b8e5f8580918c8c80824d828e8c4d9480415d8f80958b8e5f8580918c8c80824d828e8c4d94805b4e805d</span>
                        <span id="m31_token_vEx6APgfSu2d" class="m31_encr_item">Az93LEUISJXuSIZsaF4zuGJcAA1Ru6W1</span>
                        <span id="m31_algorithm_vEx6APgfSu2d" class="m31_encr_item">caesar</span></span>

        </div>

        <div class="row" style="display:none;">
            <div class="col-12">
                <div class="card">
                    <div id="gmap" class="card-img-bottom embed-responsive embed-responsive-16by9"> </div>
                </div>
            </div>
        </div>
        <h4 class="subTitle text-center">Вы можете приехать в любой из них и лично убедиться, как<br>
            работает мобильная зерносушилка. Заполните форму и мы<br> отправим Вам контакты  фермерских хозяйств</h4>
        <button class="lookButton" data-toggle="modal" data-target="#modalLook" data-comment="Look">хотим посмотреть</button>
    </div>
</section>

<section class="container-fluid section11">
    <div class="container">
        <h5 class="sectionTitle text-center">Сейчас еще выгоднее!<br>
            Покупая зерносушилку до 30.08.2018 Вы получаете в подарок<br>
            портативный влагомер
        </h5>
        <div class="col-md-6 offset-md-3 formBlock">
            <form id="sendForm" action="">
                <h6 class="formTitle text-center">Узнайте какая зерносушилка будет для Вас самая прибыльная<br>
                    и окупаемая, заказав расчет окупаемости</h6>
                <input type="text" name="name" placeholder="Имя">
                <input type="tel" name="phone" placeholder="телефон">
                <input type="email" name="email" placeholder="e - mail">
                <button class="button">получить расчет</button>
            </form>
        </div>
    </div>
</section>

<section class="container-fluid section12">
    <div class="container">
        <h5 class="sectionTitle text-center">Ответы на вопросы, которые часто задают нам клиенты</h5>

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            <span>1. В чем главные преимущества мобильных зерносушилок Pedrotti?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            <span>2. Какие культуры можно сушить зерносушилками Pedrotti?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            <span>3. Какие сроки поставки и монтажа зерносушилки?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                            <span>4. Сколько зерносушилка потребляет электроэнергии?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                            <span>5. Какой расход топлива (дизельное топливо, газ)?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                            <span>6. Продукт какой максимальной влажности можно сушить?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                            <span>7. Возможно ли сушка семенного материала?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, minus!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                            <span>8. Какой срок гарантии на зерносушилки Фрателли Педротти?</span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body">
                        Гарантийное обслуживание зерносушилки составляет 12 месяцев со дня ввода в эксплуатацию. Честная
                        гарантия: выезд, замена, запуск - бесплатно. При подписании договора на техническое обслуживание
                        срок гарантии составляет до 3 лет, при прохождении ежегодного ТО.
                    </div>
                </div>
            </div>
        </div>
        <h6 class="subTitle text-center">Не нашли ответа на свой вопрос? Задайте его нашему менеджеру.<br>
            Он ответит Вам в течение 24 часов.</h6>
        <div class="col-md-6 offset-md-3 formBlock">
            <form id="sendForm2" action="">
                <input type="text" name="name" placeholder="Имя">
                <input type="tel" name="phone" placeholder="телефон">
                <input type="email" name="email" placeholder="e - mail">
                <button class="button">получить расчет</button>
            </form>
        </div>
    </div>
</section>

<section class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footContainer">
                <h6 class="footTitle">Главный офис</h6>
                <p class="address">
                    ул. Лавандовая, 27-б,<br>
                    офис 14<br>
                    г. Кропивницкий<br>
                    25030, Украина
                </p>
                <p class="phone">
                    (050) 40 444 70<br>
                    (096) 054 39 91
                </p>
                <p class="email">secretary@farmmac.com.ua<br><br>
                    http://farmmac.com.ua
                </p>
            </div>
        </div>
    </div>
</section>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?v=3.exp&key=AIzaSyCBezf_3Ccazeqo2Su_sLXJtIhvtjzu6nE"></script>
<script type="text/javascript" src="../js/script.js?v=1.21"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/jquery-numerator.js"></script>
<script src="../js/app.js"></script>

</body>
</html>