@extends('user.app') @section('content')


<!-- Page Content -->

<div class="wide_fullbgimage signup wide_login_bg">
    <div class="container" id="signup">
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

        <div id="signupbox-register-form" style="margin-top: 50px;" class="col-md-10 col-lg-10 col-md-offset-1 col-md-offset-1 userregister">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>
                <div class="panel-body">



                    <form  method="POST" action="{{ route('register' ) }}" >
                        
                        @csrf

                        <input type="hidden" id="captcha-response" name="captcha-response" />

                        <div id="UserName-group" class="form-group has-feedback form-control-group">
                            <label for="UserName" class="control-label"><span class="required">*</span> Create a Username</label>
                            <div class="controls">
                                <input name="UserName" id="UserName" type="text" required="required" data-remote="/checkusername" class="form-control" />
                            </div>
                            <span
                                id="UserName-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title="Letters, numbers, underscores only"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            
                            <div class="clearfix"></div>
                        </div>

                        <div id="Email-group" class="form-group has-feedback form-control-group">
                            <label for="Email" class="control-label"><span class="required">*</span> Enter your Email</label>
                            <div class="controls">
                                <input name="Email" id="Email" type="email" required="required" data-remote="/registerCheckEmail" class="form-control" />
                            </div>
                            <span
                                id="Email-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title="Your password will be sent to this Email"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="ConfirmEmail-group" class="form-group has-feedback form-control-group">
                            <label for="ConfirmEmail" class="control-label"><span class="required">*</span> Confirm your Email</label>
                            <div class="controls">
                                <input name="ConfirmEmail" id="ConfirmEmail" type="email" data-match="#Email" required="required" data-error="Please fill out this field." class="form-control" />
                            </div>
                            <span
                                id="ConfirmEmail-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="Country-group" class="form-group has-feedback form-control-group">
                            <label for="Country" class="control-label"><span class="required">*</span> Where do you live?</label>
                            <div class="controls">
                                <select
                                    name="Country"
                                    id="Country"
                                    required="required"
                                    data-error="Please fill out this field."
                                    class="form-control-values select2-hidden-accessible"
                                    data-select2-id="Country"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="" selected="" data-select2-id="2">Select Country</option>
                                    <optgroup label="Favourites" data-select2-id="15">
                                        <option value="United States" data-select2-id="United Kingdom">United Kingdom</option>
                                        <option value="840" data-select2-id="17">United States</option>
                                        <option value="586" data-select2-id="18">Pakistan</option>
                                        <option value="356" data-select2-id="19">India</option>
                                        <option value="050" data-select2-id="20">Bangladesh</option>
                                        <option value="504" data-select2-id="21">Morocco</option>
                                        <option value="784" data-select2-id="22">United Arab Emirates</option>
                                        <option value="682" data-select2-id="23">Saudi Arabia</option>
                                    </optgroup>
                                    <optgroup label="All Countries" data-select2-id="24">
                                        <option value="004" data-select2-id="25">Afghanistan</option>
                                        <option value="008" data-select2-id="26">Albania</option>
                                        <option value="012" data-select2-id="27">Algeria</option>
                                        <option value="016" data-select2-id="28">American Samoa</option>
                                        <option value="020" data-select2-id="29">Andorra</option>
                                        <option value="024" data-select2-id="30">Angola</option>
                                        <option value="660" data-select2-id="31">Anguilla</option>
                                        <option value="028" data-select2-id="32">Antigua and Barbuda</option>
                                        <option value="032" data-select2-id="33">Argentina</option>
                                        <option value="051" data-select2-id="34">Armenia</option>
                                        <option value="533" data-select2-id="35">Aruba</option>
                                        <option value="036" data-select2-id="36">Australia</option>
                                        <option value="040" data-select2-id="37">Austria</option>
                                        <option value="031" data-select2-id="38">Azerbaijan</option>
                                        <option value="048" data-select2-id="39">Bahrain</option>
                                        <option value="050" data-select2-id="40">Bangladesh</option>
                                        <option value="052" data-select2-id="41">Barbados</option>
                                        <option value="112" data-select2-id="42">Belarus</option>
                                        <option value="056" data-select2-id="43">Belgium</option>
                                        <option value="084" data-select2-id="44">Belize</option>
                                        <option value="204" data-select2-id="45">Benin</option>
                                        <option value="060" data-select2-id="46">Bermuda</option>
                                        <option value="064" data-select2-id="47">Bhutan</option>
                                        <option value="068" data-select2-id="48">Bolivia</option>
                                        <option value="070" data-select2-id="49">Bosnia and Herzegovina</option>
                                        <option value="072" data-select2-id="50">Botswana</option>
                                        <option value="076" data-select2-id="51">Brazil</option>
                                        <option value="086" data-select2-id="52">British Indian Ocean Territory</option>
                                        <option value="092" data-select2-id="53">British Virgin Islands</option>
                                        <option value="096" data-select2-id="54">Brunei Darussalam</option>
                                        <option value="100" data-select2-id="55">Bulgaria</option>
                                        <option value="854" data-select2-id="56">Burkina Faso</option>
                                        <option value="104" data-select2-id="57">Burma</option>
                                        <option value="108" data-select2-id="58">Burundi</option>
                                        <option value="116" data-select2-id="59">Cambodia</option>
                                        <option value="120" data-select2-id="60">Cameroon</option>
                                        <option value="124" data-select2-id="61">Canada</option>
                                        <option value="132" data-select2-id="62">Cape Verde</option>
                                        <option value="136" data-select2-id="63">Cayman Islands</option>
                                        <option value="140" data-select2-id="64">Central African Republic</option>
                                        <option value="148" data-select2-id="65">Chad</option>
                                        <option value="152" data-select2-id="66">Chile</option>
                                        <option value="156" data-select2-id="67">China</option>
                                        <option value="162" data-select2-id="68">Christmas Island</option>
                                        <option value="166" data-select2-id="69">Cocos (Keeling) Islands</option>
                                        <option value="170" data-select2-id="70">Colombia</option>
                                        <option value="174" data-select2-id="71">Comoros</option>
                                        <option value="180" data-select2-id="72">Congo, Democratic Republic of the</option>
                                        <option value="178" data-select2-id="73">Congo, Republic of the</option>
                                        <option value="184" data-select2-id="74">Cook Islands</option>
                                        <option value="188" data-select2-id="75">Costa Rica</option>
                                        <option value="384" data-select2-id="76">Cote d\'Ivoire</option>
                                        <option value="191" data-select2-id="77">Croatia</option>
                                        <option value="192" data-select2-id="78">Cuba</option>
                                        <option value="196" data-select2-id="79">Cyprus</option>
                                        <option value="203" data-select2-id="80">Czech Republic</option>
                                        <option value="208" data-select2-id="81">Denmark</option>
                                        <option value="262" data-select2-id="82">Djibouti</option>
                                        <option value="212" data-select2-id="83">Dominica</option>
                                        <option value="214" data-select2-id="84">Dominican Republic</option>
                                        <option value="626" data-select2-id="85">East Timor</option>
                                        <option value="218" data-select2-id="86">Ecuador</option>
                                        <option value="818" data-select2-id="87">Egypt</option>
                                        <option value="222" data-select2-id="88">El Salvador</option>
                                        <option value="226" data-select2-id="89">Equatorial Guinea</option>
                                        <option value="232" data-select2-id="90">Eritrea</option>
                                        <option value="233" data-select2-id="91">Estonia</option>
                                        <option value="231" data-select2-id="92">Ethiopia</option>
                                        <option value="238" data-select2-id="93">Falkland Islands (Islas Malvinas)</option>
                                        <option value="234" data-select2-id="94">Faroe Islands</option>
                                        <option value="242" data-select2-id="95">Fiji</option>
                                        <option value="246" data-select2-id="96">Finland</option>
                                        <option value="250" data-select2-id="97">France</option>
                                        <option value="254" data-select2-id="98">French Guiana</option>
                                        <option value="258" data-select2-id="99">French Polynesia</option>
                                        <option value="260" data-select2-id="100">French Southern and Antarctic Lands</option>
                                        <option value="266" data-select2-id="101">Gabon</option>
                                        <option value="268" data-select2-id="102">Georgia</option>
                                        <option value="276" data-select2-id="103">Germany</option>
                                        <option value="288" data-select2-id="104">Ghana</option>
                                        <option value="292" data-select2-id="105">Gibraltar</option>
                                        <option value="300" data-select2-id="106">Greece</option>
                                        <option value="304" data-select2-id="107">Greenland</option>
                                        <option value="308" data-select2-id="108">Grenada</option>
                                        <option value="312" data-select2-id="109">Guadeloupe</option>
                                        <option value="316" data-select2-id="110">Guam</option>
                                        <option value="320" data-select2-id="111">Guatemala</option>
                                        <option value="0--" data-select2-id="112">Man, Isle of</option>
                                        <option value="324" data-select2-id="113">Guinea</option>
                                        <option value="624" data-select2-id="114">Guinea-Bissau</option>
                                        <option value="328" data-select2-id="115">Guyana</option>
                                        <option value="332" data-select2-id="116">Haiti</option>
                                        <option value="334" data-select2-id="117">Heard Island and McDonald Islands</option>
                                        <option value="336" data-select2-id="118">Holy See (Vatican City)</option>
                                        <option value="340" data-select2-id="119">Honduras</option>
                                        <option value="344" data-select2-id="120">Hong Kong (SAR)</option>
                                        <option value="348" data-select2-id="121">Hungary</option>
                                        <option value="352" data-select2-id="122">Iceland</option>
                                        <option value="356" data-select2-id="123">India</option>
                                        <option value="360" data-select2-id="124">Indonesia</option>
                                        <option value="364" data-select2-id="125">Iran</option>
                                        <option value="368" data-select2-id="126">Iraq</option>
                                        <option value="372" data-select2-id="127">Ireland</option>
                                        <option value="376" data-select2-id="128">Israel</option>
                                        <option value="380" data-select2-id="129">Italy</option>
                                        <option value="388" data-select2-id="130">Jamaica</option>
                                        <option value="392" data-select2-id="131">Japan</option>
                                        <option value="400" data-select2-id="132">Jordan</option>
                                        <option value="398" data-select2-id="133">Kazakhstan</option>
                                        <option value="404" data-select2-id="134">Kenya</option>
                                        <option value="296" data-select2-id="135">Kiribati</option>
                                        <option value="408" data-select2-id="136">Korea, North</option>
                                        <option value="410" data-select2-id="137">Korea, South</option>
                                        <option value="414" data-select2-id="138">Kuwait</option>
                                        <option value="417" data-select2-id="139">Kyrgyzstan</option>
                                        <option value="418" data-select2-id="140">Laos</option>
                                        <option value="428" data-select2-id="141">Latvia</option>
                                        <option value="422" data-select2-id="142">Lebanon</option>
                                        <option value="426" data-select2-id="143">Lesotho</option>
                                        <option value="430" data-select2-id="144">Liberia</option>
                                        <option value="434" data-select2-id="145">Libya</option>
                                        <option value="438" data-select2-id="146">Liechtenstein</option>
                                        <option value="440" data-select2-id="147">Lithuania</option>
                                        <option value="442" data-select2-id="148">Luxembourg</option>
                                        <option value="446" data-select2-id="149">Macao</option>
                                        <option value="807" data-select2-id="150">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="450" data-select2-id="151">Madagascar</option>
                                        <option value="454" data-select2-id="152">Malawi</option>
                                        <option value="458" data-select2-id="153">Malaysia</option>
                                        <option value="462" data-select2-id="154">Maldives</option>
                                        <option value="466" data-select2-id="155">Mali</option>
                                        <option value="470" data-select2-id="156">Malta</option>
                                        <option value="584" data-select2-id="157">Marshall Islands</option>
                                        <option value="474" data-select2-id="158">Martinique</option>
                                        <option value="478" data-select2-id="159">Mauritania</option>
                                        <option value="480" data-select2-id="160">Mauritius</option>
                                        <option value="175" data-select2-id="161">Mayotte</option>
                                        <option value="484" data-select2-id="162">Mexico</option>
                                        <option value="583" data-select2-id="163">Micronesia, Federated States of</option>
                                        <option value="498" data-select2-id="164">Moldova</option>
                                        <option value="492" data-select2-id="165">Monaco</option>
                                        <option value="496" data-select2-id="166">Mongolia</option>
                                        <option value="499" data-select2-id="167">Montenegro</option>
                                        <option value="500" data-select2-id="168">Montserrat</option>
                                        <option value="504" data-select2-id="169">Morocco</option>
                                        <option value="508" data-select2-id="170">Mozambique</option>
                                        <option value="516" data-select2-id="171">Namibia</option>
                                        <option value="520" data-select2-id="172">Nauru</option>
                                        <option value="524" data-select2-id="173">Nepal</option>
                                        <option value="528" data-select2-id="174">Netherlands</option>
                                        <option value="530" data-select2-id="175">Netherlands Antilles</option>
                                        <option value="540" data-select2-id="176">New Caledonia</option>
                                        <option value="554" data-select2-id="177">New Zealand</option>
                                        <option value="558" data-select2-id="178">Nicaragua</option>
                                        <option value="562" data-select2-id="179">Niger</option>
                                        <option value="566" data-select2-id="180">Nigeria</option>
                                        <option value="570" data-select2-id="181">Niue</option>
                                        <option value="574" data-select2-id="182">Norfolk Island</option>
                                        <option value="580" data-select2-id="183">Northern Mariana Islands</option>
                                        <option value="578" data-select2-id="184">Norway</option>
                                        <option value="512" data-select2-id="185">Oman</option>
                                        <option value="586" data-select2-id="186">Pakistan</option>
                                        <option value="585" data-select2-id="187">Palau</option>
                                        <option value="275" data-select2-id="188">Palestinian Territory</option>
                                        <option value="591" data-select2-id="189">Panama</option>
                                        <option value="598" data-select2-id="190">Papua New Guinea</option>
                                        <option value="600" data-select2-id="191">Paraguay</option>
                                        <option value="604" data-select2-id="192">Peru</option>
                                        <option value="608" data-select2-id="193">Philippines</option>
                                        <option value="612" data-select2-id="194">Pitcairn Islands</option>
                                        <option value="616" data-select2-id="195">Poland</option>
                                        <option value="620" data-select2-id="196">Portugal</option>
                                        <option value="630" data-select2-id="197">Puerto Rico</option>
                                        <option value="634" data-select2-id="198">Qatar</option>
                                        <option value="638" data-select2-id="199">Réunion</option>
                                        <option value="642" data-select2-id="200">Romania</option>
                                        <option value="643" data-select2-id="201">Russia</option>
                                        <option value="646" data-select2-id="202">Rwanda</option>
                                        <option value="654" data-select2-id="203">Saint Helena</option>
                                        <option value="659" data-select2-id="204">Saint Kitts and Nevis</option>
                                        <option value="662" data-select2-id="205">Saint Lucia</option>
                                        <option value="666" data-select2-id="206">Saint Pierre and Miquelon</option>
                                        <option value="670" data-select2-id="207">Saint Vincent and the Grenadines</option>
                                        <option value="882" data-select2-id="208">Samoa</option>
                                        <option value="674" data-select2-id="209">San Marino</option>
                                        <option value="678" data-select2-id="210">São Tomé and Príncipe</option>
                                        <option value="682" data-select2-id="211">Saudi Arabia</option>
                                        <option value="686" data-select2-id="212">Senegal</option>
                                        <option value="688" data-select2-id="213">Serbia</option>
                                        <option value="690" data-select2-id="214">Seychelles</option>
                                        <option value="694" data-select2-id="215">Sierra Leone</option>
                                        <option value="702" data-select2-id="216">Singapore</option>
                                        <option value="703" data-select2-id="217">Slovakia</option>
                                        <option value="705" data-select2-id="218">Slovenia</option>
                                        <option value="090" data-select2-id="219">Solomon Islands</option>
                                        <option value="706" data-select2-id="220">Somalia</option>
                                        <option value="710" data-select2-id="221">South Africa</option>
                                        <option value="239" data-select2-id="222">South Georgia and the South Sandwich Islands</option>
                                        <option value="724" data-select2-id="223">Spain</option>
                                        <option value="144" data-select2-id="224">Sri Lanka</option>
                                        <option value="736" data-select2-id="225">Sudan</option>
                                        <option value="740" data-select2-id="226">Suriname</option>
                                        <option value="744" data-select2-id="227">Svalbard</option>
                                        <option value="748" data-select2-id="228">Swaziland</option>
                                        <option value="752" data-select2-id="229">Sweden</option>
                                        <option value="756" data-select2-id="230">Switzerland</option>
                                        <option value="760" data-select2-id="231">Syria</option>
                                        <option value="158" data-select2-id="232">Taiwan</option>
                                        <option value="762" data-select2-id="233">Tajikistan</option>
                                        <option value="834" data-select2-id="234">Tanzania</option>
                                        <option value="764" data-select2-id="235">Thailand</option>
                                        <option value="044" data-select2-id="236">The Bahamas</option>
                                        <option value="270" data-select2-id="237">The Gambia</option>
                                        <option value="768" data-select2-id="238">Togo</option>
                                        <option value="772" data-select2-id="239">Tokelau</option>
                                        <option value="776" data-select2-id="240">Tonga</option>
                                        <option value="780" data-select2-id="241">Trinidad and Tobago</option>
                                        <option value="788" data-select2-id="242">Tunisia</option>
                                        <option value="792" data-select2-id="243">Turkey</option>
                                        <option value="795" data-select2-id="244">Turkmenistan</option>
                                        <option value="796" data-select2-id="245">Turks and Caicos Islands</option>
                                        <option value="798" data-select2-id="246">Tuvalu</option>
                                        <option value="800" data-select2-id="247">Uganda</option>
                                        <option value="804" data-select2-id="248">Ukraine</option>
                                        <option value="784" data-select2-id="249">United Arab Emirates</option>
                                        <option value="826" data-select2-id="250">United Kingdom</option>
                                        <option value="840" data-select2-id="251">United States</option>
                                        <option value="581" data-select2-id="252">United States Minor Outlying Islands</option>
                                        <option value="858" data-select2-id="253">Uruguay</option>
                                        <option value="860" data-select2-id="254">Uzbekistan</option>
                                        <option value="548" data-select2-id="255">Vanuatu</option>
                                        <option value="862" data-select2-id="256">Venezuela</option>
                                        <option value="704" data-select2-id="257">Vietnam</option>
                                        <option value="850" data-select2-id="258">Virgin Islands</option>
                                        <option value="876" data-select2-id="259">Wallis and Futuna</option>
                                        <option value="732" data-select2-id="260">Western Sahara</option>
                                        <option value="887" data-select2-id="261">Yemen</option>
                                        <option value="894" data-select2-id="262">Zambia</option>
                                        <option value="716" data-select2-id="263">Zimbabwe</option>
                                    </optgroup>
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="426" style="width: 338px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Country-container">
                                            <span class="select2-selection__rendered" id="select2-Country-container" role="textbox" aria-readonly="true" title="Select Country">Select Country</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="Country-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span> --}}
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="Gender-group" class="form-group has-feedback form-control-group">
                            <label for="Gender" class="control-label"><span class="required">*</span> Select Your Gender</label>
                            <div class="controls">
                                <select name="Gender" id="Gender" data-error="Please fill out this field." required="required" class="select2-hidden-accessible" data-select2-id="Gender" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="4">Select Your Gender</option>
                                    <option value="Male" data-select2-id="292">Male</option>
                                    <option value="2" data-select2-id="293">Female</option>
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="294" style="width: 150px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Gender-container">
                                            <span class="select2-selection__rendered" id="select2-Gender-container" role="textbox" aria-readonly="true" title="Select Your Gender">Select Your Gender</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span id="Gender-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div> --}}
                        </div>

                        <div id="DOB-group" class="form-group has-feedback form-control-group">
                            <label for="DOB" class="control-label"><span class="required">*</span> Your Date of Birth</label>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <select name="DOB_day" id="DOB-day" required="" class="select2-hidden-accessible" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="6">Select Day</option>
                                            <option value="1" data-select2-id="295">1</option>
                                            <option value="2" data-select2-id="296">2</option>
                                            <option value="3" data-select2-id="297">3</option>
                                            <option value="4" data-select2-id="298">4</option>
                                            <option value="5" data-select2-id="299">5</option>
                                            <option value="6" data-select2-id="300">6</option>
                                            <option value="7" data-select2-id="301">7</option>
                                            <option value="8" data-select2-id="302">8</option>
                                            <option value="9" data-select2-id="303">9</option>
                                            <option value="10" data-select2-id="304">10</option>
                                            <option value="11" data-select2-id="305">11</option>
                                            <option value="12" data-select2-id="306">12</option>
                                            <option value="13" data-select2-id="307">13</option>
                                            <option value="14" data-select2-id="308">14</option>
                                            <option value="15" data-select2-id="309">15</option>
                                            <option value="16" data-select2-id="310">16</option>
                                            <option value="17" data-select2-id="311">17</option>
                                            <option value="18" data-select2-id="312">18</option>
                                            <option value="19" data-select2-id="313">19</option>
                                            <option value="20" data-select2-id="314">20</option>
                                            <option value="21" data-select2-id="315">21</option>
                                            <option value="22" data-select2-id="316">22</option>
                                            <option value="23" data-select2-id="317">23</option>
                                            <option value="24" data-select2-id="318">24</option>
                                            <option value="25" data-select2-id="319">25</option>
                                            <option value="26" data-select2-id="320">26</option>
                                            <option value="27" data-select2-id="321">27</option>
                                            <option value="28" data-select2-id="322">28</option>
                                            <option value="29" data-select2-id="323">29</option>
                                            <option value="30" data-select2-id="324">30</option>
                                            <option value="31" data-select2-id="325">31</option>
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="326" style="width: 96px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-day-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-day-container" role="textbox" aria-readonly="true" title="Select Day">Select Day</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                    <div class="col-xs-5">
                                        <select name="DOB_month" id="DOB-month" required="" class="select2-hidden-accessible" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="8">Select Month</option>
                                            <option value="January" data-select2-id="327">January</option>
                                            <option value="2" data-select2-id="328">February</option>
                                            <option value="3" data-select2-id="329">March</option>
                                            <option value="4" data-select2-id="330">April</option>
                                            <option value="5" data-select2-id="331">May</option>
                                            <option value="6" data-select2-id="332">June</option>
                                            <option value="7" data-select2-id="333">July</option>
                                            <option value="8" data-select2-id="334">August</option>
                                            <option value="9" data-select2-id="335">September</option>
                                            <option value="10" data-select2-id="336">October</option>
                                            <option value="11" data-select2-id="337">November</option>
                                            <option value="12" data-select2-id="338">December</option>
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="339" style="width: 110px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-month-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-month-container" role="textbox" aria-readonly="true" title="Select Month">Select Month</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                    <div class="col-xs-4">
                                        <select name="DOB_year" id="DOB-year" required="" class="select2-hidden-accessible" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                                            <option value="" selected="" data-select2-id="10">Select Year</option>
                                            <option value="2002" data-select2-id="340">2002</option>
                                            <option value="2001" data-select2-id="341">2001</option>
                                            <option value="2000" data-select2-id="342">2000</option>
                                            <option value="1999" data-select2-id="343">1999</option>
                                            <option value="1998" data-select2-id="344">1998</option>
                                            <option value="1997" data-select2-id="345">1997</option>
                                            <option value="1996" data-select2-id="346">1996</option>
                                            <option value="1995" data-select2-id="347">1995</option>
                                            <option value="1994" data-select2-id="348">1994</option>
                                            <option value="1993" data-select2-id="349">1993</option>
                                            <option value="1992" data-select2-id="350">1992</option>
                                            <option value="1991" data-select2-id="351">1991</option>
                                            <option value="1990" data-select2-id="352">1990</option>
                                            <option value="1989" data-select2-id="353">1989</option>
                                            <option value="1988" data-select2-id="354">1988</option>
                                            <option value="1987" data-select2-id="355">1987</option>
                                            <option value="1986" data-select2-id="356">1986</option>
                                            <option value="1985" data-select2-id="357">1985</option>
                                            <option value="1984" data-select2-id="358">1984</option>
                                            <option value="1983" data-select2-id="359">1983</option>
                                            <option value="1982" data-select2-id="360">1982</option>
                                            <option value="1981" data-select2-id="361">1981</option>
                                            <option value="1980" data-select2-id="362">1980</option>
                                            <option value="1979" data-select2-id="363">1979</option>
                                            <option value="1978" data-select2-id="364">1978</option>
                                            <option value="1977" data-select2-id="365">1977</option>
                                            <option value="1976" data-select2-id="366">1976</option>
                                            <option value="1975" data-select2-id="367">1975</option>
                                            <option value="1974" data-select2-id="368">1974</option>
                                            <option value="1973" data-select2-id="369">1973</option>
                                            <option value="1972" data-select2-id="370">1972</option>
                                            <option value="1971" data-select2-id="371">1971</option>
                                            <option value="1970" data-select2-id="372">1970</option>
                                            <option value="1969" data-select2-id="373">1969</option>
                                            <option value="1968" data-select2-id="374">1968</option>
                                            <option value="1967" data-select2-id="375">1967</option>
                                            <option value="1966" data-select2-id="376">1966</option>
                                            <option value="1965" data-select2-id="377">1965</option>
                                            <option value="1964" data-select2-id="378">1964</option>
                                            <option value="1963" data-select2-id="379">1963</option>
                                            <option value="1962" data-select2-id="380">1962</option>
                                            <option value="1961" data-select2-id="381">1961</option>
                                            <option value="1960" data-select2-id="382">1960</option>
                                            <option value="1959" data-select2-id="383">1959</option>
                                            <option value="1958" data-select2-id="384">1958</option>
                                            <option value="1957" data-select2-id="385">1957</option>
                                            <option value="1956" data-select2-id="386">1956</option>
                                            <option value="1955" data-select2-id="387">1955</option>
                                            <option value="1954" data-select2-id="388">1954</option>
                                            <option value="1953" data-select2-id="389">1953</option>
                                            <option value="1952" data-select2-id="390">1952</option>
                                            <option value="1951" data-select2-id="391">1951</option>
                                            <option value="1950" data-select2-id="392">1950</option>
                                            <option value="1949" data-select2-id="393">1949</option>
                                            <option value="1948" data-select2-id="394">1948</option>
                                            <option value="1947" data-select2-id="395">1947</option>
                                            <option value="1946" data-select2-id="396">1946</option>
                                            <option value="1945" data-select2-id="397">1945</option>
                                            <option value="1944" data-select2-id="398">1944</option>
                                            <option value="1943" data-select2-id="399">1943</option>
                                            <option value="1942" data-select2-id="400">1942</option>
                                            <option value="1941" data-select2-id="401">1941</option>
                                            <option value="1940" data-select2-id="402">1940</option>
                                            <option value="1939" data-select2-id="403">1939</option>
                                            <option value="1938" data-select2-id="404">1938</option>
                                            <option value="1937" data-select2-id="405">1937</option>
                                            <option value="1936" data-select2-id="406">1936</option>
                                            <option value="1935" data-select2-id="407">1935</option>
                                            <option value="1934" data-select2-id="408">1934</option>
                                            <option value="1933" data-select2-id="409">1933</option>
                                            <option value="1932" data-select2-id="410">1932</option>
                                            <option value="1931" data-select2-id="411">1931</option>
                                            <option value="1930" data-select2-id="412">1930</option>
                                            <option value="1929" data-select2-id="413">1929</option>
                                            <option value="1928" data-select2-id="414">1928</option>
                                            <option value="1927" data-select2-id="415">1927</option>
                                            <option value="1926" data-select2-id="416">1926</option>
                                            <option value="1925" data-select2-id="417">1925</option>
                                            <option value="1924" data-select2-id="418">1924</option>
                                            <option value="1923" data-select2-id="419">1923</option>
                                            <option value="1922" data-select2-id="420">1922</option>
                                            <option value="1921" data-select2-id="421">1921</option>
                                            <option value="1920" data-select2-id="422">1920</option>
                                        </select>
                                        {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="423" style="width: 99px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DOB-year-container">
                                                    <span class="select2-selection__rendered" id="select2-DOB-year-container" role="textbox" aria-readonly="true" title="Select Year">Select Year</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <span id="DOB-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="You must be 18 or over"></span>
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div> --}}
                        </div>

                        <div id="RegistrationReason-group" class="form-group has-feedback form-control-group">
                            <label for="RegistrationReason" class="control-label"><span class="required">*</span> Reason for Registering?</label>
                            <div class="controls">
                                <select
                                    name="RegistrationReason"
                                    id="RegistrationReason"
                                    required="required"
                                    data-error="Please fill out this field."
                                    class="form-control-values select2-hidden-accessible"
                                    data-select2-id="RegistrationReason"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="" selected="" data-select2-id="12">Select Option</option>
                                    <option value="I'm registering to find myself a partner" data-select2-id="265">I'm registering to find myself a partner</option>
                                    <option value="167" data-select2-id="266">I'm registering to find my friend a partner</option>
                                    <option value="321" data-select2-id="267">I'm registering to find my son a partner</option>
                                    <option value="325" data-select2-id="268">I'm registering to find my daughter a partner</option>
                                    <option value="328" data-select2-id="269">I'm registering to find my brother a partner</option>
                                    <option value="330" data-select2-id="270">I'm registering to find my sister a partner</option>
                                    <option value="515" data-select2-id="271">I'm registering to find my nephew a partner</option>
                                    <option value="523" data-select2-id="272">I'm registering to find my niece a partner</option>
                                    <option value="531" data-select2-id="273">I'm registering to find my cousin a partner</option>
                                    <option value="333" data-select2-id="274">I'm registering to find my Mum a partner</option>
                                    <option value="335" data-select2-id="275">I'm registering to find my Dad a partner</option>
                                    <option value="166" data-select2-id="276">I'm registering to find my son/daughter a partner</option>
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="427" style="width: 326px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-RegistrationReason-container">
                                            <span class="select2-selection__rendered" id="select2-RegistrationReason-container" role="textbox" aria-readonly="true" title="Select Option">Select Option</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="RegistrationReason-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span> --}}
                            <span class="help-block with-errors" aria-hidden="false"></span>
                            <div class="clearfix"></div>
                        </div>

                        <div id="HearAboutUs-group" class="form-group has-feedback form-control-group">
                            <label for="HearAboutUs" class="control-label"><span class="required">*</span> Where did you hear about us?</label>
                            <div class="controls">
                                <select
                                    name="HearAboutUs"
                                    id="HearAboutUs"
                                    required="required"
                                    data-error="Please fill out this field."
                                    class="form-control-values select2-hidden-accessible"
                                    data-select2-id="HearAboutUs"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="" selected="" data-select2-id="14">Select Option</option>
                                    <option value="Google" data-select2-id="278">Google</option>
                                    <option value="Yahoo" data-select2-id="279">Yahoo</option>
                                    <option value="MSN" data-select2-id="280">MSN</option>
                                    <option value="Friend or Family" data-select2-id="281">Friend or Family</option>
                                    <option value="TV Advert" data-select2-id="282">TV Advert</option>
                                    <option value="Wedding Invite" data-select2-id="283">Wedding Invite</option>
                                    <option value="Newspaper" data-select2-id="284">Newspaper</option>
                                    <option value="Radio" data-select2-id="285">Radio</option>
                                    <option value="Muslim Directory" data-select2-id="286">Muslim Directory</option>
                                    <option value="Asian Leader" data-select2-id="287">Asian Leader</option>
                                    <option value="MASICNA" data-select2-id="288">MASICNA</option>
                                    <option value="Other" data-select2-id="289">Other</option>
                                </select>
                                {{-- <span class="select2 select2-container select2-container--default select2width" dir="ltr" data-select2-id="428" style="width: 133px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-HearAboutUs-container">
                                            <span class="select2-selection__rendered" id="select2-HearAboutUs-container" role="textbox" aria-readonly="true" title="Select Option">Select Option</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span> --}}
                            </div>
                            {{-- <span
                                id="HearAboutUs-span-success"
                                class="smicon-new form-control-feedback smicon-info male span-info-label"
                                data-toggle="tooltip"
                                data-placement="right"
                                title=""
                                data-original-title=""
                                style="display: none;"
                            ></span>
                            <span class="help-block with-errors" aria-hidden="false"></span> --}}
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><span class="required">*</span>{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div id="Accept-group" class="form-group has-feedback form-control-group">
                            <div class="checkbox">
                                <label class=""> <span class="required">*</span> Terms and Conditions </label>

                                <div class="controls">
                                    <input name="Accept" id="Accept-1" type="checkbox" value="1" data-error="Please fill out this field." required="" />
                                </div>

                                <div class="help-block with-errors"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div id="termsandcondition-group" class="form-group has-feedback form-control-group">
                            <a target="_blank" href="/page/terms_and_conditions">Click here to read Terms and Conditions</a> / <a target="_blank" href="/page/privacy_security">Privacy Policy</a>
                        </div>
                        {{-- <div id="captcha-group" class="form-group has-feedback form-control-group">
                            <div class="g-recaptcha" data-sitekey="6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH" data-badge="inline" data-size="invisible" data-callback="setResponse">
                                <div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
                                    <div class="grecaptcha-logo">
                                        <iframe
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldb-HoUAAAAALVVpryBLPYkK4ldXAmzkMvUl9TH&amp;co=aHR0cHM6Ly9zaW5nbGVtdXNsaW0uY29tOjQ0Mw..&amp;hl=en&amp;v=nuX0GNR875hMLA1LR7ayD9tc&amp;size=invisible&amp;badge=inline&amp;cb=xu38qdujrxgn"
                                            width="256"
                                            height="60"
                                            role="presentation"
                                            name="a-q66thv4yeh61"
                                            frameborder="0"
                                            scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                                        ></iframe>
                                    </div>
                                    <div class="grecaptcha-error"></div>
                                    <textarea
                                        id="g-recaptcha-response"
                                        name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                    ></textarea>
                                </div>
                                <iframe style="display: none;"></iframe>
                            </div>
                        </div> --}}
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-2">
                                <button name="Submit" id="Submit" type="submit"  class="btn btn-primary btn-submit-register registerUserbtn">Register</button>
                                
                            </div>
                        </div>

                    </form>

                   
                    <span class="pull-left required" style="margin-left: 68px; margin-top: -110px;">* Required Field</span>

                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>

                    <script>
                        $(function () {
                            // dataLayer.push({
                            //     'event':'formSubmit'
                            // });
                            $(".btn-submit-register").on("click", function () {
                                var validator = $("#signupbox-register").data("bs.validator");
                                validator.validate();

                                if (!validator.hasErrors()) {
                                    $(this).html('<div class="loading">Register    <span style="padding-left: 20px">        <img src="/images/loading.gif" style="width: 20px;" /></span></div>');
                                    grecaptcha.execute();
                                } else {
                                }
                            });
                        });

                        function setResponse(response) {
                            document.getElementById("captcha-response").value = response;
                            document.getElementById("signupbox-register").submit();
                        }

                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

</div>
<!-- /.container -->

@endsection
