@extends('layout')
@section('content')
<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Loại tiệc</th>
        <th>Số bàn</th>
        <th>Thành tiền</th>
        <th>Loại TK</th>
        <th>Số TK</th>
    </thead>
    <tbody>
        <?php
            $bills = Bill::all();
            foreach ($bills as $singleBill) {
                echo '<tr>';
                echo '<td>'.$singleBill->id.'</td>';
                echo '<td>'.$singleBill->name.'</td>';
                echo '<td>'.$singleBill->address.'</td>';
                echo '<td>'.$singleBill->email.'</td>';
                echo '<td>'.$singleBill->type.'</td>';
                echo '<td>'.$singleBill->numbers_of_table.'</td>';
                echo '<td>'.$singleBill->price.'</td>';
                echo '<td>'.$singleBill->account_type.'</td>';
                echo '<td>'.$singleBill->account_number.'</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
<a href="<?php echo URL::action('AdminController@getFirstFeatures'); ?>">
    <button class="btn-default">Insert new dish to Database</button>
</a>
@stop