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
                                                <form method="post" action="{!! route('admin.add_san_pham') !!}">
                                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Tên Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ten_san_pham" id="ten_san_pham" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Mô Tả </label>
                                                        <div class="col-sm-10">

                                                            <textarea name="content" id="editor" cols="30" rows="10"></textarea>

                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label"> Mô Tả Kỹ Thuật </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="mo_ta_ky_thuat" id="mo_ta_ky_thuat">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Tên Loại Sản Phẩm </label>
                                                        <div class="col-sm-10">
                                                            {{--<input type="text" class="form-control" name="id_loai_san_pham" id="id_loai_san_pham" >--}}
                                                            <select name="id_loai_san_pham" class="form-control form-control-success">
                                                                @foreach($species_product as $item)
                                                                    <option value="{{$item->id}}">{{$item->ten_loai_san_pham}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Ảnh Sản Phẩm</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="images_san_pham" id="images_san_pham">
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Giá Bán</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="gia_ban" id="gia_ban" >
                                                            <span class="messages"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Giá Gốc</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="gia_goc" id="gia_goc" >
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    {{--<script src="{{ url('admin/files/ckeditor/ckeditor.js') }}"></script>--}}
{{--<script type="text/javascript">--}}
    {{--var editor = CKEDITOR.replace('editor1',{--}}
        {{--language:'vi',--}}
        {{--filebrowserImageBrowseUrl : '{{asset('admin/files/ckfinder/ckfinder.html?Type=Images')}}',--}}
        {{--filebrowserFlashBrowseUrl : '{{asset('admin/files/ckfinder/ckfinder.html?Type=Flash')}}',--}}
        {{--filebrowserImageUploadUrl : '{{asset('admin/files/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}',--}}
        {{--filebrowserFlashUploadUrl : '{{asset('admin/files/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')}}',--}}
    {{--});--}}
{{--</script>﻿--}}
@endsection
