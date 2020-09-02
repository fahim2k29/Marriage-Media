@extends('user.app') @section('content')

<!-- Page Content -->
<div class="wide_fullbgimage signup wide_login_bg">
    <div class="container" id="signup">
        <!-- Content Row -->

        <div id="signupbox-register-form" style="margin-top: 50px;" class="col-md-10 col-lg-10 col-md-offset-1 col-md-offset-1 userregister">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register' ) }}">
                        @csrf

                        <input type="hidden" id="captcha-response" name="captcha-response" />

                        <div id="UserName-group" class="form-group has-feedback form-control-group">
                            <label for="UserName" class="control-label"><span class="required">*</span> Create a Username</label>
                            <div class="controls">
                                <input name="UserName" id="UserName" type="text" required="required" class="form-control" placeholder="Ex: fahim9" />
                            </div>
                            <div class="col-sm-9">
                                <small class="red" style="color: brown;">{{ $errors->first('UserName') }}</small>
                            </div>
                            <span id="UserName-span-success" class="smicon-new form-control-feedback male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="Letters, numbers, underscores only">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </span>

                            <span class="help-block with-errors" aria-hidden="false"></span>

                            <div class="clearfix"></div>
                        </div>

                        <div id="Email-group" class="form-group has-feedback form-control-group">
                            <label for="email" class="control-label"><span class="required">*</span> Enter your Email</label>
                            <div class="controls">
                                <input name="email" id="email" type="email" placeholder="Enter Your Email" data-remote="/registerCheckEmail" required="required" class="form-control" />
                            </div>
                            <div class="col-sm-9">
                                <small class="red" style="color: brown;">{{ $errors->first('email') }}</small>
                            </div>
                            <span
                                id="Email-span-success"
                                class="smicon-new form-control-feedback male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title="Your Verification Code will be sent to this Email"
                            >
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </span>

                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="ConfirmEmail-group" class="form-group has-feedback form-control-group">
                            <label for="ConfirmEmail" class="control-label"><span class="required">*</span> Confirm your Email</label>
                            <div class="controls">
                                <input name="ConfirmEmail" id="ConfirmEmail" placeholder="Confirm Your Email" type="email" data-match="#Email" required="required" data-error="Please fill out this field." class="form-control" />
                            </div>
                            <div class="col-sm-9">
                                <small class="red" style="color: brown;">{{ $errors->first('ConfirmEmail') }}</small>
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
                                <select name="Country" id="Country" required="required" data-error="Please fill out this field." class="select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="4">Select Country</option>
                                    @foreach ($signupdatas as $signupdata)
                                    <option>{{$signupdata->Country_data}}</option>
                                    @endforeach
                                </select>
                            </div>

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
                                        <select name="DOB_day" id="DOB-day" required="required" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="4">Select Day</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_day_data}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-5">
                                        <select name="DOB_month" id="DOB-month" required="required" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="4">Select Month</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_month_data}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select name="DOB_year" id="DOB-year" required="required" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="4">Select Year</option>
                                            @foreach ($signupdatas as $signupdata)
                                            <option>{{$signupdata->DOB_year_data}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="RegistrationReason-group" class="form-group has-feedback form-control-group">
                            <label for="RegistrationReason" class="control-label"><span class="required">*</span> Reason for Registering?</label>
                            <div class="controls">
                                <select name="RegistrationReason" id="RegistrationReason" required="required" data-error="Please fill out this field." data-select2-id="RegistrationReason" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="4">Select Registration Reason</option>
                                    @foreach ($signupdatas as $signupdata)
                                    <option>{{$signupdata->RegistrationReason_data}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="HearAboutUs-group" class="form-group has-feedback form-control-group">
                            <label for="HearAboutUs" class="control-label"><span class="required">*</span> Where did you hear about us?</label>
                            <div class="controls">
                                <select name="HearAboutUs" id="HearAboutUs" required="required" data-error="Please fill out this field." data-select2-id="HearAboutUs" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="4"> Select </option>
                                    @foreach ($signupdatas as $signupdata)
                                    <option>{{$signupdata->HearAboutUs_data}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><span class="required">*</span>{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" required="required" class="form-control @error('password') is-invalid @enderror" placeholder="At least 8 digits" name="password" required autocomplete="new-password" />
                                <div class="col-sm-9">
                                    <small class="red" style="color: brown;">{{ $errors->first('password') }}</small>
                                </div>
                                <span id="Email-span-success" class="smicon-new form-control-feedback male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="Make your password strong">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </span>
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
                        {{--
                        <div id="captcha-group" class="form-group has-feedback form-control-group">
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
                        </div>
                        --}}

                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-2">
                                <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Register</button>
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

<!-- /.container -->

@endsection
