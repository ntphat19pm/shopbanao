
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trang web bán áo</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/animate.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/all.min.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/themify-icons.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/linearicons.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/flaticon.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/simple-line-icons.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/owlcarousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/owlcarousel/css/owl.theme.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/owlcarousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/slick-theme.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets/css/responsive.css" />

    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets123/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/shopwise')}}/assets123/css/templatemo.css">
    {{-- <link rel="stylesheet" href="{{url('public/shopwise')}}/assets123/css/fontawesome.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{url('public/feane')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public/feane')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public/feane')}}/css/responsive.css" rel="stylesheet" />

    <script>
        function SHPassword(x)
        {
          var chbox=x.checked;
          if(chbox)
          {
            document.getElementById("password").type="text";
            document.getElementById("repassword").type="text";
          }
          else{
            document.getElementById("password").type="password";
            document.getElementById("repassword").type="password";
          }
          
        }
      </script>
      <script src="{{url('public')}}/validate.js"></script>

</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">HƯỚNG DẪN CHỌN SIZE ÁO</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5 class="text-center mb-2" style="color: rgb(82, 186, 255)">CHỌN SIZE ÁO THUN</h5>
                  <img class="rounded mx-auto d-block mb-5" height="80%" src="{{url('public')}}/aothun.png"/>

                  <h5 class="text-center mb-2" style="color: rgb(82, 186, 255)">CHỌN SIZE ÁO SƠ MI</h5>
                  <img class="rounded mx-auto d-block" height="40%" src="{{url('public')}}/somi.jpg"/>
                </div>
                {{-- <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>

    <form action="" class="form-inline">
        <div class="modal fade" id="modal-danger">
            <div class="modal-dialog">
              <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Bạn cần tìm ?</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="">
                            <div class="form-group ml-3">
                                <div class="input-group">
                                    <input size="35" type="text" class="form-control" name="tukhoa" placeholder="Nhập tên sản phẩm cần tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"> <i class ="fas fa-search"></i> Tìm</button>
                                  </div>
                            </div>
                        </div>
                        {{-- <div class="">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class ="fas fa-search"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-outline-light">Save changes</button>
                </div> --}}
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>
    
    <header class="header_wrap fixed-top header_with_topbar">
        <div class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('home.index')}}">
                        @foreach ($lienhe as $item)
                        <img class="" width="55px" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" />
                        @endforeach
                        <span class="mt-3" style="color:tomato">NTP Shop</span>

                        {{-- <img class="logo_dark" src="{{url('public/shopwise')}}/assets/images/logo_dark.png" alt="logo" /> --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @foreach ($menu as $item)
                            @if($item->id==1)
                            <li><a class="nav-link nav_item" href="http://shopbanao.net/{{$item->link}}">{{$item->tenmenu}}</a></li>
                            {{-- href="{{route('home.home')}}" --}}
                            @elseif($item->id==2)
                            <li><a class="nav-link nav_item" data-toggle="modal" data-target="#modal-lg" href="{{$item->link}}">{{$item->tenmenu}}</a></li>
                            @elseif($item->id==3)
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="{{$item->link}}" data-toggle="dropdown">{{$item->tenmenu}}</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                            @foreach ($danhmuc as $dt)
                                                <li><a class="dropdown-item nav-link nav_item" href="#">{{$dt->tendanhmuc}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endif
                            @endforeach
                            {{-- @if (Auth::guard('khachhang')->user())
                            <li><a class="nav-link nav_item" href="{{route('get.donhang',Auth::guard('khachhang')->user()->id)}}">Đơn hàng của tôi</a></li>
                            @endif --}}
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        @foreach ($menu as $item)
                        @if($item->id==4)
                            @if (!Auth::guard('khachhang')->user())
                            <li><a class="nav-link nav_item" href="{{$item->link}}">{{$item->tenmenu}}</a></li>
                            {{-- href="{{route('home.getdangnhap')}}" --}}
                            @endif
                        @endif
                        @endforeach
                        @if (Auth::guard('khachhang')->user())
                            
                       
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="{{route('get_dathang')}}" data-toggle="dropdown"><i class="far fa-user"></i> {{Auth::guard('khachhang')->user()->hovaten}}</a>
                           
                            <div class="cart_box dropdown-menu dropdown-menu-left">
                                <ul class="cart_list">
                                    @foreach ($menu as $item)
                                    @if($item->id==7)
                                    <li class="text-right">
                                        <a href="{{route('get.donhang',Auth::guard('khachhang')->user()->id)}}">{{$item->tenmenu}}</a>
                                    </li>
                                    @elseif($item->id==6)
                                    <li class="text-right">
                                        <a href="{{route('home.edit',Auth::guard('khachhang')->user()->id)}}">{{$item->tenmenu}}</a>
                                    </li>
                                    
                                    @elseif($item->id==5)
                                        <li class="text-right">
                                            <a href="{{$item->link}}">{{$item->tenmenu}}</a>
                                            {{-- <a href="{{route('home.dangxuat')}}">Đăng xuất</a> --}}
                                        </li>
                                    @endif
                                    @endforeach
                                    
                                </ul>
                                
                            </div>
                        </li>
                        @endif
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="{{route('get_dathang')}}" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">{{$giohang->soluong}}</span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    @foreach ($giohang->items as $item)
                                    <li>
                                        <a href="{{route('giohang.xoa',$item['id'])}}" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="{{url('public/uploads/sanpham/avatar')}}/{{$item['anh']}}" alt="cart_thumb1">{{$item['tensp']}}</a>
                                        <span class="cart_quantity"> {{$item['soluong']}} x <span class="cart_amount"> <span class="price_symbole"></span></span>{{number_format($item['gia'])}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Tổng tiền:</strong> <span class="cart_price"> <span class="price_symbole"></span></span>{{number_format($giohang->gia)}}.VNĐ</p>
                                    <p class="cart_buttons"><a href="{{route('giohang.index')}}" class="btn btn-fill-out checkout">Thanh toán</a></p>
                                </div>
                            </div>
                        </li>
                         @foreach ($menu as $item)
                            @if($item->id==8)
                            <li class="dropdown cart_dropdown">
                                <a class="nav-link cart_trigger" href="" data-toggle="modal" data-target="#modal-danger"><i class="fas fa-search"></i> {{$item->tenmenu}}</a>
                            </li>
                            @elseif($item->id==10)
                            <li class="dropdown cart_dropdown">
                                <a class="nav-link cart_trigger" href="" data-toggle="dropdown">{{$item->tenmenu}}</a>
                               
                                <div class="cart_box dropdown-menu dropdown-menu-left">
                                    <ul class="cart_list">
                                        @foreach ($menu as $item)
                                        @if($item->id==11)
                                            <li class="text-right">
                                                <a href="http://shopbanao.net/{{$item->link}}">{{$item->tenmenu}}</a>
                                            </li>
                                        @elseif($item->id==12)
                                            <li class="text-right">
                                                <a href="http://shopbanao.net/{{$item->link}}">{{$item->tenmenu}}</a>
                                            </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    
                                </div>
                            </li>
                            @elseif($item->id==9)
                            <li class="dropdown cart_dropdown">
                                <a class="nav-link cart_trigger" href="http://shopbanao.net/{{$item->link}}">{{$item->tenmenu}}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </header>
   
   
                            
     @yield('main')
                           
                           
      

    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            @foreach ($lienhe as $item)
                            <div class="footer_logo">
                                <a href="#"><img height="245" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" /></a>
                            </div>
                            @endforeach
                        </div>
                        <div class="widget">
                            <ul class="social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">danh mục</h6>
                            <ul class="widget_links">
                                @foreach ($danhmuc as $item)
                                <li><a href="#">{{$item->tendanhmuc}}</a></li>
                                @endforeach
                                
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            @foreach ($lienhe as $item)
                            <h6 class="widget_title">Thông tin liên hệ</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>{{$item->diachi}}</p>
                                </li>
                                
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:{{$item->email}}">{{$item->email}}</a>
                                </li>
                                
                                <li>
                                    <i class="ti-mobile"></i>
                                    <a href="tel:{{$item->sdt}}">{{$item->sdt}}</a>    <p></p>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-left">© 2021 All Rights Reserved by Tấn Phát Nguyễn</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-right">
                            <li><a href="#"><img src="{{url('public/shopwise')}}/assets/images/visa.png" alt="visa"></a></li>
                            <li><a href="#"><img src="{{url('public/shopwise')}}/assets/images/discover.png" alt="discover"></a></li>
                            <li><a href="#"><img src="{{url('public/shopwise')}}/assets/images/master_card.png" alt="master_card"></a></li>
                            <li><a href="#"><img src="{{url('public/shopwise')}}/assets/images/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="{{url('public/shopwise')}}/assets/images/amarican_express.png" alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <script src="{{url('public/shopwise')}}/assets/js/jquery-1.12.4.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery-ui.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/popper.min.js"></script>
	<script src="{{url('public/shopwise')}}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/owlcarousel/js/owl.carousel.min.js"></script>
	<script src="{{url('public/shopwise')}}/assets/js/magnific-popup.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/waypoints.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/parallax.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/Hoverparallax.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.countTo.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/isotope.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.appear.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.parallax-scroll.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.dd.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/slick.min.js"></script>
    <script src="{{url('public/shopwise')}}/assets/js/jquery.elevatezoom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7TypZFTl4Z3gVtikNOdGSfNTpnmq-ahQ&amp;callback=initMap"></script>
    <script src="{{url('public/shopwise')}}/assets/js/scripts.js"></script>
    <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>

    <script src="{{url('public/shopwise')}}/assets123/js/bootstrap.bundle.min.js"></script>

    <script>
        CKEDITOR.editorConfig = function( config ) {
            config.language = 'en';  // Chọn ngôn ngữ
            config.uiColor = '#F7B42C'; // màu giao diện
            config.height = 300;  // chiều cao cửa sổ
            config.width = 200; // chiểu rộng cửa sổ
            config.toolbarCanCollapse = true;
        };

        CKEDITOR.replace('chitiet');
    </script>
    @foreach ($lienhe as $item)
        {!!$item->mess!!}
        {!!$item->zalo!!}
    @endforeach

    {{-- <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1591060491024099");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> --}}

</body>
</html>