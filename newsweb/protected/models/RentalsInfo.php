<?php

/**
 * This is the model class for table "yp_rentals_info".
 *
 * The followings are the available columns in table 'yp_rentals_info':
 * @property integer $id
 * @property string $title
 * @property integer $country_id
 * @property integer $city_id
 * @property string $address
 * @property string $zip_code
 * @property string $min_lease
 * @property integer $house_type
 * @property integer $room_num
 * @property string $area
 * @property string $rent
 * @property string $deposit
 * @property string $room_facilities
 * @property string $community_facilities
 * @property string $periphery
 * @property string $description
 * @property integer $begin_time
 * @property integer $createtime
 * @property integer $updatetime
 * @property integer $status
 */
class RentalsInfo extends CActiveRecord
{

	public $_modelName = '表名称(新建模型需要在模型里面修改)';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RentalsInfo the static model class
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
		return 'yp_rentals_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, country_id, city_id, address, zip_code, min_lease, house_type, room_num, area, rent, deposit, room_facilities, community_facilities, periphery, description, begin_time, createtime, updatetime, status', 'required'),
			array('country_id, city_id, house_type, room_num, begin_time, createtime, updatetime, status', 'numerical', 'integerOnly'=>true),
			array('title, address, rent, room_facilities, community_facilities, periphery', 'length', 'max'=>256),
			array('zip_code, deposit', 'length', 'max'=>28),
			array('min_lease, area', 'length', 'max'=>64),
			array('description', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, country_id, city_id, address, zip_code, min_lease, house_type, room_num, area, rent, deposit, room_facilities, community_facilities, periphery, description, begin_time, createtime, updatetime, status', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'country_id' => 'Country',
			'city_id' => 'City',
			'address' => 'Address',
			'zip_code' => 'Zip Code',
			'min_lease' => 'Min Lease',
			'house_type' => 'House Type',
			'room_num' => 'Room Num',
			'area' => 'Area',
			'rent' => 'Rent',
			'deposit' => 'Deposit',
			'room_facilities' => 'Room Facilities',
			'community_facilities' => 'Community Facilities',
			'periphery' => 'Periphery',
			'description' => 'Description',
			'begin_time' => 'Begin Time',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('min_lease',$this->min_lease,true);
		$criteria->compare('house_type',$this->house_type);
		$criteria->compare('room_num',$this->room_num);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('rent',$this->rent,true);
		$criteria->compare('deposit',$this->deposit,true);
		$criteria->compare('room_facilities',$this->room_facilities,true);
		$criteria->compare('community_facilities',$this->community_facilities,true);
		$criteria->compare('periphery',$this->periphery,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('begin_time',$this->begin_time);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('updatetime',$this->updatetime);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        //获取房产类型
        public function getTypeById(){
            $model=  HouseType::model()->findByPk($this->house_type);
            if($model){
                return $model->type;
            }
            
        }
       //房间设备
        public function getRoom(){
            $id= explode(',', $this->room_facilities);
            foreach($id as $v){
            $model[].= RoomFacilities::model()->findByPk($v)->name;
            
            }
            return $model;
        }
        
}