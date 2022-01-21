<?php  
$name = $_POST['name'];
$email = $_POST['email'];
$_message = $_POST['message'];

$to = "rohit7406524@gmail.com";
$subject = "Mail From Portfolio Site";
$txt = "Name = ".$name."\r\n Email = ".$email."\r\n Message = ".$message;

$headers = ".$name";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location: Thank You");
}
?>