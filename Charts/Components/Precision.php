<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


class Precision {
    public $precision;
    public function __construct($precision) {
        $this->precision = $precision;
    }
    function __toString() {
        return $this->precision;
    }
}