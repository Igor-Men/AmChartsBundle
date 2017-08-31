<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 31.08.17
 * Time: 1:08
 */

namespace IK\AmChartsBundle\Charts\Components;


use Doctrine\Common\Collections\ArrayCollection;

class Graphs {

    public $graphs;

    public function __construct($graphs) {
        $this->graphs = new ArrayCollection();
        foreach ($graphs as $graph) {
            $objectGraph = new Graph($graph);
            $this->addGraph($objectGraph);
        }
    }
    public function addGraph(Graph $objectGraph) {
        $this->graphs->set($objectGraph->getId(), $objectGraph);
    }

    public function getGraph($id) {
        return isset($this->graphs[$id]) ? $this->graphs[$id] : null;
    }

}