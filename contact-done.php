<!DOCTYPE html>
<html>
<head>
    <title>Contact us | RevoLogo.com</title>
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
        <li><a href="request.php">Request a Logo-Design</a></li>
        <li class="pull-right active"><a href="contact.php">Contact us</a></li>
        <li class="pull-right"><a href="who.html">About</a></li>
      </ul>
      
    
    <div class="page-header">
    	<h1>Contact Us<small> - Site issues ? bugs ? special design work ?</small></h1>
    </div>
    
    <div class="row" style="margin-left:60px;">
    	
            <?php
				if (isset($_POST["contactSubmit"]))
				{
					$name = $_POST["contactName"];
					$from = "From: " . $_POST["contactEmail"] . "\r\n";
					$subject = $_POST["contactSubject"];
					$msg = $_POST["contactMsg"];
					$to = "contact@revologo.com";
					
					if (mail($to, $subject, $msg, $from))
					{
						echo "
							  <div class=\"col-md-2\"></div>
							  <div class=\"col-md-7 msg-notif\">
								<div class=\"alert alert-success\">
								<p>Your message has been sent successfully ! 
								   Expect a reply within the next 24 hours</p>
								</div>
							  </div>							 
							  ";
					} else
					{
						echo "
							  <div class=\"col-md-2\"></div>
							  <div class=\"col-md-7 msg-notif\">
								<div class=\"alert alert-danger\">
								<p>Something went wrong, please try again !</p>
								</div>
							  </div>							  
							 ";
					}
				}
			?>                 
            
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