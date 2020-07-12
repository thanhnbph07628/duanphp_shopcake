@extends('backend.base')
@section('content')

        <!-- Phần viết code-->
        <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý sản phẩm</strong>
                <a href="{{route('addsanpham')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Danh mục</th>
                                            <th style="width: 150px">Tên sản phấm</th>
                                            <th>Ảnh</th>
                                            <th>Giá - Số lượng - Views</th>
                                            <th>Thời gian</th>
                                            <th style="width: 50px">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dulieusanpham as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td>
                                                @foreach($list_cate as $cate)
                                                    @if($cate->id == $inra->iddm)
                                                        {{$cate->tendm}}
                                                    @endif
                                                @endforeach
                                           </td>
                                            <td>{{$inra->tensp}}</td>
                                            <td><img src="{{ asset($inra->images) }}" width="180px" height=""></td>
                                            <td>
                                                <ul>
                                                    <li>Giá gốc: {{$inra->giasp}} đ</li>
                                                    <li>Giá mới: {{$inra->giakm}} đ</li>
                                                    <li>Số lượng: {{$inra->soluong}}</li>
                                                    <li>Đã bán: {{$inra->soluongban}}</li>
                                                    <li>Views: {{$inra->views}}</li>
                                                </ul>
                                            </td>
                                            
                                            <td>{{$inra->created_at}}</td>
                                            <td>
                                            <a href="{{route('editsanpham',['id'=>$inra->id])}}" class="sua"><input class="btn btn-success" type="submit" value="Sửa"></a>
                                            <a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm')" href="{{route('deletesanpham',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieusanpham->links() }}
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
@endsection
