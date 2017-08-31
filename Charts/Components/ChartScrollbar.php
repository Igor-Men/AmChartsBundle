<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


class ChartScrollbar {
    public $graph;
    public $oppositeAxis;
    public $offset;
    public $scrollbarHeight;
    public $backgroundAlpha;
    public $selectedBackgroundAlpha;
    public $selectedBackgroundColor;
    public $graphFillAlpha;
    public $graphLineAlpha;
    public $selectedGraphFillAlpha;
    public $selectedGraphLineAlpha;
    public $autoGridCount;
    public $color;

    public function __construct($strValueAxe) {
        foreach ($strValueAxe as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }

}