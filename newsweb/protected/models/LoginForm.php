<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $email;
	public $password;
	public $rememberMe;
	public $verifyCode;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// email and password are required
			array('email','required','message'=>'请填写你的邮箱'),
			array('email','email','message'=>'请填写正确的邮箱'),
			array('password', 'required','message'=>"请填写你的密码"),
                        //email is email
			array('verifyCode','captcha','message'=>'验证码错误'),
			//array('verifyCode','captcha', 'on'=>'login','allowEmpty'=>!CCaptcha::checkRequirements()),
			//array('verifyCode','captcha', 'on'=>'login','allowEmpty'=>!Yii::app()->user->isGuest),
            array('email', 'isexist'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'email'=>'email',
			'password'=>'password',
			//'verifyCode'=>'verifyCode',
			'rememberMe'=>'rememberMe',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','邮箱或密码错误.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}

	//第三方登陆
	public function otherlogin(){
		
	}
	
	//forgot psw
	public function isexist($attribute,$params){
		if(!$this->hasErrors())
		{
			
			$user = Member::model()->find(array('condition'=>"email = '$this->email'"));
			if(!$user)
				$this->addError('email','not email exist.');
		}
	}
  
  public function validateVerifyCode($verifyCode){
        if(strtolower($this->verifyCode) === strtolower($verifyCode)){
            return true;
        }else{
            $this->addError('verifyCode','验证码错误.');
        }
	}
  
  
}
