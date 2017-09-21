<?php

namespace IK\AmChartsBundle\Charts\Components;


class DataDateFormat implements \JsonSerializable {
    public $dataDateFormat;
    public function __construct($dataDateFormat) {
        $this->dataDateFormat = $dataDateFormat;
    }

    public function jsonSerialize() {
        return $this->dataDateFormat;
    }
}