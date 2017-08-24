<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\EtudiantModel */

$this->title = 'Create Etudiant Model';
$this->params['breadcrumbs'][] = ['label' => 'Etudiant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
