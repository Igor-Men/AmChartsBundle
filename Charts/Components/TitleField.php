<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.09.17
 * Time: 1:14
 */

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