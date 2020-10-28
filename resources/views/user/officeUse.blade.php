@extends('layouts.app3') @section('content')
<section class="sign-up" style="background-color: white">
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center">Contact Information (Office use only)</div>
                    </div>
                   <div class="card-body signup-form">
                    <form method="post" action="{{ route('officeUse_create') }}">
                        @csrf
                        <div style="text-align: center;">Note: Office use only. This information will not be visible to other users.</div>
                        <br>

                        @if(@isset($officeUse))
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
                            </div>
                            <div class="col-md-9">
                                <input name="FirstName" id="FirstName" type="text" required="required" value="{{$officeUse->FirstName}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('FirstName') }}</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
                            </div>
                            <div class="col-md-9">
                                <input name="LastName" id="LastName" type="text" required="required" value="{{$officeUse->LastName}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('LastName') }}</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Address" class="control-label"><span class="required">*</span> Address</label>
                            </div>
                            <div class="col-md-9">
                                <input name="Address" id="Address" type="text" required="required" value="{{$officeUse->Address}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('Address') }}</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="City" class="control-label"><span class="required">*</span> City</label>
                            </div>
                            <div class="col-md-9">
                                <input name="City" id="City" type="text" required="required" value="{{$officeUse->City}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('City') }}</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="Country" class="control-label"><span class="required">*</span>Country</label>
                            </div>
                            <div class="col-md-9">
                                <input name="Country" id="Country" type="text" value="{{$users->Country}}" class="form-control" readonly />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('Country') }}</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
                            </div>
                            <div class="col-md-9">
                                <input name="PostCode" id="PostCode" type="text" maxlength="15" required="required" value="{{$officeUse->PostCode}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('PostCode') }}</small>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
                            </div>
                            <div class="col-md-9">
                                <input name="ContactTel" required="required" id="ContactTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' required="required" value="{{$officeUse->ContactTel}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('ContactTel') }}</small>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="MobileTel" class="control-label"> Mobile Tel</label>
                            </div>
                            <div class="col-md-9">
                                <input name="MobileTel"  id="MobileTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' value="{{$officeUse->MobileTel}}" class="form-control" />
                            </div>
                            <small class="red" style="color: brown;">{{ $errors->first('MobileTel') }}</small>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="DOB" class="control-label"> Date Of Birth</label>
                            </div>
                            <div class="col-md-2">
                                <input name="DOB_day" id="DOB_day" type="text" value="{{$users->DOB_day}}" class="form-control" readonly />
                            </div>
                            <div class="col-md-4">
                                <input name="DOB_month" id="DOB_month" type="text" value="{{$users->DOB_month}}" class="form-control" readonly />
                            </div>
                            <div class="col-md-3">
                                <input name="DOB_year" id="DOB_year" type="text" value="{{$users->DOB_year}}" class="form-control" readonly />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 ">
                                <small class="control-label" style="color: red" >* Required Field</small>
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg pull-right">Next</button>
                    @else

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
                        </div>
                        <div class="col-md-9">
                            <input name="FirstName" id="FirstName" type="text" required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('FirstName') }}</small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
                        </div>
                        <div class="col-md-9">
                            <input name="LastName" id="LastName" type="text" required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('LastName') }}</small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Address" class="control-label"><span class="required">*</span> Address</label>
                        </div>
                        <div class="col-md-9">
                            <input name="Address" id="Address" type="text" required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('Address') }}</small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="City" class="control-label"><span class="required">*</span> City</label>
                        </div>
                        <div class="col-md-9">
                            <input name="City" id="City" type="text" required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('City') }}</small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="Country" class="control-label"><span class="required">*</span>Country</label>
                        </div>
                        <div class="col-md-9">
                            <input name="Country" id="Country" type="text" value="{{$users->Country}}" class="form-control" readonly />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('Country') }}</small>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
                        </div>
                        <div class="col-md-9">
                            <input name="PostCode" id="PostCode" type="text" maxlength="15" required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('PostCode') }}</small>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
                        </div>
                        <div class="col-md-9">
                            <input name="ContactTel" id="ContactTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57' required="required"  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('ContactTel') }}</small>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="MobileTel" class="control-label"> Mobile Tel</label>
                        </div>
                        <div class="col-md-9">
                            <input name="MobileTel" id="MobileTel" type="text" maxlength="14" minlength="6" size="14" onkeypress='return event.charCode >=48 && event.charCode <= 57'  class="form-control" />
                        </div>
                        <small class="red" style="color: brown;">{{ $errors->first('MobileTel') }}</small>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="DOB" class="control-label"> Date Of Birth</label>
                        </div>
                        <div class="col-md-2">
                            <input name="DOB_day" id="DOB_day" type="text" value="{{$users->DOB_day}}" class="form-control" readonly />
                        </div>
                        <div class="col-md-4">
                            <input name="DOB_month" id="DOB_month" type="text" value="{{$users->DOB_month}}" class="form-control" readonly />
                        </div>
                        <div class="col-md-3">
                            <input name="DOB_year" id="DOB_year" type="text" value="{{$users->DOB_year}}" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 ">
                            <small class="control-label" style="color: red" >* Required Field</small>
                        </div>
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg pull-right">Next</button>
                    @endif
                    </form>
                    <button onClick="location.href='/signup/religion'" id="savePreviousDatas" class="btn btn-success btn-lg" value="back">Previous</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
