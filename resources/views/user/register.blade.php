@extends('user.app') @section('content')


<!-- Page Content -->

<div class="wide_fullbgimage signup wide_login_bg">
    <div class="container" id="signup">
        <div class="modal fade" id="menusettingsModal" tabindex="-1" role="dialog" aria-labelledby="menusettingsModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="headernotification">Account</h2>
                    </div>
                    <div class="modal-body">
                        <div class="  ">
                            <nav class="nav-sidebar nav-sidebar-2">
                                <ul class="nav">
                                    <h6 class="dropdown-header sidemenuheader sm-heading-title" style="margin-top: 0px;">Profile</h6>
                                    <li class="">
                                        <a href="/profile/edit#edit"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>
                                    <li class="">
                                        <a href="/profile/personalinfo"><i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>
                                    <li class="bottombodernone">
                                        <a href="/profile/preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>

                                    

                                    <h6 class="dropdown-header sidemenuheader sm-heading-title">Photos</h6>
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

                                    <h6 class="dropdown-header sidemenuheader sm-heading-title">Account &amp; Security</h6>

                                    <li class="">
                                        <a href="/profile/username"><i class="sm-line basic-keyboard sm-nav-dropdown-icons"></i>Change Username <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>
                                    <li class="">
                                        <a href="/profile/email"><i class="sm-line basic-mail sm-nav-dropdown-icons"></i>Change Email <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>
                                    <li class="">
                                        <a href="/profile/password"><i class="sm-line sm-line basic-key sm-nav-dropdown-icons"></i>Change Password <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
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
                                    

                                    <li class="">
                                        <a href="/profile/login-devices"><i class="sm-line sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                    </li>

                                    <li class="deletesidemenu">
                                        <a href="/profile/delete" data-username="Abdul26">
                                            <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
</div>

        <!-- Content Row -->

        <div id="signupbox-register-form" style="margin-top: 50px;" class="col-md-10 col-lg-10 col-md-offset-1 col-md-offset-1 userregister">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>
                <div class="panel-body">



                    <form  method="POST" action="{{ route('register' ) }}" >
                        
                        @csrf

                        <input type="hidden" id="captcha-response" name="captcha-response" />

                        <div id="UserName-group" class="form-group has-feedback form-control-group">
                            <label for="UserName" class="control-label"><span class="required">*</span> Create a Username</label>
                            <div class="controls">
                                <input name="UserName" id="UserName" type="text" required="required" data-remote="/checkusername" class="form-control" />
                            </div>
                            <span
                                id="UserName-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title="Letters, numbers, underscores only"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            
                            <div class="clearfix"></div>
                        </div>

                        <div id="Email-group" class="form-group has-feedback form-control-group">
                            <label for="Email" class="control-label"><span class="required">*</span> Enter your Email</label>
                            <div class="controls">
                                <input name="Email" id="Email" type="email" required="required" data-remote="/registerCheckEmail" class="form-control" />
                            </div>
                            <span
                                id="Email-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title="Your password will be sent to this Email"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="ConfirmEmail-group" class="form-group has-feedback form-control-group">
                            <label for="ConfirmEmail" class="control-label"><span class="required">*</span> Confirm your Email</label>
                            <div class="controls">
                                <input name="ConfirmEmail" id="ConfirmEmail" type="email" data-match="#Email" required="required" data-error="Please fill out this field." class="form-control" />
                            </div>
                            <span
                                id="ConfirmEmail-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="Country-group" class="form-group has-feedback form-control-group">
                            <label for="Country" class="control-label"><span class="required">*</span> Where do you live?</label>
                            <div class="controls">
                                <select
                                    name="Country"
                                    id="Country"
                                    required="required"
                                    data-error="Please fill out this field."
                                    data-select2-id="Country"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option>Select Country</option>
                                    @foreach ($signupdatas as $signupdata)
                                    <option>{{$signupdata->Country_data}}</option>
                                    @endforeach
                                    
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="426" style="width: 338px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Country-container">
                                            <span class="select2-selection__rendered" id="select2-Country-container" role="textbox" aria-readonly="true" title="Select Country">Select Country</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="Country-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span> --}}
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="Gender-group" class="form-group has-feedback form-control-group">
                            <label for="Gender" class="control-label"><span class="required">*</span> Select Your Gender</label>
                            <div class="controls">
                                <select name="Gender" id="Gender" data-error="Please fill out this field." required="required" class="select2-hidden-accessible" data-select2-id="Gender" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="4">Select Your Gender</option>
                                    <option value="Male" data-select2-id="292">Male</option>
                                    <option value="Female" data-select2-id="293">Female</option>
                                </select>
                               
                            </div>
                            
                        </div>

                        <div id="DOB-group" class="form-group has-feedback form-control-group">
                            <label for="DOB" class="control-label"><span class="required">*</span> Your Date of Birth</label>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <select name="DOB_day" id="DOB-day" required="" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option>Select Day</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_day_data}}</option>    
                                            @endforeach
                                           
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="326" style="width: 96px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-day-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-day-container" role="textbox" aria-readonly="true" title="Select Day">Select Day</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                    <div class="col-xs-5">
                                        <select name="DOB_month" id="DOB-month" required="" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option>Select Day</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_month_data}}</option>    
                                            @endforeach
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="339" style="width: 110px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-month-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-month-container" role="textbox" aria-readonly="true" title="Select Month">Select Month</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                    <div class="col-xs-4">
                                        <select name="DOB_year" id="DOB-year" required=""  data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                             <option>Select Day</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_year_data}}</option>    
                                            @endforeach
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="423" style="width: 99px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-year-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-year-container" role="textbox" aria-readonly="true" title="Select Year">Select Year</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <span id="DOB-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="You must be 18 or over"></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div> --}}
                        </div>

                        <div id="RegistrationReason-group" class="form-group has-feedback form-control-group">
                            <label for="RegistrationReason" class="control-label"><span class="required">*</span> Reason for Registering?</label>
                            <div class="controls">
                                <select
                                    name="RegistrationReason"
                                    id="RegistrationReason"
                                    required="required"
                                    data-error="Please fill out this field."
                                    data-select2-id="RegistrationReason"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                <option>Select Day</option>
                                @foreach ($signupdatas as $signupdata)
                                <option>{{$signupdata->RegistrationReason_data}}</option>    
                                @endforeach
                                   
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="427" style="width: 326px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-RegistrationReason-container">
                                            <span class="select2-selection__rendered" id="select2-RegistrationReason-container" role="textbox" aria-readonly="true" title="Select Option">Select Option</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="RegistrationReason-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span> --}}
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="HearAboutUs-group" class="form-group has-feedback form-control-group">
                            <label for="HearAboutUs" class="control-label"><span class="required">*</span> Where did you hear about us?</label>
                            <div class="controls">
                                <select
                                    name="HearAboutUs"
                                    id="HearAboutUs"
                                    required="required"
                                    data-error="Please fill out this field."
                                    data-select2-id="HearAboutUs"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                <option>Select Day</option>
                                @foreach ($signupdatas as $signupdata)
                                <option>{{$signupdata->HearAboutUs_data}}</option>    
                                @endforeach
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="428" style="width: 133px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-HearAboutUs-container">
                                            <span class="select2-selection__rendered" id="select2-HearAboutUs-container" role="textbox" aria-readonly="true" title="Select Option">Select Option</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="HearAboutUs-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span> --}}
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><span class="required">*</span>{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div id="Accept-group" class="form-group has-feedback form-control-group">
                            <div class="checkbox">
                                <label class=""> <span class="required">*</span> Terms and Conditions </label>

                                <div class="controls">
                                    <input name="Accept" id="Accept-1" type="checkbox" value="1" data-error="Please fill out this field." required="" />
                                </div>

                                <div class="help-block with-errors"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div id="termsandcondition-group" class="form-group has-feedback form-control-group">
                            <a target="_blank" href="/page/terms_and_conditions">Click here to read Terms and Conditions</a> / <a target="_blank" href="/page/privacy_security">Privacy Policy</a>
                        </div>
                        {{-- <div id="captcha-group" class="form-group has-feedback form-control-group">
                            <div class="g-recaptcha" data-sitekey="6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH" data-badge="inline" data-size="invisible" data-callback="setResponse">
                                <div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
                                    <div class="grecaptcha-logo">
                                        <iframe
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;co=aHR0cHM6Ly9zaW5nbGVtdXNsaW0uY29tOjQ0Mw..&amp;hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;size=invisible&amp;badge=inline&amp;cb=xu38qdujrxgn"
                                            width="256"
                                            height="60"
                                            role="presentation"
                                            name="a-q66thv4yeh61"
                                            frameborder="0"
                                            scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                                        ></iframe>
                                    </div>
                                    <div class="grecaptcha-error"></div>
                                    <textarea
                                        id="g-recaptcha-response"
                                        name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                    ></textarea>
                                </div>
                                <iframe style="display: none;"></iframe>
                            </div>
                        </div> --}}
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-2">
                                <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-submit-register registerUserbtn">Register</button>
                                
                            </div>
                        </div>

                    </form>

                   
                    <span class="pull-left required" style="margin-left: 68px; margin-top: -110px;">* Required Field</span>

                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>

                    <script>
                        $(function () {
                            // dataLayer.push({
                            //     'event':'formSubmit'
                            // });
                            $(".btn-submit-register").on("click", function () {
                                var validator = $("#signupbox-register").data("bs.validator");
                                validator.validate();

                                if (!validator.hasErrors()) {
                                    $(this).html('<div class="loading">Register    <span style="padding-left: 20px">        <img src="/images/loading.gif" style="width: 20px;" /></span></div>');
                                    grecaptcha.execute();
                                } else {
                                }
                            });
                        });

                        function setResponse(response) {
                            document.getElementById("captcha-response").value = response;
                            document.getElementById("signupbox-register").submit();
                        }

                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

</div>
<!-- /.container -->

@endsection
