<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:09
 */

namespace IK\AmChartsBundle\Charts\Components;


class CategoryAxis extends AbstractProperty {

    public $parseDates;
    public $dashLength;
    public $minorGridEnabled;

    public $gridPosition;
    public $gridAlpha;
    public $axisAlpha;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }
}