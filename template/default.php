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
</head>
<body>
<div class="whiteBg"></div>
<div class="upButton">
    <div class="arrow"></div>
</div>
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
                    <h6 class="formTitle text-center"><?= $lang['form']['characteristicFormTitle']?></h6>
                    <p class="itemTitle">BASIC</p>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="<?= $lang['form']['placeholderName']?>" required>
                    <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>" required>
                    <input type="email" name="email" placeholder="<?= $lang['form']['placeholderEmail']?>" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form"><?= $lang['form']['characteristicFormButton']?></button>
                    <p class="underText"><?= $lang['form']['underText']?></p>
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
                    <h6 class="formTitle text-center"><?= $lang['form']['mapFormTitle']?></h6>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="<?= $lang['form']['placeholderName']?>" required>
                    <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>" required>
                    <input type="email" name="email" placeholder="<?= $lang['form']['placeholderEmail']?>" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form"><?= $lang['form']['mapFormButton']?></button>
                    <p class="underText"><?= $lang['form']['underText']?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- первый экран -->
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
            <div class="button orderCall"><?= $lang['section1']['orderCall']?></div>
            <form class="ajaxForm" action="../process.php" method="post">
                <p class="texthere"></p>
                <input type="text" name="name" placeholder="<?= $lang['form']['placeholderName']?>" required>
                <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>" required>
                <input type="hidden" name="comment" value="Call me back">
                <button class="button callBack" data-comment="Call me back"><?= $lang['form']['orderCall']?></button>
                <span class="close">&times;</span>
            </form>
        </div>
        <h1><?= $lang['section1']['orderCall']?><br>
            <span><?= $lang['section1']['BrandName']?></span>
        </h1>
        <div class="formBlock">
            <div class="titleWrapper">
                <p class="subTitle"><?= $lang['section1']['subTitle']?></p>
            </div>
            <p class="smallerText"><?= $lang['section1']['smallerText']?></p>
            <div class="blockWrapper">
                <form class="ajaxForm" action="../process.php" method="post">
                    <h6 class="formTitle text-center"><?= $lang['form']['mainFormTitle']?></h6>
                    <p class="texthere"></p>
                    <input type="text" name="name" placeholder="<?= $lang['form']['placeholderName']?>" required>
                    <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>" required>
                    <input type="email" name="email" placeholder="<?= $lang['form']['placeholderEmail']?>" required>
                    <input hidden type="text" name="comment" value="">
                    <button class="button" data-comment="init_form"><?= $lang['form']['mainFormButton']?></button>
                    <p class="underText"><?= $lang['form']['underText']?></p>
                </form>
            </div>
        </div>
    </div>
    <img class="mainImg" src="../img/maindrier.png" alt="drier">
</section>
<!-- первый экран -->

<!-- несколько фактов о нас -->
<section class="container-fluid section2">
    <div class="container">
        <h6 class="sectionTitle text-center"><?= $lang['section2']['title']?></h6>
        <div class="row col-row">
            <div class="col-md-2 col-item">
                <p class="redText"><span class="counterPeriod">0</span> <span class="addText"><?= $lang['section2']['counterPeriod']?></span></p>
                <p class="subText botText"><?= $lang['section2']['counterPeriodBottomText']?></p>
            </div>
            <div class="col-md-3 col-item">
                <p class="subText topText"><?= $lang['section2']['counterRegionTopText']?></p>
                <p class="redText"><span class="counterRegion">0</span> <span class="smallerText addText"><?= $lang['section2']['counterRegion']?></span>
                </p>
                <p class="subText botText"><?= $lang['section2']['counterRegionBottomText']?></p>
            </div>
            <div class="col-md-2 col-item">
                <p class="redText"><span class="counterClient">0</span><span class="addText">+</span></p>
                <p class="subText botText"><?= $lang['section2']['counterClientBottomText']?></p>
            </div>
            <div class="col-md-2 col-item">
                <p class="subText topText"><?= $lang['section2']['counterYearTopText']?></p>
                <p class="redText"><span class="counterYear">0</span></p>
                <p class="subText botText"><?= $lang['section2']['counterYearBottomText']?></p>
            </div>
            <div class="col-md-3 col-item">
                <p class="subText topText"><?= $lang['section2']['counterCountryTopText']?></p>
                <p class="redText"><span class="counterCountry">0</span> <span class="smallerText addText"><?= $lang['section2']['counterCountry']?></span>
                </p>
                <p class="subText botText"><?= $lang['section2']['counterCountryBottomText']?></p>
            </div>
        </div>
    </div>
</section>
<!-- несколько фактов о нас -->

<!-- Зачем фермеру зерносушилка -->
<section class="container-fluid section3">
    <div class="container">
        <h6 class="sectionTitle text-center"><?= $lang['section3']['title']?></h6>
        <div class="row">
            <div class="col-md-3 picBlock text-left">
                <img src="../img/sec3Roundpic1.jpg" alt="pic1">
                <p class="underText"><?= $lang['section3']['item1']?></p>
            </div>
            <div class="col-md-4 offset-md-1 picBlock">
                <img src="../img/sec3Roundpic2.jpg" alt="pic2">
                <p class="underText"><?= $lang['section3']['item2']?></p>
            </div>
            <div class="col-md-3 offset-md-1 picBlock text-right">
                <img src="../img/sec3Roundpic3.jpg" alt="pic3">
                <p class="underText"><?= $lang['section3']['item3']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 offset-md-2 picBlock">
                <img src="../img/sec3Roundpic4.jpg" alt="pic4">
                <p class="underText"><?= $lang['section3']['item4']?></p>
            </div>
            <div class="col-md-3 offset-md-2 picBlock">
                <img src="../img/sec3Roundpic5.jpg" alt="pic5">
                <p class="underText"><?= $lang['section3']['item5']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4 picBlock">
                <img src="../img/sec3Roundpic6.jpg" alt="pic6">
                <p class="underText"><?= $lang['section3']['item6']?></p>
            </div>
        </div>
    </div>
</section>
<!-- Зачем фермеру зерносушилка -->

<!-- главные преимущества -->
<section class="container-fluid section4">
    <div class="container">
        <h6 class="sectionTitle text-center"><?= $lang['section4']['title']?></h6>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/gearicon.jpg" alt="gear">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item1']?></p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/pointericon.jpg" alt="pointer">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item2']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/puzzleicon.jpg" alt="puzzle">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item3']?></p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/forkicon.jpg" alt="fork">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item4']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 picItem text-center">
                <img src="../img/planticon.jpg" alt="plant">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item5']?></p>
            </div>
            <div class="col-md-2 offset-md-2 picItem">
                <img src="../img/moneyicon.jpg" alt="money">
            </div>
            <div class="col-md-3 textItem">
                <p><?= $lang['section4']['item6']?></p>
            </div>
        </div>
        <div class="lineContainer">
            <h4 class="text-center"><?= $lang['section4']['condition']?></h4>
        </div>
    </div>
</section>
<!-- главные преимущества -->

<!-- 3 серии зерносушилок -->
<section class="container-fluid section5">
    <div class="container">
        <h6 class="sectionTitle text-center"><?= $lang['section5']['title']?></h6>
        <div class="topRow">
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle"><?= $lang['section5']['basic']['title']?></p>
                </div>
                <img src="../img/basicimg.jpg" alt="basic">
                <div class="description">
                    <p class="techName"><?= $lang['section5']['basic']['volume']?></p>
                    <p class="techText"><?= $lang['section5']['basic']['volumeText']?></p>
                    <p class="subNme"><?= $lang['section5']['basic']['corn']?></p>
                    <p class="techText"><?= $lang['section5']['basic']['cornText']?></p>
                    <p class="subNme"><?= $lang['section5']['basic']['wheat']?></p>
                    <p class="techText"><?= $lang['section5']['basic']['wheatText']?></p>
                    <p class="subNme"><?= $lang['section5']['basic']['sunflower']?></p>
                    <p class="techText"><?= $lang['section5']['basic']['sunflowerText']?></p>
                    <p class="techName text-center"><?= $lang['section5']['basic']['advice']?></p>
                </div>
            </div>
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle"><?= $lang['section5']['large']['title']?></p>
                </div>
                <img src="../img/largeimg.jpg" alt="large">
                <div class="description">
                    <p class="techName"><?= $lang['section5']['large']['volume']?></p>
                    <p class="techText"><?= $lang['section5']['large']['volumeText']?></p>
                    <p class="subNme"><?= $lang['section5']['large']['corn']?></p>
                    <p class="techText"><?= $lang['section5']['large']['cornText']?></p>
                    <p class="subNme"><?= $lang['section5']['large']['wheat']?></p>
                    <p class="techText"><?= $lang['section5']['large']['wheatText']?></p>
                    <p class="subNme"><?= $lang['section5']['large']['sunflower']?></p>
                    <p class="techText"><?= $lang['section5']['large']['sunflowerText']?></p>
                    <p class="techName text-center"><?= $lang['section5']['large']['advice']?></p>
                </div>
            </div>
            <div class="topItem">
                <div class="titleWrapper">
                    <p class="itemTitle"><?= $lang['section5']['xl']['title']?></p>
                </div>
                <img src="../img/xlimg.jpg" alt="xl">
                <div class="description">
                    <p class="techName"><?= $lang['section5']['xl']['volume']?></p>
                    <p class="techText"><?= $lang['section5']['xl']['volumeText']?></p>
                    <p class="subNme"><?= $lang['section5']['xl']['corn']?></p>
                    <p class="techText"><?= $lang['section5']['xl']['cornText']?></p>
                    <p class="subNme"><?= $lang['section5']['xl']['wheat']?></p>
                    <p class="techText"><?= $lang['section5']['xl']['wheatText']?></p>
                    <p class="subNme"><?= $lang['section5']['xl']['sunflower']?></p>
                    <p class="techText"><?= $lang['section5']['xl']['sunflowerText']?></p>
                    <p class="techName text-center"><?= $lang['section5']['xl']['advice']?></p>
                </div>
            </div>
        </div>
        <h5><?= $lang['section5']['getCharacteristic']?></h5>
        <div class="topRow">

            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="BASIC" data-comment="Basic"><?= $lang['section5']['basic']['button']?></button>
            </div>
            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="LARGE" data-comment="Large"><?= $lang['section5']['large']['button']?></button>
            </div>
            <div class="topItem">
                <button class="button myBtn" data-toggle="modal" data-target="#modalOrder" data-modelname="XL" data-comment="XL"><?= $lang['section5']['xl']['button']?></button>
            </div>
        </div>
    </div>
</section>
<!-- 3 серии зерносушилок -->

<!-- калькулятор -->
<section class="container-fluid section6">
    <div class="container">
        <h6 class="sectionTitle text-center"><?= $lang['section6']['title']?></h6>
        <div class="row">
            <div class="col-md-12 calcWrapper">
                <h5 class="calcTitle"><?= $lang['section6']['calc1']['calcTitle']?></h5>
                <form id="selectionForm" action="">
                    <div class="form-line">
                        <p class="paramName"><?= $lang['section6']['calc1']['removeMoisture']?></p>
                        <div class="inputWrapper">
                            <label>
                                <?= $lang['section6']['calc1']['25-14']?>
                                <input class="hiddenInput" type="radio" name="moisture" value="25-14" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <?= $lang['section6']['calc1']['30-14']?>
                                <input class="hiddenInput" type="radio" name="moisture" value="30-14">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-line">
                        <p class="paramName"><?= $lang['section6']['calc1']['performance']?></p>
                        <div class="inputWrapper">
                            <input class="performance" type="number" value="50">
                        </div>
                    </div>
                    <hr>
                </form>
                <p class="answer text-center"><?= $lang['section6']['calc1']['result']?></p>
                <p id="resultTarget" class="result">BASIC 120</p>
                <button id="askPerformance" class="button" data-toggle="modal" data-target="#modalOrder" data-comment="Basic"><?= $lang['section6']['calc1']['button']?></button>
                <p class="answer text-center smallNote"><?= $lang['section6']['calc1']['footnote']?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 calcWrapper">
                <h5 class="calcTitle"><?= $lang['section6']['calc2']['calcTitle']?></h5>
                <form id="calcForm" action="">
                    <div class="form-line noPadding">
                        <p class="paramName paramWide"><?= $lang['section6']['calc2']['forSeason']?></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="tons" value="3000">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide"><?= $lang['section6']['calc2']['forTon']?></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="prices_elevator" value="10">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide"><?= $lang['section6']['calc2']['diesel']?><span><?= $lang['section6']['calc2']['dieselSmaller']?></span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="diesel_price" value="27">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide"><?= $lang['section6']['calc2']['gas']?><span><?= $lang['section6']['calc2']['gasSmaller']?></span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="gas_price" value="12.5">
                        </div>
                    </div>
                    <div class="form-line noPadding">
                        <p class="paramName paramWide"><?= $lang['section6']['calc2']['pellet']?><span><?= $lang['section6']['calc2']['pelletSmaller']?></span></p>
                        <div class="inputWrapper inputNarrow">
                            <input class="inputParam" type="number" name="pellet_price" value="1.6">
                        </div>
                    </div>
                    <button class="button"><?= $lang['section6']['calc2']['button']?></button>
                    <p class="calcResult"><?= $lang['section6']['calc2']['resultTextPart1']?><span class="tons">3000</span><?= $lang['section6']['calc2']['resultTextPart2']?><span
                                class="prices_elevator">10</span><?= $lang['section6']['calc2']['resultTextPart3']?></p>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName"><?= $lang['section6']['calc2']['resultDiesel']?></p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult diesel_price">972 000 грн</p>
                        </div>
                    </div>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName"><?= $lang['section6']['calc2']['resultGas']?></p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult gas_price">525 000 грн</p>
                        </div>
                    </div>
                    <div class="form-line noPadding noMargin">
                        <p class="paramName"><?= $lang['section6']['calc2']['resultPellet']?></p>
                        <div class="inputWrapper inputNarrow">
                            <p class="priceResult pellet_price">144 000 грн</p>
                        </div>
                    </div>
                    <hr>
                </form>
                <p class="answer text-center"><?= $lang['section6']['calc2']['offerTitle']?></p>
                <p class="subAnswer text-center"><?= $lang['section6']['calc2']['offer']?></p>
                <button class="button"><?= $lang['section6']['calc2']['offerButton']?></button>
            </div>
        </div>
    </div>
</section>
<!-- калькулятор -->

<!-- главные особенности -->
<section class="container-fluid section7">
    <div class="container">
        <h5 class="sectionTitle text-center"><?= $lang['section7']['title']?></h5>
        <div class="row">
            <div class="col-md-6 specBlock">
                <p class="specialty"><?= $lang['section7']['item1']?></p>
                <p class="specialty"><?= $lang['section7']['item2']?></p>
                <p class="specialty"><?= $lang['section7']['item3']?></p>
                <p class="specialty"><?= $lang['section7']['item4']?></p>
                <p class="specialty"><?= $lang['section7']['item5']?></p>
                <p class="specialty"><?= $lang['section7']['item6']?></p>
            </div>
            <div class="col-md-6 specBlock">
                <p class="specialty"><?= $lang['section7']['item7']?></p>
                <p class="specialty"><?= $lang['section7']['item8']?></p>
                <p class="specialty"><?= $lang['section7']['item9']?></p>
                <p class="specialty"><?= $lang['section7']['item10']?></p>
                <p class="specialty"><?= $lang['section7']['item11']?></p>
            </div>
        </div>
    </div>
    <img class="bgImg" src="../img/sec7bgpic.jpg" alt="bg">
</section>
<!-- главные особенности -->

<!-- доставка и монтаж -->
<section class="container-fluid section8">
    <div class="container">
        <h5 class="sectionTitle text-center"><?= $lang['section8']['title']?></h5>
        <div class="iconRow clearfix">
            <div class="iconItem">
                <p class="iconCaption topPosition"><?= $lang['section8']['item1']?></p>
                <img src="../img/headphones.jpg" alt="headphones">
            </div>
            <div class="iconItem">
                <img src="../img/phone.jpg" alt="phone">
                <p class="iconCaption topPosition"><?= $lang['section8']['item2']?></p>
            </div>
            <div class="iconItem">
                <p class="iconCaption sidePull"><?= $lang['section8']['item3']?></p>
                <img src="../img/tools.jpg" alt="tools">
            </div>
        </div>

        <div class="iconRow clearfix">
            <div class="iconItem">
                <p class="iconCaption sidePull"><?= $lang['section8']['item4']?></p>
                <img src="../img/star.jpg" alt="star">
            </div>
            <div class="iconItem">
                <img src="../img/book.jpg" alt="book">
                <p class="iconCaption sidePull"><?= $lang['section8']['item5']?></p>
            </div>
            <div class="iconItem">
                <img src="../img/info.jpg" alt="info">
                <p class="iconCaption"><?= $lang['section8']['item6']?></p>
            </div>
        </div>
    </div>
</section>
<!-- доставка и монтаж -->

<!-- slider -->
<section class="container-fluid section9">
    <h5 class="sectionTitle text-center"><?= $lang['section9']['title']?></h5>
    <div id="slickSlider">
        <div class="sliderItem">
            <img src="../img/custumer1.jpg" alt="custumer1">
            <p class="reply"><?= $lang['section9']['feedbacks']['whatItem1']?></p>
            <p class="name"><?= $lang['section9']['feedbacks']['whoItem1']?></p>
            <p class="address"><?= $lang['section9']['feedbacks']['fromItem1']?></p>
        </div>
        <div class="sliderItem">
            <img src="../img/custumer2.jpg" alt="custumer2">
            <p class="reply"><?= $lang['section9']['feedbacks']['whatItem2']?></p>
            <p class="name"><?= $lang['section9']['feedbacks']['whoItem2']?></p>
            <p class="address"><?= $lang['section9']['feedbacks']['fromItem2']?></p>
        </div>
        <div class="sliderItem">
            <img src="../img/custumer3.jpg" alt="custumer3">
            <p class="reply"><?= $lang['section9']['feedbacks']['whatItem3']?></p>
            <p class="name"><?= $lang['section9']['feedbacks']['whoItem3']?></p>
            <p class="address"><?= $lang['section9']['feedbacks']['fromItem3']?></p>
        </div>
    </div>
</section>
<!-- slider -->

<!-- Карта с клиентами -->
<section class="container-fluid section10">
    <div class="container">
        <h5 class="sectionTitle text-center"><?= $lang['section10']['title']?></h5>


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
        <h4 class="subTitle text-center"><?= $lang['section10']['offer']?></h4>
        <button class="lookButton" data-toggle="modal" data-target="#modalLook" data-comment="Look"><?= $lang['section10']['button']?></button>
    </div>
</section>
<!-- Карта с клиентами -->

<!-- Акция -->
<section class="container-fluid section11">
    <div class="container">
        <h5 class="sectionTitle text-center"><?= $lang['section11']['title']?></h5>
        <div class="col-md-6 offset-md-3 formBlock">
            <form id="sendForm" action="">
                <h6 class="formTitle text-center"><?= $lang['form']['discountFormTitle']?></h6>
                <input type="text" name="name" placeholder="<?= $lang['form']['discountFormButton']?>">
                <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>">
                <input type="email" name="email" placeholder="<?= $lang['form']['placeholderEmail']?>">
                <button class="button"><?= $lang['form']['discountFormButton']?></button>
            </form>
        </div>
    </div>
</section>
<!-- Акция -->

<!-- Ответы на вопросы -->
<section class="container-fluid section12">
    <div class="container">
        <h5 class="sectionTitle text-center"><?= $lang['section12']['title']?></h5>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            <span>1. <?= $lang['section12']['question1']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer1']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            <span>2. <?= $lang['section12']['question2']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer2']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            <span>3. <?= $lang['section12']['question3']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer3']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                            <span>4. <?= $lang['section12']['question4']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer4']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                            <span>5. <?= $lang['section12']['question5']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer5']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                            <span>6. <?= $lang['section12']['question6']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer6']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                            <span>7. <?= $lang['section12']['question7']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer7']?></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingEight">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                            <span>8. <?= $lang['section12']['question8']?></span>
                            <span class="plus"></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                    <div class="card-body"><?= $lang['section12']['answer8']?></div>
                </div>
            </div>
        </div>
        <h6 class="subTitle text-center"><?= $lang['section12']['subTitle']?></h6>
        <div class="col-md-6 offset-md-3 formBlock">
            <form id="sendForm2" action="">
                <input type="text" name="name" placeholder="<?= $lang['form']['placeholderName']?>">
                <input type="tel" name="phone" placeholder="<?= $lang['form']['placeholderPhone']?>">
                <input type="email" name="email" placeholder="<?= $lang['form']['placeholderEmail']?>">
                <button class="button"><?= $lang['form']['AskFormButton']?></button>
            </form>
        </div>
    </div>
</section>
<!-- Ответы на вопросы -->

<!-- Контакты -->
<section class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footContainer">
                <h6 class="footTitle"><?= $lang['section13']['title']?></h6>
                <p class="address"><?= $lang['section13']['address']?></p>
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