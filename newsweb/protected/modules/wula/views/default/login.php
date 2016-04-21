<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户信息管理系统</title>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<style>
	.login-container {
		margin-left: auto;
		margin-right: auto;
		width: 40%;
		min-width: 300px;
	}
	
	.sidebar .well-span {
		padding-top: 5px;
		background: #ffffff;
		border: 1px solid #dddddd;
		-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		margin-bottom: 20px;
		margin-right: 30px;
		padding-bottom: 5px;
		margin-left: 0px;
		padding-left: 20px;
		padding-right: 20px;
		float: left;
	}
</style>
</head>

<body class="">
	
	<div class="login">
	<div class="container main-container">
        <div class="row-fluid main-body">
             <div class="login-container">
					<div class="sidebar">
						<div class="well-span">
							<h4>Login to Your Account</h4>
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
								  'validateOnSubmit'=>true,
								),
								'htmlOptions'=>array('class'=>'login1'),
								
				            )); ?>
							<div class="login-form-container">									
								<?php echo $form->textField($model,'username',array('class','in1')); ?>
								<span class="error"><?php echo $form->error($model,'email'); ?></span>
								<?php echo $form->passwordField($model,'password',array('class','in1')); ?>
								<span class="error"><?php echo $form->error($model,'password'); ?> </span>
							</div>
								<div class="login-form-footer">
										<button id="submit-comment" class="sharebox-submit pull-right btn btn-success" style="margin-top: -4px" type="submit" name="yt0">Submit</button>    	                	            	    	            	    	        	<div class="clearfix"></div>
					    	        	<div class="social-buttons"></div>
						    	</div>
							<?php $this->endWidget(); ?>		
						</div>
					</div>
				</div>                
		</div>
    </div>
    </div>
</body>
</html>
<script>
	$(".dlan").click(
		function(){
			$(".login1").submit();
		}
	);
</script>