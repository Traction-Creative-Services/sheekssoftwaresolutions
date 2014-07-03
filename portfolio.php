<?php
include('php/application_top.php');
$pageTitle = 'Portfolio';
$metaKeywords = 'portfolio, web design, hosting, support, content management system, email, Robbinsdale Food Coop, Joel Nichols, Funsteps';
$metaDescription = 'As a company, we have to let our work stand for itself. Take a look!';

include('php/header.global.php');
?>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<link rel="stylesheet" href="css/jquery.bxslider.css">
<script>
	$(document).ready(function() {
		$('.bxslider').bxSlider({
			controls:true,
			mode:'vertical'
		});
	})
</script>
<?php
include('php/subheader.global.php');
?>
    <div class='wrappy'>
        <div class='spacer'></div>
	    <div id="top"></div>
        <h1 class='supertitle'>We do great work, but don't take our word for it...</h1>
	    <h1>Portfolio of Work</h1>
	    <ul class="bxslider">
		    <li>
			    <div class="slide">
				    <img alt='Donatos Direct' src='img/portfolio/donatos/donatos.JPG'>
				    <a href='http://www.donatosdirect.com' target='_blank'><h3>Donato's Direct</h3></a>
				    <strong>Services Provided</strong><br>
				    <ul>
					    <li>Website Design</li>
					    <li>Content Formating and review</li>
					    <li>Basic SEO Preperations</li>
					    <li>Custom Photo Gallery</li>
					    <li>Custom Events Calendar</li>
					    <li>On-going support</li>
				    </ul>
			    </div>
		    </li>
		    <li>
			    <div class="slide">
				    <img alt='MN Couple Therapy Center' src='img/portfolio/mnctc/mnctc.JPG'>
				    <a href='http://www.mncoupletherapycenter.com' target='_blank'><h3>MN Couple Therapy Center</h3></a>
				    <strong>Services Provided</strong><br>
				    <ul>
					    <li>Domain Registration</li>
					    <li>Site Clone</li>
					    <li>Ongoing support</li>
					    <li>Email Management</li>
				    </ul>
			    </div>
		    </li>
		    <li>
			    <div class="slide">
				    <img alt='Birdtown Coop' src='img/portfolio/birdtownfoods/BirdtownCoop.JPG'>
				    <a href='http://www.robbinsdalefoodcoop.org' target='_blank'><h3>Birdtown Food Co-op</h3></a>
				    <strong>Services Provided</strong><br>
				    <ul>
					    <li>Hosting</li>
					    <li>Domain Registration</li>
					    <li>Site Build-out</li>
					    <li>Content Management System</li>
					    <li>Email Set-up</li>
				    </ul>
			    </div>
		    </li>
		    <li>
			    <div class="slide">
				    <img alt='Funsteps Inc' src='img/portfolio/funsteps.JPG'>
				    <a href='http://www.funsteps.com' target='_blank'><h3>Funsteps, Inc.</h3></a>
				    <strong>Services Provided</strong><br>
				    <ul>
					    <li>Domain Registration</li>
					    <li>Site Build-out</li>
					    <li>Content Management System</li>
					    <li>Ongoing support</li>
					    <li>eCommerce site</li>
				    </ul>
			    </div>
		    </li>
		    <li>
		    	<div class="slide">
		    		<img alt="Veterinary Dermatology Services" src="img/portfolio/vetderm/home.jpg" />
		    		<a href="http://www.vetdermservices.com" target="_blank"><h3>Veterinary Dermatology Services</h3></a>
		    		<strong>Services Provided</strong><br>
		    		<ul>
		    			<li>Domain REgistration</li>
		    			<li>Brand Development</li>
		    			<li>Website Design</li>
		    			<li>Site Build-Out</li>
		    			<li>Ongoing Support</li>
		    			<li>Basic SEO Preperations</li>
		    		</ul>
		    	</div>
		    </li>
	    </ul>
	    <div class='clear'></div>
    </div>
<?php
include('php/footer.global.php');
?>