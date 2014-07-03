<!DOCTYPE html>
    <html>
<head>
    <title>Flex-Rate Quote Tool</title>
    <?php
    include('calc.class.php');
    $calc = new fr_calc();

        if(isset($_POST['submit'])) {

            $rev1 = (int)$_POST['revenue1'];
            $rev2 = (int)$_POST['revenue2'];
            $rev3 = (int)$_POST['revenue3'];
            $rev4 = (int)$_POST['revenue4'];
            if(isset($_POST['nonProfit'])) $nonProfit = (int)$_POST['nonProfit'];
            if(isset($_POST['email'])) $email = $_POST['email']; else $email = '';

            $calc->findRevenue($rev1,$rev2,$rev3,$rev4);
            $calc->doCalc($nonProfit,$_POST['nonProfitMission'],$_POST['nonProfitType'],$email);
        }
    ?>
    <style>
        body {
            background:#FFF;
            margin:0;
            padding:0;
        }

        #frame {
            font-size:1.3em;
            width:600px;
            height:auto;
            margin:50px auto;
            border:10px solid #0280B3;
            background:#f3f3ef;
            border-radius:10px;
            -moz-border-radius:10px;
            -webkit-border-radius:10px;
            -o-border-radius:10px;
            padding:30px;
        }

        #frame input {
            font-size:1.3em;
        }

        #frame input[type="submit"] {
            margin:20px 0 0 0;
            float:right;
            background:#FFF;
            border:2px solid #0280B3;
            border-radius:5px;
        }

        #frame input[type="submit"]:hover {
            background:#0285B3;
            color:#FFF;
        }

        #additionalQs {
            height:0;
            overflow:hidden;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $("#yes, #no").change(function() {
                if($('#yes').is(':checked')) {
                    $("#additionalQs").animate({height:'400px'});
                }
                else {
                    $("#additionalQs").animate({height:'0'});
                }
            })
        })
    </script>
</head>
<body>
    <div id='frame'>
        <h1>S3 Smart Quote Form</h1>
    <?php if(isset($_POST['submit'])) {
        if($calc->stored) { ?>
            <p>Your application has been sent to our sales team for further review. Thank you for applying.</p>
        <?php } else {
        if($calc->qualifies) { ?>
            <p>Resulting minimum quote: $<?php echo $calc->targetQuote; ?>.00</p>
        <?php }
        elseif($calc->belowMin) { ?>
            <p>Client's income level is below minimum flex-point. The best available quote is. $<?php echo $calc->targetQuote; ?>.00</p>
        <?php } else { ?>
            <p>Client does not qualify for the flex-rate program.</p>
        <?php } } ?>
    <?php } else { ?>
        <form method='post' action=''>
            <h2>Client Monthly Revenue Information</h2>
            <p>In order to determine the equal burden pricing you may qualify for, we need to know the total gross revenue from your business for the past four months.</p>
            Month 1: <input type='number' name='revenue1'><br>
            Month 2: <input type='number' name='revenue2'><br>
            Month 3: <input type='number' name='revenue3'><br>
            Month 4: <input type='number' name='revenue4'><br>
            <h2>Additional Information</h2>
            <p>Special pricing considerations are also available for Non-Profit organizations, and groups in certain industries.</p>
            Is your company a Non-Profit or Charity organization?
            <input id="yes" type="radio" name="nonProfit" value="1"> Yes <input id="no" type="radio" name="nonProfit" value="0" checked> No<br>
            <div id='additionalQs'>
                <p>What is your Non-Profit status? <input type='text' name='nonProfitType' placeholder='501c3'></p>
                <p>Briefly describe your company's mission:<br>
                <textarea name="nonProfitMission" cols='70' rows='10'></textarea></p>
                <p>Please provide an email address for us to reach you at. <input type='email' name='email'></p>
            </div>
            <input type='submit' name='submit' value='Submit'>
        </form>
    <?php } ?>
    </div>
</body>
    </html>