@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_personal_display">
    <div class="container">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="personal_display">
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

                                <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Religion</div>
                                </div>

                                <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
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
                                            <div class="subTitleround secondFont headingchange">Personal Information</div>
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="{{ route('personal_create') }}">
                                                @csrf @if(isset($personal))
                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />
                                                <div role="form" class="form-horizontal">
                                                    <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="controls">
                                                            <select name="Citizenship" class="select2" id="Citizenship" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Citizenship}}" selected="">{{$personal->Citizenship}}</option>

                                                                @foreach ($countries as $personaldata)

                                                                <option>{{$personaldata-> name}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Origin-group" class="form-group has-feedback form-control-group">
                                                        <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="controls">
                                                            <select name="Origin" class="select2" id="Origin" data-select2-id="Origin" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Origin}}" selected="">{{$personal->Origin}}</option>

                                                                @foreach ($countries as $personaldata)

                                                                <option>{{$personaldata-> name}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Relocation-group" class="form-group has-feedback form-control-group">
                                                        <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="controls">
                                                            <select name="Relocation" class="select2" id="Relocation" data-select2-id="Relocation" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Relocation}}" selected="">{{$personal->Relocation}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Relocation_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Income-group" class="form-group has-feedback form-control-group">
                                                        <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                                                        <div class="controls">
                                                            <select name="Income" class="select2" id="Income" data-select2-id="Income" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Income}}" selected="">{{$personal->Income}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Income_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                                                        <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="controls">
                                                            <select name="MarryIn" class="select2" id="MarryIn" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->MarryIn}}" selected="">{{$personal->MarryIn}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> MarryIn_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                                                        <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="controls">
                                                            <select name="MaritalStatus" class="select2" id="MaritalStatus" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->MaritalStatus}}" selected="">{{$personal->MaritalStatus}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> MaritalStatus_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Children-group" class="form-group has-feedback form-control-group">
                                                        <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="controls">
                                                            <select name="Children" class="select2" id="Children" data-select2-id="Children" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Children}}" selected="">{{$personal->Children}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Children_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                                                        <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="controls">
                                                            <select name="HaveChildren" class="select2" id="HaveChildren" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->HaveChildren}}" selected="">{{$personal->HaveChildren}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> HaveChildren_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Living-group" class="form-group has-feedback form-control-group">
                                                        <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="controls">
                                                            <select name="Living" class="select2" id="Living" data-select2-id="Living" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Living}}" selected="">{{$personal->Living}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Living_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Height-group" class="form-group has-feedback form-control-group">
                                                        <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                                                        <div class="controls">
                                                            <select name="Height" class="select2" id="Height" data-select2-id="Height" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Height}}" selected="">{{$personal->Height}}</option>
                                                                <option value="1.35m">1.35m</option>
                                                                <option value="1.4m">1.4m</option>
                                                                <option value="1.45m">1.45m</option>
                                                                <option value="1.5m">1.5m</option>
                                                                <option value="1.55m">1.55m</option>
                                                                <option value="1.6m">1.6m</option>
                                                                <option value="1.65m">1.65m</option>
                                                                <option value="1.7m">1.7m</option>
                                                                <option value="1.75m">1.75m</option>
                                                                <option value="1.8m">1.8m</option>
                                                                <option value="1.85m">1.85m</option>
                                                                <option value="1.9m">1.9m</option>
                                                                <option value="1.92m">1.92m</option>
                                                                <option value="1.95m">1.95m</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Build-group" class="form-group has-feedback form-control-group">
                                                        <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                                                        <div class="controls">
                                                            <select name="Build" class="select2" id="Build" data-select2-id="Build" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Build}}" selected="">{{$personal->Build}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Build_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Hair-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="controls">
                                                            <select name="Hair" class="select2" id="Hair" data-select2-id="Hair" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Hair}}" selected="">{{$personal->Hair}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Hair_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                                                        <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="controls">
                                                            <select name="EyeColour" class="select2" id="EyeColour" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->EyeColour}}" selected="">{{$personal->EyeColour}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> EyeColour_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Smoke-group" class="form-group has-feedback form-control-group">
                                                        <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="controls">
                                                            <select name="Smoke" class="select2" id="Smoke" data-select2-id="Smoke" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Smoke}}" selected="">{{$personal->Smoke}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Smoke_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Disabilities-group" class="form-group has-feedback form-control-group">
                                                        <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="controls">
                                                            <select name="Disabilities" class="select2" id="Disabilities" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$personal->Disabilities}}" selected="">{{$personal->Disabilities}}</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Disabilities_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                @else

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />

                                                <div role="form" class="form-horizontal">
                                                    <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="controls">
                                                            <select name="Citizenship" class="select2" id="Citizenship" required="required" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($countries as $personaldata)

                                                                <option>{{$personaldata-> name}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Origin-group" class="form-group has-feedback form-control-group">
                                                        <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="controls">
                                                            <select name="Origin" class="select2" id="Origin" required="required" data-select2-id="Origin" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($countries as $personaldata)

                                                                <option>{{$personaldata-> name}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Relocation-group" class="form-group has-feedback form-control-group">
                                                        <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="controls">
                                                            <select name="Relocation" class="select2" id="Relocation" required="required" data-select2-id="Relocation" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Relocation_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Income-group" class="form-group has-feedback form-control-group">
                                                        <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                                                        <div class="controls">
                                                            <select name="Income" class="select2" id="Income" required="required" data-select2-id="Income" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                <option value="15,000-25,000" >15,000-25,000</option>
                                                                <option value="25,000-40,000" >25,000-40,000</option>
                                                                <option value="40,000-60,000" >40,000-60,000</option>
                                                                <option value="over 60,000" >Over 60,000</option>

                                                               
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                                                        <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="controls">
                                                            <select name="MarryIn" class="select2" id="MarryIn" required="required" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> MarryIn_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                                                        <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="controls">
                                                            <select name="MaritalStatus" class="select2" id="MaritalStatus" required="required" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> MaritalStatus_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Children-group" class="form-group has-feedback form-control-group">
                                                        <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="controls">
                                                            <select name="Children" class="select2" id="Children" required="required" data-select2-id="Children" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Children_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                                                        <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="controls">
                                                            <select name="HaveChildren" class="select2" id="HaveChildren" required="required" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> HaveChildren_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Living-group" class="form-group has-feedback form-control-group">
                                                        <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="controls">
                                                            <select name="Living" class="select2" id="Living" required="required" data-select2-id="Living" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Living_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Height-group" class="form-group has-feedback form-control-group">
                                                        <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                                                        <div class="controls">
                                                            <select name="Height" class="select2" id="Height" required="required" data-select2-id="Height" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                <option value="1.35m">1.35m</option>
                                                                <option value="1.4m">1.4m</option>
                                                                <option value="1.45m">1.45m</option>
                                                                <option value="1.5m">1.5m</option>
                                                                <option value="1.55m">1.55m</option>
                                                                <option value="1.6m">1.6m</option>
                                                                <option value="1.65m">1.65m</option>
                                                                <option value="1.7m">1.7m</option>
                                                                <option value="1.75m">1.75m</option>
                                                                <option value="1.8m">1.8m</option>
                                                                <option value="1.85m">1.85m</option>
                                                                <option value="1.9m">1.9m</option>
                                                                <option value="1.92m">1.92m</option>
                                                                <option value="1.95m">1.95m</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Build-group" class="form-group has-feedback form-control-group">
                                                        <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                                                        <div class="controls">
                                                            <select name="Build" class="select2" id="Build" required="required" data-select2-id="Build" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Build_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Hair-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="controls">
                                                            <select name="Hair" class="select2" id="Hair" required="required" data-select2-id="Hair" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Hair_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                                                        <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="controls">
                                                            <select name="EyeColour" class="select2" id="EyeColour" required="required" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> EyeColour_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Smoke-group" class="form-group has-feedback form-control-group">
                                                        <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="controls">
                                                            <select name="Smoke" class="select2" id="Smoke" required="required" data-select2-id="Smoke" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Smoke_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="Disabilities-group" class="form-group has-feedback form-control-group">
                                                        <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="controls">
                                                            <select name="Disabilities" class="select2" id="Disabilities" required="required" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($personaldatas as $personaldata)

                                                                <option>{{$personaldata-> Disabilities_data}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif

                                                <span class="pull-left required stepsRequired">* Required Field</span>
                                                <div class="textalignright abspositionBack">
                                                    <button type="button" name="savePreviousDatas" onClick="location.href='/signup/education'" id="savePreviousDatas" class="btn btn-primary btn-lg" value="Previous">Previous</button>
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
