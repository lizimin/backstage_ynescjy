<?php

namespace Home\Controller;

use Think\Controller;

class WechatUsedcarController extends Controller {
	public function addCarinfo() {
		if (IS_POST) {
			$model = D ( 'usedcar' );
			if($_POST['car_img']){
				$_POST['car_img']=json_encode($_POST['car_img']);
			}
			if (! $model->create ( $_POST )) {
				// 如果创建失败 表示验证没有通过 输出错误提示信息
				$error = $model->getError ();
				return $this->ajaxReturn ( [ 
						'code' => 1,
						"error" => $error,
						'data' => '' 
				] );
			} else {
				// 验证通过 可以进行其他数据操作
				if ($model->add ()) {
					return $this->ajaxReturn ( [ 
							'code' => 0,
							"error" => 'add successful',
							'data' => '' 
					] );
				} else {
					$error = $model->getDbError ();
					return $this->ajaxReturn ( [ 
							'code' => 1,
							"error" => $error,
							'data' => '' 
					] );
				}
			}
		} else {
			return $this->ajaxReturn ( [ 
					'code' => 1,
					'info' => 'Illegal request',
					data => '' 
			] );
		}
	}
	/*
	 * public function uploadCar(){ if(IS_POST){ $upload = new \Think\Upload();// 实例化上传类 $upload->maxSize = 3145728 ;// 设置附件上传大小 $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 $upload->rootPath = './Upload/'; // 设置附件上传根目录 $upload->savePath = 'userCar/'; // 设置附件上传（子）目录 // 上传文件 $info = $upload->upload(); if(!$info) {// 上传错误提示错误信息 $this->error($upload->getError()); $this->ajaxReturn(['code'=>1,"info"=>'upload fail','data'=>'']); }else{// 上传成功 $this->ajaxReturn(['code'=>0,"info"=>'upload success','data'=>'']); } }else{ return $this->ajaxReturn(['code'=>1,'info'=>'illegal request','data'=>'']); } }
	 */
	
	public function uploadCar(){
		
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =     './Upload/'; // 设置附件上传根目录
		$upload->savePath  =     'usedCar/'; // 设置附件上传（子）目录
		// 上传文件
		$info   =   $upload->upload();
        $path=$upload->rootPath.$info['file']['savepath'].$info['file']['savename'];
		$this->ajaxReturn(['code'=>$path]);
		var_dump($info);
		exit;
		if(!$info) {// 上传错误提示错误信息
			$this->ajaxReturn($upload->getError());
		}else{// 上传成功
			$this->ajaxReturn(['code'=>1]);
		}
	}
}