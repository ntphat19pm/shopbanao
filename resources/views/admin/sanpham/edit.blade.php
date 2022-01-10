@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('sanpham.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('sanpham.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <img class="rounded mx-auto d-block" src="{{url('public/uploads/sanpham/avatar')}}/{{$data->anh}}"  width="300px"/>
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->anh }}" autocomplete="hinhanh" />
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="tensp" class="form-label">Nhập tên sản phẩm</label>
                    <input type="text" value="{{$data->tensp}}" class="form-control" name="tensp" id="tensp" onblur="ChangeToSlug();" required >
                    </div>

                    <div class="form-group invalid">
                        <label for="slug" class="form-label">Sản phẩm Slug</label>
                        <input type="text" value="{{$data->slug}}" class="form-control" name="slug" id="slug" required readonly >
                    </div>

                    <div class="form-group">
                        <label for="size_id">Size áo<span class="text-danger font-weight-bold">*</span></label>
                        <select id="size_id" class="form-control custom-select @error('size_id') is-invalid @enderror" name="size_id" required>
                            <option value="">--Chọn size áo--</option>
                            @foreach($size as $value)
                            <option value="{{ $value->id }}" {{($data->size_id== $value->id)?'selected':'' }}>{{$value->size}}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="danhmuc_id">Danh mục<span class="text-danger font-weight-bold">*</span></label>
                        <select id="danhmuc_id" class="form-control custom-select @error('danhmuc_id') is-invalid @enderror" name="danhmuc_id" required autofocus>
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
                        <input id="soluong" value="{{$data->soluong}}" type="number" min="0" class="form-control @error('soluong') is-invalid @enderror" name="soluong" />
                        @error('soluong')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="gianhap">Giá nhập <span class="text-danger font-weight-bold">*</span></label>
                        <input id="gianhap" value="{{$data->gianhap}}" type="number" min="0" class="form-control @error('gianhap') is-invalid @enderror" name="gianhap" value="{{ old('gianhap') }}" required autocomplete="gianhap" />
                        @error('gianhap')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                
                </div>
                
    
                
    
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nhanhieu_id">Nhãn hiệu<span class="text-danger font-weight-bold">*</span></label>
                        <select id="nhanhieu_id" class="form-control custom-select @error('nhanhieu_id') is-invalid @enderror" name="nhanhieu_id" required autofocus>
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
                        <select id="chatlieu_id" class="form-control custom-select @error('chatlieu_id') is-invalid @enderror" name="chatlieu_id" required autofocus>
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
                        <select id="phanloai_id" class="form-control custom-select @error('phanloai_id') is-invalid @enderror" name="phanloai_id" required autofocus>
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
                        <select id="dactinh_id" class="form-control custom-select @error('dactinh_id') is-invalid @enderror" name="dactinh_id" required autofocus>
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
                        <select id="khuyenmai_id" class="form-control custom-select @error('khuyenmai_id') is-invalid @enderror" name="khuyenmai_id" required autofocus>
                            <option value="">--Chọn khuyến mãi sản phẩm--</option>
                            @foreach($khuyenmai as $value)
                            <option value="{{ $value->id }}" {{($data->khuyenmai_id== $value->id)?'selected':'' }}>{{$value->tenkhuyenmai}}</option>
                            @endforeach
                        </select>
                        @error('phanloai_id')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="giaxuat">Giá xuất <span class="text-danger font-weight-bold">*</span></label>
                        <input id="giaxuat" value="{{$data->giaxuat}}" type="number" min="0" class="form-control @error('gianhap') is-invalid @enderror" name="giaxuat" value="{{ old('giaxuat') }}" required autocomplete="giaxuat" />
                        @error('giaxuat')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    
                </div>

                <div class="col-lg-4">
    
                    <div class="form-group">
                        <img class="rounded mx-auto d-block" src="{{url('public/uploads/sanpham/chitiet')}}/{{$data->anh1}}"  width="300px"/>
                        <input id="file_uploads1" type="file" class="form-control @error('file_uploads1') is-invalid @enderror" name="file_uploads1" value="{{ $data->anh1 }}" autocomplete="hinhanh" />
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1">{{$data->chitiet}}</textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group invalid">
                                <label for="link" class="form-label">Đường dẫn</label>
                                <input type="text" value="{{$data->link}}" class="form-control" name="link" id="link" required>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <iframe width="100%" height="285" src="https://www.youtube.com/embed/{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
          </form>
    </div>
</div>

@endsection
@section('js')
<script>
    function ChangeToSlug()
    {
        var tensp, slug;
    
        //Lấy text từ thẻ input title 
        tensp = document.getElementById("tensp").value;
    
        //Đổi chữ hoa thành chữ thường
        slug = tensp.toLowerCase();
    
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, " - ");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@endsection