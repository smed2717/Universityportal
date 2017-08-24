<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EtudiantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etudiant Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etudiant-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Etudiant Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'nom',
            'prenom',
            'cin',
            'date_naissance',
            // 'telephone',
            // 'email:email',
            // 'num_inscri',
            // 'adresse',
            // 'id_filiere',
            // 'id_groupe',
            // 'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
