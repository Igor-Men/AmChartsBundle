<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


class Graph {

    public $id;
    public $valueAxis;
    public $lineColor;
    public $fillColors;
    public $fillAlphas;
    public $type;
    public $title;
    public $valueField;
    public $clustered;
    public $columnWidth;
    public $legendValueText;
    public $balloonText;

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
}