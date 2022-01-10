@extends('layouts.admin')
@section('main')
<form action="" method="GET" class="form-inline mb-3">
  <div class="form-group ">
    <input class="form-control" name="tukhoa" placeholder="Nhập tên danh mục">
   </div>
   <button type="submit" class="btn btn-primary">
    <i class ="fas fa-search"></i>
  </button>
  <a href="{{route('baiviet.create')}}"  class="btn btn-secondary ml-5">Thêm</a> 
</form>
<p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">QUẢN LÝ CÁC BÀI VIẾT</h4></b></p>
<div class="card" >
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên bài viết</th>
            <th scope="col">Người viết</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Ảnh đại diện</th>
            <th class="text-right" width="10%" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->tenbai}}</td>
            <td>{{$item->nguoidang}}</td>
            <td>
              @if ($item->status==1)
              <span class="badge bg-navy">Chưa được duyệt</span>   
              @elseif($item->status==0)
              <span class="badge bg-olive">Đã được duyệt</span>
              @endif
            </td>
            <td><img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" width="100px"></td>
            {{-- <td>{{$item->link}}</td> --}}
            
            <td class="text-right">
              {{-- <a href="{{route('khuyenmai.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fas fa-eye"></i>              
              </a> --}}
              <a href="{{route('baiviet.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              @if(Auth::user()->chucvu_id==1)
              <a  href="{{route('baiviet.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                <i class="fas fa-trash"></i>
              </a>
              @endif
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
