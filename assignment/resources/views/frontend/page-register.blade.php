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
    <title>Đăng ký</title>
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
                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="text" class="form-control" name="user_name" value="{{old('user_name')}}" placeholder="Nhập tài khoản">
                    @if($errors->has('user_name'))
                    <div style="color:red">{{ $errors->first('user_name') }}</div>
                    @endif
                        </div>
                        <div class="form-group">
                            <label>Mật khấu</label>
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    @if($errors->has('password'))
                    <div style="color:red">{{ $errors->first('password') }}</div>
                    @endif
                        </div>
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="hoten" value="{{old('hoten')}}" placeholder="Nhập họ tên">
                    @if($errors->has('hoten'))
                    <div style="color:red">{{ $errors->first('hoten') }}</div>
                    @endif
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                    @if($errors->has('images'))
                    <div style="color:red; margin-left:15px;">{{ $errors->first('images') }}</div>
                    @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Nhập Email" >
                    @if($errors->has('email'))
                    <div style="color:red;">{{ $errors->first('email') }}</div>
                    @endif
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" value="{{old('sdt')}}" placeholder="Nhập số điện thọai">
                    @if($errors->has('sdt'))
                    <div style="color:red">{{ $errors->first('sdt') }}</div>
                    @endif
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" value="{{old('diachi')}}" placeholder="Nhập địa chỉ">
                    @if($errors->has('diachi'))
                    <div style="color:red">{{ $errors->first('diachi') }}</div>
                    @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đăng ký</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Bạn đã có tài khoản?<a href="{{route('dangnhap')}}"> Đăng nhập</a></p>
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
