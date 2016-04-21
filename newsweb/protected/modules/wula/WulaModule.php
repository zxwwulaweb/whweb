<?php

class WulaModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'wula.models.*',
			'wula.components.*',
		));
		
		 $this->setComponents(
      array(
      
      'user'=>array(
        'class'=>'CWebUser',
        'stateKeyPrefix'=>'wula',
        'loginUrl'=>Yii::app()->createUrl($this->getId().'/default/login'),
        'guestName'=>'模块里面的默认用户'
      ),
      )
    );
		
		
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			
                $route=$controller->id.'/'.$action->id;

                 $publicPages=array(
                 'default/login',                
                 'default/logout'                 
                 );

             //判断是否不需要验证的页面
                if(in_array($route,$publicPages)){
                   return true;
                 }                                                                               
                //判断是否登录
                    if(!Yii::app()->controller->module->getComponent('user')->isGuest){
			return true;
                    }else{
                        Yii::app()->request->redirect(Yii::app()->createUrl('/wula/default/login'));
                        //return true;
                    }	
		}
		else
			return false;
	}
}
