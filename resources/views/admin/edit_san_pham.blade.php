@extends('admin.masteradmin')
@section('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- Page body start -->
                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- Basic Inputs Validation start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5> Thông Tin Sản Phẩm </h5>
                                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                            </div>
                                            <div class="card-block">
                                                <form method="post" action="">
                                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Tên Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ten_san_pham" id="ten_san_pham" value="{!! old('ten_san_pham',isset($edit_product ) ? $edit_product ['ten_san_pham'] : null) !!}">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Mô Tả </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="mo_ta" id="mo_ta" value="{!! old('mo_ta',isset($edit_product ) ? $edit_product ['mo_ta'] : null) !!}">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Mô Tả Kỹ Thuật </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="mo_ta_ky_thuat" id="mo_ta_ky_thuat" value="{!! old('mo_ta_ky_thuat',isset($edit_product ) ? $edit_product ['mo_ta_ky_thuat'] : null) !!}">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tên Loại Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            {{--<input type="text" class="form-control" name="id_loai_san_pham" id="id_loai_san_pham"  value="{!! old('id_loai_san_pham',isset($edit_product ) ? $edit_product ['id_loai_san_pham'] : null) !!}">--}}
                                                            <select name="id_loai_san_pham" class="form-control form-control-success">
                                                                @foreach($species_product as $item)
                                                                    <option value="{{$item->id}}" @if($item->id == $edit_product->id_loai_san_pham) selected @endif>{{$item->ten_loai_san_pham}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Ảnh Sản Phẩm</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="images_san_pham" id="images_san_pham" value="{!! old('images_san_pham',isset($edit_product ) ? $edit_product ['images_san_pham'] : null) !!}">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Giá Bán</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="gia_ban" id="gia_ban" value="{!! old('gia_ban',isset($edit_product ) ? $edit_product ['gia_ban'] : null) !!}" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Giá Gốc</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="gia_goc" id="gia_goc" value="{!! old('gia_goc',isset($edit_product ) ? $edit_product ['gia_goc'] : null) !!}" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Trạng thái</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="trangthai" id="trangthai" value="{!! old('trangthai',isset($edit_product ) ? $edit_product ['trangthai'] : null) !!}" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    {{--<div class="row">--}}
                                                        {{--<label class="col-sm-2 col-form-label">Radio Buttons</label>--}}
                                                        {{--<div class="col-sm-10">--}}
                                                            {{--<div class="form-check form-check-inline">--}}
                                                                {{--<label class="form-check-label">--}}
                                                                    {{--<input class="form-check-input" type="radio" name="gender" id="gender-1" value="option1"> Male--}}
                                                                {{--</label>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="form-check form-check-inline">--}}
                                                                {{--<label class="form-check-label">--}}
                                                                    {{--<input class="form-check-input" type="radio" name="gender" id="gender-2" value="option2"> Female--}}
                                                                {{--</label>--}}
                                                            {{--</div>--}}
                                                            {{--<span class="messages"></span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary m-b-0">Sửa</button>
                                                            <button type="submit" class="btn btn-primary m-b-0">Trở Lại</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- Basic Inputs Validation end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
    </div>


@stop
