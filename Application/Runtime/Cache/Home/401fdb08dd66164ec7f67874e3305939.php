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

			.photo-ctn { margin-top: 0; }
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
						<h1 class="headline text-center bold">汽车管理 - <span class="h1-small">车辆查看</span></h1>
						<?php  $Dao = A('Admin'); $viewId = $_GET['pageId']; $result = $Dao -> carSelectById($viewId); $result = $result[0]; $cityId = $result['city_id']; $imagesArr = explode(' | ', $result['images']); ?>

						<!-- 图片添加form -->
						<form class="imageAddSubmit" style="display: none;" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/carImageAdd', array('id' => $result['id']));?>" method="POST">
							<input name="photo" id="image" type="file" class="form-control" placeholder="图片" autocomplete="off">
						</form>

						<!-- 图片删除form -->
						<form class="imageDeleteSubmit" style="display: none;" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/carImageDelete', array('id' => $result['id']));?>" method="POST">
							<input name="imageDeleteId" type="text" class="form-control" value="<?php echo $result['id']; ?>" autocomplete="off">
							<input name="imageDeleteUrl" type="text">
						</form>

						<!-- 图片编辑form -->
						<form class="imageEditSubmit" style="display: none;" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/carImageEdit', array('id' => $result['id']));?>" method="POST">
							<input id="imageEditId" name="imageEditId" type="file" class="form-control" placeholder="图片" value="<?php echo $result['id']; ?>aaa" autocomplete="off">
							<input name="imageEditUrl" type="text">
						</form>

						<!-- 车辆信息form -->
						<form class="form-horizontal" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/carUpdate', array('id' => $result['id']));?>" method="POST">
							<input style="display: none;" type="text" name="viewId" value="<?php echo $viewId; ?>">
							<div class="submit-ctn mg-top">
								<div class="left pull-left">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="publish_time"><p>发布时间</p></label>
										<div class="col-sm-10">
											<input name="publish_time" id="publish_time" type="text" readonly="readonly" class="form-control" placeholder="发布时间" autocomplete="off" required value="<?php echo $result['publish_time']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="city"><p>城市</p></label>
										<div class="col-sm-10">
											<select class="form-control tx-city allow" name="city" required="true" disabled>
											  
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="category"><p>类别</p></label>
										<div class="col-sm-10">
											<select class="form-control allow" name="category" required="true" disabled>
											  <option <?php if($result['category'] == 1){ echo 'selected'; } ?> value="1">新车</option>
											  <option <?php if($result['category'] == 2){ echo 'selected'; } ?> value="2">二手车</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="brand_id"><p>品牌</p></label>
										<div class="col-sm-10">
											<select class="form-control brandSelect allow" name="brand_id" required="true" disabled>
											  <?php  $brandArr = $Dao -> carBrandSelectAll(); foreach($brandArr as $key => $val): ?>
												  <option <?php if($result['brand_id'] == $val['id']){ echo 'selected'; $styleId = $val['id']; } ?> value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
										 	  <?php endforeach; ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="style_id"><p>型号</p></label>
										<div class="col-sm-10">
											<select class="form-control styleSelect allow" name="style_id" required="true" disabled>
											  <?php  $styleArr = $Dao -> carStyleSelectByBrandId($result['brand_id']); foreach($styleArr as $key => $val): ?>
												  <option <?php if($result['style_id'] == $val['id']){ echo 'selected'; } ?> value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
										 	  <?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="buy_time"><p>购车年月</p></label>
										<div class="col-sm-10">
											<input name="buy_time" id="buy_time" type="text" readonly="readonly" class="form-control allow" placeholder="购车年月" autocomplete="off" required value="<?php echo $result['buy_time']; ?>">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label" for="cost_price"><p>购车总价</p></label>
										<div class="col-sm-10">
											<input name="cost_price" id="cost_price" type="number" readonly="readonly" class="form-control allow" placeholder="购车总价" autocomplete="off" required value="<?php echo $result['cost_price']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="price"><p>售价</p></label>
										<div class="col-sm-10">
											<input name="price" id="price" type="number" readonly="readonly" class="form-control allow" placeholder="售价" autocomplete="off" required value="<?php echo $result['price']; ?>">
										</div>
									</div>
								</div>

								<div class="right pull-right">
									<div class="form-group">
										<label class="col-sm-2 control-label" for="color"><p>车辆颜色</p></label>
										<div class="col-sm-10">
											<input name="color" id="color" type="text" readonly="readonly" class="form-control allow" placeholder="车辆颜色" autocomplete="off" required value="<?php echo $result['color']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="output"><p>排量</p></label>
										<div class="col-sm-10">
											<input name="output" id="output" type="text" readonly="readonly" class="form-control allow" placeholder="排量" autocomplete="off" required value="<?php echo $result['output']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="mileage"><p>里程</p></label>
										<div class="col-sm-10">
											<input name="mileage" id="mileage" type="number" readonly="readonly" class="form-control allow" placeholder="里程" autocomplete="off" required value="<?php echo $result['mileage']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="detail"><p>详情</p></label>
										<div class="col-sm-10">
											<input name="detail" id="detail" type="text" readonly="readonly" class="form-control allow" placeholder="详情" autocomplete="off" required value="<?php echo $result['detail']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="situation"><p>保养情况</p></label>
										<div class="col-sm-10">
											<input name="situation" id="situation" type="text" readonly="readonly" class="form-control allow" placeholder="保养情况" autocomplete="off" required value="<?php echo $result['situation']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="factory"><p>生产厂商</p></label>
										<div class="col-sm-10">
											<input name="factory" id="factory" type="text" readonly="readonly" class="form-control allow" placeholder="生产厂商" autocomplete="off" required value="<?php echo $result['factory']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="advantage"><p>配置亮点</p></label>
										<div class="col-sm-10">
											<input name="advantage" id="advantage" type="text" readonly="readonly" class="form-control allow" placeholder="配置亮点" autocomplete="off" required value="<?php echo $result['advantage']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="image"><p>图片</p></label>
										<div class="col-sm-10">
											
										</div>
										<div class="col-sm-10 pull-right">
											<div class="image-control-ctn">
												<?php  foreach($imagesArr as $key => $val): ?>
												 	<div class="image-control inblk relative">
												 		<img style="width: 120px; height: 120px;" class="photo-ctn mg-top" src="/usedcar<?php echo $val; ?>" alt="">
												 		<div class="image-control-handle">
												 			<div class="cus-table">
												 				<div class="cus-table-cell">
												 					<div class="entry">
												 						<p class="btn-image-edit" data-url="<?php echo $val; ?>" title="编辑"><i class="icon-edit"></i></p>
												 					</div>
												 					<div class="entry">
												 						<p class="btn-image-delete" data-url="<?php echo $val; ?>" title="删除"><i class="icon-trash"></i> </p>
												 					</div>
												 				</div>
												 			</div>
												 		</div>
												 	</div>
												<?php endforeach; ?>
											</div>
											<div class="image-control-add active" title="添加图片"><p>+</p></div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-ctn width-all text-center mg-top">
								<button type="button" class="btn btn-primary btn-edit" href="#"><p>编辑</p></button>
								<button type="submit" class="btn btn-primary btn-save none" disabled href="#"><p>保存</p></button>
								<a class="btn btn-default" href="<?php echo U('Admin/toCar', array('pageName' => 'car'));?>"><p>返回</p></a>
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
					
				</div>
			</div>
		</div>

		<script>
		(function ($) {
			$(function() {
				cityAdd();

				//car----------------------------------------------------------------------
				//选择品牌
				$('select.brandSelect').on('change', function() {
					var brand_id = $(this).val();
					$.ajax({
						url: '<?php echo U("Admin/carStyleSelectByIdAjaxReturn");?>',
						type: 'POST',
						data: {brand_id: brand_id}
					}).done(function(res) {
						if (res) {
							$('select.styleSelect').html('');
							res.forEach(function($val, $key) {
								$('select.styleSelect').append(
									'<option value="'+ $val.id +'">'+ $val.name +'</option>'
								);
							});
						}
					});
				});

				//点击图片添加
				$('.image-control-add').on('click', function() {
					var length = $('.image-control-ctn >div').length;
					if (length >= 6) {
						cusAlert('warning', '最多只能上传6张图片!');
					}else {
						$('#image').click();
					}
				});

				//图片上传
				$('#image').on('change', function() {
					$('.imageAddSubmit').submit();
				});

				//图片删除
				$('.btn-image-delete').on('click', function() {
					var length = $('.image-control-ctn >div').length;
					if (length <= 1) {
						cusAlert('warning', '至少要有一张图片!');
					}else {
						var imageDeleteUrl = $(this).data('url');
						$('input[name="imageDeleteUrl"]').val(imageDeleteUrl);
						$('.imageDeleteSubmit').submit();
					}
				});

				//图片编辑
				$('.btn-image-edit').on('click', function() {
					var imageEditUrl = $(this).data('url');
					$('input[name="imageEditUrl"]').val(imageEditUrl);
					$('#imageEditId').click();
				});
				$('#imageEditId').on('change',function() {
					$('.imageEditSubmit').submit();
				});

				$('.btn-ctn .btn-edit').on('click', function() {
					//打开输入框
					$('.form-horizontal input.allow,.form-horizontal textarea.allow,.form-horizontal select.allow').removeAttr('readonly');
					$('.form-horizontal input.allow,.form-horizontal textarea.allow,.form-horizontal select.allow').removeAttr('disabled');

					//按钮更换
					$(this).addClass('none');
					$(this).next('.btn-save').removeClass('none');
					$(this).next('.btn-save').removeAttr('disabled');

					return false;
				});

				function cityAdd(){
					var id = '530000';
					$.ajax({
						url: '<?php echo U("Wechat/txCityAreaSelect");?>',
						type: 'POST',
						data: {id: id}
					}).done(function(res) {
						// res = res.result; 
						res = jQuery.parseJSON(res); 
						res = res.result[0];	//城市 结果集
						$('.tx-city').html('');

						var selected = '';
						res.forEach(function(val,key) {
							if (val.id == <?php echo $cityId; ?>) {
								selected = 'selected';
							}else {
								selected = '';
							}
							$('.tx-city').append(
								'<option '+ selected +' value="'+ val.id +' '+ val.fullname +'">'+ val.fullname +'</option>'
							);
						});
					});
				}
			});
		})(jQuery);
		</script>
	</body>
</html>