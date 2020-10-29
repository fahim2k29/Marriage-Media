@extends('layouts.app2')

@section('content')

    <section class="sign-up">
        <div class="container ">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <div>Sign Up</div>
                        </div>
                       <div class="card-body signup-form">
                        <form method="POST" action="{{ route('register' ) }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="UserName" class="control-label"><span class="required">*</span> Username</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="UserName" id="UserName" type="text" required="required" class="form-control" placeholder="Your First name" />
                                </div>
                                <small class="red" style="color: brown;">{{ $errors->first('UserName') }}</small>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="email" class="control-label"><span class="required">*</span> Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="email" id="email" type="email" placeholder="Enter Your Email" data-remote="/registerCheckEmail" required="required" class="form-control" />
                                </div>
                                <small class="red" style="color: brown;">{{ $errors->first('email') }}</small>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="ConfirmEmail" class="control-label"><span class="required">*</span> Confirm Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="ConfirmEmail" id="ConfirmEmail" placeholder="Confirm Your Email" type="email" data-match="#Email" required="required" data-error="Please fill out this field." class="form-control" />
                                </div>
                                <small class="red" style="color: brown;">{{ $errors->first('ConfirmEmail') }}</small>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="Country" class="control-label"><span class="required">*</span> Where do you live?</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="Country" class="form-control" id="Country" required="required" data-error="Please fill out this field."  tabindex="-1" aria-hidden="true" onkeyup="filterFunction()">
                                        <option>Select Country</option>
                                            @foreach ($countries as $signupdata)
                                            <option>{{$signupdata->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="Gender" class="control-label"><span class="required">*</span> Select Your Gender</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-control" name="Gender" id="Gender" data-error="Please fill out this field." required="required"  tabindex="-1" aria-hidden="true">
                                        <option value="" selected="">Select Your Gender</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="DOB" class="control-label"><span class="required">*</span> Your Date of Birth</label>
                                </div>
                                <div class="col-md-3">
                                    <select name="DOB_day" class="form-control" id="DOB-day" required="required"   tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                        <option>Select Day</option>
                                        @for($i = 1; $i <= 31; $i++){
                                            <option value="{{$i}}">{{$i}}</option>
                                        }
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="DOB_month" class="form-control" id="DOB-month" required="required" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                        <option>Select Month</option>
                                        @foreach ($months as $month) {
                                            <option value="{{$month}}">{{$month}}</option>
                                        }
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="DOB_year" class="form-control" id="DOB-year" required="required" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                        <option>Select</option>
                                        @for ($i = $now; $i >= 1986; $i--)
                                            <option value="{{ $i-16 }}">{{ $i-16 }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="RegistrationReason" class="control-label"><span class="required">*</span> Registration Reason</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="RegistrationReason" class="form-control" id="RegistrationReason" required="required" data-error="Please fill out this field." data-select2-id="RegistrationReason" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="" data-select2-id="4">Select Registration Reason</option>
                                        <option value="I am registering to find myself partner">I am registering to find myself partner</option>
                                        <option value="I am registering to find my sister a partner">I am registering to find my sister a partner</option>
                                        <option value="I am registering to find my brother a partner">I am registering to find my brother a partner</option>
                                        <option value="I am registering to find my son a partner">I am registering to find my son a partner</option>
                                        <option value="I am registering to find my daughter a partner">I am registering to find my daughter a partner</option>
                                        <option value="I am registering to find my friend a partner">I am registering to find my friend a partner</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="HearAboutUs" class="control-label"><span class="required">*</span> Where did you hear about us?</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="HearAboutUs" class="form-control" id="HearAboutUs" required="required"  data-error="Please fill out this field." data-select2-id="HearAboutUs" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="" data-select2-id="4"> Select </option>
                                        <option value="Google">Google</option>
                                        <option value="Friend or Family">Friend or Family</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Newspaper">Newspaper</option>
                                        <option value="Tv Advert">Tv Advert</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="password" class="control-label"><span class="required">*</span>{{ __('Password') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <input id="password" type="password" required="required" class="form-control @error('password') is-invalid @enderror" placeholder="At least 8 digits" name="password" required autocomplete="new-password" />
                                    <input type="checkbox" onclick="myFunction()"> <small> Show Password </small>                                </div>
                                <small class="red" style="color: brown;">{{ $errors->first('password') }}</small>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="password" class="control-label"><span class="required">*</span>{{ __('Confirm Password') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <input id="password" type="password" required="required" class="form-control @error('password') is-invalid @enderror" placeholder="Re-type your password" name="confirm_password" required autocomplete="new-password" />
                                </div>
                                <small class="red" style="color: brown;">{{ $errors->first('confirm_password') }}</small>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-3">
                                    <label class="control-label" style="color: #18d26e"> <span class="required">*</span> <small> <a href="#">Terms and Conditions</a></small>  </label>
                                </div>
                                <div class="col-md-1">
                                    <input name="Accept"  id="Accept-1" type="checkbox" value="1" data-error="Please fill out this field." required="" />
                                </div>
                                <div class="col-md-8 text-right">
                                    <small class="control-label" style="color: red" >* Required Field</small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Register</button>
                        </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function () {

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
    <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
@endsection


