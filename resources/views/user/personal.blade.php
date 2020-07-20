@extends('user.app') @section('content')

<div class="wide_fullbgimage userLogin_Display wide_login_bg register_personal_display">
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
                                    <option value="login" data-select2-id="386">
                                        Favourite Online
                                    </option>
                                    <option value="view" data-select2-id="387">
                                        Visitors
                                    </option>
                                    <option value="gallery" data-select2-id="388">
                                        Gallery Requests
                                    </option>
                                    <option value="profile" data-select2-id="389">
                                        Admin
                                    </option>
                                </select>
                                <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="390" style="width: auto;">
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
            <div class="col-lg-12 col-md-12" id="personal_display">
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
                                            <div class="subTitleround secondFont headingchange">Personal Information</div>
                                        </div>
                                        <div class="panel-body">
                                        <form method="post" action="{{ route('personal_create') }}">
                                             @csrf
                                                <input type="hidden" name="is_prev" id="is_prev" value="0" />

                                                <div role="form" class="form-horizontal">
                                                    <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                                                        <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Citizenship"
                                                                id="Citizenship"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Citizenship"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                                                <option value="5" data-select2-id="391">British</option>
                                                                <option value="4" data-select2-id="392">American</option>
                                                                <option value="3" data-select2-id="393">Australian</option>
                                                                <option value="6" data-select2-id="394">Canadian</option>
                                                                <option value="170" data-select2-id="395">European Union (EU)</option>
                                                                <option value="173" data-select2-id="396">Pakistani</option>
                                                                <option value="7" data-select2-id="397">Indian</option>
                                                                <option value="8" data-select2-id="398">Other</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Origin-group" class="form-group has-feedback form-control-group">
                                                        <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Origin"
                                                                id="Origin"
                                                                required="required"
                                                                class="form-control-values select2-hidden-accessible"
                                                                data-select2-id="Origin"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="6">Select Option</option>
                                                                <optgroup label="Favourites" data-select2-id="33">
                                                                    <option value="826" data-select2-id="34">United Kingdom</option>
                                                                    <option value="840" data-select2-id="35">United States</option>
                                                                    <option value="586" data-select2-id="36">Pakistan</option>
                                                                    <option value="356" data-select2-id="37">India</option>
                                                                    <option value="050" data-select2-id="38">Bangladesh</option>
                                                                    <option value="504" data-select2-id="39">Morocco</option>
                                                                    <option value="784" data-select2-id="40">United Arab Emirates</option>
                                                                    <option value="682" data-select2-id="41">Saudi Arabia</option>
                                                                </optgroup>
                                                                <optgroup label="All Countries" data-select2-id="42">
                                                                    <option value="004" data-select2-id="43">Afghanistan</option>
                                                                    <option value="008" data-select2-id="44">Albania</option>
                                                                    <option value="012" data-select2-id="45">Algeria</option>
                                                                    <option value="016" data-select2-id="46">American Samoa</option>
                                                                    <option value="020" data-select2-id="47">Andorra</option>
                                                                    <option value="024" data-select2-id="48">Angola</option>
                                                                    <option value="660" data-select2-id="49">Anguilla</option>
                                                                    <option value="028" data-select2-id="50">Antigua and Barbuda</option>
                                                                    <option value="032" data-select2-id="51">Argentina</option>
                                                                    <option value="051" data-select2-id="52">Armenia</option>
                                                                    <option value="533" data-select2-id="53">Aruba</option>
                                                                    <option value="036" data-select2-id="54">Australia</option>
                                                                    <option value="040" data-select2-id="55">Austria</option>
                                                                    <option value="031" data-select2-id="56">Azerbaijan</option>
                                                                    <option value="048" data-select2-id="57">Bahrain</option>
                                                                    <option value="050" data-select2-id="58">Bangladesh</option>
                                                                    <option value="052" data-select2-id="59">Barbados</option>
                                                                    <option value="112" data-select2-id="60">Belarus</option>
                                                                    <option value="056" data-select2-id="61">Belgium</option>
                                                                    <option value="084" data-select2-id="62">Belize</option>
                                                                    <option value="204" data-select2-id="63">Benin</option>
                                                                    <option value="060" data-select2-id="64">Bermuda</option>
                                                                    <option value="064" data-select2-id="65">Bhutan</option>
                                                                    <option value="068" data-select2-id="66">Bolivia</option>
                                                                    <option value="070" data-select2-id="67">Bosnia and Herzegovina</option>
                                                                    <option value="072" data-select2-id="68">Botswana</option>
                                                                    <option value="076" data-select2-id="69">Brazil</option>
                                                                    <option value="086" data-select2-id="70">British Indian Ocean Territory</option>
                                                                    <option value="092" data-select2-id="71">British Virgin Islands</option>
                                                                    <option value="096" data-select2-id="72">Brunei Darussalam</option>
                                                                    <option value="100" data-select2-id="73">Bulgaria</option>
                                                                    <option value="854" data-select2-id="74">Burkina Faso</option>
                                                                    <option value="104" data-select2-id="75">Burma</option>
                                                                    <option value="108" data-select2-id="76">Burundi</option>
                                                                    <option value="116" data-select2-id="77">Cambodia</option>
                                                                    <option value="120" data-select2-id="78">Cameroon</option>
                                                                    <option value="124" data-select2-id="79">Canada</option>
                                                                    <option value="132" data-select2-id="80">Cape Verde</option>
                                                                    <option value="136" data-select2-id="81">Cayman Islands</option>
                                                                    <option value="140" data-select2-id="82">Central African Republic</option>
                                                                    <option value="148" data-select2-id="83">Chad</option>
                                                                    <option value="152" data-select2-id="84">Chile</option>
                                                                    <option value="156" data-select2-id="85">China</option>
                                                                    <option value="162" data-select2-id="86">Christmas Island</option>
                                                                    <option value="166" data-select2-id="87">Cocos (Keeling) Islands</option>
                                                                    <option value="170" data-select2-id="88">Colombia</option>
                                                                    <option value="174" data-select2-id="89">Comoros</option>
                                                                    <option value="180" data-select2-id="90">Congo, Democratic Republic of the</option>
                                                                    <option value="178" data-select2-id="91">Congo, Republic of the</option>
                                                                    <option value="184" data-select2-id="92">Cook Islands</option>
                                                                    <option value="188" data-select2-id="93">Costa Rica</option>
                                                                    <option value="384" data-select2-id="94">Cote d\'Ivoire</option>
                                                                    <option value="191" data-select2-id="95">Croatia</option>
                                                                    <option value="192" data-select2-id="96">Cuba</option>
                                                                    <option value="196" data-select2-id="97">Cyprus</option>
                                                                    <option value="203" data-select2-id="98">Czech Republic</option>
                                                                    <option value="208" data-select2-id="99">Denmark</option>
                                                                    <option value="262" data-select2-id="100">Djibouti</option>
                                                                    <option value="212" data-select2-id="101">Dominica</option>
                                                                    <option value="214" data-select2-id="102">Dominican Republic</option>
                                                                    <option value="626" data-select2-id="103">East Timor</option>
                                                                    <option value="218" data-select2-id="104">Ecuador</option>
                                                                    <option value="818" data-select2-id="105">Egypt</option>
                                                                    <option value="222" data-select2-id="106">El Salvador</option>
                                                                    <option value="226" data-select2-id="107">Equatorial Guinea</option>
                                                                    <option value="232" data-select2-id="108">Eritrea</option>
                                                                    <option value="233" data-select2-id="109">Estonia</option>
                                                                    <option value="231" data-select2-id="110">Ethiopia</option>
                                                                    <option value="238" data-select2-id="111">Falkland Islands (Islas Malvinas)</option>
                                                                    <option value="234" data-select2-id="112">Faroe Islands</option>
                                                                    <option value="242" data-select2-id="113">Fiji</option>
                                                                    <option value="246" data-select2-id="114">Finland</option>
                                                                    <option value="250" data-select2-id="115">France</option>
                                                                    <option value="254" data-select2-id="116">French Guiana</option>
                                                                    <option value="258" data-select2-id="117">French Polynesia</option>
                                                                    <option value="260" data-select2-id="118">French Southern and Antarctic Lands</option>
                                                                    <option value="266" data-select2-id="119">Gabon</option>
                                                                    <option value="268" data-select2-id="120">Georgia</option>
                                                                    <option value="276" data-select2-id="121">Germany</option>
                                                                    <option value="288" data-select2-id="122">Ghana</option>
                                                                    <option value="292" data-select2-id="123">Gibraltar</option>
                                                                    <option value="300" data-select2-id="124">Greece</option>
                                                                    <option value="304" data-select2-id="125">Greenland</option>
                                                                    <option value="308" data-select2-id="126">Grenada</option>
                                                                    <option value="312" data-select2-id="127">Guadeloupe</option>
                                                                    <option value="316" data-select2-id="128">Guam</option>
                                                                    <option value="320" data-select2-id="129">Guatemala</option>
                                                                    <option value="0--" data-select2-id="130">Man, Isle of</option>
                                                                    <option value="324" data-select2-id="131">Guinea</option>
                                                                    <option value="624" data-select2-id="132">Guinea-Bissau</option>
                                                                    <option value="328" data-select2-id="133">Guyana</option>
                                                                    <option value="332" data-select2-id="134">Haiti</option>
                                                                    <option value="334" data-select2-id="135">Heard Island and McDonald Islands</option>
                                                                    <option value="336" data-select2-id="136">Holy See (Vatican City)</option>
                                                                    <option value="340" data-select2-id="137">Honduras</option>
                                                                    <option value="344" data-select2-id="138">Hong Kong (SAR)</option>
                                                                    <option value="348" data-select2-id="139">Hungary</option>
                                                                    <option value="352" data-select2-id="140">Iceland</option>
                                                                    <option value="356" data-select2-id="141">India</option>
                                                                    <option value="360" data-select2-id="142">Indonesia</option>
                                                                    <option value="364" data-select2-id="143">Iran</option>
                                                                    <option value="368" data-select2-id="144">Iraq</option>
                                                                    <option value="372" data-select2-id="145">Ireland</option>
                                                                    <option value="376" data-select2-id="146">Israel</option>
                                                                    <option value="380" data-select2-id="147">Italy</option>
                                                                    <option value="388" data-select2-id="148">Jamaica</option>
                                                                    <option value="392" data-select2-id="149">Japan</option>
                                                                    <option value="400" data-select2-id="150">Jordan</option>
                                                                    <option value="398" data-select2-id="151">Kazakhstan</option>
                                                                    <option value="404" data-select2-id="152">Kenya</option>
                                                                    <option value="296" data-select2-id="153">Kiribati</option>
                                                                    <option value="408" data-select2-id="154">Korea, North</option>
                                                                    <option value="410" data-select2-id="155">Korea, South</option>
                                                                    <option value="414" data-select2-id="156">Kuwait</option>
                                                                    <option value="417" data-select2-id="157">Kyrgyzstan</option>
                                                                    <option value="418" data-select2-id="158">Laos</option>
                                                                    <option value="428" data-select2-id="159">Latvia</option>
                                                                    <option value="422" data-select2-id="160">Lebanon</option>
                                                                    <option value="426" data-select2-id="161">Lesotho</option>
                                                                    <option value="430" data-select2-id="162">Liberia</option>
                                                                    <option value="434" data-select2-id="163">Libya</option>
                                                                    <option value="438" data-select2-id="164">Liechtenstein</option>
                                                                    <option value="440" data-select2-id="165">Lithuania</option>
                                                                    <option value="442" data-select2-id="166">Luxembourg</option>
                                                                    <option value="446" data-select2-id="167">Macao</option>
                                                                    <option value="807" data-select2-id="168">Macedonia, The Former Yugoslav Republic of</option>
                                                                    <option value="450" data-select2-id="169">Madagascar</option>
                                                                    <option value="454" data-select2-id="170">Malawi</option>
                                                                    <option value="458" data-select2-id="171">Malaysia</option>
                                                                    <option value="462" data-select2-id="172">Maldives</option>
                                                                    <option value="466" data-select2-id="173">Mali</option>
                                                                    <option value="470" data-select2-id="174">Malta</option>
                                                                    <option value="584" data-select2-id="175">Marshall Islands</option>
                                                                    <option value="474" data-select2-id="176">Martinique</option>
                                                                    <option value="478" data-select2-id="177">Mauritania</option>
                                                                    <option value="480" data-select2-id="178">Mauritius</option>
                                                                    <option value="175" data-select2-id="179">Mayotte</option>
                                                                    <option value="484" data-select2-id="180">Mexico</option>
                                                                    <option value="583" data-select2-id="181">Micronesia, Federated States of</option>
                                                                    <option value="498" data-select2-id="182">Moldova</option>
                                                                    <option value="492" data-select2-id="183">Monaco</option>
                                                                    <option value="496" data-select2-id="184">Mongolia</option>
                                                                    <option value="499" data-select2-id="185">Montenegro</option>
                                                                    <option value="500" data-select2-id="186">Montserrat</option>
                                                                    <option value="504" data-select2-id="187">Morocco</option>
                                                                    <option value="508" data-select2-id="188">Mozambique</option>
                                                                    <option value="516" data-select2-id="189">Namibia</option>
                                                                    <option value="520" data-select2-id="190">Nauru</option>
                                                                    <option value="524" data-select2-id="191">Nepal</option>
                                                                    <option value="528" data-select2-id="192">Netherlands</option>
                                                                    <option value="530" data-select2-id="193">Netherlands Antilles</option>
                                                                    <option value="540" data-select2-id="194">New Caledonia</option>
                                                                    <option value="554" data-select2-id="195">New Zealand</option>
                                                                    <option value="558" data-select2-id="196">Nicaragua</option>
                                                                    <option value="562" data-select2-id="197">Niger</option>
                                                                    <option value="566" data-select2-id="198">Nigeria</option>
                                                                    <option value="570" data-select2-id="199">Niue</option>
                                                                    <option value="574" data-select2-id="200">Norfolk Island</option>
                                                                    <option value="580" data-select2-id="201">Northern Mariana Islands</option>
                                                                    <option value="578" data-select2-id="202">Norway</option>
                                                                    <option value="512" data-select2-id="203">Oman</option>
                                                                    <option value="586" data-select2-id="204">Pakistan</option>
                                                                    <option value="585" data-select2-id="205">Palau</option>
                                                                    <option value="275" data-select2-id="206">Palestinian Territory</option>
                                                                    <option value="591" data-select2-id="207">Panama</option>
                                                                    <option value="598" data-select2-id="208">Papua New Guinea</option>
                                                                    <option value="600" data-select2-id="209">Paraguay</option>
                                                                    <option value="604" data-select2-id="210">Peru</option>
                                                                    <option value="608" data-select2-id="211">Philippines</option>
                                                                    <option value="612" data-select2-id="212">Pitcairn Islands</option>
                                                                    <option value="616" data-select2-id="213">Poland</option>
                                                                    <option value="620" data-select2-id="214">Portugal</option>
                                                                    <option value="630" data-select2-id="215">Puerto Rico</option>
                                                                    <option value="634" data-select2-id="216">Qatar</option>
                                                                    <option value="638" data-select2-id="217">Réunion</option>
                                                                    <option value="642" data-select2-id="218">Romania</option>
                                                                    <option value="643" data-select2-id="219">Russia</option>
                                                                    <option value="646" data-select2-id="220">Rwanda</option>
                                                                    <option value="654" data-select2-id="221">Saint Helena</option>
                                                                    <option value="659" data-select2-id="222">Saint Kitts and Nevis</option>
                                                                    <option value="662" data-select2-id="223">Saint Lucia</option>
                                                                    <option value="666" data-select2-id="224">Saint Pierre and Miquelon</option>
                                                                    <option value="670" data-select2-id="225">Saint Vincent and the Grenadines</option>
                                                                    <option value="882" data-select2-id="226">Samoa</option>
                                                                    <option value="674" data-select2-id="227">San Marino</option>
                                                                    <option value="678" data-select2-id="228">São Tomé and Príncipe</option>
                                                                    <option value="682" data-select2-id="229">Saudi Arabia</option>
                                                                    <option value="686" data-select2-id="230">Senegal</option>
                                                                    <option value="688" data-select2-id="231">Serbia</option>
                                                                    <option value="690" data-select2-id="232">Seychelles</option>
                                                                    <option value="694" data-select2-id="233">Sierra Leone</option>
                                                                    <option value="702" data-select2-id="234">Singapore</option>
                                                                    <option value="703" data-select2-id="235">Slovakia</option>
                                                                    <option value="705" data-select2-id="236">Slovenia</option>
                                                                    <option value="090" data-select2-id="237">Solomon Islands</option>
                                                                    <option value="706" data-select2-id="238">Somalia</option>
                                                                    <option value="710" data-select2-id="239">South Africa</option>
                                                                    <option value="239" data-select2-id="240">South Georgia and the South Sandwich Islands</option>
                                                                    <option value="724" data-select2-id="241">Spain</option>
                                                                    <option value="144" data-select2-id="242">Sri Lanka</option>
                                                                    <option value="736" data-select2-id="243">Sudan</option>
                                                                    <option value="740" data-select2-id="244">Suriname</option>
                                                                    <option value="744" data-select2-id="245">Svalbard</option>
                                                                    <option value="748" data-select2-id="246">Swaziland</option>
                                                                    <option value="752" data-select2-id="247">Sweden</option>
                                                                    <option value="756" data-select2-id="248">Switzerland</option>
                                                                    <option value="760" data-select2-id="249">Syria</option>
                                                                    <option value="158" data-select2-id="250">Taiwan</option>
                                                                    <option value="762" data-select2-id="251">Tajikistan</option>
                                                                    <option value="834" data-select2-id="252">Tanzania</option>
                                                                    <option value="764" data-select2-id="253">Thailand</option>
                                                                    <option value="044" data-select2-id="254">The Bahamas</option>
                                                                    <option value="270" data-select2-id="255">The Gambia</option>
                                                                    <option value="768" data-select2-id="256">Togo</option>
                                                                    <option value="772" data-select2-id="257">Tokelau</option>
                                                                    <option value="776" data-select2-id="258">Tonga</option>
                                                                    <option value="780" data-select2-id="259">Trinidad and Tobago</option>
                                                                    <option value="788" data-select2-id="260">Tunisia</option>
                                                                    <option value="792" data-select2-id="261">Turkey</option>
                                                                    <option value="795" data-select2-id="262">Turkmenistan</option>
                                                                    <option value="796" data-select2-id="263">Turks and Caicos Islands</option>
                                                                    <option value="798" data-select2-id="264">Tuvalu</option>
                                                                    <option value="800" data-select2-id="265">Uganda</option>
                                                                    <option value="804" data-select2-id="266">Ukraine</option>
                                                                    <option value="784" data-select2-id="267">United Arab Emirates</option>
                                                                    <option value="826" data-select2-id="268">United Kingdom</option>
                                                                    <option value="840" data-select2-id="269">United States</option>
                                                                    <option value="581" data-select2-id="270">United States Minor Outlying Islands</option>
                                                                    <option value="858" data-select2-id="271">Uruguay</option>
                                                                    <option value="860" data-select2-id="272">Uzbekistan</option>
                                                                    <option value="548" data-select2-id="273">Vanuatu</option>
                                                                    <option value="862" data-select2-id="274">Venezuela</option>
                                                                    <option value="704" data-select2-id="275">Vietnam</option>
                                                                    <option value="850" data-select2-id="276">Virgin Islands</option>
                                                                    <option value="876" data-select2-id="277">Wallis and Futuna</option>
                                                                    <option value="732" data-select2-id="278">Western Sahara</option>
                                                                    <option value="887" data-select2-id="279">Yemen</option>
                                                                    <option value="894" data-select2-id="280">Zambia</option>
                                                                    <option value="716" data-select2-id="281">Zimbabwe</option>
                                                                </optgroup>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Relocation-group" class="form-group has-feedback form-control-group">
                                                        <label for="Relocation" class="control-label"><span class="required">*</span> Willing to Relocate?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Relocation"
                                                                id="Relocation"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Relocation"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="8">Select Option</option>
                                                                <option value="160" data-select2-id="401">None</option>
                                                                <option value="159" data-select2-id="402">Locally</option>
                                                                <option value="9" data-select2-id="403">Regionally</option>
                                                                <option value="10" data-select2-id="404">Nationally</option>
                                                                <option value="11" data-select2-id="405">Internationally</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Income-group" class="form-group has-feedback form-control-group">
                                                        <label for="Income" class="control-label"><span class="required">*</span> My Income</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Income"
                                                                id="Income"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Income"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="10">Select Option</option>
                                                                <option value="117" data-select2-id="407">up to 15k</option>
                                                                <option value="118" data-select2-id="408">15,000 - 25,000</option>
                                                                <option value="119" data-select2-id="409">25,000 - 50,000</option>
                                                                <option value="120" data-select2-id="410">over 50,000</option>
                                                                <option value="121" data-select2-id="411">Prefer not to say</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                                                        <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MarryIn"
                                                                id="MarryIn"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="MarryIn"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="12">Select Option</option>
                                                                <option value="184" data-select2-id="413">As soon as possible</option>
                                                                <option value="185" data-select2-id="414">This year</option>
                                                                <option value="186" data-select2-id="415">Next year</option>
                                                                <option value="187" data-select2-id="416">Unsure</option>
                                                            </select>
                                                           
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                                                        <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                                                        <div class="controls">
                                                            <select
                                                                name="MaritalStatus"
                                                                id="MaritalStatus"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="MaritalStatus"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="14">Select Option</option>
                                                                <option value="122" data-select2-id="418">Never married</option>
                                                                <option value="123" data-select2-id="419">Legally separated</option>
                                                                <option value="124" data-select2-id="420">Divorced</option>
                                                                <option value="125" data-select2-id="421">Widowed</option>
                                                                <option value="282" data-select2-id="422">Anulled</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Children-group" class="form-group has-feedback form-control-group">
                                                        <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Children"
                                                                id="Children"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Children"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="16">Select Option</option>
                                                                <option value="127" data-select2-id="424">No</option>
                                                                <option value="126" data-select2-id="425">Yes</option>
                                                                <option value="389" data-select2-id="426">Unsure</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                                                        <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="HaveChildren"
                                                                id="HaveChildren"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="HaveChildren"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="18">Select Option</option>
                                                                <option value="129" data-select2-id="428">No</option>
                                                                <option value="128" data-select2-id="429">Yes</option>
                                                                <option value="397" data-select2-id="430">I have one child</option>
                                                                <option value="405" data-select2-id="431">I have two children</option>
                                                                <option value="413" data-select2-id="432">I have three children</option>
                                                                <option value="421" data-select2-id="433">I have more than three children</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Living-group" class="form-group has-feedback form-control-group">
                                                        <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Living"
                                                                id="Living"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Living"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="20">Select Option</option>
                                                                <option value="130" data-select2-id="435">I Live Alone</option>
                                                                <option value="131" data-select2-id="436">I Live With Friends</option>
                                                                <option value="132" data-select2-id="437">I Live With Family</option>
                                                                <option value="133" data-select2-id="438">Other</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Height-group" class="form-group has-feedback form-control-group">
                                                        <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Height"
                                                                id="Height"
                                                                required="required"
                                                                class="form-control-values select2-hidden-accessible"
                                                                data-select2-id="Height"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="22">Select Option</option>
                                                                <option value="1.37" data-select2-id="283">1.37m (4' 6")</option>
                                                                <option value="1.38" data-select2-id="284">1.38m</option>
                                                                <option value="1.39" data-select2-id="285">1.39m</option>
                                                                <option value="1.4" data-select2-id="286">1.40m (4' 7")</option>
                                                                <option value="1.41" data-select2-id="287">1.41m</option>
                                                                <option value="1.42" data-select2-id="288">1.42m (4' 8")</option>
                                                                <option value="1.43" data-select2-id="289">1.43m</option>
                                                                <option value="1.44" data-select2-id="290">1.44m</option>
                                                                <option value="1.45" data-select2-id="291">1.45m (4' 9")</option>
                                                                <option value="1.46" data-select2-id="292">1.46m</option>
                                                                <option value="1.47" data-select2-id="293">1.47m (4' 10")</option>
                                                                <option value="1.48" data-select2-id="294">1.48m</option>
                                                                <option value="1.49" data-select2-id="295">1.49m</option>
                                                                <option value="1.5" data-select2-id="296">1.50m (4' 11")</option>
                                                                <option value="1.51" data-select2-id="297">1.51m</option>
                                                                <option value="1.52" data-select2-id="298">1.52m (5' 0")</option>
                                                                <option value="1.53" data-select2-id="299">1.53m</option>
                                                                <option value="1.54" data-select2-id="300">1.54m</option>
                                                                <option value="1.55" data-select2-id="301">1.55m (5' 1")</option>
                                                                <option value="1.56" data-select2-id="302">1.56m</option>
                                                                <option value="1.57" data-select2-id="303">1.57m (5' 2")</option>
                                                                <option value="1.58" data-select2-id="304">1.58m</option>
                                                                <option value="1.59" data-select2-id="305">1.59m</option>
                                                                <option value="1.6" data-select2-id="306">1.60m (5' 3")</option>
                                                                <option value="1.61" data-select2-id="307">1.61m</option>
                                                                <option value="1.62" data-select2-id="308">1.62m</option>
                                                                <option value="1.63" data-select2-id="309">1.63m (5' 4")</option>
                                                                <option value="1.64" data-select2-id="310">1.64m</option>
                                                                <option value="1.65" data-select2-id="311">1.65m (5' 5")</option>
                                                                <option value="1.66" data-select2-id="312">1.66m</option>
                                                                <option value="1.67" data-select2-id="313">1.67m</option>
                                                                <option value="1.68" data-select2-id="314">1.68m (5' 6")</option>
                                                                <option value="1.69" data-select2-id="315">1.69m</option>
                                                                <option value="1.7" data-select2-id="316">1.70m (5' 7")</option>
                                                                <option value="1.71" data-select2-id="317">1.71m</option>
                                                                <option value="1.72" data-select2-id="318">1.72m</option>
                                                                <option value="1.73" data-select2-id="319">1.73m (5' 8")</option>
                                                                <option value="1.74" data-select2-id="320">1.74m</option>
                                                                <option value="1.75" data-select2-id="321">1.75m (5' 9")</option>
                                                                <option value="1.76" data-select2-id="322">1.76m</option>
                                                                <option value="1.77" data-select2-id="323">1.77m</option>
                                                                <option value="1.78" data-select2-id="324">1.78m (5' 10")</option>
                                                                <option value="1.79" data-select2-id="325">1.79m</option>
                                                                <option value="1.8" data-select2-id="326">1.80m (5' 11")</option>
                                                                <option value="1.81" data-select2-id="327">1.81m</option>
                                                                <option value="1.82" data-select2-id="328">1.82m</option>
                                                                <option value="1.83" data-select2-id="329">1.83m (6' 0")</option>
                                                                <option value="1.84" data-select2-id="330">1.84m</option>
                                                                <option value="1.85" data-select2-id="331">1.85m (6' 1")</option>
                                                                <option value="1.86" data-select2-id="332">1.86m</option>
                                                                <option value="1.87" data-select2-id="333">1.87m</option>
                                                                <option value="1.88" data-select2-id="334">1.88m (6' 2")</option>
                                                                <option value="1.89" data-select2-id="335">1.89m</option>
                                                                <option value="1.9" data-select2-id="336">1.90m</option>
                                                                <option value="1.91" data-select2-id="337">1.91m (6' 3")</option>
                                                                <option value="1.92" data-select2-id="338">1.92m</option>
                                                                <option value="1.93" data-select2-id="339">1.93m (6' 4")</option>
                                                                <option value="1.94" data-select2-id="340">1.94m</option>
                                                                <option value="1.95" data-select2-id="341">1.95m</option>
                                                                <option value="1.96" data-select2-id="342">1.96m (6' 5")</option>
                                                                <option value="1.97" data-select2-id="343">1.97m</option>
                                                                <option value="1.98" data-select2-id="344">1.98m (6' 6")</option>
                                                                <option value="1.99" data-select2-id="345">1.99m</option>
                                                                <option value="2" data-select2-id="346">2.00m</option>
                                                                <option value="2.01" data-select2-id="347">2.01m (6' 7")</option>
                                                                <option value="2.02" data-select2-id="348">2.02m</option>
                                                                <option value="2.03" data-select2-id="349">2.03m (6' 8")</option>
                                                                <option value="2.04" data-select2-id="350">2.04m</option>
                                                                <option value="2.05" data-select2-id="351">2.05m</option>
                                                                <option value="2.06" data-select2-id="352">2.06m (6' 9")</option>
                                                                <option value="2.07" data-select2-id="353">2.07m</option>
                                                                <option value="2.08" data-select2-id="354">2.08m (6' 10")</option>
                                                                <option value="2.09" data-select2-id="355">2.09m</option>
                                                                <option value="2.1" data-select2-id="356">2.10m</option>
                                                                <option value="2.11" data-select2-id="357">2.11m (6' 11")</option>
                                                                <option value="2.12" data-select2-id="358">2.12m</option>
                                                                <option value="2.13" data-select2-id="359">2.13m (7' 0")</option>
                                                                <option value="2.14" data-select2-id="360">2.14m</option>
                                                                <option value="2.15" data-select2-id="361">2.15m</option>
                                                                <option value="2.16" data-select2-id="362">2.16m (7' 1")</option>
                                                            </select>
                                                            
                                                        </div>
                                                        <
                                                    </div>

                                                    <div id="Build-group" class="form-group has-feedback form-control-group">
                                                        <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Build"
                                                                id="Build"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Build"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="24">Select Option</option>
                                                                <option value="134" data-select2-id="441">Petite</option>
                                                                <option value="135" data-select2-id="442">Slim</option>
                                                                <option value="137" data-select2-id="443">Athletic</option>
                                                                <option value="136" data-select2-id="444">Medium</option>
                                                                <option value="138" data-select2-id="445">Muscular</option>
                                                                <option value="139" data-select2-id="446">Large</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Hair-group" class="form-group has-feedback form-control-group">
                                                        <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Hair"
                                                                id="Hair"
                                                                required="required"
                                                                class="form-control-values select2-hidden-accessible"
                                                                data-select2-id="Hair"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="26">Select Option</option>
                                                                <option value="140" data-select2-id="364">Black</option>
                                                                <option value="145" data-select2-id="365">Blonde</option>
                                                                <option value="141" data-select2-id="366">Dark brown</option>
                                                                <option value="146" data-select2-id="367">Grey</option>
                                                                <option value="143" data-select2-id="368">Light brown</option>
                                                                <option value="142" data-select2-id="369">Medium brown</option>
                                                                <option value="144" data-select2-id="370">Red</option>
                                                                <option value="317" data-select2-id="371">Bald</option>
                                                                <option value="147" data-select2-id="372">Other</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                                                        <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                                                        <div class="controls">
                                                            <select
                                                                name="EyeColour"
                                                                id="EyeColour"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="EyeColour"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="28">Select Option</option>
                                                                <option value="149" data-select2-id="449">Blue</option>
                                                                <option value="148" data-select2-id="450">Brown</option>
                                                                <option value="150" data-select2-id="451">Green</option>
                                                                <option value="152" data-select2-id="452">Grey</option>
                                                                <option value="151" data-select2-id="453">Hazel</option>
                                                                <option value="153" data-select2-id="454">Other</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div id="Smoke-group" class="form-group has-feedback form-control-group">
                                                        <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Smoke"
                                                                id="Smoke"
                                                                required="required"
                                                                class="select2-hidden-accessible"
                                                                data-select2-id="Smoke"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="30">Select Option</option>
                                                                <option value="155" data-select2-id="456">No</option>
                                                                <option value="154" data-select2-id="457">Yes</option>
                                                                <option value="337" data-select2-id="458">Sometimes</option>
                                                                <option value="366" data-select2-id="459">I've stopped smoking</option>
                                                            </select>
                                                            
                                                        </div>
                                                       
                                                    </div>

                                                    <div id="Disabilities-group" class="form-group has-feedback form-control-group">
                                                        <label for="Disabilities" class="control-label"><span class="required">*</span> Do I Have Any Disabilities?</label>
                                                        <div class="controls">
                                                            <select
                                                                name="Disabilities"
                                                                id="Disabilities"
                                                                required="required"
                                                                class="form-control-values select2-hidden-accessible"
                                                                data-select2-id="Disabilities"
                                                                tabindex="-1"
                                                                aria-hidden="true"
                                                                data-error="Please fill out this field."
                                                            >
                                                                <option value="" selected="" data-select2-id="32">Select Option</option>
                                                                <option value="157" data-select2-id="374">No</option>
                                                                <option value="156" data-select2-id="375">Yes</option>
                                                                <option value="341" data-select2-id="376">Yes - speech and language disorder</option>
                                                                <option value="342" data-select2-id="377">Yes - hearing loss and deafness</option>
                                                                <option value="344" data-select2-id="378">Yes - vision loss and blindness</option>
                                                                <option value="346" data-select2-id="379">Yes - physical disability</option>
                                                                <option value="348" data-select2-id="380">Yes - learning disability</option>
                                                                <option value="350" data-select2-id="381">Yes - mental illness</option>
                                                                <option value="354" data-select2-id="382">Yes - chronic illness</option>
                                                                <option value="357" data-select2-id="383">Yes - autism</option>
                                                                <option value="361" data-select2-id="384">Yes - please ask me</option>
                                                            </select>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-offset-0 col-sm-12 textalignright">
                                                            <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-lg textalignright disabled">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <span class="pull-left required stepsRequired">* Required Field</span>
                                                <div class="textalignright abspositionBack">
                                                    <button type="button" name="savePreviousDatas" onClick="location.href='/signup/education'"  id="savePreviousDatas" class="btn btn-primary btn-lg" value="Previous">Previous</button>
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
