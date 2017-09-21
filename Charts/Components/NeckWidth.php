<?php

namespace IK\AmChartsBundle\Charts\Components;


class NeckWidth implements \JsonSerializable {
    public $neckWidth;


    public function __construct($neckWidth) {
        $this->neckWidth = $neckWidth;
    }

    public function jsonSerialize(){
        return $this->neckWidth;
    }
}