<?php

namespace IK\AmChartsBundle\Charts\DefaultConfigs;

interface ChartDefaultInterface {

    public function getDefaultIDSelector();
    public function getDefaultJs();
    public function getDefaultCss($theme);
    public function getDefaultResources($theme, $isEnabledExport);

}