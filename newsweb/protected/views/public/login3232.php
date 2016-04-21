
	<!-- con -->
	<div class="container">
		<div class="loginbox">
			<div class="login">				    
					<div class="login-h">登 录</div>
					<div class="login-txt">找自已想要的，卖自已不需要的，让大家都快乐！</div>
					<?php if(Yii::app()->user->hasFlash('error')): ?>
			    
			
			        <p style="padding-bottom:0px;color: red;">
			        <?php echo Yii::app()->user->getFlash('error'); ?>
			        </p>
			
			    
				<?php elseif(Yii::app()->user->hasFlash('success')): ?>
				
			  
			        <p style="padding-bottom:0px;">
			        <?php echo Yii::app()->user->getFlash('success'); ?>
			        </p>
			
			  
			<?php endif; ?>
					<!--<form method="post" action="<?php echo $this->createUrl('/public/login');?>" class="validate-form">-->
					<?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableAjaxValidation'=>false,
                'action'=>'/public/login',
                )); ?>
					<!--<div class="regbox logemailbox mb0">
						<input type="email" name="LoginForm[email]"class="form-control logemail" datatype="e" nullmsg="请填写邮箱" placeholder="邮箱">
                        <div class="logicon vipicon"></div>	
						<span class="Validform_checktip"></span>
					</div>-->
					<div class="regbox logemailbox mb0">
					<?php echo $form->textField($model,'email',array('class'=>'form-control','value'=>'','placeholder'=>'邮箱')); ?>
						<div class="logicon vipicon"></div>	
						<span class="Validform_checktip"></span>
				</div>
					
					<!--<div class="regbox ">
						<input id="rpassword" name="LoginForm[password]" type="password" class="form-control" datatype="*" nullmsg="请输入密码" placeholder="密码">
						<div class="logicon logicon2 vipicon"></div>
						<span class="Validform_checktip"></span>
					</div>-->
					
					
					<div class="regbox">
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'密码')); ?>
					<div class="logicon logicon2 vipicon"></div>
						<span class="Validform_checktip"></span>
				</div>
					
					<div class="regbox mb30">
						<input type="text" class="yan-val form-control" name="LoginForm[verifyCode]" datatype="*" nullmsg="请输入验证码" placeholder="验证码">
                                                
						<span class="Validform_checktip"></span>
						<div class="yanzheng fl"><?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击图片刷新','title'=>'点击图片刷新','width'=>'60px','height'=>'20px','class'=>'ip9'))); ?></div>
						<div class="checkbox fl ml10">
							<label>
							  <input name="rgou" type="checkbox">记住（<a class="yellow" href="">同意</a>）
							</label>
						</div>
					</div>
					
					<input class="btn loginbtn" type="submit" value="立即登录">
					<div class="regw"><a href="forgotpsw">忘记密码</a> | <a href="register">免费注册</a></div>
					<a class="btn logaresg btn-default" href="register">去注册新帐号</a>
					<!--<div class="sj-h">社交网络登录</div>
					<div class="sj"><a class="sjli1" href="<?php echo $this->createUrl('public/qqlogin');?>"></a><a class="sjli2" href=""></a><a class="sjli3" href="<?php echo $this->createUrl('public/wblogin');?>"></a><a class="sjli4" href="<?php echo $this->createUrl('public/fblogin');?>"></a></div>-->
					<!--</form>-->
					 <?php $this->endWidget(); ?>
				</div>
		</div>
	</div>
	<!-- footer -->
	






































