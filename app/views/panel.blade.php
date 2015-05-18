@extends('layout')
@section('content')
<h1>Admin Panel</h1>
<?php
    echo Form::open(array(
    'method' => 'post',
    'url' => URL::action('AdminController@postInsertNewDish')
        )
    )
?>
    Name:<input type ="text" name="name">
    Description:<input type="text" name="description">
    Price:<input type="number" name="price">
    Image URL: <input  type="text" name="imgurl">
    <button type="submit" value ="Insert"></button>
</form>
@stop