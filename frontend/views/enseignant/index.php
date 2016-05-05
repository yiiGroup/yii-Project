<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EnseignantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enseignants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enseignant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Enseignant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'firstname',
            'lastname',
            'adress',
            'num_tel',
            'cin',
            // 'matricule',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
