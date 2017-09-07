<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:10
 */

namespace IK\AmChartsBundle\Charts\Components;


class Export extends AbstractProperty {

    public $enabled;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }
}