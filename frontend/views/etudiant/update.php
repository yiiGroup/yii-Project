<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */

$this->title = 'Update Etudiant: ' . ' ' . $model->ni;
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ni, 'url' => ['view', 'id' => $model->ni]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etudiant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
