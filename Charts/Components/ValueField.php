<?php

namespace IK\AmChartsBundle\Charts\Components;


class ValueField implements \JsonSerializable {
    public $valueField;

    public function __construct($valueField) {
        $this->valueField = $valueField;
    }

    public function jsonSerialize(){
        return $this->valueField;
    }
}