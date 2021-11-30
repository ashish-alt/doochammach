<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
   	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 
     <!-- Site Metas -->
    <title>Doo Chammach| Contact Us</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<?php include_once  "header.php"; ?>

	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->

	<div class="contact-box">

			<div class="row">
				<div class="col-md-5">
				

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.622781662417!2d77.38463081455909!3d28.611091191803038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefda982797fb%3A0x6dbe9466ed28bf93!2sDoo%20Chammach%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1631527922658!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
</div>

<form method="post" accept="#">
							<div class="col-lg-13">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Your Name" class="name1" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							

							
							<div class="col-lg-13">
								<div class="form-group">
									<input type="text" placeholder="Your Email"  class="form-control" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>

							<div class="col-md-13">
								<div class="form-group">
									
									<input type="number" placeholder="Your Mobile No"  class="form-control" name="phone" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-13">
								<div class="form-group">
									
									<input type="text" placeholder="Your Address" class="form-control" name="address" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-13">
								<div class="form-group"> 
									<textarea class="form-control" placeholder="Your Message" name="message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">

									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
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
		</div>
	</div>

	<!-- End Contact -->
	
	<!-- Start Contact info -->
	 
	 <?php include_once "footer.php"; ?>

	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Live Dinner Restaurant'
				}
			]
		});	
	</script>
</body>
</html>