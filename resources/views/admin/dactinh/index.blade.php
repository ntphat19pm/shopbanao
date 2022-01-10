@extends('layouts.admin')
@section('main')
<form action="" method="GET" class="form-inline mb-3">
  <div class="form-group ">
    <input class="form-control" name="tukhoa" placeholder="Nhập tên danh mục">
   </div>
   <button type="submit" class="btn btn-primary">
    <i class ="fas fa-search"></i>
  </button>
  <a href="{{route('dactinh.create')}}"  class="btn btn-secondary ml-5">Thêm</a> 
</form>

<div class="card" >
 
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Đặc tính</th>
            <th class="text-center" scope="col">Số lượng sản phẩm</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->dactinh}}</td>
            <td class="text-center">{{$item->product->count()}}</td>
            
            <td class="text-right">
              <a href="{{route('dactinh.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('dactinh.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                <i class="fas fa-trash"></i>
              </a>
            </td>
         
            </tr>
          @endforeach
        </tbody>
      </table>
      <form method="POST" action="" id="form-delete">
        @csrf @method('DELETE')
      <form>
    </div>
</div>

@endsection
@section('js')
<script>
  $('.btndelete').click(function(ev){
    ev.preventDefault();
    var _href=$(this).attr('href');
    $('form#form-delete').attr('action',_href);
   if(confirm('bạn có chắc muốn xóa nó không?')){
      $('form#form-delete').submit();
   }
    
  })


</script>

@endsection
