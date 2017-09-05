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

    public $bullet;
    public $bulletBorderAlpha;
    public $bulletBobulletrderAlpha;
    public $bulletColor;
    public $bulletSize;
    public $hideBulletsCount;
    public $lineThickness;
    public $useLineColorForBulletBorder;
    public $dashLength;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getValueField()
    {
        return $this->valueField;
    }

    public function getValueAxis()
    {
        return $this->valueAxis;
    }

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

    public function getBalloonText()
    {
        return $this->balloonText;
    }

    public function setBalloonText($balloonText)
    {
        $this->balloonText = $balloonText;
    }


    public function getLegendValueText()
    {
        return $this->legendValueText;
    }

    public function setLegendValueText($legendValueText)
    {
        $this->legendValueText = $legendValueText;
    }




}