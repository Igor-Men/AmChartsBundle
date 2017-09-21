<?php

namespace IK\AmChartsBundle\Charts\Components;


class TitleField implements \JsonSerializable {
    public $titleField;

    public function __construct($titleField) {
        $this->titleField = $titleField;
    }
    public function jsonSerialize(){
        return $this->titleField;
    }
}