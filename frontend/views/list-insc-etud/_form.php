<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ListInscEtud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="list-insc-etud-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id_etud')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'id_etud')->textInput() ?>
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    <?= $form->field($model, 'id_groupe')->textInput() ?>

    <?= $form->field($model, 'id_annee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
