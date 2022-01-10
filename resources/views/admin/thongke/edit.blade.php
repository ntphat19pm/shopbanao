@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('thongke.update',$thongke->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('thongke.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về danh sách thống kê</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">  
                    <label for="ngaydathang" class="form-label">Ngày thống kê</label>
                    <input type="date" value="{{$thongke->ngaydathang}}" class="form-control" id="ngaydathang" name="ngaydathang" required readonly>
                    <div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="soluong_ban">Số lượng bán <span class="text-danger font-weight-bold">*</span></label>
                        <input id="soluong_ban" value="{{$thongke->soluong_ban}}" type="number" min="0" class="form-control @error('soluong_ban') is-invalid @enderror" name="soluong_ban" required/>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="tong_donhang">Tổng đơn hàng <span class="text-danger font-weight-bold">*</span></label>
                        <input id="tong_donhang" value="{{$thongke->tong_donhang}}" type="number" min="0" class="form-control @error('tong_donhang') is-invalid @enderror" name="tong_donhang" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="doanh_so">Doanh số <span class="text-danger font-weight-bold">*</span></label>
                        <input id="doanh_so" value="{{$thongke->doanh_so}}" type="number" min="0" class="form-control @error('doanh_so') is-invalid @enderror" name="doanh_so" onfocus="calcular();" onblur="calcular();" required/>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="doanh_thu">Doanh thu <span class="text-danger font-weight-bold">*</span></label>
                        <input id="doanh_thu" value="{{$thongke->doanh_thu}}" type="number" min="0" class="form-control @error('doanh_thu') is-invalid @enderror" name="doanh_thu" onblur="calcular();" required/>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="loi_nhuan">Lợi nhuận <span class="text-danger font-weight-bold">*</span></label>
                        <input id="loi_nhuan" value="{{$thongke->loi_nhuan}}" type="number" min="0" class="form-control @error('loi_nhuan') is-invalid @enderror" name="loi_nhuan" readonly />
                    </div>
                </div>

                                    
            </div>

        </form>
    </div>
</div>

<div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Ngày đặt hàng</th>
              <th class="text-center" scope="col">Mã hóa đơn</th>
              <th class="text-center" scope="col">Tên sản phẩm</th>
              <th class="text-center" scope="col">Số lượng</th>
              <th class="text-center" scope="col">Doanh số mỗi đơn</th>
              <th class="text-center" scope="col">Doanh thu mỗi đơn</th>
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
                <td>{{date("d-m-Y",strtotime($item->dathang->ngaydathang))}}</td>
                <td>HD_{{$item->dathang_id}}</td>
                <td>{{$item->sanpham->tensp}}</td>
                <td class="text-center">{{$item->soluong}}</td>
                <td class="text-center">{{number_format($item->sanpham->gianhap*$item->soluong)}} VNĐ</td>
                <td class="text-center">{{number_format($item->sanpham->giaxuat*$item->soluong)}} VNĐ</td>
          
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection

@section('js')
<script>
    function calcular() {
        var doanh_so = parseInt(document.getElementById('doanh_so').value, 10);
        var doanh_thu = parseInt(document.getElementById('doanh_thu').value, 10);
        document.getElementById('loi_nhuan').value = doanh_thu - doanh_so;
    }
</script>
@endsection
