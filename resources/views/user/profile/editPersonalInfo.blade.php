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
                                                            <select name="Country" class="form-control"  id="Country" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                                                <option>Select Country</option>
                                                                @foreach ($countries as $signupdata)
                                                                <option>{{$signupdata->name}}</option>
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
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-maxwidth">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select name="DOB_day" class="form-control"  id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true">
                                                                        <option>Select Day</option>
                                                                       @for($i = 1; $i <= 31; $i++){
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                            }
                                                                            @endfor
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <select name="DOB_month" class="form-control" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true">
                                                                        <option>Select Month</option>
                                                                         @foreach ($months as $month) {
                                                                                <option value="{{$month}}">{{$month}}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select name="DOB_year" class="form-control"  id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true">
                                                                        <option>Select Year</option>
                                                                         @for ($i = $now; $i >= 1986; $i--)
                                                                            <option value="{{ $i-16 }}">{{ $i-16 }}</option>
                                                                        @endfor
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
        </div>
    </div>
</section>

@endsection
