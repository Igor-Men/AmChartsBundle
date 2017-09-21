<?php

namespace IK\AmChartsBundle\Charts\Components;


class CategoryField implements \JsonSerializable {
    public $categoryField;
    public function __construct($categoryField) {
        $this->categoryField = $categoryField;
    }

    public function jsonSerialize() {
        return $this->categoryField;
    }

}