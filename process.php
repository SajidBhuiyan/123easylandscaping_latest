<?php

//----1:-Conatct page form-----//

if(isset($_POST['contact_name']) != ""){
			$to = "shmai.com@gmail.com";
			$from =  $_POST["contact_email"];
			$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["contact_name"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["contact_email"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["contact_phone"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject: </strong>".$_POST["contact_subject"]."<br />";
			$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["message"]."<br />";
			$subject = 'Contact Enquiry';		
			$headers = "From: ".$_POST["contact_email"]."\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$send =	mail($to,$subject,$message,$headers);
	
	
	
	if($send)
	{
		echo "success contact";
	}
	else
	{
		echo "error";
	}
}

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


