<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Products</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"><small>&star;Product&star;</small> </h2>
        <!-- Display error -->
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
        <!-- //Display error -->
        <form method="post" action="{{ URL::action('ProductsController@postAddProd') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Code:</label>
                    <input type="text" class="form-control" placeholder="Enter code products"  name="txtcode">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name products"  name="txtname">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file"  name="txtimage">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" placeholder="Nhập giá sản phẩm..."  name="txtprice">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="quantity">Old Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" placeholder="Nhập số lượng sản phẩm..."  name="txtoldprice" value = '0'>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="danhmuc">Category:</label>
                    <select class="form-control" name="cate_id" id="cate_id">
                        <option value="">Mời bạn chọn:</option>
                        <!-- $category trong hàm getAdd của file ProductsController -->
                        @foreach($category as $cate)
                            <option value="{!! $cate['id']!!}">-- {!! $cate['name'] !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" style="margin-left: 15px">Add Product</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</body>
</html>