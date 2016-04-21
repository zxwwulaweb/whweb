<?php

Class ShelterController extends HomeController{
        
        public function init(){
		
	
                }
          //收留展示页
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
    //修改
        public function actionModify(){
            $id=Yii::app()->request->getparam('id');
            $shelter=Shelter::model()->findByPk($id);
            if(isset($_POST['Shelter'])){
                
                $shelter->attributes=$_POST['Shelter'];
                if($shelter->save(false)){
                   die(CJSON::encode(array('status'=>1,'msg'=>'modify success!')));
                }else{
                   die(CJSON::encode(array('status'=>0,'msg'=>'modify failed!')));
                }
            }
            
        }
    //搜索
    public function actionSearch(){
        if(isset($_POST['title']) && !empty($_POST['title'])){
            $shelter=Shelter::model()->findAll(array(''));
        }
        foreach($shelter as $model){
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
    //删除
    public function actionDel(){
        $id=Yii::app()->request->getparam('id');
        if(isset($id)){
            $shelter=Shelter::model()->findByPk($id);
            if($shelter->delect(false)){
                die(CJSON::encode(array('status'=>1,'msg'=>'delete success!')));
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'delete success!')));
            }
        }
        
    }
      
    //收留留言管理
    public function actionComment(){
        $id=$this->hasParam('id')?trim($this->formParams['id']):"";
        $comment=  ShelterComment::model()->findAll(array('condition'=>"shelterid='$id'"));
        if(!$comment){
            die(CJSON::encode(array('status'=>0,'msg'=>'no comment')));
        }
        foreach ($comment as $v){
            $arr[]=array(
                'id'=>$v->id,
                'uid'=>$v->getnickandhead(),
                'sid'=>$v->getnickandhead(),
                'content'=>$v->content,
                'createtime'=>date('Y-m-d H:i',$V->createtime),
            );
        }
        
        die(CJSON::encode($arr));
    }
    
    
    
  
	
        
        
        
        
    
}
