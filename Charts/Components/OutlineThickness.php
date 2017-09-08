<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:18
 */

namespace IK\AmChartsBundle\Charts\Components;


class OutlineThickness implements \JsonSerializable {
    public $outlineThickness;

    public function __construct($outlineThickness) {
        $this->outlineThickness = $outlineThickness;
    }

    public function jsonSerialize(){
        return $this->outlineThickness;
    }
}