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
                                                                <label for="Gender" class="col-sm-3 control-label">
                                                                Gender
                                                                    <!--<i class="smicon smicon-question" data-original-title="" style="margin-left: 4px;"></i> -->
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select name="Gender" id="Gender" class="select2"  tabindex="-1" aria-hidden="true">                                                                      
                                                                            <option>Select Option</option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
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
                                                                        <select name="Country" id="Country" class="select2"  tabindex="-1" aria-hidden="true">
                                                                            <option>Select Option</option>
                                                                            @foreach ($country as $signupdata)
                                                                            <option>{{$signupdata->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
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
