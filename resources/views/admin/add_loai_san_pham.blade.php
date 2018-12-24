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
                                                <h5> Thông Tin Loại Sản Phẩm </h5>
                                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                            </div>
                                            <div class="card-block">
                                                <form method="post" action="{!! route('admin.add_loai_san_pham') !!}">
                                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Tên Loại Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ten_loai_san_pham" id="ten_loai_san_pham" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    {{--<div class="col-sm-12 col-xl-3 m-b-30">--}}
                                                        {{--<h4 class="sub-title">Success Select</h4>--}}
                                                        {{--<select name="select" class="form-control form-control-success">--}}
                                                            {{--<option value="opt1">Select One Value Only</option>--}}
                                                            {{--<option value="opt2">Type 2</option>--}}
                                                            {{--<option value="opt3">Type 3</option>--}}
                                                            {{--<option value="opt4">Type 4</option>--}}
                                                            {{--<option value="opt5">Type 5</option>--}}
                                                            {{--<option value="opt6">Type 6</option>--}}
                                                            {{--<option value="opt7">Type 7</option>--}}
                                                            {{--<option value="opt8">Type 8</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Loại Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            {{--<input type="text" class="form-control" name="id_danh_muc_san_pham" id="id_danh_muc_san_pham">--}}
                                                            <select name="id_danh_muc_san_pham" class="form-control form-control-success">
                                                                @foreach($category_product as $item)
                                                                <option value="{{$item->id}}">{{$item->ten_danh_muc_san_pham}}</option>
                                                                @endforeach
                                                            </select>
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
                                                            <button type="submit" class="btn btn-primary m-b-0">Thêm</button>
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
