<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Enseignant */

$this->title = 'Update Enseignant: ' . ' ' . $model->matricule;
$this->params['breadcrumbs'][] = ['label' => 'Enseignants', 'url' => ['profil']];
//$this->params['breadcrumbs'][] = ['label' => $model->matricule, 'url' => ['view', 'id' => $model->matricule]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseignant-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
