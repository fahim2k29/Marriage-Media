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
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Education</a>
                                </nav>
                                @include('search.side-nav-search')
                            </div>

                            <!-- tab content -->

                            <div class="col-md-9 col-lg-9 minheightprofile boxforms">
                                <div class="searchbreadcrum">
                                    <!--
    
                                    -->
                                    <div class="subTitleround secondFont headingchange">Education</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                    <form action="{{ route('search_education_result')}}" method="get">
                                        <div class="tab-content">
                                            <div class="tab-pane text-style" id="tab1" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
                                                    
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
                                                   
                                                </div>
                                            </div>
                                            <div class="tab-pane text-style active" id="tab3" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
                                                   
                                                    <div class="panel-body">
                                                        <div role="form" class="form-horizontal">
                                                            <div id="FirstLang-group" class="form-group">
                                                                <label for="FirstLang" class="col-sm-3 control-label" data-placeholder="Select your option"><span class="required">*</span>
                                                                    First Language
                                                                </label>

                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="FirstLang"
                                                                            id="FirstLang"
                                                                            required="required"
                                                                            data-error="Please fill out this field."
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="FirstLang"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            <option value="English" >English </option>
                                                                            <option value="Mandarin Chinese" >Mandarin Chinese </option>
                                                                            <option value="Hindi">Hindi </option>
                                                                            <option value="Italian">Italian </option>
                                                                            <option value="Spanish" >Spanish </option>
                                                                            <option value="French" >French </option>
                                                                            <option value="German" >German </option>
                                                                            <option value="Standard Arabic" >Standard Arabic </option>
                                                                            <option value="Bengali" >Bengali </option>
                                                                            <option value="Russian" >Russian </option>
                                                                            <option value="Japanese" >Japanese </option>
                                                                            <option value="Portuguese" >Portuguese </option>
                                                                            <option value="Indonesian" >Indonesian </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="FirstLang-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                            <div id="SecondLang-group" class="form-group">
                                                                <label for="SecondLang" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Second Language
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="SecondLang"
                                                                            id="SecondLang"
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="SecondLang"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            <option value="English" >English </option>
                                                                            <option value="Mandarin Chinese" >Mandarin Chinese </option>
                                                                            <option value="Hindi">Hindi </option>
                                                                            <option value="Italian">Italian </option>
                                                                            <option value="Spanish" >Spanish </option>
                                                                            <option value="French" >French </option>
                                                                            <option value="German" >German </option>
                                                                            <option value="Standard Arabic" >Standard Arabic </option>
                                                                            <option value="Bengali" >Bengali </option>
                                                                            <option value="Russian" >Russian </option>
                                                                            <option value="Japanese" >Japanese </option>
                                                                            <option value="Portuguese" >Portuguese </option>
                                                                            <option value="Indonesian" >Indonesian </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="SecondLang-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                            <div id="EducationLevel-group" class="form-group">
                                                                <label for="EducationLevel" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Education Level
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="EducationLevel"
                                                                            id="EducationLevel"
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="EducationLevel"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            <option value="High-School">High-School</option>
                                                                            <option value="College">College</option>
                                                                            <option value="Graduate">Graduate</option>
                                                                            <option value="Masters Degree">Masters Degree</option>
                                                                            <option value="Doctorate">Doctorate</option>
                                                                            <option value="Non-Graduate">Non-Graduate</option>
                                                                            <option value="Others">Others</option>
                                                                
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel">
                                                                    <span id="EducationLevel-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span>
                                                                </div>
                                                            </div>
                                                            <div id="Income-group" class="form-group">
                                                                <label for="Income" class="col-sm-3 control-label" data-placeholder="Select your option">
                                                                    Current Income
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="Income"
                                                                            id="Income"
                                                                            data-placeholder="Select your option"
                                                                            class="select2-hidden-accessible"
                                                                            data-select2-id="Income"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            <option value="$ 2,000-5,000" > $ 2,000 - 5,000 </option>
                                                                            <option value="$ 5,000-8,000" > $ 5,000 - 8,000</option>
                                                                            <option value="$ 8,000-10,000" > $ 8,000 - 10,000</option>
                                                                            <option value="$ 10,000-$ 15,000" > $ 10,000 - $ 15,000</option>
                                                                            <option value="Over $ 20,000" >Over $ 20,000</option>
                                                                            <option value="Prefer not to Say" >Prefer not to Say</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Income-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                            <div id="Employment-group" class="form-group">
                                                                <label for="Employment" class="col-sm-3 control-label" data-placeholder="Select your option"><span class="required">*</span>
                                                                    Profession
                                                                </label>
                                                                <div class="col-sm-8">
                                                                    <div class="input-group input-group-maxwidth">
                                                                        <select
                                                                            name="Employment"
                                                                            id="Employment"
                                                                            data-placeholder="Select your option"
                                                                            data-select2-id="Employment"
                                                                            required="required"
                                                                            tabindex="-1"
                                                                            aria-hidden="true"
                                                                        >
                                                                            <option>Select Option</option>
                                                                            @foreach ($jobs as $employment)

                                                                            <option>{{$employment-> job_title}}</option>
            
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-1 label-tick hidelabel"><span id="Employment-span-success" class="form-control-feedback male span-info-label" title=""><i class="fa fa-check fas-lg" style="color: #337ab7"></i></span></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-8 col-lg-8" style="text-align: right; float: right;">
                                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-success btn-lg btn-submit-search secondFont">Search Now</button>
                                                                </div>
                                                                {{-- <div class="col-md-4 col-lg-4 addcriteria secondFont" nextlink="#tab4">+ Add more criteria</div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane text-style" id="tab4" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
                                                </div>
                                            </div>
                                            <div class="tab-pane text-style" id="tab5" data-counter="0">
                                                <div class="panel panel-info" style="border: 0px; box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);">
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
