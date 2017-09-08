<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 09.09.17
 * Time: 1:22
 */

namespace IK\AmChartsBundle\Charts\DefaultConfigs;


use Symfony\Component\Intl\Exception\NotImplementedException;

abstract class AbstractChartDefault implements ChartDefaultInterface {

    public function getDefaultIDSelector(){
        return 'chartdiv';
    }

    public function getThemaScripts($theme) {

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

        return trim(preg_replace('/\s\s+/', ' ', $sctiptThemeString));
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

    public function getExportResource($isEnabledExport) {
        $allResource = '<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />';

        $default = [
            'script' => '',
            'link' => '',
            'all' => ''
        ];

        return !$isEnabledExport ? $default : [
            'script' => '<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>',
            'link' => '<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />',
            'all' => $allResource
        ];
    }

    protected abstract function getChartScript();

    public function getDefaultResources($theme, $isEnabledExport){
        $amChartStandart = '<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>';
        $standart = $amChartStandart.$this->getChartScript();

        $arr = [];
        $arr['standart'] = trim(preg_replace('/\s\s+/', ' ', $standart));
        $arr['export'] = $this->getExportResource($isEnabledExport);
        $arr['theme'] = $this->getThemaScripts($theme);
        return $arr;
    }
}