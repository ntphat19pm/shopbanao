@extends('layouts.site')
@section('main')
    

    <div class="main_content">
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3 class="text-center">Đăng ký tài khoản</h3>
                                    <h3 class="text-center">Khách hàng</h3>
                                </div>
                                <form action="{{route('home.postdangky')}}" method="post">
                                  @csrf
                                  <div class="mb-3">
                                    <label for="TieuDe" class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" id="hovaten" name="hovaten">
                                    <span id="hovaten_error" style="color: red" role="alert"  ></span>
                                </div>
                                    <div class="mb-3">
                                        <label for="privilege"> Giới tính <span class="text-danger font-weight-bold">*</span></label>
                                        <select class="custom-select form-control @error('privilege') is-invalid @enderror" id="gioitinh" name="gioitinh" required>
                                          <option value="" selected="selected">-- Choose --</option>
                                          <option id="nam" value="0">Nam</option>
                                          <option id="nu" value="1">Nữ</option>
                                        </select>
                                        <span id="gioitinh_error" style="color: red" role="alert" ></span>
                                      </div>
                                      <div class="mb-3">
                                                      <label for="sdt" class="form-label">SĐT</label>
                                                      <input type="text" class="form-control" id="sdt" name="sdt" required>
                                                      <span id="sdt_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      <div class="mb-3">
                                                      <label for="cmnd" class="form-label">CMND</label>
                                                      <input type="text" class="form-control" id="cmnd" name="cmnd" required>
                                                      <span id="cmnd_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      <div class="mb-3">
                                                      <label for="ngaysinh" class="form-label">Ngày sinh</label>
                                                      <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
                                                      <span id="ngaysinh_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      
                                      <div class="mb-3">
                                                      <label for="diachi" class="form-label">Địa chỉ</label>
                                                      <input type="text" class="form-control" id="diachi" name="diachi" required>
                                                      <span id="diachi_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      <div class="mb-3">
                                                      <label for="email" class="form-label">Email</label>
                                                      <input type="email" class="form-control" id="email" name="email" required>
                                                      <span id="email_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      <div class="mb-3">
                                                      <label for="tendangnhap" class="form-label">Tên đăng nhập</label>
                                                      <input type="text" class="form-control" id="tendangnhap" name="tendangnhap" required>
                                                      <span id="tendangnhap_error" style="color: red" role="alert" ></span>
                                                  </div>
                                      <div class="mb-3">
                                                      <label for="password" class="form-label">Mật khẩu</label>
                                                      <input type="password" class="form-control" id="password" name="password" required>
                                                      <span id="password_error" style="color: red" role="alert" ></span>
                                                  </div>
                                                  {{-- <div class="mb-3">
                                                    <label for="repassword" class="form-label">Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control" id="repassword" name="repassword" required>
                                                    <span style="color: red" id="repassword_error"></span>
                                                </div> --}}
                                                  <div class="form-check">
                                                    <label class="form-check-label text-muted">
                                                      <input type="checkbox" class="form-check-input" onchange="SHPassword(this)">
                                                      Hiện mật khẩu
                                                    </label>
                                                  </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-fill-out btn-block" onclick="return validate();" name="login">Đăng ký</button>
                                    </div>
                                    <div class="different_login">
                                        <span> or</span>
                                    </div>
                                    <div class="form-group mb-5">
                                            <div class="form-note text-center mb-2">You have an account? <a href="{{route('home.getdangnhap')}}">Đăng nhập</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection