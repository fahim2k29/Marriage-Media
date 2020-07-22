@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_education_display">
    <div class="container">
        <div id="slidemenu">
            <div class="span12" style="text-align: center; width: 429px;">
                <div id="tab" class="btn-group" data-toggle="buttons-radio">
                    <a href="#online" class="btn active" name="radiotoggle" data-toggle="tab">Online</a>
                    <a href="#area" class="btn" name="radiotoggle" data-toggle="tab">Near Me</a>
                    <a href="#latest" class="btn" name="radiotoggle" data-toggle="tab">Latest</a>
                    <a href="#contacts" class="btn" name="radiotoggle" data-toggle="tab">Favourites</a>
                </div>
                <div class="tab-content ajxdata" style="min-height: 500px; text-align: left; width: 100%;">
                    <div class="tab-pane active" id="online">
                        <div id="onlineData" class="onlineData">
                            <div class="actualloadeddata">
                                <div class="messageDiv">
                                    Loading please wait ....
                                </div>
                                <br />

                                <div class="spinner">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="area">
                        <div id="areaData" class="areaData">
                            <div class="actualloadeddata">
                                <div class="messageDiv">
                                    Loading please wait ....
                                </div>
                                <br />

                                <div class="spinner">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="latest">
                        <div id="latestsData" class="latestsData">
                            <div class="messageDiv">
                                Loading please wait ....
                            </div>
                            <br />

                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contacts">
                        <div id="contactsData" class="contactsData">
                            <div class="messageDiv">
                                Loading please wait ....
                            </div>
                            <br />

                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="headernotification">Notifications</h2>
                        <div class="notificationheading span12" style="text-align: center; width: 100%;">
                            <div class="filtericon">
                                <select name="filter" class="filterdrop select2-hidden-accessible" id="filter" data-select2-id="filter" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                    <option value="showall" data-select2-id="2">
                                        Show All
                                    </option>
                                    <option value="login" data-select2-id="245">
                                        Favourite Online
                                    </option>
                                    <option value="view" data-select2-id="246">
                                        Visitors
                                    </option>
                                    <option value="gallery" data-select2-id="247">
                                        Gallery Requests
                                    </option>
                                    <option value="profile" data-select2-id="248">
                                        Admin
                                    </option>
                                </select>
                                <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="249" style="width: auto;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-filter-container">
                                            <span
                                                class="select2-selection__rendered"
                                                id="select2-filter-container"
                                                role="textbox"
                                                aria-readonly="true"
                                                title="
                                         Show All
                                     "
                                            >
                                                Show All
                                            </span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                                <div class="settingsnotification">
                                    <a href="/profile/preferences"> <i class="smicon-new smicon-cog"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="photoBoxHolder2">
                            <div class="notifications customheight"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

                                    <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                    <!--       -->

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
                                    <!--        <li class="--><!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                    <!--      -->

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
    
        <form  method="POST" action="{{ route('education_create' ) }}" >

            @csrf

    @if(@isset($education))
    
        <input type="hidden" name="is_prev" id="is_prev" value="0" />
        <div role="form" class="form-horizontal">
            <div id="EducationLevel-group" class="form-group has-feedback form-control-group">
                <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                <div class="controls">
                    <select
                        name="EducationLevel"
                        id="EducationLevel"
                        required="required"
                        data-select2-id="EducationLevel"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >{{$education-> EducationLevel}}</option>
                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_EducationLevel}}</option>

                        @endforeach

                    </select>
                    
                </div>
                
            </div>

            <div id="SubjectStudied-group" class="form-group has-feedback form-control-group">
                <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                <div class="controls">
                    <input name="SubjectStudied" id="SubjectStudied" type="text" required="required" value="{{$education-> SubjectStudied}}" class="form-control" />
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
                    <select
                        name="Employment"
                        id="Employment"
                        required="required"
                        
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >{{$education-> Employment}}</option>
                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_value}}</option>

                        @endforeach
                        
                    </select>
                    
                </div>
                
            </div>

            <div id="FirstLang-group" class="form-group has-feedback form-control-group">
                <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                <div class="controls">
                    <select
                        name="FirstLang"
                        id="FirstLang"
                        required="required"
                        
                        data-select2-id="FirstLang"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >{{$education-> FirstLang}}</option>
                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_Language}}</option>

                        @endforeach
                    </select>
                    
                </div>
                
            </div>

            <div id="SecondLang-group" class="form-group has-feedback form-control-group">
                <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                <div class="controls">
                    <select
                        name="SecondLang"
                        id="SecondLang"
                        required="required"
                        data-select2-id="SecondLang"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >{{$education-> SecondLang}}</option>
                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_Language}}</option>

                        @endforeach
                    </select>       
                </div>                            
            </div>

            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12 textalignright">
                    <button name="Submit" id="Submit" type="submit"   class="btn btn-primary btn-lg textalignright disabled">Next</button>
                </div>
            </div>
        </div>

    
        @else 
        <input type="hidden" name="is_prev" id="is_prev" value="0" />
        <div role="form" class="form-horizontal">
            <div id="EducationLevel-group" class="form-group has-feedback form-control-group">
                <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                <div class="controls">
                    <select
                        name="EducationLevel"
                        id="EducationLevel"
                        required="required"
                        data-select2-id="EducationLevel"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option>Select Option</option>
                                                                                                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_EducationLevel}}</option>

                        @endforeach
                        
                        {{-- <option value="27" data-select2-id="13">Bachelors degree</option>
                        <option value="25" data-select2-id="14">College</option>
                        <option value="30" data-select2-id="15">Doctorate</option>
                        <option value="24" data-select2-id="16">High school</option>
                        <option value="28" data-select2-id="17">Masters degree</option>
                        <option value="26" data-select2-id="18">Non degree qualification</option>
                        <option value="32" data-select2-id="19">Prefer not to say</option>
                        <option value="29" data-select2-id="20">Other degree</option>
                        <option value="31" data-select2-id="21">Other</option> --}}
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
                    <select
                        name="Employment"
                        id="Employment"
                        required="required"
                        
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >Select Option</option>
                        
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_value}}</option>

                        @endforeach
                        
                    </select>
                    
                </div>
                
            </div>

            <div id="FirstLang-group" class="form-group has-feedback form-control-group">
                <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                <div class="controls">
                    <select
                        name="FirstLang"
                        id="FirstLang"
                        required="required"
                        data-select2-id="FirstLang"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >Select Option</option>
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_Language}}</option>

                        @endforeach
                        
                        {{-- <option value="76" data-select2-id="160">English</option>
                        <option value="78" data-select2-id="161">Arabic</option>
                        <option value="429" data-select2-id="162">Balochi</option>
                        <option value="81" data-select2-id="163">Bengali</option>
                        <option value="82" data-select2-id="164">Chinese</option>
                        <option value="85" data-select2-id="165">Dutch</option>
                        <option value="86" data-select2-id="166">French</option>
                        <option value="87" data-select2-id="167">German</option>
                        <option value="84" data-select2-id="168">Greek</option>
                        <option value="80" data-select2-id="169">Gujerati</option>
                        <option value="298" data-select2-id="170">Hebrew</option>
                        <option value="83" data-select2-id="171">Hindi</option>
                        <option value="293" data-select2-id="172">Hindko</option>
                        <option value="88" data-select2-id="173">Italian</option>
                        <option value="89" data-select2-id="174">Japanese</option>
                        <option value="163" data-select2-id="175">Kurdish</option>
                        <option value="286" data-select2-id="176">Kutchi</option>
                        <option value="92" data-select2-id="177">Latin</option>
                        <option value="287" data-select2-id="178">Mirpuri</option>
                        <option value="90" data-select2-id="179">Persian</option>
                        <option value="91" data-select2-id="180">Portugese</option>
                        <option value="285" data-select2-id="181">Potwari</option>
                        <option value="77" data-select2-id="182">Punjabi</option>
                        <option value="171" data-select2-id="183">Pushto</option>
                        <option value="93" data-select2-id="184">Russian</option>
                        <option value="94" data-select2-id="185">Spanish</option>
                        <option value="288" data-select2-id="186">Sylheti</option>
                        <option value="295" data-select2-id="187">Tamil</option>
                        <option value="168" data-select2-id="188">Turkish</option>
                        <option value="79" data-select2-id="189">Urdu</option>
                        <option value="95" data-select2-id="190">Other</option>
                        <option value="469" data-select2-id="191">Kashmiri</option>
                        <option value="499" data-select2-id="192">Korean</option>
                        <option value="564" data-select2-id="193">Saraiki</option>
                        <option value="583" data-select2-id="194">Sindhi</option> --}}
                    </select>
                    
                </div>
                
            </div>

            <div id="SecondLang-group" class="form-group has-feedback form-control-group">
                <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                <div class="controls">
                    <select
                        name="SecondLang"
                        id="SecondLang"
                        required="required"
                        data-select2-id="SecondLang"
                        tabindex="-1"
                        aria-hidden="true"
                        data-error="Please fill out this field."
                    >
                        <option >Select Option</option>
                        @foreach ($employments as $employment)
                            
                        <option >{{$employment-> employment_Language}}</option>

                        @endforeach

                    </select>
                    
                </div>
                
            </div>


            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12 textalignright">
                    <button name="Submit" id="Submit" type="submit"   class="btn btn-primary btn-lg textalignright disabled">Next</button>
                </div>
            </div>
        </div>
    
    @endif

        

        <span class="pull-left required stepsRequired">* Required Field</span>
        <div class="textalignright abspositionBack">
            <button   onClick="location.href='/signup/aboutme'" id="savePreviousDatas" class="btn btn-primary btn-lg" value="back">Previous</button>   
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