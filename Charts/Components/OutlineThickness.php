<?php

namespace IK\AmChartsBundle\Charts\Components;


class OutlineThickness implements \JsonSerializable {
    public $outlineThickness;

    public function __construct($outlineThickness) {
        $this->outlineThickness = $outlineThickness;
    }

    public function jsonSerialize(){
        return $this->outlineThickness;
    }
}