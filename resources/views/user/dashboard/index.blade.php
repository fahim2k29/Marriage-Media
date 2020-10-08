@extends('user.dashboard.app') {{-- // $user = App\User::all(); // $ed = App\User::with('education')->get(); // $ph = App\User::with('addphoto')->get(); // @dd($ph->toArray()); // exist(); --}} @section('content')
<div class="wide_fullbgimage index">
    <div class="container">
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
                                <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="7" style="width: 2.5px;">
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
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12" id="index">
                <div class="userdasboard latest-controlpanel">
                    <div class="col-md-4 topsection">
                        <div class="sm-profile-pic relative-position">
                            <div class="main-control-wrapper sm-color sm-whitebg">
                                <div class="livebutton pull-right flagposition">
                                    <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                        @csrf
                                        <div class="noborder-right abs-logout logout-button">
                                            <a
                                                class="dropdown-item"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                            >
                                                {{ __('Logout') }}
                                            </a>
                                            
                                        </div>
                                        

                                        <div class="onoffswitch1">
                                            <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked="" group="general_hidden" user_group="general" value="1" />
                                            <label class="onoffswitch1-label" for="myonoffswitch1">
                                                <span class="onoffswitch1-inner"></span>
                                                <span class="onoffswitch1-switch"></span>
                                            </label>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="clearfix"></div>
 {{-- <img src="{{ asset($slider->image) }}"
                         height="30"
                         width="120"
                         alt="No Image"> --}}
                                <div class="img welcome tutorial-step" onclick="window.location.href='/profile/photos'" style="cursor: pointer;">
                                    <div class="sm-controlpanel-image no-target fill-absolute z-page-click-target page-click ng-isolate-scope" data-for="open-control" data-name="gallery">
                                        <div class="no-target fill-absolute ng-scope">
                                            <div class="z-page-click-target page-click fill-absolute view-other fill-parent hidden-overflow relative-position photo-box ng-scope" data-for="my-photo">
                                                @if(isset($addPhoto))
                                                <img src="{{asset($addPhoto->image) }}" class="img-responsive img-circle" />
                                                @else
                                                <img src="{{asset('frontend/assets/images/')}}/default2.jpg" class="img-responsive img-circle" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fill-absolute z-page-click-target page-click" data-for="open-gallery"></div>
                                </div>
                                <div class="user-details padding-box center-align fontsize-24 primary-font-2 padding-large">
                                    <span class="Male-text-color"> {{ Auth::user()->UserName }} </span>
                                    <span class="padding-box ng-binding Male-text-color"> </span>
                                    <!-- {{\Carbon\Carbon::parse($users[1]->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}} -->
                                    {{--
                                    <div class="rating rating-2 Male-text-color z-page-click-target page-click tutorial-step rating" data-for="show-star-help">
                                        <div class="rating">
                                            <span class="sm-line male star-full"></span><span class="sm-line male star-full"></span><span class="sm-line male star-full"></span><span class="sm-line male star-empty"></span>
                                            <span class="sm-line male star-empty"></span>
                                        </div>
                                    </div>
                                    --}}
                                </div>
                                <div class="user-controls clear-fix shift-icon padding-box double-padding top-only watch-in-viewport in-view">
                                    <div class="pading-box center-align button2 float-left z-page-click-target page-click ng-scope">
                                        <a href="/user/dashboard/profile">
                                            <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                <i class="fa fa-id-card-o"></i>
                                            </span>
                                            <div class="z-page-click-target txt fontsize-10 lineheight-18 shift-icon-2 ng-binding">Edit profile</div>
                                        </a>
                                    </div>
                                    <div class="pading-box center-align button2 float-left z-page-click-target page-click ng-scope">
                                        <a href="/editPhoto">
                                            <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                <i class="fa fa-picture-o"></i>
                                            </span>
                                            <div class="z-page-click-target txt fontsize-10 lineheight-18 shift-icon-2 ng-binding">My Photos</div>
                                        </a>
                                    </div>
                                    <div class="pading-box center-align button2 float-left z-page-click-target page-click ng-scope">
                                        <a href="#">
                                            <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                                <i class="fa fa-cog"></i>
                                            </span>
                                            <div class="z-page-click-target txt fontsize-10 lineheight-18 shift-icon-2 ng-binding">Preferences</div>
                                        </a>
                                    </div>
                                    <div class="pading-box center-align button2 float-left z-page-click-target page-click ng-scope" data-toggle="modal" data-target="#notificationModal" style="cursor: pointer;">
                                        <span style="font-size: 25px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-bell-o"></i>
                                        </span>
                                        <div class="z-page-click-target txt fontsize-10 lineheight-18 shift-icon-2 ng-binding">Notifications</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="width-100 shortcut-boxes padding-box">
                            <div class="box width-48 pull-left bg-white margin-right-5" data-toggle="modal" data-target="#menusettingsModal">
                                <div class="z-page-click-target icon padding-box double-padding">
                                    <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                        <i class="fa fa-id-card-o"></i>
                                    </span>
                                </div>
                                <div class="account text-box bg-blue font-color-white">
                                    Account
                                </div>
                            </div>
                            <div class="box width-48 bg-white pull-right">
                                <a href="/membership/packages">
                                    <div class="z-page-click-target icon padding-box double-padding">
                                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-delicious"></i>
                                        </span>
                                    </div>

                                    <div class="account text-box bg-green font-color-white">
                                        Membership
                                    </div>
                                </a>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="width-100 shortcut-boxes padding-box">
                            <div class="box width-48 pull-left bg-white margin-right-5">
                                <a href="#">
                                    <div class="z-page-click-target icon padding-box double-padding">
                                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-ban"></i>
                                        </span>
                                    </div>
                                    <div class="account text-box bg-purple font-color-white">
                                        Blocked Users
                                    </div>
                                </a>
                            </div>
                            <div class="box width-48 bg-white pull-right">
                                <a href="#">
                                    <div class="z-page-click-target icon padding-box double-padding relative-position">
                                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-envelope-open-o"></i>
                                        </span>
                                    </div>

                                    <div class="account text-box bg-mahroon font-color-white">
                                        Communications
                                    </div>
                                </a>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="width-100 shortcut-boxes padding-box">
                            <div class="box width-48 pull-left bg-white margin-right-5">
                                <a href="#">
                                    <div class="z-page-click-target icon padding-box double-padding">
                                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-question-circle-o"></i>
                                        </span>
                                    </div>
                                    <div class="account text-box bg-light-purple font-color-white">
                                        Help &amp; Support
                                    </div>
                                </a>
                            </div>
                            <div class="box width-48 bg-white pull-right">
                                <a href="#">
                                    <div class="z-page-click-target icon padding-box double-padding">
                                        <span style="font-size: 56px; color: rgb(66, 197, 230);">
                                            <i class="fa fa-address-book-o"></i>
                                        </span>
                                    </div>

                                    <div class="account text-box bg-lightgreen font-color-white">
                                        Contact Us
                                    </div>
                                </a>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="divBottomsectionadv">
                            <!-- success stories -->
                            
                            <style>
                                .latest-controlpanel .article-box .story-box.news {
                                    background: #dedede;
                                }

                                .latest-controlpanel .article-box .story-box {
                                    box-shadow: 1px 1px 14px -11px rgba(0, 0, 0, 0.73);
                                }

                                .rounded-corner.twenty {
                                    border-radius: 20px !important;
                                }

                                .four-by-three {
                                    padding-top: 75%;
                                }

                                .hidden-overflow {
                                    overflow: hidden;
                                }

                                .relative-position {
                                    position: relative;
                                }
                            </style>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>

                       

                        <div class="sm-info-cards quick-link-panel">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-8 middlesection">
                        <div class="col-md-12 nopaddingleft nopaddingright">
                            <div class="panel activity-panel">
                                <div class="panel-heading">
                                    <h6 class="panel-title">
                                        <div class="topbaricons"></div>
                                        Messages
                                    </h6>
                                </div>
                                <div class="panel-body newpanel-body">
                                    <div class="activity-box">
                                        <div class="table table-striped table-condensed">
                                            <div>
                                                <div colspan="4" style="text-align: center; font-size: 28px; padding-top: 122px; padding-bottom: 127px;">
                                                    You have no messages.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center bg-white">
                                    <a href="#" class="text-primary" data-toggle="modal" data-target="#chatModal">View all </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 nopaddingleft nopaddingright middlesection-label">
                            <div class="tab_container">
                                <input id="tab1" type="radio" name="tabs" checked="" />
                                <label for="tab1" data-label-id="1" style="margin-left: 100px;"> <span class="padding12left">Online</span> </label>

                                <input id="tab2" type="radio" name="tabs" data-type-id="2" />
                                <label for="tab2" data-label-id="2"> Near Me </label>

                                <input id="tab3" type="radio" name="tabs" data-type-id="3" />
                                <label for="tab3" data-label-id="3"> <span class="padding12left">Latest</span> </label>

                                <section id="content1" class="tab-content usertabsdisplay_new">
                                    <div class="dashbaord-tabs" style="text-align: center;">
                                        <div class="">
                                            <div class="margin-bottom-15">
                                                <h6 class="panel-title">
                                                    <div class="pull-right text-primary fontsize-14"></div>
                                                </h6>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="activity-box">
                                                @foreach ($users as $us) 
                                                <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Shhhh female" id="photoBox-Shhhh">
                                                    <a href="{{ route('showInfo', $us->id) }}" target="_parent" title="Shhhh">
                                                        <div class="mainBox item">
                                                            <!--    -->
                                                            <!--    <div class="onlineGallery">Online</div>-->
                                                            <!--    -->
                                                            <div class="mainImage">
                                                               
                                                                @if (isset($us->addphoto))
                                                                <img class="img-responsive" src="{{asset($us->addphoto->image) }}" height="211" width="211" />
                                                                @else
                                                                <img src="{{asset('frontend/assets/images/')}}/default2.jpg" height="160" width="211" />
                                                                @endif

                                                                <!--        -->
                                                                <!--        <div class="secondFont noofPic">-->
                                                                <!--            + -->
                                                                <!--?//=$search["gallerySize"]?-->
                                                                <!--</div>-->
                                                                <!--        -->
                                                                <div class="absolute-position background-box"></div>
                                                            </div>
                                                            <div class="userInfo clearfix">
                                                                <div class="username-age username clearfix">
                                                                    <div class="pull-left usernamesection female">
                                                                        {{$us->UserName}}
                                                                    </div>
                                                                    <div class="pull-right usernamesection-age female">
                                                                        {{\Carbon\Carbon::createFromDate($us->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}
                                                                    </div>
                                                                </div>
                                                                <div class="country-flag secondFont clearfix">
                                                                    <div class="pull-left employment">
                                                                        @if ($us->education) {{ $us->education->Employment }} @endif
                                                                    </div>
                                                                    <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                                                                </div>

                                                                <div class="pull-left"></div>

                                                                <span class="clearfix"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                @endforeach 

                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="panel-footer text-center bg-white footer-position">
                                                <a href="#" class="text-primary">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div id="modalRatingsection" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- dialog body -->
                            <div class="modal-body">
                                <div class="custom_dialog">
                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-body usercontent"></div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <!-- dialog buttons -->
                        </div>
                    </div>
                </div>

                <div id="modalShareProfile" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- dialog body -->
                            <div class="modal-body">
                                <div class="custom_dialog">
                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-body gallerylist">
                                        <div class="templatemainMessageBox">
                                            <div class="pull-left userInfomessage">
                                                <div class="mainbodyuser">
                                                    <div class="span3">
                                                        <form id="signupform" class="form-horizontal" role="form" action="#" method="post" data-toggle="validator" novalidate="true">
                                                            <label class="col-xs-3">* Your Name:</label>
                                                            <input type="text" name="txtYourname" placeholder="Your Name" class="col-xs-9" />
                                                            <label class="col-xs-3">* Your Email:</label>
                                                            <input type="email" name="txtYouremail" placeholder="Your Email" class="col-xs-9" />
                                                            <label class="col-xs-3">Friend's Name:</label>
                                                            <input type="text" name="txtFriendsname" placeholder="Friends Name" class="col-xs-9" />
                                                            <label class="col-xs-3">Friend's Email:</label>
                                                            <input type="email" name="txtFriendemail" placeholder="Friends Email" class="col-xs-9" />
                                                            <label class="col-xs-3">Message:</label>
                                                            <textarea name="txtMessage" id="txtMessage" class="col-xs-9" placeholder="Type your message here" style="overflow-x: hidden; overflow-wrap: break-word; resize: none;"></textarea>
                                                            <br />
                                                            <br />
                                                            <br />
                                                            <input type="submit" value="Send Now" class="btn btn-primary pull-right" />
                                                            <div class="clearfix"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <!-- dialog buttons -->
                        </div>
                    </div>
                </div>
                <!-- end of structure of dashboard -->

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

                <style>
                    #DashboardController #preferenceform .btn-success {
                        text-shadow: 0 0 1px rgba(0, 0, 0, 0.6);
                    }

                    #DashboardController #preferenceform .btn-danger {
                        text-shadow: 0 0 1px rgba(0, 0, 0, 0.6);
                    }
                </style>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /.container -->

@endsection
