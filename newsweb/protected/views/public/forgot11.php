

                <section class="gkMainbody box" style="width:400px;margin: 0 auto;">
                    <div class="box">
        <div class="con1">
            <h4><?php echo Yii::t('yii', 'Forgot Password') ?></h4>
            <p>
            	Enter your Email to get started.
            </p>
            <div class="alert error" style="display: none">
            	
            </div>
            <div class="nobor">
                <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'forgot-form',
                'enableAjaxValidation'=>false,
                'action'=>'/yopoint/public/forgotpsw',
                )); ?>
                    <div class="denglu">
                        <div class="denglu1"><?php echo Yii::t('yii', 'Email') ?></div>

                        <div class="denglu2">
                    <?php echo $form->textField($model,'email',array('class'=>'inp7','value'=>'')); ?>
                        </div>
                         <div class="denglu2 clearError">
                          
                        </div>
                    </div>
                    
                    
                    <div class="denglu">
                        <div class="denglu1"></div>
                        <div class="denglu2"><a class="btn" style="margin-right: 10px;">go back</a><a href="javascript:void(0)" class="green_btn btn btn-success" data-loading-text="Loading..." ><?php echo Yii::t('yii', 'Next'); ?></a></div>
                    </div>
                <?php $this->endWidget(); ?>
            </div>
            
        </div> 
        <div class="send-success hide">
                <div style="padding: 20px;">
                	<div class="t-block" htmlfor="email" generated="true">
				        The new password has been sent to
				        <span style="color:#00A3D9;">yan@wulaweb.co.uk</span>.
				        <br><br>
				        Please check your inbox, and don't forget about the junk folder.
				    </div>
                </div>
                <div class="denglu">
                        <div class="denglu1"></div>
                        <div class="denglu2"><a class="btn" style="margin-right: 10px;">go back</a></div>
                    </div>
            </div>
    </div>
                </section>

<script type="text/javascript">
  $('#forgot-form').ajaxForm({
  	beforeSubmit:function(){
                        $('.green_btn').button('loading');
    },
    dataType:'json',
    success:function processJson(data) {
      if(data.status != 1){       
        //items[i][0]错误节点名称
        //items[i][1]对应错误提示
        
          $('.error').show().html(data.LoginForm_email[0]);
           $('.green_btn').button('reset');
      
      }else{
        $('.t-block').find('span').html($("#LoginForm_email").val());
        $('.con1').hide();
        $(".send-success").show();
      }
      }
  });
  $(".green_btn").click(
      function(){
       
        $('#forgot-form').submit();
      }
  )
</script>