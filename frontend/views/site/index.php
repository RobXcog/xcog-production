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


/* @var $this yii\web\View */

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\helpers\Url;
use yii\bootstrap\Modal;

$this->title = 'XCOG Studios dot com';

$this->registerMetaTag(['name' => 'keywords', 'content' => 'xcog, xcogstudios, robxcog, webdesign, main, frontpage, music, portland, graphics, underground, photos, artists, artist, grafitti, metal, hip-hop, beats, business, community, blog']);


/*
$this->registerJs('$(function() { $("#pjax-container").pjax("#pjax-Metal", { fragment: ".mainMenu" }); });');
*/


?>
<!-- I am collapsed by default -->

<div class="site-index">
    <div id="xcogHomeJumbo" class="jumbotron text-center">
        <div class="row logoRow">
            
            <!-- col start-->
            <div class="col-xs-12 logoCol">
            
                <div class="smilelyXcogWrapper ">
                
                   <i class="fa fa-cog fa-spin" id="logoCog" ></i>
            

                    <svg class="xcogIcongrin iconGrin"><use xlink:href="#xcogIcongrin"></use></svg>
                
                    <svg class="smileyCircleSVG">
<circle class="circleLogo" cx="100" cy="100" r="69" />
</svg>
                </div>
      
                <!-- col end -->
                
            </div>
            
            
        
        
        </div>
   
            <div class="row ">
                <div class="clearfix"></div>  
                <div class="col-xs-12 col-md-2 lg-4 ">
                    <i class="fa fa-music fa-2x icon-o"></i>
                </div>

                <div class="col-xs-12 col-md-2 lg-4  text-warning text-center">
                    PORTLAND UNDERGROUND ARTISTS
                </div>

                <div class="col-xs-12 col-md-2 col-sm-offset-1">
                    <i class="fa fa-code fa-2x"></i>
                </div>

                <div class="col-xs-12 col-md-2  text-info text-center">
                    AUDIENCE FOCUSED DESIGN 
                </div>

                <div class="col-xs-12 col-md-2 col-sm-offset-1">

                    <i class="fa fa-group fa-2x"></i>
                </div>

                <div class="col-xs-12 col-md-2 text-success text-center">
                   FOR A BETTER COMMUNITY 
                </div>
            

            </div>
       

        <hr>
         <h3> We are a project that is constantly evolving. :) </h3> <small> Your attention and patience is always appreciated! </small>         
        <p><i class="fa fa-cog fa-spin"></i><h2>Up The Game.</h2></p>

    <hr>
    
     <?= Html::tag('a','<i class="fa fa-level-up fa-2x pull-left"></i>Level Up ! +', ['data-xcog' => 'levelUp',
         'data-toggle' => 'tooltip',
         'data-placment' => 'top',
         'title' => 'D I N G !']) ?>
        




    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-m-3">
            <div class="panel panel-primary xcogPannel" >
                <div class="panel-heading"> 
                    <h3 class="panel-title">Simply With Purpose</h3>
                </div>
                <div class="panel-body">
                    <i class="fa fa-quote-left fa-3x pull-left fa-border"></i>
                    <p>Simple does not mean easy. A lot of effort can go into making things <strong>appear</strong> effortless and making a user focused website is an art and science. Xcog can set you up from the ground up or touch up an already existing project. <a hre='mailto:rob@xcogstudios.com'> Rob Xcog</a>. Touch below to see some past work.</p>
                                   
                    <hr>
                    <p><a class="btn btn-primary" href="<?= yii\helpers\Url::toRoute('/xcog/yarr') ?>">Let's Build Something &raquo;</a></p>


                </div>
            </div>
        </div> <!-- col end -->
        <div class="col-xs-12 col-sm-6 col-m-3">

            <div class="panel panel-info">
                <div class="panel-heading"> 
                    <h3 class="panel-title">XCOG Loves to Make Noise!</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <i class="fa fa-quote-left fa-3x pull-left fa-border"></i>
                        Here is where you can find all of Xcog's past and current public projects.</p>
                    <hr>      
                    <p>
                        <a class="btn btn-primary" href=" <?= yii\helpers\Url::toRoute('xcog/about') ?>">To The XCOG Showcase! &raquo;</a></p>

                </div>
               
            </div>


          
      <div id="aboutdiv"></div>

    <?php Pjax::begin(); ?>

        <?= Html::a(
            'about',
            Url::to(['xcog/about']),
            ['data-pjax'=> '#aboutdiv']
        ); ?>

    <?php Pjax::end(); ?>


        </div> <!-- col end -->
        <div class="col-xs-12 col-sm-6 col-m-3">

            <div class="panel panel-success xcogPannel">
                <div class="panel-heading"> 
                    <h3 class="panel-title">YarRadio! Xcog's All About the Waves</h3>
                </div>
                <div class="panel-body"><i class="fa fa-quote-left fa-3x pull-left fa-border"></i>

                    <small>Yarr, there be some pirate style broadcasting causing waves here and as many as we can. We are here to bring to you the best of Portland's Underground and Unique Culture as well as our mate fleets from all around the world. Special performances straight from the Pirate Cave at XCOG,
                        YarRadio! is against censorship! What did you expect, we're fucking pirates. and jedis. . </small>
                    <hr>
                    <p>
                        <a class="btn btn-primary" href="<?= yii\helpers\Url::toRoute('xcog/yarr') ?>" >YarRadio!&raquo;</a>
                    
                 </p>
                </div>

            </div>
        </div> <!-- col end -->

    </div>
</div>