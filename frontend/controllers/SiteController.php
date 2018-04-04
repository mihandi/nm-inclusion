<?php
namespace frontend\controllers;

use common\models\Article;
use common\models\ImageUpload;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\UploadedFile;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
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

    public function actionIndex()
    {

        
        $data = Article::getRecent(9);

        return $this->render('index',[
            'recent' => $data]);

    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();

        if(yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->renderAjax('modal_template',['model' => $model]);
            }else{
                $model->password = '';
                return $this->renderAjax('login',['model' => $model]);
            }
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if(yii::$app->request->isAjax) {
            if($model->load(Yii::$app->request->post())){
                if($model->validate() && $user = $model->signup())
                {
                    Yii::$app->getUser()->login($user);
                    return $this->renderAjax('modal_template',['model' => $model]);
                } else{
                    $model->password = '';
                    return $this->renderAjax('signup',['model' => $model]);
                }
            }
            return $this->renderAjax('signup',['model' => $model]);
        }
    }

   public function actionPersonal()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $user = User::findOne(yii::$app->user->id);

        if(yii::$app->request->isAjax) {

            if ( (0 < $_FILES['file']['error']) || is_bool(strripos($_FILES['file']['type'],'image'))  )
            {
                echo 'Error: ' . $_FILES['file']['error'] . '<br>';
            } else {
                $create_folder = new ImageUpload();
                $create_folder->createUserFolder(yii::$app->user->id);

                move_uploaded_file($_FILES['file']['tmp_name'],
                    Yii::getAlias( '@backend' ).'/web/elfinder/global/users/user_'.yii::$app->user->id.'/user_logo.jpg');
            }
        }

        if ($user->load(Yii::$app->request->post())) {
            
            if($user->save()){


            }else{
                return $this->render('personal',[
                    'user' => $user,
                    'popular_articles' => Article::getPopular(),
                    'categories' => Article::getCategories(),
                ]);
            }
        }

        return $this->render('personal',[
            'user' => $user,
            'popular_articles' => Article::getPopular(),

            'categories' => Article::getCategories(),
        ]);
    }

   public function actionContact(){

        $model = new ContactForm();



       if ($model->load(Yii::$app->request->post()) && $model->validate()){
           $model->sendEmail('adrej997@gmail.com');
           Yii::$app->session->setFlash('success', "Ваше сообщение успешно отправлено");
           if(Yii::$app->request->get('action') == 'index'){
               return $this->goHome();
           }else {
               return $this->render('contact');
           }
       }else{
           return $this->render('contact',['model' => $model]);
       }

        return $this->render('contact',['model' => $model]);
   }


}
