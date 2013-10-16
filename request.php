<!DOCTYPE html>
<html>
<head>
    <title>Request a Logo Design | RevoLogo.com</title>
    <meta name="description" content="We're a creative logo design agency based on a unique design approach. You may request a logo design through the simple form presented here.">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="RevoIco.ico">
    
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
  	
    <div class="wrapper">
  	<div class="container info-page"> <!----Container Start------------------------------>
    
    <img id="logo" class="img-responsive" src="RevoFinal-s.png" />
    
      <ul class="nav nav-pills menu">
      	<li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>        
        <li><a href="concepts.html">Concepts</a></li>
        <li><a href="designed.html">Portfolio</a></li>
        <li><a href="how.html">How it Works ?</a></li>
        <li class="active"><a href="request.php">Request a Logo-Design</a></li>
        <li class="pull-right"><a href="contact.php">Contact us</a></li>
        <li class="pull-right"><a href="who.html">About</a></li>
      </ul>
      

   	<div class="page-header">
    	<h1>Request a Logo Design</h1>
    </div> 
    
    <div class="row" style="margin-left:60px;">
    	<div class="col-md-2" style="margin-right:60px;">
        	<span style="font-weight:bold;">Step 1/2</span><hr>
        	<p>Please fill the following form, and be as specific as possible. <br> 
            you may leave any optional field (without *) blank, however completing
            all fields is encouraged. <br><br>
            For more information, please see the 
            <a href="how.html">'How it Works ?'</a> page
            </p><br/>
        </div>
        
    	<div class="col-md-8">        	
            <form class="form-horizontal" role="form" data-validate="parsley"
             method="post" action="request-done.php" >
            
            	<div class="form-group">
                	<label for="fullName" class="col-md-3 control-label">Full Name *</label>
                	<div class="col-md-5">
                    	<input class="form-control" type="text" 
                        id="fullName" placeholder="Your first and last name"
                        name="r-name"
                        data-required="true"
                        data-notblank="true"
                        data-error-container="#r-name-error"
                        data-error-message="Your full name is required !"
                         />
                    </div>
                    <div class="col-md-4 parsley-message" id="r-name-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="clientEmail" class="col-md-3 control-label">E-mail *</label>
                	<div class="col-md-5">
                    	<input class="form-control" type="email" 
                        id="clientEmail" placeholder="Your e-mail address"
                        name="r-email"                       
                        data-required="true"
                        data-error-container="#r-email-error"
                        data-error-message="Please enter a valid e-mail !"/>
                    </div>
                    <div class="col-md-4 parsley-message" id="r-email-error"></div>
                </div>
                
                <hr>
                
                <div class="form-group">
                	<label for="r-logoFor" class="col-md-3 control-label">
                    I Need a Logo for my</label>
                	<div class="col-md-5">
                    	<select class="form-control" name="r-logofor">
                        	<option>Company</option>
                            <option>Product/Service</option>
                            <option>Website</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="countries" class="col-md-3 control-label">
                    Country of Operation
                    </label>
                    <div class="col-md-5">
                    	<select class="form-control" name="countries">
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina
                            </option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter
                            </option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic
                            </option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon
                            </option>
                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines
                            </option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States of America"
                            selected="selected">United States of America
                            </option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="description" class="col-md-3 control-label">
                    	Business Description
                    </label>
                    <div class="col-md-5">
                    	<textarea rows="2" class="form-control" id="description"
                        name="description"
                        placeholder="Short description about your activity or product"
                        ></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="target" class="col-md-3 control-label">
                    	Target Demographic
                    </label>
                    <div class="col-md-5">
                    	<textarea rows="2" class="form-control" id="target-demo"
                        name="target-demo" 
                        placeholder="Gender, Age group, Job type..."
                        ></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="nameFor" class="col-md-3 control-label">Entity Name *</label>
                	<div class="col-md-5">
                    	<input class="form-control" type="text" 
                        id="r-namefor" 
                        data-required="true"
                        data-notblank="true"
                        name="r-namefor"
                        placeholder="Designation of your company/web-site..."
                        data-error-container="#r-namefor-error"
                        data-error-message="The entity name is required !"/>
                    </div>
                    <div class="col-md-4 parsley-message" id="r-namefor-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="nameLogo" class="col-md-3 control-label">Name on Logo *</label>
                	<div class="col-md-5">
                    	<input class="form-control" type="text" 
                        id="r-namelogo" 
                        data-required="true"
                        data-notblank="true"
                        placeholder="Your logo in plaintext"
                        data-error-container="#r-namelogo-error"
                        data-error-message="Name on logo is required !"
                        name="r-namelogo"/>
                    </div>
                    <div class="col-md-4 parsley-message" id="r-namelogo-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="slogan" class="col-md-3 control-label">Slogan on Logo</label>
                	<div class="col-md-5">
                    	<input class="form-control" type="text" 
                        id="r-slogan" placeholder="Slogan appearing in logo, if any"
                        name="r-slogan"/>
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="logoType" class="col-md-3 control-label">Logo Type *</label>
                	<div class="col-md-5">
                    
                    	<div class="col-md-3" style="padding-left:0px;">
                    	<div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="logotype"
                                name="logotype[]"
                                data-mincheck="1"
                                value="Icon"
                                data-error-container="#r-logotype-error"
                                data-error-message="Please select at least 1 option !"/> Icon
                            </label>                           
                        </div>
                        </div>
                        
                        <div class="col-md-3" style="padding-left:0px;">
                        <div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="logotype"
                                name="logotype[]"
                                value="Text"/> Text
                            </label>
                        </div>
                        </div>
                        
                        <div class="col-md-6" style="padding-left:0px; margin-left:0px;">
                        <div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="logotype"
                                name="logotype[]"
                                value="Icon + Text"/> Icon + Text
                            </label>
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 parsley-message" id="r-logotype-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="MediaType" class="col-md-3 control-label">Media Type *</label>
                	<div class="col-md-5">
                    	<div class="col-md-4" style="padding-left:0px;">
                    	<div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="r-mediatype"
                                name="mediatype[]"
                                value="web"
                                data-mincheck="1"
                                data-error-container="#r-mediatype-error"
                                data-error-message="Please select at least 1 option !"/> Web
                            </label>                           
                        </div>
                        </div>
                        
                        <div class="col-md-4" style="padding-left:0px;">
                        <div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="r-mediatype"
                                name="mediatype[]" value="print"/> Print
                            </label>
                        </div>
                        </div>
                        
                        <div class="col-md-4" style="padding-left:0px;">
                        <div class="checkbox checkbox-inline">
                        	<label>
	                            <input type="checkbox" data-group="r-mediatype"
                                name="mediatype[]" value="clothing"/> Clothing
                            </label>
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 parsley-message" id="r-mediatype-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="logoColors" class="col-md-3 control-label">
                    Desired Colors</label>
                	<div class="col-md-5">
                    
                    	<div class="col-md-4" style="padding-left:0px;">
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="red"/> Red
                            </label>                           
                        </div>
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="yellow"/> Yellow
                            </label>
                        </div>                        
                        </div>
                        
                    	<div class="col-md-4" style="padding-left:0px;">
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="blue"/> Blue
                            </label>
                        </div>
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="green"/> Green
                            </label>
                        </div>                                        
                        </div>
                         
                        <div class="col-md-4" style="padding-left:0px;">
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="black"/> Black
                            </label>
                        </div>
                        <div class="checkbox">
                        	<label>
	                            <input type="checkbox" data-group="r-colors"
                                name="colors[]" value="white"/> White
                            </label>
                        </div>                                       
                        </div>       
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="add-colors" class="col-md-3 control-label">
                    Specific Colors</label>
                	<div class="col-md-5">
                  		<input class="form-control" type="text" 
                        id="r-add-colors" placeholder="HEX or plaintext colors"
                        name="r-add-colors"/>
                	</div>
                </div>
                
                <div class="form-group">
                	<label for="add-info" class="col-md-3 control-label">
                    Additional Informations</label>
                	<div class="col-md-5">
                    	<textarea class="form-control" rows="4" 
                        id="r-add-info" 
                        placeholder="Anything else you think we should take into consideration."
                        name="r-add-info"></textarea>      
                	</div>
                    <div class="col-md-4">
                    	<button class="btn btn-lg btn-success confirm" type="submit"
                    	name="r-submit">
                    	Proceed 
                    	<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>
            </form>            
        
        </div>
       
    </div>
    
    </div> <!------------Container End----------------->
    <div class="push"></div>
    </div> <!-- Wrapper End ---->
    
    <!-- Footer Start --------------------------------->
    <div class="container footer-container">
    <footer>
       		<p id="footer-text" class="text-right">AES/RevoLogo &copy; 2013</p>
    </footer>
  	</div>
    <!-- Footer End ----------------------------------->
    
  	<script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/revoscript.js" type="text/javascript"></script>
    <script src="js/parsley.min.js" type="text/javascript"></script>
    
  </body>
</html>