<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:13
 */

namespace IK\AmChartsBundle\Charts\Components;


class StartDuration implements \JsonSerializable {
    public $startDuration;

    public function __construct($startDuration) {
        $this->startDuration = $startDuration;
    }

    public function jsonSerialize(){
        return $this->startDuration;
    }
}