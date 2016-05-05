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

<<<<<<< HEAD
    <?= $form->field($model, 'id_ens')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'id_att')->textInput() ?>

    <?= $form->field($model, 'id_ens')->textInput() ?>
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    <?= $form->field($model, 'id_g')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
