<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:17
 */

namespace IK\AmChartsBundle\Charts\Components;


class MarginLeft implements \JsonSerializable {
    public $marginLeft;

    public function __construct($marginLeft) {
        $this->marginLeft = $marginLeft;
    }
    public function jsonSerialize(){
        return $this->marginLeft;
    }
}