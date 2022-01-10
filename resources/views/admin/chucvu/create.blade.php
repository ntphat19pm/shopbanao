@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
        <form action="{{route('chucvu.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="tenchucvu" class="form-label">Nhập tên tên chức vụ</label>
              <input type="text" class="form-control" name="tenchucvu" id="tenchucvu" required >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
