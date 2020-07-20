    @extends('user.app')
    @section('content')



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #ffffff;
        }
        
        #regForm {
            background-color: #d5ece5;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }
        
        h1 {
            text-align: center;  
        }
        
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #bcf1af;
        }
        
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }
        
        /* Hide all steps by default: */
        .tab {
            display: none;
        }
        
        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        #prevBtn {
            background-color: #bbbbbb;
        }
        
        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bdb4b4;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        
        .step.active {
            opacity: 1;
        }
        
        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>


    <form id="regForm" action="/action_page.php">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h1>Register:</h1>
            
            <div id="UserName-group" class="form-group has-feedback form-control-group">
                <label for="UserName" class="control-label"><span class="required">*</span> Create a Username</label>
                <div class="controls">
                    <input name="UserName" id="UserName" type="text" required="required" data-remote="/checkusername" class="form-control" />
                </div> 
            </div>
            
            <div id="Email-group" class="form-group has-feedback form-control-group">
                <label for="Email" class="control-label"><span class="required">*</span> Enter your Email</label>
                <div class="controls">
                    <input name="Email" id="Email" type="email" required="required" data-remote="/registerCheckEmail" class="form-control" />
                </div>
            </div>
            
            <div id="ConfirmEmail-group" class="form-group has-feedback form-control-group">
                <label for="ConfirmEmail" class="control-label"><span class="required">*</span> Confirm your Email</label>
                <div class="controls">
                    <input name="ConfirmEmail" id="ConfirmEmail" type="email" data-match="#Email" required="required" data-error="Please fill out this field." class="form-control" />
                </div>
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
                        <option value="826" data-select2-id="16">United Kingdom</option>
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
              
            </div>
           
        </div>
            
            <div id="Gender-group" class="form-group has-feedback form-control-group">
                <label for="Gender" class="control-label"><span class="required">*</span> Select Your Gender</label>
                <div class="controls">
                    <select name="Gender" id="Gender" data-error="Please fill out this field." required="required" class="select2-hidden-accessible" data-select2-id="Gender" tabindex="-1" aria-hidden="true">
                        <option value="" selected="" data-select2-id="4">Select Your Gender</option>
                        <option value="1" data-select2-id="292">Male</option>
                        <option value="2" data-select2-id="293">Female</option>
                    </select>
                   
                </div>
               
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
                                <option value="1" data-select2-id="327">January</option>
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
                    <option value="165" data-select2-id="265">I'm registering to find myself a partner</option>
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
            
            <div id="Accept-group" class="form-group has-feedback form-control-group">
                <div class="checkbox">
                    <label class=""> <span class="required">*</span> Terms and Conditions </label>
                    
                    <div class="controls" style="margin-left: 18px; margin-top: -20px;">
                        <input name="Accept" id="Accept-1" type="checkbox" value="1" data-error="Please fill out this field." required="" />
                    </div>
                    
                    <div class="help-block with-errors"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            
            <div>
                <span class="pull-left required" style="margin-left: 18px; margin-top: -5px;">* Required Field</span>
            </div>
            
            
        </div>
        
        <div class="tab">
            <h1>Contact Info:</h1>

                            <div id="Headline-group" class="form-group has-feedback form-control-group">
                                <label for="Headline" class="control-label "><span class="required">*</span> Headline</label>
                                <div class="controls">
                                    <input name="Headline" id="Headline" type="text" required="required" class="form-control">
                                </div>
                                
                            </div>

                            <div id="Description-group" class="form-group has-feedback form-control-group">
                                <label for="Description" class="control-label "><span class="required">*</span> A Little Bit About Me</label>
                                <div class="controls">
                                    <textarea name="Description" id="Description" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
                                </div>
                                
                            </div>

                            <div id="LookingFor-group" class="form-group has-feedback form-control-group">
                                <label for="LookingFor" class="control-label "><span class="required">*</span> What I Am Looking For</label>
                                <div class="controls">
                                    <textarea name="LookingFor" id="LookingFor" required="required" class="form-control" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 54px;"></textarea>
                                </div>
                                
                            </div>
                        
                            <div>
                                <span class="pull-left required stepsRequired" style="margin-left: 18px; margin-top: -55px;">* Required Field</span>
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
                                $(function(){
                                    dataLayer.push({
                                        'event':'SignupWeb'
                                    });
                                })
                            </script>                    
        </div>
 

        <div class="tab">
        
    

        
                    <div id="EducationLevel-group" class="form-group has-feedback form-control-group">
                        <label for="EducationLevel" class="control-label"><span class="required">*</span> My Education Level</label>
                        <div class="controls">
                            <select
                                name="EducationLevel"
                                id="EducationLevel"
                                required="required"
                                class="form-control-values select2-hidden-accessible"
                                data-select2-id="EducationLevel"
                                tabindex="-1"
                                aria-hidden="true"
                                data-error="Please fill out this field."
                            >
                                <option value="" selected="" data-select2-id="4">Select Option</option>
                                <option value="27" data-select2-id="13">Bachelors degree</option>
                                <option value="25" data-select2-id="14">College</option>
                                <option value="30" data-select2-id="15">Doctorate</option>
                                <option value="24" data-select2-id="16">High school</option>
                                <option value="28" data-select2-id="17">Masters degree</option>
                                <option value="26" data-select2-id="18">Non degree qualification</option>
                                <option value="32" data-select2-id="19">Prefer not to say</option>
                                <option value="29" data-select2-id="20">Other degree</option>
                                <option value="31" data-select2-id="21">Other</option>
                            </select>
                           
                        </div>
                        
                    </div>

                    <div id="SubjectStudied-group" class="form-group has-feedback form-control-group">
                        <label for="SubjectStudied" class="control-label"><span class="required">*</span> Subject I Studied</label>
                        <div class="controls">
                            <input name="SubjectStudied" id="SubjectStudied" type="text" required="required" value="" class="form-control" />
                        </div>
                        
                    </div>

                    <div id="JobTitle-group" class="form-group has-feedback form-control-group">
                        <label for="JobTitle" class="control-label"><span class="required">*</span> My Job Title</label>
                        <div class="controls">
                            <input name="JobTitle" id="JobTitle" type="text" required="required" value="" class="form-control" />
                        </div>
                        
                    </div>

                    <div id="Employment-group" class="form-group has-feedback form-control-group">
                        <label for="Employment" class="control-label"><span class="required">*</span> My Profession</label>
                        <div class="controls">
                            <select
                                name="Employment"
                                id="Employment"
                                required="required"
                                class="form-control-values select2-hidden-accessible"
                                data-select2-id="Employment"
                                tabindex="-1"
                                aria-hidden="true"
                                data-error="Please fill out this field."
                            >
                                <option value="" selected="" data-select2-id="6">Select Option</option>
                                <option value="189" data-select2-id="23">Accountant</option>
                                <option value="192" data-select2-id="24">Acting Professional</option>
                                <option value="193" data-select2-id="25">Actor</option>
                                <option value="33" data-select2-id="26">Administration</option>
                                <option value="194" data-select2-id="27">Administration Professional</option>
                                <option value="195" data-select2-id="28">Advertising Professional</option>
                                <option value="196" data-select2-id="29">Air Hostess</option>
                                <option value="197" data-select2-id="30">Architect</option>
                                <option value="34" data-select2-id="31">Architecture</option>
                                <option value="36" data-select2-id="32">Armed Forces</option>
                                <option value="35" data-select2-id="33">Art &amp; Design</option>
                                <option value="198" data-select2-id="34">Artisan</option>
                                <option value="199" data-select2-id="35">Audiologist</option>
                                <option value="200" data-select2-id="36">Banker</option>
                                <option value="37" data-select2-id="37">Banking</option>
                                <option value="201" data-select2-id="38">Beautician</option>
                                <option value="202" data-select2-id="39">Biologist / Botanist</option>
                                <option value="38" data-select2-id="40">Business</option>
                                <option value="203" data-select2-id="41">Business Person</option>
                                <option value="39" data-select2-id="42">Catering</option>
                                <option value="283" data-select2-id="43">Charity Worker</option>
                                <option value="204" data-select2-id="44">Chartered Accountant</option>
                                <option value="205" data-select2-id="45">Civil Engineer</option>
                                <option value="40" data-select2-id="46">Civil service</option>
                                <option value="206" data-select2-id="47">Clerical Official</option>
                                <option value="207" data-select2-id="48">Commercial Pilot</option>
                                <option value="208" data-select2-id="49">Company Secretary</option>
                                <option value="209" data-select2-id="50">Computer Professional</option>
                                <option value="41" data-select2-id="51">Computing/IT</option>
                                <option value="42" data-select2-id="52">Construction</option>
                                <option value="43" data-select2-id="53">Consultancy</option>
                                <option value="210" data-select2-id="54">Consultant</option>
                                <option value="211" data-select2-id="55">Contractor</option>
                                <option value="212" data-select2-id="56">Cost Accountant</option>
                                <option value="213" data-select2-id="57">Creative Person</option>
                                <option value="214" data-select2-id="58">Customer Support Professional</option>
                                <option value="215" data-select2-id="59">Defense Employee</option>
                                <option value="216" data-select2-id="60">Dentist</option>
                                <option value="44" data-select2-id="61">Dentistry</option>
                                <option value="217" data-select2-id="62">Designer</option>
                                <option value="218" data-select2-id="63">Doctor</option>
                                <option value="219" data-select2-id="64">Economist</option>
                                <option value="45" data-select2-id="65">Education</option>
                                <option value="461" data-select2-id="66">Editor</option>
                                <option value="220" data-select2-id="67">Engineer</option>
                                <option value="540" data-select2-id="68">Engineer (Chemical)</option>
                                <option value="221" data-select2-id="69">Engineer (Mechanical)</option>
                                <option value="222" data-select2-id="70">Engineer (Project)</option>
                                <option value="46" data-select2-id="71">Engineering</option>
                                <option value="47" data-select2-id="72">Entertainment</option>
                                <option value="223" data-select2-id="73">Entertainment Professional</option>
                                <option value="73" data-select2-id="74">Entrepreneur</option>
                                <option value="225" data-select2-id="75">Event Manager</option>
                                <option value="226" data-select2-id="76">Executive</option>
                                <option value="227" data-select2-id="77">Factory worker</option>
                                <option value="228" data-select2-id="78">Farmer</option>
                                <option value="48" data-select2-id="79">Fashion</option>
                                <option value="229" data-select2-id="80">Fashion Designer</option>
                                <option value="49" data-select2-id="81">Finance</option>
                                <option value="230" data-select2-id="82">Finance Professional</option>
                                <option value="50" data-select2-id="83">Fire Service</option>
                                <option value="231" data-select2-id="84">Flight Attendant</option>
                                <option value="232" data-select2-id="85">Government Employee</option>
                                <option value="51" data-select2-id="86">Health &amp; Beauty</option>
                                <option value="233" data-select2-id="87">Health Care Professional</option>
                                <option value="234" data-select2-id="88">Home Maker</option>
                                <option value="52" data-select2-id="89">Hospitality</option>
                                <option value="235" data-select2-id="90">Hotel &amp; Restaurant Professional</option>
                                <option value="236" data-select2-id="91">Human Resources Professional</option>
                                <option value="237" data-select2-id="92">Interior Designer</option>
                                <option value="238" data-select2-id="93">Investment Professional</option>
                                <option value="239" data-select2-id="94">IT / Telecom Professional</option>
                                <option value="240" data-select2-id="95">Journalist</option>
                                <option value="241" data-select2-id="96">Lawyer</option>
                                <option value="242" data-select2-id="97">Lecturer</option>
                                <option value="53" data-select2-id="98">Legal</option>
                                <option value="243" data-select2-id="99">Legal Professional</option>
                                <option value="244" data-select2-id="100">Manager</option>
                                <option value="54" data-select2-id="101">Manufacturing</option>
                                <option value="55" data-select2-id="102">Marketing</option>
                                <option value="245" data-select2-id="103">Marketing Professional</option>
                                <option value="56" data-select2-id="104">Media</option>
                                <option value="246" data-select2-id="105">Media Professional</option>
                                <option value="57" data-select2-id="106">Medical</option>
                                <option value="247" data-select2-id="107">Medical Professional</option>
                                <option value="248" data-select2-id="108">Medical Transcriptionist</option>
                                <option value="249" data-select2-id="109">Merchant Naval Officer</option>
                                <option value="485" data-select2-id="110">Midwife</option>
                                <option value="58" data-select2-id="111">Music</option>
                                <option value="59" data-select2-id="112">Navy</option>
                                <option value="250" data-select2-id="113">Nurse</option>
                                <option value="251" data-select2-id="114">Occupational Therapist</option>
                                <option value="252" data-select2-id="115">Optician</option>
                                <option value="490" data-select2-id="116">Optometrist</option>
                                <option value="253" data-select2-id="117">Pharmacist</option>
                                <option value="254" data-select2-id="118">Physician Assistant</option>
                                <option value="255" data-select2-id="119">Physicist</option>
                                <option value="256" data-select2-id="120">Physiotherapist</option>
                                <option value="257" data-select2-id="121">Pilot</option>
                                <option value="60" data-select2-id="122">Police</option>
                                <option value="258" data-select2-id="123">Politician</option>
                                <option value="61" data-select2-id="124">Politics</option>
                                <option value="74" data-select2-id="125">Prefer not to say</option>
                                <option value="63" data-select2-id="126">Production</option>
                                <option value="259" data-select2-id="127">Production professional</option>
                                <option value="260" data-select2-id="128">Professor</option>
                                <option value="62" data-select2-id="129">Property</option>
                                <option value="261" data-select2-id="130">Psychologist</option>
                                <option value="262" data-select2-id="131">Public Relations Professional</option>
                                <option value="263" data-select2-id="132">Real Estate Professional</option>
                                <option value="264" data-select2-id="133">Research Scholar</option>
                                <option value="64" data-select2-id="134">Retail</option>
                                <option value="266" data-select2-id="135">Retail Professional</option>
                                <option value="265" data-select2-id="136">Retired Person</option>
                                <option value="65" data-select2-id="137">Sales</option>
                                <option value="267" data-select2-id="138">Sales Professional</option>
                                <option value="66" data-select2-id="139">Science</option>
                                <option value="268" data-select2-id="140">Scientist</option>
                                <option value="297" data-select2-id="141">Security</option>
                                <option value="75" data-select2-id="142">Self Employed</option>
                                <option value="269" data-select2-id="143">Self-employed Person</option>
                                <option value="270" data-select2-id="144">Social Worker</option>
                                <option value="271" data-select2-id="145">Software Consultant</option>
                                <option value="67" data-select2-id="146">Sports</option>
                                <option value="272" data-select2-id="147">Sportsman</option>
                                <option value="68" data-select2-id="148">Student</option>
                                <option value="274" data-select2-id="149">Teacher</option>
                                <option value="69" data-select2-id="150">Technician</option>
                                <option value="276" data-select2-id="151">Training Professional</option>
                                <option value="277" data-select2-id="152">Transportation Professional</option>
                                <option value="70" data-select2-id="153">Travel</option>
                                <option value="71" data-select2-id="154">Unemployed</option>
                                <option value="278" data-select2-id="155">Veterinary Doctor</option>
                                <option value="279" data-select2-id="156">Volunteer</option>
                                <option value="280" data-select2-id="157">Writer</option>
                                <option value="281" data-select2-id="158">Zoologist</option>
                            </select>
                            
                        </div>
                        
                    </div>

                    <div id="FirstLang-group" class="form-group has-feedback form-control-group">
                        <label for="FirstLang" class="control-label"><span class="required">*</span> My First Language</label>
                        <div class="controls">
                            <select
                                name="FirstLang"
                                id="FirstLang"
                                required="required"
                                class="form-control-values select2-hidden-accessible"
                                data-select2-id="FirstLang"
                                tabindex="-1"
                                aria-hidden="true"
                                data-error="Please fill out this field."
                            >
                                <option value="" selected="" data-select2-id="8">Select Option</option>
                                <option value="76" data-select2-id="160">English</option>
                                <option value="78" data-select2-id="161">Arabic</option>
                                <option value="429" data-select2-id="162">Balochi</option>
                                <option value="81" data-select2-id="163">Bengali</option>
                                <option value="82" data-select2-id="164">Chinese</option>
                                <option value="85" data-select2-id="165">Dutch</option>
                                <option value="86" data-select2-id="166">French</option>
                                <option value="87" data-select2-id="167">German</option>
                                <option value="84" data-select2-id="168">Greek</option>
                                <option value="80" data-select2-id="169">Gujerati</option>
                                <option value="298" data-select2-id="170">Hebrew</option>
                                <option value="83" data-select2-id="171">Hindi</option>
                                <option value="293" data-select2-id="172">Hindko</option>
                                <option value="88" data-select2-id="173">Italian</option>
                                <option value="89" data-select2-id="174">Japanese</option>
                                <option value="163" data-select2-id="175">Kurdish</option>
                                <option value="286" data-select2-id="176">Kutchi</option>
                                <option value="92" data-select2-id="177">Latin</option>
                                <option value="287" data-select2-id="178">Mirpuri</option>
                                <option value="90" data-select2-id="179">Persian</option>
                                <option value="91" data-select2-id="180">Portugese</option>
                                <option value="285" data-select2-id="181">Potwari</option>
                                <option value="77" data-select2-id="182">Punjabi</option>
                                <option value="171" data-select2-id="183">Pushto</option>
                                <option value="93" data-select2-id="184">Russian</option>
                                <option value="94" data-select2-id="185">Spanish</option>
                                <option value="288" data-select2-id="186">Sylheti</option>
                                <option value="295" data-select2-id="187">Tamil</option>
                                <option value="168" data-select2-id="188">Turkish</option>
                                <option value="79" data-select2-id="189">Urdu</option>
                                <option value="95" data-select2-id="190">Other</option>
                                <option value="469" data-select2-id="191">Kashmiri</option>
                                <option value="499" data-select2-id="192">Korean</option>
                                <option value="564" data-select2-id="193">Saraiki</option>
                                <option value="583" data-select2-id="194">Sindhi</option>
                            </select>
                            
                        </div>
                        
                    </div>

                    <div id="SecondLang-group" class="form-group has-feedback form-control-group">
                        <label for="SecondLang" class="control-label"><span class="required">*</span> My Second Language</label>
                        <div class="controls">
                            <select
                                name="SecondLang"
                                id="SecondLang"
                                required="required"
                                class="form-control-values select2-hidden-accessible"
                                data-select2-id="SecondLang"
                                tabindex="-1"
                                aria-hidden="true"
                                data-error="Please fill out this field."
                            >
                                <option value="" selected="" data-select2-id="10">Select Option</option>
                                <option value="96" data-select2-id="196">English</option>
                                <option value="98" data-select2-id="197">Arabic</option>
                                <option value="437" data-select2-id="198">Balochi</option>
                                <option value="101" data-select2-id="199">Bengali</option>
                                <option value="102" data-select2-id="200">Chinese</option>
                                <option value="105" data-select2-id="201">Dutch</option>
                                <option value="106" data-select2-id="202">French</option>
                                <option value="107" data-select2-id="203">German</option>
                                <option value="104" data-select2-id="204">Greek</option>
                                <option value="100" data-select2-id="205">Gujerati</option>
                                <option value="299" data-select2-id="206">Hebrew</option>
                                <option value="103" data-select2-id="207">Hindi</option>
                                <option value="294" data-select2-id="208">Hindko</option>
                                <option value="108" data-select2-id="209">Italian</option>
                                <option value="109" data-select2-id="210">Japanese</option>
                                <option value="164" data-select2-id="211">Kurdish</option>
                                <option value="290" data-select2-id="212">Kutchi</option>
                                <option value="113" data-select2-id="213">Latin</option>
                                <option value="291" data-select2-id="214">Mirpuri</option>
                                <option value="111" data-select2-id="215">Persian</option>
                                <option value="112" data-select2-id="216">Portugese</option>
                                <option value="289" data-select2-id="217">Potwari</option>
                                <option value="97" data-select2-id="218">Punjabi</option>
                                <option value="172" data-select2-id="219">Pushto</option>
                                <option value="114" data-select2-id="220">Russian</option>
                                <option value="115" data-select2-id="221">Spanish</option>
                                <option value="292" data-select2-id="222">Sylheti</option>
                                <option value="296" data-select2-id="223">Tamil</option>
                                <option value="169" data-select2-id="224">Turkish</option>
                                <option value="99" data-select2-id="225">Urdu</option>
                                <option value="116" data-select2-id="226">Other</option>
                                <option value="477" data-select2-id="227">Kashmiri</option>
                                <option value="507" data-select2-id="228">Korean</option>
                                <option value="572" data-select2-id="229">Saraiki</option>
                                <option value="591" data-select2-id="230">Sindhi</option>
                            </select>
                           
                        </div>
                        
                    </div>

                  
                                         
                <div>
                    <span class="pull-left required stepsRequired">* Required Field</span>
                </div>                                    
    </div>
           
    <div class="tab">Personal Info:
               

            <div id="Citizenship-group" class="form-group has-feedback form-control-group">
                <label for="Citizenship" class="control-label"><span class="required">*</span> My Citizenship</label>
                <div class="controls">
                    <select name="Citizenship" id="Citizenship" required="required" class="select2-hidden-accessible" data-select2-id="Citizenship" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
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
                <span id="Citizenship-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Origin-group" class="form-group has-feedback form-control-group">
                <label for="Origin" class="control-label"><span class="required">*</span> Country of Origin</label>
                <div class="controls">
                    <select name="Origin" id="Origin" required="required" class="form-control-values select2-hidden-accessible" data-select2-id="Origin" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="8">Select Option</option>
                        <optgroup label="Favourites" data-select2-id="">
                            <option value="826" data-select2-id="34">United Kingdom</option>
                            <option value="840" data-select2-id="35">United States</option>
                            <option value="586" data-select2-id="36">Pakistan</option>
                            <option value="356" data-select2-id="37">India</option>
                            <option value="050" data-select2-id="38">Bangladesh</option>
                            <option value="504" data-select2-id="39">Morocco</option>
                            <option value="784" data-select2-id="40">United Arab Emirates</option>
                            <option value="682" data-select2-id="41">Saudi Arabia</option>
                        </optgroup>
                        <optgroup label="All Countries" data-select2-id="">
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
                    <select name="Relocation" id="Relocation" required="required" class="select2-hidden-accessible" data-select2-id="Relocation" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" selected="" data-select2-id="">Select Option</option>
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
                    <select name="Income" id="Income" required="required" class="select2-hidden-accessible" data-select2-id="Income" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="117" data-select2-id="407">up to 15k</option>
                        <option value="118" data-select2-id="408">15,000 - 25,000</option>
                        <option value="119" data-select2-id="409">25,000 - 50,000</option>
                        <option value="120" data-select2-id="410">over 50,000</option>
                        <option value="121" data-select2-id="411">Prefer not to say</option>
                    </select>
                    
                </div>
                <span id="Income-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="MarryIn-group" class="form-group has-feedback form-control-group">
                <label for="MarryIn" class="control-label"><span class="required">*</span> I am Looking to Marry</label>
                <div class="controls">
                    <select name="MarryIn" id="MarryIn" required="required" class="select2-hidden-accessible" data-select2-id="MarryIn" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="184" data-select2-id="413">As soon as possible</option>
                        <option value="185" data-select2-id="414">This year</option>
                        <option value="186" data-select2-id="415">Next year</option>
                        <option value="187" data-select2-id="416">Unsure</option>
                    </select>
                    
                </div>
                <span id="MarryIn-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="MaritalStatus-group" class="form-group has-feedback form-control-group">
                <label for="MaritalStatus" class="control-label"><span class="required">*</span> Marital Status</label>
                <div class="controls">
                    <select name="MaritalStatus" id="MaritalStatus" required="required" class="select2-hidden-accessible" data-select2-id="MaritalStatus" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="122" data-select2-id="418">Never married</option>
                        <option value="123" data-select2-id="419">Legally separated</option>
                        <option value="124" data-select2-id="420">Divorced</option>
                        <option value="125" data-select2-id="421">Widowed</option>
                        <option value="282" data-select2-id="422">Anulled</option>
                    </select>
                    
                </div>
                <span id="MaritalStatus-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Children-group" class="form-group has-feedback form-control-group">
                <label for="Children" class="control-label"><span class="required">*</span> Would I like to have Children?</label>
                <div class="controls">
                    <select name="Children" id="Children" required="required" class="select2-hidden-accessible" data-select2-id="Children" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="127" data-select2-id="424">No</option>
                        <option value="126" data-select2-id="425">Yes</option>
                        <option value="389" data-select2-id="426">Unsure</option>
                    </select>
                    
                </div>
                <span id="Children-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="HaveChildren-group" class="form-group has-feedback form-control-group">
                <label for="HaveChildren" class="control-label"><span class="required">*</span> Do I have children?</label>
                <div class="controls">
                    <select name="HaveChildren" id="HaveChildren" required="required" class="select2-hidden-accessible" data-select2-id="HaveChildren" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" data-select2-id="">Select Option</option>
                        <option value="129" data-select2-id="428">No</option>
                        <option value="128" data-select2-id="429">Yes</option>
                        <option value="397" data-select2-id="430">I have one child</option>
                        <option value="405" data-select2-id="431">I have two children</option>
                        <option value="413" data-select2-id="432">I have three children</option>
                        <option value="421" data-select2-id="433">I have more than three children</option>
                    </select>
                    
                </div>
                <span id="HaveChildren-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Living-group" class="form-group has-feedback form-control-group">
                <label for="Living" class="control-label"><span class="required">*</span> My Living Arrangements?</label>
                <div class="controls">
                    <select name="Living" id="Living" required="required" class="select2-hidden-accessible" data-select2-id="Living" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="130" data-select2-id="435">I Live Alone</option>
                        <option value="131" data-select2-id="436">I Live With Friends</option>
                        <option value="132" data-select2-id="437">I Live With Family</option>
                        <option value="133" data-select2-id="438">Other</option>
                    </select>
                    
                </div>
                <span id="Living-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Height-group" class="form-group has-feedback form-control-group">
                <label for="Height" class="control-label"><span class="required">*</span> My Height</label>
                <div class="controls">
                    <select name="Height" id="Height" required="required" class="form-control-values select2-hidden-accessible" data-select2-id="Height" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="1.37" data-select2-id="283">1.37m (4' 6")</option>
                        <option value="1.38" data-select2-id="284">1.38m</option>
                        <option value="1.39" data-select2-id="285">1.39m</option>
                        <option value="1.40" data-select2-id="286">1.40m (4' 7")</option>
                        <option value="1.41" data-select2-id="287">1.41m</option>
                        <option value="1.42" data-select2-id="288">1.42m (4' 8")</option>
                        <option value="1.43" data-select2-id="289">1.43m</option>
                        <option value="1.44" data-select2-id="290">1.44m</option>
                        <option value="1.45" data-select2-id="291">1.45m (4' 9")</option>
                        <option value="1.46" data-select2-id="292">1.46m</option>
                        <option value="1.47" data-select2-id="293">1.47m (4' 10")</option>
                        <option value="1.48" data-select2-id="294">1.48m</option>
                        <option value="1.49" data-select2-id="295">1.49m</option>
                        <option value="1.50" data-select2-id="296">1.50m (4' 11")</option>
                        <option value="1.51" data-select2-id="297">1.51m</option>
                        <option value="1.52" data-select2-id="298">1.52m (5' 0")</option>
                        <option value="1.53" data-select2-id="299">1.53m</option>
                        <option value="1.54" data-select2-id="300">1.54m</option>
                        <option value="1.55" data-select2-id="301">1.55m (5' 1")</option>
                        <option value="1.56" data-select2-id="302">1.56m</option>
                        <option value="1.57" data-select2-id="303">1.57m (5' 2")</option>
                        <option value="1.58" data-select2-id="304">1.58m</option>
                        <option value="1.59" data-select2-id="305">1.59m</option>
                        <option value="1.60" data-select2-id="306">1.60m (5' 3")</option>
                        <option value="1.61" data-select2-id="307">1.61m</option>
                        <option value="1.62" data-select2-id="308">1.62m</option>
                        <option value="1.63" data-select2-id="309">1.63m (5' 4")</option>
                        <option value="1.64" data-select2-id="310">1.64m</option>
                        <option value="1.65" data-select2-id="311">1.65m (5' 5")</option>
                        <option value="1.66" data-select2-id="312">1.66m</option>
                        <option value="1.67" data-select2-id="313">1.67m</option>
                        <option value="1.68" data-select2-id="314">1.68m (5' 6")</option>
                        <option value="1.69" data-select2-id="315">1.69m</option>
                        <option value="1.70" data-select2-id="316">1.70m (5' 7")</option>
                        <option value="1.71" data-select2-id="317">1.71m</option>
                        <option value="1.72" data-select2-id="318">1.72m</option>
                        <option value="1.73" data-select2-id="319">1.73m (5' 8")</option>
                        <option value="1.74" data-select2-id="320">1.74m</option>
                        <option value="1.75" data-select2-id="321">1.75m (5' 9")</option>
                        <option value="1.76" data-select2-id="322">1.76m</option>
                        <option value="1.77" data-select2-id="323">1.77m</option>
                        <option value="1.78" data-select2-id="324">1.78m (5' 10")</option>
                        <option value="1.79" data-select2-id="325">1.79m</option>
                        <option value="1.80" data-select2-id="326">1.80m (5' 11")</option>
                        <option value="1.81" data-select2-id="327">1.81m</option>
                        <option value="1.82" data-select2-id="328">1.82m</option>
                        <option value="1.83" data-select2-id="329">1.83m (6' 0")</option>
                        <option value="1.84" data-select2-id="330">1.84m</option>
                        <option value="1.85" data-select2-id="331">1.85m (6' 1")</option>
                        <option value="1.86" data-select2-id="332">1.86m</option>
                        <option value="1.87" data-select2-id="333">1.87m</option>
                        <option value="1.88" data-select2-id="334">1.88m (6' 2")</option>
                        <option value="1.89" data-select2-id="335">1.89m</option>
                        <option value="1.90" data-select2-id="336">1.90m</option>
                        <option value="1.91" data-select2-id="337">1.91m (6' 3")</option>
                        <option value="1.92" data-select2-id="338">1.92m</option>
                        <option value="1.93" data-select2-id="339">1.93m (6' 4")</option>
                        <option value="1.94" data-select2-id="340">1.94m</option>
                        <option value="1.95" data-select2-id="341">1.95m</option>
                        <option value="1.96" data-select2-id="342">1.96m (6' 5")</option>
                        <option value="1.97" data-select2-id="343">1.97m</option>
                        <option value="1.98" data-select2-id="344">1.98m (6' 6")</option>
                        <option value="1.99" data-select2-id="345">1.99m</option>
                        <option value="2.00" data-select2-id="346">2.00m</option>
                        <option value="2.01" data-select2-id="347">2.01m (6' 7")</option>
                        <option value="2.02" data-select2-id="348">2.02m</option>
                        <option value="2.03" data-select2-id="349">2.03m (6' 8")</option>
                        <option value="2.04" data-select2-id="350">2.04m</option>
                        <option value="2.05" data-select2-id="351">2.05m</option>
                        <option value="2.06" data-select2-id="352">2.06m (6' 9")</option>
                        <option value="2.07" data-select2-id="353">2.07m</option>
                        <option value="2.08" data-select2-id="354">2.08m (6' 10")</option>
                        <option value="2.09" data-select2-id="355">2.09m</option>
                        <option value="2.10" data-select2-id="356">2.10m</option>
                        <option value="2.11" data-select2-id="357">2.11m (6' 11")</option>
                        <option value="2.12" data-select2-id="358">2.12m</option>
                        <option value="2.13" data-select2-id="359">2.13m (7' 0")</option>
                        <option value="2.14" data-select2-id="360">2.14m</option>
                        <option value="2.15" data-select2-id="361">2.15m</option>
                        <option value="2.16" data-select2-id="362">2.16m (7' 1")</option>
                    </select>
                   
                </div>
                <span id="Height-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Build-group" class="form-group has-feedback form-control-group">
                <label for="Build" class="control-label"><span class="required">*</span> My Build</label>
                <div class="controls">
                    <select name="Build" id="Build" required="required" class="select2-hidden-accessible" data-select2-id="Build" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value=""  data-select2-id="">Select Option</option>
                        <option value="134" data-select2-id="441">Petite</option>
                        <option value="135" data-select2-id="442">Slim</option>
                        <option value="137" data-select2-id="443">Athletic</option>
                        <option value="136" data-select2-id="444">Medium</option>
                        <option value="138" data-select2-id="445">Muscular</option>
                        <option value="139" data-select2-id="446">Large</option>
                    </select>
                    
                </div>
                <span id="Build-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Hair-group" class="form-group has-feedback form-control-group">
                <label for="Hair" class="control-label"><span class="required">*</span> My Hair Colour</label>
                <div class="controls">
                    <select name="Hair" id="Hair" required="required" class="form-control-values select2-hidden-accessible" data-select2-id="Hair" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
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
                <span id="Hair-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="EyeColour-group" class="form-group has-feedback form-control-group">
                <label for="EyeColour" class="control-label"><span class="required">*</span> Colour of My Eyes</label>
                <div class="controls">
                    <select name="EyeColour" id="EyeColour" required="required" class="select2-hidden-accessible" data-select2-id="EyeColour" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" selected="" data-select2-id="28">Select Option</option>
                        <option value="149" data-select2-id="449">Blue</option>
                        <option value="148" data-select2-id="450">Brown</option>
                        <option value="150" data-select2-id="451">Green</option>
                        <option value="152" data-select2-id="452">Grey</option>
                        <option value="151" data-select2-id="453">Hazel</option>
                        <option value="153" data-select2-id="454">Other</option>
                    </select>
                   
                </div>
                <span id="EyeColour-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div id="Smoke-group" class="form-group has-feedback form-control-group">
                <label for="Smoke" class="control-label"><span class="required">*</span> Do I Smoke?</label>
                <div class="controls">
                    <select name="Smoke" id="Smoke" required="required" class="select2-hidden-accessible" data-select2-id="Smoke" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" selected="" data-select2-id="30">Select Option</option>
                        <option value="155" data-select2-id="456">No</option>
                        <option value="154" data-select2-id="457">Yes</option>
                        <option value="337" data-select2-id="458">Sometimes</option>
                        <option value="366" data-select2-id="459">I've stopped smoking</option>
                    </select>
                    
                </div>
                <span id="Smoke-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
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
                <span id="Disabilities-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
                <span class="help-block with-errors" aria-hidden="true"></span>
            </div>

            <div>
                <span class="pull-left required stepsRequired">* Required Field</span>
            </div>
           
    </div>




    <div class="tab">Religion:
    
    <div id="Religiosness-group" class="form-group has-feedback form-control-group">
        <label for="Religiosness" class="control-label"><span class="required">*</span> Religiousness</label>
        <div class="controls">
            <select name="Religiosness" id="Religiosness" required="required" class="select2-hidden-accessible" data-select2-id="Religiosness" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="4">Select Option</option>
                <option value="122" data-select2-id="22">Very religious</option>
                <option value="188" data-select2-id="23">Religious</option>
                <option value="123" data-select2-id="24">Somewhat religious</option>
                <option value="142" data-select2-id="25">Not religious</option>
                <option value="152" data-select2-id="26">Prefer not to say</option>
            </select>
            
        </div>
        
    </div>

    <div id="Sect-group" class="form-group has-feedback form-control-group">
        <label for="Sect" class="control-label"><span class="required">*</span> My Sect</label>
        <div class="controls">
            <select name="Sect" id="Sect" required="required" class="select2-hidden-accessible" data-select2-id="Sect" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="6">Select Option</option>
                <option value="284" data-select2-id="28">Just Muslim</option>
                <option value="17" data-select2-id="29">Shia</option>
                <option value="16" data-select2-id="30">Sunni</option>
                <option value="362" data-select2-id="31">Other - please ask me</option>
            </select>
            
        </div>
        
    </div>

    <div id="Hijab-group" class="form-group has-feedback form-control-group">
        <label for="Hijab" class="control-label"><span class="required">*</span> Do you prefer Hijab/Niqab?</label>
        <div class="controls">
            <select name="Hijab" id="Hijab" required="required" class="select2-hidden-accessible" data-select2-id="Hijab" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="8">Select Option</option>
                <option value="18" data-select2-id="33">Yes Hijab</option>
                <option value="553" data-select2-id="34">Yes Niqab</option>
                <option value="19" data-select2-id="35">No</option>
                <option value="20" data-select2-id="36">Prefer not to say</option>
            </select>
            
        </div>
        
    </div>

    <div id="Beard-group" class="form-group has-feedback form-control-group">
        <label for="Beard" class="control-label"><span class="required">*</span> Do you have a beard?</label>
        <div class="controls">
            <select name="Beard" id="Beard" required="required" class="select2-hidden-accessible" data-select2-id="Beard" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="10">Select Option</option>
                <option value="22" data-select2-id="38">No</option>
                <option value="21" data-select2-id="39">Yes</option>
                <option value="23" data-select2-id="40">Prefer not to say</option>
            </select>
            
        </div>
        
    </div>

    <div id="Convert-group" class="form-group has-feedback form-control-group">
        <label for="Convert" class="control-label"><span class="required">*</span> Are You a Revert?</label>
        <div class="controls">
            <select name="Convert" id="Convert" required="required" class="select2-hidden-accessible" data-select2-id="Convert" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="12">Select Option</option>
                <option value="175" data-select2-id="42">No</option>
                <option value="174" data-select2-id="43">Yes</option>
            </select>
            
        </div>
        
    </div>

    <div id="Halaal-group" class="form-group has-feedback form-control-group">
        <label for="Halaal" class="control-label"><span class="required">*</span> Do You Keep Halal?</label>
        <div class="controls">
            <select name="Halaal" id="Halaal" required="required" class="select2-hidden-accessible" data-select2-id="Halaal" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="14">Select Option</option>
                <option value="176" data-select2-id="45">I Always Keep Halal</option>
                <option value="177" data-select2-id="46">Usually Keep Halal</option>
                <option value="178" data-select2-id="47">I Keep Halal at Home Only</option>
                <option value="179" data-select2-id="48">I Do Not Keep halal</option>
            </select>
            
        </div>
        
    </div>

    <div id="Salaah-group" class="form-group has-feedback form-control-group">
        <label for="Salaah" class="control-label"><span class="required">*</span> Do You Perform Salaah?</label>
        <div class="controls">
            <select name="Salaah" id="Salaah" required="required" class="select2-hidden-accessible" data-select2-id="Salaah" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                <option value="" selected="" data-select2-id="16">Select Option</option>
                <option value="180" data-select2-id="50">Always</option>
                <option value="181" data-select2-id="51">Usually</option>
                <option value="182" data-select2-id="52">Sometimes</option>
                <option value="183" data-select2-id="53">Never</option>
            </select>
            
        </div>
        
    </div>

    </div>

    <div class="tab">

  
    <div id="FirstName-group" class="form-group has-feedback form-control-group">
        <label for="FirstName" class="control-label"><span class="required">*</span> First Name</label>
        <div class="controls">
            <input name="FirstName" id="FirstName" type="text" required="required" class="form-control" />
        </div>
        <span id="FirstName-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="LastName-group" class="form-group has-feedback form-control-group">
        <label for="LastName" class="control-label"><span class="required">*</span> Last Name</label>
        <div class="controls">
            <input name="LastName" id="LastName" type="text" required="required" class="form-control" />
        </div>
        <span id="LastName-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="Address-group" class="form-group has-feedback form-control-group">
        <label for="Address" class="control-label"><span class="required">*</span> Address</label>
        <div class="controls">
            <input name="Address" id="Address" type="text" required="required" class="form-control" />
        </div>
        <span id="Address-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="City-group" class="form-group has-feedback form-control-group">
        <label for="City" class="control-label"><span class="required">*</span> City</label>
        <div class="controls">
            <input name="City" id="City" type="text" required="required" class="form-control" />
        </div>
        <span id="City-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="Country-group" class="form-group has-feedback form-control-group">
        <label for="Country" class="control-label"><span class="required">*</span> Country</label>
        <div class="controls">
            <select name="Country" id="Country" class="form-control-values select2-hidden-accessible" data-select2-id="Country" tabindex="-1" aria-hidden="true">
                <option value="">Select Country</option>
                <optgroup label="Favourites">
                    <option value="826" selected="">United Kingdom</option>
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
                    <option value="826" selected="" data-select2-id="407">United Kingdom</option>
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
                </optgroup>
            </select>
            
        </div>
        
    </div>

     <div id="City-group" class="form-group has-feedback form-control-group">
        <label for="Area" class="control-label"><span class="required">*</span> Area/State</label>
        <div class="controls">
            <input name="Area" id="Area" type="text" required="required" class="form-control" />
        </div>
        <span id="Area-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    {{-- <div id="Area-group" class="form-group has-feedback form-control-group">
        <label for="Area" class="control-label"><span class="required">*</span> Area/State</label>
        <div class="controls">
            <select name="Area" id="Area" class="select2-hidden-accessible" data-select2-id="Area" tabindex="-1" aria-hidden="true" required="required">
                <option value="" selected="" data-select2-id="409">Select Area/State</option>
                <option value="73">England</option>
                <option value="74">Northern Ireland</option>
                <option value="75">Scotland</option>
                <option value="76">Wales</option>
            </select>
            
        </div>
        <span id="Area-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div> --}}

   

    <div id="PostCode-group" class="form-group has-feedback form-control-group">
        <label for="PostCode" class="control-label"><span class="required">*</span> Post/Zip Code</label>
        <div class="controls">
            <input name="PostCode" id="PostCode" type="text" required="required" class="form-control" />
        </div>
        <span id="PostCode-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="ContactTel-group" class="form-group has-feedback form-control-group">
        <label for="ContactTel" class="control-label"><span class="required">*</span> Contact Tel</label>
        <div class="controls">
            <input name="ContactTel" id="ContactTel" type="tel" required="required" class="form-control" />
        </div>
        <span id="ContactTel-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="MobileTel-group" class="form-group has-feedback form-control-group">
        <label for="MobileTel" class="control-label"> Mobile Tel</label>
        <div class="controls">
            <input name="MobileTel" id="MobileTel" type="tel" value="" class="form-control" />
        </div>
        <span id="MobileTel-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>

    <div id="DOB-group" class="form-group has-feedback form-control-group">
        <label for="DOB" class="control-label"><span class="required">*</span> Date of Birth</label>
        <div class="controls">
            <div class="row">
                <div class="col-xs-3">
                    <select name="DOB[day]" id="DOB-day" class="select2-hidden-accessible" data-select2-id="DOB-day" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" data-select2-id="">Select Day</option>
                        <option value="1" data-select2-id="9">1</option>
                        <option value="2" data-select2-id="277">2</option>
                        <option value="3" data-select2-id="278">3</option>
                        <option value="4" data-select2-id="279">4</option>
                        <option value="5" data-select2-id="280">5</option>
                        <option value="6" data-select2-id="281">6</option>
                        <option value="7" data-select2-id="282">7</option>
                        <option value="8" data-select2-id="283">8</option>
                        <option value="9" data-select2-id="284">9</option>
                        <option value="10" data-select2-id="285">10</option>
                        <option value="11" data-select2-id="286">11</option>
                        <option value="12" data-select2-id="287">12</option>
                        <option value="13" data-select2-id="288">13</option>
                        <option value="14" data-select2-id="289">14</option>
                        <option value="15" data-select2-id="290">15</option>
                        <option value="16" data-select2-id="291">16</option>
                        <option value="17" data-select2-id="292">17</option>
                        <option value="18" data-select2-id="293">18</option>
                        <option value="19" data-select2-id="294">19</option>
                        <option value="20" data-select2-id="295">20</option>
                        <option value="21" data-select2-id="296">21</option>
                        <option value="22" data-select2-id="297">22</option>
                        <option value="23" data-select2-id="298">23</option>
                        <option value="24" data-select2-id="299">24</option>
                        <option value="25" data-select2-id="300">25</option>
                        <option value="26" data-select2-id="301">26</option>
                        <option value="27" data-select2-id="302">27</option>
                        <option value="28" data-select2-id="303">28</option>
                        <option value="29" data-select2-id="304">29</option>
                        <option value="30" data-select2-id="305">30</option>
                        <option value="31" data-select2-id="306">31</option>
                    </select>
                    
                </div>
                <div class="col-xs-5">
                    <select name="DOB[month]" id="DOB-month" class="select2-hidden-accessible" data-select2-id="DOB-month" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" data-select2-id="">Select Month</option>
                        <option value="1" data-select2-id="308">January</option>
                        <option value="2" data-select2-id="309">February</option>
                        <option value="3" data-select2-id="310">March</option>
                        <option value="4" data-select2-id="311">April</option>
                        <option value="5" data-select2-id="312">May</option>
                        <option value="6" data-select2-id="313">June</option>
                        <option value="7" data-select2-id="314">July</option>
                        <option value="8" data-select2-id="315">August</option>
                        <option value="9" data-select2-id="316">September</option>
                        <option value="10" data-select2-id="317">October</option>
                        <option value="11" data-select2-id="318">November</option>
                        <option value="12" data-select2-id="319">December</option>
                    </select>
                    
                </div>
                <div class="col-xs-4">
                    <select name="DOB[year]" id="DOB-year" class="select2-hidden-accessible" data-select2-id="DOB-year" tabindex="-1" aria-hidden="true" data-error="Please fill out this field.">
                        <option value="" data-select2-id="">Select Year</option>
                        <option value="2002" data-select2-id="321"></option>
                        <option value="2001" data-select2-id="322">2001</option>
                        <option value="2000" data-select2-id="323">2000</option>
                        <option value="1999" data-select2-id="324">1999</option>
                        <option value="1998" data-select2-id="325">1998</option>
                        <option value="1997" data-select2-id="326">1997</option>
                        <option value="1996" data-select2-id="327">1996</option>
                        <option value="1995" data-select2-id="328">1995</option>
                        <option value="1994" data-select2-id="329">1994</option>
                        <option value="1993" data-select2-id="330">1993</option>
                        <option value="1992" data-select2-id="331">1992</option>
                        <option value="1991" data-select2-id="332">1991</option>
                        <option value="1990" data-select2-id="333">1990</option>
                        <option value="1989" data-select2-id="334">1989</option>
                        <option value="1988" data-select2-id="335">1988</option>
                        <option value="1987" data-select2-id="336">1987</option>
                        <option value="1986" data-select2-id="337">1986</option>
                        <option value="1985" data-select2-id="338">1985</option>
                        <option value="1984" data-select2-id="339">1984</option>
                        <option value="1983" data-select2-id="340">1983</option>
                        <option value="1982" data-select2-id="341">1982</option>
                        <option value="1981" data-select2-id="342">1981</option>
                        <option value="1980" data-select2-id="343">1980</option>
                        <option value="1979" data-select2-id="344">1979</option>
                        <option value="1978" data-select2-id="345">1978</option>
                        <option value="1977" data-select2-id="346">1977</option>
                        <option value="1976" data-select2-id="347">1976</option>
                        <option value="1975" data-select2-id="348">1975</option>
                        <option value="1974" data-select2-id="349">1974</option>
                        <option value="1973" data-select2-id="350">1973</option>
                        <option value="1972" data-select2-id="351">1972</option>
                        <option value="1971" data-select2-id="352">1971</option>
                        <option value="1970" data-select2-id="353">1970</option>
                        <option value="1969" data-select2-id="354">1969</option>
                        <option value="1968" data-select2-id="355">1968</option>
                        <option value="1967" data-select2-id="356">1967</option>
                        <option value="1966" data-select2-id="357">1966</option>
                        <option value="1965" data-select2-id="358">1965</option>
                        <option value="1964" data-select2-id="359">1964</option>
                        <option value="1963" data-select2-id="360">1963</option>
                        <option value="1962" data-select2-id="361">1962</option>
                        <option value="1961" data-select2-id="362">1961</option>
                        <option value="1960" data-select2-id="363">1960</option>
                        <option value="1959" data-select2-id="364">1959</option>
                        <option value="1958" data-select2-id="365">1958</option>
                        <option value="1957" data-select2-id="366">1957</option>
                        <option value="1956" data-select2-id="367">1956</option>
                        <option value="1955" data-select2-id="368">1955</option>
                        <option value="1954" data-select2-id="369">1954</option>
                        <option value="1953" data-select2-id="370">1953</option>
                        <option value="1952" data-select2-id="371">1952</option>
                        <option value="1951" data-select2-id="372">1951</option>
                        <option value="1950" data-select2-id="373">1950</option>
                        <option value="1949" data-select2-id="374">1949</option>
                        <option value="1948" data-select2-id="375">1948</option>
                        <option value="1947" data-select2-id="376">1947</option>
                        <option value="1946" data-select2-id="377">1946</option>
                        <option value="1945" data-select2-id="378">1945</option>
                        <option value="1944" data-select2-id="379">1944</option>
                        <option value="1943" data-select2-id="380">1943</option>
                        <option value="1942" data-select2-id="381">1942</option>
                        <option value="1941" data-select2-id="382">1941</option>
                        <option value="1940" data-select2-id="383">1940</option>
                        <option value="1939" data-select2-id="384">1939</option>
                        <option value="1938" data-select2-id="385">1938</option>
                        <option value="1937" data-select2-id="386">1937</option>
                        <option value="1936" data-select2-id="387">1936</option>
                        <option value="1935" data-select2-id="388">1935</option>
                        <option value="1934" data-select2-id="389">1934</option>
                        <option value="1933" data-select2-id="390">1933</option>
                        <option value="1932" data-select2-id="391">1932</option>
                        <option value="1931" data-select2-id="392">1931</option>
                        <option value="1930" data-select2-id="393">1930</option>
                        <option value="1929" data-select2-id="394">1929</option>
                        <option value="1928" data-select2-id="395">1928</option>
                        <option value="1927" data-select2-id="396">1927</option>
                        <option value="1926" data-select2-id="397">1926</option>
                        <option value="1925" data-select2-id="398">1925</option>
                        <option value="1924" data-select2-id="399">1924</option>
                        <option value="1923" data-select2-id="400">1923</option>
                        <option value="1922" data-select2-id="401">1922</option>
                        <option value="1921" data-select2-id="402">1921</option>
                        <option value="1920" data-select2-id="403">1920</option>
                    </select>
                    
                </div>
            </div>
        </div>
        <span id="DOB-span-success" class="smicon-new form-control-feedback smicon-info male span-info-label" data-toggle="tooltip" data-placement="right" title="" data-original-title="" style="display: none;"></span>
        <span class="help-block with-errors" aria-hidden="true"></span>
    </div>
    </div>


    <div class="tab">
    
        <div class="uploadRow">
            <div class="pull-left uploadArea">
                <div class="panel panel-success dragbox-div dragbox-primary-div dropzone dz-clickable" data-isregister="false" data-showdialog="false" data-imagetype="primary">
                    <div class="dz-message">
                        <span class="plusicon"> + </span>
                        <br />

                        <span class="dropcontent"> Drop files here or click to upload.</span><br />
                    </div>
                </div>
            </div>
            <div class="pull-left picGuidelineArea">
                <div class="primaryPicGuide">
                    <div class="col-sm-5">
                        <ul>
                            <li>
                                <img src="/images/guideline-images/primarypic.jpg" class="img-responsive" />
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
                                    <img src="/images/guideline-images/blur.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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
                                    <img src="/images/guideline-images/bodyshot.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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
                                    <img src="/images/guideline-images/cartoon.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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
                                    <img src="/images/guideline-images/group.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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
                                    <img src="/images/guideline-images/offencive.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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
                                    <img src="/images/guideline-images/scenic.jpg" class="img-responsive img-profile-picture-guide-preview-img imageonload" />
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

    <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
     </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>



            </div>
</form>
                        
                        <script>
                            var currentTab = 0; // Current tab is set to be the first tab (0)
                            showTab(currentTab); // Display the current tab
                            
                            function showTab(n) {
                                // This function will display the specified tab of the form...
                                var x = document.getElementsByClassName("tab");
                                x[n].style.display = "block";
                                //... and fix the Previous/Next buttons:
                                if (n == 0) {
                                    document.getElementById("prevBtn").style.display = "none";
                                } else {
                                    document.getElementById("prevBtn").style.display = "inline";
                                }
                                if (n == (x.length - 1)) {
                                    document.getElementById("nextBtn").innerHTML = "Submit";
                                } else {
                                    document.getElementById("nextBtn").innerHTML = "Next";
                                }
                                //... and run a function that will display the correct step indicator:
                                fixStepIndicator(n)
                            }
                            
                            function nextPrev(n) {
                                // This function will figure out which tab to display
                                var x = document.getElementsByClassName("tab");
                                // Exit the function if any field in the current tab is invalid:
                                if (n == 1 && !validateForm()) return false;
                                // Hide the current tab:
                                x[currentTab].style.display = "none";
                                // Increase or decrease the current tab by 1:
                                currentTab = currentTab + n;
                                // if you have reached the end of the form...
                                if (currentTab >= x.length) {
                                    // ... the form gets submitted:
                                    document.getElementById("regForm").submit();
                                    return false;
                                }
                                // Otherwise, display the correct tab:
                                showTab(currentTab);
                            }
                            
                            function validateForm() {
                                // This function deals with validation of the form fields
                                var x, y, i, valid = true;
                                x = document.getElementsByClassName("tab");
                                y = x[currentTab].getElementsByTagName("input");
                                // A loop that checks every input field in the current tab:
                                for (i = 0; i < y.length; i++) {
                                    // If a field is empty...
                                    if (y[i].value == "") {
                                        // add an "invalid" class to the field:
                                        y[i].className += " invalid";
                                        // and set the current valid status to false
                                        valid = false;
                                    }
                                }
                                // If the valid status is true, mark the step as finished and valid:
                                if (valid) {
                                    document.getElementsByClassName("step")[currentTab].className += " finish";
                                }
                                return valid; // return the valid status
                            }
                            
                            function fixStepIndicator(n) {
                                // This function removes the "active" class of all steps...
                                var i, x = document.getElementsByClassName("step");
                                for (i = 0; i < x.length; i++) {
                                    x[i].className = x[i].className.replace(" active", "");
                                }
                                //... and adds the "active" class on the current step:
                                x[n].className += " active";
                            }
                        </script>
                        
 @endsection




                        