<?php

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
                        
                        
                        
                                
                        $xcogNavItems = [[
                        'label' => 'Net Xcog',
                            'url' => ['/site/index'],
                            'linkOptions' => [
                                'id' => 'navHome',
                                'class' => 'navHome'
                                
                        ]]];
                        
                        if (Yii::$app->user->isGuest) 
                            {
                            $xcogNavItems[] = [
                                'label' => 'Signup',
                                'url' => ['/site/signup'],
                                'linkOptions' => [
                                    'class' => 'fa fa-meh-o fa-2x'
                                ]];
                    
                            $xcogNavItems[] = [
                                'label' => 'Log-In',
                                'url' => ['/site/login'],
                                'linkOptions' => [
                                    'class' => 'fa fa-sign-in fa-2x'
                                ]];
                } else {
                    $xcogNavItems[] = [
                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['data-method' => 'post', 'class' => 'fa fa-sign-out fa-2x']
                    ];
                    $xcogNavItems[] = [
                        'label' => ' Dashbroad (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/site/logout'],
                        'linkOptions' => ['class' => 'fa fa-tachometer fa-2x']
                    ];
                }
                $xcogNavItems[] = [
                    'label' => ' Rob Xcog',
                    'url' => ['/site/robxcogisawesome'],
                    'linkOptions' => ['class' => 'fa fa-headphones fa-2x'
                    ]];
                $xcogNavItems[] = [
                    'label' => ' About Xcog',
                    'url' => ['/site/xcogcomm'],
                    ];
               
                $xcogNavItems[] = [
                    'label' => ' Contact Us', 
                    'url' => ['/site/contact'], 
                    'linkOptions' => ['class' => 'fa fa-paper-plane-o fa-2x'
                        ]];

                $xcogNavItems[] = [
                    'label' => 'Cart',
                       '<a href="#" class="cart">',
                    '<span class="quantity">2</span>',
                    '<span class="amount"><i class="fa fa-shopping-cart"></i>$55</span>',
                    '</a>',
                ];
        
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
