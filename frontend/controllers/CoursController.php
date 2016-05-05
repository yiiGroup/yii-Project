<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Cours;
use frontend\models\CoursSearch;
<<<<<<< HEAD
use frontend\models\CoursEtudiant;
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CoursController implements the CRUD actions for Cours model.
 */
class CoursController extends Controller
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
     * Lists all Cours models.
     * @return mixed
     */
<<<<<<< HEAD
    //coursEtudiant
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    public function actionIndex()
    {
        $searchModel = new CoursSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
<<<<<<< HEAD
    public function actionEtudiant()
    {
        $searchModel = new CoursEtudiant();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('coursEtudiant', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    /**
     * Displays a single Cours model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cours model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cours();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cours model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cours model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cours model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cours the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cours::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
=======
    public function actionEspaceens()
    {
        $searchModel = new CoursSearch();
        $dataProvider = $searchModel->searchByTeacher(Yii::$app->user->identity->matricule);

        return $this->render('espaceens', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

           }

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

}
