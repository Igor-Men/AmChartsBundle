<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:18
 */

namespace IK\AmChartsBundle\Charts\Components;


class OutlineAlpha implements \JsonSerializable {
    public $outlineAlpha;


    public function __construct($outlineAlpha) {
        $this->outlineAlpha = $outlineAlpha;
    }

    public function jsonSerialize(){
        return $this->outlineAlpha;
    }
}