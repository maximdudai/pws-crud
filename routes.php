<?php

    require_once 'controllers/HomeController.php';
    require_once 'controllers/GreenhouseController.php';
    require_once 'controllers/SensorController.php';
    require_once 'controllers/ReadingController.php';
    require_once 'controllers/PeriodController.php';

    return [
        'defaultRoute' => ['GET', 'HomeController', 'index'],
        'home' => [
            'index' => ['GET', 'HomeController', 'index'],
        ],
        'greenhouse' => [
            'index' => ['GET', 'GreenhouseController', 'index'],
            'edit' => ['GET', 'GreenhouseController', 'edit'],
            'update' => ['POST', 'GreenhouseController', 'update'],
            'create' => ['GET', 'GreenhouseController', 'create'],
            'store' => ['POST', 'GreenhouseController', 'store'],
        ],
        'sensor' => [
            'index' => ['GET', 'SensorController', 'index'],
            'show' => ['GET', 'SensorController', 'show'],
            'create' => ['GET', 'SensorController', 'create'],
            'store' => ['POST', 'SensorController', 'store'],
            'delete' => ['GET', 'SensorController', 'delete'],
        ],
        'reading' => [
            'index' => ['GET', 'ReadingController', 'index'],
            'create' => ['GET', 'ReadingController', 'create'],
            'store' => ['POST', 'ReadingController', 'store'],
            'delete' => ['GET', 'ReadingController', 'delete'],
        ],
        'period' => [
            'index' => ['GET', 'PeriodController', 'index'],
            'create' => ['GET', 'PeriodController', 'create'],
            'store' => ['POST', 'PeriodController', 'store'],
            'edit' => ['GET', 'PeriodController', 'edit'],
            'update' => ['POST', 'PeriodController', 'update'],
            'delete' => ['GET', 'PeriodController', 'delete'],
        ]
    ];