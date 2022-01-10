@extends('layouts.admin')
@section('main')
@if(Auth::user()->chucvu_id==1)
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

  <a href="{{route('thongke.create')}}" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Nhập thống kê</a> 

</div>

    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Ngày thống kê</th>
              <th scope="col">Doanh số</th>
              <th scope="col">Doanh thu</th>
              <th scope="col">Lợi nhuận</th>
              <th scope="col">Số lượng bán</th>
              <th scope="col">Tổng đơn hàng</th>
              <th class="text-center" scope="col">Action</th>
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
              <td class="text-center">{{date("d-m-Y",strtotime($item->ngaydathang))}}</td>
              <td class="text-center">{{number_format($item->doanh_so)}} VNĐ</td>
              <td class="text-center">{{number_format($item->doanh_thu)}} VNĐ</td>
              <td class="text-center">{{number_format($item->loi_nhuan)}} VNĐ</td>
              <td class="text-center">{{$item->soluong_ban}}</td>
              <td class="text-center">{{$item->tong_donhang}}</td> 
              <td class="text-center">
                <a href="{{route('thongke.edit',$item->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>              
                </a>
                <a  href="{{route('thongke.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
@endif
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
