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
 



<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li rclass="active"><a href="#" >Rob }:{</a></li>
    <li role="presentation"><a href="/xcog/blog"><i class="fa fa-comment-o fa-lg"></i></a></li>
    <li ><a href="/xcog/music" ><i class="fa fa-music fa-lg"></i></a></li>
    <li ><a href=" <?= yii\helpers\Url::toRoute(['xcog/resume'],['breadcrumbs'=>['label'=>'Rob Xcog', 'url' => 'xcog/resume']]) ?>" >Résumé</a></li>
  </ul>
</div>
<div class="xcog-rob ">
    <div id="robsJumbo">
       
        <div class="row">
       
          <span class="col-sm-5 col-sm-offset-1">  
    
              <div class="xcogWarning text-center" > <h2 class="text-danger">Warning!</h2> Juicy and Personal Textual Content by Rob Xcog </span>
    <p class="subtitle">
        Viewer Discretion is Advised
    
    </p> 
            </div> 
              <span class="col-sm-6">
                  <h1 style="white-space: nowrap;" id="robName"><?= Html::encode($this->title) ?></h1>
            </span>

    </div>
    </div>
    <div>
    <p class="dark-text">
        <i class="fa fa-quote-left fa-3x pull-left fa-border"></i> <strong>Welcome to my (over)exposure, I am indulging in myself here and I am going to have fun making myself look totally awesome. Welcome to my little place on the web. Please make yousrself at home.
            <br>
            I am <span class="text-danger"> warned </span>! ! </strong> I also want to mix in useful data amongst the "aRt",  meaning this, please take my satyr with a grain of salt. or two. but less than 12357 mg/kg. :) 
    </p>
    

    <p class="text">
    <hr>
    <span class="fa-border pull-left SIC symbolist">.symbolist</span>     <h2>$this->me.parse(<a type="link" class="text-justify" data-toggle="modal" data-target="#rachet">#SELFIE</a>);</h2>
    <hr>
   I do not like to talk about myself however I do like to talk about what I want to do or how we can do things together. If you havent noticed by now I am a bit of a " metal head " however I respect all music and I respect talent and dedication. I enjoy all music and make it a point to judge all things slowly.  
    <br>My life was loss and strife for almost half of it, a life grown from my own choices so I had to make the choice to make my life the way I want it. I became a fire-fighter for a short time and made new friends. Then I taught myself a handful of programming languages and now I find myself here. Writing to the faceless users my life is so dedicated to serving. from every moment. I am an introvert but I like to host. I am a philanthropist at heart but it is not a title I can say I have earned yet.I love music and animation. I love math and I am enthralled with (usually human)psychology, with a focus on emotion (deception detection). 
   <hr>
   I hope to share over time, who I am, my passions, my fears, my rage .. my tears. <br>
   <hr>
   Thank you for your interest in me and my work. I hope to bring some quality projects to the public soon and I encourage input and critiques from across the whole board. I am always happy to chat about the future. 
   
    I appreciate your attention. Thank You. 
    </p>
    <p class="body-content">
        <a href=" <?= yii\helpers\Url::toRoute(['xcog/resume'],['breadcrumbs'=>['label'=>'Rob Xcog', 'url' => 'xcog/resume']]) ?>">Résumé</a> and my <a href="/robxcog/robintheblog">blog</a>. I also will be posting my attempts at art, music and logic. Soon. Very Soon. \m/ 
    </p>
    <p>
        <?php yii\helpers\Url::to(['xcog/resume'],['breadcrumbs'=>['label'=>'Rob Xcog', 'url' => 'xcog/resume']]) ?>
    </p>

   
    
    
    
    
    </div>
</div>
<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="rachet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">So Ratchet . . </h4>
      </div>
      <div class="modal-body">

          <iframe width="100%" height="800px" src="//www.youtube.com/embed/kdemFfbS5H0" frameborder="0" allowfullscreen></iframe>
    
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Drop</button>
        <button type="button" class="btn btn-primary">The Bass</button>
      </div>
    </div>
  </div>
</div>


