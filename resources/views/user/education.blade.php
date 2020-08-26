@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_education_display">
    <div class="container">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="education_display">
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

                                <div class="col-md-1 col-lg-2 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Education and Work</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
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

                                <!--                    <div class="col-md-1 col-lg-2 bs-wizard-step complete">-->
                                <!--                        <div class="text-center bs-wizard-stepnum">Step 1</div>-->
                                <!--                        <div class="progress"><div class="progress-bar"></div></div>-->
                                <!--                        <a href="/register/aboutyou" class="bs-wizard-dot"></a>-->
                                <!--                        <div class="bs-wizard-info text-center"><a href="/register/aboutyou">About You</a></div>-->
                                <!--                    </div>-->
                                <!---->
                                <!--                    <div class="col-md-2 col-lg-2 bs-wizard-step complete"> complete -->
                                <!--                        <div class="text-center bs-wizard-stepnum">Step 2</div>-->
                                <!--                        <div class="progress"><div class="progress-bar"></div></div>-->
                                <!--                        <a href="/register/religion" class="bs-wizard-dot"></a>-->
                                <!--                        <div class="bs-wizard-info text-center"><a href="/register/religion">Religion</a></div>-->
                                <!--                    </div>-->
                                <!---->
                                <!--                    <div class="col-md-2 col-lg-2 bs-wizard-step active"> complete -->
                                <!--                        <div class="text-center bs-wizard-stepnum">Step 3</div>-->
                                <!--                        <div class="progress"><div class="progress-bar"></div></div>-->
                                <!--                        <a href="#" class="bs-wizard-dot"></a>-->
                                <!--                        <div class="bs-wizard-info text-center">Education</div>-->
                                <!--                    </div>-->
                                <!---->
                                <!--                    <div class="col-md-2 col-lg-2 bs-wizard-step disabled"> active -->
                                <!--                        <div class="text-center bs-wizard-stepnum">Step 4</div>-->
                                <!--                        <div class="progress"><div class="progress-bar"></div></div>-->
                                <!--                        <a href="#" class="bs-wizard-dot"></a>-->
                                <!--                        <div class="bs-wizard-info text-center">Personal</div>-->
                                <!--                    </div>-->

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
                                            <div class="subTitleround secondFont headingchange">Education</div>
                                        </div>
                                        <div class="panel-body">
                                            <form method="POST" action="{{ route('education_create' ) }}">
                                                @csrf @if(@isset($education))

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />
                                                <div role="form" class="form-horizontal">
                                                    <div id="EducationLevel-group" class="form-group has-feedback form-control-group">
                                                        <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                                                        <div class="controls">
                                                            <select name="EducationLevel" id="EducationLevel" data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$education-> EducationLevel}}" selected="">{{$education-> EducationLevel}}</option>
                                                                @foreach ($employments as $employment)
                                                                <option>{{$employment-> employment_EducationLevel}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="SubjectStudied-group" class="form-group has-feedback form-control-group">
                                                        <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                                                        <div class="controls">
                                                            <input name="SubjectStudied" id="SubjectStudied" type="text" value="{{$education-> SubjectStudied}}" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div id="JobTitle-group" class="form-group has-feedback form-control-group">
                                                        <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                                                        <div class="controls">
                                                            <input name="JobTitle" id="JobTitle" type="text" required="required" value="{{$education-> JobTitle}}" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div id="Employment-group" class="form-group has-feedback form-control-group">
                                                        <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                                                        <div class="controls">
                                                            <select name="Employment" id="Employment" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$education-> Employment}}" selected="">{{$education-> Employment}}</option>

                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_value}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="FirstLang-group" class="form-group has-feedback form-control-group">
                                                        <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                                                        <div class="controls">
                                                            <select name="FirstLang" id="FirstLang" data-select2-id="FirstLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$education-> FirstLang}}" selected="">{{$education-> FirstLang}}</option>

                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_Language}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="SecondLang-group" class="form-group has-feedback form-control-group">
                                                        <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                                                        <div class="controls">
                                                            <select name="SecondLang" id="SecondLang" data-select2-id="SecondLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="{{$education-> SecondLang}}" selected="">{{$education-> SecondLang}}</option>

                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_Language}}</option>

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
                                                    <div id="EducationLevel-group" class="form-group has-feedback form-control-group">
                                                        <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                                                        <div class="controls">
                                                            <select name="EducationLevel" id="EducationLevel" required="required" data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_EducationLevel}}</option>

                                                                @endforeach {{--
                                                                <option value="27" data-select2-id="13">Bachelors degree</option>
                                                                <option value="25" data-select2-id="14">College</option>
                                                                <option value="30" data-select2-id="15">Doctorate</option>
                                                                <option value="24" data-select2-id="16">High school</option>
                                                                <option value="28" data-select2-id="17">Masters degree</option>
                                                                <option value="26" data-select2-id="18">Non degree qualification</option>
                                                                <option value="32" data-select2-id="19">Prefer not to say</option>
                                                                <option value="29" data-select2-id="20">Other degree</option>
                                                                <option value="31" data-select2-id="21">Other</option>
                                                                --}}
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="SubjectStudied-group" class="form-group has-feedback form-control-group">
                                                        <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                                                        <div class="controls">
                                                            <input name="SubjectStudied" id="SubjectStudied" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div id="JobTitle-group" class="form-group has-feedback form-control-group">
                                                        <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                                                        <div class="controls">
                                                            <input name="JobTitle" id="JobTitle" type="text" required="required" value="" class="form-control" />
                                                        </div>
                                                    </div>

                                                    <div id="Employment-group" class="form-group has-feedback form-control-group">
                                                        <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                                                        <div class="controls">
                                                            <select name="Employment" id="Employment" required="required" tabindex="-1" aria-hidden="true" data-error="Please fill out this field." class="form-control">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>

                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_value}}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="FirstLang-group" class="form-group has-feedback form-control-group">
                                                        <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                                                        <div class="controls">
                                                            <select name="FirstLang" id="FirstLang" required="required" data-select2-id="FirstLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_Language}}</option>

                                                                @endforeach {{--
                                                                <option value="76" data-select2-id="160">English</option>
                                                                <option value="78" data-select2-id="161">Arabic</option>
                                                                <option value="429" data-select2-id="162">Balochi</option>
                                                                <option value="469" data-select2-id="191">Kashmiri</option>
                                                                <option value="499" data-select2-id="192">Korean</option>
                                                                <option value="564" data-select2-id="193">Saraiki</option>
                                                                <option value="583" data-select2-id="194">Sindhi</option>
                                                                --}}
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div id="SecondLang-group" class="form-group has-feedback form-control-group">
                                                        <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                                                        <div class="controls">
                                                            <select name="SecondLang" id="SecondLang" required="required" data-select2-id="SecondLang" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                @foreach ($employments as $employment)

                                                                <option>{{$employment-> employment_Language}}</option>

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
                                            </form>
                                            <div class="textalignright abspositionBack">
                                                <button onClick="location.href='/signup/aboutme'" id="savePreviousDatas" class="btn btn-primary btn-lg" value="back">Previous</button>
                                            </div>
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
