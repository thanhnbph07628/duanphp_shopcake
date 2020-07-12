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
    <title>Quên mật khẩu</title>
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
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nhập địa chỉ Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-15">Gửi ngay</button><br><br>
                            <div class="register-link m-t-15 text-center">
                                    <a href="{{route('dangnhap')}}" style="float: left;">Đăng nhập</a>
                                    <a href="{{route('dangky')}}" style="float: right;">Đăng ký</a><br>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success" style="margin-top:20px">
                                <ul>
                                    <li>{{session('success')}}</li>
                                </ul>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" style="margin-top:20px">
                                <ul>
                                    <li>{{session('error')}}</li>
                                </ul>
                                </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('backend.layout.js')
    @yield('js')


</body>

</html>
