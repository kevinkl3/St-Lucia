<?php

class PostController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/admin';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {

        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new POST;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['POST'])) {
            $model->attributes = $_POST['POST'];
            $model->USER_ID_USER = Yii::app()->user->id;
            //$model->USER_ID_USER = 1;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID_POST));
        }

        $this->render('create', array(
            'model' => $model,
            'sections' => SECTION::model()->findAll()
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['POST'])) {
            $model->attributes = $_POST['POST'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID_POST));
        }

        $this->render('update', array(
            'model' => $model,
            'sections' => SECTION::model()->findAll()
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
//		$dataProvider=new CActiveDataProvider('POST');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));

        $model = new POST('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['POST']))
            $model->attributes = $_GET['POST'];

        $this->render('index', array(
            'model' => $model,
            'users' => USER::model()->findAll(),
            'sections'=> SECTION::model()->findAll(),
            'yesno'=>array(array('OPTION'=>1,'NAME'=>'SI'),array('OPTION'=>0,'NAME'=>'NO'))
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new POST('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['POST']))
            $model->attributes = $_GET['POST'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return POST the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = POST::model()->findByAttributes(array('ID_POST'=>$id));

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param POST $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'post-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
