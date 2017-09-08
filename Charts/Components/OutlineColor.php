<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:18
 */

namespace IK\AmChartsBundle\Charts\Components;


class OutlineColor implements \JsonSerializable {
    public $outlineColor;

    public function __construct($outlineColor) {
        $this->outlineColor = $outlineColor;
    }

    public function jsonSerialize(){
        return $this->outlineColor;
    }
}