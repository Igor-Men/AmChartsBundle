<?php

namespace IK\AmChartsBundle\Charts\Components;


class MarginLeft implements \JsonSerializable {
    public $marginLeft;

    public function __construct($marginLeft) {
        $this->marginLeft = $marginLeft;
    }
    public function jsonSerialize(){
        return $this->marginLeft;
    }
}