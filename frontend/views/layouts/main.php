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
    
<?php
         
        $xcogNavItems = [[
        'label' => ' Xcog',
        'iconClass' => 'fa pull-left fa-home fa-3x col-xs-6 col-sm-3',
        'url' => ['/site/index'],
            'class' => 'col-xs-6 col-sm-3',
        'linkOptions' => ['class' => 'row'],
        ]];
        
        if (Yii::$app->user->isGuest) {
            $xcogNavItems[] = [
                'label' => 'Signup',
                'url' => ['/site/signup'],
                'iconClass' => 'fa pull-left fa-smile-o fa-3x col-xs-6 col-sm-3',
                'linkOptions' => ['class' => 'row'],
                 'class' => 'col-xs-6 col-sm-3',
                
            ];

            $xcogNavItems[] = [
                'label' => 'Log-In',
                'url' => ['/site/login'],
                
                'iconClass' => 'fa pull-left fa-sign-in fa-3x col-xs-6 col-sm-3',
                'linkOptions' => ['class' => 'row'],
                 'class' => 'col-xs-6 col-sm-3',
            ];
        } else {
            $xcogNavItems[] = [
                'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'iconClass' => 'fa pull-left fa-sign-out fa-3x col-xs-6 col-sm-3',
                'linkOptions' => [
                    'class' => 'row',
                    'data-method' => 'post'
                ],
                'class' => 'col-xs-6 col-sm-3',
            ];
            $xcogNavItems[] = [
                'label' => 'Dashbroad (' . Yii::$app->user->identity->username . ')',
                'url' => ['/xcog/myxcog'],
                'iconClass' => 'fa pull-left fa-tachometer fa-3x col-xs-6 col-sm-3',
                'linkOptions' => ['class' => 'row'],
                'class' => 'col-xs-6 col-sm-3',
            ];
        }
        $xcogNavItems[] = [
            'label' => 'Rob Xcog',
            'url' => ['/xcog/robxcog'],
            'iconClass' => 'fa pull-left fa-terminal fa-3x col-xs-6 col-sm-3',
            'linkOptions' => ['class' => 'row'],
             'class' => 'col-xs-6 col-sm-3',
            ];
        $xcogNavItems[] = [
            'label' => ' About',
            'url' => ['/xcog/about'],
            'iconClass' => 'fa fa-info fa-3x col-xs-6 col-sm-3',
            'class' => 'col-xs-6 col-sm-3',
            'linkOptions' => ['class' => 'row'],
            ];
        $xcogNavItems[] = [
            'label' => 'Contact',
            'url' => ['/site/contact'],
            'iconClass' => 'fa pull-left fa-paper-plane-o fa-3x col-xs-6 col-sm-3',
            'class' => 'col-xs-6 col-sm-3 pull-right',
            'linkOptions' => ['class' => 'row'],
            ];

        $xcogNavItems[] = [
            'label' => ' YarRadio!',
            'url' => ['/xcog/yarr'],
            'iconClass' => 'fa pull-left fa-ra fa-3x col-xs-6 col-sm-3',
            'class' => 'col-xs-6 col-sm-3 pull-right',
            'linkOptions' => ['class' => 'row'],
            ];
?>

      
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
  
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57705753-1', 'auto');
  ga('send', 'pageview');

</script>
        
        
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body  data-spy="scroll" data-target="#myScrollspy" data-offset="180" >

 
        <?php
          echo XcogNav::widget([
            'options' => [
                'label' => 'I am a label',
                'class' => 'nav main-nav nav-pills nav-stacked',
                'id' => 'main-nav',
                'style' => 'white-space:nowrap',
                
                
            ],
            'items' => $xcogNavItems,
        ]);
          
         
        
        ?>
        <div class="page-wrap container" id="layoutContainer"> 
              
            <header class="main-header" id="index-header">
             <div class="row">  
                 <div class="col-xs-1 ">
                                <a href="#main-nav" class="open-menu">☰</a>
                                <a href="#" class="close-menu">☰</a> 
                 </div> 
        
                 <div class="col-xs-4 col-xs-offset-1">
                     <h2><span id="xcogXChar">X</span><span id="xcogCogChar">COG</span><span id="xcogStudiosChar">Studios</span> <small><span style="white-space:nowrap; position: relative; top: -15px;"><span id="xcogDotComChar">dot com</span></small></h2>
                 </div>
                 <div class="col-">
                     
                 </div>
          </div>
            </header>
       
                <div class="mainContent">
               
<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]);
?>
                    <?= Alert::widget() ?>

                    <?= $content ?>
                </div>

            <footer class="footer">
                        <p class="pull-left">&copy; Rob Xcog <?= date('Y') ?></p>
                        <p class="pull-right"><a href="/xcog/jobs/jobboard">Join the Xcog Team ! </a></p>
                </footer>

            
        </div> <!-- page wrap end -->
        
<?php $this->endBody() ?>

    </body>
</html>
        <?php $this->endPage() ?>
