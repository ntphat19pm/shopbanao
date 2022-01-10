@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('baiviet.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('baiviet.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

                <div class="col-lg-4">
                  <div class="form-group">
                    <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/baiviet')}}/{{$data->avatar}}"  width="350px"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="avatar" />
                  </div>
                </div>
    
                <div class="col-lg-8">
                  
                  <div class="form-group invalid">
                    <label for="tenbai" class="form-label">Tên bài</label>
                    <input type="text" value="{{$data->tenbai}}" class="form-control" name="tenbai" id="tenbai" required >
                  </div>
                  
                  <div class="form-group invalid">
                      <label for="mota" class="form-label">Mô tả</label>
                      <input type="text" value="{{$data->mota}}" class="form-control" name="mota" id="mota" required >
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group invalid">
                        <label for="create_at" class="form-label">Ngày viết</label>
                        <input type="date" value="{{$data->create_at}}" class="form-control" name="create_at" id="create_at" required >
                      </div>
                      @if(Auth::user()->chucvu_id==1)
                      <div class="form-group">
                        <label for="status">Status<span class="text-danger font-weight-bold">*</span></label>
                        <select id="status" class="form-control custom-select @error('status') is-invalid @enderror" name="status" required autofocus>
                            <option value="0" {{($data->status== 0)?'selected':'' }}>Đã duyệt</option>
                            <option value="1" {{($data->status== 1)?'selected':'' }}>Chưa duyệt</option>
                        </select>
                        @error('phanloai_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                      @endif
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group invalid">
                        <label for="nguoidang" class="form-label">Người viết</label>
                        <input type="text" value="{{$data->nguoidang}}" class="form-control" name="nguoidang" id="nguoidang" required readonly >
                      </div>
                    </div>
                  </div>
                </div>
                  
              </div>
              
            <div class="form-group">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1">{{$data->noidung}}</textarea>
                <div class="invalid-feedback"></div>
            </div>

            
          </form>
    </div>
</div>

@endsection
