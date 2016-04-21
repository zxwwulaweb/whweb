<?php

class BaseController extends Controller
{
    
    public $onlykey = '';
    
    public $formParams;
    
    /**
     * 以下是关于接收参数
     */
    
    //接收参数
    protected function getForm()
    {
        //$this->formParams = json_decode(file_get_contents('php://input'),true);
        //$this->formParams=$_POST;
       //$this->formParams=  file_get_contents('php://input');
        parse_str(file_get_contents('php://input'),$this->formParams);
        return $this->formParams;
    }

    //验证参数
    protected function hasParam($fieldname)
    {   parse_str(file_get_contents('php://input'),$this->formParams);
        $flag = isset($this->formParams[$fieldname])?true:false;//$this->formParams[$fieldname]
        
        return $flag;
    }


    /**
     * 以下是用户验证
     * 方案：
     */
    protected function userVerify()
    {
        
        $this->getForm();
        
        $this->onlykey = $this->hasParam('onlykey')?$this->formParams['onlykey']:'';
        
        if(!empty($this->onlykey)){
            
            $this->onlykey = htmlspecialchars(strip_tags($this->onlykey));
            
            $model = Member::model()->find(array('condition'=>"onlykey='$this->onlykey'"));
            
            if($model){
                
                return $model;
            }
            
        }
            
       die(CJSON::encode(array('status'=>0,'login'=>0,'msg'=>'未登录')));

    }
    
    /**
     * 用户密码生成
     */
    protected function encodePwd($str)
    {
        return substr(md5($str),3,24);
    }


    /*
    * 以下是信息保存
    */
    protected function Save($dao,$where=array())
    {
        $params = $this->filterParams();
        
        if(intval($params['id']) !== 0){
            
            $model = $dao::model()->findByPk($params['id'],$where);
            
            if(!$model){
                
                $model = new $dao;
                
            }
            
        }else{

            $model = new $dao;
        }
        
        $model->attributes = $params;
        
        if($model->save(false)){
            
            $this->afterSave($model);
            
           die(CJSON::encode(array('status'=>1,'msg'=>'保存成功!')));
           
        }else{
            
            die(CJSON::encode(array('status'=>0,'msg'=>'保存失败!')));
        }
    }
    
    //过滤参数
    protected function filterParams()
    {
        echo 'Please Filter The Params！';
        exit;
        //$this->afterGetParams($params);
    }
    
    protected function afterSave($model)
    {
        //
    }
    
    protected function encodeHtml($str)
    {
        return strip_tags($str);
    }
    
    
    /**
     * 以下是关于获取信息
     */
    
     /*@use:分页当前用户获取数据
     * @params: $page=1,第几页，$rowPerPage=10,每页几条数据, $dao=''，当前表的模型名称
     */
    protected function Page($dao='',$page=1,$rowPerPage=10,$where=array())
    {
        $criteria=new CDbCriteria();
        
        $criteria = $this->beforeCondition($criteria,$where);
        
        $criteria->offset = ($page-1)*$rowPerPage;
        
        $criteria->limit = $rowPerPage;
        
        return $dao::model()->findAll($criteria);
    }
    
    protected function beforeCondition($criteria,$where)
    {
        $conditionStrArr = array();
        
        foreach($where as $key=>$val){
            $conditionStrArr[] = "$key=$val";
        }
        
        $criteria->addCondition($conditionStrArr);
        
        $criteria = $this->afterCondition($criteria);
        
        return $criteria;
    }
    
    protected function afterCondition($criteria)
    {
        return $criteria;
    }


    //根据id获取相应信息信息
    public function getOneRow($dao,$pk,$where=array())
    {
        $model = $dao::model()->findByPk($pk,$where);
        
        if(!$model){
            
            die(CJSON::encode(array('status'=>0,'msg'=>'查询信息不存在')));
            //$model = new $dao;
        }
        
        die(CJSON::encode($model));
    }
    
    /**
     * 以下是删除信息
     */
    
    //$where = array('condition'=>"id=1"); 单个删除
    public function del($dao,$pk,$where=array())
    {
        $model = $dao::model()->findByPk($pk,$where);
        
        if($model->delete()){
            
            $this->afterDelete($model);
            
            die(CJSON::encode(array('status'=>1,'msg'=>'删除成功')));
        }else{
            
            die(CJSON::encode(array('status'=>0,'msg'=>'删除失败')));
        }
    }
    
    protected function afterDelete($model)
    {
        return true;
    }
    
    //批量删除
    protected function batchDel($dao,$user_id,$ids=array())
    {
        if(!empty($ids) && !is_array($ids)){
            
            die(CJSON::encode(array('status'=>0,'msg'=>'请选择要删除的信息')));
        }
        
        $where = array('condition'=>"user_id=$user_id");
        
        foreach($ids as $key=>$val){
            
            $model = $dao::model()->findByPk(intval($val),$where);
            
            if($model->delete()){
                
                $this->afterDelete($model);
                
            }
        }
        
        die(CJSON::encode(array('status'=>1,'msg'=>'删除成功')));
    }

    /**
     * 以下是图片处理
     */
    //上传图片 普通上传 ，按数组上传多张图片
    protected function uploadFile($field)
    {
        if(!isset($_FILES[$field])){
            
            //return '';
            echo 'fdsafds';
            exit;
            
        }
        
        $types = array('image/gif','image/jpeg','image/pjpeg','image/png');
        
        $maxSize = 5*1024*1024;
        
        $pics = '';
        
        $comma = '';
        
        foreach($_FILES[$field] as $key=>$val){
            
            foreach($val as $k=>$v){
                
                if(!empty($v) && in_array($_FILES[$field]['type'][$k],$types) && $_FILES[$field]['size'][$k]<=$maxSize){
                    
                     $tempFile = $_FILES[$field]['tmp_name'][$k];
                
                    $targetPath = 'uploads/'.date('Ymd',time());
                    var_dump($targetPath);die();
                    !is_dir($targetPath)?mkdir($targetPath):'';
                  
                    $fileParts = pathinfo($_FILES[$field]['name'][$k]);
                    
                    $fileName = 'cygne'.mt_rand(1000, 9999).time().'.'.$fileParts['extension'];
                    
                    $targetFile = $targetPath . '/' .$fileName;
                    
                    move_uploaded_file($tempFile,$targetFile);
                    
                    $pics .= $comma.'/'.$targetFile;
                    
                    $comma = ';';
                }
               
            }
            break;
        }
        
        return $pics;
    }
    
    
    //二进制文件上传
    protected function binaryUploadFile($fieldname,$binaryfile=false)
    {
        if($binaryfile===false){
            
            //$binaryfile = $this->hasParam($fieldname)?base64_decode(str_replace('data:image/jpeg;base64,','',$this->formParams[$fieldname])):'';//获取来的二进制数据
            //$binaryfile=  base64_decode(str_replace('data:image/jpeg;base64,','',$_FILES[$fieldname]));
        }else{
            
            $binaryfile = base64_decode(str_replace('data:image/jpeg;base64,','',$binaryfile));//获取来的二进制数据
        }
        //var_dump($binaryfile);die();
        $returnfilename = '';
        
        if(!empty($binaryfile)){
            
            $targetPath = 'uploads/'.date('Ymd',time());
                    
            !is_dir($targetPath)?mkdir($targetPath)?'':die(json_encode(array('status'=>0,'msg'=>''))):'';
            
            $filename = 'cygne'.mt_rand(1000, 9999).time().'.jpg';
            
            //打开文件
            $file = fopen($targetPath . '/' .$filename, "w");
            //写入文件
            if(fwrite($file, $binaryfile)){
                
                $returnfilename = '/'.$targetPath . '/' .$filename;
                
            }
            //关闭
            fclose($file);
            
        }
        
        return $returnfilename;
    }
    
    public function getFirstPic($pics)
    {
        $arr = explode(';', $pics);
        
        if(!empty($arr)){
            
            return $arr[0];
        }
        return '';
    }
    
    //发送邮件
	public function get_mail_headers($name,$mailname)
	{
		$headers   =  'MIME-Version: 1.0'  .  "\r\n" ;
		$headers  .=  'Content-type: text/html;charset=utf-8'  .  "\r\n" ;
		$headers  .=  'Content-Transfer-Encoding: 8bit'."\r\n";
		$headers  .=  'From: '.$name.'<'.$mailname.">\r\n" ;
		return $headers;
	}
	/*
	 * $content 邮件 body
	* $name  发件人姓名
	* $mailname  发件人邮箱
	* $email  发件的邮箱地址
	* */
	public function send_email($content,$name,$mailname,$email,$subject)
	{
		$headers = $this->get_mail_headers($name,$mailname);
		if (mail($email,$subject, $content,$headers)) {
			return true;
		} else {
			return false;
		}
	}

	public function get_include_contents($data,$filename)
	{
		if (is_file($filename)) {
			ob_start();
			include $filename;
			return ob_get_clean();
		}
		return false;
	}

	//加载模板
	public function getTemaple($mydata,$templatename)
	{
		$data = $mydata;
		$file = './protected/views/email/'.$templatename.'.php';
		$content =  $this->get_include_contents($data,$file);
		return $content;
	}
}

?>