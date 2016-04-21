<?php
class HomeController extends Controller{
    public $formParams;
    //接收参数
    protected function getForm()
    {
        $this->formParams = json_decode(file_get_contents('php://input'),true);
    }

    //验证参数
    protected function hasParam($fieldname)
    {
        $flag = isset($this->formParams[$fieldname])?true:false;
        
        return $flag;
    }
    
        /**
     * 分页获取信息
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
        
        //$criteria->order = 'id desc';
        
        return $dao::model()->findAll($criteria);
    }
    
    protected function beforeCondition($criteria,$where=array())
    {
        $criteria->order = 'id desc';
        
        return $criteria;
    }
    
    
    
    
    
}


