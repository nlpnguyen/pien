<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\san_pham_model;
use App\danh_muc_san_pham_model;
use App\loai_san_pham_model;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category_product = danh_muc_san_pham_model::all()->where('trangthai',"=",1);
        foreach ($category_product as $key=> $item) {
            $category_product[$key]['con'] = loai_san_pham_model::select('*')->where('id_danh_muc_san_pham',$item['id'])->get()->toArray();
        }
        View::share('category_product', $category_product);
//        view()->composer('header',function($view){
////            $cart = Cart::content();
////            $view->with(['cart'=>$cart]);
////        });
        $cart = Cart::content();
        View::share('cart', $cart);
        $suptotal=Cart::subtotal();
        View::share('suptotal', $suptotal);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
