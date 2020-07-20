@extends('user.app') @section('content')
<div class="wide_fullbgimage userLogin_Display wide_login_bg register_addPhoto_display">
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
<div class="col-lg-12 col-md-12" id="addPhoto_display">
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

                <div class="col-md-2 col-lg-2 bs-wizard-step complete">
                    <!-- active -->
                    <div class="text-center bs-wizard-stepnum">Step 5</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="/register/officeuse" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><a href="/register/officeuse">Office Use</a></div>
                </div>
                <div class="col-md-2 col-lg-2 bs-wizard-step active">
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
        <div class="subTitleround secondFont headingchange">Add Photo - This will be your main profile picture</div>
    </div>
    <div class="panel-body">        
    <form method="post" action="{{ route('addPhoto_create') }}" enctype="multipart/form-data">
        @csrf
        <div class="photouploadRegistration">
                <div class="uploadRow">
                    <div class="pull-left uploadArea">
                        <div name="addPhoto"  data-imagetype="primary">
                            <div class="dz-message">
                                <label for="addPhoto" class="control-label"> Select your Profile Photo</label>
                                <div class="controls">
                                    <input name="image" id="addPhoto" type="file" required="required" value="b" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pull-left picGuidelineArea">
                        <div class="primaryPicGuide">
                            <div class="col-sm-5">
                                <ul>
                                    <li>
                                        <img src="/frontend/assets/images/guideline_images/primarypic.jpg" class="img-responsive" />
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-7 secondFont">
                                <h4>Guidelines</h4>

                                <ul class="userguideline-primary">
                                    <li style="width: 100%;">Passport Style</li>
                                    <li style="width: 100%;">Clear face image</li>

                                    <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No sun glasses</span></li>
                                    <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No snapchat filters</span></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="uploadRow_moreimages">
                    <div class="uploadGuiderow1"></div>
                    <div class="uploadGuiderow2">
                        <div class="notAllowedGuide">
                            <div class="secondFont headings">Not Allowed</div>

                            <ul class="notAlloweduser">
                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/blur.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>

                                        <!-- <img src="/resources/images/guideline-images/user_notallowed_1.png" class="img-responsive" />  -->
                                    </div>
                                    <div class="secondFont divHeading">
                                        Blurry
                                    </div>
                                </li>
                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/bodyshot.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>
                                    </div>
                                    <div class="secondFont divHeading">
                                        Bodyshot
                                    </div>
                                </li>
                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/cartoon.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>
                                    </div>
                                    <div class="secondFont divHeading">
                                        Cartoon
                                    </div>
                                </li>
                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/group.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>
                                    </div>
                                    <div class="secondFont divHeading">
                                        Group
                                    </div>
                                </li>

                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/offencive.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>
                                    </div>
                                    <div class="secondFont divHeading">
                                        Offensive
                                    </div>
                                </li>
                                <li>
                                    <div class="imgUser">
                                        <div class="div-guide-line-item-image">
                                            <img src="/frontend/assets/images/guideline_images/scenic.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                            <span class="span-tick bad smicon-new smicon-close"></span>
                                        </div>
                                    </div>
                                    <div class="secondFont divHeading">
                                        Scenic
                                    </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="pull-left prevButton">
                <a href="/signup/officeUse" class="btn btn-primary">Previous</a>
            </div>
    
            <div class="pull-right nextButton">
                <button name="Submit" id="Submit" type="submit"   class="btn btn-primary btn-submit-register registerUserbtn">Submit</button>
            </div>
        </form>

        <div class="clearfix"></div>


        <div class="modal fade modalPictureEdit" role="dialog" id="gridSystemModal" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="mainEditor">
                            <div class="pull-left pictureEditArea">
                                <div class="pictureCanvas img-container" data-loadimage="">
                                    <img src="" />
                                </div>
                                <div class="clearfix buttonsArea docs-actions">
                                    <span class="pull-left smicon-new smicon-info informationIcon pointerCursor"></span>

                                    <div class="col-xs-2 btnsetZoom">
                                        <div class="btn-group">
                                            <div class="topbutton">
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                        <span class="glyphicon glyphicon-plus"> </span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="bottombutton">
                                                <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                        <span class="glyphicon glyphicon-minus"> </span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 btnsetRotate">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-rotateLeft" title="Rotate Left">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                    <span class="smicon-new smicon-rotate-left"></span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-rotateRight" title="Rotate Right">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                    <span class="smicon-new smicon-rotate-right"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 btnsetArrows">
                                        <!-- arrow controls -->
                                        <div class="btn-group-arrow btn-group">
                                            <div class="arrowButton">
                                                <div class="row">
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                <span class="glyphicon glyphicon-arrow-left"> </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end arrow controls -->
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="pull-right picdescriptionArea">
                                <div class="pictureDescriptionAreainner">
                                    <div class="infoIcons">
                                        <span class="pointerCursor pull-right" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="margin-top: -8px; font-size: 20px; padding-top: -10px; margin-left: -9px; position: absolute;">×</span>
                                        </span>
                                    </div>

                                    <div class="groupbutton">
                                        <div class="btn-group">
                                            <!--  <button type="button" data-typename="primary" class="col-xs-12 btn btn-primary">Primary Photo</button> -->
                                            <span data-typename="primary" class="col-xs-12" style="font-size: 25px;">Primary Photo</span>
                                        </div>
                                    </div>

                                    <div class="userGuideContent secondFont">
                                        <span class="col-xs-12" style="font-size: 15px; text-align: center; margin-bottom: 10px;">This will be your main profile picture</span>
                                        <h4>Guidelines</h4>
                                        <ul class="userguideline-primary" style="display: block;">
                                            <li>Passport Style</li>
                                            <li>Clear face image</li>
                                            <li>Cropped face image</li>
                                        </ul>

                                        <ul class="userguideline-public" style="display: none;">
                                            <li>Any pictures of yourself</li>
                                            <li>Yourself with family</li>
                                            <li>Yourself with friends</li>
                                        </ul>
                                        <div class="forMaindashboard" style="display: none;">
                                            Your primary picture must be a clear, closely cropped face image of yourself, similar to your passport photo.
                                        </div>
                                    </div>

                                    <div class="descriptionBox">
                                        <textarea id="txtPicDescription" maxlength="100" style="resize: none; overflow-x: hidden; overflow-wrap: break-word;" placeholder="Add description here"></textarea>

                                        <div id="textarea_feedback">100 characters remaining</div>
                                    </div>
                                </div>
                                <div class="buttonsAreaAction">
                                    <div class="pull-left buttonmidWidth">
                                        <button type="button" class="btn btn-danger btn-delete-main btn-Delete" data-islocation="true">Delete</button>
                                    </div>
                                    <div class="pull-left buttonrightWidth">
                                        <button type="button" class="btn btn-primary btn-cancel" onclick="location.reload();">Cancel</button>
                                    </div>

                                    <div class="pull-left buttonleftWidth">
                                        <button type="button" class="btn btn-success btn-savePicture">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="guidelines">
                            <div class="picdescriptionArea_1">
                                <div class="guideline">
                                    <div class="hideClose pull-right">
                                        <span aria-hidden="true" style="margin-top: -9px; font-size: 35px; padding-top: -10px; margin-left: -29px; position: absolute;">×</span>
                                    </div>
                                    <div class="primaryPicGuide">
                                        <div class="col-sm-12">
                                            <h4 style="color: #007ea5; text-align: center; margin-top: -22px; width: 80%; margin-left: 32px;">Primary Picture Guidelines</h4>
                                            <ul>
                                                <li style="width: 271px; list-style: none; margin-top: 15px;">
                                                    <img src="/images/guideline-images/primarypic.jpg" class="img-responsive" style="margin-left: 70px; height: 172px;" />
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-sm-12 secondFont" style="padding-left: 35px; padding-right: 0px;">
                                            <div class="userGuideContent secondFont" style="height: 90px; margin-top: 13px;">
                                                <div class="col-sm-6">
                                                    <ul class="clearfix userguideline-primary_2" style="display: block;">
                                                        <li style="width: 100%; padding: 5px 3px;">Passport Style</li>
                                                        <li style="width: 100%; padding: 5px 3px;">Clear face image</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6" style="padding: 0px;">
                                                    <ul class="clearfix userguideline-primary_2" style="display: block;">
                                                        <li class="span-icon smicon-new smicon-remove newlistyle" style="padding-top: 11px;"><span class="secondFont">No sun glasses</span></li>
                                                        <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No snapchat filters</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="clearfix checkboxanddismiss">
                                        <div class=" " style="text-align: center; padding-left: 10px;">
                                            <a class="dismissContent hideClose">
                                                Dismiss
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
</div>
</div>
</div>
    </div>
</div>
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