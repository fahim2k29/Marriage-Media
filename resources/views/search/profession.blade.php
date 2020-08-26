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
            <div class="col-lg-12 col-md-12" id="professionSearch">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin roundcornerSearchmain" style="background-color: #ffffff;">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-md-3 col-lg-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle" style="">
                                    <a href="/dashboard">Home</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="/search">Search</a>

                                    <i class="smicon-new smicon-angle-right"></i>
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Profession</a>
                                </nav>

                                <nav class="nav-sidebar searchLeftnav">
                                    <ul class="nav tabs">
                                        <!--<li class="" style="background-color: #a8217e;color: #fff;padding: 10px; font-size:23px;height: 52px;">-->
                                        <!--<span class="smicon smicon-cog arrow-font-size" style="font-size:26px;position:relative;top:3px;">-->
                                        <!--</span>-->
                                        <!--<span>Search</span></li>-->

                                        <!-- start dynamic -->

                                        <li class="">
                                            <a href="/search">
                                                <div class="pull-left serachBaricon">
                                                    <span class="icon smicon-new smicon-search-quick2 male"></span>
                                                </div>
                                                <div class="pull-left searchBarname">
                                                    Quick
                                                </div>
                                                <div class="pull-left searcyBartickicon">
                                                    <div class="pull-left icontickbox">
                                                        <i class="smicon-new smicon-check tab1" style="line-height: 9px; visibility: visible;"></i>
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
                                            <a href="/religion">
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
                                            <a href="/education">
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
                                            <a href="/personal">
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

                                        <li class="active">
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
                                    <div class="subTitleround secondFont headingchange">Search Profession</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <form id="signupform" class="form-horizontal username-search" role="form" action="/searchdisplayresults" method="post">
                                        <input type="hidden" name="professionSearch" value="1" />

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
                                                        <label id="label-Gender-1" for="Gender-1" class="btn"> Male &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-male-shape male" style="font-size: 20px; color: #007ea5;"></span></label>

                                                        <input name="Gender" id="Gender-2" type="radio" class="radio" value="2" />
                                                        <label id="label-Gender-2" for="Gender-2" class="btn"> Female &nbsp;&nbsp;&nbsp;<span class="smicon-new smicon-female-shape female" style="font-size: 20px;"></span></label>
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
                                                        <select name="MinAge" id="MinAge" data-select2-id="MinAge" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="2">Any</option>
                                                            <option value="18" data-select2-id="10">18</option>
                                                            <option value="19" data-select2-id="11">19</option>
                                                            <option value="20" data-select2-id="12">20</option>
                                                            <option value="21" data-select2-id="13">21</option>
                                                            <option value="22" data-select2-id="14">22</option>
                                                            <option value="23" data-select2-id="15">23</option>
                                                            <option value="100" data-select2-id="92">100</option>
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
                                                        <select name="MaxAge" id="MaxAge" data-select2-id="MaxAge" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="4">Any</option>
                                                            <option value="18" data-select2-id="94">18</option>
                                                            <option value="19" data-select2-id="95">19</option>
                                                            <option value="20" data-select2-id="96">20</option>
                                                            <option value="21" data-select2-id="97">21</option>
                                                            <option value="22" data-select2-id="98">22</option>
                                                            <option value="99" data-select2-id="175">99</option>
                                                            <option value="100" data-select2-id="176">100</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1 label-tick hidelabel"><span id="MaxAge-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                            </div>
                                            <div id="Employment-group" class="form-group">
                                                <label for="Employment" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                    Profession
                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group input-group-maxwidth">
                                                        <select name="Employment[]" id="Employment" multiple="" data-placeholder="Select your option" data-select2-id="Employment" tabindex="-1" aria-hidden="true">
                                                            <option>Select Option</option>
                                                            @foreach ($employments as $employment)
                                                            <option>{{$employment->employment_value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1 label-tick hidelabel"><span id="Employment-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                            </div>
                                            <div id="Country-group" class="form-group">
                                                <label for="Country" class="col-sm-3 control-label">
                                                    Country
                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group input-group-maxwidth">
                                                        <select name="Country" id="Country" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="7">Any Country</option>
                                                            <option>Select Option</option>
                                                            @foreach ($personaldatas as $personaldata)
                                                            <option>{{$personaldata->Citizenship_data}}</option>
                                                            @endforeach
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
                                                        <select name="Area" id="Area" class="select2-hidden-accessible" data-select2-id="Area" tabindex="-1" aria-hidden="true"> </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1 label-tick hidelabel"><span id="Area-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                            </div>
                                            <div id="County-group" class="form-group" style="display: none;">
                                                <label for="County" class="col-sm-3 control-label">
                                                    County
                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group input-group-maxwidth">
                                                        <select name="County" id="County" class="select2-hidden-accessible" data-select2-id="County" tabindex="-1" aria-hidden="true"> </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1 label-tick hidelabel"><span id="County-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                                                </div>
                                                <div class="col-md-4 col-lg-4 addcriteria secondFont" style="display: none;">+ Add more criteria</div>
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
