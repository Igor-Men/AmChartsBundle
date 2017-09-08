<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:16
 */

namespace IK\AmChartsBundle\Charts\Components;


class MarginRight implements \JsonSerializable {
    public $marginRight;

    public function __construct($marginRight) {
        $this->marginRight = $marginRight;
    }

    public function jsonSerialize(){
        return $this->marginRight;
    }
}