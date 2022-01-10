@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <a>
                  <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
              </a>
              <a href="{{route('menu.index')}}" class="btn btn-sm btn-danger mb-3">
                  <i class="fas fa-sign-out-alt"> Quay về bảng khuyến mãi</i>     
              </a>
            </div>

            <div class="row">

              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="tenmenu" class="form-label">Tên menu</label>
                    <input type="text" class="form-control" name="tenmenu" id="tenmenu" required >
                  </div>
              </div>
  
              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="link" class="form-label">Đường dẫn</label>
                    <input type="text" class="form-control" name="link" id="link" required >
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group invalid">
                    <label for="route" class="form-label">Route</label>
                    <input type="text" class="form-control" name="route" id="route" required >
                </div>
              </div>
                
            </div>

            
          </form>
    </div>
</div>

@endsection
