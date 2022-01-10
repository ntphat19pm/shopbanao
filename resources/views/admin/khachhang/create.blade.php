@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('khachhang.store')}}" method="POST">
            @csrf
           
            <div class="row">

				<div class="col-lg-4">
					<div class="mb-3">
						<label for="TieuDe" class="form-label">Họ và tên</label>
						<input type="text" class="form-control" id="hovaten" name="hovaten" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
				
				<div class="col-lg-2">
					<div class="mb-3">
						<label for="privilege">Giới tính <span class="text-danger font-weight-bold">*</span></label>
						<select class="custom-select form-control @error('privilege') is-invalid @enderror" id="gioitinh" name="gioitinh" required>
						  <option value="">-- Choose --</option>
						  <option value="0">Nam</option>
						  <option value="1" selected="selected">Nữ</option>
						</select>
						@error('privilege')
						  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
						@enderror
					</div>
				</div>
	  
				<div class="col-lg-3">
					<div class="mb-3">
						<label for="sdt" class="form-label">SĐT</label>
						<input type="text" class="form-control" id="sdt" name="sdt" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
	  
				<div class="col-lg-3">
					<div class="mb-3">
						<label for="cmnd" class="form-label">CMND</label>
						<input type="text" class="form-control" id="cmnd" name="cmnd" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
	  
				<div class="col-lg-3">
					<div class="mb-3">
						<label for="ngaysinh" class="form-label">Ngày sinh</label>
						<input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="mb-3">
						<label for="diachi" class="form-label">Địa chỉ</label>
						<input type="text" class="form-control" id="diachi" name="diachi" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="text" class="form-control" id="email" name="email" required>
						<div class="invalid-feedback">Tên đăng nhập không được bỏ trống.</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="mb-3">
						<label for="tendangnhap" class="form-label">Tên đăng nhập</label>
						<input type="text" class="form-control" id="tendangnhap" name="tendangnhap" required>
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

				</div>
			</div>


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>

@endsection
