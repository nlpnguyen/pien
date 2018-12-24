<?php

namespace App\Http\Controllers;
use App\san_pham_model;
use App\danh_muc_san_pham_model;
use App\loai_san_pham_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use Cart;
class webdientucontroller extends Controller
{
    public function home()
    {
        $product_banchay = DB::table('san_pham')
            ->select('*')
            ->orderBy('so_luong_da_ban','DESC')
            ->where('trangthai',"=",1)
            ->limit(6)
            ->get();
        $product_moi= DB::table('san_pham')
            ->select('*')
            ->orderBy('id','DESC')
            ->limit(6)
            ->where('trangthai',"=",1)
            ->get();
        $danhmuc = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->limit(6)
            ->get();
        $product_mtxt = DB::table('san_pham')
            ->select('*')
            ->orderBy('so_luong_con','DESC')
            ->where('trangthai',"=",1)
            ->get()->toArray();
        $product_lkmt = DB::table('san_pham')
            ->select('*')
            ->where('trangthai',"=",1)
            ->where('trangthai',"=",1)
            ->orderBy('id','DESC')
            ->get()->toArray();
        $sp=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        $spdt=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
//        dd($product_mtxt[0]->ten_san_pham);
//        die();

        return view('page.home',compact('product_banchay','danhmuc','product_moi','product_mtxt','product_lkmt','sp','danhmuclist','spdt'));
    }
    function ten($id_loai){
        $sp=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',$id_loai)
            ->get()
            ->toArray();
        dd($sp);

    }
    public function cart(){
        $cart = Cart::content();
//        dd($cart);
        $total = Cart::total();
        $suptotal=Cart::subtotal();
        return view('page.cart',compact('cart','total','suptotal'));
    }
    public function addcart(Request $request,$id){
        $addcart = san_pham_model::find($id);
        $ten = $addcart->ten_san_pham;

        $cart = Cart::add([
            'id' => $addcart->id,
            'name' => $addcart->ten_san_pham,
            'qty' => 1,
            'price' => $addcart->gia_ban,
            'options' => ['img' => $addcart->images_san_pham]
        ]);
//        dd($cart);
        return redirect()->route('cart');
    }
    public  function deletecart($id){
        Cart::remove($id);
        return redirect()->route('cart');
    }
    public function shop1(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop1', compact('shop1','danhmuclist'));
    }public function shop2(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop2', compact('shop1','danhmuclist'));
    }public function shop3(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop3', compact('shop1','danhmuclist'));
    }public function shop4(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop4', compact('shop1','danhmuclist'));
    }public function shop5(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop5', compact('shop1','danhmuclist'));
    }public function shop6(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop6', compact('shop1','danhmuclist'));
    }public function shop7(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop7', compact('shop1','danhmuclist'));
    }public function shop8(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop8', compact('shop1','danhmuclist'));
    }public function shop9(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop1', compact('shop9','danhmuclist'));
    }public function shop10(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop10', compact('shop1','danhmuclist'));
    }public function shop11(){
        $danhmuclist = DB::table('danh_muc_san_pham')
            ->where('trangthai',"=",1)
            ->get();
        $shop1=DB::table('san_pham')
            ->join('loai_san_pham', 'san_pham.id_loai_san_pham', '=', 'loai_san_pham.id')
            ->join('danh_muc_san_pham', 'danh_muc_san_pham.id', '=', 'loai_san_pham.id_danh_muc_san_pham')
            ->select('*')
            ->where('danh_muc_san_pham.id',1)
            ->get()
            ->toArray();
        return view('page.shop11', compact('shop1','danhmuclist'));
    }
    public function checkout(){
        return view('page.checkout');
    }
}
