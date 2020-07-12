@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Giỏ hàng</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cart.html">Giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Cart Table Area =================-->
    <section class="cart_table_area p_100">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Cập nhật</th>
                            <th scope="col">Tổng</th>
                            <th scope="col">Xóa</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $inra)
                        <tr>
                            <td>
                                <img src="{{$inra->associatedModel->images}}" alt="" width="150px" height="130px">
                            </td>
                            <td>{{$inra->name}}</td>                           
                            <td>{{$inra->price}}</td>
                            <form action="{{route('posteditgiohang',['id'=>$inra->id])}}"  method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <td>
                                <input type="number" name="soluong" min="0" max="100" id="" value="{{$inra->quantity}}">
                            </td>
                            <td> <input class="btn btn-success" type="submit" value="Cập nhật"></td>
                            </form>
                            <td>{{$inra->price*$inra->quantity}}</td>
                            <td><a onclick="return confirm('Bạn chắc chắn muốn xóa')" href="{{route('deletegiohang',['id'=>$inra->id])}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa')" href="{{route('deleteallgiohang')}}" class="xoa"><input class="btn btn-danger" type="submit" value="Xóa"></a>
            </div>
            <div class="row cart_total_inner">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="cart_total_text">
                        <div class="cart_head">
                            Tổng giỏ hàng
                        </div>
                        <div class="total">
                            <h4>Tổng phụ: <span>0 VNĐ</span></h4>
                            <h4>Tổng: <span>{{\Cart::getTotal()}} VNĐ</span></h4>
                        </div>
                        <div class="cart_footer">
                            <a class="pest_btn" href="{{route('thanhtoan')}}">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Table Area =================-->

    @endsection