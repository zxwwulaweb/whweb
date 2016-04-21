<?php 
class PublicController extends BaseController{

	public function init(){
	 parent::init();

	}

	public function actions(){
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,  //背景颜色
				'minLength'=>4,  //最短为4位
				'maxLength'=>4,   //是长为4位
				'transparent'=>true,  //显示为透明，当关闭该选项，才显示背景颜色
			),
		);
	} 

	public function actionIndex(){
		$this->render('index');
	}
//	用户登录
	public function actionLogin(){
		
            $this->getForm();
            $email=$this->hasParam('email')?trim($this->formParams['email']):"";
            $pwd=$this->hasParam('password')?trim($this->formParams['password']):"";
            //echo $email;echo $pwd;die();
            if(!empty($email) && !empty($pwd)){
                $pwd=  md5($pwd);
                $model=Member::model()->find(array('condition'=>"email='$email'"));
                
                if($model && $model->password ===$pwd){
                    $this->recordOnlyKey($model);
                }else{
                    die(CJSON::encode(array('status'=>0,'msg'=>'账号或密码错误','user_type'=>0)));
                }
                
            }
            die(CJSON::encode(array('status'=>0,'msg'=>'error','user_type'=>0)));
	}
	
	
	
	//用户注册
	public function actionRegister(){
		$this->getForm();
                $email=$this->hasParam('email')?trim($this->formParams['email']):"";
                $pwd=$this->hasParam('pwd')?trim($this->formParams['pwd']):"";
                $comfirmpwd=$this->hasParam('comfirmpwd')?trim($this->formParams['comfirmpwd']):"";
                if(!empty($email) && !empty($pwd) && !empty($comfirmpwd)){
                    $model=Member::model()->findAll(array('condition'=>"email='$email'"));
                    if($model){
                        die(CJSON::encode(array('status'=>0,'msg'=>'该邮箱已被注册','user_type'=>0)));
                    }else{
                        if($pwd===$comfirmpwd){
                            $member=new Member;
                            $member->email=$email;
                            $member->password=md5($pwd);
                            if($member->save(false)){
                                die(CJSON::encode(array('status'=>1,'msg'=>'success','user_type'=>1)));
                            }
                        }else{
                            die(CJSON::encode(array('status'=>0,'msg'=>'两次密码不一致','user_type'=>0)));
                        }
                    }
                    
                    
                }
                
                die(CJSON::encode(array('status'=>0,'msg'=>'账号或密码不能为空','user_type'=>0)));
                
                
	}
	
	//忘记密码
	public function actionForgot(){
               // die($this->gen_random_string());
		$this->getForm();
                $email=$this->hasParam('email')?trim($this->formParams['email']):"";
                if(!empty($emal)){
                    $model=Member::model()->findAll(array('condition'=>"emial='$email'"));
                    if($model){
                        $pwd=$this->gen_random_string();
                        $model->password=  md5($pwd);
                        if($model->save(false) && $this->sendEmail($email, '', $pwd, '您的新密码')){
                            die(CJSON::encode(array('status'=>1,'msg'=>'新密码已经发送至您的邮箱请查收','user_type'=>1)));
                        }
                        
                    }else{
                        die(CJSON::encode(array('status'=>0,'msg'=>'该邮箱为注册','user_type'=>0)));
                    }
                }
	
                die(CJSON::encode(array('status'=>0,'msg'=>"邮箱不能为空",'user_type'=>0)));
	
	
	}
	
	
	public function sendEmail($to_address,$temaple,$data,$subject)
	{
		$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
		//$mailer= Yii::import('application.extendsions.mailer.EMailer');
		$mailer = new Emailer;
		$mailer->IsSMTP();
		$mailer->IsHTML();
		$mailer->CharSet = 'UTF-8';
		$mailer->Host = 'smtp.exmail.qq.com';//$conf->host.':'.$conf->port;
        $mailer->Post = '25';
		$mailer->SMTPAuth = true;
		//$mailer->SMTPDebug=true;
		$mailer->SMTPSecure = "tls";
		$mailer->Username = 'xiaowei.zhang@wulaweb.co.uk';//$conf->username;
		$mailer->Password = 'Zxw6513335';//$conf->password;
		$mailer->SetFrom('xiaowei.zhang@wulaweb.co.uk','xiaowei.zhang@wulaweb.co.uk');
		$mailer->Subject = $subject;
                //$mailer->Body=$_POST['Active']['content'];
		//$mailer->getView($temaple,array('data'=>$data));
                 $mailer->Body = $data; 
	         //$mailer->AltBody = "This is the body in plain text for non-HTML mail clients"; //閭欢姝ｆ枃涓嶆敮鎸丠TML鐨勫鐢ㄦ樉绀?

		$mailer->AddAddress($to_address);
		if($mailer->Send()){
			return true;
		}else{
			return false;
		}
	}
	
	
	
	
	
	
 //生成当前登录的onlykey
    protected function generateOnlyKey()
    {
        return uniqid(rand(100,999).rand(1000, 9999).'whblb');
    }
    
    //记录当前登录onlykey
    protected function recordOnlyKey($model)
    {
        $model->onlykey = $this->generateOnlyKey();
        
        if(!$model->save(false)){
            
            die(CJSON::encode(array('status'=>0,'user_type'=>0,'msg'=>'failed')));
            
        }else{
    
           die(CJSON::encode(array('status'=>1,'msg'=>'success','onlykey'=>$model->onlykey,'onlyid'=>md5('user'.$model->id))));
        }
    }
//生成随机密码
public function gen_random_string($length=8)
	{
	    $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
	    $final_rand='';
	    for($i=0;$i<$length; $i++)
	    {
	        $final_rand .= $chars[ rand(0,strlen($chars)-1)];

	    }
	    return $final_rand;
	}







}






