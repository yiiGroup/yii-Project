<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\Marker;

/* @var $this yii\web\View */
/* @var $model app\models\Event */


$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            //'id',
            //'club_id',
            'event_type:ntext',
            'description:ntext',
            'date',
           // 'event_place',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

    <?php
    if ($gps!==false) {
        $coord = new LatLng(['lat' => $gps->lat, 'lng' => $gps->lng]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 14,
            'width'=>300,
            'height'=>300,
        ]);
        $marker = new Marker([
            'position' => $coord,
            'title' => $model->name,
        ]);
        // Add marker to the map
        $map->addOverlay($marker);
        echo $map->display();
    } else {
        echo 'No location coordinates for this place could be found.';
    }
    ?>

</div>
