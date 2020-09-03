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
            <div class="col-lg-12 col-md-12" id="editpersonalinfo_Display">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-lg-3 col-md-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle settingbreadcrumbChange" style="">
                                    <a href="/user/dashboard">Home</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/user/dashboard/profile">Setting</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/editPersonalInfo" id="changeBreadcrum" class="breadcrumLast">Edit Personal Info</a>
                                </nav>
                                  @include('user.profile.profile-sidebar')
                            </div>
                            <div class="col-lg-9 col-md-9 minheightprofile boxforms" style="padding: 0px;">
                                <div class="subTitleround secondFont headingchange">Edit Personal Info - Office Use Only</div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin">
                                    <!-- server side error snippet  -->
                                    <!-- success snippet  -->
                                    <!-- Exception snippet  -->

                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                            <div class="profilechanges">
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Name</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->FirstName}} {{$officeUse->LastName}}
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Address</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->Address}}
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">City</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->City}}
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Country</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->Country}}
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Post/Zip Code</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->PostCode}}
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Mobile Number</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">{{$officeUse->ContactTel}}</div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Mobile Number</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">{{$officeUse->MobileTel}}</div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label class="labelbold">Date of Birth</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        {{$officeUse->DOB_day}}-{{$officeUse->DOB_month}}-{{$officeUse->DOB_year}}
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                            <br />
                                            <br />
                                            <div class="updateprofile">
                                                <h2>Update your Profile</h2>
                                            </div>
                                            <br />
                                            <form method="post" action="{{ route('personalInfo_update' ) }}">
                                                @csrf
                                                <div role="form" class="form-horizontal">
                                                    <div id="FirstName-group" class="form-group FirstName-row">
                                                        <label for="FirstName" class="col-sm-4 control-label"><span class="required">*</span>First Name</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="FirstName" id="FirstName" type="text" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="LastName-group" class="form-group LastName-row">
                                                        <label for="LastName" class="col-sm-4 control-label"><span class="required">*</span>Last Name</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="LastName" id="LastName" type="text" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Address-group" class="form-group Address-row">
                                                        <label for="Address" class="col-sm-4 control-label"><span class="required">*</span>Address</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="Address" id="Address" type="text" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="City-group" class="form-group City-row">
                                                        <label for="City" class="col-sm-4 control-label"><span class="required">*</span>City</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="City" id="City" type="text" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="Country-group" class="form-group Country-row">
                                                        <label for="Country" class="col-sm-4 control-label"><span class="required">*</span>Country</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <select name="Country" id="Country" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                                                    <option>Select Country</option>
                                                                    @foreach ($signupdatas as $signupdata)
                                                                    <option>{{$signupdata-> Country_data}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="PostCode-group" class="form-group PostCode-row">
                                                        <label for="PostCode" class="col-sm-4 control-label"><span class="required">*</span>Post/Zip Code</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="PostCode" id="PostCode" type="text" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="ContactTel-group" class="form-group ContactTel-row">
                                                        <label for="ContactTel" class="col-sm-4 control-label"><span class="required">*</span>Contact Tel</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="ContactTel" id="ContactTel" type="tel" required="required" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="MobileTel-group" class="form-group MobileTel-row">
                                                        <label for="MobileTel" class="col-sm-4 control-label">Mobile Tel</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <input name="MobileTel" id="MobileTel" type="tel" class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    
                                                    <div id="DOB-group" class="form-group DOB-row">
                                                        <label for="DOB" class="col-sm-4 control-label"><span class="required">*</span>Date of Birth</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group input-group-maxwidth">
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <select name="DOB_day" id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Day</option>
                                                                            @foreach ($signupdatas as $signupdata)
                                                                            <option>{{$signupdata-> DOB_day_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        <select name="DOB_month" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Month</option>
                                                                            @foreach ($signupdatas as $signupdata)
                                                                            <option>{{$signupdata-> DOB_month_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        <select name="DOB_year" id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Year</option>
                                                                            @foreach ($signupdatas as $signupdata)
                                                                            <option>{{$signupdata-> DOB_year_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <span class="help-block with-errors" aria-hidden="false"></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                            <span class="pull-left required" style="margin-left: 107px; margin-top: 8px;">* Required Field</span>
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-primary-theme disabled">Update</button>
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
                <!--section('topHeading')-->
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
