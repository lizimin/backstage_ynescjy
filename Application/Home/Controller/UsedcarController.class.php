<?php

namespace Home\Controller;

class UsedcarController extends AdminController {
	public function tousedCar() {
		$model = D ( "usedcar" );
		$data = $model->select ();
		$this->assign ( 'data', $data );
		$this->assign ( 'pageName', "usedcar" );
		$this->display ( 'Admin/Usedcar/index' );
	}
	public function detail() {
		if (IS_GET) {
			$model = D ( 'usedcar' );
			$data = $model->where ( "id=" . $_GET ['id'] )->select ();
			$this->assign ( 'data', $data[0] );
			$this->assign ( 'pageName', "usedcar" );
			$this->display ( 'Admin/Usedcar/detail' );
		}
	}
	public function deleteCar() {
		if (IS_GET) {
			$model = D ( 'usedcar' );
			$result = $model->where ( 'id=' . $_GET ['id'] )->delete ();
			if ($result) {
				$this->success('删除成功', '/Home/Usedcar/tousedCar');
			}
		}
	}
	
}