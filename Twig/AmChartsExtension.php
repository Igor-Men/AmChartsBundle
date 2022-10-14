<?php
namespace IK\AmChartsBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

use IK\AmChartsBundle\Charts\ChartInterface;

class AmChartsExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return array(
            new TwigFunction('amchart', array($this, 'renderAmChart'), array('is_safe' => array('html'))),
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
