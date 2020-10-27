@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <table class="table table-bordered">
            <thead >
                <tr >
                    <th class="bg-light" >SL</th>
                    <th class="bg-light" style="">Title</th>
                    <th class="bg-light" style="">Image/Video</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stories as $key=>$story)
                    <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $story->title }}</td>
                            <td>
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
                                            <img src="{{ asset($story->image) }}" class="img-responsive" height="100px" width="100px" />
                                        </a>
                                    </div>
                                @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>


    </div>
</section>

@endsection
