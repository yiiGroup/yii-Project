<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Etudiant */

<<<<<<< HEAD
$this->title = 'Update Etudiant: ' . ' ' . $model->cin;
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cin, 'url' => ['view', 'id' => $model->cin]];
=======
$this->title = 'Update Etudiant: ' . ' ' . $model->ni;
$this->params['breadcrumbs'][] = ['label' => 'Etudiants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ni, 'url' => ['view', 'id' => $model->ni]];
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etudiant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
