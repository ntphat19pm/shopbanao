@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
      <form action="{{route('khuyenmai.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
          <div class="form-group">
            <a href="{{route('khuyenmai.index')}}" class="btn btn-sm btn-danger mb-3">
                <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
            </a>

            <a>
              <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
          </a>
          </div>

          <div class="row">

            <div class="col-lg-4">
              <div class="form-group">
                <img class="rounded mx-auto d-block" src="{{url('public/uploads/khuyenmai')}}/{{$data->hinhanh}}"  width="300px"/>
                <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->hinhanh }}" autocomplete="hinhanh" />
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group invalid">
                <label for="tenkhuyenmai" class="form-label">Nhập tên khuyến mãi</label>
                <input type="text" value="{{$data->tenkhuyenmai}}" class="form-control" name="tenkhuyenmai" id="tenkhuyenmai" required >
              </div>

              <div class="form-group">
                <label for="sale">Sale<span class="text-danger font-weight-bold">*</span></label>
                <div class="input-group mb-3">
                  <input id="sale" value="{{$data->sale}}" type="number" min="0" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="sale" >
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">%</span>
                  </div>
                </div>
              </div>

              <div class="form-group invalid">
                <label for="thoigian" class="form-label">Thời gian khuyến mãi</label>
                <input type="text" value="{{$data->thoigian}}" class="form-control" name="thoigian" id="thoigian" required >
              </div>
            </div>

            {{-- <div class="col-lg-4">
              <div class="form-group">
                <img class="rounded mx-auto d-block" src="{{url('public/uploads')}}/{{$data->hinhanh}}"  width="300px"/>
                @error('file_uploads')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div> --}}

          </div> 
            

            
          </form>
    </div>
</div>

@endsection
