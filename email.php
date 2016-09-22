<?php
if(isset($_POST["submit"])){

if($_POST["name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}
else
{
$email=$_POST['email'];
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "\r\n"; 
$headers .= 'Cc:'. $email2 . "\r\n";
$message = wordwrap($message, 70);

mail("recievers@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly!";
}
}
}
?>