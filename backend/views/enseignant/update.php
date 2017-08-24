<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EnseignantModel */

$this->title = 'Update Enseignant Model: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Enseignant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseignant-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
