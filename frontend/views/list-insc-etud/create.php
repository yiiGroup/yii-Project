<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ListInscEtud */

$this->title = 'Create List Insc Etud';
$this->params['breadcrumbs'][] = ['label' => 'List Insc Etuds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-insc-etud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
