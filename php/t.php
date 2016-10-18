<?php
 $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message=="")||($phone==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("callvikram22@gmail.com", $subject, $message."Phone No:".$phone, $from);
		echo "Email sent!";
	    }
    
?>    