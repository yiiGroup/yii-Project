<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CoursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cours-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cours', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'texte',
<<<<<<< HEAD
=======
            'id_att',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'id_ens',
            'id_g',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
