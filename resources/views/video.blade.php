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
                    @foreach ($video as $item)                 
                    <div class="col-lg-6">
                                <div class="product">
                                        <a href="">
                                            <iframe width="100%" height="316" src="https://www.youtube.com/embed/{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </a>
                                        <div class="product_info">
                                            {{-- <h6 class="product_title"><a href="{{route('home.chitiet',$item->id)}}">{{$item->tensp}}</a></h6> --}}
                                            <div class="product_price">
                                                <span class="price">{{$item->tenvideo}}</span>
                                                {{-- <del>$99.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div> --}}
                                            </div>
                        
                                            {!!$item->mota!!}
                                            <hr>
                                            <div class="text-right"><i>{{date("d-m-Y",strtotime($item->ngaydang))}}</i></div>
                                        </div>
                                        
                                </div>
                        
                    </div>
                     @endforeach
                     
                </div>
                <div>
                    <div class="pagination justify-content-center" >{{$video->appends(request()->all())->links()}}</div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
    
</div>    
    @endsection
       