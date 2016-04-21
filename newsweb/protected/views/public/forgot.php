
	<!-- con -->
	<div class="container">
		<div class="loginbox">
			<div class="login">
					<div class="login-h">找回帐号</div>
					<div class="login-txt">找自已想要的，卖自已不需要的，让大家都快乐！</div>
					
						
        <?php if(Yii::app()->user->hasFlash('error')): ?>

      <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo Yii::app()->user->getFlash('error'); ?>
  </div>

	  <?php elseif(Yii::app()->user->hasFlash('success')): ?>

      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo Yii::app()->user->getFlash('success'); ?>

			<?php endif; ?>
					
					
					
					<?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'forgot-form',
                                    'enableAjaxValidation'=>false,
                                  )); ?>
					<!--<form method="post" action="" class="validate-form">
					<div class="regbox">
						<input type="email"  name="LoginForm[email]"datatype="e" nullmsg="请填写邮箱" class="form-control" placeholder="注册邮箱或帐号">
						<span class="Validform_checktip"></span>
					</div>	-->

							
				<div class="regbox">
		
					<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'邮箱')); ?>
					<?php echo $form->error($model, 'email');?>
				</div>
					<!--<div class="regbox">
						<input type="text" datatype="*" nullmsg="请输入验证码" class="yan-val form-control" placeholder="验证码">
						<span class="Validform_checktip"></span>
						<div class="yanzheng"><img src="images/yan.jpg" alt=""></div>
					</div>-->
					
					 <div class="regbox">
              <?php echo $form->textField($model,'verifyCode',array('class'=>'yan-val form-control','placeholder'=>'验证码')); ?>
			<div class="yanzheng">  
          <?php $this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,'imageOptions'=>array('alt'=>'点击图片刷新','title'=>'点击图片刷新','class'=>'ip9'))); ?></div>
          <?php echo $form->error($model, 'verifyCode');?>
               
        </div>
					<input class="btn loginbtn" type="submit" value="点击发送">
					<div class="regw"><a href="register">新注册</a> | <a href="login">已有帐号去登陆</a></div>
					
					<?php $this->endWidget(); ?>
				</div>
		</div>
	</div>
	<!-- footer -->
	






















