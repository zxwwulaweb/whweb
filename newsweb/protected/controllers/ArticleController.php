<?php
class ArticleController extends BaseController{

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
	//资讯详情页
	public function actionDetail(){
            //$id=$this->hasParam('id')?intval($this->formParams['id']):"";
            $id=Yii::app()->request->getParam('id');
            $model=Article::model()->findByPk($id);
            if(!$model){
                die(CJSON::encode(array('status'=>0,'msg'=>'no exist')));
            }
            $arr=array(
                'id'=>$model->id,
                'cate_id'=>$model->getNameById(),
                'title'=>$model->title,
                'content'=>$model->content,
                'createtime'=>date('Y-m-d',$model->createtime),
            );
            die(CJSON::encode($arr));
	}

	//资讯评论
	public function actionArticleComment(){
            $member=$this->userVerify();
            $content=$this->hasParam('content')?trim($this->formParams['content']):"";
            $articleid=$this->hasParam('id')?intval($this->formParams['id']):"";
            if(!empty($content) && !empty($articleid)){
                $model=new ArticleComment;
                $model->uid=$member->id;
                $model->article_id=$articleid;
                $model->content=$content;
                $model->createtime=time();
                $model->status=1;
                if($model->save(false)){
                    $arr['member'][]=array(
                      'nickname'=>$member->nickname,
                       'head'=>$member->head,
                    );
                    $arr['comment'][]=array(
                      'content'=>$model->content,
                      'createtime'=>date('Y-m-d h:i:s',$model->createtime),
                    );
                    die(CJSON::encode($arr));
                }
            }
            die(CJSON::encode(array('status'=>0,'msg'=>'faile')));
	}
	
	//资讯类别切换
	public function actionCateArticle(){
            $cateid=$this->hasParam('cate_id')?intval($this->formParams['cate_id']):"";
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            if(!$cateid){
                die(CJSON::encode(array('status'=>0,'msg'=>'this cate is no exist!')));
            }
            $all=$this->Page('Article',$page,$row,array('cate_id'=>$cateid));
            foreach($all as $v){
                $arr[]=array(
                    'id'=>$v->id,
                    'cate_id'=>$v->getNameById(),
                    'title'=>$v->title,
                    'content'=>$v->content,
                    'createtime'=>$v->createtime,
                    
                    );
            }
            die(CJSON::encode($arr));
	}
	
	//文章收藏
        public function actionCollect(){
            $member=$this->userVerify();
            $articleid=$this->hasParam('id')?intval($this->formParams['id']):0;
            $models=ArticleCollect::model()->findAll(array('condition'=>"article_id='$articleid' AND uid='$member->uid'"));
            if($models){
                die(CJSON::encode(array('status'=>0,'msg'=>'already collect ')));
            }else{
                $model=new ArticleCollect;
                $model->uid=$member->id;
                $model->article_id=$articleid;
                $model->createtime=time();
                $model->status=1;
                if($model->save(false)){
                    $num=  count($model);
                    die(CJSON::encode(array('satus'=>1,'msg'=>'collect success!','data'=>$num)));
                }
            }
            
        }
	
	

	














}