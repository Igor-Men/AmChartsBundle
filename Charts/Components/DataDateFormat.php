<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:07
 */

namespace IK\AmChartsBundle\Charts\Components;


class DataDateFormat {
    public $dataDateFormat;
    public function __construct($dataDateFormat) {
        $this->dataDateFormat = $dataDateFormat;
    }
    function __toString() {
        return $this->dataDateFormat;
    }
}