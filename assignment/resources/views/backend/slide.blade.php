@extends('backend.base')
@section('content')
                <div class="">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Quản lý slider</strong>
                    <a href="{{route('addslide')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Tiêu đề</th>
                                            <th style="width: 250px">Ảnh</th>
                                            <th>Mô tả</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show-data-slide">
                                    @foreach ($dulieuslide as $inra)
                                         <tr >
                                            <td>{{$inra->id}}</td>
                                            <td>{{$inra->tieude}}</td>
                                            <td><img src="{{ asset($inra->images) }}" width="300px" height="100px"></td>
                                            <td>{!!$inra->mota!!}</td>
                                            <td>
                                                @if($inra->trangthai == 1)
                                            <a href="{{URL::to('/quantrislide/'.$inra->id)}}" class="admin"><input class="btn btn-success" type="submit" value="Đang hiển thị"></a>
                                                @else
                                            <a href="{{URL::to('/quantrislide/'.$inra->id)}}" class="admin"><input class="btn btn-success" type="submit" value="Đang tắt"></a>
                                                @endif
                                            </td>
                                            <td>{{$inra->created_at}}</td>
                                            <td>
                                            <a href="{{route('editslide',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a  onclick="return confirm('Bạn chắc chắn muốn xóa slide')" href="{{route('deleteslide',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieuslide->links() }}
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

@endsection
