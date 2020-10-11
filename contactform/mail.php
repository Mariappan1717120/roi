<?php
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$subject=$_POST['subject'];
$mailFrom=$_POST['email'];
$message=$_POST['message'];
$mailTo="roidesign19@roiconstruction.in";
$headers="From:".$mailFrom;
$text="You have received an e-mail from".$name.".\n\n".
$message;
//mail($mailTo,$subject,$text,$headers);
header("Location:contact.php");

 $result='';
	// If there are no errors, send the email
    if (mail ($mailto, $subject, $text, $headers)) {
			$result='<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>';
		}
		else {
		  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	  
    echo $result;
    
}


?>