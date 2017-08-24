<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\EtudiantModel */

$this->title = $model->cin;
$this->params['breadcrumbs'][] = ['label' => 'Etudiant Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cin], [
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
            'cin',
            'nom',
            'prenom',
            'date_naissance',
            'telephone',
            'email:email',
            'num_inscri',
            'adresse',
            'id_filiere',
            'id_groupe',
            'logo',
        ],
    ]) ?>

</div>
