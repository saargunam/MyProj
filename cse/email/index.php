require_once 'email/PHPMailerAutoload.php';

 if(isset($_POST['submit']))
 {
 $name = $_POST['inputName'];
 $email = $_POST['inputEmail'];
 $query = $_POST['inputMessage'];
 $email_from = $name.'<'.$email.'>';
 $subject = $_POST['inputSubject'];

 $message="   
    
   Name:saargunam
  $name     
  

   Email-Id:saargunam17@gmail.com
  $email     
  

   Message:hi
  $query     

 ";

 $mail = new PHPMailer;

 $mail->isSMTP(); // Set mailer to use SMTP
 $mail->SMTPAuth = true; // Enable SMTP authentication
 //$mail->SMTPDebug = 2; //Please enable debug if you want to check if the mail sent successfully.

 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->Username = 'saargunam17@gmail.com';    // SMTP username
 $mail->Password = 'saargunam9363152586';  // SMTP password
 $mail->SMTPSecure = 'ssl';   // Enable encryption, 'ssl' also accepted
 $mail->Port = 465; 

 $mail->addAddress('saargunam17@gmail.com', 'saargunam');
 $mail->From = $email;
 $mail->FromName = $name;
 $mail->Subject = $subject;
 $mail->Body    = $message;
 $mail->AltBody = $message;

 if(!$mail->send()) {
  header("Location:../contact.php?msg=Error To send Email !");
 } else {
  header("Location:../contact.php?msg=Successful Submission! Thank you for contacting us.");
 }
 }

