@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('phanloai.update',$data->id)}}" method="POST">
            @csrf  @method('PUT')
            <div class="mb-3">
                <input type="hidden" id="id" name="id" value="{{$data->id}}" />
            <div class="mb-3">  
              <label for="phanloai" class="form-label">Phân loại</label>
              <input value="{{$data->phanloai}}" type="text" class="form-control" name="phanloai" id="phanloai" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
