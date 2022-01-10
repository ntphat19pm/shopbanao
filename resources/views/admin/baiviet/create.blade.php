@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('baiviet.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('baiviet.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
              </a>
            </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="avatar">Hình ảnh <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                  </div>
                </div>
    
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="tenbai" class="form-label">Tên bài</label>
                    <input type="text" class="form-control" name="tenbai" id="tenbai" required >
                  </div>
                  
                  <div class="form-group invalid">
                      <label for="mota" class="form-label">Mô tả</label>
                      <input type="text" class="form-control" name="mota" id="mota" required >
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group invalid">
                        <label for="create_at" class="form-label">Ngày viết</label>
                        <input type="date" class="form-control" name="create_at" id="create_at" required >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group invalid">
                        <label for="nguoidang" class="form-label">Người viết</label>
                        <input type="text" value="{{Auth::user()->hovaten}}" class="form-control" name="nguoidang" id="nguoidang" required readonly >
                      </div>
                    </div>
                  </div>

                </div>
                  
              </div>
              
            <div class="form-group">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1"></textarea>
                <div class="invalid-feedback"></div>
            </div>

            
          </form>
    </div>
</div>

@endsection
