@extends('layout')
@section('content')
<?php
echo Form::open(array(
    'method' => 'post',
    'url' => URL::to(action('AdminController@postPanel'),array('account'=>Input::get('account'),'password'=>md5(Input::get('password'))))
))
?>
<fieldset>
    <div class="form-group">
        <label>Account</label>
        <input type="text" class="form-control" name ="account">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name ="password">
    </div>
    <!-- Button -->
    <div class="control-group">
        <label class="control-label" for="Enter"></label>
        <div class="controls">
            <button type ="submit" class="btn btn-primary" onclick="">Check!</button>
        </div>
    </div>
</fieldset>
<?php
echo Form::close();
?>
@stop