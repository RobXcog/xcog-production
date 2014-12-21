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
 
<?php

//SVG Holder

$evilIcon = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
<g id="icomoon-ignore">
</g>
<path d="M20 14c-1.105 0-2-0.895-2-2 0-0.037 0.001-0.073 0.003-0.109 0.064-1.483 1.413-2.467 2.55-3.036 1.086-0.543 2.159-0.814 2.205-0.826 0.536-0.134 1.079 0.192 1.213 0.728s-0.192 1.079-0.728 1.213c-0.551 0.139-1.204 0.379-1.779 0.667 0.333 0.357 0.537 0.836 0.537 1.363 0 1.105-0.895 2-2 2zM8.758 9.97c-0.536-0.134-0.862-0.677-0.728-1.213s0.677-0.862 1.213-0.728c0.045 0.011 1.119 0.283 2.205 0.826 1.137 0.568 2.486 1.553 2.55 3.036 0.002 0.036 0.003 0.072 0.003 0.109 0 1.105-0.895 2-2 2s-2-0.895-2-2c0-0.527 0.204-1.005 0.537-1.363-0.575-0.288-1.229-0.528-1.779-0.667zM16 23c2.549 0 4.779-1.362 6.003-3.398l2.573 1.544c-1.749 2.908-4.935 4.855-8.576 4.855s-6.827-1.946-8.576-4.855l2.573-1.544c1.224 2.036 3.454 3.398 6.003 3.398zM32 2c0-1.422-0.298-2.775-0.833-4-1.049 2.401-3.014 4.31-5.453 5.287-2.694-2.061-6.061-3.287-9.714-3.287s-7.021 1.226-9.714 3.287c-2.439-0.976-4.404-2.886-5.453-5.287-0.535 1.225-0.833 2.578-0.833 4 0 2.299 0.777 4.417 2.081 6.106-1.324 2.329-2.081 5.023-2.081 7.894 0 8.837 7.163 16 16 16s16-7.163 16-16c0-2.871-0.757-5.565-2.081-7.894 1.304-1.689 2.081-3.806 2.081-6.106zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z" fill="#ffffff"></path>
</svg>
';

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
    
              <div class="xcogWarning text-center" > <h2 class="text-danger">Warning!</h2> Juicy Textual Content by Rob Xcog </span>
    <p class="subtitle">
        Viewer Attention Advised
    
    </p> 
            </div> 
              <span class="col-sm-6">
                  <h1 style="white-space: nowrap;" id="robName"><?= Html::encode($this->title) ?></h1>
            </span>

    </div>
    </div>
    <div>
    <p class="dark-text">
        <i class="fa fa-quote-left fa-3x pull-left fa-border"></i> <strong>Welcome to my (over)exposure, I am indulging in myself here and I am having fun with it, so please be<span class="text-danger"> warned </span>! ! </strong> I also want to mix in useful data amongst the "aRt",  meaning this, please take my satyr with a grain of salt. or two. but less than 12357 mg/kg. :)
    </p>

    <p class="text">
    <hr>
    <span class="fa-border pull-left SIC xcogBannerRob">.symbolist</span>     <small>$this->me.parse(<a type="link" class="text-justify" data-toggle="modal" data-target="#rachet">#SELFIE</a>);</small>
    
   I am a fan of shapes and psychology, music and maths. Though my <strong>understanding</strong> of things are somewhat sheltered. With in these digital walls, I hope to share who I am with you. First and foremost I accept that I am human and I am bound by human nature and capacity which means that I trust us all to be, well.. us.  I am a designer, I love to doodle and play guitar. I am an enthusiast by nature, with a personal pursuit to discover (my) life's mysteries as well as enjoy the ride. I hope to find how I can actualize my potentials or even what my potentials could or should be. I am not classically trained or educated and I've hacked my way through life in many regards but I am tenacious with my focuses and humble with my criticisms (unless I think it's funny to not be, heh ). I have taught myself what I know by reading, watching and experimenting. I, like many, have built upon the shoulders of those who came before me to go farther than I alone could. I do hope that others will build with me, so that we can all go farther than we may-could alone. I hope to provide a launching pad for a few projects here some very community driven with a positive social and economic impact for individuals that may slip through societies fickle views and I hope to share my passions in a valuable way, even my rather dark ones. Out of it all I hope to contribute a positive influence for anyone of mind. I am pro passion, and pro human and I appreciate your attention. Thank You. 
    </p>
    <p class="body-content">
        <a href=" <?= yii\helpers\Url::toRoute(['xcog/resume'],['breadcrumbs'=>['label'=>'Rob Xcog', 'url' => 'xcog/resume']]) ?>">Résumé</a> and my <a href="/robxcog/robsinteractiveresume">blog</a>. I also will be posting my attempts at art, music and logic. Soon. Very Soon. \m/ 
    </p>
    <p>
        <?php yii\helpers\Url::to(['xcog/resume']) ?>
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
           <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https//www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
         
          width: '100%',
          videoId: 'kdemFfbS5H0',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
    
        <div id="player"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Drop</button>
        <button type="button" class="btn btn-primary">The Bass</button>
      </div>
    </div>
  </div>
</div>
