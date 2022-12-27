<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Menufacture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_product_info = Product::paginate();

        return view('backend.products.product_list',['all_product_info'=> $all_product_info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::active()->get();
        $menufacture = Menufacture::where('menufacture_status',1)->get();

        return view('backend.products.product_add',['category'=>$category,'menufacture'=>$menufacture]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $data =array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['manufacture_id'] = $request->manufacture_id;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['publication_status'] = $request->publication_status;

        $image = $request->file('product_image');

        if($image == true)
        {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            if($success == true)
            {
                $data['product_image'] = $image_url;

                Product::insert($data);

                $value = 'New Product Added Successfully';

                Session::flash('added-sucess',$value);

                return redirect()->route('products.index');
            }

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['category'] = Category::active()->get();
        $data['menufacture'] = Menufacture::where('menufacture_status',1)->get();

        $data['single_product'] = Product::findOrFail($id);

        return view('backend.products.product_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single_product = Product::findOrFail($id);

        $single_product->delete();

        $value = 'Product Deleted Successfully';

        Session::flash('alert-danger',$value);

        return redirect()->back();

    }
}
