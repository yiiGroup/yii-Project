<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etudiant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'adresse')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    <?= $form->field($model, 'num_tel')->textInput() ?>

    <?= $form->field($model, 'ni')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
