<head>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36362540-1']);
        _gaq.push(['_trackPageview','/team']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.project-img').click(function() {
                toggleBiggy($(this));
            });
        });

        function toggleBiggy(el) {
            if(el.hasClass('biggy')) {
                el.removeClass('biggy');
                el.animate({width:'300px'}, 1500);
                el.parent.find('.project-desc').css('display','none');
            }
            else {
                el.addClass('biggy');
                el.animate({width:'100%'}, 1500);
                el.parent.find('.project-desc').css('display','block');
            }
        }
    </script>
    <meta name="description" content="Our projects are completed using cutting edge web-standards in both performance and SEO." />
    <title>Team</title>
</head>
<h1>Portfolio of Work</h1>
<p>As a company, we have to let our work stand for itself. So here you can look at what we've done, and who our clients are. These are great companies, and they deserve your business. So if you think you could find a use for their services, follow the link!</p>

<div class='project'>
    <div class='project-img'>
        <img alt='Birdtown Coop' src='packages/core/img/BirdtownCoop.JPG'>
    </div>
    <div class='project-desc'>
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
</div>
<div class="clear"></div>

<div class='project'>
    <div class='project-img'>
        <img alt='Birdtown Coop' src='packages/core/img/nichols.JPG'>
    </div>
    <div class='project-desc'>
        <a href='http://www.joelnicholsfurniture.com' target='_blank'><h3>Joel Nichols Fine Furniture</h3></a>
        <strong>Services Provided</strong><br>
        <ul>
            <li>Web Design</li>
            <li>Hosting</li>
            <li>Domain Registration</li>
            <li>Site Build-out</li>
            <li>Content Management System</li>
            <li>Ongoing support</li>
        </ul>
    </div>
</div>
<div class="clear"></div>

<div class='project'>
    <div class='project-img'>
        <img alt='Birdtown Coop' src='packages/core/img/funsteps.JPG'>
    </div>
    <div class='project-desc'>
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
</div>
<div class="clear"></div>