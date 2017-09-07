<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:10
 */

namespace IK\AmChartsBundle\Charts\Components;


class Legend extends AbstractProperty {

    public $useGraphSettings;
    public $position;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }
}