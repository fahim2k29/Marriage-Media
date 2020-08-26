
<html lang="en">
    <head>
        <style type="text/css">
            .swal-icon--error {
                border-color: #f27474;
                -webkit-animation: animateErrorIcon 0.5s;
                animation: animateErrorIcon 0.5s;
            }
            .swal-icon--error__x-mark {
                position: relative;
                display: block;
                -webkit-animation: animateXMark 0.5s;
                animation: animateXMark 0.5s;
            }
            .swal-icon--error__line {
                position: absolute;
                height: 5px;
                width: 47px;
                background-color: #f27474;
                display: block;
                top: 37px;
                border-radius: 2px;
            }
            .swal-icon--error__line--left {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 17px;
            }
            .swal-icon--error__line--right {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                right: 16px;
            }
            @-webkit-keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0;
                }
                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1;
                }
            }
            @keyframes animateErrorIcon {
                0% {
                    -webkit-transform: rotateX(100deg);
                    transform: rotateX(100deg);
                    opacity: 0;
                }
                to {
                    -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
                    opacity: 1;
                }
            }
            @-webkit-keyframes animateXMark {
                0% {
                    -webkit-transform: scale(0.4);
                    transform: scale(0.4);
                    margin-top: 26px;
                    opacity: 0;
                }
                50% {
                    -webkit-transform: scale(0.4);
                    transform: scale(0.4);
                    margin-top: 26px;
                    opacity: 0;
                }
                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px;
                }
                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1;
                }
            }
            @keyframes animateXMark {
                0% {
                    -webkit-transform: scale(0.4);
                    transform: scale(0.4);
                    margin-top: 26px;
                    opacity: 0;
                }
                50% {
                    -webkit-transform: scale(0.4);
                    transform: scale(0.4);
                    margin-top: 26px;
                    opacity: 0;
                }
                80% {
                    -webkit-transform: scale(1.15);
                    transform: scale(1.15);
                    margin-top: -6px;
                }
                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    margin-top: 0;
                    opacity: 1;
                }
            }
            .swal-icon--warning {
                border-color: #f8bb86;
                -webkit-animation: pulseWarning 0.75s infinite alternate;
                animation: pulseWarning 0.75s infinite alternate;
            }
            .swal-icon--warning__body {
                width: 5px;
                height: 47px;
                top: 10px;
                border-radius: 2px;
                margin-left: -2px;
            }
            .swal-icon--warning__body,
            .swal-icon--warning__dot {
                position: absolute;
                left: 50%;
                background-color: #f8bb86;
            }
            .swal-icon--warning__dot {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -4px;
                bottom: -11px;
            }
            @-webkit-keyframes pulseWarning {
                0% {
                    border-color: #f8d486;
                }
                to {
                    border-color: #f8bb86;
                }
            }
            @keyframes pulseWarning {
                0% {
                    border-color: #f8d486;
                }
                to {
                    border-color: #f8bb86;
                }
            }
            .swal-icon--success {
                border-color: #a5dc86;
            }
            .swal-icon--success:after,
            .swal-icon--success:before {
                content: "";
                border-radius: 50%;
                position: absolute;
                width: 60px;
                height: 120px;
                background: #fff;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }
            .swal-icon--success:before {
                border-radius: 120px 0 0 120px;
                top: -7px;
                left: -33px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 60px 60px;
                transform-origin: 60px 60px;
            }
            .swal-icon--success:after {
                border-radius: 0 120px 120px 0;
                top: -11px;
                left: 30px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 0 60px;
                transform-origin: 0 60px;
                -webkit-animation: rotatePlaceholder 4.25s ease-in;
                animation: rotatePlaceholder 4.25s ease-in;
            }
            .swal-icon--success__ring {
                width: 80px;
                height: 80px;
                border: 4px solid hsla(98, 55%, 69%, 0.2);
                border-radius: 50%;
                box-sizing: content-box;
                position: absolute;
                left: -4px;
                top: -4px;
                z-index: 2;
            }
            .swal-icon--success__hide-corners {
                width: 5px;
                height: 90px;
                background-color: #fff;
                padding: 1px;
                position: absolute;
                left: 28px;
                top: 8px;
                z-index: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }
            .swal-icon--success__line {
                height: 5px;
                background-color: #a5dc86;
                display: block;
                border-radius: 2px;
                position: absolute;
                z-index: 2;
            }
            .swal-icon--success__line--tip {
                width: 25px;
                left: 14px;
                top: 46px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                -webkit-animation: animateSuccessTip 0.75s;
                animation: animateSuccessTip 0.75s;
            }
            .swal-icon--success__line--long {
                width: 47px;
                right: 8px;
                top: 38px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-animation: animateSuccessLong 0.75s;
                animation: animateSuccessLong 0.75s;
            }
            @-webkit-keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg);
                }
                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg);
                }
            }
            @keyframes rotatePlaceholder {
                0% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
                5% {
                    -webkit-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }
                12% {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg);
                }
                to {
                    -webkit-transform: rotate(-405deg);
                    transform: rotate(-405deg);
                }
            }
            @-webkit-keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px;
                }
                54% {
                    width: 0;
                    left: 1px;
                    top: 19px;
                }
                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px;
                }
                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px;
                }
                to {
                    width: 25px;
                    left: 14px;
                    top: 45px;
                }
            }
            @keyframes animateSuccessTip {
                0% {
                    width: 0;
                    left: 1px;
                    top: 19px;
                }
                54% {
                    width: 0;
                    left: 1px;
                    top: 19px;
                }
                70% {
                    width: 50px;
                    left: -8px;
                    top: 37px;
                }
                84% {
                    width: 17px;
                    left: 21px;
                    top: 48px;
                }
                to {
                    width: 25px;
                    left: 14px;
                    top: 45px;
                }
            }
            @-webkit-keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px;
                }
                65% {
                    width: 0;
                    right: 46px;
                    top: 54px;
                }
                84% {
                    width: 55px;
                    right: 0;
                    top: 35px;
                }
                to {
                    width: 47px;
                    right: 8px;
                    top: 38px;
                }
            }
            @keyframes animateSuccessLong {
                0% {
                    width: 0;
                    right: 46px;
                    top: 54px;
                }
                65% {
                    width: 0;
                    right: 46px;
                    top: 54px;
                }
                84% {
                    width: 55px;
                    right: 0;
                    top: 35px;
                }
                to {
                    width: 47px;
                    right: 8px;
                    top: 38px;
                }
            }
            .swal-icon--info {
                border-color: #c9dae1;
            }
            .swal-icon--info:before {
                width: 5px;
                height: 29px;
                bottom: 17px;
                border-radius: 2px;
                margin-left: -2px;
            }
            .swal-icon--info:after,
            .swal-icon--info:before {
                content: "";
                position: absolute;
                left: 50%;
                background-color: #c9dae1;
            }
            .swal-icon--info:after {
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -3px;
                top: 19px;
            }
            .swal-icon {
                width: 80px;
                height: 80px;
                border-width: 4px;
                border-style: solid;
                border-radius: 50%;
                padding: 0;
                position: relative;
                box-sizing: content-box;
                margin: 20px auto;
            }
            .swal-icon:first-child {
                margin-top: 32px;
            }
            .swal-icon--custom {
                width: auto;
                height: auto;
                max-width: 100%;
                border: none;
                border-radius: 0;
            }
            .swal-icon img {
                max-width: 100%;
                max-height: 100%;
            }
            .swal-title {
                color: rgba(0, 0, 0, 0.65);
                font-weight: 600;
                text-transform: none;
                position: relative;
                display: block;
                padding: 13px 16px;
                font-size: 27px;
                line-height: normal;
                text-align: center;
                margin-bottom: 0;
            }
            .swal-title:first-child {
                margin-top: 26px;
            }
            .swal-title:not(:first-child) {
                padding-bottom: 0;
            }
            .swal-title:not(:last-child) {
                margin-bottom: 13px;
            }
            .swal-text {
                font-size: 16px;
                position: relative;
                float: none;
                line-height: normal;
                vertical-align: top;
                text-align: left;
                display: inline-block;
                margin: 0;
                padding: 0 10px;
                font-weight: 400;
                color: rgba(0, 0, 0, 0.64);
                max-width: calc(100% - 20px);
                overflow-wrap: break-word;
                box-sizing: border-box;
            }
            .swal-text:first-child {
                margin-top: 45px;
            }
            .swal-text:last-child {
                margin-bottom: 45px;
            }
            .swal-footer {
                text-align: right;
                padding-top: 13px;
                margin-top: 13px;
                padding: 13px 16px;
                border-radius: inherit;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .swal-button-container {
                margin: 5px;
                display: inline-block;
                position: relative;
            }
            .swal-button {
                background-color: #7cd1f9;
                color: #fff;
                border: none;
                box-shadow: none;
                border-radius: 5px;
                font-weight: 600;
                font-size: 14px;
                padding: 10px 24px;
                margin: 0;
                cursor: pointer;
            }
            .swal-button:not([disabled]):hover {
                background-color: #78cbf2;
            }
            .swal-button:active {
                background-color: #70bce0;
            }
            .swal-button:focus {
                outline: none;
                box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, 0.29);
            }
            .swal-button[disabled] {
                opacity: 0.5;
                cursor: default;
            }
            .swal-button::-moz-focus-inner {
                border: 0;
            }
            .swal-button--cancel {
                color: #555;
                background-color: #efefef;
            }
            .swal-button--cancel:not([disabled]):hover {
                background-color: #e8e8e8;
            }
            .swal-button--cancel:active {
                background-color: #d7d7d7;
            }
            .swal-button--cancel:focus {
                box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, 0.29);
            }
            .swal-button--danger {
                background-color: #e64942;
            }
            .swal-button--danger:not([disabled]):hover {
                background-color: #df4740;
            }
            .swal-button--danger:active {
                background-color: #cf423b;
            }
            .swal-button--danger:focus {
                box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, 0.29);
            }
            .swal-content {
                padding: 0 20px;
                margin-top: 20px;
                font-size: medium;
            }
            .swal-content:last-child {
                margin-bottom: 20px;
            }
            .swal-content__input,
            .swal-content__textarea {
                -webkit-appearance: none;
                background-color: #fff;
                border: none;
                font-size: 14px;
                display: block;
                box-sizing: border-box;
                width: 100%;
                border: 1px solid rgba(0, 0, 0, 0.14);
                padding: 10px 13px;
                border-radius: 2px;
                transition: border-color 0.2s;
            }
            .swal-content__input:focus,
            .swal-content__textarea:focus {
                outline: none;
                border-color: #6db8ff;
            }
            .swal-content__textarea {
                resize: vertical;
            }
            .swal-button--loading {
                color: transparent;
            }
            .swal-button--loading ~ .swal-button__loader {
                opacity: 1;
            }
            .swal-button__loader {
                position: absolute;
                height: auto;
                width: 43px;
                z-index: 2;
                left: 50%;
                top: 50%;
                -webkit-transform: translateX(-50%) translateY(-50%);
                transform: translateX(-50%) translateY(-50%);
                text-align: center;
                pointer-events: none;
                opacity: 0;
            }
            .swal-button__loader div {
                display: inline-block;
                float: none;
                vertical-align: baseline;
                width: 9px;
                height: 9px;
                padding: 0;
                border: none;
                margin: 2px;
                opacity: 0.4;
                border-radius: 7px;
                background-color: hsla(0, 0%, 100%, 0.9);
                transition: background 0.2s;
                -webkit-animation: swal-loading-anim 1s infinite;
                animation: swal-loading-anim 1s infinite;
            }
            .swal-button__loader div:nth-child(3n + 2) {
                -webkit-animation-delay: 0.15s;
                animation-delay: 0.15s;
            }
            .swal-button__loader div:nth-child(3n + 3) {
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
            }
            @-webkit-keyframes swal-loading-anim {
                0% {
                    opacity: 0.4;
                }
                20% {
                    opacity: 0.4;
                }
                50% {
                    opacity: 1;
                }
                to {
                    opacity: 0.4;
                }
            }
            @keyframes swal-loading-anim {
                0% {
                    opacity: 0.4;
                }
                20% {
                    opacity: 0.4;
                }
                50% {
                    opacity: 1;
                }
                to {
                    opacity: 0.4;
                }
            }
            .swal-overlay {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                font-size: 0;
                overflow-y: auto;
                background-color: rgba(0, 0, 0, 0.4);
                z-index: 10000;
                pointer-events: none;
                opacity: 0;
                transition: opacity 0.3s;
            }
            .swal-overlay:before {
                content: " ";
                display: inline-block;
                vertical-align: middle;
                height: 100%;
            }
            .swal-overlay--show-modal {
                opacity: 1;
                pointer-events: auto;
            }
            .swal-overlay--show-modal .swal-modal {
                opacity: 1;
                pointer-events: auto;
                box-sizing: border-box;
                -webkit-animation: showSweetAlert 0.3s;
                animation: showSweetAlert 0.3s;
                will-change: transform;
            }
            .swal-modal {
                width: 478px;
                opacity: 0;
                pointer-events: none;
                background-color: #fff;
                text-align: center;
                border-radius: 5px;
                position: static;
                margin: 20px auto;
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
                z-index: 10001;
                transition: opacity 0.2s, -webkit-transform 0.3s;
                transition: transform 0.3s, opacity 0.2s;
                transition: transform 0.3s, opacity 0.2s, -webkit-transform 0.3s;
            }
            @media (max-width: 500px) {
                .swal-modal {
                    width: calc(100% - 20px);
                }
            }
            @-webkit-keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
                1% {
                    -webkit-transform: scale(0.5);
                    transform: scale(0.5);
                }
                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05);
                }
                80% {
                    -webkit-transform: scale(0.95);
                    transform: scale(0.95);
                }
                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }
            @keyframes showSweetAlert {
                0% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
                1% {
                    -webkit-transform: scale(0.5);
                    transform: scale(0.5);
                }
                45% {
                    -webkit-transform: scale(1.05);
                    transform: scale(1.05);
                }
                80% {
                    -webkit-transform: scale(0.95);
                    transform: scale(0.95);
                }
                to {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                }
            }
        </style>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
        <script src="https://connect.facebook.net/signals/config/2251928191696851?v=2.9.22&amp;r=stable" async=""></script>
        <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/nuX0GNR875hMLA1LR7ayD9tc/recaptcha__en.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NNGBZLJ"></script>
       

        <meta name="viewport" content="width=1200" />
        <link href="/frontend/assets/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <meta name="apple-itunes-app" content="app-id=1116597910" />

      
            @if(!empty($info->site_title && $info->short_desc))

            <title>{{$info->site_title}} - {{$info->short_desc}} </title>
           
            @else
           <title> Company Name
             </title>
            @endif

        

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/frontend/assets/css/less/font-awesome.css">

        <link href="/frontend/assets/css/less/global.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/LandingController.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/frontend/assets/js/global.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/controller/LandingController.min.js"></script>

        <script>
            //var dataLayer=[];
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NNGBZLJ");
        </script>
        <!-- End Google Tag Manager -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Lobster" rel="stylesheet" />
    </head>
    <body id="LandingController" class="hiddenScroll">
        <nav class="navbar navbar-default" id="mainTopnav" style="display: none;">
            <div class="row-fluid">
                <div class="top_loginbar navbar-fixed-top" style="height: 40px; width: 100%; margin: 0px; background-color: #007ea5; border: 0px;">
                    <div class="colwac-xs-3 colwac-md-3 colwac-lg-3 backgorund_white"></div>

                    <div class="container">
                        <div class="col-md-3 col-lg-3 logo_topbar">
                            <div class="abslogo_position2">
                                <a href="/dashboard">
                                    <img src="/frontend/assets/images/header-logo.gif"   />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 logo_topbar">
                            <div class="login_innerbar">
                                <div class="topnav_bar">
                                    <div class="form-group">
                                        <label class="sr-only" for="username_login">Email</label>
                                        <input class="form-control" id="username_login" name="username_login" placeholder="User Name" autofocus="" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="Password">Password</label>
                                        <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required="" /> 1§
                                    </div>
                                    <button type="submit" class="btn btn-success">Login</button> <span style="color: white;"> or </span> <a href="/signup" class="btn btn-success">Register</a>
                                    <a href="/forgetpassword" style="padding-left: 10px; color: #ffffff;">Forgotten Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header class="landing-header transition">
            <div class="container">
                <h1 class="landing-header__logo">
                    <a href="/" title=""><img src="/frontend/assets/images/marriageMedia.png" alt="" /></a>
                  
                </h1>

                <div class="landing-header__app" style="visibility: hidden;">
                    <a href="#" target="_blank" class="landing-header__app-store-badge" title="">
                        <img src="/frontend/assets/images/app_store.png" width="125" />
                    </a>
                    <a href="#" target="_blank" class="landing-header__app-store-badge" title="">
                        <img src="/frontend/assets/svg/google-play-badge.png" width="125" />
                    </a>
                </div>

                <nav class="landing-header__nav">
                    <ul>
                        <li class="has-dropdown login">
                            <a href="/search" class="has-dropdown" title="Search for your perfect marriage partner">Search </a>
                            <div class="nav--item-dropdown login login-links">
                                <a href="" class="has-dropdown" title="Search for your perfect marriage partner"> </a>
                                <ul class="nav--item-dropdownli">
                                    <a href="" class="has-dropdown" title="Search for your perfect marriage partner"> </a>
                                    <li><a href="" class="has-dropdown" title="Search for your perfect marriage partner"></a><a href="/search" class="navlinks">Search</a></li>
                                    <li><a href="/profession" class="navlinks">Profession Search</a></li>
                                    <li><a href="/search/result" class="navlinks">Photo Gallery</a></li>
                                    <li><a href="/usernamesearch" class="navlinks">Username Search</a></li>
                                </ul>
                            </div>
                        </li>
                            @guest
                                    <li class="login">
                                        <a href="/login" title="" id="btnhomelogins">Login</a>
                                    </li>
                                    <li>
                                        @if (Route::has('register'))
                                        <a href="/signup" title="Register to find your perfect marriage partner">Register</a>
                                        @endif 
                                    </li>
                                @else

                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->UserName }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>

                            @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <div>
            <main >
                @yield('content')
            </main>
        </div>

        <!-- Footer -->

        <footer class="primary-font-2 relative-position">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">
                                    About Us
                                </h4>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/signup">
                                    Register
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/search">
                                    Search
                                </a>
                            </li>

                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/find/men">
                                    Men
                                </a>
                            </li>

                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/find/women">
                                   Women
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color fontsize-12">
                                <h4 class="primary-text-color fontsize-14">News</h4>
                            </li>
                            
                            @foreach ($pages ->where('section', 2) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                            
                                
                            {{-- @endforeach --}}

                            {{-- <li class="primary-font-2 light-font fontsize-12">
                            <a href="/pages/news/{{$page->slug}}/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Reviews/3"> Reviews </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/In-The-News"> In The News </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Site-News">
                                    Site News
                                </a>
                            </li>
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/PR">
                                    PR
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader female-text-color">
                                <h4 class="primary-text-color fontsize-14">Our Standards</h4>
                            </li>
                            
                            @foreach ($pages->where('section', 3) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-xs-3">
                        <ul>
                            <li class="liheader male-text-color">
                                <h4 class="primary-text-color fontsize-14">Help</h4>
                            </li>
                           @foreach ($pages->where('section', 4) as $page)
                            {{-- @dd($page); --}}
                            <li class="primary-font-2 light-font fontsize-12">
                                <a href="/pages/news/Umrah-Winners/{{$page->id}}"> {{$page->name}} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-9">
                            <p style="font-size: 13px;">  <?php echo date("Y"); ?> &copy;  {{$info->site_title}} </p>
                        </div>
                        

                        <div class="col-xs-3">
                           
                            <a href="https://www.smartsoftware.com.bd/">Developed By:  <b> {{$info->name}} </b></a>                               

                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>

         <div class="site-overlay"></div>
         <div class="site-overlaynotification"></div>
         <div id="MessagesController">
             <div class="modal fade modal-wide" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="false">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div id="messaging">
                             <div class="options">
                                 <div class="option">
                                     <div class="check-threads pull-right">Edit</div>
                                     <div class="check-threads-selectall pull-left">Select All</div>
                                     <div class="show-thread-deleteoption">
                                         <div class="pull-right cancellink"><span class="pipeline">|</span>Cancel</div>
                                         <div class="pull-right deletelink">Delete</div>
                                         <div class="clearfix"></div>
                                     </div>
                                 </div>
                                 <div class="option-readunred">
                                     <div class="input-group btn-group btn-group-radio">
                                         <input
                                             id="general_hidden_all-0"
                                             group="general_unread_hidden"
                                             type="radio"
                                             class="form-control"
                                             checked="checked"
                                             value="0"
                                             data-size="mini"
                                             data-toggle="toggle"
                                             data-on="Yes"
                                             data-off="No"
                                             data-onstyle="success"
                                             data-offstyle="default"
                                             name="general_hidden_message"
                                         />
                                         <label id="label-general_hidden_all" for="general_hidden_all-0" class="activtab"> All Messages</label>
 
                                         <input
                                             id="general_unread-1"
                                             group="general_unread_hidden"
                                             type="radio"
                                             class="form-control"
                                             value="1"
                                             data-size="mini"
                                             data-toggle="toggle"
                                             data-on="Yes"
                                             data-off="No"
                                             data-onstyle="success"
                                             data-offstyle="default"
                                             name="general_hidden_message"
                                         />
                                         <label id="label-general_unread_hidden" for="general_unread-1" class=" ">
                                             Unread
                                             <span class="badge progress-bar-danger badge-xs unreadthread messageCounterUpdatemessage" style="display: none;"> 0 </span>
                                         </label>
                                     </div>
 
                                     <!--            Unread Only : <input id="messages-threads-unread-only" type="checkbox" data-size="mini" data-toggle="toggle" data-on="Yes" data-off="No" data-onstyle="success" data-offstyle="default">-->
                                 </div>
                             </div>
                             <div id="messaging-threads"></div>
                             <div id="messaging-thread">
                                 <div class="thread-header">
                                     <div class="user-details">
                                         <div class="image-holder"><img src="" /></div>
                                         <div class="userdetail-section">
                                             <div class="username"></div>
                                             <div class="user-blocked badge-info">Blocked</div>
                                             <div class="details"></div>
                                         </div>
                                         <div class="user-buttons">
                                             <div id="messages-thread-block-user" class="pull-left block-button">
                                                 <span class="sm-line basic-ban"></span><br />
                                                 <span class="button-label">Block User</span>
                                             </div>
                                             <div id="messages-thread-report-user" class="pull-left report-button btn-report">
                                                 <span class="sm-line basic-flag1"></span><br />
                                                 <span class="button-label">Report User</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="pull-right closeButton">
                                         <button type="button" class="close clos_padding" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                     </div>
                                 </div>
                                 <div class="messages">
                                     <div class="wrapper"></div>
                                     <div class="nomessagefound">You have no messages</div>
 
                                     <!--            <div class="pre-written"></div>-->
                                 </div>
 
                                 <div class="footer">
                                     <textarea id="messageText" name="message" data-noelastic="1" style=""></textarea>
                                     <button type="submit">
                                         <span class="glyphicon glyphicon-send"></span><br />
                                         Send
                                     </button>
                                 </div>
                                 <div class="footer footer-overlay"></div>
                                 <div class="overlay"><div class="loader-img"></div></div>
                             </div>
                             <div id="messaging-templates">
                                 <div class="thread" data-toggle="tooltip">
                                     <input type="checkbox" />
 
                                     <div class="image-holder">
                                         <img src="" />
                                         <div class="badge"></div>
                                     </div>
 
                                     <div class="username"></div>
                                     <div class="date"></div>
                                     <div class="last-message-text"></div>
                                     <span class="glyphicon glyphicon-remove delete"></span>
                                     <ul class="nav pull-right dots-menu">
                                         <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">...</a>
                                             <ul class="dropdown-menu extra-options">
                                                 <li class="extralinks viewprofile">View Profile</li>
                                                 <li class="extralinks blockuser">Block</li>
                                                 <li class="extralinks markasunread cant-block">Mark as Unread</li>
                                                 <li class="extralinks markasread cant-block">Mark as Read</li>
                                                 <li class="extralinks blockcountry block-country" data-country="country">Block Message From</li>
                                                 <li class="extralinks removeborder-extralinks report-button btn-report">Report User</li>
                                             </ul>
                                         </li>
                                     </ul>
 
                                     <div class="overlay"><div class="loader-img"></div></div>
                                 </div>
                                 <div class="message">
                                     <div class="date"></div>
                                     <div class="bubble">
                                         <div class="text"></div>
                                         <div class="seen"><span class="glyphicon glyphicon-ok"></span></div>
                                         <div class="overlay"><div class="loader-img"></div></div>
                                     </div>
 
                                     <div class="controls">
                                         <a id="messages-thread-delete-message" href="#"><span class="sm-line basic-trashcan"></span><span class="button-label">Delete</span></a>
                                         <a id="messages-thread-spam-message" href="#"><span class="message_ban sm-line basic-ban"></span><span class="button-label">Spam</span></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="packages packagesSectionNew" style="display: none;">
                                 <div class="userMessagePackages">
                                     <h2 class="nomessageclass" style="display: none;">You have no messages</h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 
         <!-- Global site tag (gtag.js) - Google Analytics -->
 
         <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108538968-2"></script>-->
         <!---->
         <!--<script>-->
         <!---->
         <!--    window.dataLayer = window.dataLayer || [];-->
         <!---->
         <!--    function gtag(){dataLayer.push(arguments);}-->
         <!---->
         <!--    gtag('js', new Date());-->
         <!---->
         <!---->
         <!---->
         <!--    gtag('config', 'UA-108538968-2');-->
         <!---->
         <!--</script>-->
 
         <script type="text/javascript" id="">
             !(function (b, e, f, g, a, c, d) {
                 b.fbq ||
                     ((a = b.fbq = function () {
                         a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                     }),
                     b._fbq || (b._fbq = a),
                     (a.push = a),
                     (a.loaded = !0),
                     (a.version = "2.0"),
                     (a.queue = []),
                     (c = e.createElement(f)),
                     (c.async = !0),
                     (c.src = g),
                     (d = e.getElementsByTagName(f)[0]),
                     d.parentNode.insertBefore(c, d));
             })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
             fbq("init", "2251928191696851");
             fbq("trackCustom", "PageViewDesktop");
         </script>
         <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>
 
         <script type="text/javascript" id="">
             !(function (b, e, f, g, a, c, d) {
                 b.fbq ||
                     ((a = b.fbq = function () {
                         a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments);
                     }),
                     b._fbq || (b._fbq = a),
                     (a.push = a),
                     (a.loaded = !0),
                     (a.version = "2.0"),
                     (a.queue = []),
                     (c = e.createElement(f)),
                     (c.async = !0),
                     (c.src = g),
                     (d = e.getElementsByTagName(f)[0]),
                     d.parentNode.insertBefore(c, d));
             })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
             fbq("init", "2251928191696851");
             fbq("trackCustom", "PageViewDesktop");
         </script>
         <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=2251928191696851&amp;ev=PageView&amp;noscript=1" /></noscript>
         <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
             <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
             <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;">
                 <iframe
                     title="recaptcha challenge"
                     src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;cb=rz44l09w1f72"
                     name="c-vbmkverz8r0l"
                     frameborder="0"
                     scrolling="no"
                     sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                     style="width: 100%; height: 100%;"
                 ></iframe>
             </div>
         </div>

      
           
        
    </body>
</html>