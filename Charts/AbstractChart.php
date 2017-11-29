<?php

namespace IK\AmChartsBundle\Charts;


use Doctrine\Common\Collections\ArrayCollection;
use IK\AmChartsBundle\Charts\Components\AbstractListener;
use IK\AmChartsBundle\Charts\Components\DataProvider;
use IK\AmChartsBundle\Charts\Components\EventInterface;
use IK\AmChartsBundle\Charts\Components\Export;
use IK\AmChartsBundle\Charts\Components\ListenerInterface;
use IK\AmChartsBundle\Charts\Components\Theme;
use IK\AmChartsBundle\Charts\DefaultConfigs\ChartDefaultInterface;
use IK\AmChartsBundle\Helpers\CommendData;
use IK\AmChartsBundle\Helpers;
use Symfony\Component\Intl\Exception\NotImplementedException;

abstract class AbstractChart implements ChartInterface, \JsonSerializable {

    protected $id;
    protected $name;
    /** @var Theme $theme */
    protected $theme;
    /** @var  ChartDefaultInterface $chartDefaultData */
    protected $chartDefaultData;
    /** @var  DataProvider $dataProvider */
    protected $dataProvider;
    /** @var Export $export */
    protected $export;
    /** @var  $commentData CommendData */
    protected $commentData;

    protected $themeCustomString = '';

    protected $divSelector = '';

    protected $eventListeners = [];

    public function getListeners() {
        return $this->eventListeners;
    }

    public function getListener($eventName) {
        return isset($this->eventListeners[$eventName]) ? $this->eventListeners[$eventName] : false;
    }

    public function addListener(ListenerInterface $listener) {
        $this->eventListeners[$listener->getName()] = $listener;
    }

    public function removeListener(ListenerInterface $listener) {
        if (isset($this->eventListeners[$listener->getName()])) {
            unset($this->eventListeners[$listener->getName()]);
            return true;
        }
        return false;
    }

    protected function renderListeners() {
        $result = [];
        /** @var AbstractListener $listener */
        foreach($this->eventListeners as $listener) {
            $result[] = (object)$listener->jsonSerialize();
        }
        return $result;
    }

    public function __construct() {
        $this->commentData = new CommendData();
        $this->generateId();
        $this->buildDefault();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return Export
     */
    public function getExport() {
        return $this->export;
    }

    /**
     * @param Export $export
     */
    public function setExport(Export $export) {
        $this->export = $export;
    }

    protected function generateId() {
        $this->id = uniqid('id_', false);
    }

    /**
     * @return CommendData
     */
    public function getCommentData()
    {
        return $this->commentData;
    }

    /**
     * @param CommendData $commentData
     */
    public function setCommentData($commentData)
    {
        $this->commentData = $commentData;
    }


    /**
     * @param string['light','dark']  $nameName
     * @return bool
     * @throws \Exception
     */
    public function setTheme($nameName) {
        $allowed = ['light', 'dark', 'black', 'none', 'chalk', 'patterns'];
        if (!in_array($nameName, $allowed)) {
            throw new \Exception('No theme with name:' . $nameName);
        }
        $this->theme = new Theme($nameName);
        return true;
    }

    public function getStyle() {
        $theme = $this->theme->getTheme();
        $styleCSS =  $this->getThemeCustomString() ? $this->getThemeCustomString() : $this->chartDefaultData->getDefaultCss($theme);
        if (!$this->dataProvider->data) {
            $styleCSS = $styleCSS. ' #chartdiv {display: none};';
        }
        return $this->uniqueIdSelector($styleCSS);
    }

    protected function uniqueIdSelector($string) {
        $pattern = '/'.$this->chartDefaultData->getDefaultIDSelector().'/';
        $replacement = $this->chartDefaultData->getDefaultIDSelector().$this->getId();
        $newStr  = preg_replace($pattern, $replacement, $string);
        return $newStr;
    }

    public function getSelector(){
        return $this->chartDefaultData->getDefaultIDSelector().$this->getId();
    }

    public function getLibraryScripts() {
        $theme = $this->theme->getTheme();
        $isEnabledExport = $this->export->getEnabled();
        return $this->chartDefaultData->getDefaultResources($theme, $isEnabledExport);
    }

    public function setDataProvider(DataProvider $dataProvider) {
        $this->dataProvider = $dataProvider;
    }

    public function getDataProviderData(){
        return $this->dataProvider->data;
    }

    /**
     * @return string
     */
    public function getThemeCustomString() {
        return $this->themeCustomString;
    }

    /**
     * @param string $themeCustomString
     */
    public function setThemeCustomString($themeCustomString) {
        $this->themeCustomString = $themeCustomString;
    }

    protected function buildDefault() {

        $js =  $this->chartDefaultData->getDefaultJs();
        $js = preg_replace_callback("/(function[^\}]*?)(\})/m", function($matches){
            $str = $matches[0];
            $str = str_replace('\"','\\\"',$str);
            return json_encode(">>>$str<<<");
        },$js);

        $objStd = json_decode($js);
        if (!$objStd) {
            return false;
        }

        $nameSpaceComponents = 'IK\AmChartsBundle\Charts\Components\\';
        foreach($objStd as $key => $value){
            $className = $nameSpaceComponents.''.ucfirst($key);
            if (class_exists($nameSpaceComponents.''.ucfirst($key)) && property_exists($this, $key)) {
                $object = new $className($value);
                $this->{$key} = $object;
            }
        }
        return true;
    }

    protected function renderStartIIFE()
    {
        return "$(function () {\n";
    }

    protected function renderEndIIFE()
    {
        return "});\n";
    }
    protected function postJsonProcess($strJs) {
        //return $strJs;
        $unescepedJsFunctions = preg_replace_callback("/(\">>>)(.*?)(\<\<\<\")/i", function($matches){
            $str_inner = $matches[2];
            $str_inner =  str_replace("\\\"", "\"", $str_inner);
            $str_inner =  str_replace("\\\'", "\'", $str_inner);
            $str_inner =  str_replace("\\/", "/", $str_inner);
            return str_replace("\/\\", "\\", $str_inner);
        },$strJs);
        return $unescepedJsFunctions;
    }

    public function getChartVariableName() {
        return $this->type."_".$this->getId();
    }

    public function render()
    {
        $serialized = $this->jsonSerialize();
        $sctipt_string = $this->postJsonProcess($serialized);

        $chartJS = $this->renderStartIIFE();

        $chartJS .= "    " . $this->getChartVariableName() . " = new AmCharts.makeChart(\"" . $this->getSelector() . "\",";

        $chartJS .= $sctipt_string;

        $chartJS .= ");\n";

        $chartJS .= $this->renderEndIIFE();

        return $chartJS;
    }
}