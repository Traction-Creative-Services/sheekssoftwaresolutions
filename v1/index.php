<? session_save_path('/home/users/web/b2775/moo.sheekssoftwaresoluti/cgi-bin/tmp');
session_start();  
?>
<!DOCTYPE html>
<head>
    <title>Sheeks Software Solutions</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9" /> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="packages/core/Scripts/ajax-nav.js"></script>
    <script type="text/javascript" src="packages/portal/Scripts/ajax-nav-complex.js"></script>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link type="text/css" rel="stylesheet" href="packages/core/style/style.css" />
    <link type="text/css" rel="stylesheet" href="packages/core/style/978.css" />
    <link rel="apple-touch-icon" href="favicon.ico"/>
    <meta name="viewport" content="width=480, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Sheeks Software Solutions is a local Web Development company in Minneapolis, Minnesota. Got web prsence needs? We've got you covered.">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>

<body>
<!--[if IE]>
	<style>
		.browsers {
			text-align:center;
		}
		
		.browser {
			float:left;
			height:150px;
			width:150px;
			margin:20px;
		}
	</style>
	<link rel='stylesheet' href='modal/reveal.css'>
	<script language='javascript' src='modal/jquery-1.4.4.min.js'></script>
	<script language='javascript' src='modal/jquery.reveal.js'></script>
	<script language='javascript'>
		$(document).ready(function() {
			$('#IEWarn').reveal();
		});
	</script>
	<div class='reveal-modal' id='IEWarn'>
		<h1>Uh oh...</h1>
		<p>It looks like you're using Internet Explorer. IE is a constant strugle for web developers, because it doesn't follow web standards properly.
		Because of these problems, our sites may not load properly in your browser.</p>
		<p><strong>We strongly recomend you update to a better browser. How about one of these great free options?</strong></p>
		<div class='browsers'>
			<a href='http://www.mozilla.org/en-US/firefox/new/'><img alt='Firefox' src='img/firefox.jpg'  class='browser'></a>
			<a href='https://www.google.com/intl/en/chrome/browser/'><img alt='Chrome' src='img/chrome.jpg'  class='browser'></a>
		</div>
	</div>
<![endif] -->
<a href="https://plus.google.com/116897473038646008516" rel="publisher"></a>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=153687171440523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="first-segment">
		<div class="layout-978">
			<div class="row">
				<div class="col12">
					<!-- <img src="packages/core/img/s3.png" class="logo" alt="Sheeks Solutions Logo Header Image"> -->
				</div>
				<div class="row-end"></div>
			</div>
			<div class="row">
					<div class="col12">
					<? include("packages/core/elements/navigation.php"); ?>
					</div>
					<div class="row-end"></div>
			</div>
		</div>
	</div>
	<div id="second-segment">
		<div class="layout-978">
			<div class="row">
				<div class="col12 spacer"></div>
				<div class="row-end"></div>
			</div>
			<div class="row">	
				<div class="col12" id="content">
					<?
					if($_SESSION['auth'] == 1) {
						include("packages/Blog/manage.php");
					}
					elseif(isset($_GET['page'])) {
						include("packages/core/pages/".$_GET['page'].".php");
					}
					else {
						include("packages/core/pages/home.php");
					}
					?>
				</div>
				<div class="row-end"></div>
			</div>
		</div>
	</div>
	<div id="secondDOTfive-segment">
		<div class="layout-978">
			<div class="row">
				<? include("packages/core/elements/promo.php"); ?>
			</div>
		</div>
	</div>
	<div id="third-segment">
		<div class="layout-978">
			<div class="row">
				<? include("packages/core/elements/otherSites.php"); ?>
			</div>
		</div>
	</div>
	<div id="fourth-segment">
		<div class="layout-978">
			<div class="row" id="footer">
				<div class="col12" id="footer">
					<? include("packages/core/elements/footer.php"); ?>
				</div>
				<div class="row-end">
				</div>
			</div>
		</div>
	</div>
</body>
</html>