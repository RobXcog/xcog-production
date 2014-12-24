<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'xcog' => [
          'class' => 'frontend\controllers\Xcog',
            'defaultAction' => 'index',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
     
        'urlManager' => [
            'baseUrl' => 'xcogstudios',
            'enablePrettyUrl' => true,
            'rules' => [
                'main' => 'site/index',
                'robxcog/resume' => 'xcog/resume',
                'about' => 'xcog/about',
                'thefront' => 'xcog/index',
                'enlistment' => 'site/signup',
                'xcogisxtreme' => 'xcog/index',
                'yarradio' => 'xcog/yarr',
                'robxcog' => 'xcog/robxcog',
                'robxcog/resume' => 'xcog/robxcog/resume',
                'xcog/music' => 'xcog/yarr',
                'xcog/jobs/jobboard' => 'site/contact',
                'sponsers' => 'xcog/sponsers'
            ],
        ],   
    ],
    'params' => $params,
    
 
];
