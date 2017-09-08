<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 23:36
 */

namespace IK\AmChartsBundle\Charts\Components;


class StartAlpha implements \JsonSerializable {
    public $startAlpha;


    public function __construct($startAlpha) {
        $this->startAlpha = $startAlpha;
    }

    public function jsonSerialize(){
        return $this->startAlpha;
    }
}