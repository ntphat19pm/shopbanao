@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('video.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('video.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

              <div class="col-lg-6">
                <div class="form-group invalid">
                    <label for="tenvideo" class="form-label">Tên menu</label>
                    <input type="text" value="{{$data->tenvideo}}" class="form-control" name="tenvideo" id="tenvideo" required >
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group invalid">
                        <label for="link" class="form-label">Đường dẫn</label>
                        <input type="text" value="https://youtu.be/{{$data->link}}" class="form-control" name="link" id="link" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
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
                </div>

                <div class="form-group invalid">
                    <label for="mota" class="form-label">Mô tả</label>
                    <textarea type="text" style="resize: none" rows="5" class="form-control" name="mota" id="mota" required >{{$data->mota}}</textarea>
                </div>
              </div>
  
              <div class="col-lg-6">
                
                    <iframe width="600" height="350" src="https://www.youtube.com/embed/{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
              </div>
                

            </div>

            
          </form>
    </div>
</div>

@endsection
