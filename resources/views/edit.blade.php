@extends('layouts.site')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="" method="">
           <p><b><h3 class="text-center mb-3" style="color: tomato">
             THÔNG TIN CÁ NHÂN KHÁCH HÀNG
             <br>
             -----***-----

           </h3></b></p>
            <div class="row">

              <div class="col-lg-4">
                <div class="mb-3">
                    <label for="TieuDe" class="form-label">Họ và tên</label>
                    <input type="text" value="{{Auth::guard('khachhang')->user()->hovaten}}" class="form-control" id="hovaten" name="hovaten" required disabled >
                    <div class="invalid-feedback">Họ và tên không được bỏ trống.</div>
                </div>
              </div>
              
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="gioitinh_id">Giới tính<span class="text-danger font-weight-bold">*</span></label>
                    <select id="gioitinh_id" class="form-control custom-select @error('gioitinh_id') is-invalid @enderror" name="gioitinh_id" required autofocus disabled>
                        <option value="">--Chọn giới tính--</option>
                        @foreach($gioitinh as $value)
                        <option value="{{ $value->id }}" {{(Auth::guard('khachhang')->user()->gioitinh_id== $value->id)?'selected':'' }}>{{$value->gioitinh}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="sdt" class="form-label">SĐT</label>
                  <input  value="{{Auth::guard('khachhang')->user()->sdt}}" type="text" class="form-control" id="sdt" name="sdt" required disabled>
                  <div class="invalid-feedback">SĐT không được bỏ trống.</div>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="cmnd" class="form-label">CMND</label>
                  <input  value="{{Auth::guard('khachhang')->user()->cmnd}}" type="text" class="form-control" id="cmnd" name="cmnd" required disabled>
                  <div class="invalid-feedback">CMND không được bỏ trống.</div>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="ngaysinh" class="form-label">Ngày sinh</label>
                  <input  value="{{Auth::guard('khachhang')->user()->ngaysinh}}" type="date" class="form-control" id="ngaysinh" name="ngaysinh" required disabled>
                  <div class="invalid-feedback">Ngày sinh không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mb-3">
                  <label for="diachi" class="form-label">Địa chỉ</label>
                  <input  value="{{Auth::guard('khachhang')->user()->diachi}}" type="text" class="form-control" id="diachi" name="diachi" required disabled>
                  <div class="invalid-feedback">Địa chỉ không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input  value="{{Auth::guard('khachhang')->user()->email}}" type="email" class="form-control" id="email" name="email" required disabled>
                  <div class="invalid-feedback">Email không được bỏ trống.</div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="mb-3">
                  <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
                  <input  value="{{Auth::guard('khachhang')->user()->tendangnhap}}" type="text" class="form-control" id="tendangnhap" name="tendangnhap" required disabled>
                  <div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
                </div>
              </div>
            </div>

            

          </form>
    </div>
</div>

@endsection
