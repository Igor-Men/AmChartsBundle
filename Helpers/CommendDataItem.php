<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 20.11.17
 * Time: 11:14
 */

namespace IK\AmChartsBundle\Helpers;


use Symfony\Component\Validator\Constraints\Uuid;

class CommendDataItem
{
    private $id;
    private $name;
    private $type;
    private $message;

    private $dataArray;

    const TYPE_ERROR = 'error';
    const TYPE_WARNING = 'warning';
    const TYPE_MESSAGE = 'message';

    public function __construct($message = '', $name = '', $type = self::TYPE_MESSAGE, $dataArray = [], $prefix = 'comment_item_id_')
    {
        $this->message = $message;
        $this->name = $name;
        $this->type = $type;
        $this->dataArray = $dataArray;

        $this->id = uniqid($prefix, false);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;

    }

    /**
     * @return array
     */
    public function getDataArray()
    {
        return $this->dataArray;
    }

    /**
     * @param mixed $dataArray
     */
    public function setDataArray(array $dataArray)
    {
        $this->dataArray = $dataArray;
        return $this;
    }

}