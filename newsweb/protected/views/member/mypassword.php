
	<!-- con -->
	<div class="container innerbox">
		<div class="conbox">
			<div class="row">
				<div class="col-sm-4  col-md-3">
					<div class="sidebox">
						<div id="vipnav">会员导航 <i class="iconfont">&#xe60c;</i></div>
						<div id="vipleft" class="vipnavshow">
						<div class="vip-h">会员中心</div>
						<ul class="vip-ul">
							<li class="vip-tit"><i class="vipli-i vipli-i3"></i>账户中心</li>
							<li><a href="<?php echo $this->createUrl('/member/info');?>">账户信息</a></li>
							<!--<li><a href="<?php echo $this->createUrl('/member/resume');?>">上传个人简历</a></li>-->
							<li><a href="<?php echo $this->createUrl('/member/mypassword');?>">修改密码</a></li>
							<!--<li><a href="<?php echo $this->createUrl('/member/addarticle');?>">发布文章</a></li>-->
							<!--<li class="vip-tit"><i class="vipli-i vipli-i4"></i>客户服务</li>
							<li><a href="#">在线客服</a></li>
							<li><a href="<?php echo $this->createUrl('/member/message');?>">在线留言</a></li>-->
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-8  col-md-9">
				    <div class="account-h">修改密码</div>
                                    
                                    
                                    <?php if(Yii::app()->user->hasFlash('success')): ?>
			    <div class="col-lg-12 ">
			        <div class="alert alert-error">
			        <p class="alertbar">
			        <?php echo Yii::app()->user->getFlash('success'); ?>
			        </p>
			    </div>
			    </div>
			    <?php endif; ?>
                                    
					<div class="rightcon ">
						<div class="vippd">
                                                    <?php $form=$this->beginWidget('CActiveForm', array(
                                    'id'=>'member-edit-form',
                                    'enableAjaxValidation'=>false,
                                  )); ?>
						<div class="vip-group mb10">
							<span class="vip-label">我的帐号：</span>
							<div class="lh40"><?php echo $model->email;?></div>
						</div>						
						<div class="vip-group">
							<span class="vip-label">新密码：</span>
							
                                                      <?php echo $form->passwordField($model,'newpass',array('class'=>'form-control','placeholder'=>'')); ?>
						<?php echo $form->error($model, 'newpass');?>
						</div>
						<div class="vip-group">
							<span class="vip-label">确认密码：</span>
							
                                                        <?php echo $form->passwordField($model,'queren',array('class'=>'form-control','placeholder'=>'')); ?>
						<?php echo $form->error($model, 'queren');?>
						</div>						
						<div class="ml16b">
							<input class="vipbtns" value="确认修改" type="submit">
						</div>
                                                    <?php $this->endWidget(); ?>
					</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	






































