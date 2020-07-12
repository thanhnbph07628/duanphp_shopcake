@extends('backend.base')
@section('content')
        <!-- Phần viết code-->
            <div class="card">
                <div class="card-header">
                    <strong>Sửa sản phẩm</strong>
                    <a href="{{route('sanpham')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="{{route('posteditsanpham',['id'=>$laydulieu->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phấm</label></div>
                    <div class="col-12 col-md-9"><input value="{{$laydulieu->tensp}}" type="text" id="text-input" name="tensp" placeholder="Nhập tên sản phấm" class="form-control"></div>
                @if($errors->has('tensp'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tensp') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục</label></div>
                    <div class="col-12 col-md-9">
                        <select name="iddm" id="select" class="form-control" >
                        @foreach($list_cate as $cate)
                            @if($cate->id == $laydulieu->iddm)
                            <option selected value="{{$laydulieu->iddm}}">{{ $cate->tendm }}</option>
                            @else
                            <option value="{{$cate->id}}">{{ $cate->tendm }}</option>
                            @endif
                        @endforeach
                        </select>

                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                    <div class="col-12 col-md-9"><img src="{{ asset($laydulieu->images) }}" width="180px" height=""></div>
                    <div class="col-12 col-md-9" style="margin-left: 270px; margin-top: 10px;"><input value="{{$laydulieu->images}}" type="file" id="file-input" name="images" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá sản phẩm</label></div>
                    <div class="col-12 col-md-9"><input value="{{$laydulieu->giasp}}" type="number" id="text-input" name="giasp" placeholder="Nhập giá sản phấm" class="form-control"></div>
                @if($errors->has('giasp'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('giasp') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sale</label></div>
                    <div class="col-12 col-md-9"><input value="{{$laydulieu->giakm}}" type="number" id="text-input" name="giakm" placeholder="Nhập giá khuyến mãi" class="form-control"></div>
                @if($errors->has('giakm'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('giakm') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>
                    <div class="col-12 col-md-9"><input value="{{$laydulieu->soluong}}" type="number" id="text-input" name="soluong" placeholder="Nhập số lượng" class="form-control"></div>
                @if($errors->has('soluong'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('soluong') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="mota" >{{$laydulieu->mota}}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'mota' );
                    </script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Chi tiết</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="chitietsp">{{$laydulieu->chitietsp}}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'chitietsp' );
                    </script>
                    </div>
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Sửa">
                </div>
                </form>
                <div class="card-footer">
                <a href="">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
    @endsection