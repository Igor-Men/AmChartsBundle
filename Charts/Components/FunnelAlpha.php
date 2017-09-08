<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 23:36
 */

namespace IK\AmChartsBundle\Charts\Components;


class FunnelAlpha implements \JsonSerializable {
    public $funnelAlpha;


    public function __construct($funnelAlpha) {
        $this->funnelAlpha = $funnelAlpha;
    }

    public function jsonSerialize(){
        return $this->funnelAlpha;
    }
}