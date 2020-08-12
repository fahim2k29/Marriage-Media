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
         <a href="#" id="changeBreadcrum" class="breadcrumLast">Education</a>
        </nav>

        <nav class="nav-sidebar searchLeftnav">
         <ul class="nav tabs">
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
           <a href="/religion" data-title="Religion" aria-expanded="false" class="current">
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

          <li class="active">
           <a href="/education" data-title="Education" aria-expanded="true" class="current">
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

          <li class="">
           <a href="/personal" data-title="Personal">
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
         <div class="subTitleround secondFont headingchange">Education</div>
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
             <div class="panel-body">
              <div role="form" class="form-horizontal">
              
            
               <div class="form-group">
                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                 <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                </div>
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab4">+ Add more criteria</div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="tab-pane text-style" id="tab2" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Search Religion
                                            </div>
                                            <hr />
                                        </div>
                                        -->
           
            </div>
           </div>
           <div class="tab-pane text-style active" id="tab3" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Search Education
                                            </div>
                                            <hr />
                                        </div>
                                        -->
             <div class="panel-body">
              <div role="form" class="form-horizontal">
               <div id="FirstLang-group" class="form-group">
                <label for="FirstLang" class="col-sm-3 control-label" data-placeholder="Select your option">
                 First Language(s)
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="FirstLang[]" id="FirstLang" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="FirstLang" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($employments as $employment)
                   <option>{{$employment->employment_Language}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="FirstLang-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="SecondLang-group" class="form-group">
                <label for="SecondLang" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Second Language(s)
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="SecondLang[]" id="SecondLang" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="SecondLang" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($employments as $employment)
                   <option>{{$employment->employment_Language}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="SecondLang-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="EducationLevel-group" class="form-group">
                <label for="EducationLevel" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Education Level
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="EducationLevel[]" id="EducationLevel" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="EducationLevel" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($employments as $employment)
                   <option>{{$employment->employment_EducationLevel}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="EducationLevel-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div id="Income-group" class="form-group">
                <label for="Income" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Current Income
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Income[]" id="Income" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Income" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($personaldatas as $personaldata)
                   <option>{{$personaldata->Income_data}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Income-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Employment-group" class="form-group">
                <label for="Employment" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Profession
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Employment[]" id="Employment" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Employment" tabindex="-1" aria-hidden="true">
                   <option>Select Option</option>
                   @foreach ($employments as $employment)
                   <option>{{$employment->employment_value}}</option>
                   @endforeach
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Employment-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div class="form-group">
                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                 <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                </div>
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab4">+ Add more criteria</div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="tab-pane text-style" id="tab4" data-counter="0">
            <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
             <!--
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Search Personal
                                            </div>
                                            <hr />
                                        </div>
                                        -->
            
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
