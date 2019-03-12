<?php


namespace app\controllers;


use app\models\LoginForm;
use app\models\SignupForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\SendEmailForm;
use app\models\ResetPasswordForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

class AuthController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['cabinet', 'courses', 'info-user', 'payments', 'logout', 'send-email', 'reset-password'],
                'rules' => [
                    [
                        'actions' => ['cabinet', 'courses', 'info-user', 'payments', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['cabinet', 'courses', 'info-user', 'payments'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['auth'],
                        'actions' => ['send-email', 'reset-password']
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
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['cabinet']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['login']);
    }



    public function actionSignup()
    {
        $model = new SignupForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->signup())
            {
                return $this->redirect('/auth/login');
            }
        }

        return $this->render('signup', ['model' => $model]);
    }



    public function actionCabinet()
    {
        return $this->render('cabinet');
    }

    public function actionCourses()
    {
        return $this->render('courses');
    }

    public function actionPayments()
    {
        return $this->render('payments');
    }

    public function actionInfoUser()
    {
        return $this->render('info-user');
    }


    public function actionSendEmail()
    {
        $model = new SendEmailForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                if($model->sendEmail()):
                    Yii::$app->getSession()->setFlash('warning', 'Xabar yuborildi, Emailni tekshiring');
                    return $this->goHome();
                else:
                    Yii::$app->getSession()->setFlash('error', 'Parolni tiklab bo`lmadi.');
                endif;
            }
        }

        return $this->render('sendEmail', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($key)
    {
        try {
            $model = new ResetPasswordForm($key);
        }
        catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->resetPassword()) {
                Yii::$app->getSession()->setFlash('warning', 'Parol o`zgartirildi.');
                return $this->redirect(['/auth/login']);
            }
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}