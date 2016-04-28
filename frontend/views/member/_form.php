<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_id')->textInput(['readonly' => true, 'value' => Yii::$app->basePath . '/web/uploads/avatars/' ] ) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'role')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_join_club')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
