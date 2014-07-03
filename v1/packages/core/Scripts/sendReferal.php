<?php
	$sender = $_GET['senderName'];
	$senderEmail = $_GET['senderEmail'];
	$getter = $_GET['getterName'];
	$getterEmail = $_GET['getterEmail'];
	$relation = $_GET['relationship'];
	
	$msg1 = "Hello, ".$sender."!\r\n\r\nWe've sent your message to ".$getter." about getting online with S3. If we hear back from them, and get a signed contract, we'll be sure to get in touch to get you your $75.00 bonus!\r\n\r\nAll the best,\r\nThe S3 Team\r\nSheeks Software Solutions\r\nwww.sheekssoftwaresolutions.com\r\nSheekssolutions@gmail.com";
	
	$msg2 = "Hello, ".$getter."!\r\n\r\nWe've been talking with your ".$relation.", ".$sender.", and they think we might be able to help you out. Do you have a company, event, or cause that you would like to get online? Our trained development and design professionals are here to help you get online as soon as possible! Get in touch today, and we'll help you get online with a professional website, and a full social web presence.\r\n\r\nHoping to hear from you soon,\r\nThe S3 Team\r\nSheeks Software Solutions\r\nwww.sheekssoftwaresolutions.com\r\nSheekssolutions@gmail.com";
	
	$headers = "From:webmaster@sheekssoftwaresolutions.com";
	$getterSubject = "Your friend ".$sender." thinks we can help you get online!";
	mail($senderEmail,"S3 sent your referal",$msg1,$headers);
	mail($getterEmail,$getterSubject,$msg2,$headers);
	echo "Thanks! We'll be in touch.";
?>