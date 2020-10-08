
@extends('user.dashboard.app') @section('content')

<div class="container" style="margin-top: 250px;">
    <div class="row">
        <div class="col-md-12" id="showuserProfileSearch">
            <div class="userProfileView female parallax parallax-1" itemscope="" itemtype="http://schema.org/Person">
                <div class="alertpostion"></div>

                <div class="topbarProfileview">                  
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
                                        <b> {{\Carbon\Carbon::createFromDate($users->DOB_year)->diff(\Carbon\Carbon::now())->format('%y')}}</b>
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
                                            {{--
                                            <div class="rating">
                                                <span class="sm-line none star-full"></span><span class="sm-line none star-empty graybackGround"></span><span class="sm-line none star-empty graybackGround"></span>
                                                <span class="sm-line none star-empty graybackGround"></span>
                                                <span class="sm-line none star-empty graybackGround"></span>
                                            </div>
                                            --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         @if(isset($addPhotos))
                        <img src="{{asset($addPhotos->image) }}"  height="316px" width="316px" style="padding-top:85px"/>
                        @else
                        <img src="{{asset('frontend/assets/images/')}}/default2.jpg" height="316px" width="316px" style="padding-top:85px"/>
                        @endif

                        

                      
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
                                @if ($religions) {{ $religions->Sect }} @endif
                            </div>
                        </div>

                        <div class="col-lg-12 profile-info-row">
                            <div class="pull-left profileLabel">
                                Religiousness
                            </div>
                            <div class="pull-left profileContent">
                                @if ($religions) {{ $religions->Religiosness }} @endif
                            </div>
                        </div>

                        <div class="col-lg-12 profile-info-row">
                            <div class="pull-left profileLabel">
                                My Profession
                            </div>
                            <div class="pull-left profileContent">
                                <span itemprop="jobTitle">
                                    @if ($educations) {{ $educations->Employment }} @endif
                                </span>
                            </div>
                        </div>

                        <div class="col-lg-12 profile-info-row">
                            <div class="pull-left profileLabel">
                                Marital Status
                            </div>
                            <div class="pull-left profileContent">
                                @if ($personals) {{$personals->MaritalStatus }} @endif
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
                                        <span itemprop="addressCountry">
                                        {{ $users->Country }}
                                        </span>
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
                            
                                {{ $users->RegistrationReason }}
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-lg-12 contentshare"> 
                          <div class="hidebuttons"> 
                            <a class="btn icon-btn btn-primary btn-report togetherbutton" data-error="" data-toggle="tooltip" data-placement="top" title="" data-username="Jaequilin" data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$" data-original-title=""> 
                              <span><i class="fa fa-ban"></i><br /> 
                                <span class="messagecolor">Report</span> 
                            </a> 
                            <a class="btn icon-btn btn-primary togetherbutton btn-blockUser" data-username="Jaequilin" data-userkey="YWU1YTY3OTUyMzY3ZmEyYhwgLF5RmSK7JuLlhZxPGHNs579tvQI2h0tEulQQlypa$" data-toggle="confirmation" data-btn-ok-label="Block User" data-popout="true" data-isblocked="false"> 
                              <span><i class="fa fa-ban"></i></span><br /> 
                              <span class="messagecolor">Block</span> 
                            </a> 
                          </div> 
                        </div>
                    </div>

                    <div class="pull-right rightDetails">
                        <div class="userinfosectiontop">
                            <div class="sections userinfosection">
                                <div class="col-md-12 headings">
                                    A Little Bit About Me
                                </div>
                                <div class="col-md-12 detailpart">
                                    <span itemprop="description">
                                        @if ($aboutmes) {{ $aboutmes->Description }} @endif
                                    </span>
                                </div>
                                <p class="read-more">Read More</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="sections userinfosection">
                                <div class="col-md-12 headings">
                                    What I Am Looking For
                                </div>
                                <div class="col-md-12 detailpart">
                                    @if ($aboutmes) {{ $aboutmes->LookingFor }} @endif
                                </div>
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
                                            <span>
                                                @if ($personals) {{ $personals->Citizenship }} @endif
                                            </span>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Country of Origin</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Origin }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Willing to Relocate?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Relocation }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">I am Looking to Marry</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->MarryIn }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Income</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Income }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Marital Status</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->MaritalStatus }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Would I like to have Children?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->HaveChildren }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Do I have children?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Children }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Living Arrangements?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Living }} @endif
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
                                            @if ($personals) {{ $personals->Height }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Build</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Build }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Hair Colour</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Hair }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Colour of My Eyes</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->EyeColour }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Do I Smoke?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Smoke }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Do I Have Any Disabilities?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($personals) {{ $personals->Disabilities }} @endif
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
                                            @if ($educations) {{ $educations->EducationLevel }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Subject I Studied</div>

                                        <div class="col-md-6 font-size-class">
                                            <span itemprop="knowsAbout">
                                                @if ($educations) {{$educations->SubjectStudied }} @endif
                                            </span>
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
                                            <span itemprop="knowsLanguage">
                                                @if ($educations) {{ $educations->FirstLang }} @endif
                                            </span>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Second Language</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($educations) {{ $educations->SecondLang }} @endif
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
                                            @if ($educations) {{ $educations->Employment }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Job Title</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($educations) {{ $educations->JobTitle }} @endif
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
                                            @if ($religions) {{ $religions->Religiosness }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">My Sect</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Sect }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Hijab/Niqab</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Hijab }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Beard</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Beard }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Are You a Revert?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Convert }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Do You Keep Halal?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Halaal }} @endif
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6 font-size-class-header">Do You Perform Salaah?</div>

                                        <div class="col-md-6 font-size-class">
                                            @if ($religions) {{ $religions->Salaah }} @endif
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

             
                <div class="clearfix"></div>
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

                        $up.css({
                            // Set height to prevent instant jumpdown when max height is removed
                            height: $up.height(),
                            "max-height": 9999,
                        }).animate({
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
