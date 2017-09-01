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
        throw new NotImplementedException();
    }

    protected function buildChart(){
        throw new NotImplementedException();
    }

    protected function getDefaultDiv(){
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
    protected function cleanUpFunctionMethod($strJs) {
        //return $strJs;
        $unescepedJsFunctions = preg_replace_callback("/(\">>>)(.*?)(\<\<\<\")/i", function($matches){
            $str_inner = $matches[2];
            $str_inner =  str_replace("\\\"", "\"", $str_inner);
            return str_replace("\/\\", "\\", $str_inner);
        },$strJs);
        return $unescepedJsFunctions;
    }
    public function render()
    {
        $sctipt_string = $this->cleanUpFunctionMethod($this->jsonSerialize());

        $chartJS = $this->renderStartIIFE();

        $chartJS .= "    var " . $this->type . "chart = new AmCharts.makeChart(\"" . $this->getDefaultDiv() . "\",";

//        $chartJS .= json_encode($this, JSON_PRETTY_PRINT);
        $chartJS .= $sctipt_string;

        $chartJS .= ");\n";

        $chartJS .= $this->renderEndIIFE();

        return $chartJS;
    }
}