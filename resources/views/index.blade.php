@extends('layouts.master')

@section('content')

        <div class="fullwidthHomepage">
            <section class="sectionHomepage" style="background-position: 0px 0px;">
                <div class="sectionHomeSlider">
                    <ul >
                         @foreach ($slider as $key => $slide)
                         <li  style="background-color: rgb(0, 0, 0);">
                                <div class="item{{ $key == 0 ? ' active' : '' }}">
                                    <img src="{{ $slide->image }}" height="620px" width="1350px" >
                                </div>
                            </li>
                            @endforeach
                    </ul>
                </div>
                <div class="bottom-absolute right-align storebutton-placement">
                    <div class="container">
                        <a href="#" target="_blank" class="landing-header__app-store-badge" title=" " style="cursor: pointer;">
                            <img src="/frontend/assets/images/app_store.png" width="125" />
                        </a>
                        <a href="#" target="_blank" class="landing-header__app-store-badge" title=" " style="cursor: pointer;">
                            <img src="/frontend/assets/images/android_logo.png" width="125" />
                        </a>
                    </div>
                </div>

                <div class="sectionregister galleryGrid">
                    <div class="container">
                        <div class="registerSection">
                            <div class="no-target button-wrapper cell-block-center grid fix-flex wrap padding-box double-padding" style="padding-top: 89%;">
                                <div class="loginformPopup hidden-fadeout">
                                    <form action="/login" method="post" role="form" _lpchecked="1" id="homepagelogin">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username / Email" />
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                        </div>

                                        <div style="text-align: left; color: #fff;"><input type="checkbox" name="rememberme" value="1" checked="" /> Remember Me</div>

                                        <input type="hidden" id="captcha-response" name="captcha-response" value="" />
                                        <div class="" style="text-align: center; padding-left: 66px; padding-top: 15px;">
                                            <div class="g-recaptcha" data-sitekey="6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH" data-badge="inline" data-size="invisible" data-callback="setResponse">
                                                <div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
                                                    <div class="grecaptcha-logo">
                                                        <iframe
                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;co=aHR0cHM6Ly9zaW5nbGVtdXNsaW0uY29tOjQ0Mw..&amp;hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;size=invisible&amp;badge=inline&amp;cb=655jf7m8rp83"
                                                            width="256"
                                                            height="60"
                                                            role="presentation"
                                                            name="a-vbmkverz8r0l"
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
                                        <div class="form-group" style="text-align: center; padding-bottom: 0; margin-bottom: 0; height: 70px; position: relative; z-index: 1000;">
                                            <!--                                             <button type="submit" class="button button__sm--success sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-female background-contrast  primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner ">Login</button>-->
                                        </div>
                                    </form>
                                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                    <script>
                                        //var onloadCallback = function() {
                                        //grecaptcha.execute();
                                        // document.getElementById('btnLogin').onclick = function (ev) {
                                        //     grecaptcha.execute();
                                        // }
                                        //};

                                        function setResponse(response) {
                                            document.getElementById("captcha-response").value = response;
                                            document.getElementById("homepagelogin").submit();
                                        }
                                    </script>
                                    <div class="forgetpassword">
                                        <a href="/forgetpassword">Forgotten Password</a>
                                    </div>
                                </div>
                                <a href="/login">
                                    <div
                                        id="btnLogin1"
                                        style="cursor: pointer;"
                                        class="sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-female background-contrast lineheight-54 primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner"
                                        data-name="login"
                                    >
                                        <span class="grid-cel" data-name="login"> Login</span>
                                    </div>
                                </a>
                                <a class="" href="/signup">
                                    <div
                                        class="sm-button landingloginbutton center-align grid fix-flex cell-block-center uppercase-text fontsize-24 sm-color sm-male background-contrast lineheight-54 primary-font-2 light-font white-text-color grid-cell cell-100 frame-button-grp rounded-corner"
                                        data-name="register"
                                    >
                                        <span class="grid-cel" data-name="register"> Register</span>
                                    </div>
                                </a>
                            </div>

                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                 <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                        </span>


                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="sectionOnline galleryGrid" style="margin-top: 0px;">
                @foreach ($users as $user) 
                <div itemscope="" itemtype="http://schema.org/Person" class="flip-container wrapper" data-variable="1">
                    <a href="#" itemprop="url">
                        <img src="/frontend/assets/images/4.png" class="imgfiller" />

                        <div class="mainFront front">
                            <div class="slidetrigger3">
                                <img
                                    itemprop="image"
                                    src="//gallery.singlemuslim.com/primary/270x270/NGQ4ODVjZWRmYWMzMGNlMqji42Ps9z8aZWKPyd8SQ_mVzZJbee9znlf8HcABTBgN4lWjRRAIhWz07ldmrgEyqK_jM2cEo_IceLT9zeWMtyJCZvgdVwDITmshjiHa1XEgYUl9IHcdX4jLz2w5nbRHMQ$$$.jpg"
                                    class="img-responsive slide"
                                />
                            </div>
                            <div class="slidecontent3 male">
                                <div class="hover-userinfo">
                                    <div class="user-title">
                                        <div class="pull-left username" itemprop="name">{{$user->UserName}}</div>
                                        <div class="pull-right age">{{\Carbon\Carbon::parse($user->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}</div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="country-flag clearfix">
                                        <div class="pull-left country">
                                            <span itemprop="jobTitle"> 
                                                @if ($user->education)
                                                {{ $user->education->Employment }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="pull-right countryflag"><i itemprop="nationality" class="sm-flag-medium gb"></i></div>
                                    </div>

                                    <div class="pull-left country hidden" itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
                                        <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                            <span itemprop="addressLocality">
                                                Greater London
                                            </span>
                                            <div class="hidden" itemprop="addressCountry">{{$user->Country}}</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mainBack back show" isempty="true">
                            <div class="slidetrigger3">
                                <img
                                    itemprop="image"
                                    src="//gallery.singlemuslim.com/primary/270x270/ZjhkNGJlOTAzYTRhN2RkZIPeK9X6nayVpiUQ8AVur5x4WyoIHGV8b7zad2MCOtpEpHKjfFRkeeO7g24r65NmDTGloI5bYm1o1ByUZhaYQ594HSJ-nd_HQAR_pQsjpfNqcI4-DJIrM7-FTAbkxV3SVvQIQVZyPWIJx1YblE8pJRY$$.jpg"
                                    class="img-responsive slide"
                                />
                            </div>
                            <div class="slidecontent3 male">
                                <div class="hover-userinfo">
                                    <div class="user-title">
                                        <div class="pull-left username" itemprop="name">{{$user->UserName}}</div>
                                        <div class="pull-right age">{{\Carbon\Carbon::parse($user->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}</div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="country-flag clearfix">
                                        <div class="pull-left country">
                                            <span itemprop="jobTitle"> 
                                                @if ($user->education)
                                                {{ $user->education->Employment }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="pull-right countryflag"><i itemprop="nationality" class="sm-flag-medium gb"></i></div>
                                    </div>

                                    <div class="pull-left country hidden" itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
                                        <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                            <span itemprop="addressLocality">
                                                West Midlands
                                            </span>
                                            <div class="hidden" itemprop="addressCountry">{{$user->Country}}</div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


                <div class="clearfix"></div>
            </section> --}}

            <section class="sectionOurNewApp module">
                <div class="container">
                    <div class="bgBackground">
                        <img id="Image-Maps-Com-image-maps-2017-10-23-040457" class="img-responsive imageOurnewapp" src="/frontend/assets/images/middle_banner_back.png" width="1140px" border="0" usemap="#image-maps-2017-10-23-040457" alt="" />
                        <map name="image-maps-2017-10-23-040457" id="ImageMapsCom-image-maps-2017-10-23-040457">
                            <area alt="" title="" href="#" shape="rect" coords="180,238,290,300" style="outline: none;" target="_blank" />
                            <area alt="" title="" href="#" shape="rect" coords="290,300,458,230" style="outline: none;" target="_blank" />
                        </map>
                    </div>
                </div>
            </section>

            <section class="module content sectionnewsSuccessStoriesContent">
                <div class="container">
                    <div class="newsucess-stories">
                        <div class="picscroll">
                            <div class="col-md-3 card">
                                <a href="/success-story/soniaandabid">
                                    <img src="/frontend/assets/images/soniaandabid.jpg" class="img-responsive imagesuccess-story" />
                                </a>
                                <a href="/success-story/soniaandabid">
                                    <span class="playbutton"><i class="glyphicon glyphicon-play"></i></span>
                                </a>
                            </div>

                            <div class="col-md-3 card">
                                <a href="/success-story/AdilandAmira">
                                    <img src="/frontend/assets/images/adilandamira.jpg" class="img-responsive imagesuccess-story" />
                                </a>
                                <a href="/success-story/AdilandAmira">
                                    <span class="playbutton"><i class="glyphicon glyphicon-play"></i></span>
                                </a>
                            </div>

                            <div class="col-md-3 card">
                                <a href="/success-story/WaqasandAishiya">
                                    <img src="/frontend/assets/images/waqasandaishiya.jpg" class="img-responsive imagesuccess-story" />
                                </a>
                                <a href="/success-story/WaqasandAishiya">
                                    <span class="playbutton"><i class="glyphicon glyphicon-play"></i></span>
                                </a>
                            </div>

                            <div class="col-md-3 card">
                                <a href="/success-story/RussellandTaslima">
                                    <img src="/frontend/assets/images/russelandtaslima.jpg" class="img-responsive imagesuccess-story" />
                                </a>
                                <a href="/success-story/RussellandTaslima">
                                    <span class="playbutton"><i class="glyphicon glyphicon-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
        <!-- /.container -->

       
   
@endsection