@extends('user.app') @section('content')
<br><br><br><br>


<div class="wide_fullbgimage getAllSuccessStory wide_login_bg">
    <div class="container" id="getAllSuccessStory">
        <!-- Content Row -->
        <div class="row">
            <div class="successstories-list">

                <div class="section-bottom topstories clearfix">
                    <div class="bottom-scroller">
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
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $(".gallery-image").hover(
                    function () {
                        $(this).find(".caption").slideDown(1); //.fadeIn(250)
                    },
                    function () {
                        $(this).find(".caption").slideUp(1); //.fadeOut(205)
                    }
                );
            });
        </script>
    </div>
    <!-- /.row -->
</div>

<br><br><br><br>
@endsection
