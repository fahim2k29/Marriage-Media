@extends('user.profile.app') @section('content')

<div class="container headerColor">
    <div class="page-header pageheaderown">
        <div class="pageheader-heading">
            <h3>Your Settings</h3>
        </div>
    </div>
</div>
<div class="wide_fullbgimage">
    <div class="container containerbgColor">
        

        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="editPhotos">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-lg-3 col-md-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle settingbreadcrumbChange" style="">
                                    <a href="/dashboard">Home</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/profile/edit#edit">Setting</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Edit My Photos</a>
                                </nav>
                                <nav class="nav-sidebar">
                                    <ul class="nav">
                                        <h6 class="dropdown-header sidemenuheader" style="margin-top: 0px;">Profile</h6>
                                        <li class="">
                                            <a href="/profile/edit#edit"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="/profile/personalinfo"><i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
                                        </li>
                                        <li class="bottombodernone">
                                            <a href="/profile/preferences">
                                                <i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>

                                        <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
                                        <!--       -->

                                        <h6 class="dropdown-header sidemenuheader">Photos</h6>
                                        <li class="active">
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

                                        <h6 class="dropdown-header sidemenuheader">Account &amp; Security</h6>

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
                                            <a href="/profile/delete" data-username="fahim900">
                                                <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="col-lg-9 col-md-9 minheightprofile boxforms" style="padding: 0px;">
                                <div class="subTitleround secondFont headingchange">Edit My Photos</div>

                                <form id="frmgalleryMain" class="form-horizontal" role="form" action="" method="post" style="margin-top: 10px;">
                                    <!-- primary image -->

                                    <div class="panel panel-default">
                                        <div class="panel-body" style="padding: 1px;">
                                            <div class="panel panel-primary panel-primary-pic" style="margin-bottom: 1px; border: 0px;">
                                                <!-- Heading -->
                                                <div class="panel-heading">
                                                    <h2 class="panel-title panel-title-own pull-left" id="primaryphotos">Primary Photo</h2>
                                                    <span class="galleryheadingcontent pull-left">Your main picture</span>
                                                    <span class="clearfix"></span>
                                                    <hr />
                                                </div>
                                                <!-- /Heading -->

                                                <!-- Body -->
                                                <div class="panel-body">
                                                    <ul class="row primary">
                                                        <div class="view view-sixth">
                                                            <img
                                                                src="{{asset('frontend/assets/images/')}}/{{ $addPhoto->image }}"
                                                            />

                                                            <div class="notapproved transparent secondFont">Pending Approval</div>

                                                            <div class="mask">
                                                                <!--       <div class="col-lg-12" > <a href="#" class="info btn-primary">  <i class="smicon smicon-tick-good"></i>&nbsp;&nbsp;Set as Primary</a></div> -->
                                                                <div class="col-lg-12" style="margin-top: 40px;">
                                                                    <a href="#" class="info btn-info btn-makeaspublic" data-pictype="public" data-pickey="ZGEwNmU4OWZlZjY3ODI4Y9MljcTGyexSHTn8OF-3yu79_vAW6DS6QSMPzVHMfFBZ$">
                                                                        <i class="smicon-new smicon-unlock"></i>&nbsp;&nbsp;Make Public
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <a href="#" class="info btn-info btn-makeasprivate" data-pictype="private" data-pickey="ZGEwNmU4OWZlZjY3ODI4Y9MljcTGyexSHTn8OF-3yu79_vAW6DS6QSMPzVHMfFBZ$">
                                                                        <i class="smicon-new smicon-lock"></i>&nbsp;&nbsp;Make Private
                                                                    </a>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <a
                                                                        href="#"
                                                                        class="info btn-success btn-editpicture"
                                                                        data-showdialog="false"
                                                                        data-pictype="primary"
                                                                        data-toggle="modal"
                                                                        data-pickey="ZGEwNmU4OWZlZjY3ODI4Y9MljcTGyexSHTn8OF-3yu79_vAW6DS6QSMPzVHMfFBZ$"
                                                                        data-loadimagepopup="//gallery.singlemuslim.com/image/515x515/NjU2YzE0NzFkOGNjOTYzYet24gR5RxXPUlvFV5aLyXIic9oPhUZzfDyKyPSwCIkh-SQ2Y1IIeJ5OnHzelpOMxwX0hsb08he200qvHHHFgY36DvwcyD9Z_x0K-Di2WXfb4ok2X_pW_H9RKcgJi7-vqUhJMEDYUckTphzRQSp6cE-t5bRGXZDtqPQqMbXFTNo_m787zjOWjrIGvIiyOqKWyA$$$.jpg"
                                                                    >
                                                                        <i class="smicon-new smicon-pencil"></i>&nbsp;&nbsp;Edit
                                                                    </a>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <a href="#" class="info btn-danger btn-delete-main" data-pickey="ZGEwNmU4OWZlZjY3ODI4Y9MljcTGyexSHTn8OF-3yu79_vAW6DS6QSMPzVHMfFBZ$">
                                                                        <i class="smicon-new smicon-trash"></i>
                                                                        &nbsp;&nbsp;Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <li class="col-lg-8 col-md-8" style="width: 495px;">
                                                            <div class="clearfix div-gallery-type-item-list col-xs-12">
                                                                <div class="div-gallery-type-item access-request-report">
                                                                    <div class="div-access-request-report-header">
                                                                        <div class="div-access-request-report-header-icon smicon-new smicon-lock"></div>
                                                                        <div class="div-access-request-report-header-text">Photo Access Control Panel</div>
                                                                        <div class="clearfix"></div>
                                                                    </div>

                                                                    <a href="accesslist/1">
                                                                        <div class="div-access-request-report-content">
                                                                            <div class="div-access-request-report-content-text">
                                                                                <div class="line-1 secondFont">User Access</div>
                                                                            </div>
                                                                            <div class="div-access-request-report-content-count"></div>
                                                                            <div class="div-access-request-arrow smicon-new smicon-angle-right"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- end auth Request -->

                                                                    <!-- access control for requests -->

                                                                    <a href="accesslist/2">
                                                                        <div class="div-access-request-report-content">
                                                                            <div class="div-access-request-report-content-text">
                                                                                <div class="line-1 secondFont">User Requests</div>
                                                                            </div>
                                                                            <div class="div-access-request-report-content-count"></div>
                                                                            <div class="div-access-request-arrow smicon-new smicon-angle-right"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- end requests -->

                                                                    <!-- access requests -->

                                                                    <a href="accesslist/3">
                                                                        <div class="div-access-request-report-content">
                                                                            <div class="div-access-request-report-content-text">
                                                                                <div class="line-1 secondFont">My Access</div>
                                                                            </div>
                                                                            <div class="div-access-request-report-content-count"></div>
                                                                            <div class="div-access-request-arrow smicon-new smicon-angle-right"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- end access requests -->

                                                                    <!-- access requests -->

                                                                    <a href="accesslist/4">
                                                                        <div class="div-access-request-report-content">
                                                                            <div class="div-access-request-report-content-text">
                                                                                <div class="line-1 secondFont">My Requests</div>
                                                                            </div>
                                                                            <div class="div-access-request-report-content-count"></div>
                                                                            <div class="div-access-request-arrow smicon-new smicon-angle-right"></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- end access requests -->
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Body -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- public image -->

                                    <div class="panel panel-default">
                                        <div class="panel-body" style="padding: 1px;">
                                            <div class="panel panel-primary panel-public" style="margin-bottom: 1px; border: 0px;">
                                                <!-- Heading -->
                                                <div class="panel-heading">
                                                    <h2 class="panel-title panel-title-own pull-left" id="publicphotos">Public Gallery</h2>
                                                    <span class="galleryheadingcontent pull-left">Everybody can view these pictures</span>
                                                    <span class="clearfix"></span>
                                                    <hr />
                                                </div>
                                                <!-- /Heading -->

                                                <!-- Body -->
                                                <div class="panel-body">
                                                    <ul class="row public">
                                                        <div class="view view-sixth">
                                                            <img
                                                                src="//gallery.singlemuslim.com/image/240x240/NjAzNzljYTIwZWZmYjcwMTwLqvMk9a_q4RYbxEDjlE1cbdA9gn4tCUZIqMrqbm7FXeAPKDkKSSG-ziqtRFL7RTDjjQYV7N11Ua3xggxBQrSh-n8sCCalEpgpzU6rlue3fmHM7DVYzk3g3Va0D2k47G_wDKxswrCwxqepekF_lSyNYDsVw4eQCH3NWJM8QrVrqS-wvSknbQCYtnq2NrBw0g$$$.jpg"
                                                            />

                                                            <div class="notapproved transparent secondFont">Pending Approval</div>

                                                            <div class="mask">
                                                                <div class="col-lg-12" style="margin-top: 40px;">
                                                                    <a href="#" class="info btn-primary btn-makeasprimary" data-pictype="primary" data-pickey="ZGEwNmU4OWZlZjY3ODI4Yz6RP8JeIYVefYHYd5O_f3Nn50Y8Ci8x-sgnj62XIgI5$">
                                                                        <i class="smicon-new smicon-check"></i>&nbsp;&nbsp;Set as Primary
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <a href="#" class="info btn-info btn-makeasprivate" data-pictype="private" data-pickey="ZGEwNmU4OWZlZjY3ODI4Yz6RP8JeIYVefYHYd5O_f3Nn50Y8Ci8x-sgnj62XIgI5$">
                                                                        <i class="smicon-new smicon-lock"></i>&nbsp;&nbsp;Make Private
                                                                    </a>
                                                                </div>
                                                                <!--      <div class="col-lg-12"> <a href="#" class="info btn-info">  <i class="smicon smicon-unlock"></i>Make Public</a></div> -->
                                                                <div class="col-lg-12">
                                                                    <a
                                                                        href="#"
                                                                        class="info btn-success btn-editpicture"
                                                                        data-showdialog="false"
                                                                        data-pictype="public"
                                                                        data-pickey="ZGEwNmU4OWZlZjY3ODI4Yz6RP8JeIYVefYHYd5O_f3Nn50Y8Ci8x-sgnj62XIgI5$"
                                                                        data-toggle="modal"
                                                                        data-loadimagepopup="//gallery.singlemuslim.com/image/515x515/NjAzNzljYTIwZWZmYjcwMTwLqvMk9a_q4RYbxEDjlE1cbdA9gn4tCUZIqMrqbm7FXeAPKDkKSSG-ziqtRFL7RTDjjQYV7N11Ua3xggxBQrSh-n8sCCalEpgpzU6rlue3fmHM7DVYzk3g3Va0D2k47G_wDKxswrCwxqepekF_lSyNYDsVw4eQCH3NWJM8QrVrqS-wvSknbQCYtnq2NrBw0g$$$.jpg"
                                                                    >
                                                                        <i class="smicon-new smicon-pencil"></i>&nbsp;&nbsp;Edit
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <a href="#" class="info btn-danger btn-delete-main" data-pickey="ZGEwNmU4OWZlZjY3ODI4Yz6RP8JeIYVefYHYd5O_f3Nn50Y8Ci8x-sgnj62XIgI5$">
                                                                        <i class="smicon-new smicon-trash"></i>
                                                                        &nbsp;&nbsp;Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <li class="view view-sixth view-drop">
                                                            <div
                                                                class="panel panel-success dragbox-div dragbox-public-div dropzone dz-clickable"
                                                                data-imagetype="public"
                                                                data-showdialog="false"
                                                                style="width: 100%; float: right; min-height: 241px;"
                                                            >
                                                                <div class="dz-message">
                                                                    <span class="plusicon"> + </span>
                                                                    <br />

                                                                    <span class="dropcontent">
                                                                        Drop photos <br />
                                                                        Click here to upload.
                                                                    </span>
                                                                    <br />
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Body -->
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- private image -->

                                <div class="panel panel-default">
                                    <div class="panel-body" style="padding: 1px;">
                                        <div class="panel panel-primary panel-private" style="margin-bottom: 1px; border: 0px;">
                                            <!-- Heading -->
                                            <div class="panel-heading">
                                                <h2 class="panel-title panel-title-own pull-left" id="privatephotos">Private Gallery</h2>
                                                <span class="galleryheadingcontent pull-left">Control who can view these pictures</span>
                                                <span class="clearfix"></span>
                                                <hr />
                                            </div>
                                            <!-- /Heading -->

                                            <!-- Body -->
                                            <div class="panel-body">
                                                <ul class="row private">
                                                    <li class="view view-sixth view-drop">
                                                        <div
                                                            class="panel panel-success dragbox-div dragbox-private-div dropzone dz-clickable"
                                                            data-isregister="false"
                                                            data-imagetype="private"
                                                            data-showdialog="false"
                                                            style="width: 100%; float: right; min-height: 241px;"
                                                        >
                                                            <form action="/pictureupload" class="" id="my-awesome-dropzone">
                                                                <div class="dz-message">
                                                                    <span class="plusicon"> + </span>
                                                                    <br />

                                                                    <span class="dropcontent">
                                                                        Drop photos <br />
                                                                        Click here to upload.
                                                                    </span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /Body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modalListAccess" style="display: none;">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">User Access</span>
                                <span class="btn_showusers" data-triggername="showItem-UserAccess"><button class="showUsers">&gt;&gt;</button></span>
                            </div>
                            <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                    Members who have access to view your private photos
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">User Requests</span>
                                <span class="btn_showusers" data-triggername="showItem-UserRequests"><button class="showUsers">&gt;&gt;</button></span>
                            </div>
                            <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                    Members who have requested to view your private photos
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">My Access</span>
                                <span class="btn_showusers" data-triggername="showItem-MyAccess"><button class="showUsers">&gt;&gt;</button></span>
                            </div>
                            <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                    Members who's private photos you have access to view
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">My Requests</span>
                                <span class="btn_showusers" data-triggername="showItem-MyRequests"><button class="showUsers">&gt;&gt;</button></span>
                            </div>
                            <ul class="list-group" id="contact-list">
                                <li class="list-group-item">
                                    Members who's private photos you have requested to view
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>

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
                                            <span class="pull-left smicon-new smicon-info informationIcon pointerCursor" data-type="primary"></span>

                                            <div class="col-xs-2 btnsetZoom">
                                                <div class="btn-group">
                                                    <div class="topbutton">
                                                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                                <span class="glyphicon glyphicon-plus"> </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="bottombutton">
                                                        <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                            <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                                <span class="glyphicon glyphicon-minus"> </span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 btnsetRotate">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-rotateLeft" title="Rotate Left">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                            <span class="smicon-new smicon-rotate-left"></span>
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-rotateRight" title="Rotate Right">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
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
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-4"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                                        <span class="glyphicon glyphicon-arrow-left"> </span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-4"></div>
                                                            <div class="col-sm-4">
                                                                <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                                        <span class="glyphicon glyphicon-arrow-right"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4"></div>
                                                            <div class="col-sm-4">
                                                                <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
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
                                                    <span aria-hidden="true" style="margin-top: -20px; font-size: 35px; padding-top: -10px; margin-left: -18px; position: absolute;">×</span>
                                                </span>
                                            </div>

                                            <div class="groupbutton">
                                                <div class="btn-group">
                                                    <button type="button" data-typename="primary" class="col-xs-4 btn btn-primary">Primary</button>
                                                    <button type="button" data-typename="public" class="col-xs-4 btn btn-primary">Public</button>
                                                    <button type="button" data-typename="private" class="col-xs-4 btn btn-primary">Private</button>
                                                </div>
                                            </div>

                                            <div class="userGuideContent secondFont">
                                                <h4>Guidelines</h4>
                                                <ul class="userguideline-primary" style="display: none;">
                                                    <li>Passport Style</li>
                                                    <li>Clear face image</li>
                                                    <li>Cropped face image</li>
                                                </ul>

                                                <ul class="userguideline-public" style="display: none;">
                                                    <li>Pictures of yourself</li>
                                                    <li>Yourself with family</li>
                                                    <li>Yourself with friends</li>
                                                </ul>
                                                <div class="forMaindashboard">
                                                    Your primary picture must be a clear, closely cropped face image of yourself, similar to your passport photo.
                                                </div>
                                            </div>

                                            <div class="descriptionBox">
                                                <textarea id="txtPicDescription" maxlength="100" style="resize: none; overflow-x: hidden; overflow-wrap: break-word;" placeholder="Add description here"></textarea>

                                                <div id="textarea_feedback">100 characters remaining</div>
                                            </div>
                                        </div>
                                        <div class="buttonsAreaAction">
                                            <div class="pull-left buttonrightWidth">
                                                <button type="button" class="btn btn-primary btn-cancel" onclick="location.reload();">Cancel</button>
                                            </div>

                                            <div class="pull-left buttonmidWidth">
                                                <button type="button" class="btn btn-danger btn-Delete" data-islocation="true">Delete</button>
                                            </div>

                                            <div class="pull-left buttonleftWidth">
                                                <button type="button" class="btn btn-success btn-savePicture">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="guidelines" data-type="primaryshow">
                                    <div class="picdescriptionArea_1">
                                        <div class="guideline">
                                            <div class="hideClose pull-right"><span aria-hidden="true" style="margin-top: -20px; font-size: 35px; padding-top: -10px; margin-left: -18px; position: absolute;">×</span></div>
                                            <div class="primaryPicGuide">
                                                <div class="col-sm-12">
                                                    <h4 style="color: #007ea5; text-align: center; margin-top: -8px;">Primary Picture Guidelines</h4>
                                                    <ul>
                                                        <li style="width: 271px;">
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
                                                                <li class="span-icon smicon-new smicon-remove newlistyle" style="margin-top: 9px;"><span class="secondFont">No snapchat filters</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="clearfix checkboxanddismiss">
                                                <div class="pull-left checkboxDismiss">
                                                    <a class="dismissCheck hideClose">
                                                        Don't show again
                                                    </a>
                                                </div>
                                                <div class="pull-right" style="width: 50%; text-align: left; padding-left: 10px;">
                                                    <a class="dismissContent hideClose">
                                                        Dismiss
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="guidelines" data-type="privateshow">
                                    <div class="picdescriptionArea_1">
                                        <div class="guideline">
                                            <div class="hideClose pull-right"><span aria-hidden="true" style="margin-top: -20px; font-size: 35px; padding-top: -10px; margin-left: -18px; position: absolute;">×</span></div>
                                            <div class="primaryPicGuide">
                                                <h4 style="color: #007ea5; text-align: center; margin-top: -8px; padding-bottom: 21px;">Public / Private Picture Guidelines</h4>
                                                <div class="col-sm-12">
                                                    <ul>
                                                        <li style="width: 165px; margin-left: 0px; padding: 0px;">
                                                            <img src="/images/guideline-images/male-public-1.jpg" class="img-responsive" />
                                                        </li>

                                                        <li style="width: 165px; margin-left: 5px; padding: 0px;">
                                                            <img src="/images/guideline-images/male-public-2.jpg" class="img-responsive" />
                                                        </li>
                                                    </ul>

                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="col-sm-12 secondFont">
                                                    <div class="userGuideContent secondFont" style="height: 96px;">
                                                        <div style="margin-left: 38px; margin-top: 15px;">
                                                            <ul class="clearfix userguideline-primary_2" style="display: block;">
                                                                <li style="width: 100%;">Pictures of yourself</li>
                                                                <li style="width: 100%;">Yourself with family</li>
                                                                <li style="width: 100%;">Yourself with friends</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="clearfix checkboxanddismiss">
                                                <div class="pull-left checkboxDismiss">
                                                    <a class="dismissCheck hideClose">
                                                        Don't show again
                                                    </a>
                                                </div>
                                                <div class="pull-right" style="width: 50%; text-align: left; padding-left: 10px;">
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
        <!-- /.row -->
    </div>
</div>
@endsection