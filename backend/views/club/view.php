<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Club */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clubs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-view">

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
            'name:ntext',
            'description:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>
    <h1>Events</h1>
    <p>
        <?= Html::a('Add Event', ['event/createEv'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=  \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [

            'name',
            //'id',
            //'club_id',
            'event_type:ntext',
            'description:ntext',
            'date',
            //'event_place',
            // 'created_at',
            // 'updated_at',

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
                        $url = 'frontend/web/index.php?r=event%2Fview&id=' . $model->id;
                        return $url;
                    }
                }
            ],
        ],
    ]) ?>

</div>
