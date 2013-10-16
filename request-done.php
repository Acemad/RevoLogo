<!DOCTYPE html>
<html>
<head>
    <title>Request a Logo Design | RevoLogo.com</title>
    <meta name="description" content="We're a creative logo design agency based on a unique design approach, relying on creative talents and client input to deliver awesome logos for less.">
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
    
    <div class="row" style="margin-left: 60px;">
    	<div class="col-md-2">
        	<span style="font-weight:bold;">Step 2/2</span>
            <hr>
            Checkout
        </div>
        <div class="col-md-7 msg-notif">
    	<?php
			if (isset($_POST["r-submit"]))
			{
				$name = $_POST["r-name"];
				$email = $_POST["r-email"];
				$logofor = $_POST["r-logofor"];
				$country = $_POST["countries"];
				$description = $_POST["description"];
				$target_demo = $_POST["target-demo"]; 
				$namefor = $_POST["r-namefor"];
				$namelogo = $_POST["r-namelogo"];
				$slogan = $_POST["r-slogan"];											
				
				$logotype_ar = $_POST["logotype"];
				$logotype = "";				
				foreach ($logotype_ar as $type)
				{
					$logotype = $logotype . "{$type} ";
				}
				
				$mediatype_ar = $_POST["mediatype"];
				$mediatype = "";
				foreach ($mediatype_ar as $mtype)
				{
					$mediatype = $mediatype . "{$mtype} ";
				}
				
				$colors = "";
				if (isset($_POST["colors"]))
				{
					$colors_ar = $_POST["colors"];					
					foreach ($colors_ar as $ctype)
					{
						$colors = $colors . "{$ctype} ";
					}
				}
				
				$add_colors = $_POST["r-add-colors"];
				$add_info = $_POST["r-add-info"];
				
				$design_request = "<html><body>".
				"<span style=\"font-weight:bold;\">Full Name : </span>" . $name . "<br>" .
				"<span style=\"font-weight:bold;\">E-Mail : </span>" . $email . "<br>" .
				"<span style=\"font-weight:bold;\">I need a Logo for My : </span>" 
				. $logofor . "<br>" .
				"<span style=\"font-weight:bold;\">Country of Operation : </span>" 
				. $country . "<br>" .
				"<span style=\"font-weight:bold;\">Business Description : </span>" .
				$description . "<br>" .
				"<span style=\"font-weight:bold;\">Target Demographic : </span>" 
				. $target_demo . "<br>" .
				"<span style=\"font-weight:bold;\">Entity Name : </span>" . $namefor . "<br>" .
				"<span style=\"font-weight:bold;\">Logo Name : </span>" . $namelogo . "<br>" .
				"<span style=\"font-weight:bold;\">Slogan : </span>" . $slogan . "<br>" .
				"<span style=\"font-weight:bold;\">Logo Type : </span>" . $logotype . "<br>" .
				"<span style=\"font-weight:bold;\">Media Type : </span>" . $mediatype . "<br>" .
				"<span style=\"font-weight:bold;\">Colors : </span>" . $colors . "<br>" .
				"<span style=\"font-weight:bold;\">Specific Colors : </span>" . $add_colors
				 . "<br>" .
				"<span style=\"font-weight:bold;\">Additional Info : </span>" . $add_info . "<br>"
				. "</body></html>";
				
				$headers = "From: " . $email . "\r\n" .
						   "MIME-Version: 1.0\r\n" .
						   "Content-Type: text/html; charset=ISO-8859-1\r\n";
						   
				if (mail("design@revologo.com", "Design Request", $design_request, $headers))
				{
					echo "
								<div class=\"alert alert-info\">
								<p>Request saved !<br>
								In order to complete your request for a	logo design, 
								the payment of a small logo-reasearch fee is required.
								<br><br>
								
								<span style=\"font-weight:bold; font-size:18px;\">
								Fee : $19.95</span>
							    </div>
																
								<form action=\"https://www.paypal.com/cgi-bin/webscr\" 
								method=\"post\" target=\"_top\">
								<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
								<input type=\"hidden\" 
								name=\"hosted_button_id\" value=\"RVJDGYT77G96W\">
								<button class=\"btn btn-lg btn-success pull-right\" 
								style=\"width:180px;\"
								border=\"0\" name=\"submit\"
								alt=\"PayPal - The safer, easier way to pay online!\">
								<span class=\"glyphicon glyphicon-shopping-cart\"></span>
								 Checkout</button>
								<img alt=\"\" border=\"0\" 
								src=\"https://www.paypalobjects.com/en_GB/i/scr/pixel.gif\" 
								width=\"1\" height=\"1\">
								</form>
						";
				}
				else
				{
					echo "
								<div class=\"alert alert-danger\">
								<p>You request did not pass, something 
								 went wrong, please try again !</p>
								</div>
						 "	;
				}								
			}
		?>
               
        
        <div class="paypal-logo">
        <!-- PayPal Logo -->
       
        	<a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" 
        	title="How PayPal Works" 
        	onclick="javascript:window.open('https://www.paypal.com/uk/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_ms_ae_UK.jpg"
         border="0" alt="PayPal Acceptance Mark"></a>
        
         <!-- PayPal Logo -->
        </div>
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
    
  </body>
</html>