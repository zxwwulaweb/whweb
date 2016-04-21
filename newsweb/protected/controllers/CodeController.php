<?php

class CodeController extends BaseController{
    public $layout='//layouts/test';
    public $aa;
    public function actionIndex(){
        
        $this->render('index');
        
    }
    
    public function actionTest(){
        
        $this->render('test');
    }
    public function actionUpload(){
        
           $this->uploadFile('img');
    }
    
    
    
}