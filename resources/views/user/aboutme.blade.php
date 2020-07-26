@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_aboutYou_display">
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
                                    <option value="login" data-select2-id="3">
                                        Favourite Online
                                    </option>
                                    <option value="view" data-select2-id="4">
                                        Visitors
                                    </option>
                                    <option value="gallery" data-select2-id="5">
                                        Gallery Requests
                                    </option>
                                    <option value="profile" data-select2-id="6">
                                        Admin
                                    </option>
                                </select>
                                <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="7" style="width: auto;">
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
    <div class="col-lg-12 col-md-12" id="aboutYou_display">
        <div class="row">
            <div class="topbar-bg containerTopmargin containerUsermargin">
                <div class="topSteps">
                    <div class="row bs-wizard" style="border-bottom: 0;">
                        <div class="col-md-1 col-lg-2 bs-wizard-step complete active">
                            <div class="text-center bs-wizard-stepnum">Step 1</div>
                            <div class="progress"><div class="progress-bar"></div></div>
                            <a href="#" class="bs-wizard-dot"></a>
                            <div class="bs-wizard-info text-center">About Me</div>
                        </div>
                        <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
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
                                    <div class="subTitleround secondFont headingchange">About You</div>
                                </div>
                                <div class="panel-body">

                                    <form  method="POST" action="{{ route('aboutme_create' ) }}" >
            
                                        @csrf
                                            @if(isset($aboutme))
                                        <div role="form" class="form-horizontal">
                                            <div id="Headline-group" class="form-group has-feedback form-control-group">
                                                <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
                                                <div class="controls">
                                                    <input name="Headline" id="Headline" type="text" required="required" value="{{ $aboutme->Headline }}"  class="form-control" />
                                                </div>
                                                <span
                                                    id="Headline-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Create a short strap-line for your profile."
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div id="Description-group" class="form-group has-feedback form-control-group">
                                                <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
                                                <div class="controls">
                                                    <!-- <input name="Description" id="Headline" type="text" required="required" value="{{ $aboutme->Description }}"  class="form-control" /> -->

                                                    <textarea name="Description" id="Description" required="required" class="form-control"  style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;">{{ $aboutme->Description }}</textarea>
                                                </div>
                                                <span
                                                    id="Description-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Please describe yourself. You can include information about your hobbies and interests; family; occupation etc. "
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div id="LookingFor-group" class="form-group has-feedback form-control-group">
                                                <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
                                                <div class="controls">
                                                    <textarea name="LookingFor" id="LookingFor" required="required" class="form-control"  style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;">{{ $aboutme->LookingFor }}</textarea>
                                                </div>
                                                <span
                                                    id="LookingFor-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Please describe the type of person you are looking for. "
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                    <button name="Submit" id="Submit" type="submit"   class="btn btn-primary btn-submit-register registerUserbtn">Next</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pull-left required stepsRequired">* Required Field</span>
                                                
                                        @else
                                        
                                        <div role="form" class="form-horizontal">
                                            <div id="Headline-group" class="form-group has-feedback form-control-group">
                                                <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
                                                <div class="controls">
                                                    <input name="Headline" id="Headline" type="text" required="required"  class="form-control" />
                                                </div>
                                                <span
                                                    id="Headline-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Create a short strap-line for your profile."
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div id="Description-group" class="form-group has-feedback form-control-group">
                                                <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
                                                <div class="controls">
                                                    <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
                                                </div>
                                                <span
                                                    id="Description-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Please describe yourself. You can include information about your hobbies and interests; family; occupation etc. "
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div id="LookingFor-group" class="form-group has-feedback form-control-group">
                                                <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
                                                <div class="controls">
                                                    <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
                                                </div>
                                                <span
                                                    id="LookingFor-span-success"
                                                    class="smicon-new form-control-feedback smicon-info male span-info-label"
                                                    data-toggle="tooltip"
                                                    data-placement="right"
                                                    title=""
                                                    data-original-title="Please describe the type of person you are looking for. "
                                                ></span>
                                                <span class="help-block with-errors" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Next</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pull-left required stepsRequired">* Required Field</span>
                                        
                                        @endif

                                        <!--
            <div style="margin-top:-50px; position: absolute;">
                                    </div>
                                    --></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Code for Signup Conversion Page -->
        <!--<script type="text/javascript">-->
        <!--    /* <![CDATA[ */-->
        <!--    var google_conversion_id = 1071266576;-->
        <!--    var google_conversion_language = "en_GB";-->
        <!--    var google_conversion_format = "1";-->
        <!--    var google_conversion_color = "ffffff";-->
        <!--    var google_conversion_label = "IRaXCLKOPxCQ9uj-Aw";-->
        <!--    var google_conversion_value = 1.00;-->
        <!--    var google_conversion_currency = "GBP";-->
        <!--    var google_remarketing_only = false;-->
        <!--    /* ]]> */-->
        <!--</script>-->
        <!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">-->
        <!--</script>-->
        <!--<noscript>-->
        <!--    <div style="display:inline;">-->
        <!--        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071266576/?value=1.00&amp;currency_code=GBP&amp;label=IRaXCLKOPxCQ9uj-Aw&amp;guid=ON&amp;script=0"/>-->
        <!--    </div>-->
        <!--</noscript>-->
        <script>
            $(function () {
                dataLayer.push({
                    event: "SignupWeb",
                });
            });
        </script>
    </div>
</div>
        <!-- /.row -->
    </div>
</div>

@endsection
