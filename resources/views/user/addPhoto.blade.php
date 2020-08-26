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
                                                                            <img src="/frontend/assets/images/guideline_images/primarypic.jpg" class="img-responsive" />
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="col-sm-7 secondFont">
                                                                    <h4>Guidelines</h4>

                                                                    <ul class="userguideline-primary">
                                                                        <li style="width: 100%;">Passport Style</li>
                                                                        <li style="width: 100%;">Clear face image</li>

                                                                        <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No sun glasses</span></li>
                                                                        <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No snapchat filters</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="uploadRow_moreimages">
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
                                                    </div>
                                                </div>

                                                <div class="pull-left prevButton">
                                                    <a href="/signup/officeUse" class="btn btn-primary">Previous</a>
                                                </div>

                                                <div class="pull-right nextButton">
                                                    <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Submit</button>
                                                </div>
                                            </form>

                                            <div class="clearfix"></div>

                                            <div class="modal fade modalPictureEdit" role="dialog" id="gridSystemModal" aria-labelledby="gridSystemModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="mainEditor">
                                                                <div class="pull-left pictureEditArea">
                                                                    <div class="pictureCanvas img-container" data-loadimage="">
                                                                        <img src="" />
                                                                    </div>
                                                                    <div class="clearfix buttonsArea docs-actions">
                                                                        <span class="pull-left smicon-new smicon-info informationIcon pointerCursor"></span>

                                                                        <div class="col-xs-2 btnsetZoom">
                                                                            <div class="btn-group">
                                                                                <div class="topbutton">
                                                                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                                                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                            <span class="glyphicon glyphicon-plus"> </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="bottombutton">
                                                                                    <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                            <span class="glyphicon glyphicon-minus"> </span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-6 btnsetRotate">
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn btn-primary btn-rotateLeft" title="Rotate Left">
                                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                        <span class="smicon-new smicon-rotate-left"></span>
                                                                                    </span>
                                                                                </button>
                                                                                <button type="button" class="btn btn-primary btn-rotateRight" title="Rotate Right">
                                                                                    <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                        <span class="smicon-new smicon-rotate-right"></span>
                                                                                    </span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 btnsetArrows">
                                                                            <!-- arrow controls -->
                                                                            <div class="btn-group-arrow btn-group">
                                                                                <div class="arrowButton">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4"></div>
                                                                                        <div class="col-sm-4">
                                                                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                                                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                                                                                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-sm-4"></div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                                                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                                    <span class="glyphicon glyphicon-arrow-left"> </span>
                                                                                                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-sm-4"></div>
                                                                                        <div class="col-sm-4">
                                                                                            <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                                                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                                    <span class="glyphicon glyphicon-arrow-right"></span>
                                                                                                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4"></div>
                                                                                        <div class="col-sm-4">
                                                                                            <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                                                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="" style="display: inline;">
                                                                                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                                                                                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-sm-4"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end arrow controls -->
                                                                        </div>

                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="pull-right picdescriptionArea">
                                                                    <div class="pictureDescriptionAreainner">
                                                                        <div class="infoIcons">
                                                                            <span class="pointerCursor pull-right" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true" style="margin-top: -8px; font-size: 20px; padding-top: -10px; margin-left: -9px; position: absolute;">×</span>
                                                                            </span>
                                                                        </div>

                                                                        <div class="groupbutton">
                                                                            <div class="btn-group">
                                                                                <!--  <button type="button" data-typename="primary" class="col-xs-12 btn btn-primary">Primary Photo</button> -->
                                                                                <span data-typename="primary" class="col-xs-12" style="font-size: 25px;">Primary Photo</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="userGuideContent secondFont">
                                                                            <span class="col-xs-12" style="font-size: 15px; text-align: center; margin-bottom: 10px;">This will be your main profile picture</span>
                                                                            <h4>Guidelines</h4>
                                                                            <ul class="userguideline-primary" style="display: block;">
                                                                                <li>Passport Style</li>
                                                                                <li>Clear face image</li>
                                                                                <li>Cropped face image</li>
                                                                            </ul>

                                                                            <ul class="userguideline-public" style="display: none;">
                                                                                <li>Any pictures of yourself</li>
                                                                                <li>Yourself with family</li>
                                                                                <li>Yourself with friends</li>
                                                                            </ul>
                                                                            <div class="forMaindashboard" style="display: none;">
                                                                                Your primary picture must be a clear, closely cropped face image of yourself, similar to your passport photo.
                                                                            </div>
                                                                        </div>

                                                                        <div class="descriptionBox">
                                                                            <textarea id="txtPicDescription" maxlength="100" style="resize: none; overflow-x: hidden; overflow-wrap: break-word;" placeholder="Add description here"></textarea>

                                                                            <div id="textarea_feedback">100 characters remaining</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="buttonsAreaAction">
                                                                        <div class="pull-left buttonmidWidth">
                                                                            <button type="button" class="btn btn-danger btn-delete-main btn-Delete" data-islocation="true">Delete</button>
                                                                        </div>
                                                                        <div class="pull-left buttonrightWidth">
                                                                            <button type="button" class="btn btn-primary btn-cancel" onclick="location.reload();">Cancel</button>
                                                                        </div>

                                                                        <div class="pull-left buttonleftWidth">
                                                                            <button type="button" class="btn btn-success btn-savePicture">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>

                                                            <div class="guidelines">
                                                                <div class="picdescriptionArea_1">
                                                                    <div class="guideline">
                                                                        <div class="hideClose pull-right">
                                                                            <span aria-hidden="true" style="margin-top: -9px; font-size: 35px; padding-top: -10px; margin-left: -29px; position: absolute;">×</span>
                                                                        </div>
                                                                        <div class="primaryPicGuide">
                                                                            <div class="col-sm-12">
                                                                                <h4 style="color: #007ea5; text-align: center; margin-top: -22px; width: 80%; margin-left: 32px;">Primary Picture Guidelines</h4>
                                                                                <ul>
                                                                                    <li style="width: 271px; list-style: none; margin-top: 15px;">
                                                                                        <img src="/images/guideline-images/primarypic.jpg" class="img-responsive" style="margin-left: 70px; height: 172px;" />
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <div class="col-sm-12 secondFont" style="padding-left: 35px; padding-right: 0px;">
                                                                                <div class="userGuideContent secondFont" style="height: 90px; margin-top: 13px;">
                                                                                    <div class="col-sm-6">
                                                                                        <ul class="clearfix userguideline-primary_2" style="display: block;">
                                                                                            <li style="width: 100%; padding: 5px 3px;">Passport Style</li>
                                                                                            <li style="width: 100%; padding: 5px 3px;">Clear face image</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-6" style="padding: 0px;">
                                                                                        <ul class="clearfix userguideline-primary_2" style="display: block;">
                                                                                            <li class="span-icon smicon-new smicon-remove newlistyle" style="padding-top: 11px;"><span class="secondFont">No sun glasses</span></li>
                                                                                            <li class="span-icon smicon-new smicon-remove newlistyle"><span class="secondFont">No snapchat filters</span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>

                                                                        <div class="clearfix"></div>
                                                                        <div class="clearfix checkboxanddismiss">
                                                                            <div class=" " style="text-align: center; padding-left: 10px;">
                                                                                <a class="dismissContent hideClose">
                                                                                    Dismiss
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
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
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
@endsection
