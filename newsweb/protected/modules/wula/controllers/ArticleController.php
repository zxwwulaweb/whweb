<?php

class ArticleController extends HomeController
{	
	
	
	
	public function init(){
		
	
    }
	public function actionIndex(){
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('Article',$page,$row,array('status'=>1));
            $arr=array();
            foreach($all as $v){
                $arr[]=array(
                    'id'=>$v->id,
                    'cate_id'=>$v->getNameById(),
                    'title'=>$v->title,
                    'content'=>$v->content,
                    'createtime'=>date('Y-m-d',$v->createtime),
                    
                );                  
            }
            die(CJSON::encode($arr));
	}
	//资讯搜索
	public function actionSearch(){
		if(isset($_POST['title']) && !empty($_POST['title'])){
			$title=$_POST['title'];
			$article=Article::model()->findAll(array('condition'=>'`title` like "%'.$title.'%"'));
		}
		foreach($artilce as $v){
                $arr[]=array(
                    'id'=>$v->id,
                    'cate_id'=>$v->getNameById(),
                    'title'=>$v->title,
                    'content'=>$v->content,
                    'createtime'=>date('Y-m-d',$v->createtime),
                    
                );                  
            }
            die($arr);
	}
	
	
	//添加资讯
	public function actionAdd(){
		if(isset($_POST['Article'])){
		
		$article=new Article;
		$article->attributes=$_POST['Article'];
		if($article->save(false)){
                    die(CJSON::encode(array('status'=>1,'msg'=>"add  success")));
                }else{
                    die(CJSON::encode(array('status'=>0,'msg'=>'add failed')));
                }	
	}
		
	} 
	//修改资讯
	public function actionModify(){
		$articlid=$_GET['id'];
		if(isset($articleid) && isset($_POST['Article'])){
			$article=Article::model()->findByPk($artilceid);
			$article->attributes=$_POST['Article'];
			if($article->save(false)){
                            die(CJSON::encode(array('status'=>1,'msg'=>'modify success!')));
                        }else{
                            die(CJSON::encode(array('status'=>0,'msg'=>'modify failed')));
                        }
		}
		
	
	}
	//删除资讯
	public function actionDel(){
		$id = Yii::app()->request->getParam('id');
		if(isset($id)){
			$article=Article::model()->findByPk($id);
			if($article->delete(false)){
				die(CJSON::encode(array('status'=>1,'msg'=>'delete success')));
			}else{
				die(CJSON::encode(array('status'=>0,'msg'=>'delete failed')));
			}
		}
	
	}
	//文章留言管理
        public function actionComment(){
            $id=$this->hasParam('id')?trim($this->formParams['id']):"";
            $comment=ArticleComment::model()->findAll(array('condition'=>"article_id='$id'"));
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
	//删除留言
        
	/*
         文章分类
         * 
         */
	//添加分类
        public function AddCate(){
            $partent=$this->hasParam('partent')?trim($this->formParams['patrent']):0;
            $title=$this->hasParam('title')?trim($this->formParams['title']):false;
            $model=new ArticleCate;
            $model->partent=$partent;
            $model->title=$title;
            $model->createtime=time();
            $model->status=1;
            if($model->save(false)){
                die(CJSON::encode(array('status'=>1,'msg'=>'add success!')));
                
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'add failed')));
            }                                   
        }
	//修改分类
        public function actionModifyCate(){
            $id=$this->hasParam('id')?trim($this->formParams['id']):false;
            $partent=$this->hasParam('partent')?trim($this->formParams['patrent']):0;
            $title=$this->hasParam('title')?trim($this->formParams['title']):false;
            $status=$this->hasParam('status')?trim($this->formParams['status']):1;
            $model=  ArticleCate::model()->findByPk($id);
            if($model){
                $model->partent=$partent;
                $model->title=$title;
                $model->status=$status;
                if($model->save(false)){
                    die(CJSON::encode(array('status'=>1,'msg'=>'success')));
                }else{
                    die(CJSON::encode(array('status'=>0,'msg'=>'failed')));
                }
            }                       
        }
	//删除分类
        public function actionDeleteCate(){
            $id=$this->hasParam('id')?trim($this->formParams['id']):false;
            $model=  ArticleCate::model()->findByPk($id);
            if($model && $model->delete(false)){
                die(CJSON::encode(array('status'=>1,'msg'=>'success!')));
            }else{
                die(CJSON::encode(array('status'=>0,'msg'=>'failed')));
            }                        
        }
	
	
	}