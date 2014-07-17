<?php
include('php/application_top.php');
$pageTitle = 'Firefly Update';
$metaKeywords = '';
$metaDescription = '';

include('php/header.global.php');
?>
<style>
    #subscriptions-table {
        width:100%;
        position:relative;
        clear:both;
        float:left;
    }

    #subscriptions-table .cell {
        float:left;
        width:29%;
        padding:1em;
        text-align:center;
    }

    #subscriptions-table .cell li {
        text-align:left;
    }

    #subscriptions-table .price {
        color:#0182B5;
    }

    #subscriptions-table .dollar {
        font-size:3em;
    }

    .anote {
        font-size:.5em;
        vertical-align:super;
    }

</style>
<?php
include('php/subheader.global.php');
?>
    <div class='wrappy'>
        <div class='spacer'></div>
        <h1 class='supertitle'>Firefly Update: Wave One</h1>
        <h2>Overview</h2>
        <p>S3 is moving to a newer, better system! We'll be offering you better email, and faster than ever delivery of your websites. This is the first wave of our Firefly update plan, and while there's more to come, this is the only update that will have pricing changes for existing customers. Please read the details below, and contact Martin to proceed with your new subscription. Technical jargon is below the price details, for those interested.</p>
        <h1>Pricing Changes</h1>
        <p>In order to support our new system, we are now requiring the following subscriptions for our clients. If you wish to use the services listed here, you must sign up for the appropriate subscription. We strongly recommend the Firefly Bundle.</p>
        <p><strong>The following changes go into effect September 1<sup>st</sup>, 2014</strong></p>
        <h2>Fees Being Eliminated</h2>
        <ul>
            <li>Domain Renewal Fees</li>
            <li>Site Migration Fees<span class="anote">3</span></li>
        </ul>
        <h2>New Subscription Rates</h2>
        <div id="subscriptions-table">
            <div class="cell" id="managed-hosting">
                <h3>Managed Hosting</h3>
                <span class="price"><span class="dollar">$5</span>per month<span class="anote">1</span></span>
                <ul>
                    <li>annual domain renewal</li>
                    <li>On-Call Support<span class="anote">2</span></li>
                    <li>Fast Website Delivery</li>
                    <li>Monthly Audience Analytics</li>
                </ul>
            </div>
            <div class="cell" id="webmail">
                <h3>Webmail</h3>
                <span class="price"><span class="dollar">$5</span>per month<span class="anote">1</span></span>
                <ul>
                    <li>Unlimited Email Addresses</li>
                    <li>Modern Webmail Client</li>
                    <li>Easy integration into Outlook and Appl Mail</li>
                </ul>
            </div>
            <div class="cell" id="bundle">
                <h3>Firefly Bundle</h3>
                <span class="price"><span class="dollar">$7</span>per month<span class="anote">1</span></span>
                <ul>
                    <li>All Managed Hosting Features</li>
                    <li>All Webmail Features</li>
                    <li>30% Discount</li>
                </ul>
            </div>
        </div>
        <h2>Opting Out</h2>
        <p>If you want to avoid subscription fees, you can opt-out of these services by September 1<sup>st</sup>, 2014. Opting out will result in your website being removed from our hosting system, and your domain being surrendered at next renewal date. Our team will provide you with the source code of your current website under a licensing agreement.</p>
        <div class="spacer"></div>
        <h1>Hosting</h1>
        <p>In an effort to bring you better service, we are migrating from our current web-host, FatCow, to a VPS Provider, DreamHost. This will allow us to be more flexible in the features we support, and faster than ever at delivering your content to your customers.</p>
        <p>To date we offered basic email support, and basic website hosting. FatCow had some trouble managing our email requirements, specifically they struggled with supporting desktop mail clients, and their webmail solution lacked some basic security features we think are very important.</p>
        <h2>What's New</h2>
        <ul>
            <li>Access to DreamHost's CDN</li>
            <li>S3 Managed Webmail Software</li>
            <li>SSH Access to our Web Server</li>
            <li>Cheaper Domain Registration</li>
            <li>Upgrades to newer versions of PHP (Currently PHP 5.4)</li>
        </ul>
        <h2>How This Affects You</h2>
        <p>Mainly, these are behind-the-scenes changes. However, you will see a change in the webmail client, if you use our hosted webmail. Adittionally, if your website is hosted with S3, your site will be being delivered to your clients faster than ever before.</p>
        
        <div class='spacer'></div>
        <p class='copy'>1) Rates valid for first year of subscription. <br /> 2) On-Call Support available between the hours of 8 AM and 8 PM. Support outside of standard business hours not included in subscription cost. <br/> 3) Site migration fees still apply for anyone not using the Managed Hosting or Firefly Bundle subscription.</p>
    </div>
<?php
include('php/footer.global.php');
?>