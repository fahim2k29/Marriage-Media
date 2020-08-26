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
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Education</a>
                                </nav>

                                <nav class="nav-sidebar searchLeftnav">
                                    <ul class="nav tabs">
                                        <li class="">
                                            <a href="/search" data-title="Quick" aria-expanded="true">
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

                                        <li class="active">
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
                                    <div class="subTitleround secondFont headingchange">Religion</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <form id="frmsearchMain" class="form-horizontal" role="form" action="{{ route('search_users')}}" method="get">
                                        <div class="tab-content">
                                            <div class="tab-pane text-style active" id="tab2" data-counter="0">
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
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Sect_data}}</option>
                                                                            @endforeach
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
                                                                            name="Religiosness"
                                                                            id="Religiosness"
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Religiosness"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Religiosness_data}}</option>
                                                                            @endforeach
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
                                                                        <select name="Hijab" id="Hijab" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Hijab" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Hijab_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Hijab-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div>

                                                            <div id="Hijab-group" class="form-group">
                                                                <label for="Beard" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Prefer Beard
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select name="Beard" id="Beard" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Beard" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Beard_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Beard-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div>

                                                            {{--
                                                            <div id="Beard-group" class="form-group">
                                                                <label for="Beard" class="col-sm-3 control-label">Prefer Beard</label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                                                                        <input name="Beard" id="Beard-" type="radio" class="radio" value="" checked="" /><label id="label-Beard-" for="Beard-" class="btn"> Any </label>

                                                                        <input name="Beard" id="Beard-22" type="radio" class="radio" value="No" /><label id="label-Beard-22" for="Beard-22" class="btn"> No </label>

                                                                        <input name="Beard" id="Beard-21" type="radio" class="radio" value="Yes" /><label id="label-Beard-21" for="Beard-21" class="btn"> Yes </label>

                                                                        <input name="Beard" id="Beard-23" type="radio" class="radio" value="23" /><label id="label-Beard-23" for="Beard-23" class="btn"> Prefer not to say </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Beard-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div>
                                                            --}} {{--
                                                            <div id="Convert-group" class="form-group">
                                                                <label for="Convert" class="col-sm-3 control-label">Is a Revert</label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                                                                        <input name="Convert" id="Convert-" type="radio" class="radio" value="" checked="" /><label id="label-Convert-" for="Convert-" class="btn"> Any </label>

                                                                        <input name="Convert" id="Convert-175" type="radio" class="radio" value="No" /><label id="label-Convert-175" for="Convert-175" class="btn"> No </label>

                                                                        <input name="Convert" id="Convert-174" type="radio" class="radio" value="Yes" /><label id="label-Convert-174" for="Convert-174" class="btn"> Yes </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Convert-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div>
                                                            --}}
                                                            <div id="Convert-group" class="form-group">
                                                                <label for="Convert" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Is a Revert
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select name="Convert" id="Convert" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Convert" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Convert_data}}</option>
                                                                            @endforeach
                                                                        </select>
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
                                                                        <select name="Halaal" id="Halaal" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Halaal" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Halaal_data}}</option>
                                                                            @endforeach
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
                                                                        <select name="Salaah" id="Salaah" data-placeholder="Select your option" class="select2-hidden-accessible" data-select2-id="Salaah" tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($religiondatas as $religiondata)
                                                                            <option>{{$religiondata->Salaah_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Salaah-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                                                                </div>
                                                                <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab3">+ Add more criteria</div>
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

@endsection
