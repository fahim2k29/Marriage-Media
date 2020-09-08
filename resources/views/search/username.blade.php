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
                                    <a href="#" id="changeBreadcrum" class="breadcrumLast">Username</a>
                                </nav>

                                @include('search.side-nav-search')

                            </div>
                            <!-- tab content -->

                            <div class="col-md-9 col-lg-9 minheightprofile boxforms">
                                <div class="searchbreadcrum">
                                    <div class="subTitleround secondFont headingchange">Search by Username</div>
                                </div>

                                <div id="signupbox" class="col-md-11 col-lg-11 leftmargin boxforms">
                                <form id="signupform" class="form-horizontal username-search" role="form" action="{{route('search_username_result')}}" method="get">
                                        <input type="hidden" name="professionSearch" value="1" />

                                        <div role="form" class="form-horizontal">
                                        <div id="UserName-group" class="form-group has-feedback form-control-group">
                                                <label for="UserName" class="control-label"><span class="required">*</span> Search by Username</label>
                                                <div class="controls">
                                                    <input name="UserName" id="UserName" type="text" required="required" class="form-control" placeholder="Ex: fahim9" />
                                                </div>
                                                <div class="col-sm-9">
                                                    <small class="red" style="color: brown;">{{ $errors->first('UserName') }}</small>
                                                </div>
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
