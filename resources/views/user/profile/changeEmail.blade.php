@extends('user.dashboard.app') @section('content')

<div class="container headerColor">
    <div class="page-header pageheaderown">
        <div class="pageheader-heading">
            <h3>Your Settings</h3>
        </div>
    </div>
</div>

<div class="wide_fullbgimage">
    <div class="container containerbgColor">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="changeusername_Display">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-lg-3 col-md-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle settingbreadcrumbChange" style="">
                                    <a href="/user/dashboard">Home</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/user/dashboard/profile">Setting</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Change Username</a>
                                </nav>
                                @include('user.profile.profile-sidebar')                         
                                
                            </div>
                            <div class="col-lg-9 col-md-9 minheightprofile" style="padding: 0px;">
                                <div class="subTitleround secondFont headingchange">Change Username</div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <!-- server side error snippet  -->
                                    <!-- success snippet  -->
                                    <!-- Exception snippet  -->

                                    <!--  <div class="col-xs-10" style="padding-bottom: 20px;">
        Note: your password will be email to you.
    </div>
-->
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <form method="POST" action="{{ route('changeEmail_store') }}">
                                                @csrf @if (session()->has('success'))
                                                <h4 class="text-success">{{ session('success') }}</h4>
                                                @endif
                                                <br />
                                                <br />
                                                @foreach ($errors->all() as $error)
                                                <p class="text-danger">{{ $error }}</p>
                                                @endforeach
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">New Email</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="email" class="form-control" name="new_email" placeholder="xyz@gmail.com" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm New Email</label>

                                                    <div class="col-md-6">
                                                        <input id="new_password" type="email" class="form-control" name="new_confirm_email" placeholder="Re-type your Email" />
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
                                                            Update Email
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
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
