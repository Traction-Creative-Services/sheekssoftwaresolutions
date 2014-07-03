<?
$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST['body'];

$message = "New form submission from, ".$email.". ".$name." said: ".$body;

$to = "martin.sheeks@gmail.com";
$subject = "New S3 Form Submission";
$headers = "From: webmaster@sheekssoftwaresolutions.com";
mail($to,$subject,$message,$headers);
header("Location: http://www.sheekssoftwaresolutions.com/");
?>