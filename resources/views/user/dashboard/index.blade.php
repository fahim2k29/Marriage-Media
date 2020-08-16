@extends('user.dashboard.app') @section('content')
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
          <a href="/profile/personalinfo"> <i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span> </a>
         </li>
         <li class="bottombodernone">
          <a href="/profile/preferences"> <i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span> </a>
         </li>

         <h6 class="dropdown-header sidemenuheader sm-heading-title">Photos</h6>
         <li class="">
          <a href="/profile/photos"><i class="sm-line basic-photo sm-nav-dropdown-icons"></i>Edit My Photos <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="bottombodernone">
          <a class="pointerCursor" href="/profile/accesslist/2">
           <i class="sm-line basic-lock-open sm-nav-dropdown-icons"></i> Photo Access

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
         <!--        <li class="-->
         <!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
         <!--      -->

         <li class="">
          <a href="/profile/login-devices"> <i class="sm-line sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span> </a>
         </li>

         <li class="deletesidemenu">
          <a href="/profile/delete" data-username="Abdul26"> <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span> </a>
         </li>
        </ul>
       </nav>
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

        <div class="img welcome tutorial-step" onclick="window.location.href='/profile/photos'" style="cursor: pointer;">
         <div class="sm-controlpanel-image no-target fill-absolute z-page-click-target page-click ng-isolate-scope" data-for="open-control" data-name="gallery">
          <div class="no-target fill-absolute ng-scope">
           <div class="z-page-click-target page-click fill-absolute view-other fill-parent hidden-overflow relative-position photo-box ng-scope" data-for="my-photo">
            @if(isset($addPhoto))
            <img src="{{asset('frontend/assets/images/')}}/{{ $addPhoto->image }}" class="img-responsive img-circle" />
            @else
            <img src="{{asset('frontend/assets/images/')}}/default.png" class="img-responsive img-circle" />
            @endif
           </div>
          </div>
         </div>

         <div class="fill-absolute z-page-click-target page-click" data-for="open-gallery"></div>
        </div>
        <div class="user-details padding-box center-align fontsize-24 primary-font-2 padding-large">
         <span class="Male-text-color"> {{ Auth::user()->UserName }} </span>
         <span class="padding-box ng-binding Male-text-color"> 23</span>

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
        <a href="/membership/history">
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
        <a href="/profile/blocked">
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
        <a href="/profile/communication-preferences">
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
        <a href="/pages/helpandsupportnew">
         <div class="z-page-click-target icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-question-circle-o" ></i>
                </span> 
        </div>
         <div class="account text-box bg-light-purple font-color-white">
          Help &amp; Support
         </div>
        </a>
       </div>
       <div class="box width-48 bg-white pull-right">
        <a href="/page/contactus">
         <div class="z-page-click-target icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-address-book-o" ></i>
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
       <a href="/page/news/allnews/In%20The%20News">
        <div class="story-box news relative-position four-by-three hidden-overflow z-page-click-target page-click rounded-corner twenty" style="margin-bottom: 15px;">
         <div class="story-image-wrapper fill-absolute background-size contain center z-page-click-targe hasImageToLoad imageLoaded" style="background-image: url('https://img.youtube.com/vi/9CfXZ6UnDsE/hqdefault.jpg');">
          <!-- ngIf: !contentCtr.articles[1].youtubeVideoID -->
          <img
           ng-src="https://img.youtube.com/vi/9CfXZ6UnDsE/hqdefault.jpg"
           alt=""
           class="ios-image imageonload z-page-click-targe ng-scope ng-isolate-scope loaded"
           fill-background="true"
           ng-if="!contentCtr.articles[1].youtubeVideoID"
           loaded="true"
           src="https://img.youtube.com/vi/9CfXZ6UnDsE/hqdefault.jpg"
          />
          <!-- end ngIf: !contentCtr.articles[1].youtubeVideoID -->
         </div>
         <div class="story-image-overlay fill-absolute sm-shadow-transparent litle-more sm-color z-page-click-targe">
                <span style="font-size:64; color:white; ">
                       <span class="playbutton"><i class="glyphicon glyphicon-play"></i></span>

                </span>
        </div>
        </div>
       </a>
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

      <div class="width-100 shortcut-boxes padding-box">
       <div class="box width-48 pull-left bg-white margin-right-5">
        <a href="/success-stories">
         <div class="z-page-click-target icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-snowflake-o" ></i>
                </span>  
 
        </div>
         <div class="account text-box bg-orange font-color-white" style="color: rgb(255, 152, 0);">
          Success Stories
         </div>
        </a>
       </div>
       <div class="box width-48 bg-white pull-right">
        <a href="/page/news/allnews/In%20The%20News">
         <div class="z-page-click-target icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-newspaper-o" ></i>
                </span> 
        </div>

         <div class="account text-box bg-geenish font-color-white" style="color: rgb(142, 175, 82);">
          In The news
         </div>
        </a>
       </div>

       <div class="clearfix"></div>
      </div>

      <div class="width-100 shortcut-boxes padding-box">
       <div class="box width-48 pull-left bg-white margin-right-5">
        <a href="/page/terms_and_conditions">
         <div class="icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-link" ></i>
                </span> 
        </div>
         <div class="account text-box bg-pink font-color-white" style="color: rgb(234, 62, 121);">
          Terms and Conditions
         </div>
        </a>
       </div>
       <div class="box width-48 bg-white pull-right">
        <a href="/page/privacy_security">
         <div class="icon padding-box double-padding">
                <span style="font-size: 56px; color: rgb(66, 197, 230);">
                        <i class="fa fa-user-secret" ></i>
                </span> 
        </div>

         <div class="account text-box bg-bluish font-color-white" style="color: rgb(33, 150, 243);">
          Privacy and Security
         </div>
        </a>
       </div>

       <div class="clearfix"></div>
      </div>

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
            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Shhhh female" id="photoBox-Shhhh">
             <a href="/searchuser/Shhhh/c3c5044322dbba049860553dfcf92840" target="_parent" title="Shhhh">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/YTkzNWY4YjUzZjllNTU1NzH4TdLC4eJK_y9kqNS5RryMy5ltrYV33PgFutPOyzR1Zq0PS6tw4vyLZWEnJBZ0fvjvmoElKBzUfhEw9K9yg-88M1Uru4PYZPPyLwHZ2o7sF2kAZWYFbvX5zMobSJOKfw$$$.jpg"
                 height="211"
                 width="211"
                 alt="Shhhh"
                />

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
                  Shhhh
                 </div>
                 <div class="pull-right usernamesection-age female">
                  37
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Education
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Londoner1508 female" id="photoBox-Londoner1508">
             <a href="/searchuser/Londoner1508/c3c5044322dbba049860553dfcf92840" target="_parent" title="Londoner1508">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/OGJhOTBmNjhlNmEwNDgxNklJLTmaKrViBX-m-0YkNunkyL0T-OSXk6wTJW_O6DxwajiIlBQlcAA-uvaIXYa4if1ibF80WOwIhG9xMsdPfuyrXS4Dll4XsRZ50HbgczYg-T6wANinC0f_qUSXKLW9bA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Londoner1508"
                />

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
                  Londoner1508
                 </div>
                 <div class="pull-right usernamesection-age female">
                  42
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Chartered Accountant
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Saba3 female" id="photoBox-Saba3">
             <a href="/searchuser/Saba3/c3c5044322dbba049860553dfcf92840" target="_parent" title="Saba3">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/MzFlNjdmNWExMjc5ZjQ5N5OQ1Wq4fZDbrVq_jY64xPdK5KSGSnQTRLDFDHy5KpzxNh2kiqYk77CYVPd6swCM8ryC-6uWRyJ0WuL7FpiYzL7FsNduueEtExgQGDvKpvBoycoPaFtdvJN-OoV-BhbY7g$$$.jpg"
                 height="211"
                 width="211"
                 alt="Saba3"
                />

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
                  Saba3
                 </div>
                 <div class="pull-right usernamesection-age female">
                  30
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Student
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium pk"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Beautifulstar female" id="photoBox-Beautifulstar">
             <a href="/searchuser/Beautifulstar/c3c5044322dbba049860553dfcf92840" target="_parent" title="Beautifulstar">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/OTFmMWU3ZGRlM2I2YTk3NFjLfw4TTNvzh-IqQrfOak0lK2uhB4tL-YpfY3BHXBD4sf-FMMmZPSU6R8RFPD-6DWZdH3fpLUb22iYhK4KbSVUSrDaIVL3q3rTdGj_2L_g-G4puyGT4AUJ3w6UJr4AOaA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Beautifulstar"
                />

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
                  Beautifulstar
                 </div>
                 <div class="pull-right usernamesection-age female">
                  23
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Business Person
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium us"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Rose05 female" id="photoBox-Rose05">
             <a href="/searchuser/Rose05/c3c5044322dbba049860553dfcf92840" target="_parent" title="Rose05">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/YzYzYmM4MDE0NjZjYTEzNfdwxNVQa9-xTgcbqVGAo9520gy5p26yMA-igej88Y0XFVVjD6FOceBoLyRZeH7C7CI2SgY8KmO5KquyhKRY5muA-dJ03YZ78gODISUpmHY7KChjxKP6mi8lGFnCs3ex2_KK3VLKyPz3GuHZClmt-s0$$.jpg"
                 height="211"
                 width="211"
                 alt="Rose05"
                />

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
                  Rose05
                 </div>
                 <div class="pull-right usernamesection-age female">
                  51
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Sales Professional
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Aminah_Amana female" id="photoBox-Aminah_Amana">
             <a href="/searchuser/Aminah_Amana/c3c5044322dbba049860553dfcf92840" target="_parent" title="Aminah_Amana">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NmZhZTM0NDg0YzY2OWMyYY0z0zRjNPY-o1ef0r55biY6F6pS-3-TiHYIQT6Iv3M2HaNLR0LbnXDck14a0BynpYTugjbzz4cwxLgZd2dbqmGz6FPoq2AEQ2teYkFE_fJSjtHDRmMj0pOqacDk9AgiiA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Aminah_Amana"
                />

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
                  Aminah_Amana
                 </div>
                 <div class="pull-right usernamesection-age female">
                  28
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Cost Accountant
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium pk"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Smile07 female" id="photoBox-Smile07">
             <a href="/searchuser/Smile07/c3c5044322dbba049860553dfcf92840" target="_parent" title="Smile07">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/MzJiNjVhZmE5NGZiZjNmNJRyqeK6uSLBoLn4yVRLaqzqQ3Wpsz9z9matgwnW3ZzJsDgE4CdYqDl7BKHcSaPygFiAJpdr20_tn8FTnZ_IUCHfdibd6Oy_Lej_ll49vVB-j6G4Ezzt4CYprVtPqu_ChA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Smile07"
                />

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
                  Smile07
                 </div>
                 <div class="pull-right usernamesection-age female">
                  45
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Administration
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix FA_123 female" id="photoBox-FA_123">
             <a href="/searchuser/FA_123/c3c5044322dbba049860553dfcf92840" target="_parent" title="FA_123">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NmMyMDczZTU1NDRkMTE0N3IPW2rYNmTeJYRaJKYbdfhVC6Zy2ylAi7beQF_CKChZ8bPkL1op7vmzPGVyxQj-IKYIGq7wN5m5mCO_Bm327qyjPq70_m6-l7OgVnveH2nxvxW1PL4G4ndapl4QCWexFA$$$.jpg"
                 height="211"
                 width="211"
                 alt="FA_123"
                />

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
                  FA_123
                 </div>
                 <div class="pull-right usernamesection-age female">
                  36
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Accountant
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium pk"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Jay79b female" id="photoBox-Jay79b">
             <a href="/searchuser/Jay79b/c3c5044322dbba049860553dfcf92840" target="_parent" title="Jay79b">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NmY0ZWQ4ZmY2OTM3YzliM_QSG3BjDGsIwINN_pTnB8gZJbCBHSCEQMEJFX9hn99kNee_ieRAwEc5CFGUgM5nfnJKJFmcEcSL3qR_rjjtsJ8VktC_cGptA51EwKBdK91HWI_nq_bOqDl0p04V5QtBTQ$$$.jpg"
                 height="211"
                 width="211"
                 alt="Jay79b"
                />

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
                  Jay79b
                 </div>
                 <div class="pull-right usernamesection-age female">
                  40
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Health Care Professional
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Amida1974 female" id="photoBox-Amida1974">
             <a href="/searchuser/Amida1974/c3c5044322dbba049860553dfcf92840" target="_parent" title="Amida1974">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/YzJkNmYwMmYwMzkzOGFmZaRPCmmSgWyUybuECQsCggtA5kxH4FgSlfKbdED5hOjHI2nJSBik4pR5mBkjJ66VE_dyC6aXkKh2gVeNt5ZmUwTHcmw_wmzx5b_LiF_KytO394rZ_36k6AWDywDdfAviwA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Amida1974"
                />

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
                  Amida1974
                 </div>
                 <div class="pull-right usernamesection-age female">
                  46
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Self Employed
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium us"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Lets2020 female" id="photoBox-Lets2020">
             <a href="/searchuser/Lets2020/c3c5044322dbba049860553dfcf92840" target="_parent" title="Lets2020">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/Y2I1YmMxYjUxZTZiYzZkYwID96_XoBPWYKr2PYtugbcl79_p_ZHacpbRWVmnMMW1i1JmTBLcgeggxeW-uVVEh9vSMT94jq13P84q2c57myHLX-mypggqJVaIwln7rFNp4A24kS2dYkpXpxIs5iC2CA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Lets2020"
                />

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
                  Lets2020
                 </div>
                 <div class="pull-right usernamesection-age female">
                  35
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Self Employed
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium gb"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix hermainrais female" id="photoBox-hermainrais">
             <a href="/searchuser/hermainrais/c3c5044322dbba049860553dfcf92840" target="_parent" title="hermainrais">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NTIzNjczZjViYzU1ZDBhZVcS5oxNyfL1AP_CirxRnrcFTIDhss3TcHAeGeveaA5akXYgprnJoBB0eHlWJOfynLdt5liVGS7MdHvoG_rrPOQevy8ZCDSvglCyjYSjMN10DCTsgH3D1LQbowYbVI8j_Q$$$.jpg"
                 height="211"
                 width="211"
                 alt="hermainrais"
                />

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
                  hermainrais
                 </div>
                 <div class="pull-right usernamesection-age female">
                  25
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Scientist
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium pk"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="clearfix"></div>
           </div>

           <div class="panel-footer text-center bg-white footer-position">
            <a href="/searchresults/singleSearch/onlineuser/c3c5044322dbba049860553dfcf92840/" class="text-primary">View all</a>
           </div>
          </div>
         </div>
        </section>

        <section id="content2" class="tab-content usertabsdisplay_new">
         <div class="dashbaord-tabs" style="text-align: center;">
          <div class="">
           <div class="margin-bottom-15">
            <h6 class="panel-title">
             <div class="pull-right text-primary fontsize-14"></div>
            </h6>
            <div class="clearfix"></div>
           </div>

           <div class="activity-box">
            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Saaimah female" id="photoBox-Saaimah">
             <a href="/searchuser/Saaimah/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Saaimah">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/OGExOWY2OWMzY2Y0OTJkY8XU8H-bZBNgC_PcR9ReE2N2CVWy3WG2zr12jOA6cUIxL0-fWb5owWgkwkZ6ubK1edEs_8HMUnmgE9FknDm08sqVqEsq1EYpucCh2bb01slBlXTDtcE1YMREbRii7v5MbQ$$$.jpg"
                 height="211"
                 width="211"
                 alt="Saaimah"
                />

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
                  Saaimah
                 </div>
                 <div class="pull-right usernamesection-age female">
                  29
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Teacher
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix blackskinruqya female" id="photoBox-blackskinruqya">
             <a href="/searchuser/blackskinruqya/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="blackskinruqya">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZTkzYjE3OWU0ZDU0NDc2NMabv6AP3ttlXPaLGmcv_-frZeVhSshbOomZtkk2Cu12aqjgPhjq7CbZM3ZUVGeGcR-WyiOvxblLuoh_3YUCw_qB-Y2II9gEjFO3adL-Dmd8OrHrvj5ohdBrTnZr0Ei3OA$$$.jpg"
                 height="211"
                 width="211"
                 alt="blackskinruqya"
                />

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
                  blackskinruqya
                 </div>
                 <div class="pull-right usernamesection-age female">
                  31
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Teacher
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Isratmona female" id="photoBox-Isratmona">
             <a href="/searchuser/Isratmona/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Isratmona">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NDMwZjgxOTVmYmNkMzk2YbqxM94TptkU13ssDWdzmg0loSnRLrYkD6RsTSGP93NnycGh1Ap1Di4YGCpVJqYkGMgwPUFrQr1EJBhnSoX3IcWg4GbCuaEop3qoq2ydNWezMhe4ZPG3p9ipxkGHhnZxrQ$$$.jpg"
                 height="211"
                 width="211"
                 alt="Isratmona"
                />

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
                  Isratmona
                 </div>
                 <div class="pull-right usernamesection-age female">
                  26
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Architect
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Fariha_1994 female" id="photoBox-Fariha_1994">
             <a href="/searchuser/Fariha_1994/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Fariha_1994">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZDlmOGE4Mjc1YWExZjAwNzCyFuxJRgbcB9tAW8UTmDkXzckkbW2Lomf5nhL_L57Zi4Pn52aRVqYiuAUzUM_9u9HNfB_dmdaXqdRhQ_Gje6UpajEO-WYE8XEpR8dsqQwQLG9XIjXit7_lx82mcbn6RDTZNqmLJEUrG-JJwkRskDQ$$.jpg"
                 height="211"
                 width="211"
                 alt="Fariha_1994"
                />

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
                  Fariha_1994
                 </div>
                 <div class="pull-right usernamesection-age female">
                  25
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Engineering
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Thoshiba female" id="photoBox-Thoshiba">
             <a href="/searchuser/Thoshiba/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Thoshiba">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NTJlOTA0YzVhZjg2NGU3ZGKHVYxwr1xSRTp6CIsh_Z-vwjg_93UkT6GrlIJ9BppplhvU0dV-Soy6hTq9R1pkAO_vatozaHSlG3yA7OvkiLSlneSPJUkPMLnKiepNrKbLokAsnDIUSfE3HtgE1DXfHg$$$.jpg"
                 height="211"
                 width="211"
                 alt="Thoshiba"
                />

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
                  Thoshiba
                 </div>
                 <div class="pull-right usernamesection-age female">
                  24
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Student
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix shahrin05 female" id="photoBox-shahrin05">
             <a href="/searchuser/shahrin05/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="shahrin05">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NTdlODY4ODA4YzQ1ZWYyYiCtfNO8XHcajx2u3RRiIVZREgMgd79yp5vrxsR0uWbi4fNnEJmoj2LuPWB62yrOIMMfvzIaTfe14DfYY1wM2fCwYc9X6YV1RPT2e16dDu9BoltOjZtOL6K__2E0-I5IgA$$$.jpg"
                 height="211"
                 width="211"
                 alt="shahrin05"
                />

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
                  shahrin05
                 </div>
                 <div class="pull-right usernamesection-age female">
                  29
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Student
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix flywithsanam female" id="photoBox-flywithsanam">
             <a href="/searchuser/flywithsanam/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="flywithsanam">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NjA5M2JjMWQ3YmI4NzlhNGDDiMAwBe9TuH8MLTQvo5mTbMQaRl6vCjMGbzbryqtkukzT6gU0LcgLZ1HyuOoJclGdn9fQE3BsBE-aNRQmPIl21mY2feu0lJhfnCHELgDtw1XUJs3lk6PGkly43_QWkw$$$.jpg"
                 height="211"
                 width="211"
                 alt="flywithsanam"
                />

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
                  flywithsanam
                 </div>
                 <div class="pull-right usernamesection-age female">
                  34
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Air Hostess
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Fahmi16 female" id="photoBox-Fahmi16">
             <a href="/searchuser/Fahmi16/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Fahmi16">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/MzQzYjc4YjE3YzMyMTUxNo-Kznuqh6NrnlpolzAL2gyAVy-pEpjbUS7XZP0V3aUxEElNLgukaPrLp9VVVCyTcDMfzVYwiAJhbIfu8tiWYFss1JwAx_P62h-CgBlCd96X-9hglMuFfTBm4Gs2mcVGnw$$$.jpg"
                 height="211"
                 width="211"
                 alt="Fahmi16"
                />

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
                  Fahmi16
                 </div>
                 <div class="pull-right usernamesection-age female">
                  25
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Consultant
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Mafreen female" id="photoBox-Mafreen">
             <a href="/searchuser/Mafreen/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Mafreen">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NDgzY2MzMjAxZDllMjQzM0JDUmxz1g2HdQicuu6wXQL7ziye-P0okMPMdWHzCRKv-d8WLeIitK-LuCMMunYmMa7G9dGqSxEO_yrUATR8kwcKQHdXGHmBhs4YLdT9NelzEHzYT-1-e8vzd94CUom6CA$$$.jpg"
                 height="211"
                 width="211"
                 alt="Mafreen"
                />

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
                  Mafreen
                 </div>
                 <div class="pull-right usernamesection-age female">
                  38
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Doctor
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Kha17_Sylhet female" id="photoBox-Kha17_Sylhet">
             <a href="/searchuser/Kha17_Sylhet/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Kha17_Sylhet">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/M2JlNjZjZmEyOTc1ZTRkNr7vmZuPGtU4Soll5Nh2rhXoEWWd1l_SQ_xQ4_T4g7F28JabQrZfevj-nYctV4cTFpe8EIrpMKGlDvsrYwTqa5bdNo4vnc_vCEh-7Ysk7JZSQYfUhNIGYNveTKf07l2-mQ$$$.jpg"
                 height="211"
                 width="211"
                 alt="Kha17_Sylhet"
                />

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
                  Kha17_Sylhet
                 </div>
                 <div class="pull-right usernamesection-age female">
                  29
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Education
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix aakter female" id="photoBox-aakter">
             <a href="/searchuser/aakter/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="aakter">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZmY0YWE5ZWM5MjMyZTZkOSrA8ycR5MT7SIMXC0Noi2cXaCm0lXtOUjwOg_ckjyaCEnwshGfcqPzvVKEfe58wkcf55odvOIAvID0D4PQwweqcYmQ2kMuUkBYBSAAhaVi6Z_WQ1rEJ66hVhDJSVf2KRw$$$.jpg"
                 height="211"
                 width="211"
                 alt="aakter"
                />

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
                  aakter
                 </div>
                 <div class="pull-right usernamesection-age female">
                  34
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Prefer not to say
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Beinghumairah female" id="photoBox-Beinghumairah">
             <a href="/searchuser/Beinghumairah/759d2a220d968a6ee6a5e9d8031db966" target="_parent" title="Beinghumairah">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NGJkMmIyZGE2MDJjNWI3M0ynXv0zhZ2A83fi7EDif5i0N3p3sWs5ZOgWcKhdNvY0nhABBwrm4sqJhl_wUSjsMr9VgDTvi5FXFNSBbjDo8KzQ7ixXwa9H6s3hsSG5QJOn66MiBwf9MPavt4Sxm8pkIERe8Opxu5v7R2o0NqBMcDg$$.jpg"
                 height="211"
                 width="211"
                 alt="Beinghumairah"
                />

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
                  Beinghumairah
                 </div>
                 <div class="pull-right usernamesection-age female">
                  32
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Teacher
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium bd"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="clearfix"></div>
           </div>

           <div class="panel-footer text-center bg-white footer-position">
            <a href="/searchresults/singleSearch/myarea/759d2a220d968a6ee6a5e9d8031db966/" class="text-primary">View all</a>
           </div>
          </div>
         </div>
        </section>

        <section id="content3" class="tab-content usertabsdisplay_new">
         <div class="dashbaord-tabs" style="text-align: center;">
          <div class="">
           <div class="margin-bottom-15">
            <h6 class="panel-title">
             <div class="pull-right text-primary fontsize-14"></div>
            </h6>
            <div class="clearfix"></div>
           </div>

           <div class="activity-box">
            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Nas_66 female" id="photoBox-Nas_66">
             <a href="/searchuser/Nas_66/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Nas_66">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZjNiYTU1MGFmYTc2MGI1N_HE6KsJuhRyxIifJmT1qoCQwC6HXKL7jaOydMFoSC-PmqpEMrwR_xjsGs7fbP8XhY6NipIHKM6pwHkKR9INexH0G-o4AlImpfHm4yT58Emdd1zl3XLJuVZpJohZuqykjg$$$.jpg"
                 height="211"
                 width="211"
                 alt="Nas_66"
                />

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
                  Nas_66
                 </div>
                 <div class="pull-right usernamesection-age female">
                  54
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment"></div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium za"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Maria72 female" id="photoBox-Maria72">
             <a href="/searchuser/Maria72/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Maria72">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/N2E3YTBkNjJkNmFjODM1Ml03YpUoW41_r1ojSsNTzSXyt8OsWBSAyNXpisYe0a3rctRZZ_vAMLLuT_dPv9ZAHPGFOvd1yCEpJCLdU3lOsRudJQ45zX-4IpsdjvUP3q-TXO33PQLfyhQkPoMioYgu4g$$$.jpg"
                 height="211"
                 width="211"
                 alt="Maria72"
                />

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
                  Maria72
                 </div>
                 <div class="pull-right usernamesection-age female">
                  48
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Home Maker
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium ma"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix swsanahmed99999s female" id="photoBox-swsanahmed99999s">
             <a href="/searchuser/swsanahmed99999s/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="swsanahmed99999s">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZWE3OTgzMjcwNzE2M2UzMv6ptO8-sfvnOEqVVkmFhrmCYX5cU9IycanH9cH_KMy5FecrCjc4Jl435c4ALw7VecjIAUgVHI_WpgM5OYMrg9V_lo0Ca9gRSDuV9ejdTcCcQ4DjhaBCPo-2vcJRlXDpF-6TFqXLRyhDQX9Mrf5ki-4$$.jpg"
                 height="211"
                 width="211"
                 alt="swsanahmed99999s"
                />

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
                  swsanahmed99999s
                 </div>
                 <div class="pull-right usernamesection-age female">
                  30
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Architecture
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium ly"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Ach0672bdr female" id="photoBox-Ach0672bdr">
             <a href="/searchuser/Ach0672bdr/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Ach0672bdr">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/YTJiMmRkOGE3NDUwZmQzMy2VDmztpynQvYttezz6qWjJ1e59WYEg9NGLP3lZo3HZjQLeaUfNDaL0-Ny2fGe8V-jsKZLqVD4Xlm232QbCcBCdhxjYoc0ljsYCYCXbQpfX6x9z8qLX8Tn9u1Cu8Nzb0A$$$.jpg"
                 height="211"
                 width="211"
                 alt="Ach0672bdr"
                />

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
                  Ach0672bdr
                 </div>
                 <div class="pull-right usernamesection-age female">
                  27
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Artisan
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium dz"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Nim44yas female" id="photoBox-Nim44yas">
             <a href="/searchuser/Nim44yas/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Nim44yas">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NmFkNmFlNTNmN2RmMjQ0MXMilxSkrG6h8TOIedhbKZ3yZEqp94XrNJzwBmbpeQ3QiHkpNiYpz1Gst747PthyspWozvR7BKsPc6ZQWZ9aTHtZJDAalQHWul2e3Jdl4tB8i1JY8P9Ijlk6p9BWQoRIqg$$$.jpg"
                 height="211"
                 width="211"
                 alt="Nim44yas"
                />

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
                  Nim44yas
                 </div>
                 <div class="pull-right usernamesection-age female">
                  24
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment"></div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium dz"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix edgy_elya female" id="photoBox-edgy_elya">
             <a href="/searchuser/edgy_elya/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="edgy_elya">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/YTEwYzgxNzJhYTVmOWJlZVPULWpRS-rkcpB_NcGQCziFV5C7oh1harN2SxMls9U_RR8OSK4mJwHsKyWSimIew-infC9l-MllQCboIVOGnGSid732XRAWtAkROhSH2ofCsZVt9XqMFERfoauE_kYtHg$$$.jpg"
                 height="211"
                 width="211"
                 alt="edgy_elya"
                />

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
                  edgy_elya
                 </div>
                 <div class="pull-right usernamesection-age female">
                  18
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Art &amp; Design
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium my"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Mirzeta85 female" id="photoBox-Mirzeta85">
             <a href="/searchuser/Mirzeta85/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Mirzeta85">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/NzVmNDA4NDhhMTY1OGEwNfaMb7U0OOPhRuBMg8IZFQvQ_QxjWTx6xTSzx1Stamtuc4KCYC7nXp9dRFvwfk54cGfC3ZywtF-yC_eEeCL4o4DUxZ49lYmQMEPrbleawWyK6QAyA6n1E8uYVo1D3LSSPw$$$.jpg"
                 height="211"
                 width="211"
                 alt="Mirzeta85"
                />

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
                  Mirzeta85
                 </div>
                 <div class="pull-right usernamesection-age female">
                  35
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Catering
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium rs"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix nurarose female" id="photoBox-nurarose">
             <a href="/searchuser/nurarose/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="nurarose">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/N2Q5Y2Q0NmZmMDA4ZDAyNmI9VxrJmw9mxkILIgJKPqPZcOA_TJP_7V6LDbrEqmxFw3uabObsMkETJj7x2aw24VnR4EorKaPcRhaHUrLKl1GEDDIaRuHt5muLHCWRmJ4mj_BCR8iXDfpQKKubsBsn2A$$$.jpg"
                 height="211"
                 width="211"
                 alt="nurarose"
                />

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
                  nurarose
                 </div>
                 <div class="pull-right usernamesection-age female">
                  22
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Administration
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium my"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix DeAw46 female" id="photoBox-DeAw46">
             <a href="/searchuser/DeAw46/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="DeAw46">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/N2UwZGExODZlNTMxYTI0Ny7nhJsad3ccfIDpTg63dyOU-y1Ud79N4H5HhkT8ZzlBIQza4UWhZeS_DoqTVNUZO3vZByuECxu_b_YY8jDRbHmLWdnhC860SVUGQktr_MHmK9bidjjxYHSzFcOIVYU8ww$$$.jpg"
                 height="211"
                 width="211"
                 alt="DeAw46"
                />

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
                  DeAw46
                 </div>
                 <div class="pull-right usernamesection-age female">
                  40
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Hotel &amp; Restaurant Professional
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium sg"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix Ismaha9 female" id="photoBox-Ismaha9">
             <a href="/searchuser/Ismaha9/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="Ismaha9">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/N2MxZTMzN2E2ODFjZTE3NwV6g-GZ6uEvvXTmfh7iZEhrmr8hArNAzD-i9iNvU6_tMM3cOAqlopO2XpNPsYG9tBwOrxEoE5FWtWRFU3ib_rgTRqeRHoljKiqtEM52VwI9-tFmxI658RbUXtpYN_uWdQ$$$.jpg"
                 height="211"
                 width="211"
                 alt="Ismaha9"
                />

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
                  Ismaha9
                 </div>
                 <div class="pull-right usernamesection-age female">
                  26
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Civil Engineer
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium dz"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix reyhanzahra_ female" id="photoBox-reyhanzahra_">
             <a href="/searchuser/reyhanzahra_/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="reyhanzahra_">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/MWI0YzlmMGFiY2ZkNGI2YfQfstmsIUdBWU1Bq2G59yzSeyUIgY8QabUnDnyOnSgddDmf2upgAAqcs9ouVNKbBppx6KIfIn4_kyDmqKmGFNtnNUDwwDKoQlp-v3xxilMEpvVonoiKF1rGd_XQ1CuRa6Bj4cwveirmkIzfwD2X31c$$.jpg"
                 height="211"
                 width="211"
                 alt="reyhanzahra_"
                />

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
                  reyhanzahra_
                 </div>
                 <div class="pull-right usernamesection-age female">
                  25
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment">
                  Teacher
                 </div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium id"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="photoGallerybox-dashboard photoBoxDashboard clearfix fatimazahraefati female" id="photoBox-fatimazahraefati">
             <a href="/searchuser/fatimazahraefati/10a1bdf571b25f6d4f7af983673db7b4" target="_parent" title="fatimazahraefati">
              <div class="mainBox item">
               <!--    -->
               <!--    <div class="onlineGallery">Online</div>-->
               <!--    -->
               <div class="mainImage">
                <img
                 class="img-responsive"
                 src="//gallery.singlemuslim.com/primary/211x211/ZTI1YzAxZGQwMzNmMTA0OEfL2Je2UAln-bi-ZxD5i9TvVwscWuxu2FnUb5zj19_2q9h1MnGhRUDXFJiLJUn8dUTEYifYIsFV4iJQVVgB-SFsw9Id7n-wTAGq8ZYbG7gQMF2wgHCKf3hluc4Ef-dg6A$$$.jpg"
                 height="211"
                 width="211"
                 alt="fatimazahraefati"
                />

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
                  fatimazahraefati
                 </div>
                 <div class="pull-right usernamesection-age female">
                  22
                 </div>
                </div>
                <div class="country-flag secondFont clearfix">
                 <div class="pull-left employment"></div>
                 <div class="pull-right flag-position"><i class="sm-flag-medium ma"></i></div>
                </div>

                <div class="pull-left"></div>

                <span class="clearfix"></span>
               </div>
              </div>
             </a>
            </div>

            <div class="clearfix"></div>
           </div>

           <div class="panel-footer text-center bg-white footer-position">
            <a href="/searchresults/singleSearch/latestusers/10a1bdf571b25f6d4f7af983673db7b4/" class="text-primary">View all</a>
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
