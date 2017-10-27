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

		<style>
			.detail-control { margin-top: 5px; }
			.detail-control .detail-add { width: 50%; margin-right: 10px; }
			.member-entry { margin-top: 5px; display: inline-block; width: 100%; }
			.member-entry input { width: 27%; margin-right: 3.33%; }
		</style>
		<style>
			.menu-create-entry { margin-bottom: 25px; }
			.menu-create-entry .title { border-left: 5px solid #aaa; padding-left: 5px; border-top-left-radius: 3px; border-bottom-left-radius: 3px; }

			.current-menu-entry { transition: all 0.3s ease-in-out; padding: 5px 0; box-sizing: border-box; }
			.current-menu-entry p { font-size: 14px; }
			.current-menu-entry .right span a { padding: 0 5px; display: inline-block; }
			.current-menu-entry:hover { background: #ddd; }
			.current-menu-entry:last-child { margin-bottom: 10px; }
		</style>
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
					<div class="information">
						<h1 class="headline text-center bold">酒店管理 - <span class="h1-small">酒店查看</span></h1>
						<?php  $Dao = A('Admin'); $hotelId = $_GET['pageId']; $result = $Dao -> selectOne('Hotel', $_GET['pageId']); $result = $result[0]; $homeStyleIdArr = explode('、', $result['home_style_id']); $homeStyleArr = array(); foreach($homeStyleIdArr as $key => $val) { $homeStyle = $Dao -> selectOne('Hotel_home_style', $val); $homeStyle = $homeStyle[0]; if ($key == 0) { $themeImage = $homeStyle['image']; $themeId = $homeStyle['id']; } array_push($homeStyleArr, $homeStyle); } $homeMemberArr = array(); $homeMemberIdArr = explode('、', $homeStyleArr[0]['member_id']); foreach($homeMemberIdArr as $key => $val) { $homeMember = $Dao -> selectOne('Hotel_member', $val); $homeMember = $homeMember[0]; array_push($homeMemberArr, $homeMember); } ?>

						<div class="tools">
							<ul>
								<li>
									<p><a class="btn btn-tools btn-theme-add" href="#"><i class="icon-plus-sign-alt"></i> 主题添加</a></p>
								</li>
								<li>
									<p><a class="btn btn-tools btn-theme-setting" href="#"><i class="icon-cogs"></i> 主题设置</a></p>
								</li>
								<li>
									<p><a class="btn btn-tools btn-member-add-single" href="#"><i class="icon-plus-sign-alt"></i> 会员类别添加</a></p>
								</li>
								<li>
									<p><a class="btn btn-tools btn-member-setting" href="#"><i class="icon-cogs"></i> 会员类别设置</a></p>
								</li>
							</ul>
						</div>

						<form class="form-horizontal" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/hotelUpdate', array('id' => $result['id']));?>" method="POST">
							<input style="display: none;" type="text" name="hotelId" value="<?php echo $hotelId; ?>">
							<div class="submit-ctn mg-top">
								<div class="left pull-left">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="name"><p>酒店名</p></label>
										<div class="col-sm-10">
											<input name="name" id="name" type="text" readonly="readonly" class="form-control" placeholder="酒店名" autocomplete="off" required value="<?php echo $result['name']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="publish_time"><p>所属区域</p></label>
										<div class="col-sm-10">
											<select class="form-control" name="area" required="true" disabled>
											  <option <?php if($result['area'] == 530103){ echo 'selected'; } ?> value="530103 盘龙区">盘龙区</option>
											  <option <?php if($result['area'] == 530102){ echo 'selected'; } ?> value="530102 五华区">五华区</option>
											  <option <?php if($result['area'] == 530111){ echo 'selected'; } ?> value="530111 官渡区">官渡区</option>
											  <option <?php if($result['area'] == 530112){ echo 'selected'; } ?> value="530112 西山区">西山区</option>
											  <option <?php if($result['area'] == 530113){ echo 'selected'; } ?> value="530113 东川区">东川区</option>
											  <option <?php if($result['area'] == 530181){ echo 'selected'; } ?> value="530181 安宁市">安宁市</option>
											  <option <?php if($result['area'] == 530114){ echo 'selected'; } ?> value="530114 呈贡县">呈贡县</option>
											  <option <?php if($result['area'] == 530115){ echo 'selected'; } ?> value="530115 晋宁县">晋宁县</option>
											  <option <?php if($result['area'] == 530124){ echo 'selected'; } ?> value="530124 富民县">富民县</option>
											  <option <?php if($result['area'] == 530125){ echo 'selected'; } ?> value="530125 宜良县">宜良县</option>
											  <option <?php if($result['area'] == 530127){ echo 'selected'; } ?> value="530127 嵩明县">嵩明县</option>
											  <option <?php if($result['area'] == 530126){ echo 'selected'; } ?> value="530126 石林彝族自治县">石林彝族自治县</option>
											  <option <?php if($result['area'] == 530128){ echo 'selected'; } ?> value="530128 禄劝彝族苗族自治县">禄劝彝族苗族自治县</option>
											  <option <?php if($result['area'] == 530129){ echo 'selected'; } ?> value="530129 寻甸回族彝族自治县">寻甸回族彝族自治县</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="address"><p>地址</p></label>
										<div class="col-sm-10">
											<input name="address" id="address" type="text" readonly="readonly" class="form-control" placeholder="地址" autocomplete="off" required value="<?php echo $result['address']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="phone"><p>电话</p></label>
										<div class="col-sm-10">
											<input name="phone" id="phone" type="text" readonly="readonly" class="form-control" placeholder="电话" autocomplete="off" required value="<?php echo $result['phone']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="phone"><p>起价</p></label>
										<div class="col-sm-10">
											<input name="price" id="price" type="text" readonly="readonly" class="form-control" placeholder="起价" autocomplete="off" required value="<?php echo $result['price']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="image"><p>图片</p></label>
										<div class="col-sm-10">
											<input name="photo" id="image" type="file" class="form-control" placeholder="图片" autocomplete="off" disabled>
										</div>
										<div class="col-sm-10 pull-right">
											<img style="width: 120px;" class="photo-ctn mg-top" src="/usedcar<?php echo $result['image']; ?>" alt="">
										</div>
									</div>
								</div>

								<div class="right pull-right">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="theme"><p>酒店主题</p></label>
										<div class="col-sm-10">
											<select class="form-control" name="theme" required="true" disabled>
												<?php foreach($homeStyleArr as $key => $val): ?>
													<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="detail"><p>酒店详情</p></label>
										<div class="col-sm-10">
											<input name="detail" id="detail" type="text" readonly="readonly" class="form-control" placeholder="酒店详情" autocomplete="off" required value="<?php echo $homeStyleArr[0]['spec']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="image_theme"><p>主题图片</p></label>
										<div class="col-sm-10">
											<input name="photo1" id="image_theme" type="file" class="form-control" placeholder="图片" autocomplete="off" disabled>
										</div>
										<div class="col-sm-10 pull-right">
											<img style="width: 120px;" class="photo1-ctn mg-top" src="/usedcar<?php echo $themeImage; ?>" alt="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="member"><p>会员类别</p></label>
										<div class="col-sm-10">
											<select class="form-control" name="member" required="true" disabled>
												<?php foreach($homeMemberArr as $key => $val): ?>
													<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="member_price"><p>会员价</p></label>
										<div class="col-sm-10">
											<input name="member_price" id="member_price" type="text" readonly="readonly" class="form-control" placeholder="会员价" autocomplete="off" required value="<?php echo $homeMemberArr[0]['price']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="member_detail"><p>会员详情</p></label>
										<div class="col-sm-10">
											<input name="member_detail" id="member_detail" type="text" readonly="readonly" class="form-control" placeholder="会员详情" autocomplete="off" required value="<?php echo $homeMemberArr[0]['spec']; ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="btn-ctn width-all text-center mg-top">
								<button type="button" class="btn btn-primary btn-edit" href="#"><p>编辑</p></button>
								<button type="submit" class="btn btn-primary btn-save none" disabled href="#"><p>保存</p></button>
								<a class="btn btn-default" href="<?php echo U('Admin/toHotel', array('pageName' => 'hotel'));?>"><p>返回</p></a>
							</div>
						</form>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="jagoFancybox">
			<div class="cus-table">
				<div class="cus-table-cell">
					<div class="box box-1">
						<div class="add-hotel panel panel-default">
							<div class="panel-heading">
								<h4 class="title">主题添加 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<form class="adminLogin" role="form" enctype="multipart/form-data" action="<?php echo U('Admin/hotelHomeStyleAdd');?>" method="POST">
								  <input style="display: none;" type="text" name="hotelId" value="<?php echo $hotelId; ?>">
								  <div class="form-group">
								    <label for="theme">酒店主题</label>
								    <input name="theme" type="text" class="form-control" id="theme" placeholder="酒店主题" autocomplete="off" required="">
								  </div>

								  <div class="form-group">
								    <label class="" for="theme_image">主题图片</label>
								    <input name="photo1" type="file" class="form-control" id="theme_image" placeholder="主题图片" autocomplete="off" required="">
								  </div>

								  <div class="form-group">
								    <label for="homestyle">酒店详情</label>
								    <input name="homestyle" type="text" class="form-control" id="homestyle" placeholder="酒店详情  (请在下方逐个添加)" autocomplete="off" readonly="readonly" required="">
								    <div class="detail-control">
								    	<input class="detail-add form-control col-sm-5" type="text" placeholder="详情在此输入">
								    	<button class="btn btn-detail-add btn-primary" href="#">添加</button>
								    	<button class="btn btn-detail-clear" href="#">清空</button>
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="member">会员类别添加</label>
								    <a class="btn btn-member-add btn-primary blk" href="#"><i class="icon-plus-sign-alt"> 加一条</i></a>
								    <div class="member-ctn">
									    <div class="member-entry">
									    	<input name="member_name1" class="member-name form-control col-sm-4" type="text" placeholder="会员价名称" required>
											<input name="member_detail1" class="member-detail form-control col-sm-4" type="text" placeholder="详情" required>
											<input name="member_price1" class="member-price form-control col-sm-4" type="text" placeholder="价格" required>
									    </div>
								    </div>
								  </div>

								  <div class="form-group">
								    <label for="price">起价</label>
								    <input name="price" type="price" class="form-control" id="price" placeholder="起价" autocomplete="off" required="">
								  </div>
								  
								  <div class="text-center">
								  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 添加</button>
								  	<p class="error-msg red pull-right"></p>
								  </div>
								</form>
							</div>
						</div>
					</div>

					<div class="box box-2">
						<div class="theme-setting-ctn panel panel-default">
							<div class="panel-heading">
								<h4 class="title">主题设置 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<div class="menu-create-entry">
									<h4 class="title bold">当前主题   <span class="p-small green lighter first-menu-ajax-return"></span></h4>
									<form class="first-level-create-form" style="max-height: 220px; overflow-y: auto;" role="form" action="" method="POST">
										<?php foreach($homeStyleArr as $key => $val): ?>
										  	<div class="inblk width-all current-menu-entry">
										  		<div class="col-sm-8 pull-left left">
										  			<input id="<?php echo $val['id']; ?>" class="form-control" type="text" value="<?php echo $val['name']; ?>" disabled>
										  		</div>
										  		<div class="col-sm-4 pull-right right">
										  			<span><a class="btn-edit" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-edit"></i></a></span>
										  			<span><a class="none btn-save" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-save"></i></a></span>
										  			<span><a class="btn-delete jagoFnacybox-delete-first-menu" href="#" data-hotelid="<?php echo $hotelId; ?>" data-tag="<?php echo $val['name']; ?>" data-id="<?php echo $val['id']; ?>"><i class="icon-trash"></i></a></span>
										  		</div>
										  	</div>
									  	<?php endforeach; ?>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="box box-3">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">主题类别删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/hotelThemeDelete');?>">
								<div class="jagoFancybox-body">
									<p class="jagoFancybox-headline">是否删除?</p>
									<p class="jagoFancybox-content bold"></p>
									<div class="none">
										<input type="text" name="deleteId">
										<input type="text" name="hotelId">
									</div>
								</div>
								<div class="jagoFancybox-btn">
									<button type="submit" class="btn btn-primary pull-left" href="#">确认</button>
									<a class="btn btn-default pull-right jagoFancybox-cancel" href="#">取消</a>
								</div>
							</form>
						</div>
					</div>

					<div class="box box-4">
						<div class="add-hotel panel panel-default">
							<div class="panel-heading">
								<h4 class="title">会员类别添加 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<form class="adminLogin" role="form" enctype="multipart/form-data" action="<?php echo U('Admin/hotelMemberAdd');?>" method="POST">
								   <input style="display: none;" type="text" name="hotelId" value="<?php echo $hotelId; ?>">
								   <div class="form-group width-all inblk">
									 <label class=" control-label" for="theme_member"><p>酒店主题</p></label>
									 <div class="">
										 <select class="form-control" name="theme_member" required="true">
											<?php foreach($homeStyleArr as $key => $val): ?>
												<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
											<?php endforeach; ?>
 										 </select>
 									 </div>
								  </div>

								  <div class="form-group">
								    <label for="member">会员类别添加</label>
								    <a class="btn member-add btn-member-add btn-primary blk" href="#"><i class="icon-plus-sign-alt"> 加一条</i></a>
								    <div class="member-ctn">
									    <div class="member-entry">
									    	<input name="member_name1" class="member-name form-control col-sm-4" type="text" placeholder="会员价名称" required>
											<input name="member_detail1" class="member-detail form-control col-sm-4" type="text" placeholder="详情" required>
											<input name="member_price1" class="member-price form-control col-sm-4" type="text" placeholder="价格" required>
									    </div>
								    </div>
								  </div>
								  
								  <div class="text-center">
								  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 添加</button>
								  	<p class="error-msg red pull-right"></p>
								  </div>
								</form>
							</div>
						</div>
					</div>

					<div class="box box-5">
						<div class="member-setting-ctn panel panel-default">
							<div class="panel-heading">
								<h4 class="title">会员类别设置 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<div class="menu-create-entry">
									<h4 class="title bold">当前类别   <span class="p-small green lighter member-ajax-return"></span></h4>
									<form class="first-level-create-form" style="max-height: 500px; overflow-y: auto;" role="form" action="" method="POST">
										<input style="display: none;" type="text" name="hotelId" value="<?php echo $hotelId; ?>">
									    <div class="form-group width-all inblk">
										  <label class=" control-label" for="theme_member"><p>酒店主题</p></label>
										  <div class="">
											  <select class="form-control" name="theme_member" required="true">
												<?php foreach($homeStyleArr as $key => $val): ?>
													<option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
												<?php endforeach; ?>
	 										  </select>
	 									  </div>
									    </div>
									    <div class="member-controller">
										<?php foreach($homeMemberArr as $key => $val): ?>
										  	<div class="inblk width-all current-menu-entry">
										  		<div class="col-sm-8 pull-left left">
										  			<input id="" class="member-<?php echo $val['id']; ?> form-control" type="text" value="<?php echo $val['name']; ?> (<?php echo $val['spec']; ?>) (<?php echo $val['price']; ?>)" disabled>
										  		</div>
										  		<div class="col-sm-4 pull-right right">
										  			<span><a class="btn-edit" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-edit"></i></a></span>
										  			<span><a class="none btn-save" href="#" data-id="<?php echo $val['id']; ?>"><i class="icon-save"></i></a></span>
										  			<span><a class="btn-delete member-controller-delete" href="#" data-homestyleid="<?php echo $themeId; ?>" data-tag="<?php echo $val['name']; ?> (<?php echo $val['spec']; ?>) (<?php echo $val['price']; ?>)" data-id="<?php echo $val['id']; ?>"><i class="icon-trash"></i></a></span>
										  		</div>
										  	</div>
									  	<?php endforeach; ?>
									  	</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="box box-6">
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">会员类别删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/hotelMemberDelete');?>">
								<div class="jagoFancybox-body">
									<p class="jagoFancybox-headline">是否删除?</p>
									<p class="jagoFancybox-content bold"></p>
									<div class="none">
										<input type="text" name="deleteId">
										<input type="text" name="homeStyleId">
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

		<script>
		(function ($) {
			$(function() {
				//theme change
				$('select[name="theme"]').on('change', function() {
					var homeStyleId = $(this).val();
					$.ajax({
						url: '<?php echo U("Admin/hotelSelectHomeStyleByIdAjaxReturn");?>',
						type: 'POST',
						data: {id: homeStyleId}
					}).done(function(res) {
						var idArr = res[0].member_id;
						var homeMemberArr = [];		//当前homestyle下的会员类别
						idArr = idArr.split('、');

						$('input[name="detail"]').val(res[0].spec);
						$('.photo1-ctn').attr('src', '/usedcar'+res[0].image);

						//清空
						$('select[name="member"]').html('');

						//添加
						idArr.forEach(function(val,key) {
							$.ajax({
								url: '<?php echo U("Admin/hotelSelectMemberByIdAjaxReturn");?>',
								type: 'POST',
								data: {id: val}
							}).done(function(res) {
								$('select[name="member"]').append(
									'<option value="'+ res[0].id +'">'+ res[0].name +'</option>'
								);

								if (key == 0) {
									$('input[name="member_price"]').val(res[0].price);
									$('input[name="member_detail"]').val(res[0].spec);
								}
							});
						});
					});
				});

				//member change
				$('select[name="member"]').on('change', function() {
					var id = $(this).val();
					$.ajax({
						url: '<?php echo U("Admin/hotelSelectMemberByIdAjaxReturn");?>',
						type: 'POST',
						data: {id: id}
					}).done(function(res) {
						$('input[name="member_price"]').val(res[0].price);
						$('input[name="member_detail"]').val(res[0].spec);
					});
				});

				//member setting select change
				$('select[name="theme_member"]').on('change', function() {
					var id = $(this).val();
					$.ajax({
						url: '<?php echo U("Admin/hotelSelectHomeStyleByIdAjaxReturn");?>',
						type: 'POST',
						data: {id: id}
					}).done(function(res) {
						var idArr = res[0].member_id;
						var homeMemberArr = [];		//当前homestyle下的会员类别
						idArr = idArr.split('、');
						$('.member-controller').html('');
						//添加
						idArr.forEach(function(val,key) {
							$.ajax({
								url: '<?php echo U("Admin/hotelSelectMemberByIdAjaxReturn");?>',
								type: 'POST',
								data: {id: val, theme_id: id}
							}).done(function(res) {
								res = res[0];
								$('.member-controller').append(
									'<div class="inblk width-all current-menu-entry">' +
								  		'<div class="col-sm-8 pull-left left">' +
								  			'<input id="" class="member-'+ res.id +' form-control" type="text" value="'+ res.name + ' ('+ res.spec +')' + ' ('+ res.price +')' + '" disabled>' +
								  		'</div>' +
								  		'<div class="col-sm-4 pull-right right">' +
								  			'<span><a class="btn-edit" href="#" data-id="'+ res.id +'"><i class="icon-edit"></i></a></span>' +
								  			'<span><a class="none btn-save" href="#" data-id="'+ res.id +'"><i class="icon-save"></i></a></span>' +
								  			'<span><a class="btn-delete member-controller-delete" href="#" data-homestyleid="'+ res.theme_id +'" data-tag="'+ res.name +'" data-id="'+ res.id +'"><i class="icon-trash"></i></a></span>' +
								  		'</div>' +
								  	'</div>'
								);
							});
						});
					});
				});

				//主题添加
				$('.btn-theme-add').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-1').addClass('active');
					return false;
				});

				//主题删除
				$('.btn-theme-setting').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-2').addClass('active');
					return false;
				});

				// 主题设置编辑
				$('.theme-setting-ctn .btn-edit').on('click', function() {
					var id = $(this).data('id');
					$('input#'+id).removeAttr('disabled');
					console.log('theme');

					$(this).addClass('none');
					$(this).parent().next().find('.btn-save').removeClass('none');
					return false;
				});
				// 主题设置保存
				$('.theme-setting-ctn .btn-save').on('click', function() {
					var that = $(this);
					var id = $(this).data('id');
					var theme_name = $('input#'+id).val();
					$.ajax({
						type: 'POST',
						url: '/usedcar/index.php/Home/Admin/hotelThemeNameUpdateAjaxReturn',
						data: {'id': id, 'theme_name': theme_name}
					}).done(function(res){
						if (res.status == 'success') {
							$('input#'+id).attr('disabled', '');
							$('.first-menu-ajax-return').html('会员类别更新成功!')
						}else {
							$('input#'+id).attr('disabled', '');
							$('.first-menu-ajax-return').html('未修改!')
						}
						that.addClass('none');
						that.parent().prev().find('.btn-edit').removeClass('none');
					});
					return false;
				});
				// 主题设置删除
				$('.jagoFnacybox-delete-first-menu').on('click', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');
					var hotelId = $(this).data('hotelid');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box').removeClass('active');
					$('.jagoFancybox .box-3').addClass('active');
					
					$('.box-3 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-3 .jagoFancybox-confirm-ctn input[name="hotelId"]').val(hotelId);
					$('.box-3 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-3 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				//会员类别添加
				$('.btn-member-add-single').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-4').addClass('active');
					return false;
				});

				//会员类别设置
				$('.btn-member-setting').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-5').addClass('active');
					return false;
				});
				// 会员类别设置编辑
				$('.member-controller').on('click', '.btn-edit', function() {
					var id = $(this).data('id');
					$('input.member-'+id).removeAttr('disabled');

					$(this).addClass('none');
					$(this).parent().next().find('.btn-save').removeClass('none');
					return false;
				});
				// 会员类别设置保存
				$('.member-controller').on('click', '.btn-save', function() {
					var that = $(this);
					var id = $(this).data('id');
					var member_name = $('input.member-'+id).val();
					$.ajax({
						type: 'POST',
						url: '/usedcar/index.php/Home/Admin/hotelMemberNameUpdateAjaxReturn',
						data: {'id': id, 'member_name': member_name}
					}).done(function(res){
						if (res.status == 'success') {
							$('input.member-'+id).attr('disabled', '');
							$('.member-ajax-return').html('会员类别更新成功!')
						}else {
							$('input.member-'+id).attr('disabled', '');
							$('.member-ajax-return').html('未修改!')
						}
						that.addClass('none');
						that.parent().prev().find('.btn-edit').removeClass('none');
					});
					return false;
				});
				// 会员类别设置删除
				$('.member-controller').on('click', '.member-controller-delete', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');
					var homeStyleId = $(this).data('homestyleid');
					// console.log(title);
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box').removeClass('active');
					$('.jagoFancybox .box-6').addClass('active');
					
					$('.box-6 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-6 .jagoFancybox-confirm-ctn input[name="homeStyleId"]').val(homeStyleId);
					$('.box-6 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-6 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				$('.btn-ctn .btn-edit').on('click', function() {
					//打开输入框
					$('.form-horizontal input,.form-horizontal textarea,.form-horizontal select').removeAttr('readonly');
					$('.form-horizontal input,.form-horizontal textarea,.form-horizontal select').removeAttr('disabled');

					//按钮更换
					$(this).addClass('none');
					$(this).next('.btn-save').removeClass('none');
					$(this).next('.btn-save').removeAttr('disabled');
					return false;
				});

				//酒店详情清空
				$('.btn-detail-clear').on('click', function() {
					$('input[name="homestyle"]').val('');

					return false;
				});

				//酒店详情添加按钮
				$('.btn.btn-detail-add').on('click', function() {
					var content = $('input.detail-add').val();
					var str;
					if (content != '') {
						str = $('input[name="homestyle"]').val();
						if (str == '') {
							str += content;
						}else {
							str += '、' + content;
						}						
						$('input[name="homestyle"]').val(str);
						$('input.detail-add').val('');
					}

					return false;
				});

				//酒店会员价加一条
				var memberAddHandle = 2;
				$('.btn-member-add').on('click', function() {
					$(this).next('.member-ctn').append(
						'<div class="member-entry"><input name="member_name'+ memberAddHandle +'" class="member-name form-control col-sm-4" type="text" placeholder="会员价名称"><input name="member_detail'+ memberAddHandle +'" class="member-detail form-control col-sm-4" type="text" placeholder="详情"><input name="member_price'+ memberAddHandle +'" class="member-price form-control col-sm-4" type="text" placeholder="价格"><div class="cus-table" style="width: auto; height: 34px;"><div class="cus-table-cell"><a class="btn-member-reduce" href="#"><i class="icon-minus" style="font-size: 18px;"></i></a></div></div></div>'
					);
					memberAddHandle++;
					return false;
				});

				//酒店会员价删一条
				$('.member-ctn').on('click', '.btn-member-reduce', function() {
					$(this).closest('.member-entry').remove();
					return false;
				});
			});
		})(jQuery);
		</script>
	</body>
</html>