<?php

class CheckoutController extends BaseController {

    public $layout = 'layout';

    public function getCheckout() {
        $data = array();
        $this->layout->nest("content", "checkout", $data);
    }

    public function postInsertNewBill() {
        $nBill = new Bill();
        $nBill->name = Input::get('name');
        $nBill->address = Input::get('address');
        $nBill->phone = Input::get('phone');
        $nBill->email = Input::get('email');
        $nBill->type = Input::get('type');
        $nBill->numbers_of_table = Input::get('numbers_table');
        $nBill->price = Input::get('price');
        $nBill->account_type = Input::get('accounttype');
        $nBill->account_number = Input::get('accountnumber');
        $nBill->save();
        return "success";
        /*
          name: $('input[name=name]').val(),
          address: $('input[name=address]').val(),
          phone: $('input[name=phone]').val(),
          email: $('input[name=email]').val(),
          type: $('input[name=type').val(),
          numbers_table: $('input[name=numbersoftable]').val(),
          price: $('input[name=price]').val(),
          accounttype: $('input[name=accounttype]').val(),
          accountnumber: $('input[name=accountnumber]').val() */
    }

}
