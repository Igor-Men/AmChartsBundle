<?php

namespace IK\AmChartsBundle\Charts\Components;


class Graph extends AbstractProperty {

    public $id;
    public $valueAxis;
    public $lineColor;
    public $fillColors;
    public $fillAlphas;
    public $type;
    public $title;
    public $valueField;
    public $clustered;
    public $columnWidth;
    public $legendValueText;
    public $balloonText;

    public $bullet;
    public $bulletBorderAlpha;
    public $bulletBobulletrderAlpha;
    public $bulletColor;
    public $bulletSize;
    public $hideBulletsCount;
    public $lineThickness;
    public $useLineColorForBulletBorder;
    public $dashLength;

    public $lineAlpha;
    public $labelText;
    public $labelFunction;
    public $balloonFunction;

    public function __construct($arrProps) {
        $this->setArrProperties($arrProps);
        $this->arrPropertyFunctionNames[] = 'balloonFunction';
    }

    public function getLineAlpha() {
        return $this->lineAlpha;
    }

    public function setLineAlpha($lineAlpha) {
        $this->lineAlpha = $lineAlpha;
    }


    public function getLabelText() {
        return $this->labelText;
    }


    public function setLabelText($labelText) {
        $this->labelText = $labelText;
    }

    public function getLabelFunction() {
        return $this->labelFunction;
    }

    public function setLabelFunction($labelFunction) {
        $this->labelFunction = $labelFunction;
    }

    public function getBalloonFunction() {
        return $this->balloonFunction;
    }

    public function setBalloonFunction($balloonFunction) {
        $this->balloonFunction = $balloonFunction;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getValueField()
    {
        return $this->valueField;
    }

    public function getValueAxis()
    {
        return $this->valueAxis;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getBalloonText()
    {
        return $this->balloonText;
    }

    public function setBalloonText($balloonText)
    {
        $this->balloonText = $balloonText;
    }


    public function getLegendValueText()
    {
        return $this->legendValueText;
    }

    public function setLegendValueText($legendValueText)
    {
        $this->legendValueText = $legendValueText;
    }

    public function getLineColor()
    {
        return $this->lineColor;
    }

    public function setLineColor($lineColor)
    {
        $this->lineColor = $lineColor;
    }

    public function getFillColors()
    {
        return $this->fillColors;
    }

    public function setFillColors($fillColors)
    {
        $this->fillColors = $fillColors;
    }

    public function getFillAlphas()
    {
        return $this->fillAlphas;
    }

    public function setFillAlphas($fillAlphas)
    {
        $this->fillAlphas = $fillAlphas;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getClustered()
    {
        return $this->clustered;
    }

    public function setClustered($clustered)
    {
        $this->clustered = $clustered;
    }

    public function getColumnWidth()
    {
        return $this->columnWidth;
    }

    public function setColumnWidth($columnWidth)
    {
        $this->columnWidth = $columnWidth;
    }

    public function getBullet()
    {
        return $this->bullet;
    }

    public function setBullet($bullet)
    {
        $this->bullet = $bullet;
    }

    public function getBulletBorderAlpha()
    {
        return $this->bulletBorderAlpha;
    }

    public function setBulletBorderAlpha($bulletBorderAlpha)
    {
        $this->bulletBorderAlpha = $bulletBorderAlpha;
    }

    public function getBulletBobulletrderAlpha()
    {
        return $this->bulletBobulletrderAlpha;
    }

    public function setBulletBobulletrderAlpha($bulletBobulletrderAlpha)
    {
        $this->bulletBobulletrderAlpha = $bulletBobulletrderAlpha;
    }

    public function getBulletColor()
    {
        return $this->bulletColor;
    }

    public function setBulletColor($bulletColor)
    {
        $this->bulletColor = $bulletColor;
    }

    public function getBulletSize()
    {
        return $this->bulletSize;
    }

    public function setBulletSize($bulletSize)
    {
        $this->bulletSize = $bulletSize;
    }

    public function getHideBulletsCount()
    {
        return $this->hideBulletsCount;
    }

    public function setHideBulletsCount($hideBulletsCount)
    {
        $this->hideBulletsCount = $hideBulletsCount;
    }

    public function getLineThickness()
    {
        return $this->lineThickness;
    }


    public function setLineThickness($lineThickness)
    {
        $this->lineThickness = $lineThickness;
    }


    public function getUseLineColorForBulletBorder()
    {
        return $this->useLineColorForBulletBorder;
    }


    public function setUseLineColorForBulletBorder($useLineColorForBulletBorder)
    {
        $this->useLineColorForBulletBorder = $useLineColorForBulletBorder;
    }


    public function getDashLength()
    {
        return $this->dashLength;
    }

    public function setDashLength($dashLength)
    {
        $this->dashLength = $dashLength;
    }

    public function setValueAxis($valueAxis)
    {
        $this->valueAxis = $valueAxis;
    }

    public function setValueField($valueField)
    {
        $this->valueField = $valueField;
    }
}