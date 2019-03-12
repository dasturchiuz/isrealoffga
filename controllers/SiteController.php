<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['freeview', 'logout'],
                'rules' => [
                    /**
                     * KERAKLI SANADA KO`RINADIGAN SAHIFA MASALAN: 27-FEVRALDA.
                     * 'only' ga qo`shish kerak buni: >>> 'happy-halloween',
                     */
//                    [
//                        'actions' => ['happy-halloween'],
//                        'allow' => true,
//                        'matchCallback' => function ($rule, $action) {
//                            return date('d-m') === '27-02';
//                        },
//                    ],
                    /**
                     * END
                     */
                    [
                        'actions' => ['freeview', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['freeview'],
                        'allow' => false,
                        'roles' => ['?'],
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
     * {@inheritdoc}
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

    /**
     * KERAKLI SANADA KO`RINADIGAN SAHIFA ACTIONI
     * VIEW GA 'happy-halloween' FAYL YARATISH KERAK!!!
     */
//    public function actionHappyHalloween()
//    {
//        return $this->render('happy-halloween');
//    }
    /**
     * END
     */

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFreeview($id)
    {
        $article = Article::findOne($id);

        $article->viewedCounter();

        return $this->render('freeview', [
            'article' => $article
        ]);
    }

    public function actionChess()
    {
        return $this->render('chess');
    }

    public function actionMathematic()
    {
        return $this->render('mathematic');
    }


    public function actionMentalArithmetic()
    {
        return $this->render('mental-arithmetic');
    }


    public function actionGeneralEnglish()
    {
        return $this->render('general-english');
    }


    public function actionIelts()
    {
        return $this->render('ielts');
    }


    public function actionOfflineVideos()
    {
        return $this->render('offline-videos');
    }


    public function actionFreeMaterials()
    {
        $query = Article::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 12]);
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $categs = Category::find();
        $count = $categs->count();
        $categories = $categs->all();

        return $this->render('free-materials', [
            'articles' => $articles,
            'pagination' => $pagination,
            'categories' => $categories
        ]);
    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


}
