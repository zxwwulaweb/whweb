<!-- 登录 -->
	<div class="abg">
		<div class="h90"></div>
		<div class="register container">
			<?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'dengluform',
                                    'enableAjaxValidation'=>false,
                                  )); ?>
				<div class="login-h">注册会员</div>
				<div class="forminput">
					<span class="reg-title">邮箱：</span>
					<?php echo $form->textField($memberModel,'email',array('class'=>'input-val w328','placeholder'=>'')); ?>
					<?php echo $form->error($memberModel, 'email');?>
				</div>
				<div class="forminput">
					<span class="reg-title">登录密码：</span>
					<?php echo $form->passwordField($memberModel,'password',array('class'=>'input-val w328','placeholder'=>'')); ?>
					<?php echo $form->error($memberModel, 'password');?>
				</div>
				<div class="forminput">
					<span class="reg-title">确认密码：</span>
					<?php echo $form->passwordField($memberModel,'passwordrepeat',array('class'=>'input-val w328','placeholder'=>'')); ?>
					<?php echo $form->error($memberModel, 'passwordrepeat');?>
				</div>
				<div class="forminput">
					<span class="reg-title">验证码：</span>
					<?php echo $form->textField($memberModel,'verifyCode',array('class'=>'input-val yan-val','placeholder'=>'')); ?>

					<div class="yanzheng">
						<?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击图片刷新','title'=>'点击图片刷新','width'=>'60px','height'=>'20px','class'=>'ip9'))); ?>
					<?php echo $form->error($memberModel, 'verifyCode');?>
					</div>

				</div>

				<div class="ml326" style="clear: both;">
					<div class="tiaokuan">
						<label>
						<?php echo	$form->checkBox($memberModel, 'agreeTerms');?> <input name="Member[agreeTerms]" type="checkbox" value="1"> 同意注册（<a class="yellow" href="" target="_blank">服务条款</a>）
						</label>
						<?php echo $form->error($memberModel, 'agreeTerms');?>
					</div>
					<input class="loginbtn w350" value="马上注册" type="submit">
					<div class="loginother w350"><a href="/public/login">已有帐号去登录</a></div>
				</div>
			 <?php $this->endWidget(); ?>
		</div>
		<div class="h90"></div>
	</div>
