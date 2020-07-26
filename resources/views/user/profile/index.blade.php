@extends('user.profile.app') @section('content')

<div class="container">
<div class="row">
<div class="col-md-12" id="editOwnProfile">
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModal" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="headernotification">Notifications</h2>
    <div class="notificationheading span12" style="text-align: center; width: 100%;">
        <div class="filtericon">
            <select name="filter" class="filterdrop select2-hidden-accessible" id="filter" data-select2-id="filter" tabindex="-1" aria-hidden="true">
                <option value="showall" data-select2-id="2">
                    Show All
                </option>
                <option value="login" data-select2-id="615">
                    Favourite Online
                </option>
                <option value="view" data-select2-id="616">
                    Visitors
                </option>
                <option value="gallery" data-select2-id="617">
                    Gallery Requests
                </option>
                <option value="profile" data-select2-id="618">
                    Admin
                </option>
            </select>
            <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="734" style="width: 2.22222px;">
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
                {{-- <h6 class="dropdown-header sidemenuheader sm-heading-title" style="margin-top: 0px;">Profile</h6> --}}
                <li class="">
                    <a href="/user/dashboard/profile"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
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

<!-- need to work on it -->

<div class="buttons-profile" style="padding: 8px 10px 10px 33px;">
<div class="pull-right btn-group btn-toggle">
<button class="btn btn-xs btn-preview radiusLeft btn-default">Preview</button>
<button class="btn btn-xs btn-preview radiusRight active btn-primary">Edit</button>
</div>

<!--
<a class="pull-right btn icon-btn btn-primary btnprofileEdit_ownprofile togetherbutton" > <span class="icon smicon smicon-visitors solid iconabsolute male "></span> <span class="messagecolor" >Preview</span></a>
<a class="pull-right btn icon-btn btn-primary btnprofileEdit_ownprofile togetherbutton"> <span class="icon smicon smicon-pencil solid iconabsolute male "></span> <span class="messagecolor" >Edit Profile</span></a>
-->
<span class="clearfix"></span>
</div>

<div class="userProfileView male previewsection" style="display: none;">
<div class="detialBarProfileview detialBarProfileview-edit">
<div class="leftDetails">
<div class="pull-left userBigPic">
    <div class="rate-statut-wrapper absolute-position">
        <!-- ngIf: contentCtr.otherPictures && contentCtr.otherPictures.totalImages >= 1 -->
    </div>
    <div class="userinfoonpic">
        <div class="col-md-12">
            <div class="pull-left usernameLeft2 usernamesection">
                <div class="pull-left">
                    <h1>
                    <a href="/user/fahim900" title="fahim900">{{$aboutme->UserName}}</a>
                    </h1>
                </div>

                {{-- <div class="pull-left userAge">
                    23
                </div> --}}
                <div class="clearfix"></div>
            </div>
            <div class="pull-right flagposition">
                <div style="display: inline-block;">
                    <i class="sm-flag-medium bd"></i>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="pull-left contentHeadline">
                <h2>{{$aboutme->Headline}}</h2>
            </div>
            <div class="pull-right">
                <div class="starSection">
                    <div class="pointerCursor ratingUser"></div>
                </div>
            </div>
        </div>
    </div>
   
        <img align="left" class="img-responsive" src="{{asset('frontend/assets/images/')}}/{{ $addPhoto->image }}"  class="img-responsive img-circle" >
       

    {{-- <img
        align="left"
        class="img-responsive"
        src="//gallery.singlemuslim.com/primary/316x316/NjU4MzY1MjYzMzAyM2UwZtA7bYmSo2GnjrmiggfXt_ZhZ0zD19Dgh4WnleNxAqV5rZ1uwjBglktcJYTaohpHE1j4V4bUBvrzpVL0zLnA8-QNvJlNdFIcfjrBaVM3o6WI7F-aM6BBuefTi1BID_R-Ww$$$.jpg"
        alt="fahim900"
    /> --}}
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        My Sect
    </div>
    <div class="pull-left profileContent secondFont">
        {{$religion->Sect}}
    </div>
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        Religiousness
    </div>
    <div class="pull-left profileContent secondFont">
        {{$religion->Religiosness}}
    </div>
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        My Profession
    </div>
    <div class="pull-left profileContent secondFont">
        {{$education->Employment}}
    </div>
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        Marital Status
    </div>
    <div class="pull-left profileContent secondFont">
        {{$personal->MaritalStatus}}
    </div>
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        Country
    </div>
    <div class="pull-left profileContent secondFont">
        {{$user->Country}}
    </div>
</div>

<div class="col-lg-12 profile-info-row">
    <div class="pull-left profileLabel">
        Registration Reason
    </div>
    <div class="pull-left profileContent secondFont">
        {{$user->RegistrationReason}}
    </div>
</div>

<div class="clearfix"></div>

<div class="col-lg-12 contentshare">
    <span><a class="male" href="/user/fahim900">Permalink</a></span>
    <span>
        <form>
            <div class="input-group">
                <input type="text" class="form-control" style="border-radius: 0px !important;" value="https://www.singlemuslim.com/user/fahim900" placeholder="Some path" id="copy-input" />
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" id="copy-button" style="height: 34px;" data-toggle="tooltip" data-placement="button" data-original-title="" title="">
                        <i class="sm-line basic-sheet-multiple"></i>
                    </button>
                </span>
            </div>
        </form>
    </span>
</div>
</div>
<div class="pull-right rightDetails rightDetails-edit">
<div class="userinfosectiontop">
    <div class="sections userinfosection">
        <div class="edit-profileicon">
            <a href="/profile/edit#edit"> <span class="sm-line software-pencil"></span></a>
        </div>
        <div class="col-md-12 headings">
            A Little Bit About Me
        </div>
        <div class="col-md-12 detailpart">
            {{$aboutme->Description}}
        </div>
        <p class="read-more">Read More</p>
        <div class="clearfix"></div>
    </div>

    <div class="sections userinfosection">
        <div class="edit-profileicon">
            <a href="/profile/edit#edit"> <span class="sm-line software-pencil"></span></a>
        </div>
        <div class="col-md-12 headings">
            What I Am Looking For
        </div>
        <div class="col-md-12 detailpart">
            {{$aboutme->LookingFor}}
        </div>
        <p class="read-more">Read More</p>
        <div class="clearfix"></div>
    </div>

    <div class="col-md-6 nopaddinginfo personal information-paddingright">
        <div class="sections userinfosection-group personal information-minheight">
            <div class="col-md-12 headings">
                Personal Information
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">My Citizenship</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Citizenship}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Country of Origin</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Origin}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Willing to Relocate?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Relocation}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">I am Looking to Marry</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->MarryIn}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Income</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Income}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Marital Status</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->MaritalStatus}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Would I like to have Children?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Children}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Do I have children?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->HaveChildren}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Living Arrangements?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Living}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Country</div>
                <div class="col-md-6 font-size-class">
                    {{$user->Country}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Distance</div>
                <div class="col-md-6 font-size-class"></div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 nopaddinginfo appearance-paddingright">
        <div class="sections userinfosection-group appearance-minheight">
            <div class="col-md-12 headings">
                Appearance
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">My Height</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Height}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Build</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Build}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Hair Colour</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Hair}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Colour of My Eyes</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->EyeColour}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Do I Smoke?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Smoke}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Do I Have Any Disabilities?</div>
                <div class="col-md-6 font-size-class">
                    {{$personal->Disabilities}}
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 nopaddinginfo education-paddingright">
        <div class="sections userinfosection-group education-minheight">
            <div class="col-md-12 headings">
                Education
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">My Education Level</div>
                <div class="col-md-6 font-size-class">
                    {{$education->EducationLevel}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Subject I Studied</div>
                <div class="col-md-6 font-size-class">
                    {{$education->SubjectStudied}}
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 nopaddinginfo language-paddingright">
        <div class="sections userinfosection-group language-minheight">
            <div class="col-md-12 headings">
                Language
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">My First Language</div>
                <div class="col-md-6 font-size-class">
                    {{$education->FirstLang}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Second Language</div>
                <div class="col-md-6 font-size-class">
                    {{$education->SecondLang}}
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 nopaddinginfo work-paddingright">
        <div class="sections userinfosection-group work-minheight">
            <div class="col-md-12 headings">
                Work
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">My Profession</div>
                <div class="col-md-6 font-size-class">
                    {{$education->Employment}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Job Title</div>
                <div class="col-md-6 font-size-class">
                    {{$education->JobTitle}}
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 nopaddinginfo religion-paddingright">
        <div class="sections userinfosection-group religion-minheight">
            <div class="col-md-12 headings">
                Religion
            </div>
            <div class="col-md-12 detailpart">
                <div class="col-md-6 font-size-class-header">Religiousness</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Religiosness}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">My Sect</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Sect}}

                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Hijab/Niqab</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Hijab}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Beard</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Beard}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Are You a Revert?</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Convert}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Do You Keep Halal?</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Halaal}}
                </div>

                <div class="clearfix"></div>

                <div class="col-md-6 font-size-class-header">Do You Perform Salaah?</div>
                <div class="col-md-6 font-size-class">
                    {{$religion->Salaah}}
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>

<div class="userProfileView male editsection previewsection" style="display: block;">
<div class="detialBarProfileview detialBarProfileview-edit">
<div class="leftDetails">
<a href="/profile/photos" style="color: #fff; cursor: pointer;">
    <div class="upload-image fill-absolute sm-button neutral-text-color-3 sm-inline-edit-profile">
        <div class="empty-icon-text vertical-alignment-in-parent center-align white-text-color">
            <i class="z-page-click-target sm-line camera fontsize-42 lineheight-54 block-element"></i>
            <span class="add-text block-element fontsize-12 uppercase-text bold-text"> Add Photo</span>

            <!--                                    <span class="click-ink ink-on infinite-loop"></span>-->
        </div>

        <div class="rate-statut-wrapper absolute-position">
            <!-- ngIf: contentCtr.otherPictures && contentCtr.otherPictures.totalImages >= 1 -->
        </div>

        <div class="userinfoonpic male">
            <div class="col-md-12">
                <div class="starSection">
                    <div class="pointerCursor ratingUser">
                        <div class="rating">
                            <span class="sm-line none star-full"></span><span class="sm-line none star-full"></span><span class="sm-line none star-empty graybackGround"></span>
                            <span class="sm-line none star-empty graybackGround"></span><span class="sm-line none star-empty graybackGround"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="padding-right: 5px;">
                <div class="z-page-click-target edit-highlight"></div>

                <div class="pull-left usernameLeft usernamesection">
                    <div class="pull-left">
                        <h1 style="margin-top: 10px;">
                            {{$user->UserName}}
                        </h1>
                    </div>

                    <!--                                                <div class="pull-left userAge1">-->
                    <!--                                                    --><!---->
                    <!--                                                    <div class="z-page-click-target  online-badge absolute-position ng-scope"></div>-->
                    <!---->
                    <!--                                                </div>-->
                    <!---->
                    <!--                                                <div class="pull-left">-->
                    <!--                                                    <a href="/profile/edit#edit">-->
                    <!--                                                        <div class="z-page-click-target absolute-position edit-icon sm-line software-pencil  "></div>-->
                    <!--                                                    </a>-->
                    <!--                                                </div>-->

                    <div class="clearfix"></div>
                </div>

                <!--                                        <div class="col-md-3" style="padding: 0px; margin-top: -9px;">-->
                <!--                                            <div class="pull-right flagposition">-->
                <!--                                                <input type="checkbox" id="switch" /><label for="switch">Toggle</label>-->
                <!--                                            </div>-->
                <!--                                        </div>-->
            </div>
        </div>
    </div>
</a>
<!--                        <div class="pull-left userBigPic userUplaodPicBig" >-->
<!--                            <div class="panel panel-success dragbox-div dragbox-private-div dropzone dragprofileedit"-->
<!--                                 data-isRegister="false" data-imagetype="primary">-->
<!---->
<!--                                <form action="/pictureupload" class="" id="my-awesome-dropzone">-->
<!---->
<!--                                    <div class="dz-message"><span class="smicon-new smicon-plus "></span>-->
<!--                                        <br/>-->
<!---->
<!---->
<!--                                        <span class="dropcontent"> Drop files here or click to upload.</span> <br></div>-->
<!---->
<!--                                </form>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->

<div class="clearfix"></div>

<nav class="nav-sidebar">
    <ul class="nav">
        
        <li class="active">
            <a href="/user/dashboard/profile"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
        </li>
        <li class="">
            <a href="/profile/personalinfo"><i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
        </li>
        <li class="bottombodernone">
            <a href="/profile/preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
        </li>

        <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
        <!--       -->

        <h6 class="dropdown-header sidemenuheader">Photos</h6>
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

<div class="clearfix"></div>
</div>
<div class="pull-right rightDetails rightDetails-edit">
<div class="userinfosectiontop">
{{-- <form id="settingprofile_afterlogin" class="form-horizontal" role="form" action="/profile/edit" method="post" data-toggle="validator" novalidate="true"> --}}
    <div class="sections userinfosection">
        <div class="col-md-12 headings">
            About Me
        </div>
        <form method="post" action="{{ route('aboutme_update' ) }}">
            @csrf
        <div class="col-md-12 detailpart detailpart-edit">
            <div role="form" class="form-horizontal">
                <div id="Headline-group" class="form-group Headline-row">
                    <label for="Headline" class="col-sm-4 control-label"><span class="required">*</span> Headline</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <input name="Headline" id="Headline" type="text" required="required" value="{{$aboutme->Headline}}" class="form-control" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Description-group" class="form-group Description-row">
                    <label for="Description" class="col-sm-4 control-label"><span class="required">*</span> A Little Bit About Me</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 52.2222px;">{{$aboutme->Description}}</textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="LookingFor-group" class="form-group LookingFor-row">
                    <label for="LookingFor" class="col-sm-4 control-label"><span class="required">*</span> What I Am Looking For</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 52.2222px;">{{$aboutme->LookingFor}}</textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                        <span class="pull-left required firstFont_new" style="margin-left: 128px; margin-top: 8px;">* Required Field</span>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <div class="clearfix"></div>
    </div>

    <div class="sections userinfosection">
        <div class="col-md-12 headings">
            Education and Work
        </div>
        <div class="col-md-12 detailpart detailpart-edit">
            <div role="form" class="form-horizontal">
                <form method="post" action="{{ route('education_update' ) }}">
                @csrf
                <div id="EducationLevel-group" class="form-group EducationLevel-row">
                    <label for="EducationLevel" class="col-sm-4 control-label"><span class="required">*</span> My Education Level</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="EducationLevel" id="EducationLevel" required="required"  data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true">
                                <option >{{$education-> EducationLevel}}</option>
                        
                                @foreach ($employments as $employment)
                                    
                                <option >{{$employment-> employment_EducationLevel}}</option>

                                @endforeach

                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="SubjectStudied-group" class="form-group SubjectStudied-row">
                    <label for="SubjectStudied" class="col-sm-4 control-label"><span class="required">*</span> Subject I Studied</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                        <input name="SubjectStudied" id="SubjectStudied" type="text" required="required" value="{{$education->SubjectStudied}}" class="form-control" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="JobTitle-group" class="form-group JobTitle-row">
                    <label for="JobTitle" class="col-sm-4 control-label"><span class="required">*</span> My Job Title</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <input name="JobTitle" id="JobTitle" type="text" required="required" value="{{$education->JobTitle}}" class="form-control" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Employment-group" class="form-group Employment-row">
                    <label for="Employment" class="col-sm-4 control-label"><span class="required">*</span> My Profession</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Employment" id="Employment" required="required"  data-select2-id="Employment" tabindex="-1" aria-hidden="true">
                               
                                <option >{{$education-> Employment}}</option>
                        
                                @foreach ($employments as $employment)
                                    
                                <option >{{$employment-> employment_value}}</option>

                                @endforeach
                            </select>
                           
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="FirstLang-group" class="form-group FirstLang-row">
                    <label for="FirstLang" class="col-sm-4 control-label"><span class="required">*</span> My First Language</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="FirstLang" id="FirstLang" required="required"  data-select2-id="FirstLang" tabindex="-1" aria-hidden="true">
                               
                                <option >{{$education-> FirstLang}}</option>
                        
                                @foreach ($employments as $employment)
                                    
                                <option >{{$employment-> employment_Language}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="SecondLang-group" class="form-group SecondLang-row">
                    <label for="SecondLang" class="col-sm-4 control-label"><span class="required">*</span> My Second Language</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="SecondLang" id="SecondLang" required="required"  data-select2-id="SecondLang" tabindex="-1" aria-hidden="true">
                                
                                <option >{{$education-> SecondLang}}</option>
                        
                                @foreach ($employments as $employment)
                                    
                                <option >{{$employment-> employment_Language}}</option>

                                @endforeach
                               
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="RegistrationReason-group" class="form-group RegistrationReason-row">
                    <label for="RegistrationReason" class="col-sm-4 control-label"><span class="required">*</span> Registration Reason</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select
                                name="RegistrationReason"
                                id="RegistrationReason"
                                required="required"
                                data-select2-id="RegistrationReason"
                                tabindex="-1"
                                aria-hidden="true"
                            >
                                <option >{{$user-> RegistrationReason}}</option>
                        
                                @foreach ($signupdatas as $signupdata)
                                    
                                <option >{{$signupdata-> RegistrationReason_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                        <span class="pull-left required firstFont_new" style="margin-left: 128px; margin-top: 8px;">* Required Field</span>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="sections userinfosection">
        <div class="col-md-12 headings">
            Personal
        </div>
        <div class="col-md-12 detailpart detailpart-edit">
            <div role="form" class="form-horizontal">
                <form method="post" action="{{ route('personal_update' ) }}">
                @csrf
                <div id="Citizenship-group" class="form-group Citizenship-row">
                    <label for="Citizenship" class="col-sm-4 control-label"><span class="required">*</span> My Citizenship</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Citizenship" id="Citizenship" required="required"  data-select2-id="Citizenship" tabindex="-1" aria-hidden="true">
                                
                                <option>{{$personal->Citizenship}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Citizenship_data}}</option>

                                @endforeach

                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Origin-group" class="form-group Origin-row">
                    <label for="Origin" class="col-sm-4 control-label"><span class="required">*</span> Country of Origin</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Origin" id="Origin" required="required"  data-select2-id="Origin" tabindex="-1" aria-hidden="true">
                                
                                <option>{{$personal->Origin}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Origin_data}}</option>

                                @endforeach

                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Relocation-group" class="form-group Relocation-row">
                    <label for="Relocation" class="col-sm-4 control-label"><span class="required">*</span> Willing to Relocate?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Relocation" id="Relocation" required="required"  data-select2-id="Relocation" tabindex="-1" aria-hidden="true">
                               
                                <option>{{$personal->Relocation}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Relocation_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Income-group" class="form-group Income-row">
                    <label for="Income" class="col-sm-4 control-label"><span class="required">*</span> My Income</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Income" id="Income" required="required"  data-select2-id="Income" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Income}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Income_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="MarryIn-group" class="form-group MarryIn-row">
                    <label for="MarryIn" class="col-sm-4 control-label"><span class="required">*</span> I am Looking to Marry</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="MarryIn" id="MarryIn" required="required"  data-select2-id="MarryIn" tabindex="-1" aria-hidden="true">
                               
                                <option>{{$personal->MarryIn}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> MarryIn_data}}</option>

                                @endforeach

                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="MaritalStatus-group" class="form-group MaritalStatus-row">
                    <label for="MaritalStatus" class="col-sm-4 control-label"><span class="required">*</span> Marital Status</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="MaritalStatus" id="MaritalStatus" required="required"  data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true">
                               
                                <option>{{$personal->MaritalStatus}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> MaritalStatus_data}}</option>

                                @endforeach                                

                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Children-group" class="form-group Children-row">
                    <label for="Children" class="col-sm-4 control-label"><span class="required">*</span> Would I like to have Children?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Children" id="Children" required="required"  data-select2-id="Children" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Children}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Children_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="HaveChildren-group" class="form-group HaveChildren-row">
                    <label for="HaveChildren" class="col-sm-4 control-label"><span class="required">*</span> Do I have children?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="HaveChildren" id="HaveChildren" required="required"  data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->HaveChildren}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> HaveChildren_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Living-group" class="form-group Living-row">
                    <label for="Living" class="col-sm-4 control-label"><span class="required">*</span> My Living Arrangements?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Living" id="Living" required="required"  data-select2-id="Living" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Living}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Living_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Height-group" class="form-group Height-row">
                    <label for="Height" class="col-sm-4 control-label"><span class="required">*</span> My Height</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Height" id="Height" required="required"  data-select2-id="Height" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Height}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Height_data}}</option>

                                @endforeach
                            </select>
                           
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Build-group" class="form-group Build-row">
                    <label for="Build" class="col-sm-4 control-label"><span class="required">*</span> My Build</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Build" id="Build" required="required"  data-select2-id="Build" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Build}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Build_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Hair-group" class="form-group Hair-row">
                    <label for="Hair" class="col-sm-4 control-label"><span class="required">*</span> My Hair Colour</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Hair" id="Hair" required="required"  data-select2-id="Hair" tabindex="-1" aria-hidden="true">
                               <option>{{$personal->Hair}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Hair_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="EyeColour-group" class="form-group EyeColour-row">
                    <label for="EyeColour" class="col-sm-4 control-label"><span class="required">*</span> Colour of My Eyes</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="EyeColour" id="EyeColour" required="required"  data-select2-id="EyeColour" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->HaveChildren}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> HaveChildren_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Smoke-group" class="form-group Smoke-row">
                    <label for="Smoke" class="col-sm-4 control-label"><span class="required">*</span> Do I Smoke?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Smoke" id="Smoke" required="required"  data-select2-id="Smoke" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Smoke}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Smoke_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Disabilities-group" class="form-group Disabilities-row">
                    <label for="Disabilities" class="col-sm-4 control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Disabilities" id="Disabilities" required="required"  data-select2-id="Disabilities" tabindex="-1" aria-hidden="true">
                                <option>{{$personal->Disabilities}}</option>
                                                                                                        
                                @foreach ($personaldatas as $personaldata)
                                    
                                <option >{{$personaldata-> Disabilities_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                        <span class="pull-left required firstFont_new" style="margin-left: 128px; margin-top: 8px;">* Required Field</span>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="sections userinfosection">
        <div class="col-md-12 headings">
            Religion
        </div>
        <div class="col-md-12 detailpart detailpart-edit">
            <div role="form" class="form-horizontal">
                <form method="post" action="{{ route('religion_update' ) }}">
                @csrf
                <div id="Religiosness-group" class="form-group Religiosness-row">
                    <label for="Religiosness" class="col-sm-4 control-label"><span class="required">*</span> Religiousness</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Religiosness" id="Religiosness" required="required"  data-select2-id="Religiosness" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Religiosness}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Religiosness_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Sect-group" class="form-group Sect-row">
                    <label for="Sect" class="col-sm-4 control-label"><span class="required">*</span> My Sect</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Sect" id="Sect" required="required"  data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Sect}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Sect_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Hijab-group" class="form-group Hijab-row">
                    <label for="Hijab" class="col-sm-4 control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Hijab" id="Hijab" required="required"  data-select2-id="Hijab" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Hijab}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Hijab_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Beard-group" class="form-group Beard-row">
                    <label for="Beard" class="col-sm-4 control-label"><span class="required">*</span> Do you have a beard?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Beard" id="Beard" required="required"  data-select2-id="Beard" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Beard}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Beard_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Convert-group" class="form-group Convert-row">
                    <label for="Convert" class="col-sm-4 control-label"><span class="required">*</span> Are You a Revert?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Convert" id="Convert" required="required"  data-select2-id="Convert" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Convert}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Convert_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Halaal-group" class="form-group Halaal-row">
                    <label for="Halaal" class="col-sm-4 control-label"><span class="required">*</span> Do You Keep Halal?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Halaal" id="Halaal" required="required"  data-select2-id="Halaal" tabindex="-1" aria-hidden="true">
                                 <option>{{$religion->Halaal}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Halaal_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div id="Salaah-group" class="form-group Salaah-row">
                    <label for="Salaah" class="col-sm-4 control-label"><span class="required">*</span> Do You Perform Salaah?</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-maxwidth">
                            <select name="Salaah" id="Salaah" required="required"  data-select2-id="Salaah" tabindex="-1" aria-hidden="true">
                                <option>{{$religion->Salaah}}</option>
                                                                                                        
                                @foreach ($religiondatas as $religiondata)
                                    
                                <option >{{$religiondata-> Salaah_data}}</option>

                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="help-block with-errors" aria-hidden="false"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-lg-12" style="text-align: right;">
                        <span class="pull-left required firstFont_new" style="margin-left: 128px; margin-top: 8px;">* Required Field</span>
                        <button name="Submit" id="Submit" type="submit" class="btn btn-primary firstFont_new btn-primary-theme">Update</button>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

</div>
</div>
<div class="clearfix"></div>
</div>
</div>

<div id="modalPictureGallery" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<!-- dialog body -->
<div class="modal-body">
    <div class="custom_dialog">
        <!--        <button type="button" class="close" data-dismiss="modal">  </button>  -->
    </div>

    <div class="col-lg-12 col-md-12 nopadding">
        <div class="panel panel-default">
            <div class="panel-body gallerylist">
                <!-- Start Minimal Gallery Html Containers -->

                <div id="inlineProfileGallery">
                    <div class="viewer">
                        <div class="picture holder">
                            <div class="description" style="display: none;"></div>
                        </div>
                        <div class="picture main">
                            <div class="controls prev next">
                                <a class="prev">
                                    <div></div>
                                </a>
                                <a class="next">
                                    <div></div>
                                </a>
                            </div>
                            <div class="description" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="strip">
                        <div class="thumbnails">
                            <div class="thumbnail">
                                <div class="picture"></div>
                                <div class="metadata jsHide">
                                    <div class="url">
                                        //gallery.singlemuslim.com/image/100x100/YTJmNWI3ZjkyMjhmYTVjMEqCvhZlW2uwrH2M-koCFrE1SKV-L9-lEC_bM_OOIvjD6vNJmUz2vN56ypkm3NAeo0NsNgW8KU7NhmOKGwWOdqZbKiVLJcooxL0MOEEVKMoz1OuBOSUOGcyYCFY4rBCwe6OiUAKN2l6VosHI5phAA_GBcUv5g9pgI8okfwCjV85VxgKS7GFhTyrNPxTYFtYLFA$$$.jpg
                                    </div>

                                    <div class="description"></div>

                                    <div class="urlFull" data-number="0">
                                        //gallery.singlemuslim.com/image/512x512/YTJmNWI3ZjkyMjhmYTVjMEqCvhZlW2uwrH2M-koCFrE1SKV-L9-lEC_bM_OOIvjD6vNJmUz2vN56ypkm3NAeo0NsNgW8KU7NhmOKGwWOdqZbKiVLJcooxL0MOEEVKMoz1OuBOSUOGcyYCFY4rBCwe6OiUAKN2l6VosHI5phAA_GBcUv5g9pgI8okfwCjV85VxgKS7GFhTyrNPxTYFtYLFA$$$.jpg
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="currentViewer">
                        <div class="arrow"></div>
                    </div>
                </div>

                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
<!-- dialog buttons -->
</div>
</div>
</div>
<!-- dialog for background image -->

<script>
$(function () {
// debugger;
var tabindex = $('.nav-tabs a[href="#tab_default_' + tabindex + '"]').tab("show");
});
</script>
</div>
</div>
</div>
@endsection
