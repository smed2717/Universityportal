<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GroupeModel */

$this->title = 'Update Groupe Model: ' . $model->id_groupe;
$this->params['breadcrumbs'][] = ['label' => 'Groupe Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_groupe, 'url' => ['view', 'id' => $model->id_groupe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="groupe-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
