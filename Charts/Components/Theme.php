<?php

namespace IK\AmChartsBundle\Charts\Components;


class Theme implements \JsonSerializable {
    public $theme;

    public function __construct($theme) {
        $this->theme = $theme;
    }

    /**
     * @return string
     */
    public function getTheme() {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme) {
        $this->theme = $theme;
    }

    public function jsonSerialize() {
        return $this->theme;
    }
}