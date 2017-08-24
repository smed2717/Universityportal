<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EnseignantModel */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Enseignant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enseignant-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->username], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->username], [
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
            'username',
            'cin',
            'nom',
            'prenom',
            'email:email',
            'adresse',
            'grade',
            'logo',
        ],
    ]) ?>

</div>
