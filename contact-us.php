<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
include('php/application_top.php');
$pageTitle = 'Contact Us';
$metaKeywords = '';
$metaDescription = '';

include('php/header.global.php');
include('php/class.phpMailer.php');
include('php/subheader.global.php');

if(isset($_POST['name'])) {
	$mail = new phpMailer();
	$mail->setFrom('mailer@sheekssoftwaresolutions.com', 'S3 Mailer');
	$mail->addReplyTo($_POST['email']);
	$mail->addAddress('martin@sheekssoftwaresolutions.com');
	$mail->Subject = $_POST['type'];
	$mail->Body = '<p><strong>Name:</strong> '.$_POST['name'].' </strong><br />'
		.'<strong>Comments</strong><br />'.$_POST['comments'].' </p>';
	$mail->AltBody = strip_tags($mail->Body);
	if(!$mail->send()) {
		$msg = "Error: ".$mail->ErrorInfo;
	} else {
		$msg = "Thanks! We'll be in touch soon.";
	}
}
?>
    <div class='wrappy'>
    	<?php if(isset($msg)) { ?>

    	<h1>Thank You</h1>
    	<p><?php echo $msg; ?></p>

    	<?php } else { ?>

        <h1>Contact Us</h1>
        <p>We would love to hear from you. Feel free to fill out the form below, or call us at (651) 300-9555.</p>
        <form id='contactForm' action='contact-us.php' method='post'>
        	<label for='name'>Name</label>
        	<input type='text' id='name' name='name' />
        	<label for='email'>Email</label>
        	<input type='email' id='email' name='email' />
        	<label for='type'>Interest</label>
        	<select id='type' name='type'>
        		<option value='general' selected>--------</option>
        		<option value='rfq'>Request A Quote</option>
        		<option value='help'>Debug Code</option>
        		<option value='general'>General Inquiry</option>
        		<option value='testimonial'>Submit a Testimonial</option>
        	</select>
        	<label for='comments'>Comments</label>
        	<textarea id='comments' name='comments' rows='7' cols='70'></textarea>
        	<input type='submit' id='submit' name='submit' value='Send' />
        </form>

        <?php } ?>
    </div>
<?php
include('php/footer.global.php');
?>