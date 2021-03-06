<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Matiere */

$this->title = 'Update Matiere: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Matieres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matiere-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
