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
        'view' => [
             'theme' => [
                 'pathMap' => ['@app/views' => '@app/themes/xcog'],
                 'baseUrl' => '@app/views/themes/xcog',
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'rules' => [
                'robxcog/robsinteractiveresume' => 'xcog/resume',
                'about' => 'xcog/about',
                'thefront' => 'xcog/index',
                'enlistment' => 'site/signup',
                'xcogisxtreme' => 'xcog/index',
                'yarradio' => 'xcog/yarr',
                'robxcog' => 'xcog/robxcog',
                'robxcog/resume' => 'xcog/robxcog/resume',
            ],
        ],   
    ],
    'params' => $params,
    
 
];
