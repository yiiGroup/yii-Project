<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Enseignant;
use frontend\models\EnseignantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnseignantController implements the CRUD actions for Enseignant model.
 */
class EnseignantController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Enseignant models.
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
<<<<<<< HEAD
    public function actionEtudiant()
    {
        $searchModel = new EnseignantSearch();
        $dataProvider = $searchModel->search2(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    /**
     * Displays a single Enseignant model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

<<<<<<< HEAD
=======



>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    /**
     * Creates a new Enseignant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Enseignant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->cin]);
=======
            return $this->redirect(['view', 'id' => $model->matricule]);
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Enseignant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->cin]);
=======
            return $this->redirect(['profil', 'id' => $model->matricule]);
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Enseignant model.
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
     * Finds the Enseignant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Enseignant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Enseignant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
<<<<<<< HEAD
=======



>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
}
