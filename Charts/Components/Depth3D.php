<?php

namespace IK\AmChartsBundle\Charts\Components;


class Depth3D implements \JsonSerializable {
    public $depth3D;

    public function __construct($depth3D) {
        $this->depth3D = $depth3D;
    }

    public function jsonSerialize(){
        return $this->depth3D;
    }
}