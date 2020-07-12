@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm tin tức</strong>
                    <a href="{{route('tintuc')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" value="{{old('tieude')}}" name="tieude" placeholder="Nhập tiêu đề" class="form-control"></div>
                @if($errors->has('tieude'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tieude') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục tin</label></div>
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
                    <textarea class="form-control" id="summary-ckeditor" name="chitiet"></textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'chitiet' );
                    </script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Tác giả</label></div>
                    <div class="col-12 col-md-9">
                        <select name="iduser" id="select" class="form-control">
                            @foreach($list_user as $user)
                            <option value="{{ $user->id }}">{{ $user->hoten }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Thêm">
                </div>
                </form>
                <div class="card-footer">
                    <a href="add-tintuc.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                </div>  
            </div>
        </div>

    @endsection