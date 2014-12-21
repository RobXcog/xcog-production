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
 * 
 * 
 * 
 * Dev Notes
 * 
 * $( "#menuToggle" ).click(function() 
 {
 
 if ($( "#xcogMenuDiv" ).hasClass( "vizz" )) {
 $("#xcogMenuDiv").removeClass('vizz');
 $("div[data-xcog|='contentCol']").animate({right:'100px'});
 }else{
 $("#xcogMenuDiv").addClass('vizz');
 $("div[data-xcog|='contentCol']").animate({left:'100px'});
 }
 
 $( "div[data-xcog|='menuCol']" ).toggle();
 $( "div[data-xcog|='contentCol']" ).toggleCSS();
 
 
 
 });
 
 * 
 */
//var click = $.Event("click");

$(document).ready(function() {
    $("#menuToggle").click(function() {

        if ($("#xcogMenuDiv").hasClass("menuXPand")) {
            $("#xcogMenuDiv").removeClass('menuXPand');
            $("#xcogMenuDiv").addClass('menuSquish');
         //$("div[data-xcog|='contentCol']").removeClass('contentSquish');
         // $("div[data-xcog|='contentCol']").addClass('contentXPand');
          $("div[data-xcog|='headerRow']").removeClass('headSquish');
          $("div[data-xcog|='headerRow']").addClass('headXPand');
          $("#mainCanvas").removeClass('contentSquish');
          $("#mainCanvas").addClass('contentXPand');
          
        } else { 
            $("#xcogMenuDiv").removeClass('menuSquish');
            $("#xcogMenuDiv").addClass('menuXPand');
         // $("div[data-xcog|='contentCol']").removeClass('contentXPand');
         // $("div[data-xcog|='contentCol']").addClass('contentSquish');
          $("div[data-xcog|='headerRow']").removeClass('headXPand');
          $("div[data-xcog|='headerRow']").addClass('headSquish');
          $("#container").removeClass('contentXPand');
          $("#container").addClass('contentSquish');
        }
    });
});

