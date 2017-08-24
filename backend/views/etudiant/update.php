<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EtudiantModel */

$this->title = 'Update Etudiant Model: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Etudiant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etudiant-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
