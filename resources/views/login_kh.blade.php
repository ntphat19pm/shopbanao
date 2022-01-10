@extends('layouts.site')
@section('main')
    

    <div class="main_content">
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>Login</h3>
                                </div>
                                <form action="{{route('home.postdangnhap')}}" method="post">
                                  @csrf
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="password" required="" type="password" name="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="form-check mb-3">
                                            <label class="form-check-label text-muted">
                                              <input type="checkbox" class="form-check-input" onchange="SHPassword(this)">
                                              Hiện mật khẩu
                                            </label>
                                          </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                    <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Don't Have an Account? <a href="{{route('home.getdangky')}}">Sign up now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection