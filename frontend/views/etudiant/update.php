<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\EtudiantModel */

$this->title = 'Update Etudiant Model: ' . $model->cin;
$this->params['breadcrumbs'][] = ['label' => 'Etudiant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cin, 'url' => ['view', 'id' => $model->cin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etudiant-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
