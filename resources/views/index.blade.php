@extends('layouts.master')

@section('content')

        <div class="fullwidthHomepage">
            <section class="sectionHomepage" style="background-position: 0px 0px;">
                <div class="sectionHomeSlider">
                    <ul >
                         @foreach ($slider as $key => $slide)
                                <div class="item{{ $key == 0 ? ' active' : '' }}" id="slider-wh">
                                    <img src="{{ $slide->image }}"  class="img-fluid w-100">
                                </div>
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
