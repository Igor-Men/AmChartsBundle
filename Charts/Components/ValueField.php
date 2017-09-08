<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:13
 */

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