@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm tài khoản</strong>
                    <a href="{{route('taikhoan')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tài khoản</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="user_name" placeholder="Nhập tài khoản" class="form-control" value="{{old('user_name')}}"></div>
                @if($errors->has('user_name'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('user_name') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mật khẩu</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="text-input" name="password" placeholder="Nhập mật khẩu" class="form-control" value="{{old('pass')}}"></div>
                @if($errors->has('password'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('password') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="hoten" placeholder="Nhập họ tên" class="form-control" value="{{old('hoten')}}"></div>
                @if($errors->has('hoten'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('hoten') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                @if($errors->has('images'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('images') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="diachi" placeholder="Nhập địa chỉ" class="form-control" value="{{old('diachi')}}"></div>
                @if($errors->has('diachi'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('diachi') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Nhập email" class="form-control" value="{{old('email')}}"></div>
                @if($errors->has('email'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('email') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="sdt" placeholder="Nhập số điện thoại" class="form-control" value="{{old('sdt')}}"> </div>
                @if($errors->has('sdt'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('sdt') }}</div>
                @endif
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Thêm">
                </div>
                </form>
                <div class="card-footer">
                <a href="add-taikhoan.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
        </div>

    @endsection