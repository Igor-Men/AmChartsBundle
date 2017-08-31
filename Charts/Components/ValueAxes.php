<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


use Doctrine\Common\Collections\ArrayCollection;

class ValueAxes {

    public $valueAxes;

    public function __construct( Array $valueAxes) {
        $this->valueAxes = new ArrayCollection();
        foreach ($valueAxes as $valueAxe) {
            $objectValueAxe = new ValueAxe($valueAxe);
            $this->addValueAxe($objectValueAxe);
        }
    }
    public function addValueAxe(ValueAxe $objectValueAxe) {
        $this->valueAxes->set($objectValueAxe->getId(), $objectValueAxe);
    }

    public function getValueAxe($id) {
        return isset($this->valueAxes[$id]) ? $this->valueAxes[$id] : null;
    }

}