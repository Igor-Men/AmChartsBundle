<?php
/**
 * Created by PhpStorm.
 * User: lothar
 * Date: 20.11.17
 * Time: 11:12
 */

namespace IK\AmChartsBundle\Helpers;


use Doctrine\Common\Collections\ArrayCollection;

class CommendData implements CommentDataInterface
{

    private $dataItems;

    public function __construct()
    {
        $this->dataItems = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|CommendDataItem
     */
    public function getDataItems()
    {
        return $this->dataItems;
    }

    /**
     * @return int
     */
    public function countItems() {
        return $this->dataItems->count();
    }

    /**
     * @param CommendDataItem $dataItems
     */
    public function addDataItems(CommendDataItem $dataItem)
    {
        $this->dataItems[] = $dataItem;
    }

    /**
     * @param CommendDataItem $dataItems
     */
    public function removeDataItems(CommendDataItem $dataItem)
    {
        $this->dataItems->remove($dataItem);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|CommendDataItem
     */
    public function getWarnings()
    {
        $type = CommendDataItem::TYPE_WARNING;
        return $this->getDataItems()->filter(
            function (CommendDataItem $item) use ($type) {
                return $item->getType() == $type;
            }
        );
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|CommendDataItem
     */
    public function getErrors()
    {
        $type = CommendDataItem::TYPE_ERROR;
        return $this->getDataItems()->filter(
            function (CommendDataItem $item) use ($type) {
                return $item->getType() == $type;
            }
        );
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|CommendDataItem
     */
    public function getMessages()
    {
        $type = CommendDataItem::TYPE_MESSAGE;
        return $this->getDataItems()->filter(
            function (CommendDataItem $item) use ($type) {
                return $item->getType() == $type;
            }
        );
    }

    public function messagesCount() {
        return $this->getMessages()->count();
    }
    public function errorsCount() {
        return $this->getErrors()->count();
    }
    public function warningsCount() {
        return $this->getWarnings()->count();
    }
}