<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 07.09.17
 * Time: 11:34
 */

namespace IK\AmChartsBundle\Charts\Components;


abstract class AbstractProperty
{
    public function setArrProperties($dataArr) {
        if (!$dataArr) {
            return false;
        }
        foreach ((object)$dataArr as $prop => $value) {
            $property = lcfirst($prop);
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
        return true;
    }

    public function jsonSerialize() {
        $arr = [];
        foreach(get_object_vars($this) as $name => $value) {
            if ($value !== null) {
                $arr[$name] = $value;
            }
        }
        return $arr;
    }

}