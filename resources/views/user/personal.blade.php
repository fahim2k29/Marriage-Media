@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_personal_display">
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
                                    <option value="login" data-select2-id="386">
                                        Favourite Online
                                    </option>
                                    <option value="view" data-select2-id="387">
                                        Visitors
                                    </option>
                                    <option value="gallery" data-select2-id="388">
                                        Gallery Requests
                                    </option>
                                    <option value="profile" data-select2-id="389">
                                        Admin
                                    </option>
                                </select>
                                <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="390" style="width: auto;">
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
                                             @csrf
                                               
                                             
                                            @if(isset($personal))
                                             <input type="hidden" name="is_prev" id="is_prev" value="0" />
                                                <div role="form" class="form-horizontal">
                                                    <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Citizenship"
                                                                id="Citizenship"
                                                                required="required"
                                                                data-select2-id="Citizenship"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Citizenship}}</option>
                                                                                                        
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Citizenship_data}}</option>

                                                                @endforeach

                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Origin-group" class="form-group has-feedback form-control-group">
                                                        <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Origin"
                                                                id="Origin"
                                                                required="required"
                                                                data-select2-id="Origin"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Origin}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Origin_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Relocation-group" class="form-group has-feedback form-control-group">
                                                        <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Relocation"
                                                                id="Relocation"
                                                                required="required"
                                                                data-select2-id="Relocation"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                
                                                                <option>{{$personal->Relocation}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Relocation_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Income-group" class="form-group has-feedback form-control-group">
                                                        <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Income"
                                                                id="Income"
                                                                required="required"
                                                                data-select2-id="Income"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>{{$personal->Income}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Income_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                                                        <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MarryIn"
                                                                id="MarryIn"
                                                                required="required"
                                                                data-select2-id="MarryIn"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>{{$personal->MarryIn}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> MarryIn_data}}</option>

                                                                @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                                                        <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MaritalStatus"
                                                                id="MaritalStatus"
                                                                required="required"
                                                                data-select2-id="MaritalStatus"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->MaritalStatus}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> MaritalStatus_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Children-group" class="form-group has-feedback form-control-group">
                                                        <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Children"
                                                                id="Children"
                                                                required="required"
                                                                data-select2-id="Children"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Children}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Children_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                                                        <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="HaveChildren"
                                                                id="HaveChildren"
                                                                required="required"
                                                                data-select2-id="HaveChildren"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->HaveChildren}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> HaveChildren_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Living-group" class="form-group has-feedback form-control-group">
                                                        <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Living"
                                                                id="Living"
                                                                required="required"
                                                                data-select2-id="Living"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Living}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Living_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Height-group" class="form-group has-feedback form-control-group">
                                                        <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Height"
                                                                id="Height"
                                                                required="required"
                                                                data-select2-id="Height"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Height}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Height_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <
                                                    </div>

                                                    <div id="Build-group" class="form-group has-feedback form-control-group">
                                                        <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Build"
                                                                id="Build"
                                                                required="required"
                                                                data-select2-id="Build"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Build}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Build_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Hair-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Hair"
                                                                id="Hair"
                                                                required="required"
                                                                data-select2-id="Hair"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>{{$personal->Hair}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Hair_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                                                        <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="controls">
                                                            <select
                                                                name="EyeColour"
                                                                id="EyeColour"
                                                                required="required"
                                                                data-select2-id="EyeColour"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->EyeColour}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> EyeColour_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Smoke-group" class="form-group has-feedback form-control-group">
                                                        <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Smoke"
                                                                id="Smoke"
                                                                required="required"
                                                                data-select2-id="Smoke"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>{{$personal->Smoke}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Smoke_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                       
                                                    </div>

                                                    <div id="Disabilities-group" class="form-group has-feedback form-control-group">
                                                        <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Disabilities"
                                                                id="Disabilities"
                                                                required="required"
                                                                data-select2-id="Disabilities"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>{{$personal->Disabilities}}</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Disabilities_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            @else

                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />

                                                <div role="form" class="form-horizontal">
                                                    <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Citizenship"
                                                                id="Citizenship"
                                                                required="required"
                                                                data-select2-id="Citizenship"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                        
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Citizenship_data}}</option>

                                                                @endforeach

                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Origin-group" class="form-group has-feedback form-control-group">
                                                        <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Origin"
                                                                id="Origin"
                                                                required="required"
                                                                data-select2-id="Origin"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Origin_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Relocation-group" class="form-group has-feedback form-control-group">
                                                        <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Relocation"
                                                                id="Relocation"
                                                                required="required"
                                                                data-select2-id="Relocation"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Relocation_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Income-group" class="form-group has-feedback form-control-group">
                                                        <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Income"
                                                                id="Income"
                                                                required="required"
                                                                data-select2-id="Income"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Income_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                                                        <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MarryIn"
                                                                id="MarryIn"
                                                                required="required"
                                                                data-select2-id="MarryIn"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> MarryIn_data}}</option>

                                                                @endforeach
                                                            </select>
                                                           
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                                                        <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MaritalStatus"
                                                                id="MaritalStatus"
                                                                required="required"
                                                                data-select2-id="MaritalStatus"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> MaritalStatus_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Children-group" class="form-group has-feedback form-control-group">
                                                        <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Children"
                                                                id="Children"
                                                                required="required"
                                                                data-select2-id="Children"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Children_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                                                        <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="HaveChildren"
                                                                id="HaveChildren"
                                                                required="required"
                                                                data-select2-id="HaveChildren"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> HaveChildren_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Living-group" class="form-group has-feedback form-control-group">
                                                        <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Living"
                                                                id="Living"
                                                                required="required"
                                                                data-select2-id="Living"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Living_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Height-group" class="form-group has-feedback form-control-group">
                                                        <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Height"
                                                                id="Height"
                                                                required="required"
                                                                data-select2-id="Height"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Height_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        <
                                                    </div>

                                                    <div id="Build-group" class="form-group has-feedback form-control-group">
                                                        <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Build"
                                                                id="Build"
                                                                required="required"
                                                                data-select2-id="Build"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Build_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Hair-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Hair"
                                                                id="Hair"
                                                                required="required"
                                                                data-select2-id="Hair"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Hair_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                                                        <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="controls">
                                                            <select
                                                                name="EyeColour"
                                                                id="EyeColour"
                                                                required="required"
                                                                data-select2-id="EyeColour"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> EyeColour_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Smoke-group" class="form-group has-feedback form-control-group">
                                                        <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Smoke"
                                                                id="Smoke"
                                                                required="required"
                                                                data-select2-id="Smoke"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                               <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Smoke_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                       
                                                    </div>

                                                    <div id="Disabilities-group" class="form-group has-feedback form-control-group">
                                                        <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Disabilities"
                                                                id="Disabilities"
                                                                required="required"
                                                                data-select2-id="Disabilities"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option>Select Option</option>
                                                                                                                                                                       
                                                                @foreach ($personaldatas as $personaldata)
                                                                    
                                                                <option >{{$personaldata-> Disabilities_data}}</option>

                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endif

                                                <span class="pull-left required stepsRequired">* Required Field</span>
                                                <div class="textalignright abspositionBack">
                                                    <button type="button" name="savePreviousDatas" onClick="location.href='/signup/education'"  id="savePreviousDatas" class="btn btn-primary btn-lg" value="Previous">Previous</button>
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
