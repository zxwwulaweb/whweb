<?php

/**
 * This is the model class for table "yp_member".
 *
 * The followings are the available columns in table 'yp_member':
 * @property integer $id
 * @property string $password
 * @property string $nickname
 * @property string $email
 * @property string $head
 * @property string $phone
 * @property string $createtime
 * @property integer $status
 */
class Member extends CActiveRecord
{

	public $_modelName = '表名称(新建模型需要在模型里面修改)';
	public $passwordrepeat;//确认密码
	public $agreeTerms;//同意条款
	public $verifyCode;//验证吗
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'yp_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email','required','message'=>'请填写你的邮箱'),
			array('email','email','message'=>'请填写正确的邮箱'),
			array('email', 'unique','message'=>'这个邮箱已经注册'),
			array('agreeTerms', 'compare', 'compareValue' => true,'message' => '您需要同意我们的条款' ),
			array('emailrepeat', 'checknewemail'),
			array('passwordrepeat','compare','compareAttribute'=>'password','message'=>"密码不一致"),
			
			//array('password','checkPassword'),//验证密码
			//array('passwordrepeat','checknewpass'),//重复密码验证
			array('verifyCode','captcha','message'=>'验证码错误！'),
			array('password,passwordrepeat, nickname, email, head, phone, createtime', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('password, nickname, head, phone, createtime', 'length', 'max'=>128),
			array('email', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, password, nickname, email, head, phone, createtime, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'password' => 'Password',
			'passwordrepeat'=>'passwordrepeat',
			'nickname' => 'Nickname',
			'email' => 'Email',
			'head' => 'Head',
			'phone' => 'Phone',
			'createtime' => 'Createtime',
			'status' => 'Status',
		);
	}
	
	public function checknewpassword($attribute,$params){
		if($this->newpass !== $this->queren){
			$this->addError('newpass','两次输入的密码不一致');
		}
	}


	public function yzoldpass($attribute,$params){
		if(md5($this->oldpass.$this->salt)!=$this->password){
			$this->addError('oldpass','旧密码不正确');
		}
	}

	public function agreeTerms($attribute,$params){
		if($this->agreeTerms != 1){
			$this->addError('agreeTerms','不用忘记勾选这里');
		}
	}
	
	public function hashPassword(){
		return md5($this->password);
	}

    public function checkPassword(){
    	if(!empty($this->password)){
    		if(strlen($this->password)<6 or strlen($this->password)>16){
    			$this->addError('password','Minimum is 6 characters！');
    		}
    	}
    }
	public function checknewpass(){
		if(!empty($this->passwordrepeat)){
			if($this->password !== $this->passwordrepeat){
				$this->addError('passwordrepeat',"Two pass don't match");
			}
		}

	}
	
	
	
        public function checknewemail(){
		if(!empty($this->emailrepeat)){
			if($this->email !== $this->emailrepeat){
				$this->addError('emailrepeat',"Two email don't match");
			}
		}

	}
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('head',$this->head,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	
	
	
	
	public function gen_random_string($length=16)
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