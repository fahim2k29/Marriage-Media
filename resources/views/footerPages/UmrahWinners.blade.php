@extends('user.app') @section('content')

<div class="container headerColor">
   <div class="page-header pageheaderown">
      <div class="pageheader-heading">
         <h3>Umrah Winners</h3>
      </div>
   </div>
</div>

<div class="wide_fullbgimage getNewbyCategory wide_login_bg">
   <div class="container" id="getNewbyCategory">
      <!-- Content Row -->

      <div class="row">
         <div class="col-lg-12 col-md-12 topbar-bg containerTopmargin">
            <div class="row setting-bgcolor roundcornerPanel">
               <div class="container">
                  <div id="blog">
                     <ol class="breadcrumb" style="margin-bottom: 5px;">
                        <li><a href="/pages/news/successstories">Home</a></li>
                        <li><a href="/pages/news/successstories">Success Story</a></li>

                        <li><a href="#"> Umrah Winners </a></li>
                     </ol>

                     <br />
                    {{-- @foreach ($stories as $story) --}}
                        
                    <div id="photoBoxHolder_searchvisitor" data-startpage="1" data-searchurl="/page/news/resultjsoncmspages?type=Umrah Winners&amp;page=1">
                       <div id="results-page-visitors1" class="row text-center results-page galleryPage row isLoaded onscreen_search" data-page="1" style="padding-bottom: 0px; height: auto; width: auto;">
                          <div class="col-xs-12 newssection">
                             {!!$stories->short_desc!!}


                             <hr class="hrnews hrnewsSection" />
                          </div>
                       </div>
                    </div>
                    {{-- @endforeach --}}


                     <div class="col-md-12 gap10"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row -->
</div>






@endsection