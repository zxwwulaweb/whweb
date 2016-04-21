<?php

/**
 * This is the model class for table "yp_article".
 *
 * The followings are the available columns in table 'yp_article':
 * @property integer $id
 * @property integer $partent_id
 * @property integer $cate_id
 * @property string $title
 * @property string $content
 * @property integer $createtime
 * @property integer $status
 */
class Article extends CActiveRecord
{

	public $_modelName = '表名称(新建模型需要在模型里面修改)';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'yp_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('partent_id, cate_id, title, content, createtime, status', 'required'),
			array('partent_id, cate_id, createtime, status', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, partent_id, cate_id, title, content, createtime, status', 'safe', 'on'=>'search'),
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
			'partent_id' => 'Partent',
			'cate_id' => 'Cate',
			'title' => 'Title',
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
		$criteria->compare('partent_id',$this->partent_id);
		$criteria->compare('cate_id',$this->cate_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //根据cateid获取对应cate名
        public function getNameById(){
            $cate=  ArticleCate::model()->findByPk($this->cate_id);
            if($cate){
                return $cate->title;
            }else{
                return '';
            }
            
        }
        
        
        
}