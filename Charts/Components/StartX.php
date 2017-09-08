<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:17
 */

namespace IK\AmChartsBundle\Charts\Components;


class StartX implements \JsonSerializable {
    public $startX;

    public function __construct($startX) {
        $this->startX = $startX;
    }

    public function jsonSerialize(){
        return $this->startX;
    }
}