<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ListInscEtudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Insc Etuds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="list-insc-etud-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create List Insc Etud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_etud',
            'id_groupe',
            'id_annee',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
