<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестуемо аякс</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- load bootstrap via CDN -->
</head>
<body>
<div class="row">
    <div class="col-sm-1 col-sm-offset-10">
        <h5><a href="/">ENG</a></h5>
    </div>
    <div class="col-sm-1">
        <h5><a href="/ua">UA</a></h5>
    </div>
</div>
<style>
    h5 {
        cursor: pointer;
    }
</style>
<div class="col-sm-6 col-sm-offset-3">

    <h1>Тест відправки форми</h1>

    <!-- OUR FORM -->
    <form id="ajaxForm" method="post" action="process.php">
        <!-- NAME -->
        <div id="name-group" class="form-group">
            <h4>Ім'я</h4>
            <input id="name" type="text" class="form-control" name="name" placeholder="Ваше ім'я">
            <!-- errors will go here -->
        </div>
        <!-- EMAIL -->
        <div id="email-group" class="form-group">
            <h4>Пошта</h4>
            <input id="email" type="email" class="form-control" name="email" placeholder="Ваша пошта">
            <!-- errors will go here -->
        </div>

        <!-- PHONE -->
        <div id="phone-group" class="form-group">
            <h4>Номер телефону</h4>
            <input id="phone" type="tel" class="form-control" name="phone" placeholder="Ваш телефон">
            <!-- errors will go here -->

        </div>
        <div id="comment-group" class="form-group">
            <h4>comment</h4>
            <input id="comment" type="text" value="Заявка с формы №1" class="form-control hidden" name="comment">
            <!--errors will go here-->
        </div>

        <button class="btn btn-success" disabled>НАДІСЛАТИ<span class="fa fa-arrow-right"></span></button>

    </form>
    <div id="texthere">Going to be updated when button is clicked</div>
    <hr>
    <img src="../screencapture-bestgiftformen-ru-1515401620722.png" alt="big picture">
    <!--<h1>Calculation test</h1>-->

    <!--<form id="selectionForm" action="">-->
    <!--<div class="form-group">-->
    <!--<h4>Снятие влаги</h4>-->
    <!--<input type="radio" name="moisture" value="25-14" checked>25%-14%-->
    <!--<input type="radio" name="moisture" value="30-14">30%-14%-->
    <!--</div>-->
    <!--<div class="form-group">-->
    <!--<h4>Производительность</h4>-->
    <!--<select class="performance">-->
    <!--<option value="" disabled selected>Выбирите</option>-->
    <!--<option value="35">35</option>-->
    <!--<option value="45">45</option>-->
    <!--<option value="50">50</option>-->
    <!--<option value="60">60</option>-->
    <!--<option value="70">70</option>-->
    <!--<option value="80">80</option>-->
    <!--<option value="90">90</option>-->
    <!--<option value="100">100</option>-->
    <!--<option value="115">115</option>-->
    <!--<option value="120">120</option>-->
    <!--<option value="150">150</option>-->
    <!--<option value="180">180</option>-->
    <!--<option value="200">200</option>-->
    <!--<option value="230">230</option>-->
    <!--<option value="250">250</option>-->
    <!--<option value="300">300</option>-->
    <!--</select>-->
    <!--</div>-->
    <!--<button class="btn btn-success">ПОЛУЧИТЬ ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ<span class="fa fa-arrow-right"></span></button>-->
    <!--<div class="modelAnswer jumbotron text-center"></div>-->
    <!--</form>-->

    <!--<hr>-->

    <!--<form id="calcForm" action="" method="POST">-->

    <!--<div class="form-group">-->
    <!--<h4>Количество тонн за сезон:</h4>-->
    <!--<input type="number" class="form-control" step="100" name="tons" value="3000" min="0">-->
    <!--</div>-->

    <!--<div class="form-group">-->
    <!--<h4>Сколько снимать т% на 1 тонну</h4>-->
    <!--<input type="number" class="form-control" name="prices_elevator" value="10" min="0">-->
    <!--</div>-->

    <!--<div class="form-group">-->
    <!--<h4>Стоимость 1л дизельного топлива (1,2л/т% влаги)</h4>-->
    <!--<input type="number" class="form-control" name="diesel_price" value="27" min="0">-->
    <!--</div>-->

    <!--<div class="form-group">-->
    <!--<h4>Стоимость 1л газа (1,4л/т% влаги)</h4>-->
    <!--<input type="number" class="form-control" name="gas_price" value="12.5" min="0">-->
    <!--</div>-->

    <!--<div class="form-group">-->
    <!--<h4>Стоимость 1кг пеллет (3кг/т% влаги)</h4>-->
    <!--<input type="number" class="form-control" name="pellet_price" value="1.6" min="0">-->
    <!--</div>-->

    <!--<button class="btn btn-success">РАССЧИТАТЬ<span class="fa fa-arrow-right"></span></button>-->
    <!--<div class="resultAnswer jumbotron text-center"></div>-->
    <!--</form>-->
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://webtracking-v01.bpmonline.com/JS/track-cookies.js"></script>
<script src="https://webtracking-v01.bpmonline.com/JS/create-object.js"></script>

<script src="../app.js"></script>
</body>
</html>
