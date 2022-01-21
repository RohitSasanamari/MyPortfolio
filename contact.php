<?php  
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = "PersonalPortfolio";
$to = "rohit7406524@gmail.com";
$subject = "Mail From Portfolio Site";
$email_body = "User Name : $name.\n".
                "Email : $email.\n".
                    "Message : $message.\n";

$headers = "From: $email_form \r\n";
$headers .= "Reply-to: $email \r\n";
mail($to,$subject,$email_body,$headers);
header("Location: index.html");
}
?>