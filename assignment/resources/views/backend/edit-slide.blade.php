@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Sửa slide</strong>
                    <a href="{{route('slide')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
            <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tiêu đề</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" value="{{$laydulieuslide->tieude}}" name="tieude" placeholder="Nhập tiêu đề" class="form-control" value="{{old('tieude')}}"></div>
                @if($errors->has('tieude'))
                    <div style="color:red; margin-left: 285px">{{ $errors->first('tieude') }}</div>
                @endif
                </div>
                  <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh</label></div>
                    <div class="col-12 col-md-9"><img src="{{ asset($laydulieuslide->images) }}" width="180px" height=""></div>
                    <div class="col-12 col-md-9" style="margin-left: 300px; margin-top: 10px;"><input type="file" id="addimg" name="images"  class="form-control" placeholder="Nhập đường dẫn ảnh"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mô tả</label></div>
                    <div class="col-12 col-md-9">
                    <textarea class="form-control" id="summary-ckeditor" name="mota">{{$laydulieuslide->tieude}}</textarea>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace( 'mota' );
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