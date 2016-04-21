<?php

class ShelterController extends BaseController
{	
	
	public function init(){
		parent::init();
	
	}
	public function actionIndex()
	{ 
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('Shelter',$page,$row,array());
            $arr=array();
            foreach($all as $model){
                $arr[]=array(
                    'uid'=>$model->getnickname(),
                    'cityid'=>$model->cityid,
                    'content'=>$model->content,
                    'img'=>$model->img,
                    'createtime'=>date('Y-m-d H:i',$model->createtime),                                       
                );                
            }
	die(CJSON::encode($arr));	
	}

	//收留吧详情页
            public function actionDetail(){
                //$id=$this->hasParam('id')?trim($this->formParams['id']):"";
                $id=Yii::app()->request->getParam('id');//$_GET['id'];
                $model=Shelter::model()->findByPk($id);
                $comment=  ShelterComment::model()->findAll(array('condition'=>"shelterid='$id'"));
                if(!$model){
                    die(CJSON::encode(array('status'=>0,'msg'=>'shelterinfo is not exits!')));
                }
            
                $arr['shelter'][]=array(
                    'uid'=>$model->getnickname(),
                    'cityid'=>$model->cityid,
                    'content'=>$model->content,
                    'img'=>$model->img,
                    'createtime'=>date('Y-m-d H:i',$model->createtime),
                );
                if($comment){
                    foreach($comment as $v){
                        $arr['comment'][]=array(
                            'uid'=>$v->getnickandhead(),
                            'sid'=>$v->getNickById(),
                            'content'=>$v->content,
                            'createtime'=>date('Y-m-d h:i',$v->createtime),
                        );
                        
                    }
                }
               die(CJSON::encode($arr)); 
            }
	//发布收留信息
	public function actionAdd(){
              $member=$this->userVerify();
              $cityid=$this->hasParam('cityid')?trim($this->formParams['cityid']):"";
              $content=$this->hasParam('content')?trim($this->formParams['content']):"";
              $img=$this->hasParam('img')?trim($this->formParams['img']):"";
              $model=new Shelter;
              $model->uid=$member->id;
              $model->cityid=$cityid;
              $model->content=$content;
              $model->img=$img;
              $model->createtime=time();
              $model->status=1;
              if($model->save(false)){
                  die(CJSON::encode(array('status'=>1,'msg'=>'publish seccess!')));
              }else{
                  die(CJSON::encode(array('status'=>0,'msg'=>'publish error')));
              }
                  
	}
	//收藏收留
	public function actionCollect(){
            $member=$this->userVerify();
            $id=$this->hasParam('id')?trim($this->formParams['id']):false;
            $models=ShelterCollect::model()->findAll(array('condition'=>"uid='$member->id' AND shelterid='$id'"));
            if($models){
                die(CJSON::encode(array('status'=>0,'msg'=>'already collected')));
            }else{
                $model=new ShelterCollect;
                $model->uid=$member->id;
                $model->shelterid=$id;
                $model->createtime=  time();
                if($model->save(false)){
                    $num=  count($model);
                    die(CJSON::encode(array('status'=>1,'msg'=>'collect success!','data'=>$num)));
                }
            }
	}
	//收留评论
        public function actionComment(){
            $member=$this->userVerify();
            $sid=$this->hasParam('sid')?trim($this->formParams['sid']):"";
            $shelterid=$this->hasParam('shelterid')?trim($this->formParams['shelterid']):"";
            $content=$this->hasParam('content')?trim($this->formParams['content']):"";
            $model=new ShelterComment;
            $model->sid=$sid;
            $model->uid=$member->id;
            $model->content=$content;
            $model->shelterid=$shelterid;
            $model->createtime=time();
            $model->status=1;
            if($model->save(false)){
                $arr[]=array(
                    'sid'=>$model->getnickandhead(),
                    'uid'=>$model->getnickById(),
                    'content'=>$content,
                    'createtime'=>date('Y-m-d H:i',$model->createtime),
                    
                );
                die(CJSON::encode($arr));
            }
        }
	//获取城市
        public function GetCity(){
            $getIp=$_SERVER["REMOTE_ADDR"];
            $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=7IZ6fgGEGohCrRKUE9Rj4TSQ&ip={$getIp}&coor=bd09ll");
            $json = json_decode($content);
 
                if($json){
                    return $json->{'content'}->{'address'};//按层级关系提取address数据
                     }
            }
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}