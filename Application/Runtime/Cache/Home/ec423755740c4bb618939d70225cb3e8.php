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
						<h1 class="headline text-center bold">订单信息</h1>

						<?php  $result = A('Admin'); $pending = count($result -> selectAllByAttr('Order',array('status' => 0))); $refunding = count($result -> selectAllByAttr('Order',array('status' => 2))); ?>
						
						<div class="tools">
							<ul>
								<li>
									<p><a data-status="-1" class="btn btn-tools btn-search-status active" href="#">全部订单</a></p>
								</li>
								<li>
									<p><a data-status="0" class="btn btn-tools btn-search-status" href="#">待入住 <span class="badge message-new-all bg-yellow"><?php echo $pending; ?></span></a></p>
								</li>
								<li>
									<p><a data-status="1" class="btn btn-tools btn-search-status" href="#">已完成</a></p>
								</li>
								<li>
									<p><a data-status="2" class="btn btn-tools btn-search-status" href="#">退款中 <span class="badge message-new-all bg-yellow"><?php echo $refunding; ?></span></a></p>
								</li>
								<li>
									<p><a data-status="3" class="btn btn-tools btn-search-status" href="#">已退款</a></p>
								</li>
							</ul>
						</div>

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<td width="14%">商户单号</td>
									<td width="10%">酒店</td>
									<!-- <td width="10%">地址</td> -->
									<td width="10%">入住信息</td>
									<td width="8%">抵扣积分</td>
									<td width="8%">所剩积分</td>
									<!-- <td width="10%">退房日期</td> -->
									<td width="10%">实付价格</td>
									<td width="10%">状态</td>
									<td width="10%">下单用户</td>
									<td width="10%">下单用户手机</td>
									<td width="10%">操作</td>
								</tr>
							</thead>
							<tbody>
								<?php  $result = $result -> selectAll('Order'); forEach($result as $key => $val): ?>
								 <tr data-id="<?php echo $val['id']; ?>" class="order-view ">
								 	<td><?php echo $val['order_number']; ?></td>
								 	<td><?php echo $val['hotel_name']; ?></td>
								 	<td><?php echo $val['check_in']; ?> <p>-------------</p> <?php echo $val['check_out']; ?></td>
								 	<td><?php echo $val['used_score']; ?></td>
								 	<td><?php echo $val['now_score']; ?></td>
								 	<!-- <td><?php echo $val['address']; ?></td> -->
								 	<td>￥<?php echo $val['price']; ?></td>
									<td>
										<?php  if($val['status'] == 0){ echo '待入住'; } if($val['status'] == 1){ echo '已完成'; } if($val['status'] == 2){ echo '退款中'; } if($val['status'] == 3){ echo '以退款'; } ?>
									</td>
									<td><?php echo $val['user_name']; ?></td>
									<td><?php echo $val['user_phone']; ?></td>
								 	<td>
								 		<?php if(session('level') == 10): ?>
								 			<span><a title="删除" data-id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['order_number'] ?>" class="jagoFancybox-delete-order" href="#"><i class="icon-trash"></i></a></span>
								 		<?php endif ?>

								 		<?php if ($val['status'] == '2'): ?>
							 				<span><a title="确认退款" data-id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['order_number'] ?>" class="jagoFancybox-order-agree-refund" href="#"><i class="icon-check"></i></a></span>
							 			<?php endif ?>

							 			<?php if ($val['status'] == '0'): ?>
							 				<span><a title="确认入住" data-id="<?php echo $val['id']; ?>" data-tag="<?php echo $val['order_number'] ?>" class="jagoFancybox-order-agree-check-in" href="#"><i class="icon-signin"></i></a></span>
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
								<h4 class="title">订单删除 <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/orderDelete');?>">
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
								<h4 class="title">确认退款? <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/orderStatusUpdate');?>">
								<div class="jagoFancybox-body">
									<p class="jagoFancybox-headline">确认退款给该用户?</p>
									<p class="jagoFancybox-content bold"></p>
									<div class="none">
										<input type="text" name="deleteId">
										<input type="text" name="status" value="3">
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
						<div class="jagoFancybox-confirm-ctn">
							<div class="jagoFancybox-head">
								<h4 class="title">确认入住? <a href="#"><i class="icon-remove-sign pull-right jagoFancybox-cancel"></i></a></h4>
							</div>
							<form action="<?php echo U('Admin/orderStatusUpdate');?>">
								<div class="jagoFancybox-body">
									<p class="jagoFancybox-headline">确认该用户入住?</p>
									<p class="jagoFancybox-content bold"></p>
									<div class="none">
										<input type="text" name="deleteId">
										<input type="text" name="status" value="1">
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
		(function($) {
			$(function() {
				$('.btn.btn-tools').on('click', function() {
					$('.btn.btn-tools').removeClass('active');
					$(this).addClass('active');
					return false;
				});

				$('.btn-search-status').on('click', function() {
					var that = $(this);
					var status = $(this).data('status');
					$.ajax({
						url: '<?php echo U("Admin/orderSelectByStatusAjaxReturn");?>',
						type: 'POST',
						data: {status: status}
					}).done(function(res) {
						$('table tbody').html('');
						if (res.data) {
							var count;
							if (status == 0 || status == 2) {
								count = res.data.length;
								that.find('span').html(count);
							}
						}
						var refund = '';
						if (res.status == 'success') {
							res.data.forEach(function(val,key) {
								if (val.status == '0') {
									val.status = '待入住';
									refund = '<span><a title="确认入住" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-order-agree-check-in" href="#"><i class="icon-signin"></i></a></span>';
									$('table tbody').append(
										'<tr data-id="'+ val.id +'" class="order-view ">' +
											'<td>'+ val.order_number +'</td>' +
										 	'<td>'+ val.hotel_name +'</td>' +
										 	'<td>'+ val.check_in +'<p>-------------</p>'+ val.check_out +'</td>' +
										 	'<td>'+ val.used_score +'</td>' +
										 	'<td>'+ val.now_score +'</td>' +
										 	'<td>￥'+ val.price +'</td>' +
											'<td>' + val.status +'</td>' +
											'<td>'+ val.user_name +'</td>' +
											'<td>'+ val.user_phone +'</td>' +
										 	'<td>' +
									 			'<?php if(session('level') == 10): ?><span><a title="删除" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-delete-order" href="#"><i class="icon-trash"></i></a></span><?php endif ?>'+
									 			refund +
										 	'</td>' +
									 	'</tr>'
									);
								}
								else if (val.status == '1') {
									val.status = '已完成';
									refund = '';
									$('table tbody').append(
										'<tr data-id="'+ val.id +'" class="order-view ">' +
											'<td>'+ val.order_number +'</td>' +
										 	'<td>'+ val.hotel_name +'</td>' +
										 	'<td>'+ val.check_in +'<p>-------------</p>'+ val.check_out +'</td>' +
										 	'<td>'+ val.used_score +'</td>' +
										 	'<td>'+ val.now_score +'</td>' +
										 	'<td>￥'+ val.price +'</td>' +
											'<td>' + val.status +'</td>' +
											'<td>'+ val.user_name +'</td>' +
											'<td>'+ val.user_phone +'</td>' +
										 	'<td>' +
									 			'<?php if(session('level') == 10): ?><span><a title="删除" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-delete-order" href="#"><i class="icon-trash"></i></a></span><?php endif ?>'+
									 			refund +
										 	'</td>' +
									 	'</tr>'
									);
								}
								else if (val.status == '2') {
									val.status = '退款中';
									refund = '<span><a title="确认退款" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-order-agree-refund" href="#"><i class="icon-check"></i></a></span>';
									$('table tbody').append(
										'<tr data-id="'+ val.id +'" class="order-view ">' +
											'<td>'+ val.order_number +'</td>' +
										 	'<td>'+ val.hotel_name +'</td>' +
										 	'<td>'+ val.check_in +'<p>-------------</p>'+ val.check_out +'</td>' +
										 	'<td>'+ val.used_score +'</td>' +
										 	'<td>'+ val.now_score +'</td>' +
										 	'<td>￥'+ val.price +'</td>' +
											'<td>' + val.status +'</td>' +
											'<td>'+ val.user_name +'</td>' +
											'<td>'+ val.user_phone +'</td>' +
										 	'<td>' +
									 			'<?php if(session('level') == 10): ?><span><a title="删除" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-delete-order" href="#"><i class="icon-trash"></i></a></span><?php endif ?>'+
									 			refund +
										 	'</td>' +
									 	'</tr>'
									);
								}
								else if (val.status == '3') {
									val.status = '已退款';
									refund = '';
									$('table tbody').append(
										'<tr data-id="'+ val.id +'" class="order-view ">' +
											'<td>'+ val.order_number +'</td>' +
										 	'<td>'+ val.hotel_name +'</td>' +
										 	'<td>'+ val.check_in +'<p>-------------</p>'+ val.check_out +'</td>' +
										 	'<td>'+ val.used_score +'</td>' +
										 	'<td>'+ val.now_score +'</td>' +
										 	'<td>￥'+ val.price +'</td>' +
											'<td>' + val.status +'</td>' +
											'<td>'+ val.user_name +'</td>' +
											'<td>'+ val.user_phone +'</td>' +
										 	'<td>' +
									 			'<?php if(session('level') == 10): ?><span><a title="删除" data-id="'+ val.id +'" data-tag="'+ val.order_number +'" class="jagoFancybox-delete-order" href="#"><i class="icon-trash"></i></a></span><?php endif ?>'+
									 			refund +
										 	'</td>' +
									 	'</tr>'
									);
								}
								// if (val.view == 0) {
								// 	val.view = 'no-view';
								// 	refund = '';
								// }


							});
						}
					});
				});

				$('table').on('click', '.order-view', function() {
					var that = $(this);
					var id = $(this).data('id');
					$.ajax({
						url: '<?php echo U("Admin/orderViewChangeAjaxReturn");?>',
						type: 'POST',
						data: {id: id}
					}).done(function(res) {
						if (res.status == 'success') {
							that.removeClass('no-view');
							var ctn = $('.sidebar .badge.message-new-all');
							var count = ctn.html();
							count--;
							ctn.html(count);
						}
					});
				});

				$('table').on('click', '.jagoFancybox-delete-order', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');

					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-1').addClass('active');
					
					$('.box-1 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-1 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				$('table').on('click', '.jagoFancybox-order-agree-refund', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');

					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-2').addClass('active');
					
					$('.box-2 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-2 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-2 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});

				$('table').on('click', '.jagoFancybox-order-agree-check-in', function() {
					var id = $(this).data('id');
					var content = $(this).data('tag');

					$('.jagoFancybox').addClass('active');
					$('.jagoFancybox .box-3').addClass('active');
					
					$('.box-3 .jagoFancybox-confirm-ctn input[name="deleteId"]').val(id);
					$('.box-3 .jagoFancybox-confirm-ctn .jagoFancybox-content').html('');
					$('.box-3 .jagoFancybox-confirm-ctn .jagoFancybox-content').append(content);
					return false;
				});
			});
		})(jQuery);
		</script>
	</body>
</html>