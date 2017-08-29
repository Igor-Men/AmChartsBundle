<?php

namespace IK\AmChartsBundle\Charts;


use IK\AmChartsBundle\Charts\DefaultConfigs\CombinedBulletColumnLineChartDefault;

class CombinedBulletColumnLineChart extends AbstractChart implements ChartInterface {

    /**
     * @var CombinedBulletColumnLineChartDefault
     */
    protected $chartDefaultData;
    protected $type;
    public function __construct() {
        $this->chartDefaultData = new CombinedBulletColumnLineChartDefault();
        $this->type = 'CombinedBulletColumnLineChart';
    }

    protected function getDefaultJs(){
       return $this->chartDefaultData->getDefaultJs();
    }

    protected function getDefaultDiv(){
        return $this->chartDefaultData->getDefaultDiv();
    }

    public function setDefaultSettings(){
        // setim is json,a
    }


}