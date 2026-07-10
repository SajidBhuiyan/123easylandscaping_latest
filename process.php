
 <?php

//----1:-Conatct page form-----//

//   if(isset($_POST['contact_name']) != ""){
// 			$to = "shmai.com@gmail.com";
// 			$from =  $_POST["contact_email"];
// 			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["contact_name"]."<br />";
// 			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["contact_email"]."<br />";
// 			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["contact_phone"]."<br />";
// 			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject: </strong>".$_POST["contact_subject"]."<br />";
// 			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["message"]."<br />";
// 			$subject = 'Contact Enquiry';		
// 			$headers = "From: ".$_POST["contact_email"]."\n";
// 			$headers .= "MIME-Version: 1.0" . "\r\n";
// 			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
// 			$send =	mail($to,$subject,$message,$headers);
	
	
	
// 	if($send)
// 	{
// 		echo "success contact";
// 	}
// 	else
// 	{
// 		echo "error";
// 	}
// }
<?php
if (
    isset($_POST['contact_name'], $_POST['contact_email'], $_POST['contact_phone'], $_POST['contact_subject'], $_POST['message']) &&
    !empty($_POST['contact_name']) &&
    !empty($_POST['contact_email']) &&
    !empty($_POST['message'])
) {
    // FIX #2: Sanitize all inputs
    $name    = htmlspecialchars($_POST["contact_name"],    ENT_QUOTES, 'UTF-8');
    $phone   = htmlspecialchars($_POST["contact_phone"],   ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($_POST["contact_subject"], ENT_QUOTES, 'UTF-8');
    $msg     = htmlspecialchars($_POST["message"],         ENT_QUOTES, 'UTF-8');

    // FIX #1: Validate email before using in headers
    $from = filter_var($_POST["contact_email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        echo "error: invalid email";
        exit;
    }

    $to = "sitemailtested@gmail.com"; // FIX #8: real recipient

    // FIX #5: Correct label for phone field
    $message  = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name:</strong> "    . $name    . "<br />";
    $message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email:</strong> "   . $from    . "<br />";
    $message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Phone:</strong> "   . $phone   . "<br />";
    $message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject:</strong> " . $subject . "<br />";
    $message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Message:</strong> " . $msg     . "<br />";

    $mail_subject = "Contact Enquiry: " . $subject;

    // FIX #4 & #6: Consistent \r\n and UTF-8 encoding
    $headers  = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $send = mail($to, $mail_subject, $message, $headers);

    if ($send) {
        echo "success contact";
    } else {
        echo "error";
    }

} else {
    echo "error: missing required fields";
}
?>

//----2:-Newsletter form-----//

if(isset($_POST['newletter_email']) != ""){
			$to = "shmai.com@gmail.com";
			$from =  $_POST["newletter_email"];
			$message = "Email:".$_POST["newletter_email"];
			$subject = 'Contact Enquiry';
			$send =	mail($to,$subject,$message);

	if($send)
	{
		echo "newletter_email success";
	}
	else
	{
		echo "error";
	}
}


//----3:-Instant Quote form-----//

if(isset($_POST['user_name']) != ""){


			$to = "shmai.com@gmail.com";
			$from =  $_POST["user_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["user_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["user_email"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Phone #: </strong>".$_POST["user_phone"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["lawn_area"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["price"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["message_box"]."<br />";
			$subject = 'Contact Enquiry';		
			$headers = "From: ".$_POST["email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);

			if($send)
	{
		echo "Quote success";
	}
	else
	{
		echo "error";
	}
	
}



//----4:Home-4 form-----//

if(isset($_POST['name']) != ""){


			$to = "sheikhanas261@gmail.com";
			$from =  $_POST["email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["email"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Phone #: </strong>".$_POST["number"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["message"]."<br />";
			$subject = 'Contact Enquiry';		
			$headers = "From: ".$_POST["email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);

			if($send)
			{
			//  To redirect form on a particular page
			header("Location:http://gfln.us/lawnexpress-html/");
			}
	else
	{
		echo "error";
	}
	
}





?>
***//

