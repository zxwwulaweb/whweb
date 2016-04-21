<?php

/**
 * This is the model class for table "rbac_member".
 *
 * The followings are the available columns in table 'rbac_member':
 * @property string $id
 * @property string $username
 * @property string $nickname
 * @property string $password
 * @property string $bind_account
 * @property string $last_login_time
 * @property string $last_login_ip
 * @property string $verify
 * @property string $email
 * @property string $remark
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 * @property integer $role_id
 * @property string $info
 * @property integer $salt
 * @property string $photo
 */
class Member extends CActiveRecord
{
	public $_modelName = '会员';
	public $passwordrepeat;//重复密码
	public $agreeTerms;//重复密码
        public $emailrepeat;
	public $verifyCode;//验证码


	public $oldpass; //旧密码
	public $newpass; //新密码
	public $queren;  //确认密码

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
			array(' nickname,emailrepeat, password,passwordrepeat,oldpass,newpass,queren', 'required','message'=>"不能偷懒哦！"),
			array('oldpass','yzoldpass'),
			array('newpass','checknewpassword'),
			array('emial', 'unique','message'=>'用户名已存在'),
            array('email', 'unique','message'=>'这个邮箱已经注册'),
            array('agreeTerms', 'compare', 'compareValue' => true,'message' => '您需要同意我们的条款' ),
            array('emailrepeat', 'checknewemail'),
			array('password','checkPassword'),//验证密码
			array('passwordrepeat','checknewpass'),//重复密码验证
			array('verifyCode','captcha','message'=>'验证码错误！'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nickname, email', 'length', 'max'=>128),
			array('password, verify', 'length', 'max'=>32),
			array('id,onlykey,  nickname, password, email,phone, createtime,  status', 'safe', 'on'=>'search'),
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
                        'onlykey'=>'onlykey',
			'nickname' => 'nickname',
			'password' => 'password',
			'email' => 'email',
			'createtime' => '创建时间',
			'status' => '状态',
			'oldpass' => 'oldpass',
			'newpass' => 'newpass',
			'queren' => 'repassword',
			
		);
	}

	public function checknewpassword($attribute,$params){
		if($this->newpass !== $this->queren){
			$this->addError('newpass','两次输入的密码不一致');
		}
	}


	public function yzoldpass($attribute,$params){
		if(md5($this->oldpass)!=$this->password){
			$this->addError('oldpass','旧密码不正确');
		}
	}

	public function agreeTerms($attribute,$params){
		if($this->agreeTerms != 1){
			$this->addError('agreeTerms','不用忘记勾选这里');
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

		$criteria->compare('id',$this->id,true);
                $criteria->compare('onlykey',$this->onlykey,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('status',$this->status);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
