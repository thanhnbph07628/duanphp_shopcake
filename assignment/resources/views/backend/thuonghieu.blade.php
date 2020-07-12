@extends('backend.base')
@section('content')

       <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý thương hiệu</strong>
                <a href="{{route('addthuonghieu')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
                </div>
            <div class="card-body">
                <div class="custom-tab">

                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên công ty</th>
                                            <th>Logo</th>
                                            <th>Điện thoại</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dulieuthuonghieu as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>{{$inra->tenthuonghieu}}</td>
                                            <td style="width:150px"><img src="{{asset($inra->images)}}"></td>
                                            <td>{{$inra->sdt}}</td>
                                            <td>{{$inra->email}}</td>
                                            <td>{{$inra->diachi}}</td>
                                            <td>
                                                @if($inra->trangthai == 1)
                                            <a href="{{URL::to('/quantrithuonghieu/'.$inra->id)}}" class="thuonghieu"><input class="btn btn-success" type="submit" value="Đang hiển thị"></a>
                                                @else
                                            <a href="{{URL::to('/quantrithuonghieu/'.$inra->id)}}" class="thuonghieu"><input class="btn btn-success" type="submit" value="Đang tắt"></a>
                                                @endif
                                            </td>
                                            <td>
                                            <a href="{{route('editthuonghieu',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa thương hiệu')" href="{{route('deletethuonghieu',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieuthuonghieu->links() }}
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Thêm tin tức -->
                    <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                        <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên công ty</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="addtct" name="addtct" placeholder="Nhập tên công ty" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Logo</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="addimg" name="addimg" placeholder="Nhập đường dẫn ảnh" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="addsdt" name="addsdt" placeholder="Nhập số điện thoại" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="addemail" name="addemail" placeholder="Nhập email" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="adddc" name="adddc" placeholder="Nhập địa chỉ" class="form-control"></div>
                </div>
                
                </form>
                <div class="card-footer">
                    <button onclick="SaveNew()" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm mới
                    </button>
                    <a href="tintuc.html"></a><button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Hủy
                    </button></a>
                </div>
                </div>  
                    </div>

                    <!-- Sửa tin tức -->
                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                    <div class="card-body card-block">
                <form id="form_edit" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên công ty</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="edittct" name="edittct" placeholder="Nhập tên công ty" class="form-control"></div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Logo</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="editimg" name="editimg" placeholder="Nhập đường dẫn ảnh" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="editsdt" name="editsdt" placeholder="Nhập số điện thoại" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="editemail" name="editemail" placeholder="Nhập email" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="editdc" name="editdc" placeholder="Nhập địa chỉ" class="form-control"></div>
                </div>
                </form>
                <div class="card-footer">
                    <button onclick="SaveUpdate()" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Sửa
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Hủy
                    </button>
                </div>
                </div>  
                </div>
                </div>

            </div>
            </div>
            </div>
        </div>

@endsection
