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
    //protected $availEvents = ["init"];

    public function getMethod(){
//        return $this->method;
        return "function(e){ console.log('notImplemened'); }";
    }

//    public function getMethodJson() {
//        return ">>>function(e){ console.log('notImplemened'); }<<<";
//    }

    public function getMethodJson()
    {
        $js = $this->method;
//        if (!$js) {
//            return '';
//        }
//        $js = preg_replace_callback("/(>>>)(.*?)(\<\<\<)/i", function($matches){
//            $str_inner = $matches[2];
//            $str_inner =  str_replace("\\\"", "\"", $str_inner);
//            return $str_inner;
//        },$js);
        return $js;
    }

    public function setMethod($methodFunction) {
//        $methodFunction = str_replace('  ','',$methodFunction);
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
            "method" => $this->getMethodJson()
        ];
    }
}