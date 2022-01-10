@extends('layouts.site')
@section('main')
<div class="ajax_quick_view">

   
        
    @foreach ($lienhe as $item)
	<div class="row">
        <div class="col-lg-4">
          <div class="product-image ml-3 mt-5">
                <img class="rounded mx-auto d-block" width="45%" class="" src="{{url('public/uploads')}}/{{$item->logo}}">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="pr_detail mt-4">
                <div class="product_description">
                    <h4 class=""><a href=""></a></h4>
                    
                    <div class="product_price">
                        <span class="price">THÔNG TIN LIÊN HỆ</span>
                        {{-- <del>$55.25</del>
                        <div class="on_sale">
                            <span>35% Off</span>
                        </div> --}}
                    </div>
                    
                    <br><br><li>Địa chỉ: {{$item->diachi}}</li>
                    <br><li><a href="tel:{{$item->sdt}}">Số điện thoại: {{$item->sdt}}</a></li>
                    <br><li><a target="blank" href="mailto:{{$item->email}}">Email: {{$item->email}}</a></li>               
                    <br><li><a target="blank" href="http://zalo.me/{{$item->sdt}}">Liên hệ Zalo</a></li>  
                    <br><a target="blank" href="{{$item->facebook}}"><i class="fab fa-facebook"></i> Fanpage Facebook</a> 
                </div>
                <hr/>
                <div class="product_description">
                    <h4 class=""><a href=""></a></h4>
                    
                    <div class="product_price">
                        <span class="price">Fanpage</span>
                        {{-- <del>$55.25</del>
                        <div class="on_sale">
                            <span>35% Off</span>
                        </div> --}}
                    </div>
                    
                    <br><br>
                    {!!$item->fanpage!!}
                <hr />
                <div class="product_description mb-3">
                    <h4 class=""><a href=""></a></h4>
                    
                    <div class="product_price">
                        <span class="price">Bản đồ</span>
                        {{-- <del>$55.25</del>
                        <div class="on_sale">
                            <span>35% Off</span>
                        </div> --}}
                    </div>
                    <br><br>
                    {!!$item->map!!}
                                  
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
<script src="assets/js/scripts.js"></script>
@section('cke')
	<script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
@endsection
