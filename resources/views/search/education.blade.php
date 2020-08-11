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
         <form id="frmsearchMain" class="form-horizontal" role="form" action="/searchdisplayresults" method="post">
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
               <div id="Gender-group" class="form-group">
                <label for="Gender" class="col-sm-3 control-label">Gender</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <input name="Gender" id="Gender-" type="radio" class="radio" value="" checked="" />
                  <label id="label-Gender-" for="Gender-" class="btn">
                   Any Gender &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-male-shape male" style="font-size: 20px; color: #007ea5;"></span>&nbsp;
                   <span class="smicon-new smicon-female-shape female" style="font-size: 20px;"></span>
                  </label>

                  <input name="Gender" id="Gender-1" type="radio" class="radio" value="1" />
                  <label id="label-Gender-1" for="Gender-1" class="btn"> Male &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-male-shape male" style="font-size: 20px; color: #007ea5;"></span> </label>

                  <input name="Gender" id="Gender-2" type="radio" class="radio" value="2" />
                  <label id="label-Gender-2" for="Gender-2" class="btn"> Female &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-female-shape female" style="font-size: 20px;"></span> </label>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel"><span id="Gender-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MinAge-group" class="form-group">
                <label for="MinAge" class="col-sm-3 control-label">
                 Minimum Age
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MinAge" id="MinAge" class="form-control-values select2-hidden-accessible" data-select2-id="MinAge" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="2">Any</option>
                   <option value="18" data-select2-id="39">18</option>
                   <option value="19" data-select2-id="40">19</option>

                   <option value="96" data-select2-id="117">96</option>
                   <option value="97" data-select2-id="118">97</option>
                   <option value="98" data-select2-id="119">98</option>
                   <option value="99" data-select2-id="120">99</option>
                   <option value="100" data-select2-id="121">100</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MinAge-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MaxAge-group" class="form-group">
                <label for="MaxAge" class="col-sm-3 control-label">
                 Maximum Age
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MaxAge" id="MaxAge" class="form-control-values select2-hidden-accessible" data-select2-id="MaxAge" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="4">Any</option>
                   <option value="18" data-select2-id="123">18</option>
                   <option value="19" data-select2-id="124">19</option>

                   <option value="99" data-select2-id="204">99</option>
                   <option value="100" data-select2-id="205">100</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MaxAge-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Country-group" class="form-group">
                <label for="Country" class="col-sm-3 control-label">
                 Country
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Country" id="Country" class="form-control-values select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="1255">Select Country</option>
                   <optgroup label="Favourites">
                    <option value="826">United Kingdom</option>
                    <option value="840">United States</option>
                    <option value="586">Pakistan</option>
                    <option value="356">India</option>
                    <option value="050">Bangladesh</option>
                    <option value="504">Morocco</option>
                    <option value="784">United Arab Emirates</option>
                    <option value="682">Saudi Arabia</option>
                   </optgroup>
                   <optgroup label="All Countries">
                    <option value="004">Afghanistan</option>

                    <option value="780">Trinidad and Tobago</option>
                    <option value="788">Tunisia</option>
                    <option value="792">Turkey</option>
                    <option value="795">Turkmenistan</option>
                    <option value="796">Turks and Caicos Islands</option>
                    <option value="798">Tuvalu</option>
                    <option value="800">Uganda</option>
                    <option value="804">Ukraine</option>
                    <option value="784">United Arab Emirates</option>
                    <option value="826">United Kingdom</option>
                    <option value="840">United States</option>
                    <option value="581">United States Minor Outlying Islands</option>
                    <option value="858">Uruguay</option>
                    <option value="860">Uzbekistan</option>
                    <option value="548">Vanuatu</option>
                    <option value="862">Venezuela</option>
                    <option value="704">Vietnam</option>
                    <option value="850">Virgin Islands</option>
                    <option value="876">Wallis and Futuna</option>
                    <option value="732">Western Sahara</option>
                    <option value="887">Yemen</option>
                    <option value="894">Zambia</option>
                    <option value="716">Zimbabwe</option>
                   </optgroup>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Country-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Area-group" class="form-group" style="display: none;">
                <label for="Area" class="col-sm-3 control-label">
                 Area/State
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Area" id="Area" class="select2-hidden-accessible dirty" data-select2-id="Area" tabindex="-1" aria-hidden="true">
                   <option value="" data-select2-id="1256">NA</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Area-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="County-group" class="form-group" style="display: none;">
                <label for="County" class="col-sm-3 control-label">
                 County/State
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="County" id="County" class="select2-hidden-accessible dirty" data-select2-id="County" tabindex="-1" aria-hidden="true">
                   <option value="" data-select2-id="1257">NA</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="County-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Rating-group" class="form-group">
                <label for="Rating" class="col-sm-3 control-label">
                 Profile Rating
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Rating" id="Rating" class="select2-hidden-accessible" data-select2-id="Rating" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="10">Any</option>
                   <option value="1" data-select2-id="624">1 Star</option>
                   <option value="2" data-select2-id="625">2 Star</option>
                   <option value="3" data-select2-id="626">3 Star</option>
                   <option value="4" data-select2-id="627">4 Star</option>
                   <option value="5" data-select2-id="628">5 Star</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Rating-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="FilterOptions-group" class="form-group">
                <label for="FilterOptions" class="col-sm-3 control-label">Filter Results</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <div style="margin-right: 10px; float: left;">
                   <input name="FilterOptions[]" id="FilterOptions-filter_pictures" type="checkbox" class="pseudo-checkbox sr-only" value="filter_pictures" />
                   <label for="FilterOptions-filter_pictures" class="fancy-checkbox-label"> Users with pictures </label>
                  </div>

                  <div style="margin-right: 10px; float: left;">
                   <input name="FilterOptions[]" id="FilterOptions-filter_online" type="checkbox" class="pseudo-checkbox sr-only" value="filter_online" />
                   <label for="FilterOptions-filter_online" class="fancy-checkbox-label"> Users online now</label>
                  </div>

                  <div style="margin-right: 10px; float: left;">
                   <input name="FilterOptions[]" id="FilterOptions-filter_new" type="checkbox" class="pseudo-checkbox sr-only" value="filter_new" />
                   <label for="FilterOptions-filter_new" class="fancy-checkbox-label"> New members</label>
                  </div>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel">
                 <span id="FilterOptions-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div id="SortOptions-group" class="form-group">
                <label for="SortOptions" class="col-sm-3 control-label">
                 Sort Options
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="SortOptions" id="SortOptions" class="select2-hidden-accessible" data-select2-id="SortOptions" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="12">Default</option>
                   <option value="LastAccessed DESC,TimeLogedIn DESC" data-select2-id="630">Most Active</option>
                   <option value="DateJoined DESC" data-select2-id="631">Date Joined</option>
                   <option value="`Rating` DESC" data-select2-id="632">Rating</option>
                   <option value="UserName" data-select2-id="633">Username</option>
                   <option value="LastAccessed DESC" data-select2-id="634">Last Login</option>
                   <option value="Online DESC, LastAccessed DESC" data-select2-id="635">Online</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="SortOptions-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
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
             <div class="panel-body">
              <div role="form" class="form-horizontal">
               <div id="Sect-group" class="form-group">
                <label for="Sect" class="col-sm-3 control-label">
                 Sect
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Sect" id="Sect" class="select2-hidden-accessible" data-select2-id="Sect" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="14">Any Sect</option>
                   <option value="284" data-select2-id="637">Just Muslim</option>
                   <option value="17" data-select2-id="638">Shia</option>
                   <option value="16" data-select2-id="639">Sunni</option>
                   <option value="362" data-select2-id="640">Other - please ask me</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Sect-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Religiosness-group" class="form-group">
                <label for="Religiosness" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Religiousness
                 <!--<i class="smicon smicon-question" data-original-title="How Religious are they?" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Religiosness[]" id="Religiosness" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true">
                   <option value="12" data-select2-id="642">Very religious</option>
                   <option value="188" data-select2-id="643">Religious</option>
                   <option value="13" data-select2-id="644">Somewhat religious</option>
                   <option value="14" data-select2-id="645">Not religious</option>
                   <option value="15" data-select2-id="646">Prefer not to say</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="Religiosness-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title="How Religious are they?"></span>
                </div>
               </div>
               <div id="Hijab-group" class="form-group">
                <label for="Hijab" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Prefer Hijab/Niqab
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Hijab[]" id="Hijab" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Hijab" tabindex="-1" aria-hidden="true">
                   <option value="" data-select2-id="648">Any</option>
                   <option value="18" data-select2-id="649">Yes Hijab</option>
                   <option value="553" data-select2-id="650">Yes Niqab</option>
                   <option value="19" data-select2-id="651">No</option>
                   <option value="20" data-select2-id="652">Prefer not to say</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Hijab-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Beard-group" class="form-group">
                <label for="Beard" class="col-sm-3 control-label">Prefer Beard</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <input name="Beard" id="Beard-" type="radio" class="radio" value="" checked="" /><label id="label-Beard-" for="Beard-" class="btn"> Any </label>

                  <input name="Beard" id="Beard-22" type="radio" class="radio" value="22" /><label id="label-Beard-22" for="Beard-22" class="btn"> No </label>

                  <input name="Beard" id="Beard-21" type="radio" class="radio" value="21" /><label id="label-Beard-21" for="Beard-21" class="btn"> Yes </label>

                  <input name="Beard" id="Beard-23" type="radio" class="radio" value="23" /><label id="label-Beard-23" for="Beard-23" class="btn"> Prefer not to say </label>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel"><span id="Beard-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Convert-group" class="form-group">
                <label for="Convert" class="col-sm-3 control-label">Is a Revert</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <input name="Convert" id="Convert-" type="radio" class="radio" value="" checked="" /><label id="label-Convert-" for="Convert-" class="btn"> Any </label>

                  <input name="Convert" id="Convert-175" type="radio" class="radio" value="175" /><label id="label-Convert-175" for="Convert-175" class="btn"> No </label>

                  <input name="Convert" id="Convert-174" type="radio" class="radio" value="174" /><label id="label-Convert-174" for="Convert-174" class="btn"> Yes </label>
                 </div>
                </div>
                <div class="col-sm-1 label-tick hidelabel"><span id="Convert-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Halaal-group" class="form-group">
                <label for="Halaal" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Keeps Halal
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Halaal[]" id="Halaal" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Halaal" tabindex="-1" aria-hidden="true">
                   <option value="176" data-select2-id="654">I Always Keep Halal</option>
                   <option value="177" data-select2-id="655">Usually Keep Halal</option>
                   <option value="178" data-select2-id="656">I Keep Halal at Home Only</option>
                   <option value="179" data-select2-id="657">I Do Not Keep halal</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Halaal-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Salaah-group" class="form-group">
                <label for="Salaah" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Performs Salaah
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Salaah[]" id="Salaah" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Salaah" tabindex="-1" aria-hidden="true">
                   <option value="180" data-select2-id="659">Always</option>
                   <option value="181" data-select2-id="660">Usually</option>
                   <option value="182" data-select2-id="661">Sometimes</option>
                   <option value="183" data-select2-id="662">Never</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Salaah-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
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
             <div class="panel-body">
              <div role="form" class="form-horizontal">
               <div id="Origin-group" class="form-group">
                <label for="Origin" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Country of Origin
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Origin[]" id="Origin" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Origin" tabindex="-1" aria-hidden="true">
                   <optgroup label="Favourites" data-select2-id="889">
                    <option value="826" data-select2-id="890">United Kingdom</option>
                    <option value="840" data-select2-id="891">United States</option>
                    <option value="586" data-select2-id="892">Pakistan</option>
                    <option value="356" data-select2-id="893">India</option>
                    <option value="050" data-select2-id="894">Bangladesh</option>
                    <option value="504" data-select2-id="895">Morocco</option>
                    <option value="784" data-select2-id="896">United Arab Emirates</option>
                    <option value="682" data-select2-id="897">Saudi Arabia</option>
                   </optgroup>
                   <optgroup label="All Countries" data-select2-id="898">
                    <option value="004" data-select2-id="899">Afghanistan</option>

                    <option value="862" data-select2-id="1130">Venezuela</option>
                    <option value="704" data-select2-id="1131">Vietnam</option>
                    <option value="850" data-select2-id="1132">Virgin Islands</option>
                    <option value="876" data-select2-id="1133">Wallis and Futuna</option>
                    <option value="732" data-select2-id="1134">Western Sahara</option>
                    <option value="887" data-select2-id="1135">Yemen</option>
                    <option value="894" data-select2-id="1136">Zambia</option>
                    <option value="716" data-select2-id="1137">Zimbabwe</option>
                   </optgroup>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Origin-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Citizenship-group" class="form-group">
                <label for="Citizenship" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Current Citizenship
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Citizenship[]" id="Citizenship" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true">
                   <option value="5" data-select2-id="1139">British</option>
                   <option value="4" data-select2-id="1140">American</option>
                   <option value="3" data-select2-id="1141">Australian</option>
                   <option value="6" data-select2-id="1142">Canadian</option>
                   <option value="170" data-select2-id="1143">European Union (EU)</option>
                   <option value="173" data-select2-id="1144">Pakistani</option>
                   <option value="7" data-select2-id="1145">Indian</option>
                   <option value="8" data-select2-id="1146">Other</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Citizenship-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Relocation-group" class="form-group">
                <label for="Relocation" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Will Relocate
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Relocation[]" id="Relocation" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Relocation" tabindex="-1" aria-hidden="true">
                   <option value="160" data-select2-id="1148">None</option>
                   <option value="159" data-select2-id="1149">Locally</option>
                   <option value="9" data-select2-id="1150">Regionally</option>
                   <option value="10" data-select2-id="1151">Nationally</option>
                   <option value="11" data-select2-id="1152">Internationally</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="Relocation-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Smoke-group" class="form-group">
                <label for="Smoke" class="col-sm-3 control-label">Smokes</label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                  <input name="Smoke" id="Smoke-" type="radio" class="radio" value="" checked="" /><label id="label-Smoke-" for="Smoke-" class="btn"> Any </label>

                  <input name="Smoke" id="Smoke-155" type="radio" class="radio" value="155" /><label id="label-Smoke-155" for="Smoke-155" class="btn"> No </label>

                  <input name="Smoke" id="Smoke-154" type="radio" class="radio" value="154" /><label id="label-Smoke-154" for="Smoke-154" class="btn"> Yes </label>

                  <input name="Smoke" id="Smoke-337" type="radio" class="radio" value="337" /><label id="label-Smoke-337" for="Smoke-337" class="btn"> Sometimes </label>

                  <input name="Smoke" id="Smoke-366" type="radio" class="radio" value="366" /><label id="label-Smoke-366" for="Smoke-366" class="btn"> I've stopped smoking </label>
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
                  <select name="MarryIn[]" id="MarryIn" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true">
                   <option value="184" data-select2-id="1154">As soon as possible</option>
                   <option value="185" data-select2-id="1155">This year</option>
                   <option value="186" data-select2-id="1156">Next year</option>
                   <option value="187" data-select2-id="1157">Unsure</option>
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
                  <select name="MaritalStatus[]" id="MaritalStatus" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true">
                   <option value="122" data-select2-id="1159">Never married</option>
                   <option value="123" data-select2-id="1160">Legally separated</option>
                   <option value="124" data-select2-id="1161">Divorced</option>
                   <option value="125" data-select2-id="1162">Widowed</option>
                   <option value="282" data-select2-id="1163">Anulled</option>
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
                  <select name="HaveChildren[]" id="HaveChildren" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true">
                   <option value="129" data-select2-id="1165">No</option>
                   <option value="128" data-select2-id="1166">Yes</option>
                   <option value="397" data-select2-id="1167">I have one child</option>
                   <option value="405" data-select2-id="1168">I have two children</option>
                   <option value="413" data-select2-id="1169">I have three children</option>
                   <option value="421" data-select2-id="1170">I have more than three children</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel">
                 <span id="HaveChildren-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span>
                </div>
               </div>
               <div id="Children-group" class="form-group">
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
               </div>
               <div id="Build-group" class="form-group">
                <label for="Build" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Build
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Build[]" id="Build" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Build" tabindex="-1" aria-hidden="true">
                   <option value="134" data-select2-id="1172">Petite</option>
                   <option value="135" data-select2-id="1173">Slim</option>
                   <option value="137" data-select2-id="1174">Athletic</option>
                   <option value="136" data-select2-id="1175">Medium</option>
                   <option value="138" data-select2-id="1176">Muscular</option>
                   <option value="139" data-select2-id="1177">Large</option>
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
                  <select name="Hair[]" id="Hair" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Hair" tabindex="-1" aria-hidden="true">
                   <option value="140" data-select2-id="1179">Black</option>
                   <option value="145" data-select2-id="1180">Blonde</option>
                   <option value="141" data-select2-id="1181">Dark brown</option>
                   <option value="146" data-select2-id="1182">Grey</option>
                   <option value="143" data-select2-id="1183">Light brown</option>
                   <option value="142" data-select2-id="1184">Medium brown</option>
                   <option value="144" data-select2-id="1185">Red</option>
                   <option value="317" data-select2-id="1186">Bald</option>
                   <option value="147" data-select2-id="1187">Other</option>
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
                  <select name="Living[]" id="Living" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Living" tabindex="-1" aria-hidden="true">
                   <option value="130" data-select2-id="1189">I Live Alone</option>
                   <option value="131" data-select2-id="1190">I Live With Friends</option>
                   <option value="132" data-select2-id="1191">I Live With Family</option>
                   <option value="133" data-select2-id="1192">Other</option>
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
                  <select name="EyeColour[]" id="EyeColour" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true">
                   <option value="149" data-select2-id="1194">Blue</option>
                   <option value="148" data-select2-id="1195">Brown</option>
                   <option value="150" data-select2-id="1196">Green</option>
                   <option value="152" data-select2-id="1197">Grey</option>
                   <option value="151" data-select2-id="1198">Hazel</option>
                   <option value="153" data-select2-id="1199">Other</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="EyeColour-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MinHeight-group" class="form-group">
                <label for="MinHeight" class="col-sm-3 control-label">
                 Minimum Height
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MinHeight" id="MinHeight" class="form-control-values select2-hidden-accessible" data-select2-id="MinHeight" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="35">Any Height</option>
                   <option value="1.37" data-select2-id="457">1.37m (4' 6")</option>
                   <option value="1.38" data-select2-id="458">1.38m</option>
                   <option value="1.39" data-select2-id="459">1.39m</option>
                   <option value="1.4" data-select2-id="460">1.40m (4' 7")</option>
                   <option value="1.41" data-select2-id="461">1.41m</option>

                   <option value="2.15" data-select2-id="535">2.15m</option>
                   <option value="2.16" data-select2-id="536">2.16m (7' 1")</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MinHeight-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="MaxHeight-group" class="form-group">
                <label for="MaxHeight" class="col-sm-3 control-label">
                 Maximum Height
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="MaxHeight" id="MaxHeight" class="form-control-values select2-hidden-accessible" data-select2-id="MaxHeight" tabindex="-1" aria-hidden="true">
                   <option value="" selected="" data-select2-id="37">Any Height</option>
                   <option value="1.37" data-select2-id="538">1.37m (4' 6")</option>
                   <option value="1.38" data-select2-id="539">1.38m</option>
                   <option value="1.39" data-select2-id="540">1.39m</option>
                   <option value="1.4" data-select2-id="541">1.40m (4' 7")</option>
                   <option value="1.41" data-select2-id="542">1.41m</option>
                   <option value="1.42" data-select2-id="543">1.42m (4' 8")</option>

                   <option value="2.14" data-select2-id="615">2.14m</option>
                   <option value="2.15" data-select2-id="616">2.15m</option>
                   <option value="2.16" data-select2-id="617">2.16m (7' 1")</option>
                  </select>
                 </div>
                </div>

                <div class="col-sm-1 label-tick hidelabel"><span id="MaxHeight-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
               </div>
               <div id="Disabilities-group" class="form-group">
                <label for="Disabilities" class="col-sm-3 control-label" data-placeholder="Select your option">
                 Disabilities
                 <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                </label>
                <div class="col-sm-8">
                 <div class="input-group input-group-maxwidth">
                  <select name="Disabilities[]" id="Disabilities" multiple="" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Disabilities" tabindex="-1" aria-hidden="true">
                   <option value="" data-select2-id="1203">Any</option>
                   <option value="157" data-select2-id="1204">No</option>
                   <option value="156" data-select2-id="1205">Yes</option>
                   <option value="341" data-select2-id="1206">Yes - speech and language disorder</option>
                   <option value="342" data-select2-id="1207">Yes - hearing loss and deafness</option>
                   <option value="344" data-select2-id="1208">Yes - vision loss and blindness</option>
                   <option value="346" data-select2-id="1209">Yes - physical disability</option>
                   <option value="348" data-select2-id="1210">Yes - learning disability</option>
                   <option value="350" data-select2-id="1211">Yes - mental illness</option>
                   <option value="354" data-select2-id="1212">Yes - chronic illness</option>
                   <option value="357" data-select2-id="1213">Yes - autism</option>
                   <option value="361" data-select2-id="1214">Yes - please ask me</option>
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
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab4">+ Add more criteria</div>
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
                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab4">+ Add more criteria</div>
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

<!-- /.container -->
<div id="reportModal" class="modal fade" style="z-index: 3000;">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Submit Report</h4>
   </div>
   <form class="form-horizontal reportform" data-toggle="validator" novalidate="true">
    <div class="modal-body">
     <div id="modalbody">
      <div class="form-group" style="text-align: center;">
       <div class="col-md-12">
        <b>This Report will NOT be sent to "<span id="txtUsername_tm"></span>".</b> <br />
        <br />
        <ul style="text-align: left;">
         <li>Your report will be sent to the Single Muslim administration team for investigation.</li>
         <li>Incorrect use of this feature may result in your account being suspended.</li>
        </ul>
       </div>
      </div>
      <div class="form-group frmsubject">
       <label class="col-md-2 control-label" for="txtsubject"> <span class="required">*</span> Subject</label>
       <div class="col-md-10">
        <input id="txtsubject" name="txtsubject" required="required" type="text" placeholder="Subject" class="form-control" />
        <div class="help-block with-errors"></div>
       </div>
      </div>
      <div class="form-group">
       <label class="col-md-2 control-label" for="txtmessage"><span class="required">*</span> Message</label>
       <div class="col-md-10">
        <textarea id="txtmessage" name="txtmessage" required="required" placeholder="Type your Message" class="form-control" style="min-height: 149px !important; overflow-x: hidden; overflow-wrap: break-word; resize: none;"></textarea>
        <div class="help-block with-errors"></div>
       </div>
      </div>
     </div>

     <div id="message_body" style="display: none;">
      <div class="secondFont counterMain"><span>Your report is sent. Close dialog or it will close automatically. </span> <br /></div>
     </div>
    </div>

    <div class="modal-footer">
     <button name="Submit" id="btnsendReport" type="submit" class="btn btn-primary">
      <div class="pull-left buttontext">Submit Report</div>
      <div class="clearfix"></div>
     </button>

     <button name="Submit2" id="btnsendReport_message" type="button" class="btn btn-primary" style="display: none;">
      <div class="pull-left" style="margin-left: 11px;">Close</div>
      <div class="pull-left" style="margin-left: 5px;">(</div>
      <div id="countdown" class="pull-left">3</div>
      <div class="pull-left">)</div>
      <div class="clearfix"></div>
     </button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection
