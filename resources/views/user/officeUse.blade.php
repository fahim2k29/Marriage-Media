@extends('user.app')
@section('content')
    


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
                            <a href="/profile/delete" data-username="Abdul26">
                                <i class="sm-line basic-trashcan-remove sm-nav-dropdown-icons"></i>Delete Profile <span class="smicon-new smicon-angle-right pull-right arrow-font-size"></span>
                            </a>
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
                        <select name="Country" id="Country"  data-select2-id="Country" tabindex="-1" aria-hidden="true" >
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
                                <select name="DOB_day" id="DOB-day"  data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                   <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                                   
                                </select>
                                
                            </div>
                            <div class="col-xs-5">
                                <select
                                    name="DOB_month"
                                    id="DOB-month"
                                    data-select2-id="DOB-month"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    data-error="Please fill out this field."
                                >
                                    <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                                   
                                </select>
                                
                            </div>
                            <div class="col-xs-4">
                                <select
                                    name="DOB_year"
                                    id="DOB-year"
                                    data-select2-id="DOB-year"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    data-error="Please fill out this field."
                                >
                                    <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                                   
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-0 col-sm-12 textalignright">
                        <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-lg textalignright">Next</button>
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
                             
                            {{-- <optgroup label="Favourites">
                                <option value="" selected=""></option>
                                <option value="840">United States</option>
                                <option value="586">Pakistan</option>
                                <option value="356">India</option>
                                <option value="050">Bangladesh</option>
                                <option value="504">Morocco</option>
                                <option value="784">United Arab Emirates</option>
                                <option value="682">Saudi Arabia</option>
                            </optgroup>
                            <optgroup label="All Countries">
                                <option value="004">Afghanistan</option>
                                <option value="008">Albania</option>
                                <option value="012">Algeria</option>
                                <option value="016">American Samoa</option>
                                <option value="020">Andorra</option>
                                <option value="024">Angola</option>
                                <option value="660">Anguilla</option>
                                <option value="028">Antigua and Barbuda</option>
                                <option value="032">Argentina</option>
                                <option value="051">Armenia</option>
                                <option value="533">Aruba</option>
                                <option value="036">Australia</option>
                                <option value="040">Austria</option>
                                <option value="031">Azerbaijan</option>
                                <option value="048">Bahrain</option>
                                <option value="050">Bangladesh</option>
                                <option value="052">Barbados</option>
                                <option value="112">Belarus</option>
                                <option value="056">Belgium</option>
                                <option value="084">Belize</option>
                                <option value="204">Benin</option>
                                <option value="060">Bermuda</option>
                                <option value="064">Bhutan</option>
                                <option value="068">Bolivia</option>
                                <option value="070">Bosnia and Herzegovina</option>
                                <option value="072">Botswana</option>
                                <option value="076">Brazil</option>
                                <option value="086">British Indian Ocean Territory</option>
                                <option value="092">British Virgin Islands</option>
                                <option value="096">Brunei Darussalam</option>
                                <option value="100">Bulgaria</option>
                                <option value="854">Burkina Faso</option>
                                <option value="104">Burma</option>
                                <option value="108">Burundi</option>
                                <option value="116">Cambodia</option>
                                <option value="120">Cameroon</option>
                                <option value="124">Canada</option>
                                <option value="132">Cape Verde</option>
                                <option value="136">Cayman Islands</option>
                                <option value="140">Central African Republic</option>
                                <option value="148">Chad</option>
                                <option value="152">Chile</option>
                                <option value="156">China</option>
                                <option value="162">Christmas Island</option>
                                <option value="166">Cocos (Keeling) Islands</option>
                                <option value="170">Colombia</option>
                                <option value="174">Comoros</option>
                                <option value="180">Congo, Democratic Republic of the</option>
                                <option value="178">Congo, Republic of the</option>
                                <option value="184">Cook Islands</option>
                                <option value="188">Costa Rica</option>
                                <option value="384">Cote d\'Ivoire</option>
                                <option value="191">Croatia</option>
                                <option value="192">Cuba</option>
                                <option value="196">Cyprus</option>
                                <option value="203">Czech Republic</option>
                                <option value="208">Denmark</option>
                                <option value="262">Djibouti</option>
                                <option value="212">Dominica</option>
                                <option value="214">Dominican Republic</option>
                                <option value="626">East Timor</option>
                                <option value="218">Ecuador</option>
                                <option value="818">Egypt</option>
                                <option value="222">El Salvador</option>
                                <option value="226">Equatorial Guinea</option>
                                <option value="232">Eritrea</option>
                                <option value="233">Estonia</option>
                                <option value="231">Ethiopia</option>
                                <option value="238">Falkland Islands (Islas Malvinas)</option>
                                <option value="234">Faroe Islands</option>
                                <option value="242">Fiji</option>
                                <option value="246">Finland</option>
                                <option value="250">France</option>
                                <option value="254">French Guiana</option>
                                <option value="258">French Polynesia</option>
                                <option value="260">French Southern and Antarctic Lands</option>
                                <option value="266">Gabon</option>
                                <option value="268">Georgia</option>
                                <option value="276">Germany</option>
                                <option value="288">Ghana</option>
                                <option value="292">Gibraltar</option>
                                <option value="300">Greece</option>
                                <option value="304">Greenland</option>
                                <option value="308">Grenada</option>
                                <option value="312">Guadeloupe</option>
                                <option value="316">Guam</option>
                                <option value="320">Guatemala</option>
                                <option value="0--">Man, Isle of</option>
                                <option value="324">Guinea</option>
                                <option value="624">Guinea-Bissau</option>
                                <option value="328">Guyana</option>
                                <option value="332">Haiti</option>
                                <option value="334">Heard Island and McDonald Islands</option>
                                <option value="336">Holy See (Vatican City)</option>
                                <option value="340">Honduras</option>
                                <option value="344">Hong Kong (SAR)</option>
                                <option value="348">Hungary</option>
                                <option value="352">Iceland</option>
                                <option value="356">India</option>
                                <option value="360">Indonesia</option>
                                <option value="364">Iran</option>
                                <option value="368">Iraq</option>
                                <option value="372">Ireland</option>
                                <option value="376">Israel</option>
                                <option value="380">Italy</option>
                                <option value="388">Jamaica</option>
                                <option value="392">Japan</option>
                                <option value="400">Jordan</option>
                                <option value="398">Kazakhstan</option>
                                <option value="404">Kenya</option>
                                <option value="296">Kiribati</option>
                                <option value="408">Korea, North</option>
                                <option value="410">Korea, South</option>
                                <option value="414">Kuwait</option>
                                <option value="417">Kyrgyzstan</option>
                                <option value="418">Laos</option>
                                <option value="428">Latvia</option>
                                <option value="422">Lebanon</option>
                                <option value="426">Lesotho</option>
                                <option value="430">Liberia</option>
                                <option value="434">Libya</option>
                                <option value="438">Liechtenstein</option>
                                <option value="440">Lithuania</option>
                                <option value="442">Luxembourg</option>
                                <option value="446">Macao</option>
                                <option value="807">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="450">Madagascar</option>
                                <option value="454">Malawi</option>
                                <option value="458">Malaysia</option>
                                <option value="462">Maldives</option>
                                <option value="466">Mali</option>
                                <option value="470">Malta</option>
                                <option value="584">Marshall Islands</option>
                                <option value="474">Martinique</option>
                                <option value="478">Mauritania</option>
                                <option value="480">Mauritius</option>
                                <option value="175">Mayotte</option>
                                <option value="484">Mexico</option>
                                <option value="583">Micronesia, Federated States of</option>
                                <option value="498">Moldova</option>
                                <option value="492">Monaco</option>
                                <option value="496">Mongolia</option>
                                <option value="499">Montenegro</option>
                                <option value="500">Montserrat</option>
                                <option value="504">Morocco</option>
                                <option value="508">Mozambique</option>
                                <option value="516">Namibia</option>
                                <option value="520">Nauru</option>
                                <option value="524">Nepal</option>
                                <option value="528">Netherlands</option>
                                <option value="530">Netherlands Antilles</option>
                                <option value="540">New Caledonia</option>
                                <option value="554">New Zealand</option>
                                <option value="558">Nicaragua</option>
                                <option value="562">Niger</option>
                                <option value="566">Nigeria</option>
                                <option value="570">Niue</option>
                                <option value="574">Norfolk Island</option>
                                <option value="580">Northern Mariana Islands</option>
                                <option value="578">Norway</option>
                                <option value="512">Oman</option>
                                <option value="586">Pakistan</option>
                                <option value="585">Palau</option>
                                <option value="275">Palestinian Territory</option>
                                <option value="591">Panama</option>
                                <option value="598">Papua New Guinea</option>
                                <option value="600">Paraguay</option>
                                <option value="604">Peru</option>
                                <option value="608">Philippines</option>
                                <option value="612">Pitcairn Islands</option>
                                <option value="616">Poland</option>
                                <option value="620">Portugal</option>
                                <option value="630">Puerto Rico</option>
                                <option value="634">Qatar</option>
                                <option value="638">Réunion</option>
                                <option value="642">Romania</option>
                                <option value="643">Russia</option>
                                <option value="646">Rwanda</option>
                                <option value="654">Saint Helena</option>
                                <option value="659">Saint Kitts and Nevis</option>
                                <option value="662">Saint Lucia</option>
                                <option value="666">Saint Pierre and Miquelon</option>
                                <option value="670">Saint Vincent and the Grenadines</option>
                                <option value="882">Samoa</option>
                                <option value="674">San Marino</option>
                                <option value="678">São Tomé and Príncipe</option>
                                <option value="682">Saudi Arabia</option>
                                <option value="686">Senegal</option>
                                <option value="688">Serbia</option>
                                <option value="690">Seychelles</option>
                                <option value="694">Sierra Leone</option>
                                <option value="702">Singapore</option>
                                <option value="703">Slovakia</option>
                                <option value="705">Slovenia</option>
                                <option value="090">Solomon Islands</option>
                                <option value="706">Somalia</option>
                                <option value="710">South Africa</option>
                                <option value="239">South Georgia and the South Sandwich Islands</option>
                                <option value="724">Spain</option>
                                <option value="144">Sri Lanka</option>
                                <option value="736">Sudan</option>
                                <option value="740">Suriname</option>
                                <option value="744">Svalbard</option>
                                <option value="748">Swaziland</option>
                                <option value="752">Sweden</option>
                                <option value="756">Switzerland</option>
                                <option value="760">Syria</option>
                                <option value="158">Taiwan</option>
                                <option value="762">Tajikistan</option>
                                <option value="834">Tanzania</option>
                                <option value="764">Thailand</option>
                                <option value="044">The Bahamas</option>
                                <option value="270">The Gambia</option>
                                <option value="768">Togo</option>
                                <option value="772">Tokelau</option>
                                <option value="776">Tonga</option>
                                <option value="780">Trinidad and Tobago</option>
                                <option value="788">Tunisia</option>
                                <option value="792">Turkey</option>
                                <option value="795">Turkmenistan</option>
                                <option value="796">Turks and Caicos Islands</option>
                                <option value="798">Tuvalu</option>
                                <option value="800">Uganda</option>
                                <option value="804">Ukraine</option>
                                <option value="784">United Arab Emirates</option>
                                <option value="826" selected="" data-select2-id="460">United Kingdom</option>
                                <option value="840">United States</option>
                                <option value="581">United States Minor Outlying Islands</option>
                                <option value="858">Uruguay</option>
                                <option value="860">Uzbekistan</option>
                                <option value="548">Vanuatu</option>
                                <option value="862">Venezuela</option>
                                <option value="704">Vietnam</option>
                                <option value="850">Virgin Islands</option>
                                <option value="876">Wallis and Futuna</option>
                                <option value="732">Western Sahara</option>
                                <option value="887">Yemen</option>
                                <option value="894">Zambia</option>
                                <option value="716">Zimbabwe</option>
                            </optgroup> --}}
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
                                <select name="DOB_day" id="DOB-day"  data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                   <option value="{{$users->DOB_day}}">{{$users->DOB_day}}</option>
                                   

                                   
                                </select>
                                
                            </div>
                            <div class="col-xs-5">
                                <select
                                    name="DOB_month"
                                    id="DOB-month"
                                    data-select2-id="DOB-month"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    data-error="Please fill out this field."
                                >
                                    <option value="{{$users->DOB_month}}">{{$users->DOB_month}}</option>
                                    

                                   
                                </select>
                                
                            </div>
                            <div class="col-xs-4">
                                <select
                                    name="DOB_year"
                                    id="DOB-year"
                                    data-select2-id="DOB-year"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    data-error="Please fill out this field."
                                >
                                    <option value="{{$users->DOB_year}}">{{$users->DOB_year}}</option>
                                    
                                    
                                   
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>




                <div class="form-group">
                    <div class="col-sm-offset-0 col-sm-12 textalignright">
                        <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-lg textalignright">Next</button>
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
