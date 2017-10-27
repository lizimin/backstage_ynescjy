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
			table tbody tr { transition: all 0.3s ease-in-out; }
			table tbody tr td span { display: inline-block; padding: 0 3px; }
			.no-view { background: #2e3252 !important; color: #fff !important; border-top: 1px solid #fff; }
			.no-view span i { color: #fff; }
			.detail-control { margin-top: 5px; }
			.detail-control .detail-add { width: 50%; margin-right: 10px; }
			.member-entry { margin-top: 5px; display: inline-block; width: 100%; }
			.member-entry input { width: 27%; margin-right: 3.33%; }
			.jagoFancybox .box { width: 45%; }
			.jagoFancybox .box .box-left { width: 49%; float: left; }
			.jagoFancybox .box .box-right { width: 49%; float: right; }
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
					<div class="message">
						<h1 class="headline text-center bold">酒店管理</h1>

						<div class="tools">
							<ul>
								<li>
									<p><a class="btn btn-tools btn-hotel-add" href="#"><i class="icon-plus-sign-alt"></i> 酒店添加</a></p>
								</li>
							</ul>
						</div>
						
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<td width="13%">所属区域</td>
									<td width="20%">酒店名</td>
									<td width="25%">地址</td>
									<td width="17%">基础详情</td>
									<td width="10%">电话</td>
									<td width="5%">起价</td>
									<td width="10%">操作</td>
								</tr>
							</thead>
							<tbody>
								<?php  $result = A('Admin'); $result = $result -> hotelSelectAllMessage(); forEach($result as $key => $val): ?>
								 <tr>
								 	<td><?php echo $val['area_name']; ?></td>
								 	<td><?php echo $val['name']; ?></td>
								 	<td><?php echo $val['address']; ?></td>
								 	<td><?php echo $val['homeStyle']['spec']; ?></td>
								 	<td><?php echo $val['phone']; ?></td>
								 	<td><?php echo $val['price']; ?></td>
								 	<td>
								 		<span><a href="<?php echo U('Admin/toHotel', array('isChild' => 'true', 'childName' => 'view_hotel', 'pageName' => 'hotel', 'pageId' => $val['id']));?>" title="编辑" data-id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['name'] ?>" class=""><i class="icon-edit"></i></a></span>
								 		<?php if(session('level') == 10): ?>
								 			<span><a title="删除" data-id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['name'] ?>" class="jagoFancybox-delete" href="#"><i class="icon-trash"></i></a></span>
								 		<?php endif ?>
								 	</td>
								 </tr>
								<?php endforeach; ?>
							</tbody>
						</table>

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
								<h4 class="title">酒店删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/hotelDelete');?>">
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
						<div class="add-hotel panel panel-default">
							<div class="panel-heading">
								<h4 class="title">酒店添加 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<div class="panel-body">
								<form class="adminLogin inblk" enctype="multipart/form-data" role="form" action="<?php echo U('Admin/hotelAdd');?>" method="POST">
									<div class="box-left">
										  <div class="form-group">
										    <label for="name">酒店名</label>
										    <input name="name" type="text" class="form-control" id="name" placeholder="酒店名" autocomplete="off" required="">
										  </div>

										  <div class="form-group">
										    <label for="area">所属区域</label>
										    <select class="form-control" name="area" required="true">
											  <option value="530103 盘龙区">盘龙区</option>
											  <option value="530102 五华区">五华区</option>
											  <option value="530111 官渡区">官渡区</option>
											  <option value="530112 西山区">西山区</option>
											  <option value="530113 东川区">东川区</option>
											  <option value="530181 安宁市">安宁市</option>
											  <option value="530114 呈贡县">呈贡县</option>
											  <option value="530115 晋宁县">晋宁县</option>
											  <option value="530124 富民县">富民县</option>
											  <option value="530125 宜良县">宜良县</option>
											  <option value="530127 嵩明县">嵩明县</option>
											  <option value="530126 石林彝族自治县">石林彝族自治县</option>
											  <option value="530128 禄劝彝族苗族自治县">禄劝彝族苗族自治县</option>
											  <option value="530129 寻甸回族彝族自治县">寻甸回族彝族自治县</option>
											</select>
										  </div>

										  <div class="form-group">
										    <label for="address">地址</label>
										    <input name="address" type="address" class="form-control" id="address" placeholder="地址" autocomplete="off" required="">
										  </div>

										  <div class="form-group">
										    <label for="phone">电话</label>
										    <input name="phone" type="text" class="form-control" id="phone" placeholder="电话" autocomplete="off" required="">
										  </div>
										  <div class="form-group">
										    <label class="" for="image">图片</label>
										    <input name="photo" type="file" class="form-control" id="image" placeholder="图片" autocomplete="off" required="">
										  </div>
									</div>

									<div class="box-right">
										  <div class="form-group">
										    <label for="theme">酒店主题</label>
										    <input name="theme" type="text" class="form-control" id="theme" placeholder="酒店主题" autocomplete="off" required="">
										  </div>

										  <div class="form-group">
										    <label class="" for="theme_image">主题图片</label>
										    <input name="photo1" type="file" class="form-control" id="theme_image" placeholder="图片" autocomplete="off" required="">
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
											    	<input name="member_name1" class="member-name form-control col-sm-4" type="text" placeholder="会员类别" autocomplete="off" required>
													<input name="member_detail1" class="member-detail form-control col-sm-4" type="text" placeholder="详情" autocomplete="off" required>
													<input name="member_price1" class="member-price form-control col-sm-4" type="text" placeholder="价格" autocomplete="off" required>
											    </div>
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="price">起价</label>
										    <input name="price" type="price" class="form-control" id="price" placeholder="起价" autocomplete="off" required="">
										  </div>
									</div>
									<div class="text-center width-all clear">
									  	<button type="submit" class="btn btn-primary btn-submit"><i class="icon-plus-sign-alt"></i> 添加</button>
									  	<p class="error-msg red pull-right"></p>
									  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
		(function($) {
			$(function() {
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
					$('.member-ctn').append(
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

				$('.btn-hotel-add').on('click', function() {
					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-2').addClass('active');
					return false;
				});

				$('.jagoFancybox-delete').on('click', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');

					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-1').addClass('active');
					
					$('.box-1 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});
			});
		})(jQuery);
		</script>
	</body>
</html>