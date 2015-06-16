<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Learn is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
<title>CSE PORTAL</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt=" "></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li ><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="Latest tech.html">Latest tech</a></li>
					<li><a href="Companies.html">Companies</a></li>
					<li><a href="Materials.html">Materials</a></li>
					<li><a href="facul.html">Faculty details</a></li>
					<li class="active"><a href="contact3.php">contact</a></li>
					<li><a href="register.html">Register</a></li>

			<!--		<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>-->

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contact us</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<?php
	if (isset($_POST['submit']))
			{

				if (!$_POST['name']) {

					$error="<br />Please enter your name";

				}

				if (!$_POST['email']) {

					$error.="<br />Please enter your email address";

				}

				if (!$_POST['comment']) {

					$error.="<br />Please enter a comment";

				}

				if ($_POST['email']!="" AND !filter_var($_POST['email'],
	FILTER_VALIDATE_EMAIL)) {

						$error.="<br />Please enter a valid email address";

				}



	require 'email/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth = true;
	$mail->Username   = "mail-id";
	$mail->Password   = "password";
	$mail->SMTPSecure = 'tls';
	$mail->From = "mail-id";
	$mail->FromName = "saargunam";
	$mail->addAddress($_POST['email'],$_POST['name']);
	$mail->addReplyTo('mail-id', 'gunam');
	$mail->WordWrap = 50;
	$mail->isHTML(true);
	$mail->Subject = 'Comment from CSE PORTAL';
	$mail->Body    = $_POST['comment'];
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		exit;
	}
	else{
     echo ">>> MAIL SENT SUCCESSFULLY <<<";

	}





	}




			?>



	<!-- Latest compiled and minified JavaScript -->

	<!doctype html>
	<html>
	<head>
	<title>CSE PORTAL</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap-theme.min.css">

	<style>

	.emailForm {
	border:1px solid grey;
			border-radius:10px;
			margin-top:20px;
	}

	form {
			padding-bottom:20px;

	}
	</style>
	</head>
	<body>
	<div class="container">

	<div class="row">
	<div class="col-md-6 col-md-offset-3 emailForm">
	<h1>Email form</h1>
	<?php
	$result;
	?>


	<p class="lead">Drop your queries or feedback here..</p>

	<form method="post">

	<div class="form-group">

	<label for="name">Your Name:</label>
	<input type="text" name="name" class="form-control" placeholder="Your Name"
	/>

	</div>

	<div class="form-group">

	<label for="email">Your Email:</label>
	<input type="email" name="email" class="form-control" placeholder="Your Email"
	/>

	</div>

	<div class="form-group">

	<label for="comment">Your Comment:</label>
	<textarea class="form-control" name="comment"> </textarea>

	</div>

	<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"
	/>


	</form>

	</div>
	</div>

	</div>


	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</body>
	</html>




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
