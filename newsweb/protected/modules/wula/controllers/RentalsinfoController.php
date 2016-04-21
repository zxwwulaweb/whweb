<?php

class RentalsinfoController extends HomeController{
   
	
	
	public function init(){
		
	
    }
    public function actionIndex()
	{       
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('RentalsInfo',$page,$row,array());
                
                foreach($all as $v){
                    $arr[]=array(
                        'id'=>$v->id,
                        'title'=>$v->title,
                        'country_id'=>$v->country_id,
                        'city_id'=>$v->city_id,
                        'address'=>$v->address,
                        'zip_code'=>$v->zip_code,
                        'min_lease'=>$v->min_lease,
                        'house_type'=>$v->getTypeById(),
                        'room_num'=>$v->room_num,
                        'area'=>$v->area,
                        'rent'=>$v->rent,
                        'deposit'=>$v->deposit,
                        'room_facilities'=>$v->room_facilities,
                        'community_facilities'=>$v->community_facilities,
                        'periphery'=>$v->periphery,
                        'description'=>$v->decription,
                        'begin_time'=>date('Y-m-d',$v->begin_time),
                        'createtime'=>date('Y-m-d',$v->begin_time),
                        'updatetime'=>date('Y-m-d',$v->updatetime),
                        'status'=>1,
                    );
                }
            die(CJSON::encode($arr));
	}
    //租房信息搜索
        public function actionSearch(){
            $title=$this->hasParam('title')?trim($this->formParams['id']):"";
            $all=  RentalsInfo::model()->findAll(array('condition'=>'`title` like "%'.$title.'%"'));
            if(!$all){
                die(CJSON::encode(array('status'=>0,'msg'=>'no info')));
            }
             foreach($all as $v){
                    $arr[]=array(
                        'id'=>$v->id,
                        'title'=>$v->title,
                        'country_id'=>$v->country_id,
                        'city_id'=>$v->city_id,
                        'address'=>$v->address,
                        'zip_code'=>$v->zip_code,
                        'min_lease'=>$v->min_lease,
                        'house_type'=>$v->getTypeById(),
                        'room_num'=>$v->room_num,
                        'area'=>$v->area,
                        'rent'=>$v->rent,
                        'deposit'=>$v->deposit,
                        'room_facilities'=>$v->room_facilities,
                        'community_facilities'=>$v->community_facilities,
                        'periphery'=>$v->periphery,
                        'description'=>$v->decription,
                        'begin_time'=>date('Y-m-d',$v->begin_time),
                        'createtime'=>date('Y-m-d',$v->begin_time),
                        'updatetime'=>date('Y-m-d',$v->updatetime),
                        'status'=>1,
                    );
                }
            die(CJSON::encode($arr));
        }
    
    //发布租房信息
    public function actionAdd(){
        $model=new RentalsInfo;
        if(isset($_POST['RentalsInfo']) && !empty($_POST['RentalsInfo'])){
            $model->attributes=$_POST['RentalsInfo'];
            if($model->save(false)){
               die(CJSON::encode(array('status'=>1,'msg'=>' add success!')));
            }else{
               die(CJSON::encode(array('status'=>0,'msg'=>'add failed')));
            }
        }
        
    } 
    //修改租房信息
    
    public function actionModify(){
        $id=Yii::app()->request->getParam('id');
        if($id){
            $model=  RentalsInfo::model()->findByPk($id);
            
        }
        if($_POST['RentalsInfo'] && !empty($_POST['RentalsInfo'])){
            $model->attributes=$_POST['RentalsInfo'];
                if($model->save(false)){
                    die(CJSON::encode(array('status'=>1,'msg'=>'modify success!')));
                }else{
                    die(CJSON::encode(array('status'=>0,'msg'=>'modify failed')));
                }
        }
        
    }
    
    //删除租房信息
    
    public function actionDel(){
        $id=Yii::app()->request->getParam('id');
        if($id){
            $model=  RentalsInfo::model()->findByPk($id);
            if($model->delect(false)){
               die(CJSON::encode(array('status'=>1,'msg'=>'delete success!')));
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'delete success!')));
            }
        }else{
            return false;
        }
    }
    //租房留言管理
    public function actionComment(){
        
        $id=$this->hasParam('id')?trim($this->formParams['id']):"";
            $comment=  RentalsComment::model()->findAll(array('condition'=>"rentalsid='$id'"));
            if(!$comment){
                die(CJSON::encode(array('status'=>0,'no comment')));
            }
            foreach($comment as $v){
                $arr[]=array(
                    'id'=>$v->id,
                    'uid'=>$v->getNickAndHead(),
                    'content'=>$v->content,
                    'createtime'=>date('Y-m-d H:i',$v->createtime),                                                          
                );                                               
            }
            
            die(CJSON::encode($arr));
        
    }
    
    /*
     房间设备
     */
    //添加/修改 房间设备
    public function actionRFSave(){
        $name=$this->hasParam('name')?trim($this->formParams['name']):false;
        $id=$this->hasParam('id')?trim($this->formParams['name']):false;
        if($id){
            $model=  RoomFacilities::model()->findByPk();
        }else{
            $model=new RoomFacilities();
        }
        $model->name=$name;
        $model->createtime=time();
        if($model->save(false)){
            die(CJSON::encode(array('status'=>1,'msg'=>'success')));
        }else{
            die(CJSON::encode(array('status'=>0,'msg'=>'failed')));
        }
    }
    //删除房间设备
    public function actionRFDelete(){
        $id=$this->hasParam('id')?trim($this->formParams['id']):false;
        $model=  RoomFacilities::model()->findByPk($id);
        if($model && $model->delete(false)){
            die(CJSON::encode(array('status'=>1,'msg'=>"success!")));
        }else{
            die(CJSON::encode(array('status'=>0,'msg'=>failed)));
        }
    }
    
    
   
    
    
    
    
    
}