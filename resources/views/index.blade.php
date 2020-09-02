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
                        <img style="width: 100%; height:100%;" id="Image-Maps-Com-image-maps-2017-10-23-040457" class="img-responsive imageOurnewapp" src="/frontend/assets/images/middle_banner_back.png" border="0" usemap="#image-maps-2017-10-23-040457" alt="" />
                        
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