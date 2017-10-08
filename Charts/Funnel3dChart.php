<?php

namespace IK\AmChartsBundle\Charts;


use IK\AmChartsBundle\Charts\DefaultConfigs\AbstractChartDefault;
use IK\AmChartsBundle\Charts\DefaultConfigs\Funnel3dChartDefault;

class Funnel3dChart extends AbstractChart {

    protected $type;
    protected $balloon;
    protected $valueField;
    protected $titleField;
    protected $marginRight;
    protected $marginLeft;
    protected $startX;
    protected $depth3D;
    protected $angle;
    protected $outlineAlpha;
    protected $outlineColor;
    protected $outlineThickness;
    protected $labelPosition;
    protected $balloonText;

    public function __construct($name = '', $codeSourceType = AbstractChartDefault::SOURCE_CND) {
        $this->name = $name;
        $this->chartDefaultData = new Funnel3dChartDefault($codeSourceType);
        parent::__construct();
    }

    public function jsonSerialize() {
        return
            json_encode([
                'type' => $this->type,
                'theme' => $this->theme,
                'dataProvider' => $this->getDataProviderData(),
                'balloon' => $this->balloon,
                'valueField' => $this->valueField,
                'titleField' => $this->titleField,
                'marginRight' => $this->marginRight,
                'marginLeft' => $this->marginLeft,
                'startX' => $this->startX,
                'depth3D' => $this->depth3D,
                'angle' => $this->angle,
                'outlineAlpha' => $this->outlineAlpha,
                'outlineColor' => $this->outlineColor,
                'outlineThickness' => $this->outlineThickness,
                'labelPosition' => $this->labelPosition,
                'balloonText' => $this->balloonText,
                'export' => $this->export,
            ]);
    }
}