@extends('user.app') @section('content')

<style>
    div.title {
  text-align: center;
  margin-top: 360px;
}

div img{
    position: center;
}

</style>

<div class="wide_fullbgimage getSuccessStory wide_login_bg">
    <div class="container" id="getSuccessStory">
        <!-- Content Row -->
        <div class="row">
            <div class="singlesuccess">
                <div class="main-image">
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                          
                            @if(!empty ($stories->video))
                                <div class="col-md-3 card element">
                                    <a href="{{ $stories->video }}">
                                    @foreach(explode('=',$stories->video) as $row)
                                    @if ($loop->last) 
                                        <img src="http://i1.ytimg.com/vi/{{$row}}/default.jpg" style="height: 349px; width:560px;" frameborder="0" allowfullscreen=""/>
                                        <span class="playbutton"><i class="fa fa-youtube-play fa-4x" style="color: red"></i></span>
                                        @endif
                                    @endforeach
                                    </a>
                                </div>
                            @else
                                <div class="col-md-3 card element">
                                    <a href="#">
                                        <img src="{{ asset($stories->image) }}" style="height: 349px; width:560px;"  class="center"/>
                                    </a>
                                </div>
                            @endif
                                               
                        {{-- <iframe width="560" height="349" src="https://www.youtube.com/embed/ZQOL92VBUN0?rel=0&amp;hd=1" frameborder="0" allowfullscreen=""></iframe> --}}
                    </div>
                </div>
                <br><br><br><br>
                <div class="titletags">
                    <h2 class="fancy">
                        <span class="">
                            <div class="title">
                                {{$stories->title}}
                            </div>
                        </span>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="maincontent">
                    <div class="leftContent col-md-8">
                        <h2> {!! $stories->description !!}</h2>
                       <p>
                       </p>
                        {{-- <div style="text-align: center;"><img alt="*" src="{{asset($stories->main_image)}}" style="height: 273px; width: 394px;" /></div>
                        <p>&nbsp;</p>
                        {!! $stories->description !!}
                        <div style="text-align: center;"><img alt="*" src="{{asset($stories->body_image)}}" style="height: 273px; width: 395px;" /></div>
                        <p>&nbsp;</p> --}}

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
                                    {{-- <img src="{{asset($stories->body_image)}}" width="180px" height="180px" class="img-responsive" /> --}}
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
@endsection