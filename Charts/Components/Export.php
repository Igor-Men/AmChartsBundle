<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:10
 */

namespace IK\AmChartsBundle\Charts\Components;


class Export extends AbstractProperty implements \JsonSerializable {

    public $enabled;

    public function __construct($stdObject) {
        $this->setArrProperties($stdObject);
    }

    public function jsonSerialize(){
        return ['enabled' => $this->enabled];
    }
}