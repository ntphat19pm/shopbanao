@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('tinhtrang.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="tinhtrang" class="form-label">Nhập tình trạng đơn hàng</label>
              <input type="text" class="form-control" name="tinhtrang" id="exampleInputEmail1" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
