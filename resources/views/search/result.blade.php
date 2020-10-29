@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Search match</div>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            @foreach($datas as $user)
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('showInfo', $user->id) }}" target="_parent" >
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if (isset($user->addphoto))
                                                        <img src="{{asset($user->addphoto->image) }}" class="img-fluid" style="width: 100%; height:120px"/>
                                                        @else
                                                        <img src="{{asset('frontend/assets/images/')}}/default2.jpg" class="img-fluid" style="width: 100%; height:120px" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{$user->UserName}}
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{\Carbon\Carbon::createFromDate($user->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}
                                                    </div>
                                                </div>
                                                <div class="row" style="font-size: 13px">
                                                    <div class="col-md-6">{{$user->Country}}</div>
                                                    <div class="col-md-6">
                                                        <div class="rating">
                                                            @if($user->education)
                                                            <i class="fa fa-star" aria-hidden="true" style="color: green;"></i>
                                                            @else
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            @endif
                                                            @if($user->personal)
                                                            <i class="fa fa-star" aria-hidden="true" style="color: green;"></i>
                                                            @else
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            @endif
                                                            @if($user->religion)
                                                            <i class="fa fa-star" aria-hidden="true" style="color: green;"></i>
                                                            @else
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            @endif
                                                            @if($user->addphoto)
                                                            <i class="fa fa-star" aria-hidden="true" style="color: green;"></i>
                                                            @else
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                            @endif
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
