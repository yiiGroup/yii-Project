<?php
namespace frontend\controllers;

<<<<<<< HEAD
use Yii;
use common\models\LoginForm;
use frontend\models\Accounts;
=======
use frontend\models\EventSearch;
use frontend\models\NewsSearch;
use frontend\models\User;
use frontend\models\UserSearch;
use Yii;
use common\models\LoginForm;
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
<<<<<<< HEAD
=======
use frontend\models\Enseignant;
use yii\web\NotFoundHttpException;
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

<<<<<<< HEAD
=======
    protected function findModel1($id)
    {
        if (($model = Ens_mat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    /**
     * Displays homepage.
     *
     * @return mixed
     */
<<<<<<< HEAD
    public function actionIndex()
    {
        return $this->render('index');
=======




    public function actionIndex()
    {
       $e=new EventSearch();
       $dataProvider= $e->searchPerMonth();
$n=new NewsSearch();
        $dp=$n->searchAll();

return $this->render('index', [
    'dataProvider' => $dataProvider,
    'dp' => $dp
]);

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


<<<<<<< HEAD
=======
    protected function findModel($id)
    {
        if (($model = Enseignant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }










    /**
     * Signs user up.
     *
     * @return mixed
     */






    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

<<<<<<< HEAD
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    public function actionSignupp()
    {
        $model = new Accounts();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                echo "OK";
                return;
            }
        }

        return $this->render('Signupp', [
            'model' => $model,
        ]);
    }




    public function actionSignupp2()
    {
        $model = new Accounts();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
               echo "what the fuck " ;
                return;
            }
        }

        return $this->render('FormSignup', [
            'model' => $model,
        ]);
    }

=======
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

}
