@extends('user.profile.app') @section('content')

<div class="container">
 <div class="row">
  <div class="col-md-12" id="showuserProfileSearch">
   
<div></div>
   <div class="userProfileView female parallax parallax-1" itemscope="" itemtype="http://schema.org/Person">
    <div class="alertpostion"></div>

    <div class="topbarProfileview">
     <div class="backtosearch absolute-position">
      <a href="/searchdisplayresults/2eeb2403dca2a356791516e79c96cbf5/false/1"><i class="sm-line arrows-left vertical-alignment"></i> Back to search</a>
     </div>

     <div class="pull-left userBigPic">
      <div class="userinfoonpic">
       <div class="col-md-12">
        <div class="pull-left usernameLeft usernamesection">
         <div class="pull-left nameuser">
          <h1>
           <a href="/user/Jaequilin" title="Jaequilin"><span itemprop="name">{{$users->UserName}}</span></a>
          </h1>
         </div>

         <div class="pull-left userAge">
          22
         </div>
         <div class="clearfix"></div>
        </div>
        <div class="pull-right flagposition">
         <div style="display: inline-block;">
          <i class="sm-flag-medium bd"></i>
         </div>
        </div>
       </div>

       <div class="col-md-12">
        <div class="pull-left contentHeadline fontsize-12">
         <h2 class="fontsize-12">{{$users->UserName}}</h2>
        </div>
        <div class="pull-right">
         <div class="starSection">
          <div class="pointerCursor ratingUser">
           <div class="rating">
            <span class="sm-line none star-full"></span><span class="sm-line none star-empty graybackGround"></span><span class="sm-line none star-empty graybackGround"></span><span class="sm-line none star-empty graybackGround"></span>
            <span class="sm-line none star-empty graybackGround"></span>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>

        @if(isset($addPhotos))
            <img id="avatar" class="editable img-responsive editable-click editable-empty" 
            src="{{asset('frontend/assets/images/')}}/{{ $addPhotos->image }}" alt="Alex's Avatar"  width="320px"
            >
                @else
            <img src="{{asset('frontend/assets/images/')}}/default.png" class="img-responsive img-circle" height="300px" width="200px"/>
        @endif

      <div class="thumbImages"></div>
     </div>
     <div class="pull-left thumImages-buttons">
      <div class="buttons-profile">
       <div class="newnavbar">
        <div class="pull-left leftbutton"></div>

        <div class="pull-left middlebuttons">
         <div class="pull-left messageme">
          <a
           class="btn icon-btn btn-primary btn-primary btn-sendmessage female"
           data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$"
           data-error=""
           data-key=""
           data-messages="nodata"
           href="#"
           data-toggle="tooltip"
           data-placement="bottom"
           title=""
           data-original-title=""
          >
           <i class="icon sm-line bubble-chat2 iconabsolute greenbutton"></i>
          </a>
         </div>

         <div class="pull-left myfavourite">
          <a
           class="btn-primary btn-addContact"
           data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$"
           href="/addascontact/YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$/2eeb2403dca2a356791516e79c96cbf5/Jaequilin"
           data-error=""
           data-toggle="tooltip"
           data-placement="bottom"
           title=""
           data-original-title=""
          >
           <i class="icon sm-line basic-heart female iconabsolute"></i>
          </a>
         </div>
        </div>

        <div class="pull-left rightbutton">
         <a
          href="/searchuser/Hijasmina/2eeb2403dca2a356791516e79c96cbf5"
          class="rightarrowprofile"
          rel="popover2"
          data-htmluser=' 





        

        
        
        
            <div itemscope itemtype="http://schema.org/Person" class="photoSearchbox photoBox    clearfix Hijasmina   female "
         id="photoBox-Hijasmina ">

        <span class="hidden"><a  itemprop="url" href="/user/Hijasmina"></a> </span>

                <a href="/searchuser/Hijasmina/2eeb2403dca2a356791516e79c96cbf5 " target="_parent" title="Hijasmina ">
            <div class="mainBox clearfix female  ">
                <div class="pull-left picBox">
                                        <img itemprop="image"  class="image-gallery  img-responsive" src="//gallery.singlemuslim.com/primary/165x165/OGE3ODQ1MTY1OTQxMDM4MEkrHSQD7BeunNIqnrFf_1ONQMa33sRka-E9UqGCpHmOUrAFSu6hwa9tZBGaDpMfTAgrdCkcB_cKyPwT5BWAFg7FP-bSWlsbFPjL5hEvdlPqySUaQi3cHoOXpvNb2fTYUg$$$.jpg " alt="Hijasmina "/>
                                    </div>
                <div class="pull-right infoBox">
                    <div itemprop="name"  class="username-age clearfix female ">
                        <div class="hidden"  itemprop="gender">Female</div>
                        <div class="pull-left usernamesection">
                            Hijasmina                        </div>
                        <div class="pull-right"> 18 </div>
                    </div>

                    <div class="sector clearfix secondFont" itemprop="jobTitle"> Unemployed </div>
                    <div class="religious clearfix secondFont customPadding"> Sunni </div>
                    <div class="location-miles clearfix secondFont customPadding" itemprop="homeLocation" itemscope itemtype="http://schema.org/Place" >




                                <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                                    <span itemprop="addressLocality">

                                                                                                                    </span>
                        , unknown

                                     <div class="hidden"  itemprop="addressCountry">Bangladesh</div>
                                </span>
                    </div>
                    <div class="flag-stars clearfix secondFont customPadding-rating">
                        <div class="pull-left">   <div class="rating"><span class="sm-line female star-full "></span><span class="sm-line female star-full "></span><span class="sm-line female star-empty graybackGround "></span><span class="sm-line female star-empty graybackGround "></span><span class="sm-line female star-empty graybackGround "></span> </div></div>
                        <div class="pull-right" itemprop="nationality"><i class="sm-flag-medium bd "></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <span class="clearfix"></span>
    </div>
'
          data-original-title=""
          title=""
         >
          <span class="buttons sm-line arrows-right"></span>
         </a>
        </div>

        <div class="clearfix"></div>
       </div>

       <span class="clearfix"></span>
      </div>
     </div>

     <span class="clearfix"></span>
    </div>

    <div class="detialBarProfileview">
     <div class="leftDetails">
      <div class="pull-left online-offline"></div>

      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        My Sect
       </div>
       <div class="pull-left profileContent">
        {{$religions->Sect}}
       </div>
      </div>

      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        Religiousness
       </div>
       <div class="pull-left profileContent">
        {{$religions->Religiosness}}
       </div>
      </div>

      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        My Profession
       </div>
       <div class="pull-left profileContent">
        <span itemprop="jobTitle"> {{$educations->Employment}} </span>
       </div>
      </div>

      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        Marital Status
       </div>
       <div class="pull-left profileContent">
        {{$personals->MaritaStatus}}
       </div>
      </div>


      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        Country
       </div>
       <div class="pull-left profileContent">
        <div style="display: inline-block;">
         <i class="sm-flag-medium bd"></i>
        </div>

        <span itemprop="homeLocation" itemscope="" itemtype="http://schema.org/Place">
         <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
          <span itemprop="addressCountry"> {{$personals->Citizenship}} </span>
          <span class="hidden" itemprop="addressRegion"> </span>
         </span>
        </span>
       </div>
      </div>

      <div class="col-lg-12 profile-info-row">
       <div class="pull-left profileLabel">
        Registration Reason
       </div>
       <div class="pull-left profileContent">
        {{$users->RegistrationReason}}
       </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-lg-12 contentshare">
       <div class="hidebuttons">
        <a
         class="btn icon-btn btn-primary btn-report togetherbutton"
         data-error=""
         data-toggle="tooltip"
         data-placement="top"
         title=""
         data-username="Jaequilin"
         data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$"
         data-original-title=""
        >
         <span class="icon sm-line basic-flag1 iconabsolute female"></span><br />
         <span class="messagecolor">Report</span>
        </a>

        <a
         class="btn icon-btn btn-primary togetherbutton btn-blockUser"
         data-username="Jaequilin"
         data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$"
         data-toggle="confirmation"
         data-btn-ok-label="Block User"
         data-popout="true"
         data-isblocked="false"
        >
         <span class="icon sm-line basic-ban iconabsolute female"></span><br />
         <span class="messagecolor">Block</span>
        </a>
       </div>
      </div>

      <div class="col-lg-12 contentshare">
       <span><a itemprop="url" class="female" href="/user/Jaequilin">Profile Link</a></span>
       <span>
        <form>
         <div class="input-group">
          <input type="text" class="form-control" style="border-radius: 0px !important;" value="https://www.singlemuslim.com/user/Jaequilin" placeholder="Some path" id="copy-input" />
          <span class="input-group-btn">
           <button class="btn btn-default" type="button" id="copy-button" style="height: 34px;" data-toggle="tooltip" data-placement="button" data-original-title="" title="">
            <i class="sm-line basic-sheet-multiple"></i>
           </button>
          </span>
         </div>
        </form>
       </span>
      </div>
     </div>

     <div class="pull-right rightDetails">
      <div class="userinfosectiontop">
       <div class="sections userinfosection">
        <div class="col-md-12 headings">
         A Little Bit About Me
        </div>
        <div class="col-md-12 detailpart">
         <span itemprop="description"> {{$aboutmes->Description}} </span>
        </div>
        <p class="read-more">Read More</p>
        <div class="clearfix"></div>
       </div>

       <div class="sections userinfosection">
        <div class="col-md-12 headings">
         What I Am Looking For
        </div>
        <div class="col-md-12 detailpart">{{$aboutmes->LookingFor}}</div>
        <p class="read-more">Read More</p>
        <div class="clearfix"></div>
       </div>

       <div class="col-md-6 nopaddinginfo personal information-paddingright">
        <div class="sections userinfosection-group personal information-minheight">
         <div class="col-md-12 headings">
          Personal Information
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">My Citizenship</div>

          <div class="col-md-6 font-size-class">
           <span>{{$personals->Citizenship}}</span>
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Country of Origin</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Origin}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Willing to Relocate?</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Relocation}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">I am Looking to Marry</div>

          <div class="col-md-6 font-size-class">
           {{$personals->MarryIn}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Income</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Income}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Marital Status</div>

          <div class="col-md-6 font-size-class">
           {{$personals->MaritaStatus}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Would I like to have Children?</div>

          <div class="col-md-6 font-size-class">
           {{$personals->HaveChildren}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Do I have children?</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Children}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Living Arrangements?</div>

          <div class="col-md-6 font-size-class">
          {{$personals->Living}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Country</div>

          <div class="col-md-6 font-size-class">
           {{$users->Country}}
          </div>

          <div class="clearfix"></div>

          

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>

       <div class="col-md-6 nopaddinginfo appearance-paddingright">
        <div class="sections userinfosection-group appearance-minheight">
         <div class="col-md-12 headings">
          Appearance
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">My Height</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Height}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Build</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Build}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Hair Colour</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Hair}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Colour of My Eyes</div>

          <div class="col-md-6 font-size-class">
           {{$personals->EyeColour}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Do I Smoke?</div>

          <div class="col-md-6 font-size-class">
           No
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Do I Have Any Disabilities?</div>

          <div class="col-md-6 font-size-class">
           {{$personals->Smoke}}
          </div>

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>

       <div class="col-md-6 nopaddinginfo education-paddingright">
        <div class="sections userinfosection-group education-minheight">
         <div class="col-md-12 headings">
          Education
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">My Education Level</div>

          <div class="col-md-6 font-size-class">
           {{$educations->EducationLevel}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Subject I Studied</div>

          <div class="col-md-6 font-size-class">
           <span itemprop="knowsAbout">{{$educations->SubjectStudied}}</span>
          </div>

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>

       <div class="col-md-6 nopaddinginfo language-paddingright">
        <div class="sections userinfosection-group language-minheight">
         <div class="col-md-12 headings">
          Language
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">My First Language</div>

          <div class="col-md-6 font-size-class">
           <span itemprop="knowsLanguage">{{$educations->FirstLang}}</span>
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Second Language</div>

          <div class="col-md-6 font-size-class">
           {{$educations->SecondLang}}
          </div>

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>

       <div class="col-md-6 nopaddinginfo work-paddingright">
        <div class="sections userinfosection-group work-minheight">
         <div class="col-md-12 headings">
          Work
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">My Profession</div>

          <div class="col-md-6 font-size-class">
           {{$educations->Employment}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Job Title</div>

          <div class="col-md-6 font-size-class">
           {{$educations->jobTitle}}
          </div>

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>

       <div class="col-md-6 nopaddinginfo religion-paddingright">
        <div class="sections userinfosection-group religion-minheight">
         <div class="col-md-12 headings">
          Religion
         </div>
         <div class="col-md-12 detailpart">
          <div class="col-md-6 font-size-class-header">Religiousness</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Religiosness}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">My Sect</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Sect}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Hijab/Niqab</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Hijab}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Beard</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Beard}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Are You a Revert?</div>

          <div class="col-md-6 font-size-class">
          {{$religions->Convert}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Do You Keep Halal?</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Halaal}}
          </div>

          <div class="clearfix"></div>

          <div class="col-md-6 font-size-class-header">Do You Perform Salaah?</div>

          <div class="col-md-6 font-size-class">
           {{$religions->Salaah}}
          </div>

          <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix"></div>
    </div>

    <div id="modalPictureGallery" class="modal fade">
     <div class="modal-dialog">
      <div class="modal-content">
       <!-- dialog body -->
       <div class="modal-body">
        <div class="custom_dialog">
         <button type="button" class="close" data-dismiss="modal"></button>
        </div>

        <div class="col-lg-12 col-md-12 nopadding">
         <div class="panel panel-default">
          <div class="panel-body gallerylist">
           <!-- Start Minimal Gallery Html Containers -->

           <div id="inlineProfileGallery">
            <div class="viewer">
             <div class="picture holder">
              <div class="description" style="display: none;"></div>
             </div>
             <div class="picture main">
              <div class="controls prev next">
               <a class="prev">
                <div></div>
               </a>
               <a class="next">
                <div></div>
               </a>
              </div>
              <div class="description" style="display: none;"></div>
             </div>
            </div>
            <div class="strip">
             <div class="thumbnails"></div>
            </div>
            <div class="currentViewer">
             <div class="arrow"></div>
            </div>
           </div>

           <div style="clear: both;"></div>
          </div>
         </div>
        </div>

        <div class="clearfix"></div>
       </div>
       <!-- dialog buttons -->
      </div>
     </div>
    </div>

    <div id="UserProfileController">
     <div class="modal fade modal-wide" id="userChatModel" data-threadkey="" data-username="Jaequilin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="false">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body modal-body-msg-user">
         <div class="msg-wrap-2" id="ScrollerBottomMessage" style="padding-top: 30%; padding-bottom: 30%;">
          <div class="actualloadeddataMessages" id="actualloadeddataMessages">
           <div class="messageDiv">
            Loading your messages ....
           </div>
           <br />

           <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

    <div class="clearfix"></div>
   </div>
   <div id="modalTempalteMessages" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
       <div class="custom_dialog">
        <button type="button" class="close" data-dismiss="modal">x</button>
       </div>

       <div class="panel panel-default">
        <div class="panel-body gallerylist">
         <div class="templatemainMessageBox">
          <div class="pull-left userInfomessage">
           <div class="sectionTitle">
            <h3>Upgrade to Gold Membership</h3>
           </div>

           <div class="mainbodyuser">
            <div class="userDetail">
             <div class="userrow">
              <div class="pull-left leftRowsection">
               <img
                src="//gallery.singlemuslim.com/primary/50x50/ODIyNzQ3N2ZlMDQyNzMxNyhBNBfJr1DIvJhBDYMxtZsSMmuJomLOf9zi7wHQjGjjtPQtVwBKC1nsad9TcXYqsa5llkt9jd48BZsXcdg02i6220dQMJ5S9GOHJ7NmH5r51RXbx2kND9g3vOaLDiBnzw$$$.jpg"
                height="50px"
                width="50px"
                class="img-circle"
                alt=" Jaequilin "
               />
              </div>
              <div class="pull-left rightRowsection">
               <div class="topBar">
                <div class="pull-left nameGender female"><a href="/user/Jaequilin"> Jaequilin </a> , <span class="userColorheading"> 22 </span></div>
                <div class="pull-right starReview">
                 <div class="rating">
                  <span class="sm-line female star-full"></span><span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                  <span class="sm-line female star-empty graybackGround"></span><span class="sm-line female star-empty graybackGround"></span>
                 </div>
                </div>
                <div class="clearfix"></div>
               </div>

               <div class="bottombar secondFont">
                <div class="userinfoRow-1">
                 <div class="pull-left flagdiv"><i class="pull-left sm-flag-medium bd"></i></div>
                 <div class="pull-left infoContent">BD /</div>
                 <div class="pull-left viewsContent"></div>
                 <div class="clearfix"></div>
                </div>
                <div class="userinfoRow-2">
                 Acting Professional
                </div>
                <div class="clearfix"></div>
               </div>
              </div>
              <div class="clearfix"></div>
             </div>
            </div>
            <div class="messageType">
             <div class="userMessagebox">
              <div class="usercustomText">Send a Custom Message to <span class="genderColor female"> Jaequilin </span></div>
              <div class="textBoxsection">
               <div class="pull-left textUserSection">
                <textarea name="textarea" class="txtTextarea" style="overflow-x: hidden; overflow-wrap: break-word; resize: none;"> </textarea>
               </div>
               <div class="pull-right textsendButton pointerCursor">
                <div class="Sendbutton">
                 <a href="/membership/packages">
                  SEND AND <br />
                  UPGRADE
                 </a>
                </div>
               </div>
               <div class="clearfix"></div>
              </div>
             </div>
            </div>
            <div class="membershipFeatures">
             <div class="goldMemberList">
              <div class="secondFont heading-goldmember">
               Benefits of Gold Membership
              </div>

              <div class="goldmembershippoints">
               <ul>
                <li>
                 Instantly Send, read and reply to messages
                </li>
                <li>
                 View who liked you
                </li>
                <li>
                 View your matches
                </li>
                <li>
                 See who's viewed your profile
                </li>
               </ul>
              </div>
             </div>
            </div>
            <div class="membershipContent">
             Upgrade to Gold Membership and find your ideal marriage partner today!
            </div>
           </div>
           <!--                                <div class="footer-template">-->
           <!---->
           <!---->
           <!--                                    <div class="freetempUserSection pull-left"> Template Messages</div>-->
           <!--                                    <div class="symbolplus pointerCursor pull-left"> + </div>-->
           <!--                                    <div class="clearfix"></div>-->
           <!---->
           <!---->
           <!--                                </div>-->
          </div>
         </div>
        </div>
       </div>

       <div class="clearfix"></div>
      </div>
      <!-- dialog buttons -->
     </div>
    </div>
   </div>
   <div id="modalRatingsection" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
       <div class="custom_dialog">
        <button type="button" class="close" data-dismiss="modal">x</button>
       </div>

       <div class="panel panel-default">
        <div class="panel-body usercontent"></div>
       </div>

       <div class="clearfix"></div>
      </div>
      <!-- dialog buttons -->
     </div>
    </div>
   </div>

   <div id="modalShareProfile" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
       <div class="custom_dialog">
        <button type="button" class="close" data-dismiss="modal">x</button>
       </div>

       <div class="panel panel-default">
        <div class="panel-body gallerylist">
         <div class="templatemainMessageBox">
          <div class="pull-left userInfomessage">
           <div class="mainbodyuser">
            <div class="span3">
             <h2>Send Jaequilin 's Profile to a Friend</h2>
             <form id="signupform" class="form-horizontal" role="form" action="#" method="post" data-toggle="validator" novalidate="true">
              <label class="col-xs-3">* Your Name:</label>
              <input type="text" name="txtYourname" placeholder="Your Name" class="col-xs-9" />
              <label class="col-xs-3">* Your Email:</label>
              <input type="email" name="txtYouremail" placeholder="Your Email" class="col-xs-9" />
              <label class="col-xs-3">Friend's Name:</label>
              <input type="text" name="txtFriendsname" placeholder="Friends Name" class="col-xs-9" />
              <label class="col-xs-3">Friend's Email:</label>
              <input type="email" name="txtFriendemail" placeholder="Friends Email" class="col-xs-9" />
              <label class="col-xs-3">Message:</label>
              <textarea name="txtMessage" id="txtMessage" class="col-xs-9" placeholder="Type your message here" style="overflow-x: hidden; overflow-wrap: break-word; resize: none;"></textarea>
              <br />
              <br />
              <br />
              <input type="submit" value="Send Now" class="btn btn-primary pull-right" />
              <div class="clearfix"></div>
             </form>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>

       <div class="clearfix"></div>
      </div>
      <!-- dialog buttons -->
     </div>
    </div>
   </div>
   <script>
    var $el, $ps, $up, totalHeight;

    $(function () {
     $(".read-more").on("click", function () {
      var readmore = $(this);
      if (readmore.text() == "Read More") {
       readmore.text("Read Less");
      } else {
       readmore.text("Read More");
      }

      readmore.parent().find(".detailpart").toggleClass("heightAuto");
     });

     $(".userinfosection .button").on("click", function () {
      totalHeight = 0;

      $el = $(this);
      $p = $el.parent();
      $up = $p.parent();
      $ps = $up.find("div:not('.read-more')");

      // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
      $ps.each(function () {
       totalHeight += $(this).outerHeight();
      });

      $up
       .css({
        // Set height to prevent instant jumpdown when max height is removed
        height: $up.height(),
        "max-height": 9999,
       })
       .animate({
        height: totalHeight,
       });

      // fade out read-more
      $p.fadeOut();

      // prevent jump-down
      return false;
     });
    });
   </script>

   <style>
    #ProfileController .male .item {
     padding: 0px !important;
     box-shadow: 0 0 0px 0px #e6e6e6;
     border-radius: 0px;
    }
    #ProfileController .female .item {
     margin-left: 0px;
     box-shadow: 0 0 0px 0px #e6e6e6;
     border-radius: 0px;
    }
   </style>
  </div>
 </div>
</div>
@endsection