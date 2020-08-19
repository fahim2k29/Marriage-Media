@extends('search.app') @section('content')

<div class="container headerColor">
 <div class="page-header pageheaderown">
  <div class="pageheader-heading">
   <h3>Search Result</h3>
  </div>
 </div>
</div>

{{-- {{ $users->links() }} --}}

<div class="wide_fullbgimage">
 <div class="container containerbgColor">
 
    <div class="row searchMasterlayout" id="searchDisplayResults">
      <div class="clearfix topSearchBarwithTags">
          <div class="pull-left tagsSection">
     <div class="searchTags">
      <form id="frmResult" class="frmResult" action="/searchdisplayresults" method="post">
       <input type="hidden" name="removekeys" id="removekeys" value="" />

       <ul class="tag clearfix" style="margin-top: 5px;">
        <li class="tag-item-change tag-item-primarycolor" data-value="050" data-label="Country">
         <span class="tag-item-change-span">
          Country : Bangladesh
         </span>
         <span fieldname="Country" class="smicon-new smicon-remove" style="margin-left: 7px; font-size: 12px;"></span>

         <input type="hidden" name="Country" value="050" />
        </li>


        <li class="tag-item pointerCursor">Add Criteria<span class="smicon-new smicon-plus" style="margin-left: 10px; font-size: 12px;"></span></li>
       </ul>
      </form>
     </div>
    </div>

    <div class="pull-left savesearchSection">
     <div class="saveSearchDiv" style="font-weight: normal;">
      <form method="post" name="frmsavesearch" id="frmsavesearch" action="/savesearch">
       <label for="notify" style="color: #a8217e;">
        <input type="checkbox" class="input-control checkbox" checked="" name="notify" value="1" style="visibility: visible; display: inline-block;" /> Notify me of matches that meet my search criteria.
       </label>

       <!-- <input class="btn btn-primary" type="button" value="Save Search" id="btnSearch" name="btnSearch" /> -->

       <div class="" style="width: 100%;">
        <div class="input-group secondFont" id="saveSearch" style="font-size: 17px;">
         <input type="text" class="form-control" id="txtSearch" name="txtSearch" required="required" placeholder="Search name to be saved" />
         <span class="input-group-btn">
          <button class="btn btn-primary" type="submit" id="btnSearch" name="btnSearch">Save Search</button>
         </span>
        </div>
        <!-- /input-group -->
       </div>
       <!-- /.col-lg-6 -->
      </form>
     </div>

     <div class="userbuttons">
      <a class="btn btn-primary btnrefinesearch" href="/search/refine">Refine Search</a>
      <a class="btn btn-primary btnsearchagain" href="/search">Reset Search</a>
     </div>
    </div>

    <div class="clearfix"></div>
   </div>

   <div class="col-lg-12 col-md-12 topbar-bg">
    <div class="row setting-bgcolor roundcornerPanel" style="margin-bottom: 25px; min-height: 600px;">
     <!-- tab content -->
     <div class="boxforms">
      <div class="panel panel-info" style="margin-left: 0px; text-align: center;">
       <div class="panel-body">
        <div id="photoBoxHolder_searchmain" data-startpage="1" data-searchurl="/resultsjson?type=searchmain&amp;pagesize=25&amp;hash=4d878d0b5c4cbbfb074873e06eb40996&amp;version=d8a27e7fcca319aa10589fa9f280282c">
         <div
          id="results-page-search1"
          name="results-page-search1"
          class="text-center results-page galleryPage row norow isLoaded onscreen_search"
          data-userhash="4d878d0b5c4cbbfb074873e06eb40996 "
          data-page="1"
          style="margin-top: 0px; padding-bottom: 0px; height: auto; width: auto;"
         >

        @foreach($users  as $user)
        {{-- @foreach ($religions as $religion) --}}
            
        
            {{-- ..!..card --}}
          <div itemscope="" itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix MoniKhanom female" id="photoBox-MoniKhanom ">
           <span class="hidden"><a itemprop="url" href="/user/MoniKhanom"></a> </span>
           <a href="{{ route('showInfo', $user->id) }}" target="_parent" title="MoniKhanom ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <div class="div-gallery-status">Online</div>
               {{-- @if($user->addphoto)
                <img src="{{asset('frontend/assets/images/')}}/{{ $user->addphoto->image }}" class="img-responsive img-circle" />
                @else
                <img src="{{asset('frontend/assets/images/')}}/default.png" class="img-responsive img-circle" />
              @endif --}}
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/NDQzZTBkMDJhMjQzODM3OddWh4GWTb1xT6mxcMEodsBF0t87ChbFRRHz5LkFkSMgbpVqcMyGOyhwM2of-mhlbrJZjGfgSOe7yzTBkCkH8i3LukXjdMHHgEsjUPiKg5hwzyV0exRPBslAqDz5MvpyHQ$$$.jpg "
               alt="MoniKhanom "
              />
              <div class="secondFont noofPic">+ 2</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">{{$user->Gender}}</div>
               <div class="pull-left usernamesection">
                {{$user->UserName}}
               </div>
               <div class="pull-right">{{\Carbon\Carbon::parse($user->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle"> 
                @if ($user->education)
                {{ $user->education->Employment }}
                @endif
                {{-- {{App\Education::where('user_id',$user->id)->first('Employment')->Employment}} --}}

              </div>
              <div class="religious clearfix secondFont customPadding">  
                @if ($user->religion)
                {{ $user->religion->Sect }}
                @endif
              </div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">{{$user->Country}}  </span>

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                
                @if($user->education)
                <i class="fa fa-star " aria-hidden="true" style="color: green"></i>
                @else
                <i class="fa fa-star-o " aria-hidden="true" ></i>
                @endif

                @if($user->religion)
                <i class="fa fa-star" aria-hidden="true" style="color: green"></i>
                @else
                <i class="fa fa-star-o" aria-hidden="true" ></i>
                @endif

                                
                @if($user->personal)
                <i class="fa fa-star" aria-hidden="true" style="color: green"></i>
                @else
                <i class="fa fa-star-o" aria-hidden="true" ></i>
                @endif

                @if($user->addphoto)
                <i class="fa fa-star" aria-hidden="true" style="color: green"></i>
                @else
                <i class="fa fa-star-o" aria-hidden="true" ></i>
                @endif

                <i class="fa fa-star-o" aria-hidden="true" ></i>


                
                  {{-- <span class="sm-line female star-full">
                  </span>
                  <span class="sm-line female star-empty graybackGround">
                  </span>
                  <span class="sm-line female star-empty graybackGround">
                  </span>
                 <span class="sm-line female star-empty graybackGround"></span> --}}
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>
            {{-- ../..card --}}
         @endforeach
         {{-- @endforeach --}}

         </div>

         <div
          id="results-page-search2"
          name="results-page-search2"
          class="text-center results-page galleryPage row norow isLoaded preload"
          data-userhash="4d878d0b5c4cbbfb074873e06eb40996 "
          data-page="2"
          style="margin-top: 0px; padding-bottom: 0px; height: auto; width: auto;"
         >
         
         </div>
        </div>

        <!--  <div id="searchHashes" data-hash="4d878d0b5c4cbbfb074873e06eb40996" data-page="1" data-pages="2" data-viewablepages="2"   ></div> -->

        <!--     <div id="results"></div>  -->
        <div class="alert alert-success loading col-lg-12 col-md-12" style="display: none;">
         <strong>Loading More Results :)</strong>
        </div>
       </div>
       <noscript>
        <div id="photoBoxHolder_searchmain" data-startpage="1" data-searchurl="/resultsjson?type=searchmain&pagesize=25&hash=4d878d0b5c4cbbfb074873e06eb40996">
         <div id="results-page-search3" class="row text-center results-page galleryPage row" data-page="3" style="margin-top: 0px; padding-bottom: 0px;">
         </div>
        </div>
       </noscript>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection