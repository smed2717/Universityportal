<?php

namespace backend\controllers;

use Yii;
use backend\models\EnseignantModel;
use backend\models\EnseignantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * EnseignantController implements the CRUD actions for EnseignantModel model.
 */
class EnseignantController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EnseignantModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnseignantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EnseignantModel model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EnseignantModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EnseignantModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->file = UploadedFile::getInstance($model, 'file');
            $save_file = '';
            if($model->file){
                $imagepath = 'uploads/logo/'; // Create folder under web/uploads/logo
               // $imagepath =Yii::getAlias('@frontend').'/web/upload/';

                $model->logo = $imagepath .rand(10,100).'-'.$model->file->name;
                $save_file = 1;
            }

            if ($model->save()) {
                if($save_file){
                    $model->file->saveAs($model->logo);
                }
                return $this->redirect(['view', 'id' => $model->username]);
            }
        }else {
            return $this->render('create', [
                'model' => $model,
            ]);

        }
    }

    /**
     * Updates an existing EnseignantModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->file = UploadedFile::getInstance($model, 'file');
            $save_file = '';
            if($model->file){
                $imagepath = 'uploads/logo/';
                //$imagepath =Yii::getAlias('@frontend').'/web/upload/';
                $model->logo = $imagepath .rand(10,100).'-'.$model->file->name;
                $save_file = 1;
            }     if ($model->save()) {
                if($save_file){
                    $model->file->saveAs($model->logo);
                }
                return $this->redirect(['view', 'id' => $model->username]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EnseignantModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EnseignantModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EnseignantModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EnseignantModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
