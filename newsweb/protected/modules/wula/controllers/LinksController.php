<?php

class LinksController extends HomeController
{	
	
	
	
	public function init(){
		
	
    }
	public function actionIndex()
	{	
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('Links',$page,$row,array());
            foreach($all as $v){
                $arr[]=array(
                    'id'=>$v->id,
                    'name'=>$v->name,
                    'url'=>$v->url,
                    'img'=>$v->img,
                    'sort'=>$v->sort,
                    
                    
                );
                
                
            }
            die(CJSON::encode($arr));
	}

	
	public function actionModify(){
		if(isset($_GET['id'])){
			$link=Links::model()->findByPk($_GET['id']);
			
		}else{
			$link=new Links;
		}
		if(isset($_POST['Link'])){
			$link->attributes=$_POST['Link'];
		if($link->save(false)){
			die(CJSON::encode(array('status'=>1,'msg'=>'success!')));
		}else{
			die(CJSON::encode(array('status'=>0,'msg'=>'failed')));
		}
	}
		
	}
	
        
        //删除广告
        public function actionDel(){
            $id=$this->hasParam('id')?trim($this->formParams['id']):"";
            $links=Links::model()->findByPk($id);
            if($links->delete(false)){
                die(CJSON::encode(array('status'=>1,'msg'=>'delete success!')));
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'delete failed')));
            }
            
            
        }
        
        
        
	

	
	
}