<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 09.10.17
 * Time: 16:55
 */

namespace IK\AmChartsBundle\Charts\Components;


use IK\AmChartsBundle\Exception\InvalidArgumentException;

class AbstractListener implements ListenerInterface, \JsonSerializable
{
    protected $name = '';

    protected $method = '';

    public function getMethod(){
        return $this->method;
    }

    public function setMethod($methodFunction) {
        $methodFunction = preg_replace('!\s+!', ' ', $methodFunction);
        $methodFunction = preg_replace('/^ /', '', $methodFunction);
        $methodFunction = preg_replace('/ $/', '', $methodFunction);
        $methodFunction = str_replace('\"','\\\"',$methodFunction);
        $result =  ">>>$methodFunction<<<";
        $this->method = $result;
    }

    public function getName()
    {
        if (!$this->name) {
            throw new InvalidArgumentException('Name Event not defined');
        }
        return $this->name;
    }

    public function jsonSerialize() {
        return [
            "event" => $this->getName(),
            "method" => $this->getMethod()
        ];
    }
}