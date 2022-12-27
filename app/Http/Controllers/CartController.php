<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        $qty = $request->qty;
        $product_id = $request->product_id;

        $product_info = Product::where('product_id',$product_id)->first();

        $data = [];
        $data['qty'] = $qty;
        $data['id'] = $product_info->product_id;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;



    }
}
