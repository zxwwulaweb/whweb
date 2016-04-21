<script src="/themes/rne/js/Validform_v5.3.2_min.js"></script>
	<!-- con -->
<div class="container">
			<div class="login">
				<ul class="login-h">
					<li>登 录</li>
					<li class="login-hli2">注 册</li>
				</ul>
				<form method="post" action="<?php echo $this->createUrl('/public/login');?>" class="validate-form">
				<div class="login-con">
					<div class="regbox">
						<input type="email" name="LoginForm[email]" datatype="e" nullmsg="请填写邮箱/手机号" class="form-control" placeholder="邮箱/手机号">
						<span class="Validform_checktip"></span>
					</div>
					<div class="regbox ">
						<input id="rpassword" name="LoginForm[password]" type="password" class="form-control" datatype="*" nullmsg="请输入密码" placeholder="密码">
						<span class="Validform_checktip"></span>
					</div>
					<input class="btn loginbtn" type="submit" value="立即登录">
					<div class="checkbox login-kuan">
						<label>
						  <input type="checkbox">记住（<a class="yellow" href="">同意</a>）
						  <span class="Validform_checktip"></span>
						</label>
						<div class="fr"><a href="forget.html">忘记密码</a> | <a href="register.html">免费注册</a></div>
					</div>
					<div class="sj-h">第三方登录</div>
					<div class="sj">
						<a class="sjli1" href=""></a><a class="sjli2" href=""></a><a class="sjli3" href=""></a><a class="sjli4" href=""></a>
					</div>
				</div>
				</form>
			</div>
		</div>
	<!-- footer -->
	






































