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
            <div class="col-lg-12 col-md-12" id="changepassword_Display">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-lg-3 col-md-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle settingbreadcrumbChange" style="">
                                    <a href="/user/dashboard">Home</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/user/dashboard/profile">Setting</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="#" id="changeBeadcrum" class="breadcrumLast">Change Password</a>
                                </nav>
                                <nav class="nav-sidebar">
                                    <ul class="nav">
                                        <h6 class="dropdown-header sidemenuheader" style="margin-top: 0px;">Profile</h6>
                                        <li class="">
                                            <a href="/user/dashboard/profile"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/profile/personalinfo"><i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="bottombodernone">
                                            <a href="/profile/preferences">
                                                <i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>

                                        <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--       -->

                                        <h6 class="dropdown-header sidemenuheader">Photos</h6>
                                        <li class="">
                                            <a href="/profile/photos"><i class="sm-line basic-photo sm-nav-dropdown-icons"></i>Edit My Photos <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="bottombodernone">
                                            <a class="pointerCursor" href="/profile/accesslist/2">
                                                <i class="sm-line basic-lock-open sm-nav-dropdown-icons"></i>
                                                Photo Access

                                                <span class="badge progress-bar-danger badge-xs messageCounterUpdate_photo" style="margin-top: -4px; left: -1px; margin-left: 2px; top: 9px; visibility: hidden;"> 0 </span>

                                                <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>

                                        <h6 class="dropdown-header sidemenuheader">Account &amp; Security</h6>

                                        <li class="">
                                            <a href="/profile/username"><i class="sm-line basic-keyboard sm-nav-dropdown-icons"></i>Change Username <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/profile/email"><i class="sm-line basic-mail sm-nav-dropdown-icons"></i>Change Email <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="active">
                                            <a href="/changePassword"><i class="sm-line sm-line basic-key sm-nav-dropdown-icons"></i>Change Password <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/membership/history"><i class="sm-line basic-calendar sm-nav-dropdown-icons"></i>Memberships History <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/profile/blocked"><i class="sm-line basic-ban sm-nav-dropdown-icons"></i>Blocked Users <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/profile/communication-preferences">
                                                <i class="sm-line basic-elaboration-mail-noaccess sm-nav-dropdown-icons"></i>Communication Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>
                                        <!--        <li class="--><!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--      -->

                                        <li class="">
                                            <a href="/profile/login-devices"><i class="sm-line sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>

                                        <li class="deletesidemenu">
                                            <a href="/profile/delete" data-username="fahim900">
                                                <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-9 col-md-9 minheightprofile" style="padding: 0px;">
                                <div class="subTitleround secondFont headingchange">Change Password</div>

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
                    <form method="POST" action="{{ route('changePassword_store') }}">
                        @csrf 

                        @if (session()->has('success'))
                            <h4 class="text-success">{{ session('success') }}</h4>
                        @endif

                        <br>
                        <br>

                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach

                        
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" placeholder="At least 8 character" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" placeholder="Re-type your new password" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
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

                <!--section('topHeading')-->
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>

@endsection