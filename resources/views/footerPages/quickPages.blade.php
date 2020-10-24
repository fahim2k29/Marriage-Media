@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>{{$stories->name}}</h3>
                    </div>
                   <div class="card-body ">
                    <div>
                        {!!$stories->short_desc!!}
                    </div>
                   </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection



