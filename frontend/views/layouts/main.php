<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
<<<<<<< HEAD
        'brandLabel' => 'My Company',
=======
        'brandLabel' => 'Issatso',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
<<<<<<< HEAD
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];

    } else {
        $menuItems[] = ['label' => 'Espace Etudiant', 'url' => ['/etudiant/amis']];
        $menuItems[] = ['label' => 'Mes Cours', 'url' => ['/cours/etudiant']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
=======
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],

        ];


    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    }

    else {

if(Yii::$app->user->identity->role=="Teacher") {
    $menuItems[] = ['label' => 'Profil', 'url' => ['/user/profiluser', 'id' => Yii::$app->user->identity->matricule]];

}

        else{
            $menuItems[] = ['label' => 'Profil', 'url' => ['/user/profiluser', 'id' => Yii::$app->user->identity->matricule]];
            $menuItems[] = ['label' => 'Espace Etudiant', 'url' => ['/etudiant/amis']];
            $menuItems[] = ['label' => 'Espace Club', 'url' => ['/club/index']];

        }

        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' .Yii::$app->user->identity->username . ')',
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
<<<<<<< HEAD
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
=======
        <p class="pull-left">&copy; Issatso <?= date('Y') ?></p>
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
