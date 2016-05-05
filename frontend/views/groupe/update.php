<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Groupe */

$this->title = 'Update Groupe: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="groupe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
