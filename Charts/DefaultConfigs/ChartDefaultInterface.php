<?php

namespace IK\AmChartsBundle\Charts\DefaultConfigs;

interface ChartDefaultInterface {

    public function getDefaultDiv();
    public function getDefaultJs();
    public function getDefaultCss($theme);
    public function getDefaultHtml();
    public function getDefaultResources($theme);

}