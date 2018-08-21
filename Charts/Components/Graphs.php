<?php

namespace IK\AmChartsBundle\Charts\Components;


use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

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

    /**
     * @param $columnName
     * @return Graph
     */
    public function getGraphByDataColumn($columnName) {
        $result = $this->graphs->filter(function($entry) use ($columnName) {
            return $entry->getValueField() == $columnName;
        });
        if (!$result) {
            throw new NotFoundResourceException('the column with name '.$columnName. ' not found');
        }

        return $result->first();
    }

    public function removeGraphByDataColumn($columnName) {

        $result = $this->graphs->filter(function($entry) use ($columnName) {
            return $entry->getValueField() == $columnName;
        });

        if (!$result) {
            throw new NotFoundResourceException('the column with name '.$columnName. ' not found');
        }

        $item = $result->first();
        foreach ($this->graphs as $key => $value){
            if ($item === $value) {
                $this->graphs->remove($key);
                return true;
            }
        }
    }

    public function jsonSerialize() {
        $arr = [];
        /** @var Graph $graph */
        foreach($this->graphs as $graph){
            $arr[] = $graph->jsonSerialize();
        }
        return $arr;
    }

    public function getHelperFunctions() {
        $arr = [];
        /** @var Graph $graph */
        foreach($this->graphs as $graph){
            $arr = array_merge($arr, $graph->getHelperFunctions());
        }
        return $arr;
    }
}