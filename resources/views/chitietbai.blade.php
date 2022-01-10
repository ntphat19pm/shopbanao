@extends('layouts.site')
@section('main')

@foreach ($lienhe as $item)
<br><img src="{{url('public/uploads')}}/{{$item->banner}}" width="100%" alt="">
@endforeach

{{-- <br><img class="rounded mx-auto d-block" src="{{url('public/uploads/baiviet')}}/{{$data->avatar}}" width="50%" alt=""> --}}

<div class="mt-5">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="text-center">
                <p><b><h1 style="color:red; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$data->tenbai}}</h1></b></p>
                {{-- <div class="badge rounded-pill bg-warning ml-5 pull-center">{{date("d-m-Y",strtotime($data->create_at))}}</div> --}}
            
        </div>
        <div class="col-lg-1">
        </div>
    <div class="row">
        <div class="col-lg-2">
        </div>              
        <div class="col-lg-8">
            <p class="text-left"><i>Được viết bởi {{$data->nguoidang}}
                <br>Xuất bản: {{date("d-m-Y",strtotime($data->create_at))}}</i></p>
            <p><b><h5 style="color:rgb(0, 0, 0)">{{$data->mota}}</h5></b></p>
            <hr>
            <div style="text-align: center;">                
                {!!$data->noidung!!}
            </div>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
</div>
