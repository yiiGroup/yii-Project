<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Cours */

$this->title = 'Create Cours';
$this->params['breadcrumbs'][] = ['label' => 'Cours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
