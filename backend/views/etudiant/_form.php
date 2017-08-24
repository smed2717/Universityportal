<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EtudiantModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etudiant-model-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prenom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cin')->textInput() ?>

    <?= $form->field($model, 'date_naissance')->textInput() ?>

    <?= $form->field($model, 'telephone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_inscri')->textInput() ?>

    <?= $form->field($model, 'adresse')->textInput(['maxlength' => true]) ?>
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    <?= $form->field($model, 'id_filiere')->dropDownList(
        \yii\helpers\ArrayHelper::map(\backend\models\FiliereModel::find()->all(),'id_filiere',function($model,$defaultvalue)
        {
            return $model['libelle'];
        }),
        ['prompt' => 'Filiere']
    )->label("Filiere")?>
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
    <?= $form->field($model, 'id_groupe')->dropDownList(
        \yii\helpers\ArrayHelper::map(\backend\models\GroupeModel::find()->all(),'id_groupe',function($model,$defaultvalue)
        {
            return $model['libelle'];
        }),
        ['prompt' => 'Groupe']
    )->label("Groupe")?>
    <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->



    <?= $form->field($model, 'file')->fileInput() ?>
    <?php
    if ($model->logo) {
        echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->logo.'" width="90px">&nbsp;&nbsp;&nbsp;';
        echo Html::a('Delete Logo', ['deleteimg', 'id'=>$model->username, 'field'=> 'logo'], ['class'=>'btn btn-danger']).'<p>';
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
