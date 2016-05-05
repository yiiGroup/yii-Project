<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EtudiantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etudiant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cin') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'adresse') ?>
=======
    <?= $form->field($model, 'adress') ?>
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    <?= $form->field($model, 'num_tel') ?>

    <?php // echo $form->field($model, 'ni') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
