<?php

namespace IK\AmChartsBundle\Charts\Components;


class StartX implements \JsonSerializable {
    public $startX;

    public function __construct($startX) {
        $this->startX = $startX;
    }

    public function jsonSerialize(){
        return $this->startX;
    }
}