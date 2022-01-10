@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <a href="{{route('sanpham.edit',$data->id)}}" class="btn btn-sm btn-success float-right mb-3">
                    <i class="fas fa-edit"> Sửa</i>              
                </a>
                <a href="{{route('sanpham.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="form-group">
                    <img class="rounded mx-auto d-block" src="{{url('public/uploads/sanpham/avatar')}}/{{$data->anh}}"  width="300px"/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                <label for="tensp" class="form-label">Nhập tên sản phẩm</label>
                <input type="text" value="{{$data->tensp}}" class="form-control" name="tensp" id="tensp" required disabled>
                </div>

                <div class="form-group">
                    <label for="size_id">Size áo<span class="text-danger font-weight-bold">*</span></label>
                    <select id="size_id" class="form-control custom-select @error('size_id') is-invalid @enderror" name="size_id" required disabled>
                        <option value="">--Chọn size áo--</option>
                        @foreach($size as $value)
                        <option value="{{ $value->id }}" {{($data->size_id== $value->id)?'selected':'' }}>{{$value->size}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="danhmuc_id">Danh mục<span class="text-danger font-weight-bold">*</span></label>
                    <select id="danhmuc_id" class="form-control custom-select @error('danhmuc_id') is-invalid @enderror" name="danhmuc_id" required disabled>
                        <option value="">--Chọn danh mục sản phẩm--</option>
                        @foreach($danhmuc as $value)
                        <option value="{{ $value->id }}" {{($data->danhmuc_id== $value->id)?'selected':'' }}>{{$value->tendanhmuc}}</option>
                        @endforeach
                    </select>
                    @error('phanloai_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="soluong">Số lượng <span class="text-danger font-weight-bold">*</span></label>
                    <input id="soluong" value="{{$data->soluong}}" type="number" min="0" class="form-control @error('soluong') is-invalid @enderror" name="soluong" disabled />
                    @error('soluong')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="gianhap">Giá nhập <span class="text-danger font-weight-bold">*</span></label>
                        <input id="gianhap" value="{{$data->gianhap}}" type="number" min="0" class="form-control @error('gianhap') is-invalid @enderror" name="gianhap" value="{{ old('gianhap') }}" required autocomplete="gianhap" disabled />
                        @error('gianhap')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="giaxuat">Giá xuất <span class="text-danger font-weight-bold">*</span></label>
                        <input id="giaxuat" value="{{$data->giaxuat}}" type="number" min="0" class="form-control @error('gianhap') is-invalid @enderror" name="giaxuat" value="{{ old('giaxuat') }}" required autocomplete="giaxuat" disabled />
                        @error('giaxuat')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                </div>
            </div>
            

            

            <div class="col-lg-4">
                <div class="form-group">
                    <label for="nhanhieu_id">Nhãn hiệu<span class="text-danger font-weight-bold">*</span></label>
                    <select id="nhanhieu_id" class="form-control custom-select @error('nhanhieu_id') is-invalid @enderror" name="nhanhieu_id" required disabled>
                        <option value="">-- Chọn loại nhãn hiệu --</option>
                        @foreach($nhanhieu as $value)
                            <option value="{{ $value->id }}" {{($data->nhanhieu_id== $value->id)?'selected':'' }}>{{$value->nhanhieu}}</option>
                        @endforeach
                    </select>
                    @error('nhanhieu_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="chatlieu_id">Xuất xứ<span class="text-danger font-weight-bold">*</span></label>
                    <select id="chatlieu_id" class="form-control custom-select @error('chatlieu_id') is-invalid @enderror" name="chatlieu_id" required disabled>
                        <option value="">-- Chọn xuất xứ --</option>
                        @foreach($chatlieu as $value)
                        <option value="{{ $value->id }}" {{($data->chatlieu_id== $value->id)?'selected':'' }}>{{$value->chatlieu}}</option>
                        @endforeach
                    </select>
                    @error('chatlieu_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phanloai_id">Phân loại<span class="text-danger font-weight-bold">*</span></label>
                    <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required disabled>
                        <option value="">--Chọn phân loại--</option>
                        @foreach($phanloai as $value)
                        <option value="{{ $value->id }}" {{($data->phanloai_id== $value->id)?'selected':'' }}>{{$value->phanloai}}</option>
                        @endforeach
                    </select>
                    @error('phanloai_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dactinh_id">Đặc tính<span class="text-danger font-weight-bold">*</span></label>
                    <select id="dactinh_id" class="form-control custom-select @error('dactinh_id') is-invalid @enderror" name="dactinh_id" required disabled>
                        <option value="">-- Chọn xuất xứ --</option>
                        @foreach($dactinh as $value)
                        <option value="{{ $value->id }}" {{($data->dactinh_id== $value->id)?'selected':'' }}>{{$value->dactinh}}</option>
                        @endforeach
                    </select>
                    @error('dactinh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="khuyenmai_id">Khuyến mãi<span class="text-danger font-weight-bold">*</span></label>
                    <select id="khuyenmai_id" class="form-control custom-select @error('khuyenmai_id') is-invalid @enderror" name="khuyenmai_id" required disabled>
                        <option value="">--Chọn khuyến mãi sản phẩm--</option>
                        @foreach($khuyenmai as $value)
                        <option value="{{ $value->id }}" {{($data->khuyenmai_id== $value->id)?'selected':'' }}>{{$value->tenkhuyenmai}}</option>
                        @endforeach
                    </select>
                    @error('phanloai_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                
            </div>

            <div class="col-lg-4">

                <div class="form-group mt-5">
                    <img class="rounded mx-auto d-block" src="{{url('public/uploads/sanpham/chitiet')}}/{{$data->anh1}}"  width="300px"/>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-group">
                    <label for="chitiet" class="form-label">Chi tiết</label>
                    <textarea  class="form-control" name="chitiet" id="chitiet" disabled>{{$data->chitiet}}</textarea>
                    <div class="invalid-feedback"></div>
                </div> 
                
                <iframe width="100%" height="432" src="https://www.youtube.com/embed/{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>  
        </div>
        </form>
    </div>
</div>

@endsection
@section('cke')
	<script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
@endsection