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
        <div class="">
            <div class="col-lg-12 col-md-12" id="searchMain">
                <div class="row">
                    <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin roundcornerSearchmain" style="background-color: #ffffff;">
                        <div class="row setting-bgcolor roundcornerPanel">
                            <div class="col-md-3 col-lg-3 nopaddingleft">
                                <nav class="secondFont breadcrumbs-newstyle" style="">
                                    <a href="/dashboard">Home</a>

                                    <i class="fa fa-angle-right"></i>
                                    <a href="/search">Search</a>

                                    <i class="fa fa-angle-right"></i>
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Religion</a>
                                </nav>

                                @include('search.side-nav-search')

                            </div>

                            <!-- tab content -->

                            <div class="col-md-9 col-lg-9 minheightprofile boxforms">
                                <div class="searchbreadcrum">
                                    <!--
    
                                    -->
                                    <div class="subTitleround secondFont headingchange">Religion</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <form id="frmsearchMain" class="form-horizontal" role="form" action="{{ route('search_religion_result')}}" method="get">
                                        <div class="tab-content">
                                            <div class="tab-pane text-style active" id="tab2" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
                                                   
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Sect-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
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
                                                                    <span id="Religiosness-span-success" class="form-control-feedback male span-info-label" title="How Religious are they?"><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span>
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Hijab-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Beard-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                    
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Convert-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Halaal-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
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

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Salaah-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                                                                </div>
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
