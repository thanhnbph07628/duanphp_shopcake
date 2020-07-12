@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm sản phẩm</strong>
                    <a href="{{route('sanpham')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên sản phấm</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tensp" placeholder="Nhập tên sản phấm" class="form-control" value="{{ old ('tensp')}}"></div>
                @if($errors->has('tensp'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tensp') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục</label></div>
                    <div class="col-12 col-md-9">
                        <select name="iddm" id="select" class="form-control">
                            @foreach($list_cate as $cate)
                            <option value="{{ $cate->id }}">{{ $cate->tendm }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                @if($errors->has('images'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('images') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Giá sản phẩm</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="giasp" placeholder="Nhập giá sản phấm" class="form-control" value="{{old ('giasp')}}"></div>
                @if($errors->has('giasp'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('giasp') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sale</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="giakm" placeholder="Nhập giá khuyến mãi" class="form-control" value="{{old ('giakm')}}"></div>
                @if($errors->has('giakm'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('giakm') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số lượng</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="soluong" placeholder="Nhập số lượng" class="form-control" value="{{old ('soluong')}}"></div>
                @if($errors->has('soluong'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('soluong') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="mota"></textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'mota' );
                    </script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Chi tiết</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="chitietsp"></textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'chitietsp' );
                    </script>
                    </div>
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Thêm">
                </div>
                </form>
                <div class="card-footer">
                <a href="add-sanpham.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
        </div>

    @endsection
