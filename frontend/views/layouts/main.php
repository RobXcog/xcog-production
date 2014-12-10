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
    <body  data-spy="scroll" data-target="#myScrollspy" >

 
        <?php
         
        $xcogNavItems = [[
        'label' => 'Xcog',
        'iconClass' => 'fa pull-left fa-home fa-2x',
        'url' => ['/site/index'],
        'linkOptioins' => ['class' => "btn btn-lg btn-success"]
        ]];
        
        if (Yii::$app->user->isGuest) {
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
                'url' => ['/xcog/myxcog'],
                'iconClass' => 'fa pull-left fa-tachometer fa-2x'
            ];
        }
        $xcogNavItems[] = [
            'label' => 'Rob Xcog',
            'url' => ['/xcog/robxcog'],
            'iconClass' => 'fa pull-left fa-terminal fa-2x'
        ];
        $xcogNavItems[] = [
            'label' => 'About Xcog',
            'url' => ['/xcog/about'],
            'iconClass' => 'fa pull-left fa-info fa-2x'
        ];

        $xcogNavItems[] = [
            'label' => ' Contact Us',
            'url' => ['/site/contact'],
            'iconClass' => 'fa pull-left fa-paper-plane-o fa-2x'
        ];
        $xcogNavItems[] = [
            'label' => ' YarRadio!',
            'url' => ['/xcog/yarr'],
            'iconClass' => 'fa pull-left fa-ra fa-2x'
                ]
        ?>

      
        <?php
        echo XcogNav::widget([
            'options' => [
                'label' => 'I am a label',
                'class' => 'nav main-nav nav-pills nav-stacked nowrap',
                'id' => 'main-nav'
            ],
            'items' => $xcogNavItems,
        ]);
        ?>
     
        <div class="page-wrap" id="layoutContainer">
        
                <header class="main-header" id="index-header">

                    <a href="#main-nav" class="open-menu">
                        ☰
                    </a>
                    <a href="#" class="close-menu">
                        ☰
                    </a>

                    <h1>XCOGStudios</h1>
                </header>
                <div class="mainContent container">
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

        </div> <!-- page wrap end -->

<?php $this->endBody() ?>

    </body>

</html>
        <?php $this->endPage() ?>
