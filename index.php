<?php

require_once 'functions.php';

$languageCode = getCurrentLanguageCode(__DIR__);

?>
<!DOCTYPE html>
<html lang="<?php echo $languageCode ?>">
<head>
    <meta charset="UTF-8">
    <title>BHPSOFT - system sprzedaży kursów BHP on-line</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Favicon -->
	<link rel="icon" href="/images/favicon/favicon.svg" type="image/svg+xml">

    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B484FC3CE3"></script>
	<script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-B484FC3CE3');</script>

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
<div class="boxed_wrapper">


    <section class="top-bar-style1" id="home" style="height: 55px; padding: 10px 0 10px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="top-style1 clearfix">
                        <div class="top-right-style1 float-right">
                            <div class="language-switcher">
                                <div id="polyglotLanguageSwitcher">
                                    <form action="">
                                        <select id="polyglot-language-options">
                                            <?php printLangaugesHTMLOptions($languageCode) ?>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start header style1 area-->
    <header class="header-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="header-style1 clearfix">
                        <div class="header-style1-logo float-left">
                            <a href="/">
                                <img src="/images/resources/logo.svg" alt="BHPSoft">
                            </a>
                        </div>
                        <div class="headers1-header-right float-right">
                            <ul>
                                <li>
                                    <div class="single-item">
                                        <div class="icon clr1">
                                            <span class="flaticon-accept"></span>
                                        </div>
                                        <div class="text">
                                            <p>W pełni funkcjonalna<br>platforma<br>learningowo-sprzedażowa
                                            </p>
                                            <h3></h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-item">
                                        <div class="icon clr1">
                                            <span class="flaticon-accept"></span>
                                        </div>
                                        <div class="text">
                                            <p>Kursy i szkolenia<br>finalizowane indywidualnym<br>certyfikatem</p>
                                            <h3></h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="headers1-button">
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <span>Kontakt z nami</span>
                                    <h3 class="clr1"><a href="mailto:biuro@bhpsoft.pl">biuro@bhpsoft.pl</a></h3>
                                    <h3 class="clr1"><a href="tel:+48535954276">+48 535 954 276</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End header style1 area-->

    <!--Start mainmenu area-->
    <section class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <nav class="main-menu clearfix">
                            <div class="navbar-header clearfix">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="#home">Home</a></li>
                                    <li class="dropdown"><a href="#about">O bhpsoft</a>
                                    <li><a href="#contact">Kontakt</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="mainmenu-right">
                            <div class="quote-button-box float-right">
                                <a class="btn-one" href="mailto:biuro@bhpsoft.pl">Masz pytania? Napisz<span class="icon-thin-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End mainmenu area-->

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/slider_02.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/images/slides/slider_02.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-70','-70','-100','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    W pełni funkcjonalna platforma dla branży BHP
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['800','800','650','350']"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['75','55','20','10']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">Twórz szkolenia i sprzedawaj je w sklepie on-line</div>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['160','140','125','105']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">

                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/slider_03.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/images/slides/slider_03.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-70','-70','-100','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">
                                <div class="big-title">
                                    Kursy dostępne on-line z każdego urządzenia
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['800','800','650','350']"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['75','55','20','10']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">
                                <div class="text">Oszczędzaj czas i zwiększaj efektywność sprzedaży</div>
                            </div>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['160','140','125','105']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">

                            </div>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/slides/slider_04.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/images/slides/slider_04.jpg">


                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-70','-70','-100','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                    Trzy kroki do ukończenia kursu przez użytkownika
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-whitespace="normal"
                             data-width="['800','800','650','350']"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['75','55','20','10']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">
									1-przejdź szkolenie, 2-wypełnij test, 3-uzyskaj certyfikat
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['800','800','650','350']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['160','140','125','105']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                             style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">

                            </div>
                        </div>


                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Start about area-->
    <section class="about-area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-title">
                        <div class="sec-title">
                            <div class="title"><span>O bhpsoft</span></div>
                        </div>
                        <h1>Sprzedawaj szkolenia BHP <br>bez dojazdów, szybko i 24/7</h1>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-text">
                        <span>Platforma learningowo-sprzedażowa bhpsoft to w pełni funkcjonalny produkt e-commerce</span>
                        <p>Platforma umożliwia sprzedaż i przeprowadzanie kursów całkowicie on-line, bez konieczności ruszania się sprzed komputera. Zawiera rozbudowany panel do zarządzania, ewidencji i raportowania sprzedaży oraz obsługi kursów.
</p>
                    </div>
                </div>
            </div>
            <div class="row service-items">
                <!--Start Single Service Style2-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-service-style2 wow fadeInUp" data-wow-delay="100ms">
                        <div class="inner">
                            <div class="icon-box">
								<img src="/images/icon/time_b.png">
                            </div>
                            <div class="text-box">
                                <h3>Oszczędzaj czas</h3>
                                <p>Dzięki dostępności on-line każdy może zakupić i ukończyć kurs w dogodnym dla niego terminie, a Ty możesz dodawać kolejne kursy i sprzedawać je nie ruszając się sprzed komputera</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style2-->
                <!--Start Single Service Style2-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-service-style2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="icon-box">
								<img src="/images/icon/piggy-bank_b.png">
                            </div>
                            <div class="text-box">
                                <h3>Zmniejszaj koszty</h3>
                                <p>Wszystko, czego Ci trzeba do uruchomienia sprzedaży, to komputer, dostęp do internetu i Twój czas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style2-->
                <!--Start Single Service Style2-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-service-style2 wow fadeInUp" data-wow-delay="500ms">
                        <div class="inner">
                            <div class="icon-box">
								<img src="/images/icon/increase_b.png">
                            </div>
                            <div class="text-box">
                                <h3>Zwiększaj efektywność sprzedaży</h3>
                                <p>Dzięki dostępności kursów on-line sprzedawaj bez ograniczeń terytorialnych i czasowych, kiedy chcesz i ile chcesz</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style2-->
            </div>
        </div>
    </section>
    <!--End about Area-->

    <!--Start Company Info area-->
    <section class="company-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="video-holder-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="/images/resources/video-gallery.jpg" alt="BHPSOFT">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="company-info-content">
                        <h1>Zarządzaj kursami i sprzedażą w jednym miejscu</h1>
                        <span>Bhpsoft pozwala na utrzymanie całego zarządzania platformą poprzez panel administratora. Dzięki niemu można tworzyć nowe kursy, przypisywać do nich testy wraz z pytaniami i odpowiedziami, zarządzać użytkownikami kursów, generować karty szkolenia i certyfikaty pod konkretne osoby i szkolenia.
</span>
                        <p>Dzięki temu wszystko odbywa się w jednym miejscu.


                        </p>

                    </div>
                </div>
            </div>
            <div class="row company-info">
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-info-of-company wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="icon-holder one">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Pełna kontrola sprzedaży</h3>
                            <span>Ewidencja, raporty<br>i zarządzanie cenami i rabatami</span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-info-of-company two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-holder two">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Zintegrowane płatności</h3>
                            <span>Panel księgowy <br> i ewidencja sprzedaży</span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-info-of-company three wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon-holder three">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Obsługa kursów</h3>
                            <span>Dodawanie i edycja materiałów<br>oraz testów<span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
            </div>
        </div>
    </section>
    <!--End Company Info area-->

    <section class="company-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="video-holder-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="/images/resources/materialy.jpg" alt="BHPSOFT">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="company-info-content">
                        <h1>Uzupełnij platformę o gotowe materiały szkoleniowe</h1>
                        <span>Nasz zespół specjalistów przygotował pokaźny pakiet materiałów szkoleniowych (w tym filmy, prezentacje i plansze instruktażowe). Skorzystaj z oferty i miej pewność, ze wszystkie materiały posiadają aktualne zasoby i informacje.</span>
                    </div>
                </div>
            </div>
            <div class="row company-info">
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-info-of-company wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-color: #C3C4C9">

                        <div class="icon-holder one">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Gotowe materiały szkoleniowe</h3>
                            <span style="color:#000">Szkolenia w postaci interaktywnych prezentacji i filmów instruktażowych</span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-info-of-company two wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms" style="background-color: #393E46; padding-bottom: 25px">
                        <div class="icon-holder two">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Dodatkowe materiały</h3>
                            <span>Nauka poprzez formę quizów, dopasowania, koła fortuny itp.</span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
                <!--Start single info of company-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12" >
                    <div class="single-info-of-company three wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms" style="background-color: #000000">
                        <div class="icon-holder three">
                            <span class="flaticon-accept"></span>
                        </div>
                        <div class="title-holder">
                            <h3>Aktualizacje</h3>
                            <span>Ciągłu rozwój materiałów szkoleniowych i aktualizacja wg przepisów<span>
                        </div>
                    </div>
                </div>
                <!--End single info of company-->
            </div>
        </div>
    </section>
    <!--End Company Info area-->

    <!--Start Featured project area-->
    <section class="latest-project-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title clr-white float-left">
                        <div class="title"><span>Przykładowe widoki</span></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-project">
                        <div class="latest-project-carousel owl-carousel owl-theme">
                            <!--Start single featured project-->
                            <div>
                                <div class="img-holder">
                                    <img src="/images/projects/lat-pro-1.jpg" alt="BHPSOFT">

                                </div>
                            </div>
                            <!--End single featured project-->
                            <!--Start single featured project-->
                            <div>
                                <div class="img-holder">
                                    <img src="/images/projects/lat-pro-2.jpg" alt="BHPSOFT">

                                </div>
                            </div>
                            <!--End single featured project-->
                            <!--Start single featured project-->
                            <div>
                                <div class="img-holder">
                                    <img src="/images/projects/lat-pro-3.jpg" alt="BHPSOFT">

                                </div>
                            </div>
                            <!--End single featured project-->
                            <!--Start single featured project-->
                            <div>
                                <div class="img-holder">
                                    <img src="/images/projects/lat-pro-4.jpg" alt="BHPSOFT">

                                </div>
                            </div>
                            <!--End single featured project-->
                            <!--Start single featured project-->
                            <div>
                                <div class="img-holder">
                                    <img src="/images/projects/lat-pro-5.jpg" alt="BHPSOFT">

                                </div>
                            </div>
                            <!--End single featured project-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Featured project area-->

    <!--Start fact counter area-->
    <section class="fact-counter-area">
        <div class="container">
            <div class="row">
                <!--Start Single fact counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter">
                        <div class="icon-box">
                            <img src="/images/icon/brainstorm.png">
                        </div>
                        <div class="count-box">
                            <h1><span class="timer" data-from="1" data-to="12" data-speed="1000" data-refresh-interval="50">12</span></h1>
                            <div class="title">
                                <h3>osób<br>teamu</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single fact counter-->
                <!--Start Single fact counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter">
                        <div class="icon-box">
                            <img src="/images/icon/infinity.png">
                        </div>
                        <div class="count-box">
                            <h1><span class="timer" data-from="1" data-to="100" data-speed="2000" data-refresh-interval="50">100</span>+</h1>
                            <div class="title">
                                <h3>możliwych<br>szkoleń</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single fact counter-->
                <!--Start Single fact counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter">
                        <div class="icon-box">
                            <img src="/images/icon/web-hosting.png">
                        </div>
                        <div class="count-box">
                            <h1><span class="timer" data-from="1" data-to="12" data-speed="1000" data-refresh-interval="50">12</span></h1>
                            <div class="title">
                                <h3>tego<br>typu implementacji</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single fact counter-->
                <!--Start Single fact counter-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="single-fact-counter">
                        <div class="icon-box">
                            <img src="/images/icon/portfolio.png">
                        </div>
                        <div class="count-box">
                            <h1><span class="timer" data-from="1" data-to="700" data-speed="3000" data-refresh-interval="50">700</span>+</h1>
                            <div class="title">
                                <h3>wszystkich<br>realizacji</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single fact counter-->
            </div>
        </div>
    </section>
    <!--End fact counter area-->



    <!--Start Choose area-->
    <section class="choose-area" style="background-image: url(/images/parallax-background/choose-bg.jpg);">
        <div class="container">
            <div class="choose-title">
                <h1>Prostota działania to droga do sukcesu</h1>
                <p>Dzięki łatwości obsługi użytkownik nie ma najmniejszego problemu, by odbyć kurs kończący się certyfikatem. Jak to działa?</p>
            </div>
            <div class="row">
                <!--Start Single Choose Item-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-choose-item text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                        <div class="iocn-holder">
                            <img src="/images/icon/online-learning_b_80px.png" alt="Icon">
                        </div>
                        <div class="text-holder">
                            <h3>Wybierz szkolenie </h3>
                            <p>Zakup szkolenie i zapoznaj się z materiałami przesłanymi na maila</p>
                        </div>
                    </div>
                </div>
                <!--End Single Choose Item-->
                <!--Start Single Choose Item-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-choose-item bg1 text-center wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="iocn-holder">
                            <img src="/images/icon/test_b_80px.png" alt="Icon">
                        </div>
                        <div class="text-holder">
                            <h3>Rozwiąż test</h3>
                            <p>W dowolnym momencie ucz się on-line i wypełnij test</p>
                        </div>
                    </div>
                </div>
                <!--End Single Choose Item-->
                <!--Start Single Choose Item-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-choose-item bg2 text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="iocn-holder">
                            <img src="/images/icon/flaticon-certificate_80px.png" alt="Icon">
                        </div>
                        <div class="text-holder">
                            <h3>Odbierz certyfikat</h3>
                            <p>Automatycznie wygenerowany dokument zostanie wysłany na maila</p>
                        </div>
                    </div>
                </div>
                <!--End Single Choose Item-->
            </div>
        </div>
    </section>
    <!--End Choose area-->


    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content fix wow fadeInUp" data-wow-delay="100ms">
                        <div class="title float-left">
                            <h3>Potrzebujesz profesjonalnych materiałów SCORM <br> do swojej platformy szkoleniowej?</h3>
                        </div>

                        <div class="quote-button-box button">
                            <a class="btn-one" href="https://skorm.pl/" target="_blank" style="white-space: nowrap;">
                                Sprawdź na SKORM.pl
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->

    <!--Start References area-->
        <section class="references-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title clr-white float-left">
                            <div class="title"><span>Referencje</span></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="references-area-project">
                            <div class="references-area-carousel owl-carousel owl-theme">
                                <!--Start single featured project-->
                                <div>
                                    <div class="img-holder">
                                        <img src="/images/references/safety_service.jpg" alt="BHPSOFT">
                                    </div>
                                </div>
                                <!--End single featured project-->
                                <!--Start single featured project-->
                                <div>
                                    <div class="img-holder">
                                        <img src="/images/references/bhpactive.jpg" alt="BHPSOFT">
                                    </div>
                                </div>
                                <!--End single featured project-->
                                <!--Start single featured project-->
                                <div>
                                    <div class="img-holder">
                                        <img src="/images/references/EHSconsulting.jpg" style="max-height: 635px" alt="BHPSOFT">
                                    </div>
                                </div>
                                <!--End single featured project-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--End References area-->

    <!--Start Call Us area-->
    <section class="call-us-area" id="contact">
        <div class="call-us-bg" style="background-image: url(/images/parallax-background/call-us-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title call-us-title">
                        <div class="title"><span>Wypełnij formularz</span></div>
                    </div>
                    <div class="call-us-text">
                        <p>Już teraz dołącz do naszych zadowolonych klientów. Przygotujemy dla Ciebie platformę dopasowaną do Twoich potrzeb, funkcjonalnie i wizerunkowo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-info-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="title">
                                    <h3>Wyślij email</h3>
                                    <span>biuro@bhpsoft.pl</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-time-and-date"></span>
                                </div>
                                <div class="title">
                                    <h3>Godziny pracy</h3>
                                    <span>Pon - Pt: 9:00 - 17:00</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-mobile-phone"></span>
                                </div>
                                <div class="title">
                                    <h3>Dział handlowy</h3>
                                    <span>+48 535 954 276</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                </div>
                                <div class="title">
                                    <h3>Dział techniczny</h3>
                                    <span>+48 577 700 177</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                </div>
                                <div class="title">
                                    <h3>Rozliczenia</h3>
                                    <span>+48 577 700 177</span>
                                </div>
                            </li>
                        </ul>
                        <div class="find-map-box">
                            <div class="icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="text">
                                <a href="https://goo.gl/maps/FrUyXef5zdwY4vD48" target="blank"><h3>Zobacz lokalizację <span class="icon-thin-right-arrow"></span></h3>
                                <address>Gdynia, Polska<br>Aleja Zwycięstwa 96/98 <br> Kod pocztowy: 81-451</address></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-info-form">
                        <form id="contact-info-form" name="contact_info_form" class="default-form" action="/mail.php" method="post"  data-result="contact-form__result" data-success="contact-form__result--success" data-error="contact-form__result--error">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="form_name" placeholder="Imię i nazwisko*" required>
                                    </div>
                                    <div class="input-box">
                                        <input type="email" name="form_email" placeholder="Email*" required>
                                    </div>
                                    <div class="input-box">
                                        <input type="tel" name="form_phn" placeholder="Numer telefonu">
                                    </div>
                                    <div class="input-box">
                                        <input type="text" name="company_name" placeholder="Nazwa firmy">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <textarea name="requirements" placeholder="Treść"></textarea>
                                    </div>
                                    <div class="input-box">
                                        <button class="btn-one" type="submit">Wyślij</button>
                                        <div class="contact-form__result"></div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Call Us area-->




    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <div class="copyright-text float-left">
                            <p>© 2022 bhpsoft Wszelkie prawa zastrzeżone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>


<!-- main jQuery -->
<script src="/js/jquery.js"></script>
<!-- Wow Script -->
<script src="/js/wow.js"></script>
<!-- bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- Fancybox Script -->
<script src="/js/jquery.fancybox.js"></script>
<!-- count to -->
<script src="/js/jquery.countTo.js"></script>
<script src="/js/appear.js"></script>
<!-- owl carousel -->
<script src="/js/owl.js"></script>
<!-- validate -->
<script src="/js/validation.js"></script>
<!-- mixit up -->
<script src="/js/jquery.mixitup.min.js"></script>
<!-- isotope script-->
<script src="/js/isotope.js"></script>
<!-- Easing -->
<script src="/js/jquery.easing.min.js"></script>
<!-- jQuery ui js -->
<script src="/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- jQuery timepicker js -->
<script src="/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
<!-- html5lightbox js -->
<script src="/assets/html5lightbox/html5lightbox.js"></script>


<!--Revolution Slider-->
<script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/main-slider-script.js"></script>

<!-- thm custom script -->
<script src="/js/custom.js"></script>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            window.location

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    function toggleSubmit(form, enabled) {
        form.querySelector('button[type=submit]').disabled = !enabled;
    }

    function clearErrors(form) {
        const formErrors = form.querySelectorAll('.form-error');
        formErrors && formErrors.forEach(errorElement => {
            errorElement.remove();
        });
    }

    function clearMessage(form) {
        const resultContainerElement = this.getResultContainerElement(form);
        if (resultContainerElement) {
            resultContainerElement.classList.remove(form.dataset.resultContainerWithMessage);
        }

        const resultElement = this.getResultElement(form);
        if (resultElement) {
            resultElement.classList.remove(form.dataset.success, form.dataset.error);
            resultElement.innerHTML = '';
        }
    }

    function getResultContainerElement(form) {
        const resultContainerElementClassName = form.dataset.resultContainer;
        if (!resultContainerElementClassName) {
            return false;
        }

        const resultContainerElement = form.querySelector(`.${resultContainerElementClassName}`);
        if (!resultContainerElement) {
            return false;
        }

        return resultContainerElement;
    }

    function getResultElement(form) {
        const resultElementClassName = form.dataset.result
        if (!resultElementClassName) {
            return false;
        }

        const resultElement = form.querySelector(`.${resultElementClassName}`);
        if (!resultElement) {
            return false;
        }

        return resultElement;
    }

    function showMessage(form, success, message) {
        clearMessage(form);

        const resultContainerElement = getResultContainerElement(form);
        if (resultContainerElement) {
            resultContainerElement.classList.add(form.dataset.resultContainerWithMessage);
        }

        const resultElement = getResultElement(form);
        if (resultElement) {
            resultElement.classList.add(success ? form.dataset.success : form.dataset.error);
            resultElement.innerHTML = message;
        }
    }

    function showErrors(form, errors) {
        if (!errors) {
            return false;
        }

        for (const [field, fieldErrors] of Object.entries(errors)) {
            let fieldName = field;
            let fieldIndex = undefined;

            if (field.includes('.')) {
                [fieldName, fieldIndex] = field.split('.');
                fieldName += '[]';
            }

            const errorContainerName = fieldIndex ? `${fieldName}-${fieldIndex}` : fieldName;

            let errorContainer = form.querySelector(`[data-error-name="${errorContainerName}"]`);
            if (!errorContainer) {
                errorContainer = form.querySelector(`[name="${fieldName}"]`).parentElement;
            }

            const errorElement = document.createElement('small');
            errorElement.classList.add('form-error');
            errorElement.innerHTML = fieldErrors.join('<br>');

            errorContainer.appendChild(errorElement);
        }
    }

    document.querySelectorAll('form:not([data-ajax="off"])').forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault();

            toggleSubmit(form, false);
            clearErrors(form);
            showMessage(form, true, '');

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                },
                body: formData
            }).then(res => res.json())
                .then(data => {
                    if (data.success) {
						showMessage(form, data.success, "Wiadomość wysłana");
                        form.reset();
                    } else {
						showMessage(form, data.success, "Nie udało się wysłać wiadomości przez formularz. Skontaktuj się z nami przez e-mail lub telefon.");
					}

                    form.dispatchEvent(new CustomEvent('form_success'));
                })
                .catch(error => {
                    const response = error.response.data;
                    if (response) {
                        showMessage(form, response.success, response.message);
                        showErrors(form, response.errors);
                    }
                })
                .finally(() => {
                    toggleSubmit(form, true);
                });
        });
    });
</script>
</body>
</html>
