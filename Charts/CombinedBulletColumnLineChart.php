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
    protected $theme;
    protected $dataDateFormat;
    protected $precision;
    protected $valueAxes;
    protected $graphs;
    protected $chartScrollbar;
    protected $chartCursor;
    protected $categoryField;
    protected $categoryAxis;
    protected $legend;
    protected $balloon;
    protected $export;
    protected $dataProvider;

    public function __construct() {
        $this->chartDefaultData = new CombinedBulletColumnLineChartDefault();
        $this->buildDefault();
    }

    public function buildDefault() {
        $js =  $this->chartDefaultData->getDefaultJs();
        $js = preg_replace_callback("/(function[^\}]*?)(\})/m", function($matches){
            $str = $matches[0];
            $str = str_replace('\"','\\\"',$str);
            return json_encode(">>>$str<<<");
        },$js);

        $objStd = json_decode($js);
        print_r($objStd);
        exit;
        $nameSpaceComponents = 'IK\AmChartsBundle\Charts\Components\\';
        foreach($objStd as $key => $value){
            xdebug_disable();
            ini_set('html_errors', 0);
            $className = $nameSpaceComponents.''.ucfirst($key);
            if (class_exists($nameSpaceComponents.''.ucfirst($key)) && property_exists($this, $key)) {
                $object = new $className($value);
                $this->{$key} = $object;
            }
//            else {
//                echo 'error'; exit;
//            }
       }
       //exit('done');
    }




    protected function getDefaultJs(){
        exit('devafdfdfdfdfdf');
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
//       $js = preg_replace('/(function.*return.*?\})/','sdfsdf', );
        //preg_match("/(function[^\}]*?)(\})/m", $js, $matches);
        $js = preg_replace_callback("/(function[^\}]*?)(\})/m", function($matches){
            $str = $matches[0];
            $str = str_replace('\"','\\\"',$str);
            return json_encode(">>>$str<<<");
        },$js);

       $objStd =  json_decode($js);
//       foreach($objStd as $key => $value){
//           var_dump($key);
//           var_dump('-------------------');
//           var_dump($value);
//       }
       print_r($objStd);exit;
        exit;
       echo $js;exit;

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