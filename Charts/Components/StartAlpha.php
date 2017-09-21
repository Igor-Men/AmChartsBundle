<?php

namespace IK\AmChartsBundle\Charts\Components;


class StartAlpha implements \JsonSerializable {
    public $startAlpha;


    public function __construct($startAlpha) {
        $this->startAlpha = $startAlpha;
    }

    public function jsonSerialize(){
        return $this->startAlpha;
    }
}