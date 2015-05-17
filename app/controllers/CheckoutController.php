<?php

class CheckoutController extends BaseController{
    public $layout = 'layout';
    public function getCheckout() {
        $data = array();
        $this->layout->nest("content", "checkout", $data);
    }
}