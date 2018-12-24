@extends('admin.masteradmin')
@section('content')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Autofill table start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Danh Sách Sản Phẩm</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="autofill" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Sản Phẩm</th>
                                                                <th>Ảnh</th>
                                                                <th>Giá Bán</th>
                                                                <th>Giá Gốc</th>
                                                                <th>Đã Bán</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($product as $item)
                                                                <tr>
                                                                    <td>{{$item->id}}</td>
                                                                    <td>{{str_limit($item->ten_san_pham,20)}}</td>
                                                                    <td><img src="{{url($item->images_san_pham)}}" style="width: 30%;" alt=""></td>
                                                                    <td>{{$item->gia_ban}}</td>
                                                                    <td>{{$item->gia_goc}}</td>
                                                                    <td>{{str_limit($item->so_luong_da_ban,20)}}</td>
                                                                    {{--<td>--}}
                                                                        {{--@if($item['trangthai']==1)--}}
                                                                        {{--<div class="btn waves-effect btn waves-effect waves-light btn-success btn-icon">--}}
                                                                            {{--<i class="fa fa-check"></i>--}}
                                                                        {{--</div>--}}
                                                                        {{--@else--}}
                                                                            {{--<div class="btn waves-effect btn waves-effect waves-light btn-danger btn-icon">--}}
                                                                                {{--<i class="fa fa-times"></i>--}}
                                                                            {{--</div>--}}
                                                                        {{--@endif--}}
                                                                    {{--</td>--}}
                                                                    <td>
                                                                        <a href="{!! URL::route('admin.edit_san_pham',$item['id']) !!}" class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="fa fa-edit"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Sản Phẩm</th>
                                                                <th>Ảnh</th>
                                                                <th>Giá Bán</th>
                                                                <th>Giá Gốc</th>
                                                                <th>Đã Bán</th>
                                                                <th></th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Autofill table end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body start -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
