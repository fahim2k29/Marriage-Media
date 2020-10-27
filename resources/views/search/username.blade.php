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
                            <form action="{{ route('search_username_result')}}" method="get">
                                @csrf
                                <div class="card quick-form">
                                    <div class="card-header">
                                        <div style="text-align: center">Search by Username</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-4 text-center">
                                                <label for="UserName" class="control-label"><span class="required">*</span> Search by Username</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input name="UserName" id="UserName" type="text" required="required" class="form-control" placeholder="Ex: fahim9" />
                                            </div>
                                            <small class="red" style="color: brown;">{{ $errors->first('UserName') }}</small>
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
