@extends('backend.base')
@section('content')
        <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý danh mục tin tức</strong>
                <a href="{{route('adddanhmuctt')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Tên danh mục</th>
                                            <th>Hành động</th>
                                            <th>Ngày tạo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dulieudanhmuctt as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>{{$inra->tendm}}</td>
                                            <td>{{$inra->created_at	}}</td>
                                            <td>
                                            <a href="{{route('editdanhmuctt',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa danh mục')" href="{{route('deletedanhmuctt',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieudanhmuctt->links() }}
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
    