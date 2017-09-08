<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 0:25
 */

namespace IK\AmChartsBundle\Charts\DefaultConfigs;


class Funnel3dChartDefault implements ChartDefaultInterface {

    public function getDefaultIDSelector(){
        return 'chartdiv';
    }
    public function getDefaultJs(){
        $string = '
        {
              "type": "funnel",
              "theme": "light",
              "dataProvider": [ {
                "title": "Website visits",
                "value": 200
              }, {
                "title": "Downloads",
                "value": 123
              }, {
                "title": "Requested price list",
                "value": 98
              }, {
                "title": "Contaced for more info",
                "value": 72
              }, {
                "title": "Purchased",
                "value": 35
              }, {
                "title": "Contacted for support",
                "value": 35
              }, {
                "title": "Purchased additional products",
                "value": 26
              } ],
              "balloon": {
                "fixedPosition": true
              },
              "valueField": "value",
              "titleField": "title",
              "marginRight": 240,
              "marginLeft": 50,
              "startX": -500,
              "depth3D": 100,
              "angle": 40,
              "outlineAlpha": 1,
              "outlineColor": "#FFFFFF",
              "outlineThickness": 2,
              "labelPosition": "right",
              "balloonText": "[[title]]: [[value]]n[[description]]",
              "export": {
                "enabled": true
              }
         }
        ';

        return trim(preg_replace('/\s\s+/', ' ', $string));
    }
    public function getDefaultCss($theme){
        $light =  '
                #chartdiv {
                  width: 100%;
                  height: 500px;
                }
            ';
        $black = 'body #chartdiv { background-color: #000; color: #fff; }' . $light;
        $dark = 'body #chartdiv { background-color: #30303d; color: #fff; }' . $light;
        $none = $light;
        $chalk = 'body #chartdiv { background-color: #3f3e3b; color: #fff; }' . $light;
        $patterns = $light;

        $styleArr = [
            'light' => $light,
            'black' => $black,
            'dark' => $dark,
            'none' => $none,
            'chalk' => $chalk,
            'patterns' => $patterns,
        ];

        $string = isset($styleArr[$theme]) ? $styleArr[$theme] : '';

        return trim(preg_replace('/\s\s+/', ' ', $string));
    }
    public function getDefaultResources($theme){
        $amChartStandart = '
                <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                <script src="https://www.amcharts.com/lib/3/funnel.js"></script>
                <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        ';

        $light = '<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>';
        $black = '<script src="https://www.amcharts.com/lib/3/themes/black.js"></script>';
        $dark = '<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>';
        $none = '<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>';
        $chalk = '<script src="https://www.amcharts.com/lib/3/themes/chalk.js"></script>';
        $patterns = '<script src="https://www.amcharts.com/lib/3/themes/patterns.js"></script>';

        $sctiptTheme = [
            'light' => $light,
            'dark' => $dark,
            'black' => $black,
            'none' => $none,
            'chalk' => $chalk,
            'patterns' => $patterns,
        ];

        $sctiptThemeString = isset($sctiptTheme[$theme]) ? $sctiptTheme[$theme] : '';
        $arr = [];
        $arr['standart'] = trim(preg_replace('/\s\s+/', ' ', $amChartStandart));
        $arr['theme'] = trim(preg_replace('/\s\s+/', ' ', $sctiptThemeString));
        return $arr;
    }
}