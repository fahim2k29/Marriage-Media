@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_aboutYou_display">
 <div class="container">


  <!-- Content Row -->
  <div class="">
   <div class="col-lg-12 col-md-12" id="aboutYou_display">
    <div class="row">
     <div class="topbar-bg containerTopmargin containerUsermargin">
      <div class="topSteps">
       <div class="row bs-wizard" style="border-bottom: 0;">
        <div class="col-md-1 col-lg-2 bs-wizard-step complete active">
         <div class="text-center bs-wizard-stepnum">Step 1</div>
         <div class="progress"><div class="progress-bar"></div></div>
         <a href="#" class="bs-wizard-dot"></a>
         <div class="bs-wizard-info text-center">About Me</div>
        </div>
        <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
         <div class="text-center bs-wizard-stepnum">Step 2</div>
         <div class="progress"><div class="progress-bar"></div></div>
         <a href="#" class="bs-wizard-dot"></a>
         <div class="bs-wizard-info text-center">Education and Work</div>
        </div>
        <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
         <div class="text-center bs-wizard-stepnum">Step 3</div>
         <div class="progress"><div class="progress-bar"></div></div>
         <a href="#" class="bs-wizard-dot"></a>
         <div class="bs-wizard-info text-center">Personal</div>
        </div>
        <div class="col-md-1 col-lg-2 bs-wizard-step disabled">
         <div class="text-center bs-wizard-stepnum">Step 4</div>
         <div class="progress"><div class="progress-bar"></div></div>
         <a href="#" class="bs-wizard-dot"></a>
         <div class="bs-wizard-info text-center">Religion</div>
        </div>

        <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
         <!-- active -->
         <div class="text-center bs-wizard-stepnum">Step 5</div>
         <div class="progress"><div class="progress-bar"></div></div>
         <a href="#" class="bs-wizard-dot"></a>
         <div class="bs-wizard-info text-center">Office Use</div>
        </div>
        <div class="col-md-2 col-lg-2 bs-wizard-step disabled">
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
           <div class="subTitleround secondFont headingchange">About You</div>
          </div>
          <div class="panel-body">
           <form method="POST" action="{{ route('aboutme_create' ) }}">
            @csrf @if(isset($aboutme))
            <div role="form" class="form-horizontal">
             <div id="Headline-group" class="form-group has-feedback form-control-group">
              <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
              <div class="controls">
               <input name="Headline" id="Headline" type="text" required="required" value="{{ $aboutme->Headline }}" class="form-control" />
              </div>
              <span
               id="Headline-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Create a short strap-line for your profile."
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div id="Description-group" class="form-group has-feedback form-control-group">
              <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
              <div class="controls">
               <!-- <input name="Description" id="Headline" type="text" required="required" value="{{ $aboutme->Description }}"  class="form-control" /> -->

               <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;">
                {{ $aboutme->Description }}

               </textarea>
              </div>
              <span
               id="Description-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Please describe yourself. You can include information about your hobbies and interests; family; occupation etc. "
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div id="LookingFor-group" class="form-group has-feedback form-control-group">
              <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
              <div class="controls">
               <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;">
                {{ $aboutme->LookingFor }}

               </textarea>
              </div>
              <span
               id="LookingFor-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Please describe the type of person you are looking for. "
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Next</button>
              </div>
             </div>
            </div>
            <span class="pull-left required stepsRequired">* Required Field</span>

            @else

            <div role="form" class="form-horizontal">
             <div id="Headline-group" class="form-group has-feedback form-control-group">
              <label for="Headline" class="control-label"><span class="required">*</span> Headline</label>
              <div class="controls">
               <input name="Headline" id="Headline" type="text" required="required" class="form-control" />
              </div>
              <span
               id="Headline-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Create a short strap-line for your profile."
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div id="Description-group" class="form-group has-feedback form-control-group">
              <label for="Description" class="control-label"><span class="required">*</span> A Little Bit About Me</label>
              <div class="controls">
               <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
              </div>
              <span
               id="Description-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Please describe yourself. You can include information about your hobbies and interests; family; occupation etc. "
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div id="LookingFor-group" class="form-group has-feedback form-control-group">
              <label for="LookingFor" class="control-label"><span class="required">*</span> What I Am Looking For</label>
              <div class="controls">
               <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
              </div>
              <span
               id="LookingFor-span-success"
               class="smicon-new form-control-feedback male span-info-label"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Please describe the type of person you are looking for. "
              ><i class="fa fa-info-circle" aria-hidden="true"></i></span>
              <span class="help-block with-errors" aria-hidden="true"></span>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-submit-register registerUserbtn">Next</button>
              </div>
             </div>
            </div>
            <span class="pull-left required stepsRequired">* Required Field</span>

            @endif

            <!--
            <div style="margin-top:-50px; position: absolute;">
                                    </div>
                                    -->
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

    <!-- Google Code for Signup Conversion Page -->
    <!--<script type="text/javascript">-->
    <!--    /* <![CDATA[ */-->
    <!--    var google_conversion_id = 1071266576;-->
    <!--    var google_conversion_language = "en_GB";-->
    <!--    var google_conversion_format = "1";-->
    <!--    var google_conversion_color = "ffffff";-->
    <!--    var google_conversion_label = "IRaXCLKOPxCQ9uj-Aw";-->
    <!--    var google_conversion_value = 1.00;-->
    <!--    var google_conversion_currency = "GBP";-->
    <!--    var google_remarketing_only = false;-->
    <!--    /* ]]> */-->
    <!--</script>-->
    <!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">-->
    <!--</script>-->
    <!--<noscript>-->
    <!--    <div style="display:inline;">-->
    <!--        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071266576/?value=1.00&amp;currency_code=GBP&amp;label=IRaXCLKOPxCQ9uj-Aw&amp;guid=ON&amp;script=0"/>-->
    <!--    </div>-->
    <!--</noscript>-->
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
