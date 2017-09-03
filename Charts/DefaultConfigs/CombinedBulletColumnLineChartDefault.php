<?php

namespace IK\AmChartsBundle\Charts\DefaultConfigs;

class CombinedBulletColumnLineChartDefault implements ChartDefaultInterface {

    public function getDefaultDiv(){
        return 'chartdiv';
    }

    public function getDefaultJs(){
        $string =  '
            {
                  "type": "serial",
                  "theme": "light",
                  "dataDateFormat": "YYYY-MM-DD",
                  "precision": 2,
                  "valueAxes": [{
                    "id": "v1",
                    "title": "Lines",
                    "position": "left",
                    "autoGridCount": false,
                    "labelFunction": function(value) {
                      return "$" + Math.round(value) + "M";
                    }
                  }, {
                    "id": "v2",
                    "title": "Columns",
                    "gridAlpha": 0,
                    "position": "right",
                    "autoGridCount": false
                  }],
                  "graphs": [{
                    "id": "g3",
                    "valueAxis": "v1",
                    "lineColor": "#e1ede9",
                    "fillColors": "#e1ede9",
                    "fillAlphas": 1,
                    "type": "column",
                    "title": "column2 Sales",
                    "valueField": "column2",
                    "clustered": false,
                    "columnWidth": 0.5,
                    "legendValueText": "$[[value]]M",
                    "balloonText": "[[title]]<br /><b style=\'font-size: 130%\'>$[[value]]M</b>"
                  }, {
                    "id": "g4",
                    "valueAxis": "v1",
                    "lineColor": "#62cf73",
                    "fillColors": "#62cf73",
                    "fillAlphas": 1,
                    "type": "column",
                    "title": "column1 Sales",
                    "valueField": "column1",
                    "clustered": false,
                    "columnWidth": 0.3,
                    "legendValueText": "$[[value]]M",
                    "balloonText": "[[title]]<br /><b style=\'font-size: 130%\'>$[[value]]M</b>"
                  }, {
                    "id": "g1",
                    "valueAxis": "v2",
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 5,
                    "hideBulletsCount": 50,
                    "lineThickness": 2,
                    "lineColor": "#20acd4",
                    "type": "smoothedLine",
                    "title": "line1 line",
                    "useLineColorForBulletBorder": true,
                    "valueField": "line1",
                    "balloonText": "[[title]]<br /><b style=\'font-size: 130%\'>[[value]]</b>"
                  }, {
                    "id": "g2",
                    "valueAxis": "v2",
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 5,
                    "hideBulletsCount": 50,
                    "lineThickness": 2,
                    "lineColor": "#e1ede9",
                    "type": "smoothedLine",
                    "dashLength": 5,
                    "title": "line2 Days",
                    "useLineColorForBulletBorder": true,
                    "valueField": "line2",
                    "balloonText": "[[title]]<br /><b style=\'font-size: 130%\'>[[value]]</b>"
                  }],
                  "chartScrollbar": {
                    "graph": "g1",
                    "oppositeAxis": false,
                    "offset": 30,
                    "scrollbarHeight": 50,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "graphLineAlpha": 0.5,
                    "selectedGraphFillAlpha": 0,
                    "selectedGraphLineAlpha": 1,
                    "autoGridCount": true,
                    "color": "#AAAAAA"
                  },
                  "chartCursor": {
                    "pan": true,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "cursorAlpha": 0,
                    "valueLineAlpha": 0.2
                  },
                  "categoryField": "date",
                  "categoryAxis": {
                    "parseDates": true,
                    "dashLength": 1,
                    "minorGridEnabled": true
                  },
                  "legend": {
                    "useGraphSettings": true,
                    "position": "top"
                  },
                  "balloon": {
                    "borderThickness": 1,
                    "shadowAlpha": 0
                  },
                  "export": {
                   "enabled": true
                  },
                  "dataProvider": [{
                    "date": "2013-01-16",
                    "line1": 71,
                    "line2": 75,
                    "column1": 5,
                    "column2": 8
                  }, {
                    "date": "2013-01-17",
                    "line1": 74,
                    "line2": 78,
                    "column1": 4,
                    "column2": 6
                  }, {
                    "date": "2013-01-18",
                    "line1": 78,
                    "line2": 88,
                    "column1": 5,
                    "column2": 2
                  }, {
                    "date": "2013-01-19",
                    "line1": 85,
                    "line2": 89,
                    "column1": 8,
                    "column2": 9
                  }, {
                    "date": "2013-01-20",
                    "line1": 82,
                    "line2": 89,
                    "column1": 9,
                    "column2": 6
                  }, {
                    "date": "2013-01-21",
                    "line1": 83,
                    "line2": 85,
                    "column1": 3,
                    "column2": 5
                  }, {
                    "date": "2013-01-22",
                    "line1": 88,
                    "line2": 92,
                    "column1": 5,
                    "column2": 7
                  }, {
                    "date": "2013-01-23",
                    "line1": 85,
                    "line2": 90,
                    "column1": 7,
                    "column2": 6
                  }, {
                    "date": "2013-01-24",
                    "line1": 85,
                    "line2": 91,
                    "column1": 9,
                    "column2": 5
                  }, {
                    "date": "2013-01-25",
                    "line1": 80,
                    "line2": 84,
                    "column1": 5,
                    "column2": 8
                  }, {
                    "date": "2013-01-26",
                    "line1": 87,
                    "line2": 92,
                    "column1": 4,
                    "column2": 8
                  }, {
                    "date": "2013-01-27",
                    "line1": 84,
                    "line2": 87,
                    "column1": 3,
                    "column2": 4
                  }, {
                    "date": "2013-01-28",
                    "line1": 83,
                    "line2": 88,
                    "column1": 5,
                    "column2": 7
                  }, {
                    "date": "2013-01-29",
                    "line1": 84,
                    "line2": 87,
                    "column1": 5,
                    "column2": 8
                  }, {
                    "date": "2013-01-30",
                    "line1": 81,
                    "line2": 85,
                    "column1": 4,
                    "column2": 7
                  }]
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

    public function getDefaultHtml(){
        return '<div id="chartdiv"></div>';
    }

    public function getDefaultResources($theme) {

        $amChartStandart = '
                <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                <script src="https://www.amcharts.com/lib/3/serial.js"></script>
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