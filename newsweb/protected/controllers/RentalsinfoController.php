<?php

class RentalsinfoController extends BaseController
{
	public function actionIndex()
	{            
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('RentalsInfo',$page,$row,array());
            
                $arr=array();
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
                        'room_facilities'=>$v->getRoom(),
                        'community_facilities'=>$v->community_facilities,
                        'periphery'=>$v->periphery,
                        'description'=>$v->description,
                        'begin_time'=>date('Y-m-d',$v->begin_time),
                        'createtime'=>date('Y-m-d',$v->begin_time),
                        'updatetime'=>date('Y-m-d',$v->updatetime),
                        'status'=>1,
                    );
                }
                
            die(CJSON::encode($arr));
	}

        
        
        //收藏
        public function actionCollect(){
            $member=$this->userVerify();
            $infoid=$this->hasParam('id')?intval($this->formParams['id']):0;
            $models=RentalsColllect::model()->findAll(array('condition'=>"uid='$member->uid' AND info_id='$infoid'"));
                if($models){
                    die(CJSON::encode(array('status'=>0,'msg'=>'already collected')));
                }else{
                    $model=new RentalsInfo;
                    $model->uid=$member->uid;
                    $model->info_id=$infoid;
                    $model->createtime=time();
                    if($model->save(false)){
                        $num=  count($model);
                        die(CJSON::encode(array('status'=>1,'msg'=>'collect success!','data'=>$num)));
                    }
                    
                }
            }
        //租房信息详情
        public function actionDetail(){
            //$id=$this->hasParam('id')?intval($this->formParams['id']):"";
            $id=$_GET['id'];
            $model=  RentalsInfo::model()->findByPk($id);
            if(!model){
                die(CJSON::encode(array('status'=>0,'msg'=>" rentalsinfo is not find")));
            }
                $arr[]=array(
                        'id'=>$model->id,
                        'title'=>$model->title,
                        'country_id'=>$model->country_id,
                        'city_id'=>$model->city_id,
                        'address'=>$model->address,
                        'zip_code'=>$model->zip_code,
                        'min_lease'=>$model->min_lease,
                        'house_type'=>$model->getTypeById(),
                        'room_num'=>$model->room_num,
                        'area'=>$model->area,
                        'rent'=>$model->rent,
                        'deposit'=>$model->deposit,
                        'room_facilities'=>$model->getRoom(),
                        'community_facilities'=>$model->community_facilities,
                        'periphery'=>$model->periphery,
                        'description'=>$model->description,
                        'begin_time'=>date('Y-m-d',$model->begin_time),
                        'createtime'=>date('Y-m-d',$model->begin_time),
                        'updatetime'=>date('Y-m-d',$model->updatetime),
                        'status'=>$model->status,
            );
                die(CJSON::encode($arr));
        }    
            
        //租房评论
        public function actionComment(){
            $member=$this->userVerify();
            $content=$this->hasParam('content')?trim($this->formParams['content']):"";
            $id=$this->hasParam('id')?trim($this->formParams['id']):"";
            if(!empty($content)){
                $model=new RentalsComment;
                $model->uid=$member->uid;
                $model->rentalsid=$id;
                $model->content=$content;
                $model->createtime=time();
                $model->status=1;
                if($model->save(false)){
                    $arr['member'][]=array(
                      'nickname'=>$member->nickname,
                       'head'=>$member->head,                       
                    );
                    $arr['content'][]=array(
                        'content'=>$model->content,
                        'createtime'=>date('Y-m-d',$model->createtime),
                    );
                    die(CJSON::encode($arr));
                }
                
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'content is null')));
            }
               
        }
        
        
        
            
        
        
        
        
        
	
}