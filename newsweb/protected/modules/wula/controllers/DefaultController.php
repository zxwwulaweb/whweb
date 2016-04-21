<?php

class DefaultController extends Controller
{	
	private $user;
	
	
	public function init(){
    parent::init();
    $this->user = Yii::app()->controller->module->getComponent('user');
  }
	public function actionIndex()
	{	if($this->user->isGuest){
		$this->redirect(array('/wula/default/login'));
	}else{
		
		$this->redirect(array('/wula/member'));
		}
	}

	
	
	
	
	public function actionLogin(){
            
            $model=Yii::createComponent('application.modules.wula.models.LoginForm');
		
		
        if(isset($_POST['LoginForm']))
            {
            $model->attributes=$_POST['LoginForm'];
          if($model->validate() && $model->login()){
            $this->redirect(array('/wula/default/test'));
        }
        }
            $this->render('login',array('model'=>$model));
	}
	
	public function actionLogout()
  {
    Yii::app()->controller->module->getComponent('user')->logout();
    $this->redirect(Yii::app()->createUrl('/'));
  }
	
	
	
	
	
	
	public function actionTest(){
	//var_dump(Yii::app()->controller->module->getComponent('user'));
	echo Yii::app()->controller->module->id;
	echo Yii::app()->user->id;
	}
	
	
	
	
	
	
	}