@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_officeuse_display">
    <div class="container">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="officeuse_display">
                <div class="row">
                    <div class="topbar-bg containerTopmargin containerUsermargin">
                        <div class="topSteps">
                            <div class="row bs-wizard" style="border-bottom: 0;">
                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 1</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">About Me</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Education and Work</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Personal</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Religion</div>
                                </div>

                                <div class="col-md-2 col-lg-2 bs-wizard-step active">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 5</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Office Use</div>
                                </div>
                                <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 6</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Add Photo</div>
                                </div>
                            </div>
                        </div>

                        <div class="setting-bgcolor roundcornerPanel">
                            <div class="userForms">
                                <div id="aboutyoubox" class="stepsbox">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="subTitleround secondFont headingchange">Office Use</div>
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="{{ route('officeUse_create') }}">
                                                @csrf

                                                <div class="officeusecontent secondFont">Note: Office use only. This information will not be visible to other users.</div>

                                                @if(@isset($officeUse))
                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />

                                                <div role="form" class="form-horizontal">
                                                    <div id="FirstName-group" class="form-group has-feedback form-control-group">
                                                        <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
                                                        <div class="controls">
                                                            <input name="FirstName" id="FirstName" type="text" required="required" value="{{$officeUse->FirstName}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('FirstName') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="LastName-group" class="form-group has-feedback form-control-group">
                                                        <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
                                                        <div class="controls">
                                                            <input name="LastName" id="LastName" type="text" required="required" value="{{$officeUse->LastName}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('LastName') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="Address-group" class="form-group has-feedback form-control-group">
                                                        <label for="Address" class="control-label"><span class="required">*</span> Address</label>
                                                        <div class="controls">
                                                            <input name="Address" id="Address" type="text" required="required" value="{{$officeUse->Address}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('Address') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="City-group" class="form-group has-feedback form-control-group">
                                                        <label for="City" class="control-label"><span class="required">*</span> City</label>
                                                        <div class="controls">
                                                            <input name="City" id="City" type="text" required="required" value="{{$officeUse->City}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('City') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="Country-group" class="form-group has-feedback form-control-group">
                                                        <label for="Country" class="control-label"><span class="required">*</span>Country</label>
                                                        <div class="controls">
                                                            <select name="Country" class="select2" id="Country" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                                                <option value="{{$users->Country}}" readonly>{{$users->Country}}</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('Country') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="PostCode-group" class="form-group has-feedback form-control-group">
                                                        <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
                                                        <div class="controls">
                                                            <input name="PostCode" id="PostCode" type="text" maxlength="15" required="required" value="{{$officeUse->PostCode}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('PostCode') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="ContactTel-group" class="form-group has-feedback form-control-group">
                                                        <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
                                                        <div class="controls">
                                                            <input name="ContactTel" id="ContactTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' required="required" value="{{$officeUse->ContactTel}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('ContactTel') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="MobileTel-group" class="form-group has-feedback form-control-group">
                                                        <label for="MobileTel" class="control-label"> Mobile Tel</label>
                                                        <div class="controls">
                                                            <input name="MobileTel" id="MobileTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' value="{{$officeUse->MobileTel}}" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('MobileTel') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="DOB-group" class="form-group has-feedback form-control-group">
                                                        <label for="DOB" class="control-label"><span class="required">*</span> Date of Birth</label>
                                                        <div class="controls">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <select name="DOB_day" class="select2" id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <select name="DOB_month" class="select2" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select name="DOB_year" class="select2" id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            @else

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />

                                                <div role="form" class="form-horizontal">
                                                    <div id="FirstName-group" class="form-group has-feedback form-control-group">
                                                        <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
                                                        <div class="controls">
                                                            <input name="FirstName" id="FirstName" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('FirstName') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="LastName-group" class="form-group has-feedback form-control-group">
                                                        <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
                                                        <div class="controls">
                                                            <input name="LastName" id="LastName" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('LastName') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="Address-group" class="form-group has-feedback form-control-group">
                                                        <label for="Address" class="control-label"><span class="required">*</span> Address</label>
                                                        <div class="controls">
                                                            <input name="Address" id="Address" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('Address') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="City-group" class="form-group has-feedback form-control-group">
                                                        <label for="City" class="control-label"><span class="required">*</span> City</label>
                                                        <div class="controls">
                                                            <input name="City" id="City" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('City') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="Country-group" class="form-group has-feedback form-control-group">
                                                        <label for="Country" class="control-label"><span class="required">*</span> Country</label>
                                                        <div class="controls">
                                                            <select name="Country" class="select2" id="Country" class="form-control-values select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                                                <option value="{{$users->Country}}" readonly>{{$users->Country}}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="PostCode-group" class="form-group has-feedback form-control-group">
                                                        <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
                                                        <div class="controls">
                                                            <input name="PostCode" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('PostCode') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="ContactTel-group" class="form-group has-feedback form-control-group">
                                                        <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
                                                        <div class="controls">
                                                            <input name="ContactTel" id="ContactTel" type="text" minlength="6" maxlength="14" size="14" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="required" value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('ContactTel') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="MobileTel-group" class="form-group has-feedback form-control-group">
                                                        <label for="MobileTel" class="control-label"> Mobile Tel</label>
                                                        <div class="controls">
                                                            <input name="MobileTel" id="MobileTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' value="" class="form-control" />
                                                        </div>
                                                        <div class="col-sm-9 col-md-offset-3">
                                                            <small class="red" style="color: brown;">{{ $errors->first('MobileTel') }}</small>
                                                        </div>
                                                    </div>

                                                    <div id="DOB-group" class="form-group has-feedback form-control-group">
                                                        <label for="DOB" class="control-label"><span class="required">*</span> Date of Birth</label>
                                                        <div class="controls">
                                                            <div class="row">
                                                                <div class="col-xs-3">
                                                                    <select name="DOB_day" class="select2" id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-5">
                                                                    <select name="DOB_month" class="select2" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select name="DOB_year" class="select2" id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                        <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif

                                                <span class="pull-left required stepsRequired">* Required Field</span>
                                                <div class="textalignright abspositionBack">
                                                    <button type="button" name="savePreviousDatas" id="savePreviousDatas" onClick="location.href='/signup/religion'" class="btn btn-primary btn-lg" value="Previous">Previous</button>
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
