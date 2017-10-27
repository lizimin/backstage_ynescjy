<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>美高后台管理</title>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="keywords" content="美高keywords" />
<meta name="description" content="美高英语学校描述">
<link rel="shortcut icon" href="/jiayoulong/Public/logo.png" type="image/x-icon" />
<link rel="stylesheet" href="/jiayoulong/Public/styles/reset.css">
<!-- <link rel="stylesheet" href="/jiayoulong/Public/styles/bootstrap.css"> -->
<link rel="stylesheet" href="/jiayoulong/Public/styles/bootstrap.min.css">
<!-- <link rel="stylesheet" href="/jiayoulong/Public/styles/bootstrap-theme.css"> -->
<link rel="stylesheet" href="/jiayoulong/Public/styles/bootstrap-theme.min.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/font-awesome.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/font-awesome-ie7.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/jquery-ui.min.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/jquery-ui.structure.min.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/jquery-ui.theme.min.css">
<link rel="stylesheet" href="/jiayoulong/Public/styles/main.css">
<script src="/jiayoulong/Public/scripts/jquery-3.1.1.min.js"></script>
<script src="/jiayoulong/Public/scripts/jquery-ui.min.js"></script>
<script src="/jiayoulong/Public/scripts/bootstrap.js"></script>
<script src="/jiayoulong/Public/scripts/jagoFunction.js"></script>
<script src="/jiayoulong/Public/scripts/main.js"></script>

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
		<img class="logo" src="/jiayoulong/Public/images/other/logo.png" alt="">
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
	.wrapper.admin .middle-content .sidebar ul li:hover .first-level .arrow i { color: #000 !important; }
	.wrapper.admin .middle-content .sidebar ul li.active .badge.bg-yellow,
	.wrapper.admin .middle-content .sidebar ul li:hover .badge.bg-yellow { background: #000; color: #fed926; }
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

		<?php  $Dao = A('Admin'); $result = 7; ?>
		<li class="<?php if($pageName == 'message'){ echo 'active'; } ?>">
			<div class="relative first-level">
				<p><a href="<?php echo U('Admin/toMessage', array('pageName' => 'message'));?>"><i class="icon-envelope"></i> 用户留言 <?php if($result != 0): ?><span class="badge message-new-all bg-yellow"><?php echo $result; ?></span><?php endif; ?></a></p>
				<div class="arrow-right-ctn"><div class="cus-table"><div class="cus-table-cell"><div class="arrow"><i class="icon-angle-right white"></i></div></div></div></div>
			</div>
		</li>
		<li class="<?php if($pageName == 'information'){ echo 'active'; } ?>">
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
		</li>

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
					<div class="information cus-list">
						<h1 class="headline text-center bold">资讯管理</h1>
						<div class="tools">
							<ul>
								<?php  $Dao = A('Admin'); $result = $Dao -> selectAll('Information_second_menu'); if (empty($result)) { $hasSecondMenu = false; }else { $hasSecondMenu = true; } ?>
								<li>
									<p><a class="btn btn-tools btn-add-information" <?php if(!$hasSecondMenu){ echo 'disabled'; } ?> href="<?php echo U('Admin/toInformation', array('isChild' => 'true', 'childName' => 'add_information', 'pageName' => 'information'));?>"><i class="icon-plus-sign-alt"></i> 资讯添加</a></p>
								</li>
								<li>
									<p><a class="btn btn-tools btn-add-faq" href="<?php echo U('Admin/toInformation', array('isChild' => 'true', 'childName' => 'add_faq', 'pageName' => 'information'));?>"><i class="icon-plus-sign-alt"></i> FAQ添加</a></p>
								</li>
								<li>
									<p><a class="btn btn-tools btn-first-level-menu" href="#"><i class="icon-th-large"></i> 一级分类</a></p>
								</li>

								<?php  $result = $Dao -> selectAll('Information_first_menu'); if (empty($result)) { $hasFirstMenu = false; }else { $hasFirstMenu = true; } ?>
								<li>
									<p><a class="btn btn-tools btn-second-level-menu" <?php if(!$hasFirstMenu){ echo 'disabled'; } ?> href="#"><i class="icon-reorder"></i> 二级分类</a></p>
								</li>
							</ul>
						</div>

						<div class="inblk width-all content-ctn">
							<div class="content-information">
								<h4 class="bold">资讯</h4>
								<?php  $result = $Dao -> informationSelect(); foreach($result as $key => $val): ?>
									<div class="entry inblk width-all">
										<div class="left col-sm-9 pull-left">
											<a href="<?php echo U('Admin/toInformation', array('isChild' => 'true', 'childName' => 'view_information', 'pageName' => 'information', 'pageId' => $val['id']));?>">
												<p><?php echo $val['title']; ?></p>
											</a>
										</div>
										<div class="right col-sm-3 pull-right">
											<span><a id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['title']; ?>" class="jagoFancybox-delete-information" href="#"><i class="icon-trash"></i></a></span>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<div class="content-faq">
								<h4 class="bold">FAQ</h4>

								<?php  $result = $Dao -> faqSelect(); foreach($result as $key => $val): ?>
									<div class="entry inblk width-all">
										<div class="left col-sm-9 pull-left">
											<a href="<?php echo U('Admin/toInformation', array('isChild' => 'true', 'childName' => 'view_faq', 'pageName' => 'information', 'pageId' => $val['id']));?>">
												<p><?php echo $val['title']; ?></p>
											</a>
										</div>
										<div class="right col-sm-3 pull-right">
											<span><a id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['title']; ?>" class="jagoFancybox-delete-faq" href="#"><i class="icon-trash"></i></a></span>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="jagoFancybox">
			<div class="cus-table">
				<div class="cus-table-cell">
					<div class="box box-1">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">资讯删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/informationDelete');?>">
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

					<div class="box box-2">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">FAQ删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/faqDelete');?>">
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

					<div class="box box-3">
						<div class="first-level-create-ctn panel panel-default">
							<div class="panel-heading">
								<h4 class="title">资讯一级分类 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<div class="menu-create-entry">
									<h4 class="title bold">当前分类   <span class="p-small green lighter first-menu-ajax-return"></span></h4>
									<form class="first-level-create-form" style="max-height: 130px; overflow-y: auto;" role="form" action="" method="POST">
										<?php  $result = $Dao -> selectAll('Information_first_menu'); foreach($result as $key => $val): ?>
										  	<div class="inblk width-all current-menu-entry">
										  		<div class="col-sm-8 pull-left left">
										  			<input id="<?php echo $val['id']; ?>" class="form-control" type="text" value="<?php echo $val['menu_name']; ?>" disabled>
										  		</div>
										  		<div class="col-sm-4 pull-right right">
										  			<span><a class="btn-edit" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-edit"></i></a></span>
										  			<span><a class="none btn-save" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-save"></i></a></span>
										  			<span><a class="btn-delete jagoFnacybox-delete-first-menu" href="#" data-tag="<?php echo $val['menu_name']; ?>" data-id="<?php echo $val['id']; ?>"><i class="icon-trash"></i></a></span>
										  		</div>
										  	</div>
									  	<?php endforeach; ?>
									</form>
								</div>
								<div class="menu-create-entry">
									<h4 class="title bold">创建新分类</h4>
									<form class="first-level-create-form" role="form" action="<?php echo U('Admin/firstLevelMenuCreate');?>" method="POST">
									  <div class="form-group">
									    <label class="lighter" for="menu_name">分类名称</label>
									    <input name="menu_name" type="text" class="form-control" id="menu_name" placeholder="分类名称" autocomplete="off" required="">
									  </div>

									  <div class="text-center">
									  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 创建</button>
									  	<p class="error-msg red pull-right"></p>
									  </div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="box box-4">
						<div class="second-level-create-ctn panel panel-default">
							<div class="panel-heading">
								<h4 class="title">资讯二级分类 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<div class="menu-create-entry">
									<h4 class="title bold">当前分类   <span class="p-small green lighter second-menu-ajax-return"></span></h4>
									<form class="second-level-create-form" style="max-height: 130px; overflow-y: auto;" role="form" action="" method="POST">
										<?php  $result = $Dao -> selectAll('Information_second_menu'); foreach($result as $key => $val): ?>
										  	<div class="inblk width-all current-menu-entry">
										  		<div class="col-sm-8 pull-left left">
										  			<input id="<?php echo $val['id']; ?>" class="form-control" type="text" value="<?php echo $val['menu_name']; ?>" disabled>
										  		</div>
										  		<div class="col-sm-4 pull-right right">
										  			<span><a class="btn-edit" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-edit"></i></a></span>
										  			<span><a class="none btn-save" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-save"></i></a></span>
										  			<span><a class="btn-delete jagoFnacybox-delete-second-menu" href="#" data-tag="<?php echo $val['menu_name']; ?>" data-id="<?php echo $val['id']; ?>"><i class="icon-trash"></i></a></span>
										  		</div>
										  	</div>
									  	<?php endforeach; ?>
									</form>
								</div>
								<div class="menu-create-entry">
									<h4 class="title bold">创建新分类</h4>
									<form class="second-level-create-form" role="form" action="<?php echo U('Admin/secondLevelMenuCreate');?>" method="POST">
									  <div class="form-group">
									    <label class="lighter" for="menu_name">分类名称</label>
									    <input name="menu_name" type="text" class="form-control" id="menu_name" placeholder="分类名称" autocomplete="off" required="">
									  </div>

									  <div class="form-group">
									    <label for="first_menu_id">所属一级分类</label>
									    <select class="form-control" name="first_menu_id" id="first_menu_id">
									    	<!-- <?php  $result = $Dao -> selectAll('Information_first_menu'); foreach($result as $key => $val): ?>
									    		<option value="<?php echo $val['id']; ?>"><?php echo $val['menu_name']; ?></option>
									    	<?php endforeach ?> -->
									    </select>
									  </div>

									  <div class="text-center">
									  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 创建</button>
									  	<p class="error-msg red pull-right"></p>
									  </div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="box box-5">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">一级分类删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/firstLevelMenuDelete');?>">
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

					<div class="box box-6">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">二级分类删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/secondLevelMenuDelete');?>">
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

		<style>
			.menu-create-entry { margin-bottom: 25px; }
			.menu-create-entry .title { border-left: 5px solid #aaa; padding-left: 5px; border-top-left-radius: 3px; border-bottom-left-radius: 3px; }

			.current-menu-entry { transition: all 0.3s ease-in-out; padding: 5px 0; box-sizing: border-box; }
			.current-menu-entry p { font-size: 14px; }
			.current-menu-entry .right span a { padding: 0 5px; display: inline-block; }
			.current-menu-entry:hover { background: #ddd; }
			.current-menu-entry:last-child { margin-bottom: 10px; }
		</style>
	
		<script>
		(function ($) {
			$(function() {
				$('.jagoFancybox-delete-information').on('click', function() {
					var id = $(this).attr('id');
					var content = $(this).data('tag');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-1').addClass('active');
					
					$('.box-1 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				$('.jagoFancybox-delete-faq').on('click', function() {
					var id = $(this).attr('id');
					var content = $(this).data('tag');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-2').addClass('active');
					
					$('.box-2 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-2 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-2 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				$('.btn-first-level-menu').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-3').addClass('active');

					return false;
				});

				$('.btn-second-level-menu').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-4').addClass('active');

					$.ajax({
						type: 'POST',
						url: '/jiayoulong/index.php/Home/Admin/selectAllAjaxReturn',
						data: {'tableName': 'Information_first_menu'}
					}).done(function(res){
						$('#first_menu_id').html('');
						res.forEach(function(val) {
							// console.log('<option value="' + val['id'] +'">' + val['menu_name'] + '</option>');
							$('#first_menu_id').append(
								'<option value="' + val['id'] +'">' + val['menu_name'] + '</option>'
							);
						});
						// console.log(res);
					});

					return false;
				});

				// 一级分类编辑
				$('.first-level-create-ctn .btn-edit').on('click', function() {
					var id = $(this).data('id');
					$('input#'+id).removeAttr('disabled');

					$(this).addClass('none');
					$(this).parent().next().find('.btn-save').removeClass('none');
					return false;
				});
				// 一级分类保存
				$('.first-level-create-ctn .btn-save').on('click', function() {
					var that = $(this);
					var id = $(this).data('id');
					var menu_name = $('input#'+id).val();
					$.ajax({
						type: 'POST',
						url: '/jiayoulong/index.php/Home/Admin/firstLevelMenuUpdate',
						data: {'id': id, 'menu_name': menu_name}
					}).done(function(res){
						if (res.status == 'success') {
							$('input#'+id).attr('disabled', '');
							$('.first-menu-ajax-return').html('分类更新成功!')
						}else {
							$('input#'+id).attr('disabled', '');
							$('.first-menu-ajax-return').html('未修改分类名!')
						}
						that.addClass('none');
						that.parent().prev().find('.btn-edit').removeClass('none');
					});
					return false;
				});
				// 一级分类删除
				$('.jagoFnacybox-delete-first-menu').on('click', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box').removeClass('active');
					$('.jagoFancybox .box-5').addClass('active');
					
					$('.box-5 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-5 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-5 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				// 二级分类编辑
				$('.second-level-create-ctn .btn-edit').on('click', function() {
					var id = $(this).data('id');
					$('input#'+id).removeAttr('disabled');

					$(this).addClass('none');
					$(this).parent().next().find('.btn-save').removeClass('none');
					return false;
				});
				// 二级分类保存
				$('.second-level-create-ctn .btn-save').on('click', function() {
					var that = $(this);
					var id = $(this).data('id');
					var menu_name = $('input#'+id).val();
					$.ajax({
						type: 'POST',
						url: '/jiayoulong/index.php/Home/Admin/secondLevelMenuUpdate',
						data: {'id': id, 'menu_name': menu_name}
					}).done(function(res){
						if (res.status == 'success') {
							$('input#'+id).attr('disabled', '');
							$('.second-menu-ajax-return').html('分类更新成功!')
						}else {
							$('input#'+id).attr('disabled', '');
							$('.second-menu-ajax-return').html('未修改分类名!')
						}
						that.addClass('none');
						that.parent().prev().find('.btn-edit').removeClass('none');
					});
					return false;
				});
				// 二级分类删除
				$('.jagoFnacybox-delete-second-menu').on('click', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box').removeClass('active');
					$('.jagoFancybox .box-6').addClass('active');
					
					$('.box-6 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-6 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-6 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});
			});
		})(jQuery);
		</script>
	</body>
</html>