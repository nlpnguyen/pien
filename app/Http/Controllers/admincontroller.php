<?php

namespace App\Http\Controllers;
use App\hoa_don_chi_tiet_model;
use App\hoa_don_model;
use App\khachhangmodel;
use App\san_pham_model;
use App\loai_san_pham_model;
use App\danh_muc_san_pham_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    public function adhome()
    {
        return view('admin.adhome');
    }
    //san_pham_start//
    public function list_san_pham()
    {
        $product = san_pham_model::all()->where('trangthai',"=",1);
        return view('admin.list_san_pham', compact('product'));
    }
    public function add_san_pham()
    {
        $species_product = loai_san_pham_model::all();
        return view('admin.add_san_pham',compact('species_product'));
    }
    public function post_add_san_pham(Request $Request)
    {
        $product = new san_pham_model();
        $product->ten_san_pham = $Request->ten_san_pham;
        $product->mo_ta = $Request->mo_ta;
        $product->mo_ta_ky_thuat = $Request->mo_ta_ky_thuat;
        $product->id_loai_san_pham = $Request->id_loai_san_pham;
        $product->images_san_pham = $Request->images_san_pham;
        $product->gia_ban = $Request->gia_ban;
        $product->gia_goc = $Request->gia_goc;
        $product->trangthai=1;
        /*$o= $Request->Input('trangthai');
        $status=3;
        if(!$o->isEmpty())
          {  $status=0;}
        else
           { $status=1;}*/


        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $product->save();
        return redirect()->route('admin.list_san_pham')-> with(['flash_level'=>'success','flash_message'=>'Tạo mới thành công!']);
    }
    public function edit_san_pham($id)
    {
        $edit_product = san_pham_model::find($id);
        $species_product = loai_san_pham_model::all();
        return view('admin.edit_san_pham',compact('edit_product','species_product'));
    }
    public function post_edit_san_pham(Request $Request,$id)
    {
        $edit_product = san_pham_model::find($id);
        $edit_product->ten_san_pham = $Request->ten_san_pham;
        $edit_product->mo_ta = $Request->mo_ta;
        $edit_product->mo_ta_ky_thuat = $Request->mo_ta_ky_thuat;
        $edit_product->id_loai_san_pham = $Request->id_loai_san_pham;
        $edit_product->images_san_pham = $Request->images_san_pham;
        $edit_product->gia_ban = $Request->gia_ban;
        $edit_product->gia_goc = $Request->gia_goc;
        $edit_product->trangthai=1;
        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $edit_product->save();
        return redirect()->route('admin.list_san_pham')-> with(['flash_level'=>'success','flash_message'=>'SỬA THÀNH CÔNG!']);
    }
    //san_pham_end//
    //danh_muc_san_pham_start//
    public function list_danh_muc_san_pham()
    {
        $category_product = danh_muc_san_pham_model::all()->where('trangthai',"=",1);
        return view('admin.list_danh_muc_san_pham', compact('category_product'));
    }
    public function add_danh_muc_san_pham()
    {
        return view('admin.add_danh_muc_san_pham');
    }
    public function post_add_danh_muc_san_pham(Request $Request)
    {
        $category_product = new danh_muc_san_pham_model();
        $category_product->ten_danh_muc_san_pham = $Request->ten_danh_muc_san_pham;
        $category_product->trangthai=1;
        /*$o= $Request->Input('trangthai');
        $status=3;
        if(!$o->isEmpty())
          {  $status=0;}
        else
           { $status=1;}*/


        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $category_product->save();
        return redirect()->route('admin.list_danh_muc_san_pham')-> with(['flash_level'=>'success','flash_message'=>'Tạo mới thành công!']);
    }
    public function edit_danh_muc_san_pham($id)
    {
        $edit_category_product = danh_muc_san_pham_model::find($id);
        return view('admin.edit_danh_muc_san_pham',compact('edit_category_product'));
    }
    public function post_edit_danh_muc_san_pham(Request $Request,$id)
    {
        $edit_category_product = danh_muc_san_pham_model::find($id);
        $edit_category_product->ten_danh_muc_san_pham = $Request->ten_danh_muc_san_pham;
        $edit_category_product->trangthai=1;
        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $edit_category_product->save();

        return redirect()->route('admin.list_danh_muc_san_pham')-> with(['flash_level'=>'success','flash_message'=>'SỬA THÀNH CÔNG!']);
    }
    //danh_muc_san_pham_end//
    //loai_san_pham_start//
    public function list_loai_san_pham()
    {
        $species_product = loai_san_pham_model::all()->where('trangthai',"=",1);
        return view('admin.list_loai_san_pham', compact('species_product'));
    }
    public function add_loai_san_pham()
    {
        $category_product = danh_muc_san_pham_model::all();
        return view('admin.add_loai_san_pham', compact('category_product'));
    }
    public function post_add_loai_san_pham(Request $Request)
    {
        $species_product = new loai_san_pham_model();
        $species_product->ten_loai_san_pham = $Request->ten_loai_san_pham;
        $species_product->id_danh_muc_san_pham = $Request->id_danh_muc_san_pham;
        $species_product->trangthai=1;
        /*$o= $Request->Input('trangthai');
        $status=3;
        if(!$o->isEmpty())
          {  $status=0;}
        else
           { $status=1;}*/


        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $species_product->save();
        return redirect()->route('admin.list_loai_san_pham')-> with(['flash_level'=>'success','flash_message'=>'Tạo mới thành công!']);
    }
    public function edit_loai_san_pham($id)
    {
        $edit_species_product = loai_san_pham_model::find($id);
        return view('admin.edit_loai_san_pham',compact('edit_species_product'));
    }
    public function post_edit_loai_san_pham(Request $Request,$id)
    {
        $edit_species_product = loai_san_pham_model::find($id);
        $edit_species_product->ten_loai_san_pham = $Request->ten_loai_san_pham;
        $edit_species_product->id_danh_muc_san_pham = $Request->id_danh_muc_san_pham;
        $edit_species_product->trangthai =1;
        /* if($Request->hasFile('files')){
             $file = $Request->file('files');
             $destinationPath = base_path() . '/public/upload/gv/giaotrinh/';

             $fileName  = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $fileName2 = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $giaotrinh->link = $fileName2;
             $file->move($destinationPath, $fileName.'.'.$extension);
         }*/
        $edit_species_product->save();

        return redirect()->route('admin.list_loai_san_pham')-> with(['flash_level'=>'success','flash_message'=>'SỬA THÀNH CÔNG!']);
    }
    //_loai_san_pham_end//
    //haodon//
    public function list_hoa_don()
    {
        $hoadon = hoa_don_model::all();
//        $hoadon = khachhangmodel::all();
//        foreach ($hoadon as $key=>$value) {
//            $hoadon[$key]['spc']=hoa_don_model::select('*')->join('hoa_don_chi_tiet','id_hoa_don','hoa_don.id')->where('id_khachhang',$value->id)->get();
////            $hoadon[$key]['spc']=hoa_don_chi_tiet_model::select('*')->join('san_pham','san_pham.id','hoa_don_chi_tiet.id_san_pham')->where('id_khachhang',$value->id)->get();
//        }
//        dd($hoadon);
        return view('admin.list_hoa_don', compact('hoadon'));
    }
    public function list_hoa_don_chi_tiet($id)
    {
        $tkh=DB::table('khachhang')->select('ten_khach_hang')->first();
        $hoadon = hoa_don_model::all();
        foreach ($hoadon as $key=>$value) {
            $hoadon[$key]['sp']=hoa_don_chi_tiet_model::select('*')
                ->join('hoa_don','hoa_don_chi_tiet.id_hoa_don','=','hoa_don.id')
                ->join('san_pham','hoa_don_chi_tiet.id_san_pham','=','san_pham.id')
                ->where('id_khach_hang',$value->id)
//                ->select('*')
                ->get();
//            $hoadon[$key]['spc']=hoa_don_chi_tiet_model::select('*')->join('san_pham','san_pham.id','hoa_don_chi_tiet.id_san_pham')->where('id_khachhang',$value->id)->get();
        }
//        dd($hoadon);
        return view('admin.list_hoa_don_chi_tiet', compact('hoadon','tkh'));
    }

    public function del_san_pham(Request $request,$id){
        $dl = san_pham_model::find($id);
        $dl->trangthai =0;
        $dl->save();
        return redirect()->route('admin.list_san_pham');
    }
}
