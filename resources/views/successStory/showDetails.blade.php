@extends('user.app') @section('content')

<div class="wide_fullbgimage getSuccessStory wide_login_bg">
    <div class="container" id="getSuccessStory">
        <!-- Content Row -->
        <div class="row">
            <div class="singlesuccess">
                <div class="main-image">
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349" src="https://www.youtube.com/embed/ZQOL92VBUN0?rel=0&amp;hd=1" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="titletags">
                    <h2 class="fancy">
                        <span class="">
                            <div>
                                {{$stories->title}}
                            </div>
                        </span>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="maincontent">
                    <div class="leftContent col-md-8">
                        <h2>Sharing jokes and warm fuzzy feelings!</h2>
                       <p>
                       </p>
                        <div style="text-align: center;"><img alt="*" src="{{asset($stories->main_image)}}" style="height: 273px; width: 394px;" /></div>
                        <p>&nbsp;</p>
                        {!! $stories->description !!}
                        <div style="text-align: center;"><img alt="*" src="{{asset($stories->body_image)}}" style="height: 273px; width: 395px;" /></div>
                        <p>&nbsp;</p>

                        <p>
                            <br />
                            <strong>
                                <em>
                                   Enjoy your reward!
                                </em>
                            </strong>
                        </p>
                    </div>
                    <div class="rightContent col-md-4">
                        <div class="strapline">
                            <p><strong> </strong></p>

                            <p>Suhail </p>
                        </div>
                        <hr />
                        <div class="maingallery">
                            <div class="moresuccess"><h3>More Success Stories</h3></div>
                            <div class="gallery-image pull-left">
                                <a href="/success-story/soniaandabid">
                                    <img src="{{asset($stories->body_image)}}" width="180px" height="180px" class="img-responsive" />
                                </a>
                            </div>
                            
                            <div class="clearfix"></div>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsections