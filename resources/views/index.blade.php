@extends('layouts.master')

@section('content')

        <div class="fullwidthHomepage">
            <section class="sectionHomepage" style="background-position: 0px 0px;">
                <div class="sectionHomeSlider">
                    <ul >
                         @foreach ($slider as $key => $slide)
                         <li  style="background-color: rgb(0, 0, 0);">
                                <div class="item{{ $key == 0 ? ' active' : '' }}" id="slider-wh">
                                    <img src="{{ $slide->image }}"  class="img-fluid max-width: 100%">
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
                        <img src="/frontend/assets/images/middle_banner_back.png" border="0" usemap="#image-maps-2017-10-23-040457" class="img-fluid w-100" alt="" />
                    </div>
                </div>
            </section>

            <section class="module content sectionnewsSuccessStoriesContent">
                <div class="container">
                    <div class="newsucess-stories">
                        <div class="picscroll">
                        @foreach($stories as $story)
                            @if(!empty ($story->video))
                            <div class="col-md-3 card">
                                <a href="{{ route('successStory_show', $story->id) }}">
                                @foreach(explode('=',$story->video) as $row)
                                 @if ($loop->last) 
                                    <img src="http://i1.ytimg.com/vi/{{$row}}/default.jpg" class="img-responsive" />
                                    <span class="playbutton"><i class="fa fa-play-circle"></i></span>
                                    @endif
                                @endforeach
                                </a>
                            </div>
                            @else
                            <div class="col-md-3 card">
                                <a href="{{ route('successStory_show', $story->id) }}">
                                    <img src="{{ asset($story->image) }}" class="img-responsive"  />
                                </a>
                            </div>
                                @endif
                        @endforeach                           
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
        <!-- /.container -->

       
   
@endsection