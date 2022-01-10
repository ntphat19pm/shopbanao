@extends('layouts.site')
@section('main')

@foreach ($lienhe as $item)
<br><img src="{{url('public/uploads')}}/{{$item->banner}}" width="100%" alt="">
@endforeach

<div>
    <div class="main_content">
        <div class="section">
            <div class="container">
                <div class="row">
                    @foreach ($baiviet as $item)               
                    <div class="col-lg-4">
                        <div class="row shop_container list">
                            <div class="col-lg-3 col-md-3 col-3">
                                <div class="product">
                                        <a href="{{route('home.chitietbai',$item->id)}}">
                                            <img class="img-fluid" width="100%" src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" alt="product_img">
                                        </a>
                                        <div class="product_info">
                                            <div class="product_title">
                                                <a href="{{route('home.chitietbai',$item->id)}}"><span class="price">{{$item->tenbai}}</span></a>
                                            </div>
                                            <h6 class="product_title" style="font-size: 14px">{!!$item->mota!!}</h6>
                                                {{-- <h6 style="font-size: 14px" class="">{!!$item->mota!!}</h6> --}}
                                                <hr>
                                                <span class="badge rounded-pill bg-warning ml-5 pull-right">{{date("d-m-Y",strtotime($item->create_at))}} </span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                     @endforeach
                     
                </div>
                <div>
                    <div class="pagination justify-content-center" >{{$baiviet->appends(request()->all())->links()}}</div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
    
</div>    
    @endsection
       