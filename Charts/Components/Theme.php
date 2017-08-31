<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:07
 */

namespace IK\AmChartsBundle\Charts\Components;


class Theme {
    public $theme;
    public function __construct($theme) {
        $this->theme = $theme;
    }
}