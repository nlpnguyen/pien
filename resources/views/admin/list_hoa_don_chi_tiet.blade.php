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
                                                    <h5>Hóa Đơn Khách Hàng {{$tkh->ten_khach_hang}} </h5>
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th>Ảnh Sản Phẩm</th>
                                                                <th>Giá Bán</th>
                                                                {{--<th>Giá Bán</th>--}}
                                                                {{--<th>Giá Gốc</th>--}}
                                                                {{--<th>Đã Bán</th>--}}
                                                                {{--<th></th>--}}
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($hoadon as $item)
                                                                <tr>
                                                                    {{--<td>{{$item->ten_khach_hang}}</td>--}}
                                                                    {{--<td>--}}
                                                                        {{--@foreach ($item['sp'] as $value)--}}
                                                                        {{--{{$value->id_san_pham}}<br>--}}
                                                                        {{--@endforeach--}}
                                                                    {{--</td>--}}
                                                                    <td>
                                                                        @foreach ($item['sp'] as $value)
                                                                            {{$value->ten_san_pham}}<br>
                                                                        @endforeach
                                                                    </td>

                                                                    <td>
                                                                        @foreach ($item['sp'] as $value)
                                                                            <img src="{{url($value->images_san_pham)}}" style="width: 10%;" alt="">
                                                                            {{--{{$value->ten_san_pham}}<br>--}}
                                                                        @endforeach
                                                                    </td>
                                                                    <td>
                                                                        @foreach ($item['sp'] as $value)
                                                                            {{$value->unit_price}}<br>
                                                                        @endforeach
                                                                    </td>
                                                                    {{--<td>{{$item->gia_ban}}<img src="{{url($item->images_san_pham)}}" style="width: 30%;" alt=""></td>--}}
                                                                    {{--<td>{{$item->gia_goc}}</td>--}}
                                                                    {{--<td>{{str_limit($item->so_luong_da_ban,20)}}</td>--}}
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
                                                                    {{--<td>--}}

                                                                            {{--<a href="{!! URL::route('admin.edit_san_pham',$item['id']) !!}" class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="fa fa-edit"></i></a>--}}
                                                                            {{--<a href="{!! URL::route('admin.del_san_pham',$item['id']) !!}" class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon" id="del"><i class="ti-trash"></i></a>--}}
                                                                            {{--<a href="" class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon" id="del"><i class="ti-trash"></i></a>--}}


                                                                    {{--</td>--}}
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th> Ảnh Sản Phẩm</th>
                                                                <th>Giá bán</th>
                                                                {{--<th>Giá Bán</th>--}}
                                                                {{--<th>Giá Gốc</th>--}}
                                                                {{--<th>Đã Bán</th>--}}
                                                                {{--<th></th>--}}
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
<script>
    $(document).ready(function (){
       $(#del).onclick(function(){
           var id = ($this).val();
           alert(ok);
           $.ajax({
               url: 'del_san_pham/'+id+'',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               type: 'POST',
               data: {
                   id: id,
                   _token: $('#del').val(),
               },
               // success:function (data) {
               //     $('#total'+id).html(data);
               // }
           })
       });
    });
</script>
@endsection
