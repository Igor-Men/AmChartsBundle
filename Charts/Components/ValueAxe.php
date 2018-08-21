<?php

namespace IK\AmChartsBundle\Charts\Components;


class ValueAxe extends AbstractProperty implements  \JsonSerializable {

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
        $this->arrPropertyFunctionNames[] = 'labelFunction';
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

    public function getLabelFunction()
    {
        return $this->labelFunction;
    }

    public function setLabelFunction($labelFunction)
    {
        $this->labelFunction = $labelFunction;
    }

}