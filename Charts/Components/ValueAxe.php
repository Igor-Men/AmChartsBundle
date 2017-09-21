<?php

namespace IK\AmChartsBundle\Charts\Components;


class ValueAxe implements  \JsonSerializable {

    public $id;
    public $title;
    public $position;
    public $autoGridCount;

    public $labelFunction;

    public $gridAlpha;

    public $ignoreAxisWidth;

    public function __construct($strValueAxe = []) {
        foreach ($strValueAxe as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getData(){
        $arr = [];
        foreach(get_object_vars($this) as $name => $value) {
            if ($value !== null) {
                $arr[$name] = $value;
            }
        }
        return (object)$arr;
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

    public function getLabelFunction()
    {
        $js = $this->labelFunction;
        if (!$js) {
            return '';
        }
        $js = preg_replace_callback("/(>>>)(.*?)(\<\<\<)/i", function($matches){
            $str_inner = $matches[2];
            $str_inner =  str_replace("\\\"", "\"", $str_inner);
            return $str_inner;
        },$js);
        return $js;
    }

    public function setLabelFunction($labelFunction)
    {
        $labelFunction = str_replace('\"','\\\"',$labelFunction);
        $result =  ">>>$labelFunction<<<";
        $this->labelFunction = $result;
    }

}