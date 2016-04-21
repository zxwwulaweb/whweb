<!-- 登录 -->
	<div class="abg">
		<div class="h90"></div>
		<div class="container">
			<div class="fl htwo">
				<div class="login-ad"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ll.jpg" alt=""></div>
				<div class="login-oh">使用其它帐号登陆：</div>
				<div class="login-list clearboth">
					<a class="logino1" href=""></a>
					<a class="logino2" href=""></a>
					<a class="logino3" href=""></a>
					<a class="logino4" href=""></a>
					<a class="logino5" href=""></a>
				</div>
			</div>
			<div class="login">
				<?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableAjaxValidation'=>false,
                'action'=>'/BritishRecord/public/login',
                )); ?>
				<div class="login-h">登 录</div>
				<?php if(Yii::app()->user->hasFlash('error')): ?>
			    <div class="col-lg-12 ">
			        <div class="alert alert-error">
			        <p style="padding-bottom: 10px;color: red;">
			        <?php echo Yii::app()->user->getFlash('error'); ?>
			        </p>
			    </div>
			    </div>

			<?php endif; ?>
				<div class="forminput">
					<?php echo $form->textField($model,'email',array('class'=>'input-val w306','value'=>'','placeholder'=>'邮箱')); ?>

				</div>
				<div class="forminput">
					<?php echo $form->passwordField($model,'password',array('class'=>'input-val w306','placeholder'=>'密码')); ?>

				</div>
				<!-- <div class="clearboth relative">
					<input placeholder="验证码" name="loginyanz" class="input-val yan-val" type="text">
					<div class="yanzheng">
						<img src="images/yanz.jpg" alt="">
					</div>
				</div> -->
				<div class="tiaokuan">
				  <label>
					<input name="logintong" type="checkbox"> 记住我（<a class="yellow" href="" target="_blank">同意</a>）
				  </label>
				</div>
                                <?php if(isset($_GET['returnUrl'])): ?>
                                <input type="hidden" name="returnUrl" value="<?php echo $_GET['returnUrl']; ?>"/>
                                <?php endif; ?>
				<input class="loginbtn" value="马上登录" type="submit">
				<div class="loginother"><a href="">忘记密码</a> | <a href="">免费注册</a></div>
				 <?php $this->endWidget(); ?>
			</div>

		</div>
		<div class="h90"></div>
	</div>
