@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('dactinh.update',$data->id)}}" method="POST">
            @csrf  @method('PUT')
            <div class="mb-3">
              <label for="dactinh" class="form-label">Nhập chất liệu</label>
              <input value="{{$data->dactinh}}" type="text" class="form-control" name="dactinh" id="dactinh" required >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
