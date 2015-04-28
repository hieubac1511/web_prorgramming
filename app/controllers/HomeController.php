<?php

class HomeController extends BaseController {
    public $layout = "index";
    public function index(){
        $data = array();
        $this->layout->nest("content","hello",$data);
    }
}
