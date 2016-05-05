<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Groupe */

$this->title = 'Create Groupe';
$this->params['breadcrumbs'][] = ['label' => 'Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
