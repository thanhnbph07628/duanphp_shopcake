@extends('backend.base')
@section('content')

        <div class="">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Quản lý liên hệ - phản hồi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Thời gian</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($dulieu as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>{{$inra->hoten}}</td>
                                            <td>{{$inra->email}}</td>
                                            <td>{{$inra->tieude}}</td>
                                            <td>{{$inra->noidung}}</td>
                                            <td>{{$inra->created_at}}</td>
                                            <td>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa liên hệ')" href="{{route('deletelienhe',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieu->links() }}
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
        </div><!-- .content -->

@endsection