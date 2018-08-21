<?php

namespace IK\AmChartsBundle\Charts\Components;


abstract class AbstractProperty
{
    protected $arrPropertyFunctionNames = [];

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
            if ($value === null) {
                continue;
            }
            if ($name === 'arrPropertyFunctionNames') {
                continue;
            }
            if (in_array($name, $this->arrPropertyFunctionNames)) {
                $argumentString = $this->getArgumentNames($value);
                if ($argumentString === null) {
                    continue;
                }
                $arr[$name] = 'f'.md5($name.$value);//.$argumentString;
                continue;
            }
            $arr[$name] = $value;
        }
        return $arr;
    }
    protected function getArgumentNames($functionBody) {
        preg_match('/function(\(.*?\))/i',$functionBody, $matches);
        if ($matches && isset($matches[1])) {
            return $matches[1] ? $matches[1] : '';
        }
        return null;
    }

    public function getHelperFunctions () {
        $arr = [];
        foreach(get_object_vars($this) as $name => $value) {
            if ($value === null) {
                continue;
            }
            if ($name === 'arrPropertyFunctionNames') {
                continue;
            }
            if (!in_array($name, $this->arrPropertyFunctionNames)) {
                continue;
            }
            $arr['f'.md5($name.$value)] = $value;
        }
        return $arr;
    }

}