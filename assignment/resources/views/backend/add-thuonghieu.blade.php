@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm thương hiệu</strong>
                    <a href="{{route('thuonghieu')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên thương hiệu</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tenthuonghieu" value="{{old('tenthuonghieu')}}" placeholder="Nhập tên thương hiệu" class="form-control"></div>
                @if($errors->has('tenthuonghieu'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tenthuonghieu') }}</div>
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
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="sdt" value="{{old('sdt')}}" placeholder="Nhập số điện thoại" class="form-control"></div>
                @if($errors->has('sdt'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('sdt') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" value="{{old('email')}}" placeholder="Nhập email" class="form-control"></div>
                @if($errors->has('email'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('email') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="diachi" value="{{old('diachi')}}" placeholder="Nhập địa chỉ" class="form-control"></div>
                @if($errors->has('diachi'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('diachi') }}</div>
                @endif
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Thêm">
                </div>
                </form>
                <div class="card-footer">
                <a href="add-thuonghieu.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
        </div>

    @endsection