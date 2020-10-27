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
                                    @include('user.profile.nav-sidebar')
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="panel-body">
                                    <form method="POST" action="{{ route('changeUsername_store') }}">
                                        @csrf @if (session()->has('success'))
                                        <h4 class="text-success">{{ session('success') }}</h4>
                                        @endif
                                        <br />
                                        <br />
                                        @foreach ($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                        @endforeach
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">New Username</label>

                                            <div class="col-md-6">
                                                <input id="password" type="text" class="form-control" name="new_username" autocomplete="current-password" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm New Username</label>

                                            <div class="col-md-6">
                                                <input id="new_password" type="text" class="form-control" name="new_confirm_username" autocomplete="current-password" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                                            <div class="col-md-6">
                                                <input id="new_confirm_password" type="password" class="form-control" placeholder="Type your Password" name="current_password" autocomplete="current-password" />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Update Username
                                                </button>
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
    </div>
</section>

@endsection





