@extends('layouts.admin')
@section('main')
<form action="" method="GET" class="form-inline mb-3">
  <div class="form-group ">
    <input class="form-control" name="tukhoa" placeholder="Nhập tên danh mục">
   </div>
   <button type="submit" class="btn btn-primary">
    <i class ="fas fa-search"></i>
  </button>
  <a href="{{route('video.create')}}"  class="btn btn-secondary ml-5">Thêm</a> 
</form>
<p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">QUẢN LÝ CÁC VIDEO</h4></b></p>
<div class="card" >
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên video</th>
            <th scope="col">Đường dẫn</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Mô tả</th>
            <th class="text-right" width="10%" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->tenvideo}}</td>
            <td><iframe width="300" height="169" src="https://www.youtube.com/embed/{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
            {{-- <td>{{$item->link}}</td> --}}
            <td>
              @if ($item->status==1)
              <span class="badge bg-navy">Chưa được duyệt</span>   
              @elseif($item->status==0)
              <span class="badge bg-olive">Đã được duyệt</span>
              @endif
            </td>
            <td>{{$item->mota}}</td>
            
            <td class="text-right">
              {{-- <a href="{{route('khuyenmai.show',$item->id)}}" class="btn btn-sm btn-warning">
                <i class="fas fa-eye"></i>              
              </a> --}}
              <a href="{{route('video.edit',$item->id)}}" class="btn btn-sm btn-success">
                <i class="fas fa-edit"></i>              
              </a> 
              <a  href="{{route('video.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
