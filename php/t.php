
<?php
// the message
$msg = "Name:".$_POST['name']."<br> Email:".$_POST['email']."<br> Phone No:".$_POST['phone']."<br> Message:".$_POST['message']."<br>";


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,150);

// send email
mail("callvikram22@gmail.com","Form",$msg);

echo "<p>Sent!!</p>";
?>
    
  