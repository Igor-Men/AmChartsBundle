<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:19
 */

namespace IK\AmChartsBundle\Charts\Components;


class LabelPosition implements \JsonSerializable {
    public $labelPosition;

    public function __construct($labelPosition) {
        $this->labelPosition = $labelPosition;
    }

    public function jsonSerialize(){
        return $this->labelPosition;
    }
}