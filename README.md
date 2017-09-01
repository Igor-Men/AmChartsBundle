<p align="center"><a href="https://www.amcharts.com/demos/combined-bullet-column-line-chart" target="_blank">
    <img src="https://www.amcharts.com/wp-content/uploads/2016/04/serial_chart.png">
</a></p>

symfony-amcharts
=============


AmCharts for symfony
Build your chart with twig and php only!
You can create reusable code.


## How to get started

### Installation

1. Add the following to your `composer.json` file

   ```json
       "require": {
           ...
           "kalamurda/amcharts-bundle": "dev-master@dev"
           ...
       }
   ```

2. Run `php composer.phar update "kalamurda/amcharts-bundle"`

3. Register the bundle in your `app/AppKernel.php`:

   ``` php
       <?php
       ...
       public function registerBundles()
       {
           $bundles = array(
               ...
               new \IK\AmChartsBundle\IKAmChartsBundle(),
               ...
           );
       ...
   ```

## Usage

1. phpController
    
    ```
    $preperadArr = [
        [
            'column1' => 5,
            'column2' => 9,
            'date' => '2017-06-01'
        ],[
            'column1' => 5,
            'column2' => 9,
            'date' => '2017-06-02'
        ],[
            'column1' => 5,
            'column2' => 9,
            'date' => '2017-06-03'
        ],
        ......
    ];
    
    $dataProvider = new DataProvider($preperadArr);
    
    $chart = new CombinedBulletColumnLineChart();
    $chart->setDataProvider($dataProvider);  
      
    return $this->render('default/index.html.twig', [
            'chart' => $chart
        ]);
        
    ```
    
2. twig index.html.twig
    ```
        ...
        <!-- Styles -->
        
        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
            }
        </style>

        <!-- Load jQuery from Google's CDN if needed -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <!-- Resources -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>    
        
        <script type="text/javascript">
            {{ amchart(chart) }}
        </script>
        ...
    ```
    
for more details look examples in root directory. You can override any property.


