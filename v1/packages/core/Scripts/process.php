<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$body=$_POST['message'];

$message = "From: $name \n\n Email: $email \n\n Message: $body";
$to = "martin.sheeks@gmail.com";
$subject = "New Form Submission";
$from = "$email";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
header("location: ../contact.php");
?>
</body>
</html>