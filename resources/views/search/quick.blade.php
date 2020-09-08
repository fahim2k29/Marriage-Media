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
       

        <!-- Content Row -->
        <div class="" data-select2-id="1263">
            <div class="col-lg-12 col-md-12" id="searchMain">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin roundcornerSearchmain" style="background-color: #ffffff;">
                        <div class="row setting-bgcolor roundcornerPanel">
                            
                            
                            <div class="col-md-3 col-lg-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle" style="">
                                    <a href="/">Home</a>

                                    <i class="fa fa-angle-right"></i>
                                    <a href="/search">Search</a>

                                    <i class="fa fa-angle-right"></i>
                                    <a href="/search" id="changeBreadcrum" class="breadcrumLast">Quick</a>
                                </nav>
                                @include('search.side-nav-search')
                            </div>

                            <!-- tab content -->

                            <div class="col-md-9 col-lg-9 minheightprofile boxforms">
                                <div class="searchbreadcrum">
                                
                                    <div class="subTitleround secondFont headingchange">Quick</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <form id="frmsearchMain" class="form-horizontal" role="form" action="{{ route('search_users')}}" method="get" data-select2-id="frmsearchMain">
                                        <div class="tab-content" data-select2-id="1262">
                                            <div class="tab-pane text-style active" id="tab1" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
                                                    <div class="panel-body">
                                                        <div role="form" class="form-horizontal">
                                                            <div id="Gender-group" class="form-group">
                                                                <label for="Gender" class="col-sm-3 control-label">Gender</label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth btn-group btn-group-radio">
                                                                        

                                                                        <input name="Gender" id="Gender-1" type="radio" class="radio" value="male" />
                                                                        <label id="label-Gender-1" for="Gender-1" class="btn">
                                                                            Male &nbsp;&nbsp;&nbsp;<span class="fa fa-male" style="font-size: 20px; color: #007ea5;"></span>
                                                                        </label>

                                                                        <input name="Gender" id="Gender-2" type="radio" class="radio" value="female" />
                                                                        <label id="label-Gender-2" for="Gender-2" class="btn">
                                                                            Female &nbsp;&nbsp;&nbsp;<span class="fa fa-female" style="font-size: 20px;color:rgb(128, 31, 31)"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Country-group" class="form-group">
                                                                <label for="Country" class="col-sm-3 control-label">
                                                                    Country
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select name="Country" id="Country" class="form-control-values select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">                                                                      <option>Select Option</option>
                                                                            @foreach ($signupdatas as $signupdata)
                                                                            <option>{{$signupdata->Country_data}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div id="MinAge-group" class="form-group">
                                                                <label for="MinAge" class="col-sm-3 control-label">
                                                                    Minimum Age
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select name="MinAge" id="MinAge" class="form-control-values select2-hidden-accessible" data-select2-id="MinAge" tabindex="-1" aria-hidden="true">
                                                                            <option value="" selected="" data-select2-id="2">Any</option>
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
                                                                            <option value="19" data-select2-id="124">19</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="MaxAge-span-success" class="smicon-new smicon-check form-control-feedback male span-info-label" title=""></span></div>
                                                            </div> --}}
                                                            
                                                            {{-- <div id="Area-group" class="form-group" style="display: none;">
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
                                                            </div> --}}
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                                                                </div>
                                                                {{-- <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab2">+ Add more criteria</div> --}}
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
