<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MatiereSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matiere-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nom') ?>

    <?= $form->field($model, 'designation') ?>

    <?= $form->field($model, 'coef') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'id_s') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
