<?php

namespace IK\AmChartsBundle\Charts\Components;


class DataProvider {

    public $data;

    public function __construct($dataArr) {
        $arr = [];
        foreach($dataArr as $element) {
            $arr[] = (object)$element;
        }
        $this->data = $arr;
    }

}