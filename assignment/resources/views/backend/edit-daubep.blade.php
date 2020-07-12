@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Sửa đầu bếp</strong>
                    <a href="{{route('daubep')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="{{route('posteditdaubep',['id'=>$laydulieu->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ tên</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$laydulieu->hoten}}" id="text-input" name="hoten" placeholder="Nhập họ tên" class="form-control"></div>
                @if($errors->has('hoten'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('hoten') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                    <div class="col-12 col-md-9"><img src="{{ asset($laydulieu->images) }}" width="180px" height=""></div>
                    <div class="col-12 col-md-9" style="margin-left: 300px; margin-top: 10px;"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                @if($errors->has('images'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('images') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" value="{{$laydulieu->email}}" id="text-input" name="email" placeholder="Nhập email" class="form-control"></div>
                @if($errors->has('email'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('email') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="number" value="{{$laydulieu->sdt}}" id="text-input" name="sdt" placeholder="Nhập số điện thoại" class="form-control"></div>
                @if($errors->has('sdt'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('sdt') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$laydulieu->diachi}}" id="text-input" name="diachi" placeholder="Nhập địa chỉ" class="form-control"></div>
                @if($errors->has('diachi'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('diachi') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Chức vụ</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$laydulieu->chucvu}}" id="text-input" name="chucvu" placeholder="Nhập chức vụ" class="form-control"></div>
                @if($errors->has('chucvu'))
                    <div style="color:red; margin-left: 320px">{{ $errors->first('chucvu') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Giới thiệu</label></div>
                    <div class="col-12 col-md-9">
                        <textarea class="form-control" id="summary-ckeditor" name="gioithieu">{{$laydulieu->gioithieu}}</textarea>
                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                        <script>
                        CKEDITOR.replace( 'gioithieu' );
                        </script>
                </div>
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Sửa">
                </div>
                </form>
                <div class="card-footer">
                <a href="add-slide.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
        </div>

    @endsection