		<?php
		if($_POST['fName']){
	
		$to = "email@email.com";
		$from =  $_POST["email"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>First Name: </strong>".$_POST["fName"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Last Name: </strong>".$_POST["lastName"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email: </strong>".$_POST["email"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject: </strong>".$_POST["subject"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Message: </strong>".$_POST["message"]."<br />";
		$subject = 'Contact Us';		
		$headers = "From: ".$_POST["email"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



		if($send)
		{
			echo "success";
		}
		else
		{
			echo "error";
			}
		}

		
		?>