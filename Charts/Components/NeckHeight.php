<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 23:35
 */

namespace IK\AmChartsBundle\Charts\Components;


class NeckHeight implements \JsonSerializable {
    public $neckHeight;


    public function __construct($neckHeight) {
        $this->neckHeight = $neckHeight;
    }

    public function jsonSerialize(){
        return $this->neckHeight;
    }
}