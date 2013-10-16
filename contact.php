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
    	<div class="col-md-2">
        	We encourage you to be as specific as possible in your message !<br>
            We will take the time to carefully read your message !<br>
            Thank you.
        </div>
    	<div class="contact-form col-md-8">
        
        	<form class="form-horizontal" role="form" data-validate="parsley" 
             method="post" action="contact-done.php">
            	<div class="form-group">
                	<label for="contactName" class="col-md-2 control-label">Name *</label>
                    <div class="col-md-6">
                    	<input type="text" class="form-control" id="contactName" 
                        name="contactName"
                        placeholder="Your Name" 
                        data-required="true" 
                        data-notblank="true"
                        data-maxlength="70"
                        data-error-container="#name-error" 
                        data-required-message="Your Name is required !"
                        data-maxlength-message="Cannot exceed 70 characters !" />
                    </div>
                    
                    <div class="col-md-4 parsley-message" id="name-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="contactEmail" class="col-md-2 control-label">E-mail *</label>
                    <div class="col-md-6">
                    	<input type="email" class="form-control" id="contactEmail" 
                        name="contactEmail"
                        placeholder="Your E-Mail" 
                        data-required="true"
                        data-error-container="#email-error" 
                        data-error-message="Please enter a valid e-mail !"
                        />
                    </div>
                    
                    <div class="col-md-4 parsley-message" id="email-error"></div>
                </div>
                
                <div class="form-group">
                	<label for="contactSubject" class="col-md-2 control-label">Subject</label>
                    <div class="col-md-6">
                    	<input type="text" class="form-control" id="contactSubject"
                        name="contactSubject" 
                        placeholder="Subject" />
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="contactMsg" class="col-md-2 control-label">Message *</label>
                    <div class="col-md-6">
						<textarea class="form-control" rows="8" id="contactMsg" 
                        placeholder="Your Message" data-required="true"
                        data-notblank="true"
                        name="contactMsg"
                        data-error-container="#message-error"
                        data-error-message="A message cannot be empty !"></textarea>
                    <br>
                    <div class="pull-right">
            			<button type="submit" 
                        name="contactSubmit" class="btn btn-md btn-info">Send</button>
        			</div>
                    </div>
                    <div class="col-md-4 parsley-message" id="message-error"></div>
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