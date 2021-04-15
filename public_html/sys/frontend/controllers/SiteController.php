<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Listserver;
use common\models\Advertising;
use common\models\Contact;
use common\models\Bannersmall;
use frontend\models\AddForm;
use frontend\models\Mesform;
use common\models\Question;
use common\models\Vopros;
use common\models\ChroniclesPages;
/**
 * Site controller
 */
class SiteController extends Controller
{
    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }

    /**
     * {@inheritdoc}
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $name = 'index';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();
        $vopros = Vopros::find()->all();

        $model = new Question();

        if (Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->save();
                if($model->save()){
                    Yii::$app->response->cookies->add(new \yii\web\Cookie([
                        'name' => 'ansver',
                        'value' => 'ansver_have',
                        'expire' => time() + 345600,                     
                    ]));               
                }
                
            }
        }

        return $this->render('index', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
            'vopros' => $vopros,
            'model' => $model,
        ]);
    }


    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionContacts()
    {
        $contact = Contact::find()->all();
        $mesform = new MesForm();

        if ($mesform->load(Yii::$app->request->post())) {
            if ($mesform->validate()) {
                Yii::$app->mailer->compose('mailtext', ['mesform' => $mesform])
                    ->setFrom('frelfrel123@yandex.ru')
                    ->setTo(['adm@l2wt.ru', 'l2wt.ru@yahoo.com'])
                    ->setSubject('Обращение через контакт')
                    ->send();

                return $this->redirect('/advertising');
            } else if ($mesform->hasErrors()) {
                Yii::$app->session->setFlash('error', 'Вы бот и идите на хуй!');
            } else {
                Yii::$app->session->setFlash('success', 'Вы ввели данные не корректно!');
            }

            return $this->refresh();
        }

        return $this->render('contacts', [
            'contact' => $contact,
            'mesform' => $mesform,
            ]);
    }

    public function actionAdvertising()
    {
        $contact = Contact::find()->all();
        $advertising = Advertising::find()->all();
        $server_list_earli = Listserver::find()->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();

        return $this->render('advertising', [
            'adv' => $advertising,
            'contact' => $contact,
            'list_earlier' => $server_list_earli,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
        ]);

    }

    public function actionAdd()
    {
        $this->layout = '@app/views/layouts/add.php';
        
        $addform = new AddForm();
 
        if ($addform->load(Yii::$app->request->post())) {
            
            if ($addform->validate()) {
                
               Yii::$app->mailer->compose('order', ['addform' => $addform])
                    ->setFrom('frelfrel123@yandex.ru')
                    ->setTo(['adm@l2wt.ru', 'l2wt.ru@yahoo.com'])
                    ->setSubject('Регистрация сервера')
                    ->send();
                    
                return $this->redirect('/advertising');
            } else if ($addform->hasErrors()) {
                Yii::$app->session->setFlash('error', 'Ресурс забанен!');
            } else {
                
                Yii::$app->session->setFlash('success', 'Вы ввели данные не корректно!');
                
            }

            return $this->refresh();
        }

        return $this->render('add', ['addform' => $addform]);
    }
}
