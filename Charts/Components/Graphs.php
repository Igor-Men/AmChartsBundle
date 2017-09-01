<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


use Doctrine\Common\Collections\ArrayCollection;

class Graphs implements \JsonSerializable {

    public $graphs;

    public function __construct($graphs) {
        $this->graphs = new ArrayCollection();
        foreach ($graphs as $graph) {
            $objectGraph = new Graph($graph);
            $this->addGraph($objectGraph);
        }
    }
    public function addGraph(Graph $objectGraph) {
        $this->graphs->add($objectGraph);
    }

    public function getGraph($id) {
        return isset($this->graphs[$id]) ? $this->graphs[$id] : null;
    }

    public function getGraphByDataColumn($columnName) {
        $result = $this->graphs->filter(function($entry) use ($columnName) {
            return $entry->getValueField() == $columnName;
        });
        return $result->first();
    }

    public function jsonSerialize() {
        $arr = [];
        foreach($this->graphs as $graph){
            $arr[] = $graph->getData();
        }
        return $arr;
    }
}