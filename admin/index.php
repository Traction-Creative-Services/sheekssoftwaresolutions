<?php
$uname = 'admin';
$pword = 'Novabuild1@';


if(isset($_SESSION['loggin']) || isset($_GET['auth'])) {
	include('../php/application_top.php');
	$pageTitle = 'New Blog Post';
	$metaKeywords = '';
	$metaDescription = ''; ?>
	<!DOCTYPE html>
	<head>
		<title>Blog Admin</title>
		<script type='text/javascript' src='js/reveal/jquery.reveal.js'></script>
		<link rel='stylesheet' href='js/reveal/reveal.css'>
		<script src='js/saver.js'></script>
		<script src='js/mercury/mercury_loader.js'></script>
		<link rel='stylesheet' href='../css/core.css'>
		<link rel='stylesheet' type='text/css' href='../css/poa.css'>
		<link rel='stylesheet' href='../css/style.css'>
		<link rel="icon" type='image/jpeg' href="../img/logo.png" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type='text/javascript' src='../js/modernizr.js'></script>
		<script type='text/javascript' src='../js/main.js'></script>
		<script type='text/javascript' src='../js/newNav.js'></script>
		<style>
			#authoringInfo {
				position:absolute;
				top:75px;
				right:0;
				padding:10px;
			}

			#authoringInfo input {
				width:250px;
				height:25px;
				font-size:1.3em;
			}
		</style>
	</head>
	<body>
	<div id='nav'>
		<nav>
			<a href='../team.php'><i class='icon-team'></i></a>
			<a href='../services.php'><i class='icon-services'></i></a>
			<a href='../portfolio.php'><i class='icon-portfolio'></i></a>
			<a href='../pricing.php'><i class='icon-pricing'></i></a>
		</nav>
	</div>
	<div class='flyout' id='team'>Team</div>
	<div class='flyout' id='services'>Services</div>
	<div class='flyout' id='portfolio'>Portfolio</div>
	<div class='flyout' id='pricing'>Pricing</div>
	<div class='flyout' id='testimonials'>Testimonials</div>
	<a href='index.php'><img alt='S3 Logo' class='logo' src='../img/logo.png'></a>
	<div id='header'>
		<div class='wrappy'>
			<p>Call Us Today | (651) 300-9555</p>
		</div>
	</div>
	<div id='main'>
		<div id='content-wrapper'>
			<div id='content'>
	<div class='wrappy' data-mercury="full" id="blogPost">
		<h1>Content</h1>
		<p>it goes here</p>
	</div>
				<div id='authoringInfo'>
					<table>
						<tr>
							<td>Title</td>
							<td><input type='text' id='title'></td>
						</tr>
						<tr>
							<td>Author</td>
							<td><input type='text' id='author'></td>
						</tr>
					</table>
				</div>
	</div>
			<div id='saveModal' class='reveal-modal'>
				<h1>Save Post</h1>
				<p>Title: <input type='text' id='title'></p>
				<p>Author: <input type='text' id='author'></p>
				<input type='submit' id='sendForm'>
				<a class='close-reveal-modal'>&#215;</a>
			</div>
<div class='clear'></div>
</div>
<div class="footer">
    <div class='wrappy'>
        <a href='http://dev.sheekssoftwaresolutions.com'>Developers</a>
        <a href='http://community.sheekssoftwaresolutions.com'>Community</a>
        <a href='sitemap.php'>Sitemap</a>
        <a href='http://client.sheekssoftwaresolutions.com'>Client Services</a>
        <a href='./contact.php'>Contact Us</a>
        <a href='./listings.php'>Join Our Team</a>
        <div class='spacer'></div>
        <span class="copy">All Content &copy; Sheeks Software Solutions, 2013</span>
    </div>
</div>
</div>
</body>
</html>
<?php } else { ?>
<!DOCTYPE html>
	<h1>Hello world</h1>
<?php }?>


