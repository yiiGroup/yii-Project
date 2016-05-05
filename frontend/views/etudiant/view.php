<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */

<<<<<<< HEAD
$this->title = $model->cin;
=======
$this->title = $model->ni;
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a('Update', ['update', 'id' => $model->cin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cin], [
=======
        <?= Html::a('Update', ['update', 'id' => $model->ni], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ni], [
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
            'cin',
            'firstname',
            'lastname',
<<<<<<< HEAD
            'adresse',
=======
            'adress',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'num_tel',
            'ni',
        ],
    ]) ?>

</div>
