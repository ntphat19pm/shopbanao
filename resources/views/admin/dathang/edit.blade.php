@extends('layouts.admin')
@section('main')
<div class="">
    <a href="{{route('dathang.index')}}" class="btn btn-sm btn-danger mb-3">
      <i class="fas fa-sign-out-alt"> Quay về danh sách các đơn hàng</i>     
    </a>
</div>
<div class="card-body">
    <form action="{{route('dathang.update',$data->id)}}" method="POST">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-lg-3">  
                <div class="mb-3">
                    <label for="ngaydathang" class="form-label">Tên khách hàng</label>
                    <input type="text" value="{{$data->khachhang->hovaten}}" class="form-control" id="ngaydathang" name="ngaydathang" required readonly>
                </div>
            </div>
            <div class="col-lg-3">  
                <div class="mb-3">
                    <label for="ngaydathang" class="form-label">Ngày đặt hàng</label>
                    <input type="date" value="{{$data->ngaydathang}}" class="form-control" id="ngaydathang" name="ngaydathang" required readonly>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label for="tinhtrang_id">Tình trạng đơn hàng<span class="text-danger font-weight-bold">*</span></label>
                    <select id="tinhtrang_id" class="form-control custom-select @error('tinhtrang_id') is-invalid @enderror" name="tinhtrang_id" required autofocus>
                        <option value="">--Chọn tình trạng đơn hàng--</option>
                        @foreach($tinhtrang as $value)
                        <option value="{{ $value->id }}" {{($data->tinhtrang_id== $value->id)?'selected':'' }}>{{$value->tinhtrang}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="mb-3">
                <label for="TieuDe" class="form-label">Tổng tiền</label>
                <input type="text" value="{{$data->tongtien}}" class="form-control" id="tongtien" name="tongtien" required readonly>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>

        </form>
</div>

@endsection
