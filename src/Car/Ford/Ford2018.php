<?php
namespace Car\Ford;

use Ford\Focus;

class Ford2018 {

	public function focus() {
		$model = new \Ford\Focus\Focus2013();
		echo $model->info();
	}

}
