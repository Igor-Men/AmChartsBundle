<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:10
 */

namespace IK\AmChartsBundle\Charts\Components;


class Balloon extends AbstractProperty {
    public $borderThickness;
    public $shadowAlpha;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }
}