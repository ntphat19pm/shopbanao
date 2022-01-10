@extends('layouts.site')
@section('main')

@foreach ($lienhe as $item)
<br><img src="{{url('public/uploads')}}/{{$item->banner}}" width="100%" alt="">
@endforeach

<section class="offer_section ">
    <div class="offer_container">   
      <div class="container ">  
        <div class="row">
          @foreach ($khuyenmai as $item)
          @if($item->status_id==1)
          <div></div>
          @else
            <div class="col-md-6  ">
              <div class="box ">
                <div class="img-box">
                  <img src="{{url('public/uploads/khuyenmai')}}/{{$item->hinhanh}}" alt="">
                </div>
                <div class="detail-box">
                  <h5 style="color: red">
                    <span>{{$item->tenkhuyenmai}}</span>
                  </h5>
                  <h6 style="color:yellow">
                    <span>Sale {{$item->sale}}%</span>
                  </h6>
                  <h6 style="color: red">
                  {{$item->thoigian}}
                  </h6>
                </div>
              </div>
            </div>
          @endif
         
          @endforeach
        </div>   
      </div>
    </div>
</section>


<div>
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <audio autoplay>
                        <source src="{{url('public')}}/amthanh.mp3">
                    </audio>
                    @foreach ($sp as $item)
                    @if ($item->soluong>=1)                  
                    <div class="col-3">
                        <div class="row shop_container list">
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="product">
                                  @if($item->khuyenmai->sale==0)
                                    <span></span>
                                  @else
                                    <span class="pr_flash bg-success">Sale {{$item->khuyenmai->sale}}%</span>
                                    @endif
                                    <div class="product_img">
                                        <a href="{{route('home.chitiet',$item->id)}}">
                                            <img class="img-fluid" src="{{url('public/uploads/sanpham/avatar')}}/{{$item->anh}}" alt="product_img">
                                        </a>
                                        <div class="product_info">
                                            {{-- <h6 class="product_title"><a href="{{route('home.chitiet',$item->id)}}">{{$item->tensp}}</a></h6> --}}
                                            <div class="product_price">
                                                <span class="price">{{number_format($item->giaxuat)}}đ</span>
                                                {{-- <del>$99.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div> --}}
                                            </div>
                                            @if($item->size->id==0)
                                            <span class="badge rounded-pill bg-danger ml-5 pull-right">{{$item->size->size}} </span>
                                            @elseif($item->size->id==1)
                                            <span class="badge rounded-pill bg-dark ml-5 pull-right">{{$item->size->size}} </span>
                                            @elseif($item->size->id==2)
                                            <span class="badge rounded-pill bg-secondary ml-5 pull-right">{{$item->size->size}} </span>
                                            @elseif($item->size->id==3)
                                            <span class="badge rounded-pill bg-success ml-5 pull-right">{{$item->size->size}} </span>
                                            @endif
                                           
                                        </div>
                                        
                                    </div>
                                    <div class="list_product_action_box center">
                                        <ul class="list_none pr_action_btn btn-sm">
                                            <a href="{{route('home.themgiohang',$item->id)}}"><button class="btn btn-block btn-outline-warning">Thêm</button></a>
                                            {{-- <a href="{{route('home.chitiet',$item->id)}}" type="button" class="btn btn-outline-primary">Chi tiết</a> --}}
                                        </ul>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endif

                     @endforeach
                     
                </div>
                <div>
                    <div class="pagination justify-content-center" >{{$sp->appends(request()->all())->links()}}</div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
    
</div>    
    @endsection
       