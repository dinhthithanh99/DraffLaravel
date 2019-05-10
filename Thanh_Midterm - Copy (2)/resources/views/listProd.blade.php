<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List Products</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bang">
					<table class="table table-striped table-bordered table-hover">
						<thead style="color: red;font-size: 20px;padding: 100px;">
							<tr>
								<th>Code products</th>
								<th>Name products</th>
								<th>Images</th>
								<th>Price</th>
								<th>Old price</th>
								<th style="width: 20%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($product as $value)
							<tr>
								<td> {!! $value["code"] !!} </td>
								<td> {!! $value["name"] !!} </td>
								<td>
									<img src="{!! asset('public/backend/images/'.$value['image']) !!}" width="100" alt="{!! $value["name"] !!}">
								</td>
								<td> {!! $value["price"] !!} </td>
								<td> {!! $value["oldprice"] !!} </td>
								<td>
									<a href="{!! url('addProd') !!}"><i class="fa fa-plus-circle"></i>&nbsp;Thêm</a>&nbsp;&nbsp;
									<a href="{!! url('edit',$value['id']) !!}"><i class="fa fa-pencil"></i>&nbsp;Sửa</a>&nbsp;&nbsp;
									<a href="{!! url('delete',$value['id']) !!}"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>