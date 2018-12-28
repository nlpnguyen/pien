<?php

namespace App\Http\Controllers;
use App\hoa_don_chi_tiet_model;
use App\san_pham_model;
use App\danh_muc_san_pham_model;
use App\loai_san_pham_model;
use App\hoa_don_model;
use App\anhctmodel;
use App\khachhangmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use Cart;
use Mail;
use Illuminate\Support\Facades\View;
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
        $cart = Cart::content();
//        foreach ($cart as $value){
//            var_dump($value->options['img']);
//           echo '<br>';
//        }
//        die();
        $total = Cart::total();
        View::share('cart', $cart);
        return view('page.home',compact('product_banchay','danhmuc','product_moi','product_mtxt','product_lkmt','sp','danhmuclist','spdt' ));
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
        $cart = Cart::content();
        return view('page.checkout', compact('cart'));
    }
    public function post_checkout(Request $Request)
    {
        $suptotal = Cart::subtotal();
        $cart = Cart::content();
        $khachhang = new khachhangmodel();
        $khachhang->ten_khach_hang =  $Request->ten_khach_hang;
        $khachhang->phone = $Request->phone;
        $khachhang->email = $Request->email;
        $khachhang->tong_tien = $suptotal;
        $khachhang->dia_chi = $Request->dia_chi;
        $khachhang->save();
        foreach ($cart as $value){
        $checkout = new hoa_don_chi_tiet_model();
        $checkout->id_khachhang = $khachhang->id;
        $checkout->id_san_pham = $value->id;
        $checkout->unit_price = $value->price;
        $checkout->so_luong =  $value->qty;
        $checkout->ghi_chu =   $Request->ghi_chu;
        $checkout->trangthai=1;
        $checkout->save();
       }
        foreach ($cart as $item){
            $checkout1 = new hoa_don_model();
            $checkout1->id_khach_hang = $khachhang->id;
            $checkout1->ten_khach_hang = $khachhang->ten_khach_hang;
            $checkout1->tong_tien = $suptotal;
            $checkout1->ghi_chu = $checkout->ghi_chu;
            $checkout1->trangthai=1;
            $checkout1->save();

        }
        foreach ($cart as $value){
            $qty = $value->qty;
            $name = $value->name;
        }

        $data=[
            'email'=> $Request->email,
            'tenkh' =>  $Request->ten_khach_hang,
            'qty' =>  $qty,
            'name' => $name,
        ];
        // cho cái đống gửi mail lên phần check out luon r k cần ngày cuxg dc :))

//        dd($data);
        //do lag ahihi
        // thử lại ctrls oke
        Mail::send('page.mail',$data,function ($message) use ($data){
            $message->from('phucnguyennbo@gmail.com');
            $message->to($data['email'])->subject('Thông Báo Đặt Hàng');
            //ctrl s  ok
        });
        //bỏ cái destroy xuống đáy không thôi oke thử lại coi
        Cart::destroy();
        return redirect()->route('page.home');
    }
    public function san_pham_chi_tiet(Request $Request){

        $spct=DB::table('san_pham')
            ->where('id',$Request->id)->first();
        $act=DB::table('image_san_pham')
            ->select('*')
            ->get();
        return view('page.san_pham_chi_tiet',compact('spct','act'));
    }
    public function  updatesl(Request $request){
        $sl = $request->sl;
        $rowId = $request->rowId;
        $sp=  Cart::get($rowId);
        Cart::update($rowId, ['qty' => $sl]);
        echo $sp->price*$sl;
    }
    public  function post_email(Request $request){
        $cart = Cart::content();
        foreach ($cart as $value){
           $qty = $value->qty;
           $name = $value->name;
        }
        $rowId = $request->rowId;
        $data=[
            'email'=> $request->email,
            'qty' =>  $qty,
            'name' => $name,
        ];
        // cho cái đống gửi mail lên phần check out luon :))

//        dd($data);
        //do lag ahihi
       // thử lại ctrls oke
        Mail::send('page.mail',$data,function ($message) use ($data){
        $message->from('phucnguyennbo@gmail.com');
        $message->to($data['email'])->subject('Thông Báo Đặt Hàng');
        //ctrl s  ok
    });

        return redirect()->route('page.home');
    }
}
