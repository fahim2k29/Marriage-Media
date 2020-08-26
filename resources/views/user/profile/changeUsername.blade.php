@extends('user.profile.app') @section('content')

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
                                <nav class="nav-sidebar">
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="/user/dashboard/profile"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit My Profile </a>
                                        </li>
                                        <li class="">
                                            <a href="/editPersonalInfo"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Personal Info </a>
                                        </li>
                                        <li class="bottombodernone">
                                            <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications / Preferences </a>
                                        </li>

                                        <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--       -->

                                        <h6 class="dropdown-header sidemenuheader">Photos</h6>
                                        <li class="">
                                            <a href="/editPhoto"><i class="fa fa-picture-o" aria-hidden="true"></i> Edit My Photos </a>
                                        </li>

                                        <h6 class="dropdown-header sidemenuheader">Account &amp; Security</h6>

                                        <li class="">
                                            <a href="/changeUsername"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Change Username </a>
                                        </li>
                                        <li class="">
                                            <a href="/changeEmail"><i class="fa fa-envelope" aria-hidden="true"></i> Change Email </a>
                                        </li>
                                        <li class="">
                                            <a href="/changePassword"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Password </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-delicious" aria-hidden="true"></i> Memberships History </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-ban" aria-hidden="true"></i> Blocked Users </a>
                                        </li>
                                        <li class="">
                                            <a href="#"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Communication Preferences </a>
                                        </li>
                                        <!--        <li class="--><!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--      -->

                                        <li class="">
                                            <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Devices </a>
                                        </li>

                                        <li class="deletesidemenu">
                                            <a href="#" data-username="fahim900"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete Profile </a>
                                        </li>
                                    </ul>
                                </nav>
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
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
