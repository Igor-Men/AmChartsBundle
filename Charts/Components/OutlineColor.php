<?php

namespace IK\AmChartsBundle\Charts\Components;


class OutlineColor implements \JsonSerializable {
    public $outlineColor;

    public function __construct($outlineColor) {
        $this->outlineColor = $outlineColor;
    }

    public function jsonSerialize(){
        return $this->outlineColor;
    }
}