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
           <a href="/searchuser/MoniKhanom/4d878d0b5c4cbbfb074873e06eb40996 " target="_parent" title="MoniKhanom ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <div class="div-gallery-status">Online</div>
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
               <div class="pull-right"></div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Teacher</div>
              <div class="religious clearfix secondFont customPadding"></div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">{{$user->Country}}  </span>

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
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

         




          <div itemscope="" itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix aizah_z female" id="photoBox-aizah_z ">
           <span class="hidden"><a itemprop="url" href="/user/aizah_z"></a> </span>

           <a href="/searchuser/aizah_z/4d878d0b5c4cbbfb074873e06eb40996 " target="_parent" title="aizah_z ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ODljYTNlNGJhZjI3Mjg0MNGG1A16NNj_mKdMvxEylZ3Yp2pBdSP8txa5FMgI5cQAtE65Ydxg2iGBSXjfoKb0g-E8DaEc3UZg-MaMRStk0WM3h2ACJjZg5hb-rRl_JkZtSt2frUvysKWtQ0ujWisVyQ$$$.jpg "
               alt="aizah_z "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                aizah_z
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Lawyer</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> 0 </span>
                , unknown

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>
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
          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix MoniKhanom female" id="photoBox-MoniKhanom ">
           <span class="hidden"><a itemprop="url" href="/user/MoniKhanom"></a> </span>

           <a href="/searchuser/MoniKhanom/ " target="_parent" title="MoniKhanom ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <div class="div-gallery-status">Online</div>
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
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                MoniKhanom
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Teacher</div>
              <div class="religious clearfix secondFont customPadding">Just Muslim</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Sirajganj </span>
                , 118 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Torongo female" id="photoBox-Torongo ">
           <span class="hidden"><a itemprop="url" href="/user/Torongo"></a> </span>

           <a href="/searchuser/Torongo/ " target="_parent" title="Torongo ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/MzUzY2Y2ZjA4NGY5ZDk4NsASE2ptsFPXOS92olTjrLyPf2l_xWTo36hLC8N-ejNxFVG96DjyyUVuUm_b-VzjR_iegoET2p7DN6C7NNy7PKfwSAqFQXS8fdMLUE5C8leGZOb2ucR6AnRqLWTJmDKRksvau0vSvdCMbHGW3u5_9nc$$.jpg "
               alt="Torongo "
              />
              <div class="secondFont noofPic">+ 1</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Torongo
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Writer</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix FatemaM123 female" id="photoBox-FatemaM123 ">
           <span class="hidden"><a itemprop="url" href="/user/FatemaM123"></a> </span>

           <a href="/searchuser/FatemaM123/ " target="_parent" title="FatemaM123 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/Njg2Y2Q3OTk0YmI0ODJkZkgfZR4sAFm0doNWPWnBjShpnAscKxM11z3vTgUQ-B8eAdxNbdPj2EXblKs_HznzcAhmNlXrWsK94jTI0jxd5Cn4WSsssNwf1GbLfUw9n7CX5-v8ex0alkzOHGxmHk_K4A$$$.jpg "
               alt="FatemaM123 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                FatemaM123
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Doctor</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Moonshine786 female" id="photoBox-Moonshine786 ">
           <span class="hidden"><a itemprop="url" href="/user/Moonshine786"></a> </span>

           <a href="/searchuser/Moonshine786/ " target="_parent" title="Moonshine786 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ZTA1NzFlYTRiMzk1ZWI3YYxqbRUsWHzp4YedKBVcl4x33yzYwbiMiv-HVIepxDgxVXBgyDs1aGxp6wxS8UfWd7LVDsQPuK7wXKycGEeTuX4R86U9sDSekN_-vaPHFatS8fWZgVqg0jNJfXfmGGcIrA$$$.jpg "
               alt="Moonshine786 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Moonshine786
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Prefer not to say</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 118 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Rehnumatarannum female" id="photoBox-Rehnumatarannum ">
           <span class="hidden"><a itemprop="url" href="/user/Rehnumatarannum"></a> </span>

           <a href="/searchuser/Rehnumatarannum/ " target="_parent" title="Rehnumatarannum ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ZDM3MmE3ZTQwNmJhYzRjONvejgpRhI1zjGQNHrfE5jlcCm1HXMd4HhJGY3lN2iWsF6-ObAPxuiq2CbFR1c7QgJsy6K_EZ1fdBJmYYV1t7l_DPFzekL3EsneoJ6RWMHdquyYA-Yp9GelGjJgaqRDjAA$$$.jpg "
               alt="Rehnumatarannum "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Rehnumatarannum
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Executive</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Mahbs786 female" id="photoBox-Mahbs786 ">
           <span class="hidden"><a itemprop="url" href="/user/Mahbs786"></a> </span>

           <a href="/searchuser/Mahbs786/ " target="_parent" title="Mahbs786 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/NWYzYWQxNWQ0MjQyZmYwNfWlk5EFugOMiHoJa7i_fc73uW8XvRwGRQi8IcovKALor4MyH1vgWUml-peRiProOzS0qn_OHOh_epJNdy3-u67TKiAdI3mbbHN333mnPP-QZsbFawGp-KuE0atBb6bDSw$$$.jpg "
               alt="Mahbs786 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Mahbs786
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Unemployed</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Saidpur </span>
                , 119 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Ravishingstar female" id="photoBox-Ravishingstar ">
           <span class="hidden"><a itemprop="url" href="/user/Ravishingstar"></a> </span>

           <a href="/searchuser/Ravishingstar/ " target="_parent" title="Ravishingstar ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ZDIxMjdiNGJjNjRjYTA4OPTYxAqyoJALO0cX4itAr64N321OivDoDFl6SCMzfNHME6w6zPCs8TbAiU0JsmR_2uBqVX1FoxZkwOfuQri3Bf6PiSKB_IElPc72kv9wmMIPxOKDLT1QT469dctMoXhq9w$$$.jpg "
               alt="Ravishingstar "
              />
              <div class="secondFont noofPic">+ 3</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Ravishingstar
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Architect</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 119 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Zonobia111 female" id="photoBox-Zonobia111 ">
           <span class="hidden"><a itemprop="url" href="/user/Zonobia111"></a> </span>

           <a href="/searchuser/Zonobia111/ " target="_parent" title="Zonobia111 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ZmJlZjg1NjY0NzgzMDI0Zv-Kl72K8lX0cii6noNnXlVfRGUlTVPFXaC1lXJ5X06ffPaprcsejIIl5JSq60NpGKq8_X68jzcNjHpRqbaMHUETxXoYDMljn0uawKSKfkshoPjmeGSDBZ_AMt0zguSXwg$$$.jpg "
               alt="Zonobia111 "
              />
              <div class="secondFont noofPic">+ 2</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Zonobia111
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Teacher</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 8 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Rajkumari female" id="photoBox-Rajkumari ">
           <span class="hidden"><a itemprop="url" href="/user/Rajkumari"></a> </span>

           <a href="/searchuser/Rajkumari/ " target="_parent" title="Rajkumari ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/NTI0MzM2ZjUzOGYxNzJjOLAUGjJ6Ba4YdZurn03PzU7S7g17DZXOpI5KJytIismQghQRpge3u11PGF1MuxxOFawZQwVoKCywa871yLPASn9a5SSg4NWZENmHStnQr4eiD5FvstuEorCYVLBRWswWIg$$$.jpg "
               alt="Rajkumari "
              />
              <div class="secondFont noofPic">+ 1</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Rajkumari
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Art & Design</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Meherunnesa female" id="photoBox-Meherunnesa ">
           <span class="hidden"><a itemprop="url" href="/user/Meherunnesa"></a> </span>

           <a href="/searchuser/Meherunnesa/ " target="_parent" title="Meherunnesa ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/OTdlM2Y2NWUzZTQ1ZDQzNcDMS4X--rzpnAPT0pri_DFTchh9wuODGKJjulNtv7kdHJPftrAp7mttldEzQW_qMNQ_wK4EL4o4fVa5Yw6G11GUQIkyJZ4tetasSZH-N3NHmOST70XwBanHpjZecWkoAw$$$.jpg "
               alt="Meherunnesa "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Meherunnesa
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Administration</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , unknown

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Zonosuri111 female" id="photoBox-Zonosuri111 ">
           <span class="hidden"><a itemprop="url" href="/user/Zonosuri111"></a> </span>

           <a href="/searchuser/Zonosuri111/ " target="_parent" title="Zonosuri111 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/NTc3ODY4M2JiNmM2NDhkOU_7Evf5jXpAEy8uvbWStwdVJ2RfoDm72g_xxOoC0vi8T767EE7bTLANeoWNhNFtN1pnW6W9iTVLgwt7u0VYz1zAr9Q0PzxBnA0wIJPMMD335WQb_1GDGxWn9hRQVrKElQ$$$.jpg "
               alt="Zonosuri111 "
              />
              <div class="secondFont noofPic">+ 1</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Zonosuri111
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Teacher</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix shadowcat female" id="photoBox-shadowcat ">
           <span class="hidden"><a itemprop="url" href="/user/shadowcat"></a> </span>

           <a href="/searchuser/shadowcat/ " target="_parent" title="shadowcat ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YjQ1MDdmNjllZDc1MjE0Y_XCM78rq5PLcCe1qNJ8UCLK52-KJvzjsdprLasN8DLCdaf1zJiAfhI5VUupIs8Ze1iSWfE0HgjUusz9gdijIVNwxMIc99E3VmoV7vaIltnCWU2HG5dWt9fZQUCN9DGWEw$$$.jpg "
               alt="shadowcat "
              />
              <div class="secondFont noofPic">+ 4</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                shadowcat
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Clerical Official</div>
              <div class="religious clearfix secondFont customPadding">Just Muslim</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Hananalbari female" id="photoBox-Hananalbari ">
           <span class="hidden"><a itemprop="url" href="/user/Hananalbari"></a> </span>

           <a href="/searchuser/Hananalbari/ " target="_parent" title="Hananalbari ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/OGZhN2EyODIzZTVmOWY1Yfxgwg3LAJk4Q4Xs7jJ-BlCC6KNjOb_aw62iy4RKUJFmbIpF3PE4Aioft39-RX_KUSNoWL7FTk2SYKvGNt3TxFQ7CgOufsnLvYlL3YwpHe4GvcRuxeEFBH-Y-YRxiVfGtQ$$$.jpg "
               alt="Hananalbari "
              />
              <div class="secondFont noofPic">+ 9</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Hananalbari
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Dentist</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Amira2345 female" id="photoBox-Amira2345 ">
           <span class="hidden"><a itemprop="url" href="/user/Amira2345"></a> </span>

           <a href="/searchuser/Amira2345/ " target="_parent" title="Amira2345 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/OGFlN2ZkM2E2NzhiMWQwNSsGvM1--RHX_HH2l3XcfaPGpLojysKaY5TUcSMAUz_fhkyS3IhkvTFwm7vXAW_SPf1MVfR6D2Ro_FOL9x---0XEFJk3-tXa2nuFTDKaW692KoWnr1Hl0V6HpG1JdKuQFw$$$.jpg "
               alt="Amira2345 "
              />
              <div class="secondFont noofPic">+ 2</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Amira2345
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Teacher</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Barisal </span>
                , 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix akteresha female" id="photoBox-akteresha ">
           <span class="hidden"><a itemprop="url" href="/user/akteresha"></a> </span>

           <a href="/searchuser/akteresha/ " target="_parent" title="akteresha ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YmJlNDIzZGYyZjNkOGIwN_aRZpLvZYHZjQbnAjpQlbI1qJOAWkK6NdtNzd-WTmo22w6v7XLNmx2CCr4GK0ZVA8FmKFX_Ms2iFvYW7uoPsKbRdaj_bhmOBv3debBVdDf-3AcrESVaFSVN07IfxeRyGA$$$.jpg "
               alt="akteresha "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                akteresha
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Rangpur </span>
                , 154 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix razyasultana female" id="photoBox-razyasultana ">
           <span class="hidden"><a itemprop="url" href="/user/razyasultana"></a> </span>

           <a href="/searchuser/razyasultana/ " target="_parent" title="razyasultana ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/MzM1NGQwZWM0NGZhYzQwNoxiB5rLw8HCePinKmvUWhPEqc0en1csqMRjxs1mSBUL1GmS47gjnDnUZZilue_Q91-BaU3QizMdA1pmFqTnFMso3Fmmz8nE_ivUdpl8GXT6Mn4xlSmh3Z5fHgGdtbS7VQ$$$.jpg "
               alt="razyasultana "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                razyasultana
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 118 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix faria_nyjer female" id="photoBox-faria_nyjer ">
           <span class="hidden"><a itemprop="url" href="/user/faria_nyjer"></a> </span>

           <a href="/searchuser/faria_nyjer/ " target="_parent" title="faria_nyjer ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/OTRkNGYxOWE4OGJiYzhmNiaDHNe7lmHEq0GVT56F2F1Q_7uwgw_hO6oUG7UCiQ9h696R_apYo39YaKiHQVsZ6nIHE5djqRIMOdKUo9MSLUAFDdxIF49IFTKxafEzKrnSiktJaXU19YExhDXqpjKtLQ$$$.jpg "
               alt="faria_nyjer "
              />
              <div class="secondFont noofPic">+ 2</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                faria_nyjer
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Exoticrav female" id="photoBox-Exoticrav ">
           <span class="hidden"><a itemprop="url" href="/user/Exoticrav"></a> </span>

           <a href="/searchuser/Exoticrav/ " target="_parent" title="Exoticrav ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YWE3NDZiMTIwZGZiNDI4ZMYpDUJ2FnwPA25DUBjrueOe86GBiSgYHaHFeZF-n-Km-flwxqSsbocISWqMKkj1KIZPEWNyhx0stXA4bgM8AKVF3YJhAkoGwpETFUuOIKe6n4M_ZB3rhRMLEXyiulZ5cQ$$$.jpg "
               alt="Exoticrav "
              />
              <div class="secondFont noofPic">+ 2</div>
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Exoticrav
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Architect</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 3219 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix rainbow11155 female" id="photoBox-rainbow11155 ">
           <span class="hidden"><a itemprop="url" href="/user/rainbow11155"></a> </span>

           <a href="/searchuser/rainbow11155/ " target="_parent" title="rainbow11155 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YmE4MzU2ODhjMWM4NjJlZjtFz4mxkkuISoD1DRDele6wvpRKENrOVDRmznH-CvfQI-Dr_AYIfMZhbCaj6ay6eX8QJGoywmc2sECkbDsrZ6ckPBoI5LoSdBSs1u6Dk8EGXeuHAWhehnTzfQlDmzQfIQ$$$.jpg "
               alt="rainbow11155 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                rainbow11155
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Prefer not to say</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix 1992sultana female" id="photoBox-1992sultana ">
           <span class="hidden"><a itemprop="url" href="/user/1992sultana"></a> </span>

           <a href="/searchuser/1992sultana/ " target="_parent" title="1992sultana ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/MmMxOGJjZDkxOWNkMWNhZbcMjlkjUbSG1HbhSaMsF3EZ4KeVvwvhHFGidu_4loyt-XWUS9kQsetBbBU8gGv_yYnqQb6HfmupZmt7A_BY7Q_IyEAwRwEBDauqixYkoYwbUyYvDuU2ZgYkqPNr2oaZOg$$$.jpg "
               alt="1992sultana "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                1992sultana
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> </span>
                , unknown

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix TanjiT female" id="photoBox-TanjiT ">
           <span class="hidden"><a itemprop="url" href="/user/TanjiT"></a> </span>

           <a href="/searchuser/TanjiT/ " target="_parent" title="TanjiT ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YTNjMzgyOWMwZGZmYzQyZFSGDd1LbkJTM5_XJ7g_Br7JLWFre7G4gQtJH1HAJ42yxHjnAcX8X1a41nuWTKEj5oZrVsSKi8Z0_U3CCYwDR9gtAzCzzSbM1eZloe5mM74Q83kjzy8CXbZaNqvFpv6lGA$$$.jpg "
               alt="TanjiT "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                TanjiT
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , within 5 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Shymashams female" id="photoBox-Shymashams ">
           <span class="hidden"><a itemprop="url" href="/user/Shymashams"></a> </span>

           <a href="/searchuser/Shymashams/ " target="_parent" title="Shymashams ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/M2YwNWFiZDAxMTlhYWE3OY3G-_IK8iGDitXKx4Pog_dnWA04HSt7jQ3No4xPS9OeZKr_4aNIIX3B8cIDg1dn8jT_Y7JU1WNODd5kWhrHjLiYXjiodZbaWY-Psk5MRYJC28ypFZuBoMuweRd_vLGnmg$$$.jpg "
               alt="Shymashams "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Shymashams
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Unemployed</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Chittagong </span>
                , 131 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix mitali female" id="photoBox-mitali ">
           <span class="hidden"><a itemprop="url" href="/user/mitali"></a> </span>

           <a href="/searchuser/mitali/ " target="_parent" title="mitali ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/ODNiZTFkOTZjOWM0NTdlMRozzJvSGnRYhM97HnAK3-aV6IcM4hc-nWHQHmSiFmZa3eg0mZLOGgkQqP3OZXn_X7U2wtYi2WCkQSF2HtimnJ3WCOodW69Pr3HWb2ZCt7OgEpVmmWVq0TMa3e-59PBx9Q$$$.jpg "
               alt="mitali "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                mitali
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 6 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix Lightning1996 female" id="photoBox-Lightning1996 ">
           <span class="hidden"><a itemprop="url" href="/user/Lightning1996"></a> </span>

           <a href="/searchuser/Lightning1996/ " target="_parent" title="Lightning1996 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/MWY1YjU1YjQwMzdmN2E1NV9GcYd_FDW6IbqR2hBVdXqRCEs3J6lH4j68UX1CfCfXRbP9te9SSXSNDOS0FFv6GPGdQQIXFZAPjFJUIFetIUaslWhdqXXXMpCWaGD6sI3mGWf95XLV6GZSrrksu-WPQg$$$.jpg "
               alt="Lightning1996 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                Lightning1996
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Just Muslim</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 92 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-full"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>

          <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox clearfix 0T1A2 female" id="photoBox-0T1A2 ">
           <span class="hidden"><a itemprop="url" href="/user/0T1A2"></a> </span>

           <a href="/searchuser/0T1A2/ " target="_parent" title="0T1A2 ">
            <div class="mainBox clearfix female">
             <div class="pull-left picBox">
              <img
               itemprop="image"
               class="image-gallery img-responsive"
               src="//gallery.singlemuslim.com/primary/165x165/YzA2ZmVkY2YyMTE1MDE3MeSlpuNBN2NcW-zAMDNSegzBya6KGUuwCGNVboAhy-o_IwlfoXe7d72Igcbn6GQtI_IUiHjcciJmCJbb_zKq6rl-haj6jTRL0w0GCNdiJUiKhqwot6iAJ_BU9b1gl3wHZA$$$.jpg "
               alt="0T1A2 "
              />
             </div>
             <div class="pull-right infoBox">
              <div itemprop="name" class="username-age clearfix female">
               <div class="hidden" itemprop="gender">Female</div>
               <div class="pull-left usernamesection">
                0T1A2
               </div>
               <div class="pull-right">28</div>
              </div>

              <div class="sector clearfix secondFont" itemprop="jobTitle">Student</div>
              <div class="religious clearfix secondFont customPadding">Sunni</div>
              <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place">
               <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality"> Dhaka </span>
                , 51 miles

                <div class="hidden" itemprop="addressCountry">Bangladesh</div>
               </span>
              </div>
              <div class="flag-stars clearfix secondFont customPadding-rating">
               <div class="pull-left">
                <div class="rating">
                 <span class="sm-line female star-full"></span><span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 <span class="sm-line female star-empty graybackGround"></span>
                </div>
               </div>
               <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd"></i></div>
              </div>
             </div>
            </div>
           </a>
           <span class="clearfix"></span>
          </div>
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