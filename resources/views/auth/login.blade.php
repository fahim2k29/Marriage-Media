@extends('layouts.master') 
@section('content')

<div class="fullwidthHomepage">
    <section class="sectionHomepage" style="background-position: 0px 0px;">
        <div class="sectionHomeSlider">
            <ul style="position: relative;">
                <li class="li4Header" style="background-color: rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0;">
                    <div class="container">
                        <div class="usermesage-landing title-box white-text-color center-align bottom-absolute bottom-message">
                            <div class="title fontsize-22">
                                Abid &amp; Sonia
                            </div>
                            <div class="subtitle fontsize-16 primary-font-2 light-font">
                                Real Life Success Story
                            </div>
                        </div>

                        <div class="bigbgsuccessstories">
                            <div class="reallifestory">Real Life Success Story</div>
                            <div class="storyusertitle">
                                Sedki <span class="">&amp;</span> Shayda
                                <br />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li2Header" style="background-color: rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0;">
                    <div class="container">
                        <div class="usermesage-landing title-box white-text-color center-align bottom-absolute bottom-message">
                            <div class="title fontsize-22">
                                Welcome
                            </div>
                            <div class="subtitle fontsize-16 primary-font-2 light-font">
                                Safe, Secure, Halal app
                            </div>
                        </div>

                        <div class="bigbgsuccessstories">
                            <div class="reallifestory">Real Life Success Story</div>
                            <div class="storyusertitle">
                                Adam <span class="">&amp;</span> Saffiya
                                <br />
                               
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li1Header" style="background-color: rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; display: block; z-index: 5; opacity: 0.248731;">
                    <div class="container">
                        <div class="usermesage-landing title-box white-text-color center-align bottom-absolute bottom-message">
                            <div class="title fontsize-22">
                                Search
                            </div>
                            <div class="subtitle fontsize-16 primary-font-2 light-font">
                                Millions of users with powerful filters
                            </div>
                        </div>

                        <div class="bigbgsuccessstories">
                            <div class="reallifestory">Real Life Success Story</div>
                            <div class="storyusertitle">
                                Halim <span class="">&amp;</span> Munira
                                <br />
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li3Header" style="background-color: rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; display: block; z-index: 6; opacity: 0.751269;">
                    <div class="container">
                        <div class="usermesage-landing title-box white-text-color center-align bottom-absolute bottom-message">
                            <div class="title fontsize-22">
                                Search
                            </div>
                            <div class="subtitle fontsize-16 primary-font-2 light-font">
                                Millions of users with powerful filters
                            </div>
                        </div>

                        <div class="bigbgsuccessstories">
                            <div class="reallifestory">Real Life Success Story</div>
                            <div class="storyusertitle">
                                Aaron <span class="">&amp;</span> Tasleemah
                                <br />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li5Header" style="background-color: rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0;">
                    <div class="container">
                        <div class="usermesage-landing title-box white-text-color center-align bottom-absolute bottom-message">
                            <div class="title fontsize-22">
                                Like &amp; Chat
                            </div>
                            <div class="subtitle fontsize-16 primary-font-2 light-font">
                                Have a meaningful, respectful conversation
                            </div>
                        </div>

                        <div class="bigbgsuccessstories">
                            <div class="reallifestory">Real Life Success Story</div>
                            <div class="storyusertitle">
                                Ahmed <span class="">&amp;</span> Cylina

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="bottom-absolute right-align storebutton-placement">
            <div class="container-login">
                <a href="https://itunes.apple.com/gb/app/singlemuslim/id1116597910?mt=8" target="_blank" class="landing-header__app-store-badge" title="Download SingleMuslim on the Apple App Store!" style="cursor: pointer;">
                    <img src="/frontend/assets/images/app_store.png" width="125" />
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.singlemuslim.sm" target="_blank" class="landing-header__app-store-badge" title="Download SingleMuslim on the Apple App Store!" style="cursor: pointer;">
                    <img src="/frontend/assets/images/android_logo.png" width="125" />
                </a>
            </div>
        </div>

        <div class="sectionregister galleryGrid">
            <div class="container">
                <div class="registerSection">
                    <div class="no-target button-wrapper cell-block-center grid fix-flex wrap padding-box double-padding" style="padding-top: 89%;">
                        <div class="loginformPopup" style="margin-bottom: 128px;">
                            <form method="POST" action="{{ route('login') }}" role="form" _lpchecked="1" id="login-form">
                                    @csrf
                                <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Username / Email" />
                                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password" />

                                </div>

                                <div style="text-align: left; color: #fff;"><input type="checkbox" name="rememberme" value="1" checked="" /> Remember Me</div>
                                <input type="hidden" id="captcha-response" name="captcha-response" />
                                <div class="" style="text-align: center; padding-left: 66px; padding-top: 15px;">
                                    <div class="g-recaptcha" data-sitekey="6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH" data-badge="inline" data-size="invisible" data-callback="setResponse">
                                        <div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
                                            <div class="grecaptcha-logo">
                                                <iframe
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;co=aHR0cHM6Ly9zaW5nbGVtdXNsaW0uY29tOjQ0Mw..&amp;hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;size=invisible&amp;badge=inline&amp;cb=ykpehkx7doqy"
                                                    width="256"
                                                    height="60"
                                                    role="presentation"
                                                    name="a-wr7ijr2uh465"
                                                    frameborder="0"
                                                    scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                                                ></iframe>
                                            </div>
                                            <div class="grecaptcha-error"></div>
                                            <textarea
                                                id="g-recaptcha-response"
                                                name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                            ></textarea>
                                        </div>
                                        <iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                                <div class="form-group" style="text-align: center; padding-bottom: 0; margin-bottom: 0;">
                                    <button
                                        id="login-button"
                                        type="submit"
                                        class="button button__sm--success sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-female background-contrast primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner landingloginbutton-login"
                                    >
                                        Login
                                    </button>
                                </div>
                            </form>

                            <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                            <script>
                                document.getElementById("login-button").onclick = function (ev) {
                                    $("#login-button").html('<div class="loading">Login    <span style="padding-left: 20px">        <img src="/images/loading.gif" style="width: 20px;" /></span></div>');
                                    grecaptcha.execute();
                                };

                                function setResponse(response) {
                                    document.getElementById("captcha-response").value = response;
                                    document.getElementById("login-form").submit();
                                }

                                document.getElementById("password").addEventListener("keyup", function (event) {
                                    if (event.keyCode === 13) {
                                        event.preventDefault();
                                        grecaptcha.execute();
                                    }
                                });
                            </script>
                            <div class="forgetpassword">
                                <a href="/forgetpassword">Forgotten Password</a>
                            </div>
                        </div>

                        <a class="" href="/signup">
                            <div
                                class="sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-male background-contrast lineheight-54 primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner"
                                data-name="register"
                            >
                                <span class="grid-cel" data-name="register"> Register</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
