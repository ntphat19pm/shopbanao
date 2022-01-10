@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('chucvu.update',$data->id)}}" method="POST">
            @csrf  @method('PUT')
            <div class="mb-3">
                <input type="hidden" id="id" name="id" value="{{$data->id}}" />
            <div class="mb-3">  
              <label for="tenchucvu" class="form-label">Nhập tên chức vụ</label>
              <input value="{{$data->tenchucvu}}" type="text" class="form-control" name="tenchucvu" id="tenchucvu" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
