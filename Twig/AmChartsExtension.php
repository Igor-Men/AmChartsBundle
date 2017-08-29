<?php
namespace IK\AmChartsBundle\Twig;

class AmChartsExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'amchart' => new \Twig_Function_Method($this, 'renderAmChart', array('is_safe' => array('html'))),
        );
    }

    public function renderAmChart($chart)
    {
        return $chart->render();
    }

    public function getName()
    {
        return 'amcharts_extension';
    }
}
