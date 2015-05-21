@extends('layout')
@section('content')
<h1>Admin Panel</h1>
<a href="<?php echo URL::action('AdminController@getFirstFeatures'); ?>">
    <button class="btn-default">Insert new dish to Database</button>
</a>
<br><br>
<a href="<?php echo URL::action('AdminController@getSecondFeatures'); ?>">
    <button class="btn-default">Bills list</button>
</a>
@stop