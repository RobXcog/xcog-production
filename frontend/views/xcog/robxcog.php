<?php
use yii\helpers\Html;
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
$this->title = 'Rob Xcog';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="xcog-resume">
    <div class="jumbotron">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="xcogWarning text-center" ><span class=""> <h2 class="text-danger">Warning!</h2> Juicy Textual Content by Rob Xcog </span>
    <p class="subtitle">
        Viewer Attention Advised
    </p> 

    </div>
    <p class="text">
        <i class="fa fa-quote-left fa-3x pull-left fa-border"></i> Welcome to my exposure, I am a cognitive enthusiast. A title I have coined for my eclectic focuses and seemingly contradictory personalities. I am prone to concepts and theories and eagerly debate them, mostly in hopes to find where I am foolish. I am controversially of sane mind through my art but I religiously logical. 
        </br>
    I am on a journey to find truth and value. My imagination runs rampantly with-in it's straight jacket. I enjoy symbolism I daydream, I doodle and I quantify. I have been called many things a musician, a designer, a hacker, a scientist, a painter, a poet, a lover, a friend and human. I claim to be an artistic designer. I bring to each one of my projects the passions and lessons I have discovered or augmented form the past. My work include software, music, graphics, business and life. 
    </p>
    <p class="text">
 I know a lot about how I need to understand. I am an enthusiast with a personal pursuit to discover life and how I can actualize my potentials. I am not classically trained or educated and I consider myself a hack in many regards but I am tenacious with my focuses. I have taught myself what I know, and I have built upon the shoulders of those who came before me to go farther than I alone could ever have dreamt to achieve but I do hope that others may build from me. I hope to share my passions with you here and I hope show how much our art, our passions, our lives are of value. 
    </p>
    <p class="body-content">
        <a href=" <?= yii\helpers\Url::toRoute(['xcog/resume'],['breadcrumbs'=>['label'=>'Rob Xcog', 'url' => 'xcog/resume']]) ?>">Résumé</a> and my <a href="/robxcog/robsinteractiveresume">blog</a>. I also will be posting my art, my music and my opinions. Soon. Very Soon. \m/ 
    </p>
    <p>
        <?php yii\helpers\Url::to(['xcog/resume']) ?>
    </p>
    </div>
   
    
    
    
    
    
</div>

