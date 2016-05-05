<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EtudiantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etudiants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Etudiant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cin',
            'firstname',
            'lastname',
            'adresse',
            'num_tel',
            // 'ni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
