<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */

$this->title = 'Update Etudiant: ' . ' ' . $model->cin;
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cin, 'url' => ['view', 'id' => $model->cin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etudiant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
