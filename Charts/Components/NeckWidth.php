<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09.09.17
 * Time: 0:29
 */

namespace IK\AmChartsBundle\Charts\Components;


class NeckWidth implements \JsonSerializable {
    public $neckWidth;


    public function __construct($neckWidth) {
        $this->neckWidth = $neckWidth;
    }

    public function jsonSerialize(){
        return $this->neckWidth;
    }
}