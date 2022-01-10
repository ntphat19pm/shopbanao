@extends('layouts.admin')
@section('main')
<div class="card" >
 
    <div class="card-body">
        <form class="mb-3" action="{{route('danhmuc.store')}}" method="POST" id="form-1">
            @csrf
            <div class="form-group">
              <label for="tendanhmuc" class="form-label">Nhập tên danh mục</label>
              <input id="tendanhmuc" type="text" class="form-control" name="tendanhmuc" placeholder="Nhập danh mục" required>
              <span class="form-message"></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
