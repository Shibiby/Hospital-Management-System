<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>HMS | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
		<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bootstrap/bootstrap/dist/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<title>MOBI CLINIC</title>
	

<body>
	<div class="topnav">
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
			<a class="navbar-brand" href="index.html"><img src="images/horizontal-logo-cropped.png" alt="" width="200px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			  
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav mt-0 mt-lg-0 ml-auto mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">ABOUT</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">CONTACT</a>
					</li>
				</ul>
				<ul class="navbar-nav" id="social">
					<li class="nav-social">
						<i class="fa fa-twitter-square fa-2x"></i>
					</li>
					<li class="nav-social">
						<i class="fa fa-facebook-square fa-2x"></i>
					</li>
					<li class="nav-social">
						<i class="fa fa-envelope-square fa-2x"></i>
					</li>
					
				</ul>

			</div>

			

		</nav>
	</div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="row">				
				<div class="col-md-4">
					
      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>Pilot Road</p>
						   		<p>Runda, Thika,</p>
						   		<p>Kenya</p>
				   		<p>Phone:(254) 711 111 111</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mfm.co.ke</span></p>
				   	
				   </div>
				</div>				
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   
		<!--end-wrap-->
		<footer>
			<div class="footer sticky-bottom" style="padding-top: 20px;">
				<div class="container-fluid text-center">
					&copy; <span class="current-year">2019</span><span class="text-bold text-uppercase"> <a href="mailto:info@mfm">MOBICLINIC</a></span>. <span>All rights reserved</span>
				</div>
				<div class="pull-right">
					<span class="go-top"><i class="ti-angle-up"></i></span>
				</div>
			</div>
		</footer>
	</body>
</html>

