<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GroupeModel */

$this->title = 'Create Groupe Model';
$this->params['breadcrumbs'][] = ['label' => 'Groupe Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupe-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
