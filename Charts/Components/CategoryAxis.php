<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:09
 */

namespace IK\AmChartsBundle\Charts\Components;


class CategoryAxis {

    public $parseDates;
    public $dashLength;
    public $minorGridEnabled;

    public function __construct($stdObject) {
    foreach ($stdObject as $property => $value) {
        if (property_exists($this, $property)) {
            $this->{$property} = $value;
        }
    }

}

}