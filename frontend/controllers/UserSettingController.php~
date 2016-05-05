<?php

namespace frontend\controllers;

use Yii;
use app\models\UserSetting;
use frontend\models\UserSettingSearch;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserSettingController implements the CRUD actions for UserSetting model.
 */
class UserSettingController extends Controller
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
     * Default path - redirect to update
     * @return mixed
     */
    public function actionIndex()
    {
        // returns record id not user_id
        $id = UserSetting::initialize(Yii::$app->user->getId());
        return $this->redirect(['update', 'id' => $id]);
    }
    /**
     * Displays a single UserSetting model.
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
     * Creates a new UserSetting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserSetting();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserSetting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = new UserSetting;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            // the path to save file, you can set an uploadPath
            // in Yii::$app->params (as used in example below)


            $image = UploadedFile::getInstance($model, 'image');
            if (!is_null($image)) {
                // path to existing image for post-delete
                $image_delete = $model->avatar;
                // save new image
                // store the source file name
                $model->filename = $image->name;
                $bits = explode(".", $image->name);
                $ext = end($bits);
                // generate a unique file name to prevent duplicate filenames
                $model->avatar = Yii::$app->security->generateRandomString().".{$ext}";
                $model->user_id = Yii::$app->user->getId();
                $path = Yii::$app->basePath . '/web/uploads/avatars/'. $model->avatar;
                $image->saveAs($path);
                Image::thumbnail(Yii::$app->basePath . '/web/uploads/avatars/'. $model->avatar, 120, 120)
                    ->save(Yii::$app->basePath . '/web/uploads/avatars/'. 'sqr_'.$model->avatar, ['quality' => 50]);
                Image::thumbnail(Yii::$app->basePath . '/web/uploads/avatars/' .$model->avatar, 30, 30)
                    ->save(Yii::$app->basePath . '/web/uploads/avatars/'.'sm_'.$model->avatar, ['quality' => 50]);
                $model->deleteImage(Yii::$app->basePath . '/web/uploads/avatars/',$image_delete);
                if($model->save()){


                } else {
                    // error in saving model
                    // pass thru to form
                }
            } else {
                // simple save
                $model->save();
                // pass thru to form
            }
        }
       /* if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            $image->saveAs(Yii::$app->basePath .'/web/uploads/avatars'.$model->avatar);
            $model->filename=Yii::$app->basePath .'/web/uploads/avatars'.$model->avatar;
            $model->save();

        }*/
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserSetting model.
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
     * Finds the UserSetting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserSetting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserSetting::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
