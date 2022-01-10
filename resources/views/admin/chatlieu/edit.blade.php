@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('chatlieu.update',$data->id)}}" method="POST">
            @csrf  @method('PUT')
            <div class="mb-3">
              <label for="chatlieu" class="form-label">Nhập chất liệu</label>
              <input value="{{$data->chatlieu}}" type="text" class="form-control" name="chatlieu" id="chatlieu" required >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
