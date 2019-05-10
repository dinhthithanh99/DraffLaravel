<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Products</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="page-header"><small>&hearts;Products  &hearts;</small> </h2>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
                @foreach($category as $vl)

                <h2 class="page-header"><small>&star;{!! $vl["name"] !!}&star;</small> </h2>
                @endforeach

                @foreach($product as $value)

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
                    <div class="thumbnail">
                        <img src="{!! asset('public/backend/images/'.$value['image']) !!}" alt="{!! $value["name"] !!}">
                        <div class="caption">
                            <h3>{!! $value["name"] !!}</h3>
                            <p>
                                {!! $value["price"] !!}đ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @if($value["oldprice"] > 0)<del style="color: red">{!! $value["oldprice"] !!}đ</del>
                                @endif
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" onclick="alert('Thank you your order ')">Đặt hàng</a>
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="row">
               @foreach($cate as $vl)

               <h2 class="page-header"><small>&star;{!! $vl["name"] !!}&star;</small> </h2>
               @endforeach
               @foreach($prod as $value)

               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
                <div class="thumbnail">
                    <img src="{!! asset('public/backend/images/'.$value['image']) !!}" alt="{!! $value["name"] !!}">
                    <div class="caption">
                        <h3>{!! $value["name"] !!}</h3>
                        <p>
                            {!! $value["price"] !!}đ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @if($value["oldprice"] > 0)<del style="color: red">{!! $value["oldprice"] !!}đ</del>
                            @endif
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary" onclick="alert('Thank you your order ')">Đặt hàng</a>
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </form>
</div>
</body>
</html>