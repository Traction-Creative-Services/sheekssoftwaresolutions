<?php
include('php/application_top.php');
$pageTitle = 'Pricing Schedules';
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
        <h1 class='supertitle'>Detailed Pricing Schedules</h1>
        
        <h2>Non-Subscription Fees<span class="anote">4</span></h2>
        <ul>
            <li>Domain Renewal Fee - $20</li>
            <li>Site Migration Fee - $50</li>
        </ul>
        <h2>Subscription Rates</h2>
        <div id="subscriptions-table">
            <div class="cell" id="managed-hosting">
                <h3>Managed Hosting</h3>
                <span class="price"><span class="dollar">$5</span>per month<span class="anote">1</span></span>
                <ul>
                    <li>annual domain renewal</li>
                    <li>On-Call Support<span class="anote">2</span></li>
                    <li>Fast Website Delivery</li>
                    <li>Monthly Audience Analytics</li>
                    <li>Website Maintenance</li>
                </ul>
            </div>
            <div class="cell" id="webmail">
                <h3>Webmail</h3>
                <span class="price"><span class="dollar">$5</span>per month<span class="anote">1</span></span>
                <ul>
                    <li>Unlimited Email Addresses</li>
                    <li>Modern Webmail Client</li>
                    <li>Easy integration into Outlook ect.</li>
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
        <h2>Hourly Priced Items</h2>
        <ul>
            <li>Development Time - $45<sub>/hr</sub></li>
            <li>Design Time - $45<sub>/hr</sub></li>
            <li>Photography Sessions - $100<sub>/hr</sub></li>
        </ul>
        <h2>Project Pricing</h2>
        <p>As a policy, S3 project prices are estimated internally based on number of expected hours involved in completing a project. External quotes are provided in full before the start of a project. Payment schedules for large projects are as follows:</p>
        <ul>
            <li>25% at signing of contract</li>
            <li>50% upon design completion</li>
            <li>25% upon contract completion</li>
        </ul>
        <div class='spacer'></div>
        <p class='copy'>1) Rates valid for first year of subscription. <br /> 2) On-Call Support available between the hours of 8 AM and 8 PM. Support outside of standard business hours not included in subscription cost. <br/> 3) Site migration fees still apply for anyone not using the Managed Hosting or Firefly Bundle subscription.<br/>4) Subscription customers are exempt from non-subscription fees.</p>
    </div>
<?php
include('php/footer.global.php');
?>