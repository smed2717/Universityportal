<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FiliereModel */

$this->title = 'Create Filiere Model';
$this->params['breadcrumbs'][] = ['label' => 'Filiere Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filiere-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
