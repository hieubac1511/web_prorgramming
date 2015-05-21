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
        <script src = "/style/js/bootstrap.min.js" type="text/javascript"></script>
        <script src = "/style/js/jquery.js"type="text/javascript"></script>
    </head>


    <body>
        <h1>Đặt bàn</h1>
        <form>
            <table class="table">
                <tr>
                    <td class="col-md-2"> Khách Hàng :</td>
                    <td><input type="text" class="form-control" name="name" placeholder="Nhập Tên" required="true"></td>
                </tr>
                </tr>
                <tr>
                    <td class="col-md-2"> Địa Chỉ :</td>
                    <td><input type="text" class="form-control" name="address" placeholder="Nhập Địa Chỉ" required="true"></td>
                </tr>
                </tr>
                <tr>
                    <td class="col-md-2">Số Điện Thoại :</td>
                    <td><input type="number" size=" 11" class="form-control" name="phone" placeholder="Nhập SDT" required="true"></td>
                </tr>



                <tr>
                    <td class="col-md-2"> Email:</td>
                    <td><input type="email" class="form-control" name="email" placeholder="Nhập email" required="true"></td>
                </tr>

                <tr>
                    <td class="col-md-2"> Đặt Tiệc :</td>
                    <td><select id="type">
                            <option value="Sinh nhật" >Sinh nhật</option>
                            <option value="Đám cưới">Đám cưới</option>
                            <option value="Đầy tháng">Đầy tháng</option>
                            <option value="Khác">Khác</option>
                        </select></td>

                </tr>
                <tr>
                    <td class="col-md-2"> Số Lượng Bàn:</td>
                    <td><input type="Số Lượng Bàn" class="form-control" name="numbersoftable" placeholder="Nhập Số Bàn Muốn Đặt" required="true"></td>
                </tr>
                <tr>
                    <td class="col-md-2"> Giá Trị:</td>   
                    <td><label value="5000" id="price">5.000.000</label></td>          	               
                </tr>    

                <tr>
                    <td class="col-md-2"> Chọn Tài Khoản</td>
                    <td><select  id="accounttype">
                            <option value="Vietinbank">Vietinbank</option>
                            <option value="Vietcombank">Vietcombank</option>
                            <option value="DongAbank">DongAbank</option>
                        </select></td>
                </tr>   
                <tr>
                    <td class="col-md-2"> Số Tài Khoản:</td>
                    <td><input type="text" class="form-control" name="accountnumber" placeholder="Nhập Số Tài Khoản" required="true"></td>
                </tr>
            </table>
        </form>

        <button class = "btn-danger col-md-2" id="submitBtn">Checkout</button>
        <script>
            function priceChange() {
                var type = $('#type option:selected').text();
                var tablePrice = 0;
                if (type === "Sinh nhật")
                    tablePrice = 100000;
                if (type === "Đám cưới")
                    tablePrice = 200000;
                if (type === "Đầy tháng")
                    tablePrice = 150000;
                if (type === "Khác")
                    tablePrice = 75000;
                return $('#price').text(parseInt($('input[name=numbersoftable]').val()) * tablePrice);

            }
            $('input[name=numbersoftable]').keyup(function(){priceChange();});
            $('#type').change(function(){priceChange();});
            $("#submitBtn").click(function () {
                var name = $('input[name=name]').val().length;
                var address = $('input[name=address]').val().length;
                var numbers_table = $('input[name=numbersoftable]').val().length;
                var phone = $('input[name=phone]').val().length;
                var accountnumber = $('input[name=accountnumber]').val().length;
                if ((name != 0) && (address != 0) && (phone != 0) && (accountnumber != 0)) {
                    $.ajax({
                        url: "<?php echo URL::action('CheckoutController@postInsertNewBill'); ?>",
                        type: 'POST',
                        data: {
                            name: $('input[name=name]').val(),
                            address: $('input[name=address]').val(),
                            phone: $('input[name=phone]').val(),
                            email: $('input[name=email]').val(),
                            type: $('#type option:selected').text(),
                            numbers_table: $('input[name=numbersoftable]').val(),
                            price: $('#price').text(),
                            accounttype: $('#accounttype option:selected').text(),
                            accountnumber: $('input[name=accountnumber]').val()
                        },
                        success: function (data) {
                            alert(data);
                        }
                    });
                }
                else
                    alert("Some value is null");
            });
        </script>
    </body>
</html>

@endsection

@section('javascript')

@endsection
