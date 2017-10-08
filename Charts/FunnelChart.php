<?php

namespace IK\AmChartsBundle\Charts;


use IK\AmChartsBundle\Charts\DefaultConfigs\AbstractChartDefault;
use IK\AmChartsBundle\Charts\DefaultConfigs\Funnel3dChartDefault;
use IK\AmChartsBundle\Charts\DefaultConfigs\FunnelChartDefault;

class FunnelChart extends AbstractChart {

    protected $type;
    protected $titleField;
    protected $marginRight;
    protected $marginLeft;
    protected $labelPosition;
    protected $funnelAlpha;
    protected $valueField;
    protected $startX;
    protected $neckWidth;
    protected $startAlpha;
    protected $outlineThickness;
    protected $neckHeight;
    protected $balloonText;
    protected $export;

    public function __construct($name = '', $codeSourceType = AbstractChartDefault::SOURCE_CND) {
        $this->name = $name;
        $this->chartDefaultData = new FunnelChartDefault($codeSourceType);
        parent::__construct();
    }

    public function jsonSerialize() {
        return
            json_encode([
                'type' => $this->type,
                'theme' => $this->theme,
                'dataProvider' => $this->getDataProviderData(),
                'titleField' => $this->titleField,
                'marginRight' => $this->marginRight,
                'marginLeft' => $this->marginLeft,
                'labelPosition' => $this->labelPosition,
                'funnelAlpha' => $this->funnelAlpha,
                'valueField' => $this->valueField,
                'startX' => $this->startX,
                'neckWidth' => $this->neckWidth,
                'startAlpha' => $this->startAlpha,
                'outlineThickness' => $this->outlineThickness,
                'neckHeight' => $this->neckHeight,
                'balloonText' => $this->balloonText,
                'export' => $this->export,
            ]);
    }
}