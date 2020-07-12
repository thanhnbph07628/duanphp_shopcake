<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    @include('backend.layout.css')
    @yield('css')



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{route('index')}}">
                        <img class="align-content" src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="text" class="form-control" value="{{old('user_name')}}" name="user_name" placeholder="Tài khoản">
                        </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Mật khẩu">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Nhớ tài khoản
                            </label>
                                    <label class="pull-right">
                                <a href="{{route('quenmatkhau')}}">Quên mật khẩu?</a>
                            </label>

                                </div>
                                @if (\Session::has('success'))
                                    <div class="alert alert-success" style="color: red;">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Bạn chưa có tài khoản ? <a href="{{route('dangky')}}">Đăng ký</a></p>
                                </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    @include('backend.layout.js')
@yield('js')


</body>

</html>
