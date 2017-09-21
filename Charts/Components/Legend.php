<?php

namespace IK\AmChartsBundle\Charts\Components;


class Legend extends AbstractProperty {

    public $useGraphSettings;
    public $position;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }
}