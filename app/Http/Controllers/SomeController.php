<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menufacture;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SomeController extends Controller
{
    public function unactive($category)
    {
        Category::where('category_id',$category)->update(['publication_status' => 0]);

        $value = 'Category InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('categories.index');
    }

    public function active($category)
    {
        Category::where('category_id',$category)->update(['publication_status'=> 1]);

        $value = 'Category Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }

    public function unactivebrand($menufacture)
    {
        Menufacture::where('menufacture_id',$menufacture)->update(['menufacture_status' => 0]);

        $value = 'MenuFacture InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('menufacture.index');
    }

    public function activebrand($menufacture)
    {
        Menufacture::where('menufacture_id',$menufacture)->update(['menufacture_status'=> 1]);

        $value = 'MenuFacture Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }

    public function unactiveproduct($product)
    {
        Product::where('product_id',$product)->update(['publication_status' => 0]);

        $value = 'Product InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('products.index');
    }

    public function activeproduct($product)
    {
        Product::where('product_id',$product)->update(['publication_status'=> 1]);

        $value = 'Product Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }

    public function unactiveslider($slider)
    {
        Slider::where('id',$slider)->update(['publication_status' => 0]);

        $value = 'Slider InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('sliders.index');
    }


    public function activeslider($slider)
    {
        Slider::where('id',$slider)->update(['publication_status'=> 1]);

        $value = 'Slider Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }


    public function productbycategory($category_id)
    {
        $category_by_product = DB::table('tbl_products')->where('category_id',$category_id)->where('publication_status',1)->limit(6)->get();

        return view('frontend.category_by_product',['category_by_product'=>$category_by_product]);

    }

    public function productbymenufacture($menufacture_id)
    {
        $menufacture_by_product = Product::where('manufacture_id',$menufacture_id)->where('publication_status',1)->limit(9)->get();

        return view('frontend.menufacture_by_product',['menufacture_by_product'=>$menufacture_by_product]);
    }

    public function productview($product_id)
    {
        $single_product = Product::where('product_id',$product_id)->where('publication_status',1)->first();

        return view('frontend.product_details',['single_product'=>$single_product]);

    }
}
