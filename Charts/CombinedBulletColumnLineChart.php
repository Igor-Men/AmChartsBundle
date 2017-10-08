<?php

namespace IK\AmChartsBundle\Charts;


use Doctrine\ORM\Id\UuidGenerator;
use IK\AmChartsBundle\Charts\Components\DataProvider;
use IK\AmChartsBundle\Charts\Components\Graphs;
use IK\AmChartsBundle\Charts\Components\Theme;
use IK\AmChartsBundle\Charts\Components\ValueAxes;
use IK\AmChartsBundle\Charts\DefaultConfigs\AbstractChartDefault;
use IK\AmChartsBundle\Charts\DefaultConfigs\CombinedBulletColumnLineChartDefault;

class CombinedBulletColumnLineChart extends AbstractChart {

    protected $type;
    protected $dataDateFormat;
    protected $precision;
    protected $valueAxes;
    protected $graphs;
    protected $chartScrollbar;
    protected $chartCursor;
    protected $categoryField;
    protected $categoryAxis;
    protected $legend;
    protected $balloon;

    public function __construct($name = '', $codeSourceType = AbstractChartDefault::SOURCE_CND) {
        $this->name = $name;
        $this->chartDefaultData = new CombinedBulletColumnLineChartDefault($codeSourceType);
        parent::__construct();
    }

    /**
     * @return ValueAxes
     */
    public function getValueAxes()
    {
        return $this->valueAxes;
    }

    /**
     * @return Graphs
     */
    public function getGraphs()
    {
        return $this->graphs;
    }

    public function jsonSerialize(){
        return
            json_encode([
                'type' => $this->type,
                'theme' => $this->theme,
                'dataDateFormat' => $this->dataDateFormat,
                'precision' => $this->precision,
                'valueAxes' => $this->valueAxes->jsonSerialize(),
                'graphs' => $this->graphs,
                'chartScrollbar' => $this->chartScrollbar,
                'chartCursor' => $this->chartCursor,
                'categoryField' => $this->categoryField,
                'categoryAxis' => $this->categoryAxis,
                'legend' => $this->legend,
                'balloon' => $this->balloon,
                'export' => $this->export->jsonSerialize(),
                'dataProvider' => $this->getDataProviderData(),
            ]);
    }
}