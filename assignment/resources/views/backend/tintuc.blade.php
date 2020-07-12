@extends('backend.base')
@section('content')
        <!-- Phần viết code-->

        <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý tin tức</strong>
                <a href="{{route('addtintuc')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Ảnh</th>
                                            <th>Mô tả</th>
                                            <th>Danh mục tin</th>
                                            <th>Tác giả</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dulieutintuc as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>
                                                {{$inra->tieude}} <br>
                                                Lượt xem : {{$inra->views}}
                                            </td>
                                            <td style="width:150px"><img src="{{asset($inra->images)}}"></td>
                                            <td><details><summary>Mô tả</summary>{!! $inra->mota !!}</details></td>
                                            <td>
                                                @foreach($list_cate as $cate)
                                                    @if($cate->id == $inra->iddm)
                                                        {{$cate->tendm}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($list_user as $user)
                                                    @if($user->id == $inra->iduser)
                                                        {{$user->hoten}}
                                                    @endif
                                                @endforeach
                                           </td>
                                            <td>{{$inra->created_at}}</td>
                                            <td>
                                            <a href="{{route('edittintuc',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa tin tức')" href="{{route('deletetintuc',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieutintuc->links() }}
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
