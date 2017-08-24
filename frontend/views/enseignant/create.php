<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\EnseignantModel */

$this->title = 'Create Enseignant Model';
$this->params['breadcrumbs'][] = ['label' => 'Enseignant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enseignant-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
