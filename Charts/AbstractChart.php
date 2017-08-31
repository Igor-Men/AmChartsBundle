<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 29.08.17
 * Time: 23:38
 */

namespace IK\AmChartsBundle\Charts;


use Symfony\Component\Intl\Exception\NotImplementedException;

abstract class AbstractChart implements ChartInterface, \JsonSerializable {

    public function jsonSerialize()
    {
        return $this->getDefaultJs();
    }

    protected function buildChart(){
        throw new NotImplementedException();
    }

    protected function getDefaultDiv(){
        throw new NotImplementedException();
    }

    protected function getDefaultJs(){
        throw new NotImplementedException();
    }

    protected function renderStartIIFE()
    {
        return "$(function () {\n";
    }

    protected function renderEndIIFE()
    {
        return "});\n";
    }

    public function render()
    {
        $chartJS = $this->renderStartIIFE();

        $chartJS .= "    var " . $this->type . "chart = new AmCharts.makeChart(\"" . $this->getDefaultDiv() . "\",";

//        $chartJS .= json_encode($this, JSON_PRETTY_PRINT);
        $chartJS .= $this->jsonSerialize();

        $chartJS .= ");\n";

        $chartJS .= $this->renderEndIIFE();

        return $chartJS;
    }
}