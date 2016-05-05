<?php

use dosamigos\google\maps\Map;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\Marker;
use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model backend\models\Event */
/* @var $dataProvider yii\data\ArrayDataProvider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'club_id',
            'event_type:ntext',
            'description:ntext',
            'date',
            'event_place',
           // 'created_at',
            //'updated_at',
        ],
    ]) ?>
    <h1>Place</h1>



            <?= \yii\grid\GridView::widget([
                'dataProvider' => $dataProvider,

                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                   // 'id',
                    'name',
                    'place_type',
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
                        'buttons' => [
                            'view' => function ($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                    'title' => Yii::t('app', 'view'),
                                ]);
                            }
                        ],
                        'urlCreator' => function ($action, $model, $key, $index) {
                            if ($action === 'view') {
                                $url = 'backend/web/index.php?r=place%2Fview&id=' . $model->id;
                                return $url;
                            }
                        }
                    ],
                ],
            ]); ?>




</div>