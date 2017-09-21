<?php

namespace IK\AmChartsBundle\Charts\Components;


class MarginRight implements \JsonSerializable {
    public $marginRight;

    public function __construct($marginRight) {
        $this->marginRight = $marginRight;
    }

    public function jsonSerialize(){
        return $this->marginRight;
    }
}