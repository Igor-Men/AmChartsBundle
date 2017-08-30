<?php

namespace IK\AmChartsBundle\Helpers;
/**
 * Serialize a simple PHP object into json
 * Should be used for POPO that has getter methods for the relevant properties to serialize
 * A property can be simple or by itself another POPO object
 *
 * Class CleanJsonSerializer
 */
class CleanJsonSerializer {

    /**
     * Local cache of a property getters per class - optimize reflection code if the same object appears several times
     * @var array
     */
    private $classPropertyGetters = array();

    /**
     * @param mixed $object
     * @return string|false
     */
    public function serialize($object)
    {
        return json_encode($this->serializeInternal($object));
    }

    public function openJson($json){
        if (!$json) {
            return $json;
        }
        return substr($json, 1, -1);
    }

    /**
     * @param $object
     * @return array
     */
    private function serializeInternal($object)
    {
        if (is_array($object)) {
            $result = $this->serializeArray($object);
        } elseif (is_object($object)) {
            $result = $this->serializeObject($object);
        } else {
            $result = $object;
        }
        return $result;
    }

    /**
     * @param $object
     * @return \ReflectionClass
     */
    private function getClassPropertyGetters($object)
    {
        $className = get_class($object);
        if (!isset($this->classPropertyGetters[$className])) {
            $reflector = new \ReflectionClass($className);
            $properties = $reflector->getProperties();
            $getters = array();
            foreach ($properties as $property)
            {
                $name = $property->getName();
                $getter = "get" . ucfirst($name);
                try {
                    $reflector->getMethod($getter);
                    $getters[$name] = $getter;
                } catch (\Exception $e) {
                    // if no getter for a specific property - ignore it
                }
            }
            $this->classPropertyGetters[$className] = $getters;
        }
        return $this->classPropertyGetters[$className];
    }

    /**
     * @param $object
     * @return array
     */
    private function serializeObject($object) {
        $properties = $this->getClassPropertyGetters($object);
        $data = array();
        /** @noinspection ForeachSourceInspection */
        foreach ($properties as $name => $property)
        {
            $data[$name] = $this->serializeInternal($object->$property());
        }
        return $data;
    }

    /**
     * @param $array
     * @return array
     */
    private function serializeArray($array)
    {
        $result = array();
        foreach ($array as $key => $value) {
            $result[$key] = $this->serializeInternal($value);
        }
        return $result;
    }
}