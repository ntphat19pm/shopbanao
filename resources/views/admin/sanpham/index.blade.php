@extends('layouts.admin')
@section('main')
{{-- <form action="" class="form-inline">

  <div class="form-group ">
    <input class="form-control" name="tukhoa" placeholder="Nhập tên sản phẩm">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class ="fas fa-search"></i>
  </button>  
</form> --}}

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

      <a href="{{route('sanpham.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm sản phẩm</a> 
      <a href="{{ route('sanpham.xuat') }}" class="btn btn-outline-success ml-3 mt-2"><i class="fas fa-file-download"></i> Xuất ra Excel</a>
      <button type="button" class="btn btn-outline-warning mt-2 ml-3" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fas fa-file-upload"></i> Nhập Excel</button>
    </div>
    <form action="{{ route('sanpham.nhap') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Nhập file Excel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-0">
                <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                <a href="{{url('public')}}/danh-sach-san-pham.xlsx" class="btn btn-outline-info mt-3">Download file Excel</a>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-success">Upload file Excel</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </form>

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" width="12%" scope="col">Tên sản phẩm</th>
              <th scope="col">Ảnh</th>
              <th width="6%" scope="col">Size</th>
              <th scope="col">Giá nhập</th>
              <th scope="col">Giá xuất</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Nhãn hiệu</th>
              <th scope="col">Chất liệu</th>
              <th scope="col">Phân loại</th>
              <th scope="col">Đặc tính</th>
              <th scope="col">Danh mục</th>
              <th scope="col">Khuyến mãi</th>
              <th class="text-right" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php 
            $i = 0;
            @endphp
            @foreach ($data as $item)
            @php 
            $i++;
            @endphp
            <tr>
              <td class="text-center"><i>{{$i}}</i></td>
              <td>{{$item->tensp}}</td>
              <td >
                <img src="{{url('public/uploads/sanpham/avatar')}}/{{$item->anh}}" width="30px">
              </td>
              <td>{{$item->size->size}}</td>
              <td>{{$item->gianhap}}</td>
              <td>{{$item->giaxuat}}</td>
              <td>{{$item->soluong}}</td>
              <td>{{$item->nhanhieu->nhanhieu}}</td>
              <td>{{$item->chatlieu->chatlieu}}</td>
              <td>{{$item->phanloai->phanloai}}</td>
              <td>{{$item->dactinh->dactinh}}</td>
              <td>{{$item->danhmuc->tendanhmuc}}</td>
              <td>{{$item->khuyenmai->tenkhuyenmai}}</td>
            
              <td class="text-right">
                <a href="{{route('sanpham.show',$item->id)}}" class="btn btn-sm btn-warning">
                  <i class="fas fa-eye"></i>              
                </a>
                <a href="{{route('sanpham.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('sanpham.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
    <hr>
{{-- <div class="pagination justify-content-center">{{$data->appends(request()->all())->links()}}</div> --}}
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
