@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Success Story</h4>
                    </div>
                    <div class="card-body" style="display: block;margin-left: auto;margin-right: auto;">
                            @if(!empty ($stories->video))
                                <div>
                                    <a href="{{ $stories->video }}">
                                    @foreach(explode('=',$stories->video) as $row)
                                    @if ($loop->last)
                                        <img src="http://i1.ytimg.com/vi/{{$row}}/default.jpg" />
                                        <span class="playbutton"><i class="fa fa-youtube-play fa-4x" style="color: red"></i></span>
                                        @endif
                                    @endforeach
                                    </a>
                                </div>
                            @else
                                <div>
                                    <a href="#">
                                        <img src="{{ asset($stories->image) }}" class="center"/>
                                    </a>
                                </div>
                            @endif
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="title">
                            {{$stories->title}}
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $stories->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
