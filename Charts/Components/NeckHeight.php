<?php

namespace IK\AmChartsBundle\Charts\Components;


class NeckHeight implements \JsonSerializable {
    public $neckHeight;


    public function __construct($neckHeight) {
        $this->neckHeight = $neckHeight;
    }

    public function jsonSerialize(){
        return $this->neckHeight;
    }
}