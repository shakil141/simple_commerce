<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        view()->share('all_category',DB::table('categories')->where('publication_status',1)->get());

        view()->share('all_menufacture',DB::table('tbl_menufactures')->where('menufacture_status',1)->get());

        view()->share('all_product',DB::table('tbl_products')->where('publication_status',1)->limit(6)->get());

        view()->share('all_slider',DB::table('sliders')->where('publication_status',1)->get());
    }
}

