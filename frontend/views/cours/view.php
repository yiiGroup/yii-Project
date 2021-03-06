<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cours */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cours-view">

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
            'texte',
<<<<<<< HEAD
=======
            'id_att',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            'id_ens',
            'id_g',
        ],
    ]) ?>

</div>
