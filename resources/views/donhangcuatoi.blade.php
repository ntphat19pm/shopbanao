@extends('layouts.site');
@section('main')
<div>
        <div class="main_content">
            <div class="section">
                <div class="container">


                        <div class="card" >
                            
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <p><b><h4 class="text-center" style="color:rgb(255, 70, 37) ">THÔNG TIN KHÁCH HÀNG</h4></b></p>
                                        
                                        <tr>
                                            <th class="product-thumbnail text-center">Họ tên khách hàng</th>
                                            <th class="product-thumbnail text-center">Số điện thoại</th>
                                            <th class="product-thumbnail text-center">Địa chỉ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{Auth::guard('khachhang')->user()->hovaten}}</td>
                                            <td class="text-center">{{Auth::guard('khachhang')->user()->sdt}}</td>
                                            <td class="text-center">{{Auth::guard('khachhang')->user()->diachi}}</td>
                                        </tr>
                                    </tbody>
                                
                                </table>
                            </div>


                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <p><b><h4 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ ĐƠN HÀNG</h4></b></p>
                                        
                                        <tr>
                                            <th class="product-thumbnail">STT</th>
                                            <th class="product-thumbnail">Mã đơn hàng</th>
                                            {{-- <th class="product-name">Khách hàng</th> --}}
                                            {{-- <th class="product-price">Nhân viên</th> --}}
                                            <th class="product-quantity">Ngày đặt hàng</th>
                                            <th class="product-subtotal">Tổng tiền</th>
                                            <th class="product-remove">Tình trạng</th>
                                            <th class="product-remove">Xem chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                        $i = 0;
                                        @endphp

                                        @foreach ($data as $item)
                                        @php 
                                        $i++;
                                        @endphp

                                        <tr>
                                            <td class="text-center"><i>{{$i}}</i></td>
                                            <td class="text-center">HD_{{$item->id}}</td>
                                            {{-- <td>{{$item->khachhang->hovaten}}</td> --}}
                                            {{-- <td>{{$item->nhanvien->hovaten}}</td> --}}
                                            <td>{{date("d-m-Y",strtotime($item->ngaydathang))}}</td>
                                            <td>{{number_format($item->tongtien)}}</td>
                                            <td>{{$item->tinhtrang->tinhtrang}}</td>
                                            {{-- <td><a class="btn btn-primary" href="{{route('get.chitiet_donhang',$item->id)}}">Xem</a></td> --}}
                                            <td class="text-center">
                                                <a href="{{route('get.chitiet_donhang',$item->id)}}" class="btn btn-outline-warning">
                                                    <i class="fas fa-eye"></i>              
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div> 
@endsection