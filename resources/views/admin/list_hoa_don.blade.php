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
                                                    <h5>Hóa Đơn</h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Khách Hàng</th>
                                                                <th>Tổng Tiền</th>
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
                                                                        {{$item->tong_tien}}
                                                                        {{--@foreach ($item['spc'] as $value)--}}
                                                                        {{--{{str_limit($value->tong_tien,20)}}<br>--}}
                                                                        {{--@endforeach--}}
                                                                    </td>
                                                                    {{--<td><img src="" style="width: 30%;" alt=""></td>--}}
                                                                    <td>
                                                                        {{$item->ghi_chu}}
                                                                        {{--@foreach ($item['spc'] as $value)--}}
                                                                            {{--{{str_limit($value->ghi_chu,20)}}<br>--}}
                                                                        {{--@endforeach--}}
                                                                    </td>
                                                                    {{--<td>{{$item->tong_tien}}</td>--}}
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
                                                                        {{--@endif{!! URL::route('admin.edit_san_pham',$item['id']) !!}--}}
                                                                    {{--</td>--}}
                                                                    <td>
                                                                        <a href="{!! URL::route('admin.list_hoa_don_chi_tiet',$item['id']) !!}" class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="ti-zoom-in"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Khách Hàng</th>
                                                                <th>Tổng Tiền</th>
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
