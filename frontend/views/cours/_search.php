<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CoursSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cours-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'texte') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'id_att') ?>

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    <?= $form->field($model, 'id_ens') ?>

    <?= $form->field($model, 'id_g') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
