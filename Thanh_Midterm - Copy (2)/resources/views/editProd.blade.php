<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Products</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"> Product <small>&hearts; Edit &hearts;</small> </h2>

        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif

        <form method="post" action="{{URL::action('ProductsController@postEditProd',$product->id)}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Code:</label>
                    <input type="text" class="form-control" name="txtcode" value="{!! old ('txtcode',isset($product)?$product['code']:NULL) !!}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($product)?$product['name']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="image">Image:</label>
                    <input type="file" name="txtimage" value="{!! isset($product)?$product['image']:NULL !!}">
                    <img src="{!! asset('public/backend/images/'.$product['image']) !!}" width="100">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" name="txtprice" value="{!! old ('txtprice',isset($product)?$product['price']:NULL) !!}">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="quantity">Old Price:</label>
                    <input onkeypress='return event.charCode >= 48 && event.charCode <=57' type="text" class="form-control" name="txtoldprice" value="{!! old ('txtoldprice',isset($product)?$product['oldPrice']:NULL) !!}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Category:</label>
                    <select class="form-control" name="cate_id" id="cate_id">
                        <option>Mời bạn chọn</option>
                        <!-- $cate trong hàm getEdit của file ProductsController -->
                        @foreach($cate as $cat)
                            <option value="{!! $cat['id'] !!}" {!! $cat['id'] == $product['cate_id']?'selected' : '' !!}>-- {!! $cat['name'] !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- button add -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" style="margin-left: 15px">Save</button>
                </div>
            </div>
            <!-- /butto add -->
        </form>
    </div>
</body>
</html>