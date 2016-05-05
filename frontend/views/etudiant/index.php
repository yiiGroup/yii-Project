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
<<<<<<< HEAD
            'adresse',
=======
            'adress',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'num_tel',
            // 'ni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
