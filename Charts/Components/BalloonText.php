<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:19
 */

namespace IK\AmChartsBundle\Charts\Components;


class BalloonText implements \JsonSerializable {
    public $balloonText;

    public function __construct($balloonText) {
        $this->balloonText = $balloonText;
    }

    public function jsonSerialize(){
        return $this->balloonText;
    }
}