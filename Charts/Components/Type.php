<?php

namespace IK\AmChartsBundle\Charts\Components;

class Type
{
    /**
     * @var String
     */
    public $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    public function __toString()
    {
        return '"'.(new \ReflectionClass($this))->getShortName().'" '.$this->type;
    }
}