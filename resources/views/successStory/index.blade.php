@extends('user.app') @section('content')
<br><br><br><br>


<div class="wide_fullbgimage getAllSuccessStory wide_login_bg">
    <div class="container" id="getAllSuccessStory">
        <!-- Content Row -->
        <div class="row">
            <div class="successstories-list">

                <div class="section-bottom topstories clearfix">
                    <div class="bottom-scroller">
                        @foreach ($stories as $story)                 
                        
                        <a href="{{ route('successStory_show', $story->id) }}">
                            <div class="gallery-image pull-left">
                                <div class="caption" style="display: none;">
                                    <h4 style="text-align: center"><span class="malecolor">{{ $story->title }} </h4>
                                </div>
                                <div></div>
                                <img src="{{ asset($story->main_image) }}" class="img-responsive" style="height:200px; width:225px;" />
                            </div>
                        </a>

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
