@extends('layout')
@section('content')
<h1>Insert new Dish to Database</h1>
<div class="form-group">
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
    <button type="submit" value ="Insert">Insert</button>
</form>
</div>

<a href="<?php echo URL::action('AdminController@getSecondFeatures'); ?>">
    <button class="btn-default">Bills list</button>
</a>
@stop