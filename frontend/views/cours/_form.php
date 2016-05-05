<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cours */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cours-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ens')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_g')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
