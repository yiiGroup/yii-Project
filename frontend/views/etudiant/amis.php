<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EtudiantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Espace Brinis';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <h1> Les Cours Disponibles</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProviderCours,
        'filterModel' => $searchModelCours,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'texte',
            //'id_ens',
            //'id_g',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    <h1>Vos amis</h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'cin',
            'firstname',
            'lastname',
            'adresse',
            'num_tel',
            // 'ni',

         //   ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <h1> Vos Enseignants</h1>
    <?= GridView::widget([
        'dataProvider' => $dataProviderEns,
        //'filterModel' => $searchModelEns,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'firstname',
            'lastname',
            // 'adress',
            // 'num_tel',
            // 'cin',
            // 'matricule',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
