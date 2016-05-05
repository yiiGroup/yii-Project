<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'club_id')
        ->dropDownList(
            \yii\helpers\ArrayHelper::map(\backend\models\Club::find()->all(),'id','name'),
            ['prompt'=>'Choose your club?']
        )->label('Club') ?>

    <?= $form->field($model, 'event_type')
        ->dropDownList(
            $model->getEventTypeOptions(),
            ['prompt'=>'What type of event is this?']
        )->label('Type of Event') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model,'date')->widget(DatePicker::className(),['dateFormat' => 'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'event_place')
        ->dropDownList(
            \yii\helpers\ArrayHelper::map(\backend\models\Place::find()->all(),'id','name'),
            ['prompt'=>'Choose your event place?']
        )->label('Place') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
