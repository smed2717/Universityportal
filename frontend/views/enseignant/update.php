<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\EnseignantModel */

$this->title = 'Update Enseignant Model: ' . $model->cin;
$this->params['breadcrumbs'][] = ['label' => 'Enseignant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cin, 'url' => ['view', 'id' => $model->cin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseignant-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
