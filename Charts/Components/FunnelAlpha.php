<?php

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