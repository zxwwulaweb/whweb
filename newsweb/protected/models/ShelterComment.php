<?php

/**
 * This is the model class for table "yp_shelter_comment".
 *
 * The followings are the available columns in table 'yp_shelter_comment':
 * @property integer $id
 * @property integer $uid
 * @property integer $sid
 * @property integer $shelterid
 * @property string $content
 * @property integer $createtime
 * @property integer $status
 */
class ShelterComment extends CActiveRecord
{

	public $_modelName = '表名称(新建模型需要在模型里面修改)';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShelterComment the static model class
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
		return 'yp_shelter_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, uid, sid, shelterid, content, createtime, status', 'required'),
			array('id, uid, sid, shelterid, createtime, status', 'numerical', 'integerOnly'=>true),
			array('content', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, sid, shelterid, content, createtime, status', 'safe', 'on'=>'search'),
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
			'sid' => 'Sid',
			'shelterid' => 'Shelterid',
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
		$criteria->compare('sid',$this->sid);
		$criteria->compare('shelterid',$this->shelterid);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //获取昵称头像
        public function getnickandhead(){
           
            $model=Member::model()->findByPk($this->uid);
            if($model){
                $arr[]=array(
                    'nickname'=>$model->nickname,
                    'head'=>$model->head,
                );
                return $arr;
            }
        }
        //或取被回复人昵称头像
        public function getnickById(){
            
              $model=Member::model()->findByPk($this->sid);
            if($model){
                $arr[]=array(
                    'nickname'=>$model->nickname,
                    'head'=>$model->head,
                );
                return $arr;
            }
            
            
        }
        
}