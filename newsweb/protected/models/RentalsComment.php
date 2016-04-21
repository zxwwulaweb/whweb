<?php

/**
 * This is the model class for table "yp_rentals_comment".
 *
 * The followings are the available columns in table 'yp_rentals_comment':
 * @property integer $id
 * @property integer $uid
 * @property integer $rentalsid
 * @property string $content
 * @property integer $createtime
 * @property integer $status
 */
class RentalsComment extends CActiveRecord
{

	public $_modelName = '表名称(新建模型需要在模型里面修改)';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RentalsComment the static model class
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
		return 'yp_rentals_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, uid, rentalsid, content, createtime, status', 'required'),
			array('id, uid, rentalsid, createtime, status', 'numerical', 'integerOnly'=>true),
			array('content', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, rentalsid, content, createtime, status', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'rentalsid' => 'Rentalsid',
			'content' => 'Content',
			'createtime' => 'Createtime',
			'status' => 'Status',
		);
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
		$criteria->compare('uid',$this->uid);
		$criteria->compare('rentalsid',$this->rentalsid);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        //获取用户信息
        public function getNickAndHead(){
            $model=Member::model()->findByPk($this->uid);
            if($model){
                foreach($model as $v){
                    $arr[]=array(
                        'nickname'=>$v->nickname,
                        'head'=>$v->head,
                    );
                }
                return $arr;
            }
        }
        
        
        
}