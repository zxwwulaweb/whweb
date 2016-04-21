<?php

class MemberController extends BaseController
{	
	public $memberInfo;
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
	
	
	public function init(){
            parent::init();
          $this->memberInfo=$this->userVerify();
		
	}

	public function actionIndex()
	{
		$this->render('index');
	}
	//会员信息
	public function actionInfo(){
	
	
            $member=array(
                'id'=>$this->memberInfo->id,
                'onlykey'=>$this->memberInfo->onlykey,
                'email'=>$this->memberInfo->email,
                'nickname'=>$this->memberInfo->nickname,
                'head'=>$this->memberInfo->head,
                'phone'=>$this->memberInfo->phone,
                
                
                
            );
            die(CJSON::encode($member));
	}
	//会员信息修改
        public function actionInfoSave(){
            $email=$this->hasParam('email')?trim($this->formParams['email']):"";
            $nickname=$this->hasParam('nickname')?trim($this->formParams['nickname']):"";
            $head=$this->hasParam('head')?trim($this->formParams['head']):"";
            $phone=$this->hasParam('phone')?trim($this->formParams['phone']):"";
            $member=Member::model()->findByPk($this->memberInfo->id);
            $member->email=$email;
            $member->nickname=$nickname;
            $member->head=$head;
            $member->phone=$phone;
            if($member->save(false)){
                die(CJSON::encode(array('status'=>1,'msg'=>'save success!')));
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'save failed')));
            }
        }
        
        
        
	//密码修改
	public function actionPwd(){
            $oldPwd=$this->hasParam('oldpwd')?trim($this->formParams['oldpwd']):"";
            $newPwd=$this->hasParam('newpwd')?trim($this->formParams['newpwd']):true;
            $comfirmPwd=$this->hasParam('comfirmpwd')?trim($this->formParams['comfirmpwd']):false;
             if($newPwd!==$comfirmPwd){
            
            die(CJSON::encode(array('status'=>0,'msg'=>'Two times the password is not consistent')));
        }
        
        if($this->encodePwd($oldPwd)!==$this->memberInfo->password){
            
            die(CJSON::encode(array('status'=>0,'msg'=>'The original password is not correct')));
        }
        
         if($this->hasParam('password')){
            
            $this->memberInfo->password = $this->encodePwd($newPwd);
        }
        
        if($this->memberInfo->save(false)){
            
            die(CJSON::encode(array('status'=>1,'msg'=>'success')));
        }else{
            
            die(CJSON::encode(array('status'=>0,'msg'=>'failed')));
        }
	
	}
	
	
	
	
	
	
	
	
	
}