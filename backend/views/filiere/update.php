<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FiliereModel */

$this->title = 'Update Filiere Model: ' . $model->id_filiere;
$this->params['breadcrumbs'][] = ['label' => 'Filiere Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_filiere, 'url' => ['view', 'id' => $model->id_filiere]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filiere-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
