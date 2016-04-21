<?php

class MemberController extends HomeController
{	
	
	
	
	public function init(){
   
  }
        //会员列表
	public function actionIndex()
	{
            $page=$this->hasParam('page')?trim($this->formParams['page']):1;
            $row=$this->hasParam('row')?trim($this->formParams['row']):10;
            $all=$this->Page('Member',$page,$row,array());
            foreach($all as $v){
                $arr[]=array(
                'id'=>$v->id,
                'onlykey'=>$v->onlykey,
                'nickname'=>$v->nickname,
                'email'=>$v->email,
                'head'=>$v->head,
                'phone'=>$v->phone,
                'createtime'=>date('Y-m-d H:i',$V->createtime),
                'status'=>$v->status,
                    );
            }
            die(CJSON::encode($arr));
	}
	//修改会员
	public function actionModify(){
		$id = Yii::app()->request->getParam('id');
		$member=Member::model()->findByPk($id);
		if(isset($_POST['Member'])){
			$member->attributes=$_POST['Member'];
			if($member->save(false)){
				die(CJSON::encode(array('status'=>1,'msg'=>'success!')));
			}else{
				die(CJSON::encode(array('status'=>0,'msg'=>'failed!')));
			}         
		}
		
	}
	//会员搜索
	public function actionSearch(){
		if(isset($_POST['email']) && !empty($_POST['email'])){
			$email=$_POST['email'];
			$member=Member::model()->find(array('condition'=>"email='$email'"));
		}
			if($member){
                            foreach($member as $v){
                                $arr[]=array(
                                    'id'=>$v->id,
                                     'onlykey'=>$v->onlykey,
                                     'nickname'=>$v->nickname,
                                     'email'=>$v->email,
                                     'head'=>$v->head,
                                     'phone'=>$v->phone,
                                     'createtime'=>date('Y-m-d H:i',$V->createtime),
                                     'status'=>$v->status,
                                                    );
                                
                            }
                           die(CJSON::encode($arr)); 
			}else{
					die(CJSON::encode(array('status'=>'0','msg'=>'error')));
				}
	}
	
	
	
	
	
	

	
	
	
	}