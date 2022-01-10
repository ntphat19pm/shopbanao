@extends('layouts.admin')
@section('main') 
<form action="" class="form-inline mb-3">
<div class="form-group ">
  <input class="form-control" name="tukhoa" placeholder="Nhập tên danh mục">
 </div>
 <button type="submit" class="btn btn-primary">
  <i class ="fas fa-search"></i>
</button>
<a href="{{route('khachhang.create')}}"  class="btn btn-secondary ml-5">Thêm</a> 
</form>

<div class="card" >
 
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">SĐT</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Tên đăng nhập</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->hovaten}}</td>
            <td>
              @if ($item->gioitinh_id==0)
              <span class="badge bg-primary">Nam</span>
                
            @else
              <span class="badge bg-success">Nữ</span>
            @endif

            </td>
            <td>{{$item->sdt}}</td>
            <td>{{$item->diachi}}</td>
            <td>{{$item->tendangnhap}}</td>
           
            <td class="text-right">
              <a href="{{route('khachhang.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fas fa-eye"></i>              
              </a>
              <a href="{{route('khachhang.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('khachhang.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
