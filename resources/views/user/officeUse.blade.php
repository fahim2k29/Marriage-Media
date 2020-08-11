@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_officeuse_display">
 <div class="container">
  <div id="slidemenu">
   <div class="span12" style="text-align: center; width: 429px;">
    <div id="tab" class="btn-group" data-toggle="buttons-radio">
     <a href="#online" class="btn active" name="radiotoggle" data-toggle="tab">Online</a>
     <a href="#area" class="btn" name="radiotoggle" data-toggle="tab">Near Me</a>
     <a href="#latest" class="btn" name="radiotoggle" data-toggle="tab">Latest</a>
     <a href="#contacts" class="btn" name="radiotoggle" data-toggle="tab">Favourites</a>
    </div>
    <div class="tab-content ajxdata" style="min-height: 500px; text-align: left; width: 100%;">
     <div class="tab-pane active" id="online">
      <div id="onlineData" class="onlineData">
       <div class="actualloadeddata">
        <div class="messageDiv">
         Loading please wait ....
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
     <div class="tab-pane" id="area">
      <div id="areaData" class="areaData">
       <div class="actualloadeddata">
        <div class="messageDiv">
         Loading please wait ....
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
     <div class="tab-pane" id="latest">
      <div id="latestsData" class="latestsData">
       <div class="messageDiv">
        Loading please wait ....
       </div>
       <br />

       <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
       </div>
      </div>
     </div>
     <div class="tab-pane" id="contacts">
      <div id="contactsData" class="contactsData">
       <div class="messageDiv">
        Loading please wait ....
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

  <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h2 class="headernotification">Notifications</h2>
      <div class="notificationheading span12" style="text-align: center; width: 100%;">
       <div class="filtericon">
        <select name="filter" class="filterdrop select2-hidden-accessible" id="filter" data-select2-id="filter" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
         <option value="showall" data-select2-id="2">
          Show All
         </option>
         <option value="login" data-select2-id="316">
          Favourite Online
         </option>
         <option value="view" data-select2-id="317">
          Visitors
         </option>
         <option value="gallery" data-select2-id="318">
          Gallery Requests
         </option>
         <option value="profile" data-select2-id="319">
          Admin
         </option>
        </select>
        <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="320" style="width: auto;">
         <span class="selection">
          <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-filter-container">
           <span
            class="select2-selection__rendered"
            id="select2-filter-container"
            role="textbox"
            aria-readonly="true"
            title="
                    Show All
                "
           >
            Show All
           </span>
           <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
          </span>
         </span>
         <span class="dropdown-wrapper" aria-hidden="true"></span>
        </span>
        <div class="settingsnotification">
         <a href="/profile/preferences"> <i class="smicon-new smicon-cog"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="modal-body">
      <div class="photoBoxHolder2">
       <div class="notifications customheight"></div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <div class="modal fade" id="menusettingsModal" tabindex="-1" role="dialog" aria-labelledby="menusettingsModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h2 class="headernotification">Account</h2>
     </div>
     <div class="modal-body">
      <div class="  ">
       <nav class="nav-sidebar nav-sidebar-2">
        <ul class="nav">
         <h6 class="dropdown-header sidemenuheader sm-heading-title" style="margin-top: 0px;">Profile</h6>
         <li class="">
          <a href="/profile/edit#edit"><i class="sm-line basic-settings sm-nav-dropdown-icons"></i> Edit My Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/profile/personalinfo"><i class="sm-line basic-book-pencil sm-nav-dropdown-icons"></i>Edit Personal Info <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="bottombodernone">
          <a href="/profile/preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>

         <!--        <li class="--><!-- bottombodernone"><a href="/profile/communication-preferences"><i class="sm-line basic-alarm sm-nav-dropdown-icons"></i>Notifications / Preferences <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
         <!--       -->

         <h6 class="dropdown-header sidemenuheader sm-heading-title">Photos</h6>
         <li class="">
          <a href="/profile/photos"><i class="sm-line basic-photo sm-nav-dropdown-icons"></i>Edit My Photos <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="bottombodernone">
          <a class="pointerCursor" href="/profile/accesslist/2">
           <i class="sm-line basic-lock-open sm-nav-dropdown-icons"></i>
           Photo Access

           <span class="badge progress-bar-danger badge-xs messageCounterUpdate_photo" style="margin-top: -4px; left: -1px; margin-left: 2px; top: 9px; visibility: hidden;"> 0 </span>

           <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
          </a>
         </li>

         <h6 class="dropdown-header sidemenuheader sm-heading-title">Account &amp; Security</h6>

         <li class="">
          <a href="/profile/username"><i class="sm-line basic-keyboard sm-nav-dropdown-icons"></i>Change Username <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/profile/email"><i class="sm-line basic-mail sm-nav-dropdown-icons"></i>Change Email <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/profile/password"><i class="sm-line sm-line basic-key sm-nav-dropdown-icons"></i>Change Password <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/membership/history"><i class="sm-line basic-calendar sm-nav-dropdown-icons"></i>Memberships History <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/profile/blocked"><i class="sm-line basic-ban sm-nav-dropdown-icons"></i>Blocked Users <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>
         <li class="">
          <a href="/profile/communication-preferences">
           <i class="sm-line basic-elaboration-mail-noaccess sm-nav-dropdown-icons"></i>Communication Preferences <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
          </a>
         </li>
         <!--        <li class="--><!--"><a href="/profile/devices"><i class=" sm-line  sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class=" smicon-new smicon-angle-right pull-right arrow-font-size"></span></a></li>-->
         <!--      -->

         <li class="">
          <a href="/profile/login-devices"><i class="sm-line sm-line basic-smartphone sm-nav-dropdown-icons"></i>Devices <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span></a>
         </li>

         <li class="deletesidemenu">
          <a href="/profile/delete" data-username="Abdul26"> <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span> </a>
         </li>
        </ul>
       </nav>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- Content Row -->
  <div class="">
   <div class="col-lg-12 col-md-12" id="officeuse_display">
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

        <div class="col-md-2 col-lg-2 bs-wizard-step active">
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
           <div class="subTitleround secondFont headingchange">Office Use</div>
          </div>
          <div class="panel-body">
           <form method="post" action="{{ route('officeUse_create') }}">
            @csrf

            <div class="officeusecontent secondFont">Note: Office use only. This information will not be visible to other users.</div>

            @if(@isset($officeUse))
            <input type="hidden" name="is_prev" id="is_prev" value="0" />

            <div role="form" class="form-horizontal">
             <div id="FirstName-group" class="form-group has-feedback form-control-group">
              <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
              <div class="controls">
               <input name="FirstName" id="FirstName" type="text" required="required" value="{{$officeUse->FirstName}}" class="form-control" />
              </div>
             </div>

             <div id="LastName-group" class="form-group has-feedback form-control-group">
              <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
              <div class="controls">
               <input name="LastName" id="LastName" type="text" required="required" value="{{$officeUse->LastName}}" class="form-control" />
              </div>
             </div>

             <div id="Address-group" class="form-group has-feedback form-control-group">
              <label for="Address" class="control-label"><span class="required">*</span> Address</label>
              <div class="controls">
               <input name="Address" id="Address" type="text" required="required" value="{{$officeUse->Address}}" class="form-control" />
              </div>
             </div>

             <div id="City-group" class="form-group has-feedback form-control-group">
              <label for="City" class="control-label"><span class="required">*</span> City</label>
              <div class="controls">
               <input name="City" id="City" type="text" required="required" value="{{$officeUse->City}}" class="form-control" />
              </div>
             </div>

             <div id="Country-group" class="form-group has-feedback form-control-group">
              <label for="Country" class="control-label"><span class="required">*</span>Country</label>
              <div class="controls">
               <select name="Country" id="Country" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                <option value="{{$users->Country}}">{{$users->Country}}</option>
               </select>
              </div>
             </div>

             <div id="PostCode-group" class="form-group has-feedback form-control-group">
              <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
              <div class="controls">
               <input name="PostCode" id="PostCode" type="number" required="required" value="{{$officeUse->PostCode}}" class="form-control" />
              </div>
             </div>

             <div id="ContactTel-group" class="form-group has-feedback form-control-group">
              <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
              <div class="controls">
               <input name="ContactTel" id="ContactTel" type="number" required="required" value="{{$officeUse->ContactTel}}" class="form-control" />
              </div>
             </div>

             <div id="MobileTel-group" class="form-group has-feedback form-control-group">
              <label for="MobileTel" class="control-label"> Mobile Tel</label>
              <div class="controls">
               <input name="MobileTel" id="MobileTel" type="number" value="{{$officeUse->MobileTel}}" class="form-control" />
              </div>
             </div>

             <div id="DOB-group" class="form-group has-feedback form-control-group">
              <label for="DOB" class="control-label"><span class="required">*</span> Date of Birth</label>
              <div class="controls">
               <div class="row">
                <div class="col-xs-3">
                 <select name="DOB_day" id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                 </select>
                </div>
                <div class="col-xs-5">
                 <select name="DOB_month" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                 </select>
                </div>
                <div class="col-xs-4">
                 <select name="DOB_year" id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                 </select>
                </div>
               </div>
              </div>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright">Next</button>
              </div>
             </div>
            </div>

            @else
            <input type="hidden" name="is_prev" id="is_prev" value="0" />

            <div role="form" class="form-horizontal">
             <div id="FirstName-group" class="form-group has-feedback form-control-group">
              <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
              <div class="controls">
               <input name="FirstName" id="FirstName" type="text" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="LastName-group" class="form-group has-feedback form-control-group">
              <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
              <div class="controls">
               <input name="LastName" id="LastName" type="text" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="Address-group" class="form-group has-feedback form-control-group">
              <label for="Address" class="control-label"><span class="required">*</span> Address</label>
              <div class="controls">
               <input name="Address" id="Address" type="text" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="City-group" class="form-group has-feedback form-control-group">
              <label for="City" class="control-label"><span class="required">*</span> City</label>
              <div class="controls">
               <input name="City" id="City" type="text" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="Country-group" class="form-group has-feedback form-control-group">
              <label for="Country" class="control-label"><span class="required">*</span> Country</label>
              <div class="controls">
               <select name="Country" id="Country" class="form-control-values select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                <option value="{{$users->Country}}">{{$users->Country}}</option>
               </select>
              </div>
             </div>

             <div id="PostCode-group" class="form-group has-feedback form-control-group">
              <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
              <div class="controls">
               <input name="PostCode" id="PostCode" type="number" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="ContactTel-group" class="form-group has-feedback form-control-group">
              <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
              <div class="controls">
               <input name="ContactTel" id="ContactTel" type="number" required="required" value="" class="form-control" />
              </div>
             </div>

             <div id="MobileTel-group" class="form-group has-feedback form-control-group">
              <label for="MobileTel" class="control-label"> Mobile Tel</label>
              <div class="controls">
               <input name="MobileTel" id="MobileTel" type="number" value="" class="form-control" />
              </div>
             </div>

             <div id="DOB-group" class="form-group has-feedback form-control-group">
              <label for="DOB" class="control-label"><span class="required">*</span> Date of Birth</label>
              <div class="controls">
               <div class="row">
                <div class="col-xs-3">
                 <select name="DOB_day" id="DOB-day" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                 </select>
                </div>
                <div class="col-xs-5">
                 <select name="DOB_month" id="DOB-month" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                 </select>
                </div>
                <div class="col-xs-4">
                 <select name="DOB_year" id="DOB-year" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                  <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                 </select>
                </div>
               </div>
              </div>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright">Next</button>
              </div>
             </div>
            </div>

            @endif

            <span class="pull-left required stepsRequired">* Required Field</span>
            <div class="textalignright abspositionBack">
             <button type="button" name="savePreviousDatas" id="savePreviousDatas" onClick="location.href='/signup/religion'" class="btn btn-primary btn-lg" value="Previous">Previous</button>
            </div>
           </form>
          </div>
         </div>
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
