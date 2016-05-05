<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */

$this->title = 'Create Etudiant';
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
