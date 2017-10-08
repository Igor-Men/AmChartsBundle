<?php

namespace IK\AmChartsBundle\Charts\DefaultConfigs;


use IK\AmChartsBundle\Charts\DefaultConfigs\ChartDefaultInterface;

abstract class AbstractChartDefault implements ChartDefaultInterface {

    const SOURCE_CND = 'CDN';
    const SOURCE_LOCAL = 'LOCAL';

    const SOURCE_CDN_AMCHART = 'https://www.amcharts.com/lib/3';
    const SOURCE_LOCAL_AMCHART = '/bundles/ikamcharts/js';

    const SOURCE_CDN_JQUERY = 'http://ajax.googleapis.com/ajax/libs/';
    const SOURCE_LOCAL_JQUERY = '/bundles/ikamcharts/js/libs/';

    protected $srcAm;
    protected $srcJq;
    public function __construct($codeSourceType = self::SOURCE_CND) {
        $this->srcAm = $this->getSrcAm($codeSourceType);
        $this->srcJq = $this->getSrcJq($codeSourceType);
    }
    public function setSrcType($codeSourceType) {
        if (!in_array($codeSourceType , ['LOCAL', 'CDN'])) {
            throw new \InvalidArgumentException('must be LOCAL or CDN');
        }
        $this->srcAm = $this->getSrcAm($codeSourceType);
        $this->srcJq = $this->getSrcJq($codeSourceType);
        return true;
    }

    protected function getSrcAm($codeSourceType){
        return $codeSourceType == 'LOCAL' ? self::SOURCE_LOCAL_AMCHART : self::SOURCE_CDN_AMCHART;
    }

    protected function getSrcJq($codeSourceType){
        return $codeSourceType == 'LOCAL' ? self::SOURCE_LOCAL_JQUERY : self::SOURCE_CDN_JQUERY;
    }
    public function getDefaultIDSelector(){
        return 'chartdiv';
    }
    public function getThemaScripts($theme) {

        $light = '<script src="'.$this->srcAm.'/themes/light.js"></script>';
        $black = '<script src="'.$this->srcAm.'/themes/black.js"></script>';
        $dark = '<script src="'.$this->srcAm.'/themes/dark.js"></script>';
        $none = '<script src="'.$this->srcAm.'/themes/none.js"></script>';
        $chalk = '<script src="'.$this->srcAm.'/themes/chalk.js"></script>';
        $patterns = '<script src="'.$this->srcAm.'/themes/patterns.js"></script>';

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

        $allResource = '<script src="'.$this->srcAm.'/plugins/export/export.min.js"></script>
                        <link rel="stylesheet" href="'.$this->srcAm.'/plugins/export/export.css" type="text/css" media="all" />';

        $default = [
            'script' => '',
            'link' => '',
            'all' => ''
        ];

        return !$isEnabledExport ? $default : [
            'script' => '<script src="'.$this->srcAm.'/plugins/export/export.min.js"></script>',
            'link' => '<link rel="stylesheet" href="'.$this->srcAm.'/plugins/export/export.css" type="text/css" media="all" />',
            'all' => $allResource
        ];
    }

    protected abstract function getChartScript();

    public function getDefaultResources($theme, $isEnabledExport){
        $amChartStandart = '<script src="'.$this->srcAm.'/amcharts.js"></script>';
        $standart = $amChartStandart.$this->getChartScript();

        $arr = [];
        $arr['standart'] = trim(preg_replace('/\s\s+/', ' ', $standart));
        $arr['export'] = $this->getExportResource($isEnabledExport);
        $arr['theme'] = $this->getThemaScripts($theme);
        $arr['jq'] = '<script src="'.$this->srcJq.'jquery/1.7.1/jquery.min.js"></script>';
        return $arr;
    }
}