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
$mail->From = "saargunam17@gmail.com";
$mail->FromName = "saargunam";
$mail->addAddress($_POST['email'],$_POST['name']);
$mail->addReplyTo('saargunam17@gmail.com', 'gunam');
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


                     $result='<div class="alert alert-success"><strong>Thank
you!</strong> I\'ll be in touch.</div>';
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


<p class="lead">Please get in touch - Send us your valuable feedback.</p>

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


<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></
script>

</body>
</html>
