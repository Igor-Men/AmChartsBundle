<?php

namespace IK\AmChartsBundle\Charts\Components;


class ChartCursor {
    public $pan;
    public $valueLineEnabled;
    public $valueLineBalloonEnabled;
    public $cursorAlpha;
    public $valueLineAlpha;

    public $fullWidth;

    public function __construct($strValueAxe) {
        foreach ($strValueAxe as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }
}