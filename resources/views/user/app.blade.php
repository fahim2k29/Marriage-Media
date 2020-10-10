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

        <style>
            .dropbtn {
                background-color: rgb(15, 120, 155);
                color: white;
                padding: 10px;
                font-size: 14px;
                border-radius: 8px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 60px;
                box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: rgb(0, 0, 0);
                padding: 5px 5px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        {{-- <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
        <script src="https://connect.facebook.net/signals/config/2251928191696851?v=next&amp;r=canary" async=""></script>
        <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/nuX0GNR875hMLA1LR7ayD9tc/recaptcha__en.js"></script>
        <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NNGBZLJ"></script> --}}

        <meta name="viewport" content="width=1200" />

        <link href="/frontend/assets/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <meta name="apple-itunes-app" content="app-id=1116597910" />

        <link rel="stylesheet" href="/frontend/assets/css/less/font-awesome.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="/frontend/assets/css/less/controller/SearchController.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/frontend/assets/js/controller/SearchController.min.js"></script>

        <link href="/frontend/assets/css/less/global.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/UserController.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/frontend/assets/css/less/controller/CmsController.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/frontend/assets/js/global.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/controller/UserController.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/js/controller/CmsController.min.js"></script>
        <script type="text/javascript" src="/frontend/assets/validation/validator.min.js"></script>

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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body id="UserController" class="hiddenScroll">
        <!-- Navigation -->
        <nav class="navbar navbar-default" id="mainTopnav">
            <div class="row-fluid">
                <div class="top_loginbar navbar-fixed-top">
                    <div class="colwac-xs-3 colwac-md-3 colwac-lg-3 backgorund_white"></div>

                    <div class="container">
                        <div class="col-md-2 col-lg-2 logo_topbar">
                            <div class="abslogo_position">
                                <a href="/">
                                    <img src="/frontend/assets/images/marriageMedia.png" border="0" style="height: 215px;margin-top: -60px;margin-left: -110px;width: 453px;" />

                                </a>
                            </div>
                        </div>
                        <div style="text-align: right; padding-top: 20px;">
                            @guest

                            <button class="btn btn-primary">
                                <a href="/login" style="color: white;" title=" " id="btnhomelogins">Login</a>
                            </button>

                            <button class="btn btn-primary" style="background-color: brown;">
                                @if (Route::has('register'))
                                <a href="/signup" style="color: white;" title="Register to find your perfect marriage partner">Register</a>
                                @endif
                            </button>

                            @else
                            <div class="dropdown">
                                <button class="dropbtn">
                                    <a id="navbarDropdown" style="color: rgb(245, 253, 169);" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->UserName }}
                                    </a>
                                </button>

                                <div class="dropdown-content">                                   
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding-left: 30px;">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                            @endguest
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </nav>

        <div>
            <main>
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
                            <p style="font-size: 13px;">
                                <?php echo date("Y"); ?>
                                &copy; {{$info->name}}
                            </p>
                        </div>

                        <div class="col-xs-3">
                            <a href="https://www.smartsoftware.com.bd/">Developed By: <b> SmartSoftware Ltd. </b></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-overlay"></div>
        <div class="site-overlaynotification"></div>
        
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });
        </script>

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
    </body>
</html>
