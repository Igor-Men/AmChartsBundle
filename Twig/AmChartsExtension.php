<?php
namespace IK\AmChartsBundle\Twig;

use IK\AmChartsBundle\Charts\ChartInterface;

class AmChartsExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('amchartt', array($this, 'renderAmChart'), array('is_safe' => array('html'))),
        );
    }

    public function renderAmChart( ChartInterface $chart)
    {
        return $chart->render();
    }

    public function getName()
    {
        return 'amcharts_extension';
    }
}
