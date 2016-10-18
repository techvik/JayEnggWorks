<?php
if(isset($_POST['email'])) {
    $email_to = "callvikram22@gmail.com";
    $email_subject = "Jay Engineering Works Query from website";
    function died($error) {
        echo "We are sorry, but there were error(s) in the form submission!<br>"
        echo "These are the error(s):".$error."<br>";
        echo "Please try again"
        die();
    }

    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['message'])){
        died("Some fields were not filled.");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $error_message = "";
 
    $email_regex = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_regex,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_regex = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_regex,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
}


$email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Phone No: ".clean_string($phone)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
echo "<p>You have sent a mail</p>";
 
 
 
 
<?php
 
}
 
?>