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
                                                    <h5>Danh Sách Hóa Đơn</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                        <div class="dt-buttons">
                                                            <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="basic-btn" href="#"><span>Copy</span></a>
                                                            <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="basic-btn" href="#"><span>CSV</span></a>
                                                            <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="basic-btn" href="#"><span>Excel</span></a>
                                                            <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="basic-btn" href="#"><span>PDF</span></a>
                                                            <a class="dt-button buttons-print" tabindex="0" aria-controls="basic-btn" href="#"><span>Print</span></a>
                                                        </div>
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Khách Hàng</th>
                                                                <th>Sản Phẩm</th>
                                                                <th>Số Lượng</th>
                                                                <th>Tổng Giá</th>
                                                                <th>Ghi Chú</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($hoadon as $item)
                                                                <tr>
                                                                    <td>{{$item->id}}</td>
                                                                    <td>{{$item->ten_khach_hang}}</td>

                                                                    <td>
                                                                        @foreach ($item['spc'] as $value)
                                                                        {{str_limit($value->ten_san_pham,20)}}<br>
                                                                        @endforeach
                                                                    </td>
                                                                    {{--<td><img src="" style="width: 30%;" alt=""></td>--}}
                                                                    <td>
                                                                        @foreach ($item['spc'] as $value)
                                                                            {{str_limit($value->so_luong,20)}}<br>
                                                                        @endforeach
                                                                    </td>
                                                                    <td>{{$item->tong_tien}}</td>
                                                                    {{--<td>{{$item['spc'][0]->ghi_chu}}</td>--}}
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
                                                                        {{--<a href="{!! URL::route('admin.edit_san_pham',$item['id']) !!}" class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="fa fa-edit"></i></a>--}}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Khách Hàng</th>
                                                                <th>Sản Phẩm</th>
                                                                <th>Số Lượng</th>
                                                                <th>Tổng Giá</th>
                                                                <th>Ghi Chú</th>
                                                                <th></th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                        </div>
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
