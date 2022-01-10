@extends('layouts.admin')
@section('main')
@if(Auth::user()->chucvu_id==1)
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
  <a href="{{route('thongke.index')}}" class="btn btn-outline-danger mt-2"><i class="fas fa-sort-amount-down-alt"></i> Thống kê đơn hàng</a> 
</div>
@endif
    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Mã đơn hàng</th>
              <th class="text-center" scope="col">Tên khách hàng</th>
              <th class="text-center" scope="col">Ngày đặt hàng</th>
              <th class="text-center" scope="col">Tình trạng</th>
              <th class="text-center" scope="col">Tổng tiền</th>
              
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
                <td>HD_{{$item->id}}</td>
                <td>{{$item->khachhang->hovaten}}</td>
                <td>{{date("d-m-Y",strtotime($item->ngaydathang))}}</td>
                <td>{{$item->tinhtrang->tinhtrang}}</td>
                <td>{{number_format($item->tongtien)}} VNĐ</td>

              <td class="text-center">
                <a href="{{route('dathang.show',$item->id)}}" class="btn btn-sm btn-warning">
                  <i class="fas fa-eye"></i>              
                </a>
                {{-- <a href="{{route('dathang.edit',$item->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>              
                </a> --}}
                @if(Auth::user()->chucvu_id==1)
                <a  href="{{route('dathang.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
