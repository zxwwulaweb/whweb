<?php

class SiteController extends BaseController
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{       
           
            //echo time();die();
            $rentalsinfo=  RentalsInfo::model()->findAll();
            $shelter=  Shelter::model()->findAll();
            $article = Article::model()->findAll();
            $arr=array();
                foreach($rentalsinfo as $model){
                $arr['rentalsinfo'][]=array(
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
                        'room_facilities'=>$model->room_facilities,
                        'community_facilities'=>$model->community_facilities,
                        'periphery'=>$model->periphery,
                        'description'=>$model->description,
                        'begin_time'=>date('Y-m-d',$model->begin_time),
                        'createtime'=>date('Y-m-d',$model->begin_time),
                        'updatetime'=>date('Y-m-d',$model->updatetime),
                        'status'=>$model->status,
            );
                }
                foreach($shelter as $model){
                    $arr['shelter'][]=array(
                        'uid'=>$model->getnickname(),
                        'cityid'=>$model->cityid,
                        'content'=>$model->content,
                        'img'=>$model->img,
                        'createtime'=>date('Y-m-d H:i',$model->createtime),
                    );
                }
                foreach($article as $model){
                    $arr['article'][]=array(
                        'id'=>$model->id,
                        'cate_id'=>$model->getNameById(),
                        'title'=>$model->title,
                        'content'=>$model->content,
                        'createtime'=>date('Y-m-d',$model->createtime),                                               
                    );                                                                                
                }
            die(CJSON::encode($arr));
	}
       
        //搜索
        public function actionSearch(){
            $cate=$this->hasParam('cate')?trim($this->formParams['cate']):1;
            $title=$this->hasParam('title')?trim($this->formParams['title']):"";
            if($cate==1){
                $model=  RentalsInfo::model()->findAll(array('condition'=>'`title` like "%'.$title.'%"'));
                if($model){
                    foreach($model as $v){
                        $arr['rentalsinfo'][]=array(
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
                        'description'=>$v->description,
                        'begin_time'=>date('Y-m-d',$v->begin_time),
                        'createtime'=>date('Y-m-d',$v->begin_time),
                        'updatetime'=>date('Y-m-d',$v->updatetime),
                        'status'=>1,
                    );
                        
                    }
                }else{
                    die(CJSON::encode(array('status'=>1,'msg'=>'no find info')));
                }
            }else if($cate==2){
                $models=  Shelter::model()->findAll(array('condition'=>'`content` like "%'.$title.'%"'));
                if($models){
                    foreach($models as $model){
                        $arr['shelter'][]=array(
                    'uid'=>$model->getnickname(),
                    'cityid'=>$model->cityid,
                    'content'=>$model->content,
                    'img'=>$model->img,
                    'createtime'=>date('Y-m-d H:i',$model->createtime),                                       
                );
                        
                    }
                }else{
                    die(CJSON::encode(array('status'=>1,'msg'=>'no find info')));
                }
            }
            
            
            die(CJSON::encode($arr));
            
            
            
        }
        
        
        
        
        



}