<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="点度keywords" />
<meta name="description" content="点度科技">
<link rel="shortcut icon" href="/usedcar/Public/logo.png" type="image/x-icon" />
<link rel="stylesheet" href="/usedcar/Public/styles/reset.css">
<!-- <link rel="stylesheet" href="/usedcar/Public/styles/bootstrap.css"> -->
<link rel="stylesheet" href="/usedcar/Public/styles/bootstrap.min.css">
<!-- <link rel="stylesheet" href="/usedcar/Public/styles/bootstrap-theme.css"> -->
<link rel="stylesheet" href="/usedcar/Public/styles/bootstrap-theme.min.css">
<link rel="stylesheet" href="/usedcar/Public/styles/font-awesome.css">
<link rel="stylesheet" href="/usedcar/Public/styles/font-awesome-ie7.css">
<link rel="stylesheet" href="/usedcar/Public/styles/jquery-ui.min.css">
<link rel="stylesheet" href="/usedcar/Public/styles/jquery-ui.structure.min.css">
<link rel="stylesheet" href="/usedcar/Public/styles/jquery-ui.theme.min.css">
<link rel="stylesheet" href="/usedcar/Public/styles/main.css">
<script src="/usedcar/Public/scripts/jquery-3.1.1.min.js"></script>
<script src="/usedcar/Public/scripts/jquery-ui.min.js"></script>
<script src="/usedcar/Public/scripts/bootstrap.js"></script>
<script src="/usedcar/Public/scripts/jagoFunction.js"></script>
<script src="/usedcar/Public/scripts/main.js"></script>

<!-- 腾讯地图API -->
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp"></script>
	</head>
	<body class="wrapper login-container">
		<div class="bg-container width-all height-all bg-black text-center">
			<div class="cus-table">
				<div class="cus-table-cell">
					<div class="login panel panel-default">
						<div class="panel-heading">
							<h3 class="title"><img style="width: auto; height: 50px;" src="/usedcar/Public/images/other/logo.png" alt=""> <a href="#" onclick="cancel(this)"><!-- <i class="icon-remove-sign pull-right"></i> --></a></h3>
						</div>
						<div class="panel-body">
							<form class="adminLogin" role="form" action="" method="POST">
							  <div class="form-group">
							    <label for="account">手机号</label>
							    <input name="account" type="text" class="form-control" id="phone" placeholder="Phone Number" autocomplete="off" required="">
							  </div>
							  <div class="form-group">
							    <label for="password">密码</label>
							    <input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required="">
							  </div>
							  <div>
							  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-upload"></i> 登录</button>
							  	<p class="error-msg red pull-right"></p>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		(function($) {
			$(function() {
				$('.btn-submit').on('click', function() {
					var phone = $('#phone').val();
					var password = $('#password').val();
					$.ajax({
						url: '/usedcar/index.php/Home/Admin/login',
						type: 'POST',
						data: {'phone': phone, 'password': password}
					}).done(function(res) {
						if (res.msg == 'success') {
							window.location.href = '/usedcar/index.php/Home/Admin/Index/index';
						}else {
							$('.error-msg').html(res.info);
						}
					});
					return false;
				});
			});
		})(jQuery);
		</script>
	</body>
</html>