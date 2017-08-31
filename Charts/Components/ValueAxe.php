<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


class ValueAxe implements  \JsonSerializable {

    public $id;
    public $title;
    public $position;
    public $autoGridCount;

    public $labelFunction;

    public $gridAlpha;

    public function __construct($strValueAxe) {
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
    public function getId()
    {
        return $this->id;
    }

    public function jsonSerialize() {
        $arr = [];
        $arr['id'] = $this->id;
        $arr['title'] = $this->title;
        $arr['position'] = $this->position;
        $arr['autoGridCount'] = $this->autoGridCount;
        if ($this->labelFunction !== null) {
            $arr['labelFunction'] = $this->labelFunction;
        }
        if ($this->gridAlpha !== null) {
            $arr['gridAlpha'] = $this->gridAlpha;
        }
        return $arr;
    }
}