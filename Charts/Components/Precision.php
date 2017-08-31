<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


class Precision implements \JsonSerializable {
    public $precision;
    public function __construct($precision) {
        $this->precision = $precision;
    }
    function __toString() {
        return $this->precision;
    }
    public function jsonSerialize() {
        return $this->precision;
    }

}