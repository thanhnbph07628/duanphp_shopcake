@extends('backend.base')
@section('content')
        <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý đầu bếp</strong>
                <a href="{{route('adddaubep')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Ảnh</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Chức vụ</th>
                                            <th>Giới thiệu</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dulieudaubep as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td style="width:120px; height:120px"><img src="{{asset($inra->images)}}"></td>
                                            <td>{{$inra->hoten}}</td>
                                            <td>{{$inra->email}}</td>
                                            <td>{{$inra->sdt}}</td>
                                            <td>{{$inra->diachi}}</td>
                                            <td>{{$inra->chucvu}}</td>
                                            <td><details><summary>Giới thiệu</summary>{!! $inra->gioithieu !!}</details></td>
                                            <td>
                                            <a href="{{route('editdaubep',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa đầu bếp')" href="{{route('deletedaubep',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieudaubep->links() }}
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
                </div>
            </div>
            </div>
            </div>
        </div>

@endsection