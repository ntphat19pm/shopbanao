@extends('layouts.site')
@section('main')
<div class="ajax_quick_view">

   
        
  
	<div class="row">
        <div class="col-lg-6 col-md-6 mb-4 mb-5">
          <div class="product-image ml-3 mt-5">
                
                   <img width="45%" class="" src="{{url('public/uploads/sanpham/avatar')}}/{{$data->anh}}">
                   <img width="45%" class="ml-1" src="{{url('public/uploads/sanpham/chitiet')}}/{{$data->anh1}}">
               
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5">
            <div class="pr_detail mt-4">
                <div class="product_description">
                    <h4 class=""><a href="">{{$data->tensp}}</a></h4>
                    
                    <div class="product_price">
                        <span class="price">{{number_format($data->giaxuat)}}.VND</span>
                        {{-- <del>$55.25</del>
                        <div class="on_sale">
                            <span>35% Off</span>
                        </div> --}}
                    </div>
                    
                    <div class="product_sort_info">
                        <ul>
                            <br><br><li>Phân loại sản phẩm: <i class="linearicons-shield-check"></i>{{$data->phanloai->phanloai}}</li>
                            {{-- <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-11">
                        <div class="form-group">
                            <label for="chitiet" class="form-label">Chi tiết</label>
                            {!!$data->chitiet!!}
                        </div>
                    </div>
                    
                   
                </div>
                <hr />
                <div class="cart_extra">
                    @if($data->size->id==0)
                        <h4><span class="badge rounded-pill bg-danger mr-5 pull-left">{{$data->size->size}} </span></h4>
                    @elseif($data->size->id==1)
                        <h4><span class="badge rounded-pill bg-dark mr-5 pull-left">{{$data->size->size}} </span></h4>
                    @elseif($data->size->id==2)
                        <h4><span class="badge rounded-pill bg-secondary mr-5 pull-left">{{$data->size->size}} </span></h4>
                    @elseif($data->size->id==3)
                        <h4><span class="badge rounded-pill bg-success mr-5 pull-left">{{$data->size->size}} </span></h4>
                    @endif
                    {{-- <h3><span class="badge rounded-pill bg-danger mr-4 ml-3">Size áo: {{$data->size->size}} </span></h3> --}}



                    <div class="cart_btn">
                        <button type="button" class="btn btn-outline-danger"><a href="{{route('home.themgiohang',$data->id)}}"><i class="icon-basket-loaded"></i> Thêm vào giỏ hàng</button>
                        <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                        <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                    </div>
                </div>
                <hr />
                <ul class="product-meta">
                   
                    <li>Danh mục: <a href="#">{{$data->danhmuc->tendanhmuc}}</a></li>
                    
                </ul>
                
                <div class="product_share">
                    <span>Share:</span>
                    <ul class="social_icons">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div style="text-align: center" class="mb-3">
    <h3>MÔ TẢ SẢN PHẨM VIDEO</h3>
    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
            <iframe width="100%" height="552" src="https://www.youtube.com/embed/{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-2">
            
        </div>
        
    </div>
</div>

@endsection
@section('cke')
	<script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
@endsection
