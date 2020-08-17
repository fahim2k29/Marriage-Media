@extends('search.app') @section('content')

<div class="container headerColor">
 <div class="page-header pageheaderown">
  <div class="pageheader-heading">
   <h3>Search for a match</h3>
  </div>
 </div>
</div>

<div class="wide_fullbgimage">
 <div class="container containerbgColor">
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
  <div class="">
   <div class="col-lg-12 col-md-12" id="searchMain">
    <div class="row">
     <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin roundcornerSearchmain" style="background-color: #ffffff;">
      <div class="row setting-bgcolor roundcornerPanel">
       <div class="col-md-3 col-lg-3 nopaddingleft">
        <nav class="secondFont breadcrumbs-newstyle" style="">
         <a href="/dashboard">Home</a>

         <i class="smicon-new smicon-angle-right"></i>
         <a href="/search">Search</a>

         <i class="smicon-new smicon-angle-right"></i>
         <a href="#" id="changeBreadcrum" class="breadcrumLast">Personal</a>
        </nav>

        <nav class="nav-sidebar searchLeftnav">
         <ul class="nav tabs">
          <!--<li class="" style="background-color: #a8217e;color: #fff;padding: 10px; font-size:23px;height: 52px;">-->
          <!--<span class="smicon smicon-cog arrow-font-size" style="font-size:26px;position:relative;top:3px;">-->
          <!--</span>-->
          <!--<span>Search</span></li>-->

          <!-- start dynamic -->

          <li class="">
           <a href="/search" data-title="Quick" aria-expanded="false">
            <div class="pull-left serachBaricon">
             <span class="icon smicon-new smicon-search-quick2 male"></span>
            </div>
            <div class="pull-left searchBarname">
             Quick
            </div>
            <div class="pull-left searcyBartickicon">
             <div class="pull-left icontickbox">
              <i class="smicon-new smicon-check tab1" style="line-height: 9px; visibility: hidden;"></i>
             </div>
             <div class="pull-left iconarrowright">
              <i class="smicon-new smicon-angle-right"></i>
             </div>
             <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
           </a>
          </li>

          <li class="">
           <a href="/religion" data-title="Religion">
            <div class="pull-left serachBaricon">
             <span class="icon smicon-new smicon-religion male"></span>
            </div>
            <div class="pull-left searchBarname">
             Religion
            </div>
            <div class="pull-left searcyBartickicon">
             <div class="pull-left icontickbox">
              <i class="smicon-new smicon-check tab2" style="line-height: 9px; visibility: hidden;"></i>
             </div>
             <div class="pull-left iconarrowright">
              <i class="smicon-new smicon-angle-right"></i>
             </div>
             <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
           </a>
          </li>

          <li class="">
           <a href="/education" data-title="Education" aria-expanded="false" class="current">
            <div class="pull-left serachBaricon">
             <span class="icon smicon-new smicon-education male"></span>
            </div>
            <div class="pull-left searchBarname educaitonname">
             Education
            </div>
            <div class="pull-left searcyBartickicon">
             <div class="pull-left icontickbox">
              <i class="smicon-new smicon-check tab3" style="line-height: 9px; visibility: hidden;"></i>
             </div>
             <div class="pull-left iconarrowright">
              <i class="smicon-new smicon-angle-right"></i>
             </div>
             <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
           </a>
          </li>

          <li class="active">
           <a href="/personal" data-title="Personal" aria-expanded="true" class="current">
            <div class="pull-left serachBaricon">
             <span class="icon smicon-new smicon-user male"></span>
            </div>
            <div class="pull-left searchBarname">
             Personal
            </div>
            <div class="pull-left searcyBartickicon">
             <div class="pull-left icontickbox">
              <i class="smicon-new smicon-check tab4" style="line-height: 9px; visibility: hidden;"></i>
             </div>
             <div class="pull-left iconarrowright">
              <i class="smicon-new smicon-angle-right"></i>
             </div>
             <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
           </a>
          </li>

          <!-- need to build this as dynamic -->

          <br />
          <br />

          <li class="">
           <a href="/profession" data-title="Profession Search">
            <div class="pull-left serachBaricon">
             <span class="icon smicon-new smicon-profession male"></span>
            </div>
            <div class="pull-left searchBarname">
             Profession
            </div>
            <div class="pull-left searcyBartickicon">
             <div class="pull-left icontickbox">
              <i class="smicon-new smicon-check" style="line-height: 9px; visibility: hidden;"></i>
             </div>
             <div class="pull-left iconarrowright">
              <i class="smicon-new smicon-angle-right"></i>
             </div>
             <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
           </a>
          </li>

          <br />
          <br />

          <br />
          <br />
         </ul>
        </nav>
       </div>

       <!-- tab content -->

       <div class="col-md-9 col-lg-9 minheightprofile boxforms">
        <div class="searchbreadcrum">
         <!--

                                -->
         <div class="subTitleround secondFont headingchange">Personal</div>
        </div>

        <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
         <form id="frmsearchMain" class="form-horizontal" role="form" action="{{ route('search_users')}}" method="get">
          <div class="tab-content">
           <div class="tab-pane text-style" id="tab1" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Quick Search
                                        </div>
                                        <hr />
                                    </div>
                                    -->
             
            </div>
           </div>
          
           <div class="tab-pane text-style active" id="tab4" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Search Personal
                                        </div>
                                        <hr />
                                    </div>
                                    -->
             <div class="panel-body">
              <div role="form" class="form-horizontal">
               <div id="Citizenship-group" class="form-group">
                <label for="Citizenship" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Current Citizenship
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Citizenship" id="Citizenship"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Citizenship_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Citizenship-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               
               
                <div id="Origin-group" class="form-group">
                <label for="Origin" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Country of Origin
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Origin" id="Origin"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Origin" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Origin_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Origin-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               
               <div id="Relocation-group" class="form-group">
                <label for="Relocation" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Will Relocate
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Relocation" id="Relocation" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Relocation" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Relocation_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Relocation-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Smoke-group" class="form-group">
                <label for="Smoke" class="col-sm-3 control-label">Smokes</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Smoke" id="Smoke"  data-placeholder="Select your option" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Smoke_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel"><span id="Smoke-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MarryIn-group" class="form-group">
                <label for="MarryIn" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Looking to Marry
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MarryIn" id="MarryIn"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->MarryIn_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MarryIn-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MaritalStatus-group" class="form-group">
                <label for="MaritalStatus" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Marital Status
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MaritalStatus" id="MaritalStatus"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->MaritalStatus_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="MaritalStatus-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div id="HaveChildren-group" class="form-group">
                <label for="HaveChildren" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Has Children
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="HaveChildren" id="HaveChildren"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->HaveChildren_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="HaveChildren-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               {{-- <div id="Children-group" class="form-group">
                <label for="Children" class="col-sm-3 control-label">Wants Children</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <div style="margin-right: 10px; float: left;">
                   <input name="Children[]" id="Children-127" type="checkbox" class="pseudo-checkbox sr-only" value="127" />
                   <label for="Children-127" class="fancy-checkbox-label"> No</label>
                  </div>

                  <div style="margin-right: 10px; float: left;">
                   <input name="Children[]" id="Children-126" type="checkbox" class="pseudo-checkbox sr-only" value="126" />
                   <label for="Children-126" class="fancy-checkbox-label"> Yes</label>
                  </div>

                  <div style="margin-right: 10px; float: left;">
                   <input name="Children[]" id="Children-389" type="checkbox" class="pseudo-checkbox sr-only" value="389" />
                   <label for="Children-389" class="fancy-checkbox-label"> Unsure</label>
                  </div>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel"><span id="Children-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div> --}}
               <div id="Children-group" class="form-group">
                <label for="Children" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Children
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Children" id="Children"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Children" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Children_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="Children-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div id="Build-group" class="form-group">
                <label for="Build" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Build
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Build" id="Build"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Build" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Build_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Build-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Hair-group" class="form-group">
                <label for="Hair" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Hair Colour
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Hair" id="Hair"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Hair" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Hair_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Hair-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Living-group" class="form-group">
                <label for="Living" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Living Arrangements
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Living" id="Living"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Living" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Living_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Living-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="EyeColour-group" class="form-group">
                <label for="EyeColour" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Eye Colour
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="EyeColour" id="EyeColour"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->EyeColour_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="EyeColour-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Height-group" class="form-group">
                <label for="Height" class="col-sm-3 control-label">
                 Height
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Height" id="MinHeight" class="form-control-values select2-hidden-accessible" data-select2-id="MinHeight" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Height_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MinHeight-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               {{-- <div id="MaxHeight-group" class="form-group">
                <label for="MaxHeight" class="col-sm-3 control-label">
                 Maximum Height
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MaxHeight" id="MaxHeight" class="form-control-values select2-hidden-accessible" data-select2-id="MaxHeight" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Height_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MaxHeight-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div> --}}
               <div id="Disabilities-group" class="form-group">
                <label for="Disabilities" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Disabilities
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Disabilities" id="Disabilities"  data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Disabilities_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="Disabilities-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div class="form-group">
                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                 <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                </div>
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab1">+ Add more criteria</div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="tab-pane text-style" id="tab5" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            
                                        </div>
                                        <hr />
                                    </div>
                                    -->
             <div class="panel-body">
              <div role="form" class="form-horizontal">
               <div id="UserName-group" class="form-group">
                <label for="UserName" class="col-sm-3 control-label">
                 Username
                 <!--<i class="smicon smicon-question" data-original-title="Enter a Username" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <input name="UserName" id="UserName" type="text" class="form-control" />
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="UserName-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title="Enter a Username"></span>
                </div>
               </div>
               <div class="form-group">
                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                 <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                </div>
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab1">+ Add more criteria</div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </form>
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
