@extends('layout')

@section('content')
	<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link href="/style/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/style/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/style/css/private.css" rel="stylesheet" />
    <script src = "/style/js/boostrap.min.js" type="text/javascript"></script>
    <script src = "/style/js/jquery.js"type="text/javascript"></script>
    </head>
        
    
    <body>
    	<h1>Hóa Đơn Của bạn </h1>
        <form>
        	<table class="table">
            	<tr>
                	<td class="col-md-2"> Khách Hàng :</td>
                    <td><input type="text" class="form-control" id="exampleInputName" placeholder="Nhập Tên"></td>
                </tr>
                </tr>
                <tr>
                	<td class="col-md-2"> Địa Chỉ :</td>
                    <td><input type="text" class="form-control" id="exampleInputAddress" placeholder="Nhập Địa Chỉ"></td>
                </tr>
                </tr>
                <tr>
                	<td class="col-md-2">Số Điện Thoại :</td>
                    <td><input type="number" size=" 11" class="form-control" id="exampleInputNumber" placeholder="Nhập SDT"></td>
                </tr>
                
    

                <tr>
                	<td class="col-md-2"> Email:</td>
                    <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email"></td>
                </tr>
        	
            	<tr>
                	<td class="col-md-2"> Đặt Tiệc :</td>
                    <td><select name="Đặt Tiệc ">
                    	<option value="Sinh Nhật">Sinh Nhật</option>
                        <option value="Sinh Nhật">Đám Cưới</option>
                        <option value="Sinh Nhật">Đầy Tháng</option>
                        <option value="Sinh Nhật">Đám Tang</option>
                        <option value="Sinh Nhật">Đám Giỗ </option>
                        </select></td>
                  
                </tr>
                 <tr>
                	<td class="col-md-2"> Số Lượng Bàn:</td>
                   <td><input type="Số Lượng Bàn" class="form-control" id="exampleInputSLB" placeholder="Nhập Số Bàn Muốn Đặt"></td>
                </tr>
                 <tr>
                 	<td class="col-md-2"> Giá Trị:</td>   
                    <td><input type=""></td>          	               
            	 </tr>    
                 <tr>
                	<td class="col-md-2"> Mức Đặt Cọc:</td>
                    <td><select name="Mức Đặt Cọc: ">
                    	<option value="20%">20%</option>
                        <option value="50%">50%</option>
                        <option value="100%">1000%</option>
                        </select></td>
                 </tr>
                 <tr>
                	<td class="col-md-2"> Chọn Tài Khoản</td>
                    <td><select name="Mức Đặt Cọc: ">
                    	<option value="Vietinbank">Vietinbank</option>
                        <option value="Vietcombank">Vietcombank</option>
                        <option value="DongAbank">DongAbank</option>
                        <option value="Paypal">Paypal</option>
                        </select></td>
                  </tr>   
                  <tr>
                	<td class="col-md-2"> Số Tài Khoản:</td>
                    <td><input type="text" class="form-control" id="exampleInputBank" placeholder="Nhập Số Tài Khoản"></td>
                </tr>
                  <tr>
                	<td class="col-md-2">Mật Khẩu :</td>
                    <td><input type="password" class="form-control" id="exampleInputpass" placeholder="Password"></td>
                </tr>        	
           </table>
        </form>
    </body>
</html>

@endsection

@section('javascript')
	
@endsection
