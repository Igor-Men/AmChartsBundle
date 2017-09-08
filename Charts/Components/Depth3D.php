<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:17
 */

namespace IK\AmChartsBundle\Charts\Components;


class Depth3D implements \JsonSerializable {
    public $depth3D;

    public function __construct($depth3D) {
        $this->depth3D = $depth3D;
    }

    public function jsonSerialize(){
        return $this->depth3D;
    }
}