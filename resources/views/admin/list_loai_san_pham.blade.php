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
                                                    <h5>Danh Sách Loại Sản Phẩm</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="autofill" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>ten_loại_san_pham</th>
                                                                <th>id_danh_muc_san_pham</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($species_product as $item)
                                                                <tr>
                                                                    <td>{{$item->id}}</td>
                                                                    <td>{{str_limit($item->ten_loai_san_pham,20)}}</td>
                                                                    <td>{{$item->id_danh_muc_san_pham}}</td>
                                                                    <td>
                                                                        <a href="{!! URL::route('admin.edit_loai_san_pham',$item['id']) !!}" class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="fa fa-edit"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>ten_loai_san_pham</th>
                                                                <th>id_danh_muc_san_pham</th>
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
