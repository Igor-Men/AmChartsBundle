<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:07
 */

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