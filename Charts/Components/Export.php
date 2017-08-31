<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:10
 */

namespace IK\AmChartsBundle\Charts\Components;


class Export {

    public $enabled;

    public function __construct($stdObject) {
        foreach ($stdObject as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }
}