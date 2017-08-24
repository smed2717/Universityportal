<?php

/* @var $this \yii\web\View */
/* @var $content string */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--<?= Yii::$app->language ?>-->
<html lang="fr">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--navigation-->

<!---->
<div class="container" >
    <div class="col-md-3" id="99">
        <h3><a href="index.php?r=site/profile"><img src="profile.png" class="profile-image img-circle" height="30" width="30">

                    </a></h3>
        <h4><a href="index.php?r=site/calendario"><i class="glyphicon glyphicon-calendar"></i> Calendario Lezioni</a></h4>
        <h4><a href="index.php?r=site/libretto"><i class="glyphicon glyphicon-list-alt"></i> Libretto Universitario</a></h4>
        <h4><a href="index.php?r=site/navette"><i class="glyphicon glyphicon-time"></i> Orari Navette</a></h4>
        <h4><a href="index.php?r=site/group"><i class="glyphicon glyphicon-th-large"></i> {{data.Group}}</a></h4>

        <h5><a href="#"><i class="glyphicon glyphicon-plus"></i> Crea Gruppi</a></h5>
       <!-- <p><a href="#">{{Group_1}}</a></p>
        <p><a href="#">{{Group_2}}</a></p>-->
    </div>

<!--<div class="wrap">
    <?php/*
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
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
    */?>-->


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
        <p class="text-muted">Copyright &copy;  ISSATSO_2016</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
