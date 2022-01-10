@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('menu.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
              <div class="form-group">
                <a href="{{route('menu.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về</i>     
                </a>
    
                <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
              </a>
              </div>

            <div class="row">

              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="tenmenu" class="form-label">Tên menu</label>
                    <input type="text" value="{{$data->tenmenu}}" class="form-control" name="tenmenu" id="tenmenu" required >
                  </div>
              </div>
  
              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="link" class="form-label">Đường dẫn</label>
                    <input type="text" value="{{$data->link}}" class="form-control" name="link" id="link" required readonly >
                </div>
              </div>
                
              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="route" class="form-label">Route</label>
                    <input type="text" value="{{$data->route}}" class="form-control" name="route" id="route" required readonly >
                </div>
              </div>

            </div>

            
          </form>
    </div>
</div>

@endsection
