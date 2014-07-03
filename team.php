<?php
include('php/application_top.php');
$pageTitle = 'Team';
$metaKeywords = 'Jessi Goodell, Martin Sheeks, Nate Eul, web developer, graphic designer';
$metaDescription = 'Our small team of web developers and graphic designers build sites that create lasting connections with your brand.';

include('php/header.global.php'); ?>
<script type="text/javascript" src="js/base64.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.mailto').each(function() {
				var email = $(this).html();
				email = rot13(decodeBase64(email));
				//alert(email);
				html = '<a class="email" href="mailto:'+email+'">'+email+'</a>';
				$(this).html(html);
			});
		});
	</script>
<?php
include('php/subheader.global.php');
?>
    <div class='wrappy'>
        <div class='spacer'></div>
        <h1 class='supertitle'>Small in numbers, Huge in capacity.</h1>
        <h1>Our Team</h1>
        <h2 class='subtitle'>It takes all walks...</h2>
        <p>Our team may be small, but we pack a big punch. Our differences in background and approach come together to provide you with a strong completed product. Check out who you'll be working with on your site, and reach out to us with any questions.</p>
        <div class='spacer'></div>
        <img class='img-left profile-img' alt='Martin' src='img/martin.png'>
        <h3>
            Martin Sheeks<br>
            Lead Developer / Owner<br>
            (p) (612) 735-3063<br>
            (e) <span class="mailto"><?php echo base64_encode(str_rot13('martin@sheekssoftwaresolutions.com')); ?></span>
        </h3>
        <p>I have been working as a professional web developer since 2008. When it comes to web development, I love piecing together a complex project, or just pounding out a simple solution. Aside from computer work, I enjoy alpine skiing, biking, and a good night spent with friends. I also enjoy spending time with my wife, Heidi, and my roommate, Laura. I look forward to working with you on your web site project.</p>
        <div class='spacer'></div>
        <img class='img-left profile-img' alt='Jessi' src='img/jessi.png'>
        <h3>
            Jessi Goodell<br>
            Lead Graphic Designer<br>
            (p) (612) 205-7126<br>
            (e) <span class="mailto"><?php echo base64_encode(str_rot13('jessi@sheekssoftwaresolutions.com')); ?></span>
        </h3>
        <p>I have been a practicing designer for about four years. When hashing out projects, I tend to relish making a mess and experimenting with multiple mediums, often yielding some unconventional solutions. I also enjoy playing the djembe, baking bread, and various tabletop RPGs.</p>
        <div class='spacer'></div>
        <img class='img-left profile-img' alt='Nate' src='img/nate.jpg'>
        <h3>
            Nate Eul<br>
            Graphic Designer<br>
            (p) (507) 210-7500<br>
            (e) <span class="mailto"><?php echo base64_encode(str_rot13('nate@sheekssoftwaresolutions')); ?></span>
        </h3>
        <p>I'm a designer / photographer by trade, but I like to dabble in a little bit of a everything. I feel that knowing a little bit about a lot of things can go a long ways. When I'm not busy creating I like to spend my time disc golfing, running, cycling, gaming, and most importantly petting my dog.</p>
    </div>
<?php
include('php/footer.global.php');
?>