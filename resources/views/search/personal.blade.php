
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
                                            <a  href="/search" data-title="Quick" aria-expanded="false">
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
                                            <a  href="/religion" data-title="Religion">
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
                                            <a  href="/education" data-title="Education" aria-expanded="false" class="current">
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
                                            <a  href="/personal" data-title="Personal" aria-expanded="true" class="current">
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
                                                                        <label id="label-Gender-1" for="Gender-1" class="btn">
                                                                            Male &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-male-shape male" style="font-size: 20px; color: #007ea5;"></span>
                                                                        </label>

                                                                        <input name="Gender" id="Gender-2" type="radio" class="radio" value="2" />
                                                                        <label id="label-Gender-2" for="Gender-2" class="btn">
                                                                            Female &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-female-shape female" style="font-size: 20px;"></span>
                                                                        </label>
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
                                                                        
                                                                            <option value="95" data-select2-id="116">95</option>
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
                                                                          
                                                                            <option value="93" data-select2-id="198">93</option>
                                                                            <option value="94" data-select2-id="199">94</option>
                                                                            <option value="95" data-select2-id="200">95</option>
                                                                            <option value="96" data-select2-id="201">96</option>
                                                                            <option value="97" data-select2-id="202">97</option>
                                                                            <option value="98" data-select2-id="203">98</option>
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
                                                                                <option value="008">Albania</option>
                                                                                
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
                                                                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab1">+ Add more criteria</div>
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
                                                                        <select
                                                                            name="Religiosness[]"
                                                                            id="Religiosness"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Religiosness"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Hijab[]"
                                                                            id="Hijab"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Hijab"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Halaal[]"
                                                                            id="Halaal"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Halaal"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Salaah[]"
                                                                            id="Salaah"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Salaah"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab1">+ Add more criteria</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane text-style" id="tab3" data-counter="0">
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
                                                                        <select
                                                                            name="FirstLang[]"
                                                                            id="FirstLang"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="FirstLang"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option value="76" data-select2-id="664">English</option>
                                                                            <option value="78" data-select2-id="665">Arabic</option>
                                                                            <option value="429" data-select2-id="666">Balochi</option>
                                                                          
                                                                            <option value="499" data-select2-id="696">Korean</option>
                                                                            <option value="564" data-select2-id="697">Saraiki</option>
                                                                            <option value="583" data-select2-id="698">Sindhi</option>
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
                                                                        <select
                                                                            name="SecondLang[]"
                                                                            id="SecondLang"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="SecondLang"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option value="96" data-select2-id="700">English</option>
                                                                            <option value="98" data-select2-id="701">Arabic</option>
                                                                            <option value="437" data-select2-id="702">Balochi</option>
                                                                            <option value="101" data-select2-id="703">Bengali</option>
                                                                            <option value="102" data-select2-id="704">Chinese</option>
                                                                          
                                                                            <option value="116" data-select2-id="730">Other</option>
                                                                            <option value="477" data-select2-id="731">Kashmiri</option>
                                                                            <option value="507" data-select2-id="732">Korean</option>
                                                                            <option value="572" data-select2-id="733">Saraiki</option>
                                                                            <option value="591" data-select2-id="734">Sindhi</option>
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
                                                                        <select
                                                                            name="EducationLevel[]"
                                                                            id="EducationLevel"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="EducationLevel"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option value="27" data-select2-id="736">Bachelors degree</option>
                                                                            <option value="25" data-select2-id="737">College</option>
                                                                            <option value="30" data-select2-id="738">Doctorate</option>
                                                                            <option value="24" data-select2-id="739">High school</option>
                                                                            <option value="28" data-select2-id="740">Masters degree</option>
                                                                            <option value="26" data-select2-id="741">Non degree qualification</option>
                                                                            <option value="32" data-select2-id="742">Prefer not to say</option>
                                                                            <option value="29" data-select2-id="743">Other degree</option>
                                                                            <option value="31" data-select2-id="744">Other</option>
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
                                                                        <select
                                                                            name="Income[]"
                                                                            id="Income"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Income"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option value="117" data-select2-id="746">up to 15k</option>
                                                                            <option value="118" data-select2-id="747">15,000 - 25,000</option>
                                                                            <option value="119" data-select2-id="748">25,000 - 50,000</option>
                                                                            <option value="120" data-select2-id="749">over 50,000</option>
                                                                            <option value="121" data-select2-id="750">Prefer not to say</option>
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
                                                                        <select
                                                                            name="Employment[]"
                                                                            id="Employment"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Employment"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option value="189" data-select2-id="752">Accountant</option>
                                                                            <option value="192" data-select2-id="753">Acting Professional</option>
                                                                            <option value="193" data-select2-id="754">Actor</option>
                                                                            <option value="33" data-select2-id="755">Administration</option>
                                                                            <option value="194" data-select2-id="756">Administration Professional</option>
                                                                           
                                                                            <option value="274" data-select2-id="878">Teacher</option>
                                                                            <option value="69" data-select2-id="879">Technician</option>
                                                                            <option value="276" data-select2-id="880">Training Professional</option>
                                                                            <option value="277" data-select2-id="881">Transportation Professional</option>
                                                                            <option value="70" data-select2-id="882">Travel</option>
                                                                            <option value="71" data-select2-id="883">Unemployed</option>
                                                                            <option value="278" data-select2-id="884">Veterinary Doctor</option>
                                                                            <option value="279" data-select2-id="885">Volunteer</option>
                                                                            <option value="280" data-select2-id="886">Writer</option>
                                                                            <option value="281" data-select2-id="887">Zoologist</option>
                                                                        </select>
                                                                       
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Employment-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
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
                                                            <div id="Origin-group" class="form-group">
                                                                <label for="Origin" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Country of Origin
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="Origin[]"
                                                                            id="Origin"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Origin"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                             <option>Select Option</option>
                                                                            @foreach ($personaldatas as $personaldata)
                                                                                <option>{{$personaldata->Country_data}}</option>
                                                                            @endforeach
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
                                                                        <select
                                                                            name="Citizenship[]"
                                                                            id="Citizenship"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Citizenship"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                           <option>Select Option</option>
                                                                            @foreach ($personaldatas as $personaldata)
                                                                                <option>{{$personaldata->Country_data}}</option>
                                                                            @endforeach
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
                                                                        <select
                                                                            name="Relocation[]"
                                                                            id="Relocation"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Relocation"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="MarryIn[]"
                                                                            id="MarryIn"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="MarryIn"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="MaritalStatus[]"
                                                                            id="MaritalStatus"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="MaritalStatus"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="HaveChildren[]"
                                                                            id="HaveChildren"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="HaveChildren"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Build[]"
                                                                            id="Build"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Build"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Hair[]"
                                                                            id="Hair"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Hair"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="Living[]"
                                                                            id="Living"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Living"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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
                                                                        <select
                                                                            name="EyeColour[]"
                                                                            id="EyeColour"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="EyeColour"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            @foreach ($personaldatas as $personaldata)
                                                                                <option>{{$personaldata->EyeColour_data}}</option>
                                                                            @endforeach
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
                                                                           <option>Select Option</option>
                                                                            @foreach ($personaldatas as $personaldata)
                                                                                <option>{{$personaldata->Height_data}}</option>
                                                                            @endforeach
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
                                                                            <option>Select Option</option>
                                                                            @foreach ($personaldatas as $personaldata)
                                                                                <option>{{$personaldata->Height_data}}</option>
                                                                            @endforeach
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
                                                                        <select
                                                                            name="Disabilities[]"
                                                                            id="Disabilities"
                                                                            multiple=""
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Disabilities"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
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