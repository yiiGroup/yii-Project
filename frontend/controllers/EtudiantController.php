<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Etudiant;
use frontend\models\EtudiantSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\EtudiantAmis;
use frontend\models\CoursEtudiant;
use frontend\models\EnseignantSearch;
/**
 * EtudiantController implements the CRUD actions for Etudiant model.
 */
class EtudiantController extends Controller
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
     * Lists all Etudiant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EtudiantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAmis()
    {
        $searchModel = new EtudiantAmis();
        $dataProvider = $searchModel->search( Yii::$app->user->identity->matricule);
        $searchModelCours = new CoursEtudiant();
        $dataProviderCours = $searchModelCours->search(Yii::$app->request->queryParams);
        $searchModelEns = new EnseignantSearch();
        $dataProviderEns = $searchModelEns->search2(Yii::$app->request->queryParams);

        return $this->render('amis', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelCours' => $searchModelCours,
            'dataProviderCours' => $dataProviderCours,
            'searchModelEns' => $searchModelEns,
            'dataProviderEns' => $dataProviderEns,
        ]);
    }
    /**
     * Displays a single Etudiant model.
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
     * Creates a new Etudiant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Etudiant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ni]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Etudiant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ni]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Etudiant model.
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
     * Finds the Etudiant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Etudiant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Etudiant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
