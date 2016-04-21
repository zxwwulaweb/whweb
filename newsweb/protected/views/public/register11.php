
	<!-- con -->
	<div class="container">
		<div class="loginbox">
			<div class="login">				    
					<div class="login-h">注 册</div>
					<div class="login-txt">注册英创网，让创业更简单</div>
					
                                        <?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'dengluform',
                                    'enableAjaxValidation'=>false,
                                  )); ?>
				
				<div class="regbox">
					
					<?php echo $form->textField($member,'email',array('class'=>'form-control','placeholder'=>'邮箱','nullmsg'=>'请填写邮箱')); ?>
					<?php echo $form->error($member, 'email');?>
                                        <span class="Validform_checktip"></span>
				</div>
				<div class="regbox">
					
					<?php echo $form->passwordField($member,'password',array('class'=>'form-control','placeholder'=>'密码')); ?>
					<?php echo $form->error($member, 'password');?>
				</div>
				<div class="regbox">
					
					<?php echo $form->passwordField($member,'passwordrepeat',array('class'=>'form-control','placeholder'=>'确认密码')); ?>
					<?php echo $form->error($member, 'passwordrepeat');?>
				</div>
				<input  type="submit" value="马上注册">
				<!--<div class="regbox mb0">
					
					<?php echo $form->textField($member,'verifyCode',array('class'=>'yan-val form-control','placeholder'=>'验证码')); ?>

					<div class="yanzheng">
						<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击图片刷新','title'=>'点击图片刷新','width'=>'60px','height'=>'20px','class'=>'ip9'))); ?>
					<?php echo $form->error($memberModel, 'verifyCode');?>
					</div>

				</div>

				<div class="ml326" style="clear: both;">
					<div class="checkbox login-kuan">
						<label>
						<?php echo	$form->checkBox($member, 'agreeTerms');?> <input name="Member[agreeTerms]" type="checkbox" value="1"> 同意注册（<a class="yellow" href="" target="_blank">服务条款</a>）
						</label>
						<?php echo $form->error($member, 'agreeTerms');?>
					</div>
					<input  type="submit" value="马上注册">
					<div class="regw"><a href="forgotpsw">忘记密码</a> | <a href="login">已有帐号去登录</a></div>
				</div>-->
				
			 <?php $this->endWidget(); ?>
                                        
                                        
				
		</div>
	</div>
	<!-- footer -->
	






































