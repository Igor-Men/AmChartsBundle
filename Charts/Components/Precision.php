<?php

namespace IK\AmChartsBundle\Charts\Components;


class Precision implements \JsonSerializable {
    public $precision;
    public function __construct($precision) {
        $this->precision = $precision;
    }

    public function jsonSerialize() {
        return $this->precision;
    }

}