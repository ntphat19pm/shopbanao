<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\giohang;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\nhanvien;
use App\Models\khachhang;
use App\Models\dathang;
use App\Models\lienhe;
use App\Models\video;
use App\Models\baiviet;
use App\Models\menu;
use App\Models\khuyenmai;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $view->with([
                'danhmuc'=>danhmuc::all(),
                'khuyenmai'=>khuyenmai::all(),
                'lienhe'=>lienhe::all(),
                'video'=>video::where('status',0)->paginate(6),
                'baiviet'=>baiviet::where('status',0)->paginate(9),
                'menu'=>menu::all(),
                'giohang'=>new giohang(),
                'sp'=>sanpham::search()->paginate(20),
            ]);

            $sanpham= sanpham::all()->count();
            $nhanvien= nhanvien::all()->count();
            $khachhang= khachhang::all()->count();
            $dh= dathang::all()->count();
            $view->with('sanpham',$sanpham)->with('nhanvien',$nhanvien)->with('khachhang',$khachhang)->with('dh',$dh);

        });
    }
}
