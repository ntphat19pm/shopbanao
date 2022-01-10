@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('khuyenmai.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('khuyenmai.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
              </a>
            </div>

            <div class="row">

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="hinhanh">Hình ảnh khuyến mãi <span class="text-danger font-weight-bold">*</span></label>
                  <input id="file_uploads" type="file" class="form-control @error('hinhanh') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                  @error('file_uploads')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>
  
              <div class="col-lg-6">
                <div class="form-group invalid">
                  <label for="tenkhuyenmai" class="form-label">Nhập tên khuyến mãi</label>
                  <input type="text" class="form-control" name="tenkhuyenmai" id="tenkhuyenmai" required >
                </div>
  
                <div class="form-group">
                  <label for="sale">Sale<span class="text-danger font-weight-bold">*</span></label>
                  <div class="input-group mb-3">
                    <input type="number" min="0" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="sale">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
                  </div>
                </div>
  
                <div class="form-group invalid">
                  <label for="thoigian" class="form-label">Thời gian khuyến mãi</label>
                  <input type="text" class="form-control" name="thoigian" id="thoigian" required >
                </div>

                {{-- <div class="mb-3">
                  <label for="status_id">Chế độ <span class="text-danger font-weight-bold">*</span></label>
                  <select class="custom-select form-control @error('status_id') is-invalid @enderror" id="status_id" name="status_id" required>
                    <option value=""selected="selected">-- Choose --</option>
                    <option value="0" selected="selected">Hiển thị</option>
                    <option value="1">Ẩn</option>
                  </select>
                </div> --}}
                
            </div>

            
          </form>
    </div>
</div>

@endsection
