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

    public function __construct($type = '') {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
//        return '"'.(new \ReflectionClass($this))->getShortName().'" '.$this->type;
    }
}