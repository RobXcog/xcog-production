<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="fa-border pull-left SIC"><?= Html::encode($this->title) ?></h1>

    <p>
        The Xcog Network is constantly evolving to achieve it's goals and we are open to all manners of contribution. As a community driven organization, we run on  <a href="/donations"> donations </a> and every cent helps but we hope to provide services always with out it "needing" to cost a cent.
    <br>
    If you would like to work with us or hire our services or specialties please contact us at <a href="mailto:contact@xcogstudios.com"><i class="fa fa-paper-plane-o fa-lg"></i> | Contact@xcogstudios.com  </a>. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
