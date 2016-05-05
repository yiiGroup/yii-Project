<?php

/**
 * Created by PhpStorm.
 * User: ines
 * Date: 18/04/16
 * Time: 12:42 م
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Place */

$this->title = 'Create Place By Geolocation';
$this->params['breadcrumbs'][] = ['label' => 'Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formGeolocate', [
        'model' => $model,
    ]) ?>

</div>