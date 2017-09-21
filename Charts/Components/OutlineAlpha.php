<?php

namespace IK\AmChartsBundle\Charts\Components;


class OutlineAlpha implements \JsonSerializable {
    public $outlineAlpha;


    public function __construct($outlineAlpha) {
        $this->outlineAlpha = $outlineAlpha;
    }

    public function jsonSerialize(){
        return $this->outlineAlpha;
    }
}