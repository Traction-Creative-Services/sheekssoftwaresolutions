<?php

class fr_calc {

    private $rate = 0.2;
    private $minimum_default = '1200';
    private $max_revenue = 18000;
    private $defaultNormal = 3600;
    private $revenue;
    private $contact = 'martin.sheeks@gmail.com';

    public $qualifies = false;
    public $belowMin = false;
    public $targetQuote;
    public $stored = false;

    function __construct() {

    }

    public function findRevenue($rev1, $rev2, $rev3, $rev4) {
        $revTotal = $rev1 + $rev2 + $rev3 + $rev4;
        $revAvg = $revTotal / 4;
        $this->revenue = $revAvg;
    }

    public function doCalc($nonProfit, $nonProfDesc, $five01Stat, $email) {
        if($nonProfit == 1) {
            $this->sendEntry($nonProfDesc, $five01Stat, $email);
        } else {
            if($this->isOverMaxRevenue()) {
                $this->targetQuote = $this->defaultNormal;
            } else {
                $this->targetQuote = $this->revenue*$this->rate;
                $targetHours = $this->targetQuote/30;
                if($targetHours < 40) {
                    $this->targetQuote = $this->minimum_default;
                    $this->belowMin = true;
                }
                else {
                    $this->qualifies = true;
                }
            }
            $this->targetQuote = round($this->targetQuote);
        }
    }

    private function isOverMaxRevenue() {
        if($this->revenue > $this->max_revenue) return true;
        else return false;
    }

    private function sendEntry($Desc, $stat, $email) {
        $this->stored = true;
        $to = $this->contact;
        $from = $email;
        $subject = "New S3 Flex-Rate Application";
        $message = "Revenue: ".$this->revenue;
        $message .= "/r/n";
        $message .= "Non-Profit Status: ".$stat;
        $message .= "/r/n";
        $message .= "Mission: ".$Desc;
        $headers = "From:".$from;
        mail($to,$subject,$message,$headers);
    }
}