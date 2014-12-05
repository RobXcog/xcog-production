<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
       Sometimes it just wont work. You can keep trying or do something new. YOU HAVE THE POWER!! The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please <a href="mailto:customerservice@xcogstudios.com">contact us</a> if you think this is a server error. Thank you.
       
    </p>

</div>
