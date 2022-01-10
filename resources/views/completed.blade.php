@extends('layouts.site')
@section('main')
<div class="main_content">
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center order_complete">
                        <i class="fas fa-check-circle"></i>
                        <div class="">
                            <b><h3>ĐẶT HÀNG THÀNH CÔNG!</h3></b>
                            <h5>Cám ơn anh/chị {{Auth::guard('khachhang')->user()->hovaten}} đã mua hàng</h5>
                        </div>
                        <p>Bộ phận chăm sóc khách hàng sẽ liên hệ sớm với anh/chị trong 24h để xác nhận đơn hàng và giao hàng đến anh/chị.
                            <br>Hotline hỗ trợ: (028) 7307 1441
                        </p>
                        <i><h6 style="color: slategray">* Đơn hàng của anh/chị sẽ được giao trong giờ hành chính, từ thứ 2 đến thứ 7. Anh/chị vui lòng chú ý điện thoại để nhận hàng nhanh nhất nhé!</h6></i>
                        
                        <a href="{{route('home.home')}}" class="btn btn-fill-out">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       
@endsection