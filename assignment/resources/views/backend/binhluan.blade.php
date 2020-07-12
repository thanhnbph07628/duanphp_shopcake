@extends('backend.base')
@section('content')
        <div class="">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quản lý bình luận</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tài khoản</th>
                                            <th>Nội dung</th>
                                            <th>Thời gian</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dulieu as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>
                                                @foreach($list_sp as $sp)
                                                    @if($sp->id == $inra->idsp)
                                                        {{$sp->tensp}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($list_user as $user)
                                                    @if($user->id == $inra->iduser)
                                                        {{$user->user_name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{!!$inra->noidung!!}</td>
                                            <td>{{$inra->created_at}}</td>
                                            <td>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa bình luận')" href="{{route('deletebl',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieu->links() }}
                            </div>
                        </div>
        </div><!-- .content -->


@endsection