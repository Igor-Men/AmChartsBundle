<?php

namespace IK\AmChartsBundle\Charts\Components;


class Balloon extends AbstractProperty implements \JsonSerializable {
    public $borderThickness;
    public $shadowAlpha;
    public $fixedPosition;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }

    public function jsonSerialize(){
        $arr = [];
        foreach (get_object_vars($this) as $property => $value) {
            if (!is_null($value)){
                $arr[$property] = $value;
            }
        }
        return $arr;
    }
    
}