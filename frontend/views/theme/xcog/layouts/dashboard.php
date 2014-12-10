<?php

/* 
 * Copyright 2014 Rob Xcog rob@xcogstudios.com (Im usually friendly).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\ListView;
use yii\widgets\BaseListView;
use yii\base\Widget;
use yii\base\Object;
use yii\base\Component;
use yii\widgets\Menu;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\widgets\XcogNav;


/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body>
        
            <div class="contentContainer" id="contentContainer">

                        <?php
                        XcogNav::begin();
                        $xcogNavItems = [[
                        'label' => 'Xcog',
                            'iconClass'=>'fa pull-left fa-home fa-2x',
                            'url' => ['/site/index'],
                            'linkOptioins'=> ['class' => "btn btn-lg btn-success"]
                            ]];                        
                        if (Yii::$app->user->isGuest) 
                            { 
                            $xcogNavItems[] = [
                                'label' => 'Signup',
                                'url' => ['/site/signup'],
                                'iconClass' => 'fa pull-left fa-smile-o fa-2x',
                           ];
                    
                            $xcogNavItems[] = [
                                'label' => 'Log-In',
                                'url' => ['/site/login'],
                                'iconClass' => 'fa pull-left fa-sign-in fa-2x'
                                    ];
                } else {
                    $xcogNavItems[] = [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'iconClass' => 'fa pull-left fa-sign-out fa-2x',
                        'linkOptions' => [
                    'data-method' => 'post'
                ]
                    ];
                    $xcogNavItems[] = [
                        'label' => 'Dashbroad (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/myxcog'],
                        'iconClass' => 'fa pull-left fa-tachometer fa-2x'
                       
                    ];
                }
                $xcogNavItems[] = [
                    'label' => 'Rob Xcog',
                    'url' => ['/site/robxcogisawesome'],
                    'iconClass' => 'fa pull-left fa-terminal fa-2x'
                    ];
                $xcogNavItems[] = [
                    'label' => 'About Xcog',
                    'url' => ['/site/xcogcomm'],
                                        'iconClass' => 'fa pull-left fa-info fa-2x'

                    ];
               
                $xcogNavItems[] = [
                    'label' => ' Contact Us', 
                    'url' => ['/site/contact'], 
                    'iconClass'=>'fa pull-left fa-paper-plane-o fa-2x'
                    ]
                        
       
                ?>

                <?php
                echo XcogNav::widget([
                    'options' => [
                        'label' => 'I am a label',
                        'class' => 'nav main-nav nav-pills nav-stacked',
                        'id' => 'main-nav'
                        ],
                    'items' => $xcogNavItems,
                    ]);
                ?>

                <div class="page-wrap">
                    <header class="main-header" id="index-header">

                        <a href="#main-nav" class="open-menu">
                            ☰
                        </a>
                        <a href="#" class="close-menu">
                            ☰
                        </a>

                        <h1>XCOGStudios</h1>
                    </header>

                    </header>
                    <div class="container">
                        <?=
                        Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ])
                        ?>

                        <?= Alert::widget() ?>

                        <?= $content ?>
                    </div>


                    <footer class="footer">


                        <div class="container">
                            <p class="pull-left">&copy; Rob Xcog <?= date('Y') ?></p>
                            <p class="pull-right"><?= Yii::powered() ?></p>

                        </div>

                    </footer>

                </div>
            </div>

        <?php $this->endBody() ?>

    </body>
   
</html>
<?php $this->endPage() ?>
