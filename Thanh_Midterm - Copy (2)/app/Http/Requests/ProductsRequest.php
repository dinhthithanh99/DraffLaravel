<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'txtcode'          => 'required|numeric',
            'txtname'          => 'required|unique:Products,name',
            'txtimage'         => 'required|image',
            'txtprice'         => 'required|numeric',
            // 'txtoldprice'      => 'required|numeric',
            'cate_id'          => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'txtcode.required'         => 'Vui lòng nhập mã sản phẩm',
            'txtname.required'         => 'Vui lòng nhập tên sản phẩm!',
            'txtname.unique'           => 'Tên sàn phẩm này đã tồn tại!',
            'txtimage.required'        => 'Vui lòng chọn ảnh cho sản phẩm!',
            'txtimage.image'           => 'Hình ảnh không đúng định dạng!',
            'txtprice.required'        => 'Vui lòng nhập giá cho sản phẩm!',
            'txtprice.numeric'         => 'Giá phải là số!',
            // 'txtoldprice.required'     => 'Vui lòng nhập giá cũ cho sản phẩm!',
            'cate_id.required'   => 'Vui lòng chọn danh mục!'
        ];
    }
}
