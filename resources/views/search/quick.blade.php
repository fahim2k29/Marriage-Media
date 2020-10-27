@extends('layouts.app2') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Search for a match</div>
                    </div>
                   <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" >
                                <div class="card" style="background-color: #f8f9fa">
                                    @include('search.side-nav-search')
                                </div>
                            </div>
                            <div class="col-md-9">
                            <form action="{{ route('search_users')}}" method="get">
                                @csrf
                                <div class="card quick-form">
                                    <div class="card-header">
                                        <div style="text-align: center">Quick Search for a match</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Gender" class="control-label">Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="Gender" id="Gender" tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-center">
                                                <label for="Country" class="control-label"> Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="Country" id="Country" class="form-control"  tabindex="-1" aria-hidden="true">
                                                    <option>Select Option</option>
                                                    @foreach ($country as $signupdata)
                                                    <option>{{$signupdata->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <button name="Submit" id="Submit" type="submit" class="btn btn-success pull-right">Search Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
