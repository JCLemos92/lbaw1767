<?php
include_once('includes/init.php');
global $dbh;
if(isset($_POST['SubmitButton'])){
	echo 'submited';
	if(!isset($_SESSION['username']) && !$_SESSION['username'] != ''){
   	if (!$_POST['uname'] | !$_POST['psw'] | !$_POST['cpsw']) {
        $_SESSION['error_messages'][] = 'You did not complete all of the required fields';
    	}
    	else {
    		if (!get_magic_quotes_gpc()) {
        		$_POST['uname'] = addslashes($_POST['uname']);
    		}
    		if($_POST['psw'] == $_POST['cpsw']) {
    			$usercheck = $_POST['uname'];
    
    			$check = $dbh->prepare("SELECT username FROM users WHERE username = ?");
    
    			$check->execute(array($usercheck));
    
    			$check2 = $check->fetch();
    
    			if ($check2 != 0) {
    				$_SESSION['error_messages'][] = 'Sorry, the username ' . $_POST['uname'] . ' is already in use.';
    			}
    	
    			else {
    				$_POST['psw'] = md5($_POST['psw']);
    
    				if (!get_magic_quotes_gpc()) {
        				$_POST['psw'] = addslashes($_POST['psw']);
        				$_POST['uname'] = addslashes($_POST['uname']);
    				}
    
    				$insert = $dbh->prepare("INSERT INTO users (username, password, name, lastName, gender, country, email)    VALUES ('" . $_POST['uname'] . "', '" . $_POST['psw']. "', '" . $_POST['name'] . "', '" . $_POST['lname'] . "', '" . $_POST['gender'] . "', '" . $_POST['country'] . "', '" . $_POST['email'] . "')");
    
    				$insert->execute();
    				$_SESSION['success_messages'][] = "Resgister Successful!";
    			}
    		}
    		else {
    			$_SESSION['error_messages'][] = 'Passwords did not match.';
    		}
    	}
    	header('Location: ./');
 	}
 }
else{
include_once('header.php');?>
<form class="modal-content animate modal-lg" action="register.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <h3> Register </h3><br>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required><p></p>

      <label for="male"><b>Male</b></label>
      <input type="radio" name="gender" id="male" value="male">
      <label for="female">&ensp;&ensp;<b>Female</b></label>
      <input type="radio" name="gender" id="female" value="female">
      <label for="other"><b>&ensp;&ensp;Other</b></label>
      <input type="radio" name="gender" id="other" value="other"><p></p>

      <label for="country"><b>Country&ensp;&ensp;</b></label><select name="country" id="country">

      <option value="0" label="Select a country" selected="selected">Select a country</option>
      <optgroup id="country-optgroup-Africa" label="Africa">
      <option value="DZ" label="Algeria">Algeria</option>
      <option value="AO" label="Angola">Angola</option>
      <option value="BJ" label="Benin">Benin</option>
      <option value="BW" label="Botswana">Botswana</option>
      <option value="BF" label="Burkina Faso">Burkina Faso</option>
      <option value="BI" label="Burundi">Burundi</option>
      <option value="CM" label="Cameroon">Cameroon</option>
      <option value="CV" label="Cape Verde">Cape Verde</option>
      <option value="CF" label="Central African Republic">Central African Republic</option>
      <option value="TD" label="Chad">Chad</option>
      <option value="KM" label="Comoros">Comoros</option>
      <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
      <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
      <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
      <option value="DJ" label="Djibouti">Djibouti</option>
      <option value="EG" label="Egypt">Egypt</option>
      <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
      <option value="ER" label="Eritrea">Eritrea</option>
      <option value="ET" label="Ethiopia">Ethiopia</option>
      <option value="GA" label="Gabon">Gabon</option>
      <option value="GM" label="Gambia">Gambia</option>
      <option value="GH" label="Ghana">Ghana</option>
      <option value="GN" label="Guinea">Guinea</option>
      <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
      <option value="KE" label="Kenya">Kenya</option>
      <option value="LS" label="Lesotho">Lesotho</option>
      <option value="LR" label="Liberia">Liberia</option>
      <option value="LY" label="Libya">Libya</option>
      <option value="MG" label="Madagascar">Madagascar</option>
      <option value="MW" label="Malawi">Malawi</option>
      <option value="ML" label="Mali">Mali</option>
      <option value="MR" label="Mauritania">Mauritania</option>
      <option value="MU" label="Mauritius">Mauritius</option>
      <option value="YT" label="Mayotte">Mayotte</option>
      <option value="MA" label="Morocco">Morocco</option>
      <option value="MZ" label="Mozambique">Mozambique</option>
      <option value="NA" label="Namibia">Namibia</option>
      <option value="NE" label="Niger">Niger</option>
      <option value="NG" label="Nigeria">Nigeria</option>
      <option value="RW" label="Rwanda">Rwanda</option>
      <option value="RE" label="Réunion">Réunion</option>
      <option value="SH" label="Saint Helena">Saint Helena</option>
      <option value="SN" label="Senegal">Senegal</option>
      <option value="SC" label="Seychelles">Seychelles</option>
      <option value="SL" label="Sierra Leone">Sierra Leone</option>
      <option value="SO" label="Somalia">Somalia</option>
      <option value="ZA" label="South Africa">South Africa</option>
      <option value="SD" label="Sudan">Sudan</option>
      <option value="SZ" label="Swaziland">Swaziland</option>
      <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
      <option value="TZ" label="Tanzania">Tanzania</option>
      <option value="TG" label="Togo">Togo</option>
      <option value="TN" label="Tunisia">Tunisia</option>
      <option value="UG" label="Uganda">Uganda</option>
      <option value="EH" label="Western Sahara">Western Sahara</option>
      <option value="ZM" label="Zambia">Zambia</option>
      <option value="ZW" label="Zimbabwe">Zimbabwe</option>
      </optgroup>
      <optgroup id="country-optgroup-Americas" label="Americas">
      <option value="AI" label="Anguilla">Anguilla</option>
      <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="AR" label="Argentina">Argentina</option>
      <option value="AW" label="Aruba">Aruba</option>
      <option value="BS" label="Bahamas">Bahamas</option>
      <option value="BB" label="Barbados">Barbados</option>
      <option value="BZ" label="Belize">Belize</option>
      <option value="BM" label="Bermuda">Bermuda</option>
      <option value="BO" label="Bolivia">Bolivia</option>
      <option value="BR" label="Brazil">Brazil</option>
      <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
      <option value="CA" label="Canada">Canada</option>
      <option value="KY" label="Cayman Islands">Cayman Islands</option>
      <option value="CL" label="Chile">Chile</option>
      <option value="CO" label="Colombia">Colombia</option>
      <option value="CR" label="Costa Rica">Costa Rica</option>
      <option value="CU" label="Cuba">Cuba</option>
      <option value="DM" label="Dominica">Dominica</option>
      <option value="DO" label="Dominican Republic">Dominican Republic</option>
      <option value="EC" label="Ecuador">Ecuador</option>
      <option value="SV" label="El Salvador">El Salvador</option>
      <option value="FK" label="Falkland Islands">Falkland Islands</option>
      <option value="GF" label="French Guiana">French Guiana</option>
      <option value="GL" label="Greenland">Greenland</option>
      <option value="GD" label="Grenada">Grenada</option>
      <option value="GP" label="Guadeloupe">Guadeloupe</option>
      <option value="GT" label="Guatemala">Guatemala</option>
      <option value="GY" label="Guyana">Guyana</option>
      <option value="HT" label="Haiti">Haiti</option>
      <option value="HN" label="Honduras">Honduras</option>
      <option value="JM" label="Jamaica">Jamaica</option>
      <option value="MQ" label="Martinique">Martinique</option>
      <option value="MX" label="Mexico">Mexico</option>
      <option value="MS" label="Montserrat">Montserrat</option>
      <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
      <option value="NI" label="Nicaragua">Nicaragua</option>
      <option value="PA" label="Panama">Panama</option>
      <option value="PY" label="Paraguay">Paraguay</option>
      <option value="PE" label="Peru">Peru</option>
      <option value="PR" label="Puerto Rico">Puerto Rico</option>
      <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
      <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="LC" label="Saint Lucia">Saint Lucia</option>
      <option value="MF" label="Saint Martin">Saint Martin</option>
      <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
      <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="SR" label="Suriname">Suriname</option>
      <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
      <option value="US" label="United States">United States</option>
      <option value="UY" label="Uruguay">Uruguay</option>
      <option value="VE" label="Venezuela">Venezuela</option>
      </optgroup>
      <optgroup id="country-optgroup-Asia" label="Asia">
      <option value="AF" label="Afghanistan">Afghanistan</option>
      <option value="AM" label="Armenia">Armenia</option>
      <option value="AZ" label="Azerbaijan">Azerbaijan</option>
      <option value="BH" label="Bahrain">Bahrain</option>
      <option value="BD" label="Bangladesh">Bangladesh</option>
      <option value="BT" label="Bhutan">Bhutan</option>
      <option value="BN" label="Brunei">Brunei</option>
      <option value="KH" label="Cambodia">Cambodia</option>
      <option value="CN" label="China">China</option>
      <option value="CY" label="Cyprus">Cyprus</option>
      <option value="GE" label="Georgia">Georgia</option>
      <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
      <option value="IN" label="India">India</option>
      <option value="ID" label="Indonesia">Indonesia</option>
      <option value="IR" label="Iran">Iran</option>
      <option value="IQ" label="Iraq">Iraq</option>
      <option value="IL" label="Israel">Israel</option>
      <option value="JP" label="Japan">Japan</option>
      <option value="JO" label="Jordan">Jordan</option>
      <option value="KZ" label="Kazakhstan">Kazakhstan</option>
      <option value="KW" label="Kuwait">Kuwait</option>
      <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
      <option value="LA" label="Laos">Laos</option>
      <option value="LB" label="Lebanon">Lebanon</option>
      <option value="MO" label="Macau SAR China">Macau SAR China</option>
      <option value="MY" label="Malaysia">Malaysia</option>
      <option value="MV" label="Maldives">Maldives</option>
      <option value="MN" label="Mongolia">Mongolia</option>
      <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
      <option value="NP" label="Nepal">Nepal</option>
      <option value="NT" label="Neutral Zone">Neutral Zone</option>
      <option value="KP" label="North Korea">North Korea</option>
      <option value="OM" label="Oman">Oman</option>
      <option value="PK" label="Pakistan">Pakistan</option>
      <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
      <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
      <option value="PH" label="Philippines">Philippines</option>
      <option value="QA" label="Qatar">Qatar</option>
      <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
      <option value="SG" label="Singapore">Singapore</option>
      <option value="KR" label="South Korea">South Korea</option>
      <option value="LK" label="Sri Lanka">Sri Lanka</option>
      <option value="SY" label="Syria">Syria</option>
      <option value="TW" label="Taiwan">Taiwan</option>
      <option value="TJ" label="Tajikistan">Tajikistan</option>
      <option value="TH" label="Thailand">Thailand</option>
      <option value="TL" label="Timor-Leste">Timor-Leste</option>
      <option value="TR" label="Turkey">Turkey</option>
      <option value="™" label="Turkmenistan">Turkmenistan</option>
      <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
      <option value="UZ" label="Uzbekistan">Uzbekistan</option>
      <option value="VN" label="Vietnam">Vietnam</option>
      <option value="YE" label="Yemen">Yemen</option>
      </optgroup>
      <optgroup id="country-optgroup-Europe" label="Europe">
      <option value="AL" label="Albania">Albania</option>
      <option value="AD" label="Andorra">Andorra</option>
      <option value="AT" label="Austria">Austria</option>
      <option value="BY" label="Belarus">Belarus</option>
      <option value="BE" label="Belgium">Belgium</option>
      <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="BG" label="Bulgaria">Bulgaria</option>
      <option value="HR" label="Croatia">Croatia</option>
      <option value="CY" label="Cyprus">Cyprus</option>
      <option value="CZ" label="Czech Republic">Czech Republic</option>
      <option value="DK" label="Denmark">Denmark</option>
      <option value="DD" label="East Germany">East Germany</option>
      <option value="EE" label="Estonia">Estonia</option>
      <option value="FO" label="Faroe Islands">Faroe Islands</option>
      <option value="FI" label="Finland">Finland</option>
      <option value="FR" label="France">France</option>
      <option value="DE" label="Germany">Germany</option>
      <option value="GI" label="Gibraltar">Gibraltar</option>
      <option value="GR" label="Greece">Greece</option>
      <option value="GG" label="Guernsey">Guernsey</option>
      <option value="HU" label="Hungary">Hungary</option>
      <option value="IS" label="Iceland">Iceland</option>
      <option value="IE" label="Ireland">Ireland</option>
      <option value="IM" label="Isle of Man">Isle of Man</option>
      <option value="IT" label="Italy">Italy</option>
      <option value="JE" label="Jersey">Jersey</option>
      <option value="LV" label="Latvia">Latvia</option>
      <option value="LI" label="Liechtenstein">Liechtenstein</option>
      <option value="LT" label="Lithuania">Lithuania</option>
      <option value="LU" label="Luxembourg">Luxembourg</option>
      <option value="MK" label="Macedonia">Macedonia</option>
      <option value="MT" label="Malta">Malta</option>
      <option value="FX" label="Metropolitan France">Metropolitan France</option>
      <option value="MD" label="Moldova">Moldova</option>
      <option value="MC" label="Monaco">Monaco</option>
      <option value="ME" label="Montenegro">Montenegro</option>
      <option value="NL" label="Netherlands">Netherlands</option>
      <option value="NO" label="Norway">Norway</option>
      <option value="PL" label="Poland">Poland</option>
      <option value="PT" label="Portugal">Portugal</option>
      <option value="RO" label="Romania">Romania</option>
      <option value="RU" label="Russia">Russia</option>
      <option value="SM" label="San Marino">San Marino</option>
      <option value="RS" label="Serbia">Serbia</option>
      <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
      <option value="SK" label="Slovakia">Slovakia</option>
      <option value="SI" label="Slovenia">Slovenia</option>
      <option value="ES" label="Spain">Spain</option>
      <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="SE" label="Sweden">Sweden</option>
      <option value="CH" label="Switzerland">Switzerland</option>
      <option value="UA" label="Ukraine">Ukraine</option>
      <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
      <option value="GB" label="United Kingdom">United Kingdom</option>
      <option value="VA" label="Vatican City">Vatican City</option>
      <option value="AX" label="Åland Islands">Åland Islands</option>
      </optgroup>
      <optgroup id="country-optgroup-Oceania" label="Oceania">
      <option value="AS" label="American Samoa">American Samoa</option>
      <option value="AQ" label="Antarctica">Antarctica</option>
      <option value="AU" label="Australia">Australia</option>
      <option value="BV" label="Bouvet Island">Bouvet Island</option>
      <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
      <option value="CX" label="Christmas Island">Christmas Island</option>
      <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
      <option value="CK" label="Cook Islands">Cook Islands</option>
      <option value="FJ" label="Fiji">Fiji</option>
      <option value="PF" label="French Polynesia">French Polynesia</option>
      <option value="TF" label="French Southern Territories">French Southern Territories</option>
      <option value="GU" label="Guam">Guam</option>
      <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
      <option value="KI" label="Kiribati">Kiribati</option>
      <option value="MH" label="Marshall Islands">Marshall Islands</option>
      <option value="FM" label="Micronesia">Micronesia</option>
      <option value="NR" label="Nauru">Nauru</option>
      <option value="NC" label="New Caledonia">New Caledonia</option>
      <option value="NZ" label="New Zealand">New Zealand</option>
      <option value="NU" label="Niue">Niue</option>
      <option value="NF" label="Norfolk Island">Norfolk Island</option>
      <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="PW" label="Palau">Palau</option>
      <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
      <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
      <option value="WS" label="Samoa">Samoa</option>
      <option value="SB" label="Solomon Islands">Solomon Islands</option>
      <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
      <option value="TK" label="Tokelau">Tokelau</option>
      <option value="TO" label="Tonga">Tonga</option>
      <option value="TV" label="Tuvalu">Tuvalu</option>
      <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
      <option value="VU" label="Vanuatu">Vanuatu</option>
      <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
      </optgroup>
      </select>
      <br><br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="cpsw"><b>Confirm password</b></label>
      <input type="password" placeholder="Confirm Password" name="cpsw" required>
        
      <tab1></tab1><button class="btn btn-lg btn-primary" type="submit" style ="width:25%;" name="SubmitButton">Register</button>
      <tab1><label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location = './'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
	<?
}
include_once('footer.php')?>