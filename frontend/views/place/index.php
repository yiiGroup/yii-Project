<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PlaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Place', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add Current Location', ['create_geo'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'name',
            [
                'attribute' => 'place_type',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<div>'.$model->getPlaceType($model->place_type).'</div>';
                },
            ],
           // 'status',
            //'google_place_id',
            // 'created_by',
            // 'created_at',
            // 'updated_at',
            // 'slug',
            // 'website',
            // 'full_address',
            // 'vicinity',
            // 'notes:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'    => '{view}',
            ],

        ],
    ]); ?>
</div>
