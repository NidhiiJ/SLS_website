<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Storing input in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['message'] = $_POST['message'];

    // Retrieving data
    $name = htmlspecialchars($_SESSION['name']);
    $phone = htmlspecialchars($_SESSION['phone']);
    $email = htmlspecialchars($_SESSION['email']);
    $message = htmlspecialchars($_SESSION['message']);

    // Email details
    $subject = 'Inquiry via Website';
    $to = "info@attorneysassociates.com";
    $headers = "From: Attorneys & Associates <info@attorneysassociates.com>\r\n";
    // $headers .= "Reply-To: $cphone\r\n";
    $headers .= "CC: penikalaryan9@gmail.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $txt = "Dear Team,\n\nYou have received a new booking inquiry via the landing page. The details are as follows:\n\n" .
           "Name: $name\n" .
           "Phone: $phone\n" .
           "Email: $email\n" .
           "Message: $message\n\n";

    // Send email
    if (mail($to, $subject, $txt, $headers)) {
        echo "<script>
                alert('Thank You! Our team will reach out to you shortly.');
                window.location.replace('https://attorneysassociates.com');
              </script>";
    } else {
        echo "<script>
                alert('Oops! An unexpected error occurred. Failed to send Email.');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Attorneys And Associates | Trusted Advisors, Intelligent Solutions</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/0/logo/logo-small.png" type="image/x-icon">
<link rel="icon" href="images/0/logo/logo-small.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
	<?php include './header.php' ?>

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg); background-position: 50% center">
    	<div class="container">
			<div class="content">
				<h1>Contact</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section mb-5">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="inner-container">
				<h2 style="text-transform:capitalize; text-align: center">Get in touch for comprehensive <span>legal solutions</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="pt-5 info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- <div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div> -->
							<ul class="list-style-six">
								<li class="my-4"><span class="icon fa fa-building"></span><a style="color:black" href="">4 G-ral. Traian Mosoiu Street, A Building,<br>2nd Entrance, Flat 30, Opposite CST, <br>Mumbai, Maharashtra 400005</a></li>
								<li class="my-4"><span class="icon fa fa-fax"></span> <a style="color:black" href="tel: 7304951277">+91 7304951277</a></li>
								<li class="my-4"><span class="icon fa fa-envelope-o"></span><a style="color:black" href="mailto: info@attorneysassociates.com">info@attorneysassociates.com</a></li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form" id="contact-form">
									
									<div class="form-group">
										<input type="text" name="name" value="" placeholder="Full name" required>
									</div>

									<div class="form-group">
										<input type="text" name="phone" value="" placeholder="Contact Number" required pattern="[1-9]{1}[0-9]{9}" maxlength="10">
									</div>

									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>
									
									<!-- <div class="form-group">
										<select class="custom-select-box">
											<option>Select topic</option>
											<option>Topic One</option>
											<option>Topic Two</option>
										</select>
									</div> -->
									
									<div class="form-group">
										<textarea name="message" placeholder="Additional Message.."></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn btn-style-one">Submit</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<!-- <section class="contact-info-section" style="background-image:url(images/background/5.jpg)">
		<div class="container">
			<div class="row clearfix">
				
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>United Kingdom</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> 49488 Avenida Obregon, <br> La Quinta, CA 92253</li>
						<li><span class="icon flaticon-call-answer"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon fa fa-envelope-o"></span>support@lawsight.com.uk</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Australia</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> 13/1 Dixon Street, Sydney <br> NSW 2000</li>
						<li><span class="icon flaticon-call-answer"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon fa fa-envelope-o"></span>support@lawsight.com.uk</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Netherlands</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam</li>
						<li><span class="icon flaticon-call-answer"></span> +1-(281)-813 926 <br> +1-(281)-813 612</li>
						<li><span class="icon fa fa-envelope-o"></span>support@lawsight.com.uk</li>
					</ul>
				</div>
				
			</div>
		</div>
	</section> -->
	<!-- End Contact Info Section -->
	
	<!--Main Footer-->
	<?php include './footer.php' ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>