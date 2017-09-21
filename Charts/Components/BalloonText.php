<?php

namespace IK\AmChartsBundle\Charts\Components;


class BalloonText implements \JsonSerializable {
    public $balloonText;

    public function __construct($balloonText) {
        $this->balloonText = $balloonText;
    }

    public function jsonSerialize(){
        return $this->balloonText;
    }
}