@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Sửa tin tức</strong>
                    <a href="{{route('tintuc')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                    <div class="col-12 col-md-9"><input type="text" value="{{$laydulieu->tieude}}" id="text-input" name="tieude" placeholder="Nhập tiêu đề" class="form-control"></div>
                @if($errors->has('tieude'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tieude') }}</div>
                @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục tin</label></div>
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
                    <div class="col-12 col-md-9" style="margin-left: 300px; margin-top: 10px;"><input type="file" id="file-input" name="images" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="mota">{!!$laydulieu->mota!!}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'mota' );
                    </script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Chi tiết</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="chitiet">{!!$laydulieu->chitiet!!}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'chitiet' );
                    </script>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Tác giả</label></div>
                    <div class="col-12 col-md-9">
                    <select name="iduser" id="select" class="form-control" >
                        @foreach($list_user as $user)
                            @if($user->id == $laydulieu->iduser)
                            <option selected value="{{$laydulieu->iduser}}">{{ $user->hoten }}</option>
                            @else
                            <option value="{{$user->id}}">{{ $user->hoten }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Sửa">
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