<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
/* @var $this yii\web\View */
/* @var $model app\models\Countries */
/* @var $form yii\widgets\ActiveForm */

 
$this->registerJs(
   '$("document").ready(function(){ 
        $("#new-xcogScrollSpyMenu").on("pjax:end", function() {
            $.pjax.reload({container:"#xcogScrollSpyMenu"});
        });
    });'
);
