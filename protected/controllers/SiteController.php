<?php

class SiteController extends Controller{
  public $HOME;
  public $sections;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function getSection($name){
		$i = 0;
		$p = 0;
		$o = 0;
		while( ($p = strrpos($name,"-",$o)) != FALSE){
			$i = $p;
			$o++;
		}
		$id = substr($name,$i+1);
		return SECTION::model()->findByPk($id);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	    $this->HOME = true;
	    $this->sections = SECTION::model()->findAll();
		$this->render('index');
	}

	public function actionPosts($seccion){
   		$this->HOME = false;
		$section = $this->getSection($seccion);//SECTION::model()->find("NAME LIKE :sname",array('sname'=>"%$name%"));
		$this->render('posts',array('section'=>$section));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

  /**
  * Displays the contact page
  */
  public function actionContact()
  {
    $model=new ContactForm;
    if(isset($_POST['ContactForm']))
    {
      $model->attributes=$_POST['ContactForm'];
      if($model->validate())
      {
        $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
        $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
        $headers="From: $name <{$model->email}>\r\n".
        "Reply-To: {$model->email}\r\n".
        "MIME-Version: 1.0\r\n".
        "Content-Type: text/plain; charset=UTF-8";

        mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
        Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
        $this->refresh();
      }
    }
    $this->render('contact',array('model'=>$model));
  }

}
