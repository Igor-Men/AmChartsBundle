<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:11
 */

namespace IK\AmChartsBundle\Charts\Components;


class DataProvider {

    public $data;

    public function __construct($dataArr) {
        $this->data = $dataArr;
    }

}