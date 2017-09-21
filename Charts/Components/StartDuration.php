<?php

namespace IK\AmChartsBundle\Charts\Components;


class StartDuration implements \JsonSerializable {
    public $startDuration;

    public function __construct($startDuration) {
        $this->startDuration = $startDuration;
    }

    public function jsonSerialize(){
        return $this->startDuration;
    }
}