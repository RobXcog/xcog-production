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
$this->title = 'XCOG Studios.com';
?>
<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => 'xcog, xcogstudios, robxcog, webdesign, main, frontpage, music, portland, graphics, underground, photos, artists, artist, grafitti, metal, hip-hop, beats, business, community, blog']);

  ?>


<!-- I am collapsed by default -->

<div class="xcog-index">

    <div class="jumbotron text-center">
        <a href="#logo" id="logoA"></a>
        
        <h1> X C  <span class="fa-stack fa-3x"><i class="fa fa-stack-2x fa-cog fa-spin" id="logoCog" style="color: black; top: -45px;"></i><i class="fa fa-stack-2x fa-circle" id="logoCircle" style="top: 1px; color:yellow;"></i><i class="fa fa-stack-2x fa-smile-o" id="logoSmiley"></i></span> G</h1>

      <p class="lead"> AUDIO  <i class="fa fa-cog fa-spin"></i> VISUAL <i class="fa fa-cog fa-spin"></i> COGNITIVE <i class="fa fa-cog fa-spin"></i> DYNAMIC
      </p>
        <p><h2>Level Up Your Game</h2></p>
       everyone else is..
        <p><a class="btn btn-lg btn-success" href="/about">Level Up ! +</a></p>
  
    </div>
        <div class="row">
            <div class="col-lg-4">
                <h2>Web With Purpose</h2>

                <i class="fa fa-quote-left fa-3x pull-left fa-border"></i>
                <p>Xcog Designs are for select clients. For more information please contact <a hre='mailto:rob@xcogstudios.com'> Rob Xcog</a>. Touch below to see some past work.</p>
                <p>                   
               
                <p><a class="btn btn-primary" href="/xcogshowcase">Let's Build Something &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>XCOG Loves to Make Noise!</h2>
                <i class="fa fa-quote-left fa-3x pull-left fa-border"></i>

                <p>Here is where you can find all of Xcog's past and current public projects.</p>

                <p><a class="btn btn-primary" href="/robxcog">To The XCOG Showcase! &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>YarRadio! Xcog's All About the Waves</h2>
                <i class="fa fa-quote-left fa-3x pull-left fa-border"></i>

                <p>Yarr, there be some pirate style broadcasting causing waves here and as many as we can. We are here to bring to you the best of Portland's Underground and Unique Culture as well as our mate fleets from all around the world. Special performances straight from the Pirate Cave at XCOG,
                    YarRadio! Explicit! What did you expect, we're fucking pirates. and jedis. bitchez. </p>

                <p><a class="btn btn-primary" href="/xcogmusic">YarRadio!&raquo;</a></p>
            </div>
        </div>
</div>
<div class="sm2-bar-ui fixed full-width dark-text" style="font-size: 21px;">

 <div class="bd sm2-main-controls" style="background-color: rgba(172, 215, 229, 0.792157);">

  <div class="sm2-inline-texture"></div>
  <div class="sm2-inline-gradient"></div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-inline-status">

   <div class="sm2-playlist">
    <div class="sm2-playlist-target"><ul class="sm2-playlist-bd"><li><b>Rob Xcog</b> - Slighty f(NULL)<span class="label">Explicit</span></li></ul></div>
   </div>

   <div class="sm2-progress">
    <div class="sm2-row">
    <div class="sm2-inline-time">0:00</div>
     <div class="sm2-progress-bd">
      <div class="sm2-progress-track">
       <div class="sm2-progress-bar"></div>
       <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
      </div>
     </div>
     <div class="sm2-inline-duration">0:00</div>
    </div>
   </div>

  </div>

  <div class="sm2-inline-element sm2-button-element sm2-volume">
   <div class="sm2-button-bd">
    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
    <a href="#volume" class="sm2-inline-button sm2-volume-control" style="clip: rect(0px 56px 59px 12.98px);">volume</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
   </div>
  </div>

  <div class="sm2-inline-element sm2-button-element">
   <div class="sm2-button-bd">
    <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
   </div>
  </div>

  <!-- unimplemented -->
  <!--
  <div class="sm2-inline-element sm2-button-element disabled">
   <div class="sm2-button-bd">
    <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
   </div>
  </div>
  -->

  <div class="sm2-inline-element sm2-button-element sm2-menu">
   <div class="sm2-button-bd">
    <a href="#menu" class="sm2-inline-button menu">menu</a>
   </div>
  </div>

 </div>

 <div class="bd sm2-playlist-drawer sm2-element" style="height: 0px; background-color: rgba(172, 215, 229, 0.792157);">

  <div class="sm2-inline-texture">
   <div class="sm2-box-shadow"></div>
  </div>

  <!-- playlist content is mirrored here -->

  <div class="sm2-playlist-wrapper">
    <ul class="sm2-playlist-bd">
        <li class="selected"><a href="/assets/audio/icarus.mp3"><b>.icarus</b> - Rob Xcog<span class="label">Sic</span></a></li>
        <li class="selected"><a href="/assets/audio/45me(Spitshine).mp3"><b>45me(Spitshine)</b> - Rob Xcog<span class="label">Angelspit Remix</span></a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/SonReal%20-%20Let%20Me%20%28Prod%202oolman%29.mp3"><b>SonReal</b> - Let Me <span class="label">Explicit</span></a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/SonReal%20-%20People%20Asking.mp3"><b>SonReal</b> - People Asking <span class="label">Explicit</span></a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/SonReal%20-%20Already%20There%20Remix%20ft.%20Rich%20Kidd%2C%20Saukrates.mp3"><b>SonReal</b> - Already There Remix ft. Rich Kidd, Saukrates <span class="label">Explicit</span></a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/The%20Fugitives%20-%20Graffiti%20Sex.mp3"><b>The Fugitives</b> - Graffiti Sex</a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/Adrian%20Glynn%20-%20Seven%20Or%20Eight%20Days.mp3"><b>Adrian Glynn</b> - Seven Or Eight Days</a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/SonReal%20-%20I%20Tried.mp3"><b>SonReal</b> - I Tried</a></li>
     <li><a href="http://freshly-ground.com/data/audio/mpc/20060826%20-%20Armstrong.mp3">Armstrong Beat</a></li>
     <li><a href="http://freshly-ground.com/data/audio/mpc/20090119%20-%20Untitled%20Groove.mp3">Untitled Groove</a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/birds-in-kauai-128kbps-aac-lc.mp4">Birds In Kaua'i (AAC)</a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/20130320%20-%20Po%27ipu%20Beach%20Waves.ogg">Po'ipu Beach Waves (OGG)</a></li>
     <li><a href="http://freshly-ground.com/data/audio/sm2/bottle-pop.wav">A corked beer bottle (WAV)</a></li>
     <li><a href="../../demo/_mp3/rain.mp3">Rain</a></li>
    </ul>
  </div>

 </div>

</div>




           