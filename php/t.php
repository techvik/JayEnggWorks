
<?php
// the message
if(isset($_REQUEST['email'])){
$msg = "Name:".$_REQUEST['name']."<br> Email:".$_REQUEST['email']."<br> Phone No:".$_REQUEST['phone']."<br> Message:".$_REQUEST['message']."<br>";


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,150);

// send email
mail("callvikram22@gmail.com","Form",$msg);

echo "<p>Sent!!</p>";
}
else{
    echo "error";
}
?>
    
  