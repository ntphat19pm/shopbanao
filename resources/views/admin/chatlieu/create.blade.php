@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('chatlieu.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="chatlieu" class="form-label">Nhập chất liệu</label>
              <input type="text" class="form-control" name="chatlieu" id="chatlieu" required >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
