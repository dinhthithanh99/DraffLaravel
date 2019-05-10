<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests\ProductsRequest;
use Input,File;
use DB;
use Auth;


class ProductsController extends Controller
{
  // Hiển thị danh sách sản phẩm
    public function getListProd() {
		$product = Product::select('id','code', 'name', 'image', 'price', 'oldprice', 'cate_id')->get()->toArray();
		return view('listProd',compact('product'));
	}

	 public function getListProdHome() {
    	$category = Category::select('id','name')->where('id','1')->get()->toArray();
    	$cate = Category::select('id','name')->where('id','2')->get()->toArray();

		$product = Product::select('id','code', 'name', 'image', 'price', 'oldprice', 'cate_id')->where('cate_id','1')->limit(3)->get()->toArray();
		$prod = Product::select('id','code', 'name', 'image', 'price', 'oldprice', 'cate_id')->where('cate_id','2')->limit(3)->get()->toArray();
		return view('home',compact('category','cate','product','prod'));
	}
	

    // Lấy dữ liệu có trong category sau đó chạy đến file addProd trong folder view với tham số truyền vào trong hàm compact là giá trị của thể loại được hiển thị lên
    public function getAddProd() {
    	$category = Category::select('id','name')->get()->toArray();
    	return view('addProd', compact('category'));
    }

    // Lấy dữ liệu vừa nhập vào và lưu dữ liệu vào database 
    public function postAddProd(ProductsRequest $request) {
    	$product = new Product;
    	$file_name = $request->file('txtimage')->getClientOriginalName();
    	$product->code = $request->txtcode;
    	$product->name = $request->txtname;
		$product->image = $file_name;
		$product->price = $request->txtprice;
		$product->oldprice = $request->txtoldprice;
		$product->cate_id = $request->cate_id;
		$request->file('txtimage')->move('public/backend/images/',$file_name);
		$product->save();
		return redirect()->route('getListProd')->with('success','Thêm sản phẩm thành công!');
    }

	// Xóa tất cả thông tin của sản phẩm trong database theo id của sản phẩm
	public function getDeleteProd($id) {
		$product = Product::find($id);
		// File::delete('public/backend/images/'.$product->image);
		$product->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}

	// Sửa sản phẩm theo id sử dụng tham số trong hàm compact gồm có tên thể loại, sản phẩm, hình ảnh của sản phẩm có id được chọn
	public function getEditProd($id) {
		$cate = Category::select('id','name')->get()->toArray();
		$product = Product::find($id);
		$product_img = Product::findOrFail($id)->get()->toArray();
		return view('editProd',compact('cate','product','product_img'));
	}

	// Lưu lại kết quả sau khi đã sửa đổi
	public function postEditProd($id,Request $request) {
		$product = Product::find($id);
		$img_current = 'public/backend/images/'. $request->input('img_current');
		$product->code = $request->input('txtcode');
		$product->name = $request->input('txtname');
		$product->price = $request->input('txtprice');
		$product->oldprice = $request->input('txtoldprice');
		$product->cate_id = $request->input('cate_id');
		if(!empty($request->file('txtimage')))
		{
			$file_name = $request->file('txtimage')->getClientOriginalName();
			$product->image = $file_name;
			$request->file('txtimage')->move('public/backend/images/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}
		$product->save();
		return redirect()->route('getListProd')->with('success','Sửa sản phẩm thành công!');
	}
}
