@extends('backend.base')
@section('content')
        <div class="">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Quản lý tài khoản</strong>
                <a href="{{route('addtaikhoan')}}" class="them"><input class="btn btn-info" type="submit" value="Thêm"></a>
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
                                            <th>Tài khoản</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Vai trò</th>
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dulieutaikhoan as $inra)
                                         <tr>
                                            <td>{{$inra->id}}</td>
                                            <td><img src="{{ asset($inra->images) }}" width="80px" height="80px"></td>
                                            <td>{{$inra->user_name}}</td>
                                            <td>{{$inra->hoten}}</td>
                                            <td>{{$inra->email}}</td>
                                            <td>{{$inra->sdt}}</td>
                                            <td>{{$inra->diachi}}</td>
                                            <td>
                                                @if($inra->vaitro == 1)
                                            <a href="{{URL::to('/quantritaikhoan/'.$inra->id)}}" class="admin"><input class="btn btn-success" type="submit" value="Admin"></a>
                                                @else
                                            <a href="{{URL::to('/quantritaikhoan/'.$inra->id)}}" class="admin"><input class="btn btn-success" type="submit" value="Người dùng"></a>
                                                @endif
                                            </td>
                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $dulieutaikhoan->links() }}
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