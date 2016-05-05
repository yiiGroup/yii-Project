<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cours */

$this->title = $searchModel->id;
$this->params['breadcrumbs'][] = ['label' => 'Cours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cours-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $searchModel->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $searchModel,
        'attributes' => [
            'texte',
            'id_g',
            'id_ens',

        ],
    ]) ?>

</div>
