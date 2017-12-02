<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Tibetan Handicrafts and Bead Store</title>
			<style type="text/css" media="screen">
				@import url(project.css);	
			</style>
	</head>

<body class="homePage">
	<header>
		<div class= "intro">
			<h1> Tibetan Handicrafts and Bead Store </h1>
			<h3> Every decade needs its own manual of handicraft.</h3>
		</div>
	</header>
	
	<div class="menu">
	<ul>
  		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/index.html">Home Page</a></h3></li>
  		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/prime.php">Become our Prime Member</a></h3></li>
  		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/primetable.php">Our Prime Members</a></h3></li>

 		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/contact.php">Contact Us</a></h3></li>
 		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/return.html">Return Policy</a></h3></li>
	</ul>
    </div>
	<?php
	/* In this milestone, I have created a very basic form for users to become a prime number 
	Here is the basic HTML that is used to create our contact form. */

	// A function defined to print all the questions with relative answers.  
	function print_form() 
	{

		echo <<< END

		<form action = "$_SERVER[PHP_SELF]" method = "post" id = "prime">
		<div class = "wrapper">

		<div class = "about">
		<h2> Become a Prime Member</h2>
		<p>
		Receive all the benefits when you become our Tibetan Handicrafts and Bead Store <strong>Prime Member.</strong>
		<div class = "listbenefits">
		<ul>
			<li>Free Two-Day Shipping</li>
			<li>Free Same-Day Delivery</li>
			<li>Tibetan Restaurents: Get amazing deals on our high class restaurents in town.</li>
			<li>Prime Rewards: Eligible Prime members can earn 5% cashback.</li>
			<li>Deals and Discounts up to 50% on the local Tibetan market, Kathmandu</li>
		</ul>
		</div>
	

		</div>
		<div class = "phpquestions">
		<p>
				
		Your Name<br/>
		<label><input type="text" name="name" size="35"></label>
		<br/>
		Phone<br/>
		<label><input type="text" name="phone" size="35"></label>
		<br/>
		Email<br/>
		<label><input type="text" name="email" size="35"></label>
		<br/>
		Prime Membership<br/>
		<label>
		<select name="primemember">
			<option value="" selected="selected">(please select a option)</option>
			<option value="premium">Premium - $9.99</option>
			<option value="platinum">Platinum - $14.99</option>
			<option value="gold">Gold - $15.99</option>
		</select>
		</label>
		<br/>

		Address Line 1<br/>
		<label><input type="text" name="address1" size="35"></label>
		<br/>
		Apartment/Suite/Unit/Building/Floor<br/>
		<label><input type="text" name="address2" size="35"></label>
		<br/>
		Town/City<br/>
		<label><input type="text" name="city" size="35"></label>
		<br/>
		State/Province/Region<br/>
		<label><input type="text" name="state" size="35"></label>
		<br/>
		Country<br/>
		<select name="country">
			<option value="" selected="selected">(please select a country)</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegowina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote d'Ivoire</option>
                            <option value="HR">Croatia (Hrvatska)</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="TP">East Timor</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="FX">France, Metropolitan</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard and Mc Donald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran (Islamic Republic of)</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint LUCIA</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia (Slovak Republic)</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SH">St. Helena</option>
                            <option value="PM">St. Pierre and Miquelon</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands (British)</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="YU">Yugoslavia</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        <br/>

		<input type="hidden" name="stage" value="process">
		<input type="submit" name="sumbit" value="Submit">
		<input type="reset" value="Clear">

		</p>
		</div>
		</div>
		</form>
END;
	}

	/* To process the membership form we will be using the PHP $_POST function, and creating 
	labels for each name that we have created in our form. This will allow us to further 
	customize the form later on as well. */

	// A function to process the form in PHP.
	function process_form() 
	{

	    $name = $_POST['name'];
	    $phone = $_POST['phone'];
	    $email = $_POST['email'];
	    $primemember = $_POST['primemember'];
	    $country = $_POST['country'];

	    if($name === "" || $email === "" || $phone ==="" || $primemember ==="" || $country === "") 
        { 
           echo "<script type= 'text/javascript'>alert('Please make sure that all fields have been entered.');</script>"; 
        } 
        else 
        { 
            try 
		    {
		        $conn = new PDO("mysql:host=mysql.truman.edu;dbname=ns7442CS315", "ns7442", "chohghot");
		        // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		        // set the PDO error mode to exception
		        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		        // prepare sql and bind parameters
		        $stmt = $conn->prepare("INSERT INTO member (name, phone, email, primemember, country)
		                                VALUES (:name, :phone, :email, :primemember, :country)");
		        $stmt->bindParam(':name', $name);
		        $stmt->bindParam(':phone', $phone);
		        $stmt->bindParam(':email', $email);
		       	$stmt->bindParam(':primemember', $primemember);
		       	$stmt->bindParam(':country', $country);
		        $stmt->execute();
		    }
		    catch(PDOException $e)
		    {
		        echo "Error: " . $e->getMessage();
		    }
        } 
        			// end the DB connection.
			$conn = null;
			    
			print "<br />Thank you for entering your information.";
			print "<br />Please <a href=\"primetable.php\">click here</a> to display all the information.";
}
	/* All the information that will be sent from our membership form will be stored in our database. 

	After filling out the form and clicking the "Submit" button, visitors will see a message confirming the form was processed. Submitting the form sets a hidden parameter called action that prevents the form from being displayed again, so that we won't bother visitors with forms they've already filled out. The PHP script also verifies that all the HTML fields are filled in properly. */

	if (isset($_POST['stage']) && ('process' == $_POST['stage'])) 
	{
		//Calls the function to post the contact. 
		process_form();
	} 
	else 
	{
		//Sends the email and prints the thank you message.
		print_form();
	}
?>	
	<div class ="image-divider"></div>

	<footer>
	<div class="footer-content">
	<p class="credit"> &copy; Copyright 2017 Tibetan Handicrafts and Bead Store
	</p>
	</div>
	</footer>

	</body>
	</html>
