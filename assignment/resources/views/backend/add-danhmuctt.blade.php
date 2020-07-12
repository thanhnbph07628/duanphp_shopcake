@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm danh mục tin tức</strong>
                    <a href="{{route('danhmuctt')}}"><button type="submit" style="width: 100px"><i class="fa fa-mail-reply mr-sm-2"></i>Quay lại</button></a>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên danh mục</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tendm" placeholder="Nhập tên danh mục" class="form-control"></div>
                    </div>
                                                                
                <div class="card-footer">
                        <input class="btn btn-success" type="submit" value="Thêm">
                </div>
                </form>
                <div class="card-footer">
                    <a href="add-danhmuctt.html">
                        <input class="btn btn-danger" type="submit" value="Hủy">
                    </a>
                </div>
                @if($errors->has('tendm'))
                @foreach ($errors->all() as $error)
                    <div style="color:red">{{ $error }}</div>
                @endforeach
                @endif
                </div>  
            </div>
        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


@endsection
