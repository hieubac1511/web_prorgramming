<?php

class AdminController extends BaseController{
    public $layout = 'layout';
    public function getLogin() {
        $data = array();
        $this->layout->nest("content", "login", $data);
    }
    function postPanel() {
        $data = array();
        $account = Input::get('account');
        $password = Input::get('password');
        if (($account == "admin") && ($password == "admin"))
            return $this->layout->nest('content','panel',$data);
        else return "wrong password";
    }
    function insertNewDishToDatabase($name, $description, $price, $imgurl){
        $dish = new Menu();
        $dish->name = $name;
        $dish->description = $description;
        $dish->price = $price;
        $dish->imgurl = $imgurl;
        $dish->save();
    }
    function postInsertNewDish() {
        $name = Input::get('name');
        $description = Input::get('description');
        $price = Input::get('price');
        $imgurl = Input::get('imgurl');
        $this->insertNewDishToDatabase($name, $description, $price, $imgurl);
        return "success";
    }
}


