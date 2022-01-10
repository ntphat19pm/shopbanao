@extends('layouts.admin')
@section('main')
{{-- @if (isset($user))
<div class="card" style="">
  <p>---------- Chào {{$user->hovaten}} đến với trang Quản lý Shop Quần áo ----------</p>
</div>
@endif --}}


@if(Auth::user()->trangthai==1)
<p><i><h3 class="text-center" style="color: lightseagreen">Tài khoản của bạn bị <b style="color: red">VÔ HIỆU HÓA</b>. Vui lòng liên hệ quản lý để được kích hoạt. <a href="{{route('dangxuat')}}">Đăng xuất</a></h3></i></p>
@elseif(Auth::user()->trangthai==0)
@if(Auth::user()->chucvu_id==1)
<div class="row">
  <div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-info">
      <div class="inner">
      <h3>
        <?php echo $sanpham ?>
      </h3>

      <p>Sản phẩm</p>
      </div>
      <div class="icon">
        <i class="fas fa-tshirt"></i>
      </div>
      <a href="{{route('sanpham.index')}}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-success">
      <div class="inner">
      <h3>
        <?php echo $nhanvien ?>
      </h3>

      <p>Nhân viên</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-cog"></i>
      </div>
      <a href="{{route('nhanvien.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-navy">
      <div class="inner">
      <h3>
        <?php echo $khachhang ?>
      </h3>

      <p>Khách hàng</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="{{route('khachhang.index')}}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-danger">
      <div class="inner">
      <h3>
        <?php echo $dh ?>
      </h3>

      <p>Đặt hàng</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="{{route('dathang.index')}}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
  </div>
  </div>
  <!-- ./col -->
</div>
@endif
@endif

{{-- <div class="card" > 
  <div class="card-body">
    
      <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THỐNG KÊ ĐƠN HÀNG</h4></b></p>
      <form autocomplete="off">
        @csrf
        <div class="row">
          <div class="col-lg-3">
            <p>Từ ngày: 
              <input type="date" id="datepicker" class="form-control">
            </p>
            <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>
          </div>
          <div class="col-lg-3">
            <p>Đến ngày: <input type="date" id="datepicker2" class="form-control"></p> 
          </div>
        </div>
      </form>
    
      <div class="col-lg-12">
        <div id="myfirstchart" style="height: 250px;"></div>
      </div>

    
  </div>
</div> --}}

@endsection

{{-- @section('js')
<script>
$(document).ready(function(){

  $('#btn-dashboard-filter').click(function(){
    alert('ok da nhan');
    // var _token= $('input[name="_token"]').val();
    // var from_date= $('#datepicker').val();
    // var to_date= $('#datepicker2').val();
    // alert(from_date);
    // alert(to_date);
    // $.ajax({
    //   url: '{{url('/filter-by-date')}}',
    //   method:"POST",
    //   dataType:"JSON",
    //   data:{from_date:from_date, to_date:to_date, _token:_token},
    //   success:function(data)
    //   {
    //     chart.setData(data);
    //   }
    // });
  }); 
});
</script>

@endsection --}}