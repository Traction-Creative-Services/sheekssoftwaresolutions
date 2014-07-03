<!DOCTYPE html>
    <html>
<head>
    <title>Flex-Rate Quote Tool</title>
    <?php
        if(isset($_POST['submit'])) {
            //define constants
            $rate = 0.2;
            $minimum_default = '1200';

            $revenue = $_POST['revenue'];
            if($revenue > 18000) {
                $targetQuote = 40*90;
                $qualifies = false;
            } else {
                $targetQuote = $revenue*$rate;
                $targetHours = $targetQuote/30;
                if($targetHours < 40) {
                    $targetQuote = $minimum_default;
                }
                $qualifies = true;
            }
            $targetQuote = round($targetQuote);
        }
    ?>
    <style>
        body {
            background:#999;
            margin:0;
            padding:0;
        }

        #frame {
            width:300px;
            height:auto;
            margin:150px auto;
            border:10px solid #333355;
            background:#d3d3f3;
            border-radius:10px;
            -moz-border-radius:10px;
            -webkit-border-radius:10px;
            -o-border-radius:10px;
            padding:30px;
        }
    </style>
</head>
<body>
    <div id='frame'>
        <h1>Flex-Rate Quote Tool</h1>
    <?php if(isset($_POST['submit'])) {
        if($qualifies) {?>
            <p>Resulting minimum quote: $<?php echo $targetQuote; ?>.00</p>
        <?php } else { ?>
            <p>Client does not qualify for the flex-rate program.</p>
        <?php } ?>
    <?php } else { ?>
        <form method='post' action=''>
            Client Company Monthly Revenue:<br>
            <input type='text' name='revenue'><br>
            <input type='submit' name='submit' value='Submit'>
        </form>
    <?php } ?>
    </div>
</body>
    </html>