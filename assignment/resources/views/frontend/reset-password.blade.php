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
    <title>Đổi mật khẩu</title>
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
                            <label>Mật khẩu cũ</label>
                            <input type="password" class="form-control" value="" name="user_name" placeholder="Mật khẩu cũ">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" value="" name="password" placeholder="Mật khẩu mới">
                        </div>
                                @if (\Session::has('success'))
                                    <div class="alert alert-success" style="color: green;">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đổi mật khẩu</button>     
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    @include('backend.layout.js')
@yield('js')


</body>

</html>
