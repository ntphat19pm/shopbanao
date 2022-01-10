@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('phanloai.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="phanloai" class="form-label">Phân loại</label>
              <input type="text" class="form-control" name="phanloai" id="exampleInputEmail1" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
