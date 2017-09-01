<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 01.09.17
 * Time: 13:34
 */

namespace IK\AmChartsBundle\Charts\Components;


class SubComponent
{
    public function __construct($strValueAxe) {
        foreach ($strValueAxe as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }
}