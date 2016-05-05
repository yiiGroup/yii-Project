<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EnsmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ens Mats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ens-mat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ens Mat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_mat',
            'id_ens',
            'id_g',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
