<?php

namespace IK\AmChartsBundle\Charts\Components;


class LabelPosition implements \JsonSerializable {
    public $labelPosition;

    public function __construct($labelPosition) {
        $this->labelPosition = $labelPosition;
    }

    public function jsonSerialize(){
        return $this->labelPosition;
    }
}