@extends('user.app') @section('content')
<div class="wide_fullbgimage userLogin_Display wide_login_bg register_religion_display">
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
         <option value="login" data-select2-id="17">
          Favourite Online
         </option>
         <option value="view" data-select2-id="18">
          Visitors
         </option>
         <option value="gallery" data-select2-id="19">
          Gallery Requests
         </option>
         <option value="profile" data-select2-id="20">
          Admin
         </option>
        </select>
        <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="21" style="width: auto;">
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
   <div class="col-lg-12 col-md-12" id="religion_display">
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

        <div class="col-md-1 col-lg-2 bs-wizard-step active">
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
           <div class="subTitleround secondFont headingchange">Religion</div>
          </div>
          <div class="panel-body">
           <!--                                --data-toggle="validator"---->

           <form method="post" action="{{ route('religion_create') }}">
            @csrf @if(@isset($religion))

            <input type="hidden" name="is_prev" id="is_prev" value="0" />
            <div role="form" class="form-horizontal">
             <div id="Religiosness-group" class="form-group has-feedback form-control-group">
              <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
              <div class="controls">
               <select name="Religiosness" id="Religiosness" required="required" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Religiosness}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Religiosness_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Sect-group" class="form-group has-feedback form-control-group">
              <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
              <div class="controls">
               <select name="Sect" id="Sect" required="required" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Sect}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Sect_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Hijab-group" class="form-group has-feedback form-control-group">
              <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
              <div class="controls">
               <select name="Hijab" id="Hijab" required="required" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Hijab}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Hijab_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Beard-group" class="form-group has-feedback form-control-group">
              <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
              <div class="controls">
               <select name="Beard" id="Beard" required="required" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Beard}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Beard_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Convert-group" class="form-group has-feedback form-control-group">
              <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
              <div class="controls">
               <select name="Convert" id="Convert" required="required" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Convert}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Convert_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Halaal-group" class="form-group has-feedback form-control-group">
              <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
              <div class="controls">
               <select name="Halaal" id="Halaal" required="required" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Halaal}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Halaal_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Salaah-group" class="form-group has-feedback form-control-group">
              <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
              <div class="controls">
               <select name="Salaah" id="Salaah" required="required" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>{{$religion->Salaah}}</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Salaah_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
              </div>
             </div>
            </div>
            @else
            <input type="hidden" name="is_prev" id="is_prev" value="0" />
            <div role="form" class="form-horizontal">
             <div id="Religiosness-group" class="form-group has-feedback form-control-group">
              <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
              <div class="controls">
               <select name="Religiosness" id="Religiosness" required="required" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Religiosness_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Sect-group" class="form-group has-feedback form-control-group">
              <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
              <div class="controls">
               <select name="Sect" id="Sect" required="required" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Sect_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Hijab-group" class="form-group has-feedback form-control-group">
              <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
              <div class="controls">
               <select name="Hijab" id="Hijab" required="required" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Hijab_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Beard-group" class="form-group has-feedback form-control-group">
              <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
              <div class="controls">
               <select name="Beard" id="Beard" required="required" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Beard_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Convert-group" class="form-group has-feedback form-control-group">
              <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
              <div class="controls">
               <select name="Convert" id="Convert" required="required" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Convert_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Halaal-group" class="form-group has-feedback form-control-group">
              <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
              <div class="controls">
               <select name="Halaal" id="Halaal" required="required" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Halaal_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div id="Salaah-group" class="form-group has-feedback form-control-group">
              <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
              <div class="controls">
               <select name="Salaah" id="Salaah" required="required" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option>Select Option</option>
                @foreach ($religiondatas as $religiondata)
                <option>{{$religiondata->Salaah_data}}</option>
                @endforeach
               </select>
              </div>
             </div>

             <div class="form-group">
              <div class="col-sm-offset-0 col-sm-12 textalignright">
               <button name="Submit" id="Submit" type="submit" class="btn btn-primary btn-lg textalignright disabled">Next</button>
              </div>
             </div>
            </div>
            @endif

            <span class="pull-left required stepsRequired">* Required Field</span>
            <div class="textalignright abspositionBack">
             <button type="button" name="savePreviousDatas" onClick="location.href='/signup/personal'" id="savePreviousDatas" class="btn btn-primary btn-lg" value="Previous">Previous</button>
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
