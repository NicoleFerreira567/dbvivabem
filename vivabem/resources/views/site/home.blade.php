
@extends('layout.layout')


@section('title','home')

@section('conteudo')
<!--PAGINA HOME-->
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ ('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ ('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ ('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ ('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ ('css/style.css') }}">


</head>
<body>

    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
            <div class="hero-slider" data-bg-src="assets/img/hero/hero_bg_2_1.png">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/banner/acadeima890.jpg') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src=" {{ asset('img/banner/academiadobem.987.jpg') }} alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Make Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="hero-wrapper" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
            <div class="hero-slider" data-bg-src="assets/img/hero/hero_bg_2_1.png">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/banner/acadeima890.jpg') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('img/banner/acadeima890.jpg') }}" alt="img">
                </div>
                </div>

                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Grow Your</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Strength</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">WITH Fitmas</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Make Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
            <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
        </div>
    </div>
</div>
    <!--==============================
    Service Area
    ==============================-->
    <div class="service-bg2-area" data-bg-src="{{ ('') }}img/bg/service-bg2.png">
        <!--==============================
        BMI Area
        ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TEST YOUR BMI</span>
                            <h2 class="sec-title text-white fw-semibold">BODY MASS INDEX</h2>
                            <p class="sec-text">BMI is a widely used tool for assessing body weight relative to height. It can provide a general indication of whether an individual falls within a healthy weight range.</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">BMI</th>
                                        <th scope="col">WEIGHT STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Below 18.5</th>
                                        <td>Weight Status</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Healthy</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Overwight</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - Above</th>
                                        <td>Obese</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Book Your Seat:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border" placeholder="Weight / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border" placeholder="Height / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age" id="age" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Sex">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Your BMI" type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="This Means" class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calculate BMI" onClick="calculateBMI()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Service Area 01
        ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area">
                    <span class="sub-title">Our Features</span>
                    <h2 class="sec-title text-white fw-semibold">SERVICES WE'RE OFFERING</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="sec-shape2-bottom">
            <img src="assets/img/bg/sec-shape2-top.png" alt="img">
        </div>
    </div>

    <!--==============================
    schedule Area
    ==============================-->
    <div class="schedule-area-1 space">
        <div class="container container2">
            <div class="title-area text-center">
                <span class="sub-title">Our Classes</span>
                <h2 class="sec-title fw-semibold">OUR TRAINING SCHEDULE</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab-1">
                        <div class="filter-menu-active mb-50 text-center">
                            <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL EVENTS</button>
                            <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                            <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                            <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL BODY</button>
                            <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                        </div>
                        <div class="filter-active-cat1">
                            <div class="filter-item cat1">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat2">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense <br>
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat3">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat4">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat5">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">MONDAY</th>
                                                <th scope="col">TUESDAY</th>
                                                <th scope="col">WEDNESDAY</th>
                                                <th scope="col">THURSDAY</th>
                                                <th scope="col">FRIDAY</th>
                                                <th scope="col">SATURDAY</th>
                                                <th scope="col">SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Video Area
    ==============================-->
    <div class="video-area-1">
        <div class="container">
            <div class="video-wrap">
                <a data-bg-src="assets/img/normal/video-bg1.png" href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>

    <!--==============================
    Portfolio Area
    ==============================-->
    <div class="portfolio-area-1" data-bg-src="assets/img/bg/portfolio-bg-1.png">

        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Portfolio</span>
                <h2 class="sec-title text-white fw-semibold">OUR WORK PORTFOLIO</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flip-gallery-area">
                <div class="flip-gallery">
                    <ul class="flip-items">
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_1.png" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                        <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                    </div>
                                    <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_2.png" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                        <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                    </div>
                                    <a href="assets/img/project/project1_2.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="assets/img/project/project1_3.png" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                        <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                    </div>
                                    <a href="assets/img/project/project1_3.png" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    wcu area
    ==============================-->
    <div class="wcu-area-2 space">
        <div class="container container2">
            <div class="row justify-content-between">
                <div class="col-xl-6 align-self-center order-xl-2">
                    <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-1.png" alt="img">
                                </div>
                                <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Successful
                                            Happy Students</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Years Working
                                        Experience</span>
                                    </div>
                                </div>
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-2.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="title-area">
                        <span class="sub-title">WHY CHOOSE US</span>
                        <h2 class="sec-title fw-semibold">WE PROVIDE OUR <br> 100% TRUSTED FITNESS SUPPORT</h2>
                        <p class="sec-text">Define your specific bodybuilding goals. Determine what you want to achieve in terms of muscle size, strength, and overall physique. Set realistic and measurable goals that will guide your training and nutrition plan.</p>
                        <div class="about-grid-wrap mt-40">
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Expert Trainer</h4>
                                    <p class="about-grid_text">30 days regular shipping</p>
                                </div>
                            </div>
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Modern Equipment</h4>
                                    <p class="about-grid_text">24 hour fast shipping</p>
                                </div>
                            </div>
                        </div>
                        <p class="sec-text">Implement progressive overload principles in your training. Gradually increase the weight, repetitions, or intensity of your exercises over time ...</p>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style-r0">Make Appointment</a>
                        <div class="about-info-wrap style2">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="details">
                                <p class="about-info-title">Call Us 24/7</p>
                                <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        wcu area 02 end
    ==============================-->

    <div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">
        <!--==============================
        team area 02
        ==============================-->
        <div class="team-area-2 space overflow-hidden">
            <div class="container container2">
                <div class="title-area text-center text-sm-start">
                    <span class="sub-title">Our Members</span>
                    <h2 class="sec-title text-white fw-semibold">MEET YOUR TRAINER</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="assets/img/team/team-2-4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">YOGA COACH</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--==============================
        Counter Area
        ==============================-->
        <div class="counter-area-2 overflow-hidden">
            <div class="container container2">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                                <p class="counter-card_text">Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                                <p class="counter-card_text">Expert Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-3.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                                <p class="counter-card_text">Modern Equipment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="assets/img/icon/counter-icon_2-4.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                                <p class="counter-card_text"> Tons Of Harvest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-slider">
            <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
                <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
                <h2 class="ad-slider_title">Fitmas <span>FITNESS</span> CENTER </h2>
            </div>
        </div>
    </div>

    <!--==============================
    Goal Area
    ==============================-->
    <section class="goal-area space">
        <div class="container container2">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="goal-thumb-2 mb-40 mb-lg-0">
                        <div class="img-1">
                            <img src="assets/img/normal/goal_2-2.png" alt="img">
                        </div>
                        <div class="img-2 jump">
                            <img src="assets/img/normal/goal_2-1.png" alt="img">
                        </div>
                        <div class="wcu-grid movingX">
                            <div class="icon">
                                <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                            </div>
                            <div class="details">
                                <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                <span class="wcu-grid_text">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="title-area">
                        <span class="sub-title">Fitmas Goal
                        </span>
                        <h2 class="sec-title fw-semibold">UNLOCK YOUR FULL POTENTIAL, ACHIEVE YOUR FITNESS GOALS.</h2>
                    </div>
                    <div class="goal-grid-wrap">
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Free Fitness Training</h4>
                                <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                            </div>
                        </div>
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Cardio and Strength</h4>
                                <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling studio. Equipped with stationary bikes...</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn style-r0" href="service-details.html">Learn More</a>
                            <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================


    <!--==============================


        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo-white.svg" alt="Fitmas"></a>
                                </div>
                                <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service-details.html">Our Mission</a></li>
                                    <li><a href="team.html">Meet The Teams</a></li>
                                    <li><a href="project.html">Our Projects</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Gallery</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed1.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed2.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed3.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed4.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed5.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/insta-feed6.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get Newsletter</h3>
                            <p class="footer-text">Get 10% off your first order! Hurry up</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" placeholder="Email Address" required="">
                                </div>
                                <button type="submit" class="btn style-r0 style2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights Reserved.</p></div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
			Code End  Here
	******************************** -->


    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>











@endsection
