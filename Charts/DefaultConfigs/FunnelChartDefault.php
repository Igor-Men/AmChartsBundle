<?php

namespace IK\AmChartsBundle\Charts\DefaultConfigs;


class FunnelChartDefault extends AbstractChartDefault {

    public function getDefaultJs(){
        $string = '
        {
              "type": "funnel",
              "theme": "dark",
              "dataProvider": [ {
                "title": "Website visits",
                "value": 300
              }, {
                "title": "Downloads",
                "value": 123
              }, {
                "title": "Requested prices",
                "value": 98
              }, {
                "title": "Contacted",
                "value": 72
              }, {
                "title": "Purchased",
                "value": 35
              }, {
                "title": "Asked for support",
                "value": 25
              }, {
                "title": "Purchased more",
                "value": 18
              } ],
              "titleField": "title",
              "marginRight": 160,
              "marginLeft": 15,
              "labelPosition": "right",
              "funnelAlpha": 0.9,
              "valueField": "value",
              "startX": 0,
              "neckWidth": "40%",
              "startAlpha": 0,
              "outlineThickness": 1,
              "neckHeight": "30%",
              "balloonText": "[[title]]:<b>[[value]]</b>",
              "export": {
                "enabled": true
              }
            }
        ';

        return trim(preg_replace('/\s\s+/', ' ', $string));
    }

    protected function getChartScript() {
        return '<script src="https://www.amcharts.com/lib/3/funnel.js"></script>';
    }
}