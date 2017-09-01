<?php

namespace IK\AmChartsBundle\Charts;


use Doctrine\Common\Collections\Collection;
use IK\AmChartsBundle\Charts\Components\DataProvider;
use IK\AmChartsBundle\Charts\Components\Type;
use IK\AmChartsBundle\Charts\Components\ValueAxe;
use IK\AmChartsBundle\Charts\Components\ValueAxes;
use IK\AmChartsBundle\Charts\DefaultConfigs\CombinedBulletColumnLineChartDefault;
use IK\AmChartsBundle\Helpers\CleanJsonSerializer;

class CombinedBulletColumnLineChart extends AbstractChart implements ChartInterface {

    /**
     * @var CombinedBulletColumnLineChartDefault
     */
    protected $chartDefaultData;


    protected $type;
    protected $theme;
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
    protected $export;
    protected $dataProvider;

    public function __construct() {
        $this->chartDefaultData = new CombinedBulletColumnLineChartDefault();
        $this->buildDefault();
    }

    public function setDataProvider(DataProvider $dataProvider) {
        $this->dataProvider = $dataProvider;
    }

    public function getGraphs()
    {
        return $this->graphs;
    }

    /**
     * @return ValueAxes
     */
    public function getValueAxes()
    {
        return $this->valueAxes;
    }


    public function buildDefault() {
        $js =  $this->chartDefaultData->getDefaultJs();
        $js = preg_replace_callback("/(function[^\}]*?)(\})/m", function($matches){
            $str = $matches[0];
            $str = str_replace('\"','\\\"',$str);
            return json_encode(">>>$str<<<");
        },$js);

        $objStd = json_decode($js);
        if (!$objStd) {
            return false;
        }

        $nameSpaceComponents = 'IK\AmChartsBundle\Charts\Components\\';
        foreach($objStd as $key => $value){
            $className = $nameSpaceComponents.''.ucfirst($key);
            if (class_exists($nameSpaceComponents.''.ucfirst($key)) && property_exists($this, $key)) {
                $object = new $className($value);
                $this->{$key} = $object;
            }
       }

       return true;
    }


    protected function getDefaultDiv(){
        return $this->chartDefaultData->getDefaultDiv();
    }

    public function jsonSerialize(){
        return
            json_encode([
                'type' => $this->type,
                'theme' => $this->theme,
                'dataDateFormat' => $this->dataDateFormat,
                'precision' => $this->precision,
                'valueAxes' => $this->valueAxes,
                'graphs' => $this->graphs,
                'chartScrollbar' => $this->chartScrollbar,
                'chartCursor' => $this->chartCursor,
                'categoryField' => $this->categoryField,
                'categoryAxis' => $this->categoryAxis,
                'legend' => $this->legend,
                'balloon' => $this->balloon,
                'export' => $this->export,
                'dataProvider' => $this->dataProvider->data,
            ]);
    }
}