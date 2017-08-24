<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FiliereSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filiere Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filiere-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Filiere Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_filiere',
            'libelle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
