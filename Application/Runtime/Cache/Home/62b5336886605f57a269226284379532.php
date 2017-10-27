<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>点度后台管理</title>
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
	<body>
		<div class="wrapper admin">
			<?php if($_GET['status'] == 'success'): ?>
	<script>cusAlert('success', '<?php echo $_GET['info']; ?>');</script>
<?php elseif($status == 'fail'): ?>
	<script>cusAlert('warning', '<?php echo $info; ?>');</script>
<?php elseif($status == 'success'): ?>
	<script>cusAlert('success', '<?php echo $info; ?>');</script>
<?php elseif($_GET['status'] == 'fail'): ?>
	<script>cusAlert('warning', '<?php echo $_GET['info']; ?>');</script>
<?php endif; ?>
			<div class="header">
	<div class="left pull-left">
		<img class="logo" src="/usedcar/Public/images/other/logo.png" alt="">
	</div>
	<div class="right pull-right">
		<ul>
			<li>
				<p><i class="icon-user"></i> <?php echo session('account'); ?></p>
			</li>
			<li>
				<p><?php echo session('name'); ?></p>
			</li>
			<li>
				<p><a href="<?php echo U('Admin/logout');?>"><i class="icon-signout"></i> 注销</a></p>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
			<div class="middle-content">
				<style>
	.wrapper.admin .middle-content .sidebar ul li .second-level-menu { height: 0; transition: all 0.5s ease-in-out; opacity: 0; overflow: hidden; }
	.wrapper.admin .middle-content .sidebar ul li .second-level-menu.active { opacity: 1; }
	.wrapper.admin .middle-content .sidebar ul li .second-level-menu .arrow { margin-right: 30px; }
	.wrapper.admin .middle-content .sidebar ul li .second-level-menu a  { /*background: #2c373c;*/ background: #2c373c; padding: 8px 20%; transition: all 0.3s ease-in-out; font-weight: lighter; color: #fff; }
	.wrapper.admin .middle-content .sidebar ul li .second-level-menu a:hover { padding: 8px 20%; color: #fed926; }
	.wrapper.admin .middle-content .sidebar ul li.active .first-level .arrow i,
	.wrapper.admin .middle-content .sidebar ul li:hover .first-level .arrow i { color: #0173bc !important; }
	.wrapper.admin .middle-content .sidebar ul li.active .badge.bg-yellow,
	.wrapper.admin .middle-content .sidebar ul li:hover .badge.bg-yellow { background: #37b4ca; color: #fff; margin-top: -5px; }
</style>
<div class="sidebar pull-left">
	<ul>		
		<li class="<?php if($pageName == 'dashboard' || empty($pageName)){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p>
					<a href="<?php echo U('Admin/index', array('pageName' => 'dashboard'));?>">
						<i class="icon-dashboard"></i> 面板
					</a>
				</p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>

		<?php  $Dao = A('Admin'); ?>

		 <li class="<?php if($pageName == 'car'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toCar', array('pageName' => 'car'));?>"><i class="icon-truck"></i> 汽车管理</a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>

		 <li class="<?php if($pageName == 'hotel'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toHotel', array('pageName' => 'hotel'));?>"><i class="icon-desktop"></i> 酒店管理</a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>

		 <li class="<?php if($pageName == 'message'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toMessage', array('pageName' => 'message'));?>"><i class="icon-tags"></i> 订单信息 <?php if($result != 0): ?><span class="badge message-new-all bg-yellow"><?php echo $result; ?></span><?php endif; ?></a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>
		<!-- <li class="<?php if($pageName == 'message'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toMessage', array('pageName' => 'message'));?>"><i class="icon-envelope"></i> 用户留言 <?php if($result != 0): ?><span class="badge message-new-all bg-yellow"><?php echo $result; ?></span><?php endif; ?></a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li> -->
		<!-- <li class="<?php if($pageName == 'information'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toInformation', array('pageName' => 'information'));?>"><i class="icon-list-alt"></i> 资讯管理</a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>

		<li class="<?php if($pageName == 'download'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toDownload', array('pageName' => 'download'));?>"><i class="icon-download-alt"></i> 资料下载</a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>

		<li class="<?php if($pageName == 'frontend'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a class="first-level-menu" href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend'));?>"><i class="icon-desktop"></i> 前台管理</a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
			<div class="second-level-menu frontend">
				<div class="relative">
					<p><a href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend', 'isChild' => 'true', 'childName' => 'homepage'));?>">首页</a></p>
				</div>
				<div class="relative">
					<p><a href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend', 'isChild' => 'true', 'childName' => 'curriculum'));?>">课程</a></p>
				</div>
				<div class="relative">
					<p><a href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend', 'isChild' => 'true', 'childName' => 'about'));?>">关于美高</a></p>
				</div>
				<div class="relative">
					<p><a href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend', 'isChild' => 'true', 'childName' => 'partner'));?>">合作伙伴</a></p>
				</div>
				<div class="relative">
					<p><a href="<?php echo U('Admin/toFrontend', array('pageName' => 'frontend', 'isChild' => 'true', 'childName' => 'center'));?>">个人中心</a></p>
				</div>
			</div>
		</li> -->

		<?php if(session('level') == 10): ?>
			<li class="<?php if($pageName == 'accountManage'){ echo 'active'; } ?>">
				<div class="relative first-level">
					<p><a href="<?php echo U('Admin/toAccountManage', array('pageName' => 'accountManage'));?>"><i class="icon-group"></i> 账号管理</a></p>
					<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
				</div>
			</li>
		<?php endif; ?>
	</ul>
</div>


<script>
(function ($) {
	$(function() {
		$('.first-level-menu').on('click', function() {
			var isAcitve = $(this).hasClass('active');
			if (isAcitve) {
				$(this).removeClass('active');
				$(this).closest('li').find('.second-level-menu').css({'height': '0'});
				$(this).closest('li').find('.second-level-menu').removeClass('active');
				$(this).parent().next().find('.arrow').removeClass('active');
			}else {
				var secondCount = $(this).closest('li').find('.second-level-menu').children().length;
				var secondheight = $(this).closest('li').find('.second-level-menu div').height();
				var curHeight = secondCount * secondheight;
				$(this).addClass('active');
				$(this).closest('li').find('.second-level-menu').css({'height': curHeight});
				$(this).closest('li').find('.second-level-menu').addClass('active');
				$(this).parent().next().find('.arrow').addClass('active');
			}

			return false;
		});
	});
})(jQuery);
</script>
				<div class="content pull-right">
					<div class="account-manage">
						<h1 class="headline text-center bold">账号管理</h1>

						<div class="tools">
							<ul>
								<?php if(session('level') == 10): ?>
									<li>
										<p><a class="btn btn-tools btn-add-account" href="#"><i class="icon-plus-sign-alt"></i> 添加账号</a></p>
									</li>
								<?php endif; ?>
							</ul>
						</div>

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<td width="10%">Id</td>
									<td width="25%">手机号</td>
									<td width="25%">姓名</td>
									<td width="25%">等级</td>
									<td width="15%">操作</td>
								</tr>
							</thead>
							<tbody>
								<?php  $result = A('Admin'); $result = $result -> selectAll('Manager'); forEach($result as $key => $val): ?>
								 <tr>
								 	<td><?php echo $val['id']; ?></td>
								 	<td><?php echo $val['account']; ?></td>
								 	<td><?php echo $val['name']; ?></td>
								 	<td>
								 		<?php if($val['level'] == 1){ echo '普通用户'; } ?>
								 		<?php if($val['level'] == 8){ echo '管理员'; } ?>
								 		<?php if($val['level'] == 10){ echo '超级管理员'; } ?>
								 	</td>
								 	<td>
								 		<?php if(session('level') == 10): ?>
								 			<!-- <span><a href="<?php echo U('Admin/accountDelete', array('id' => $val['id']));?>"><i class="icon-trash"></i></a></span> -->
								 			<span><a title="删除" id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['account'] ?>" class="jagoFancybox-delete" href="#"><i class="icon-trash"></i></a></span>
								 		<?php endif ?>
								 	</td>
								 </tr>
								<?php endforeach; ?>
							</tbody>
						</table>

						<div class="jagoFancybox">
							<div class="cus-table">
								<div class="cus-table-cell">
									<div class="box box-1">
										<div class="add-account panel panel-default">
											<div class="panel-heading">
												<h4 class="title">添加账号 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
											</div>
											<div class="panel-body">
												<form class="adminLogin" role="form" action="<?php echo U('Admin/accountAdd');?>" method="POST">
												  <div class="form-group">
												    <label for="account">手机号</label>
												    <input name="account" type="text" class="form-control" id="account" placeholder="Phone Number" autocomplete="off" required="">
												  </div>

												  <div class="form-group">
												    <label for="email">邮箱</label>
												    <input name="email" type="email" class="form-control" id="email" placeholder="Phone Number" autocomplete="off" required="">
												  </div>

												  <div class="form-group">
												    <label for="name">姓名</label>
												    <input name="name" type="text" class="form-control" id="name" placeholder="Name" autocomplete="off" required="">
												  </div>

												  <div class="form-group">
												    <label for="password">密码</label>
												    <input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required="">
												  </div>

												  <div class="form-group">
												    <label for="password">等级</label>
												    <select class="form-control" name="level" required="true">
													  <!-- <option value="1">普通用户</option> -->
													  <option value="8">管理员</option>
													  <option value="10">超级管理员</option>
													</select>
												  </div>
												  <div class="text-center">
												  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 添加账号</button>
												  	<p class="error-msg red pull-right"></p>
												  </div>
												</form>
											</div>
										</div>
									</div>

									<div class="box box-2">
										<div class="jagoFancybox-confirm-ctn">
											<div class="jagoFancybox-head">
												<h4 class="title">删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
											</div>
											<form action="<?php echo U('Admin/accountDelete');?>">
												<div class="jagoFancybox-body">
													<p class="jagoFancybox-headline">是否删除?</p>
													<p class="jagoFancybox-content bold"></p>
													<div class="none">
														<input type="text" name="deleteId">
													</div>
												</div>
												<div class="jagoFancybox-btn">
													<button type="submit" class="btn btn-primary pull-left" href="#">确认</button>
													<a class="btn btn-default pull-right jagoFancybox-cancel" href="#">取消</a>
												</div>
											</form>											
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<style>
						table.table thead tr td { font-weight: bold; }
						.jagoFancybox .box { width: 20%; left: 40%; }
					</style>

					<script>
					(function ($) {
						$(function() {
							// tools add account
							$('.btn-add-account').on('click', function() {
								$('.jagoFancybox').addClass('active');
								$('.jagoFancybox .box-1').addClass('active');
							});

							// delete
							$('.jagoFancybox-delete').on('click', function() {
								var id = $(this).attr('id');
								var content = $(this).data('tag');
								// console.log(title);
								$('.jagoFancybox').addClass('active');
								$('.jagoFancybox .box-2').addClass('active');
								
								$('.jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
								$('.jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
								$('.jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
								return false;
							});
						});
					})(jQuery);
					</script>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>