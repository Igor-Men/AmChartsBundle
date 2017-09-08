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

    /**
     * @return mixed
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
    }



    public function jsonSerialize(){
        return ['enabled' => $this->enabled];
    }
}