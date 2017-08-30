<?php

namespace IK\AmChartsBundle\Charts;


use IK\AmChartsBundle\Charts\Components\Type;
use IK\AmChartsBundle\Charts\DefaultConfigs\CombinedBulletColumnLineChartDefault;
use IK\AmChartsBundle\Helpers\CleanJsonSerializer;

class CombinedBulletColumnLineChart extends AbstractChart implements ChartInterface {

    /**
     * @var CombinedBulletColumnLineChartDefault
     */
    protected $chartDefaultData;
    protected $type;
    public function __construct() {
        $this->chartDefaultData = new CombinedBulletColumnLineChartDefault();
        $this->type = 'CombinedBulletColumnLineChart';
    }

    protected function getDefaultJs(){
//        $obj = new Type();
//        $obj->setType('goodType');
        //$obj->setArr(['good_time'=>'12', 'age' =>12, 15=>'yang', 'nestedArr' => ['tata', 'one', 13]]);
//        $obj->setType('goodType');
//        $obj->setType('goodType');

//        $converter = new CleanJsonSerializer();
//        $result = $converter->serialize($obj);
//        exit;
        /*$obj = new \stdClass();
        $objinternal = new \stdClass();
        $objinternal->id = '1';
        $objinternal->title = 'one';
        $objinternal->position = 'right';
        $objinternal->autoGridCount = false;

        $foo = 'foo';
        $objinternal2 = new \stdClass();
        $objinternal2->id = '2';
        $objinternal2->title = 'two';
        $objinternal2->position = 'left';
        $objinternal2->autoGridCount = false;
        $objinternal2->autoGridFunc = 'some magic';
        $obj = [$objinternal, $objinternal2];

        $result = json_encode($obj);*/
       $js =  $this->chartDefaultData->getDefaultJs();
       $obg = json_decode($js);
       return $obg;
//       return $this->chartDefaultData->getDefaultJs();
//       $object = json_decode($hello, true);
//       exit;
    }

    protected function getDefaultDiv(){
        return $this->chartDefaultData->getDefaultDiv();
    }

    public function setDefaultSettings(){
        // setim is json,a
    }


}