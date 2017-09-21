<?php

namespace IK\AmChartsBundle\Charts\Components;


class Angle extends AbstractProperty implements \JsonSerializable {

    public $angle;

    public function __construct($angle) {
        $this->angle = $angle;
    }

    public function jsonSerialize(){
        return $this->angle;
    }
}