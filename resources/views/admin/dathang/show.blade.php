@extends('layouts.admin')
@section('main')

<div class="row">

  <div class="col-lg-4">
    <div class="">
      <a href="{{route('dathang.index')}}" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-sign-out-alt"> Quay về danh sách các đơn hàng</i>     
      </a>
    </div>
  </div>
</div>

{{-- <form action="" method="GET" class="form-inline mb-2">
  <div class="form-group ">
    <label for="hoadon" class="form-label mr-3">Mã hóa đơn là: </label>
    <input value="{{$data->id}}" class="form-control col-lg-3" name="tukhoa" type="number" readonly >

    <button type="submit" class="btn btn-outline-success ml-3">
      <i class="fas fa-check-circle"></i>
    </button>
  </div>
</form> --}}

    <div class="card" >

      
    
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN KHÁCH HÀNG</h4></b></p>
            {{-- <p><b><h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD{{$data->id}}</h6></b></p> --}}
            {{-- <input type="date" style="color:rgb(255, 67, 67)" value="{{$data->ngaydathang}}" class="text-left" id="ngaydathang" name="ngaydathang" readonly> --}}
            
            <tr>
              <th class="text-center" scope="col">Tên khách hàng</th>
              <th class="text-center" scope="col">Số điện thoại</th>
              <th class="text-center" scope="col">Địa chỉ</th>

            </tr>
          </thead>
          <tbody>

            <tr>
              <td class="text-center">{{$data->khachhang->hovaten}}</td>
              <td class="text-center">{{$data->khachhang->sdt}}</td>          
              <td class="text-center">{{$data->khachhang->diachi}}</td>          
            </tr>
          </tbody>
        </table>
        <form action="{{route('dathang.update',$data->id)}}" method="POST">
        @csrf @method('PUT')
          <div class="row mt-3">
            <div class="col-lg-4">
              <div class="form-group">
                  <select id="tinhtrang_id" class="form-control custom-select @error('tinhtrang_id') is-invalid @enderror" name="tinhtrang_id" required autofocus>
                      <option value="">--Chọn tình trạng đơn hàng--</option>
                      @foreach($tinhtrang as $value)
                      <option value="{{ $value->id }}" {{($data->tinhtrang_id== $value->id)?'selected':'' }}>{{$value->tinhtrang}}</option>
                      @endforeach
                  </select>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-success mb-3">
              <i class="fas fa-check-circle"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <br>
    
    <div class="card" >
    
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ ĐƠN HÀNG</h3>
                <h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD_{{$data->id}}</h6>
                <i><h6 class="text-left" type="date" style="color:rgb(255, 67, 67)">Ngày đặt hàng: {{date("d-m-Y",strtotime($data->ngaydathang))}}</h6></i>
              </b></p>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Tên sản phẩm</th>
                <th class="text-center" scope="col">Size</th>
                <th class="text-center" scope="col">Số lượng</th>
                <th class="text-center" scope="col">Đơn giá</th>
                <th class="text-center" scope="col">Tổng đơn giá</th>
              </tr>
            </thead>
            <tbody>
              @php $tongtien = 0; @endphp
              @php 
              $i = 0;
              @endphp
              @foreach($dathang_chitiet as $item)
              @php 
              $i++;
              @endphp
                  <tr>
                    <td class="text-center"><i>{{$i}}</i></td>
                    <td class="text-center">{{$item->sanpham->tensp}}</td>
                    <td class="text-center">{{$item->sanpham->size->size}}</td>
                    <td class="text-center">{{$item->soluong}}</td>
                    <td class="text-center">{{number_format($item->sanpham->giaxuat)}} VNĐ</td>
                    <td class="text-center">{{number_format($item->sanpham->giaxuat*$item->soluong)}} VNĐ</td>
                  </tr>
                  @php $tongtien += $item->sanpham->giaxuat*$item->soluong; @endphp
                @endforeach
            </tbody>
            {{-- <tr>
              <td colspan="4">Tổng tiền sản phẩm:</td>
              <td style="text-align:right">
              <strong>{{ number_format($tongtien) }} VNĐ</strong>
              </td>
            </tr> --}}
              <th colspan="6" class="text-right" style="color:rgb(37, 59, 255)" scope="col">Tổng tiền đơn hàng: {{number_format($data->tongtien)}} VNĐ</th>
          </table>
        </div>
      </div>
{{-- <div class="pagination justify-content-center">{{$data->appends(request()->all())->links()}}</div> --}}
@endsection
@section('js')
<script>
  $('.btndelete').click(function(ev){
    ev.preventDefault();
    var _href=$(this).attr('href');
    $('form#form-delete').attr('action',_href);
   if(confirm('bạn có chắc muốn xóa nó không?')){
      $('form#form-delete').submit();
   }
    
  })
</script>

@endsection
