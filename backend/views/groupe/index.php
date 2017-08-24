<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GroupeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Groupe Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupe-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Groupe Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_groupe',
            'libelle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
