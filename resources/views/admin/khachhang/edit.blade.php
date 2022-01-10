@extends('layouts.admin')
@section('main')
    <div class="card-body">
        <form action="{{route('khachhang.update',$data->id)}}" method="POST">
            @csrf @method('PUT')
           
            <div class="row">

              <div class="col-lg-4">
                <div class="mb-3">
                    <label for="TieuDe" class="form-label">Họ và tên</label>
                    <input type="text" value="{{$data->hovaten}}" class="form-control" id="hovaten" name="hovaten" required >
                    <div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
                </div>
              </div>
              
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="gioitinh_id">Giới tính<span class="text-danger font-weight-bold">*</span></label>
                    <select id="gioitinh_id" class="form-control custom-select @error('gioitinh_id') is-invalid @enderror" name="gioitinh_id" required autofocus>
                        <option value="">--Chọn giới tính--</option>
                        @foreach($gioitinh as $value)
                        <option value="{{ $value->id }}" {{($data->gioitinh_id== $value->id)?'selected':'' }}>{{$value->gioitinh}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="sdt" class="form-label">SĐT</label>
                  <input  value="{{$data->sdt}}" type="text" class="form-control" id="sdt" name="sdt" required >
                  <div class="invalid-feedback">SĐT không được bỏ trống.</div>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="cmnd" class="form-label">CMND</label>
                  <input  value="{{$data->cmnd}}" type="text" class="form-control" id="cmnd" name="cmnd" required >
                  <div class="invalid-feedback">CMND không được bỏ trống.</div>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="ngaysinh" class="form-label">Ngày sinh</label>
                  <input  value="{{$data->ngaysinh}}" type="date" class="form-control" id="ngaysinh" name="ngaysinh" required >
                  <div class="invalid-feedback">Ngày sinh không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="diachi" class="form-label">Địa chỉ</label>
                  <input  value="{{$data->diachi}}" type="text" class="form-control" id="diachi" name="diachi" required >
                  <div class="invalid-feedback">Địa chỉ không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input  value="{{$data->email}}" type="email" class="form-control" id="email" name="email" required >
                  <div class="invalid-feedback">Email không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="mb-3">
                  <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
                  <input  value="{{$data->tendangnhap}}" type="text" class="form-control" id="tendangnhap" name="tendangnhap" required >
                  <div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="password" class="form-label">Mật khẩu</label>
                  <input type="password" class="form-control" id="password" name="password" >
                  <div class="invalid-feedback">Mật khẩu không được bỏ trống.</div>
                </div>

                <div class="form-check mb-3">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" onchange="SHPassword(this)">
                    Hiện mật khẩu
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
            </div>

            

          </form>
    </div>
</div>

@endsection
