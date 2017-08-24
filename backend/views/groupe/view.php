<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\GroupeModel */

$this->title = $model->id_groupe;
$this->params['breadcrumbs'][] = ['label' => 'Groupe Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupe-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_groupe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_groupe], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_groupe',
            'libelle',
        ],
    ]) ?>

</div>
