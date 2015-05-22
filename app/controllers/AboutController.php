<?php
class AboutController extends BaseController {
	public $layout = 'layout';
	public function getAbout(){
		$data = array();
        $this->layout->nest("content", "about", $data);
	}
}