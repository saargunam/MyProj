<?php
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'ranjith');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function NewUser()
 {
 $fname = $_POST['fullname'];
 $uname = $_POST['username'];
 $email = $_POST['email'];
 $pwd = $_POST['pwd'];
 $pwd1 = $_POST['pwd1'];
 $phone = $_POST['number'];
 if(($email == "") OR ($uname == "") OR ($fname == "") OR ($phone == ""))
 {
    echo "Please supply each field.";
  }
  else if($pwd != $pwd1)
  {
    echo "Password did not match.";
  }
  else{
 $query = "INSERT INTO regis (fullname,username,email,pass,phone) VALUES ('$fname','$uname','$email','$pwd','$phone')";
 $data = mysql_query($query) or die(mysql_error());
 if($data)
 {
 echo "YOUR REGISTRATION IS COMPLETED...";
 }
 }
 }
 function SignUp()
{
 if(!empty($_POST['username'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
 {
 $query = mysql_query("SELECT * FROM regis WHERE username = '$_POST[username]' AND pass = '$_POST[pwd]'") or die(mysql_error());
 if(!$row = mysql_fetch_array($query) or die(mysql_error()))
 {
 newuser();
 }
 else {
 echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
 }
 }
 }
 if(isset($_POST['submit']))
 {
   SignUp();
 }
 ?>
