@extends('user.app') @section('content')
<div class="wide_fullbgimage userLogin_Display wide_login_bg register_addPhoto_display">
    <div class="container">
        <!-- Content Row -->
        <div class="">
            <div class="col-lg-12 col-md-12" id="addPhoto_display">
                <div class="row">
                    <div class="topbar-bg containerTopmargin containerUsermargin">
                        <div class="topSteps">
                            <div class="row bs-wizard" style="border-bottom: 0;">
                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 1</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">About Me</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Education and Work</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Personal</div>
                                </div>

                                <div class="col-md-1 col-lg-2 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Religion</div>
                                </div>

                                <div class="col-md-2 col-lg-2 bs-wizard-step complete">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 5</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="/register/officeuse" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center"><a href="/register/officeuse">Office Use</a></div>
                                </div>
                                <div class="col-md-2 col-lg-2 bs-wizard-step active">
                                    <!-- active -->
                                    <div class="text-center bs-wizard-stepnum">Step 6</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Add Photo</div>
                                </div>
                            </div>
                        </div>

                        <div class="setting-bgcolor roundcornerPanel">
                            <div class="userForms">
                                <div id="aboutyoubox" class="stepsbox">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="subTitleround secondFont headingchange">Add Photo - This will be your main profile picture</div>
                                        </div>
                                        <div class="panel-body">
                                            <form method="post" action="{{ route('addPhoto_create') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="photouploadRegistration">
                                                    <div class="uploadRow">
                                                        <div class="pull-left uploadArea">
                                                            <div name="addPhoto" data-imagetype="primary">
                                                                <div class="dz-message">
                                                                    <label for="addPhoto" class="control-label"> Select your Profile Photo</label>
                                                                    <div class="controls">
                                                                        <input name="image" id="addPhoto" type="file" required="required" value="b" class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pull-left picGuidelineArea">
                                                            <div class="primaryPicGuide">
                                                                <div class="col-sm-5">
                                                                    <ul>
                                                                        <li>
                                                                              <div class="col-sm-3">
        
                                                                            {{-- <img src="/frontend/assets/images/guideline_images/primarypic.jpg" class="img-responsive" /> --}}
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="col-sm-7 secondFont">
                                                                    <h4>Guidelines</h4>

                                                                    <ul class="userguideline-primary">
                                                                        <li style="width: 100%;">Passport Style</li>
                                                                        <li style="width: 100%;">Clear face image</li>

                                                                        <li ><span class="secondFont">No sun glasses</span></li>
                                                                        <li><span class="secondFont">No snapchat filters</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>

                                                    {{-- <div class="uploadRow_moreimages">
                                                        <div class="uploadGuiderow1"></div>
                                                        <div class="uploadGuiderow2">
                                                            <div class="notAllowedGuide">
                                                                <div class="secondFont headings">Not Allowed</div>

                                                                <ul class="notAlloweduser">
                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/blur.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>

                                                                            <!-- <img src="/resources/images/guideline-images/user_notallowed_1.png" class="img-responsive" />  -->
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Blurry
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/bodyshot.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Bodyshot
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/cartoon.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Cartoon
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/group.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Group
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/offencive.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Offensive
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="imgUser">
                                                                            <div class="div-guide-line-item-image">
                                                                                <img src="/frontend/assets/images/guideline_images/scenic.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
                                                                                <span class="span-tick bad smicon-new smicon-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="secondFont divHeading">
                                                                            Scenic
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div> --}}
                                                </div>

                                                <div class="pull-left prevButton">
                                                    <a href="/signup/officeUse" class="btn btn-primary">Previous</a>
                                                </div>

                                                <div class="pull-right nextButton">
                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Submit</button>
                                                </div>
                                            </form>

                                            <div class="clearfix"></div>

                                            
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function () {
                        dataLayer.push({
                            event: "SignupWeb",
                        });
                    });
                </script>

                @push('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#current')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>


  




@endsection