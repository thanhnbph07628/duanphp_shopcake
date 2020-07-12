@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Cửa hàng</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Cửa hàng</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Product Area =================-->
    <section class="product_area p_100">
        <div class="container">
            <div class="row product_inner_row">
                <div class="col-lg-9">
                    <div class="row m0 product_task_bar">
                        <div class="product_task_inner">
                            <div class="float-left">
                                <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                <span>Showing 1 - 10 of 55 results</span>
                            </div>
                        </div>
                    </div>
                    <div class="row product_item_inner">
                        @foreach ($show as $inra)
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                                    <div class="cake_img">
                                        <img src="{{asset($inra->images)}}" alt="" width="270px" height="228px">
                                    </div>
                                </a>
                                <div class="cake_text">
                                    <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                                        <h3>{{$inra->tensp}}</h3>
                                    </a>
                                    <del>{{$inra->giasp}} Đ</del>
                                    <p style="color: red;">{{$inra->giakm}} Đ</p>
                                    <a class="pest_btn" href="{{route('giohang',['id'=>$inra->id])}}">Thêm giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br/>  <br/>  
                    {{ $show->links() }}
                </div>
                <div class="col-lg-3">
                    <div class="product_left_sidebar">
                        <aside class="left_sidebar p_price_widget">
                            <div class="p_w_title">
                                <h3>Xếp theo giá</h3>
                            </div>
                            <div class="filter_price">
                                <div id="slider-range"></div>
                                <label for="amount">Phạm vi giá:</label>
                                <input type="text" id="amount" readonly />
                                <a href="#">Bộ lọc</a>
                            </div>
                        </aside>
                        <aside class="left_sidebar p_sale_widget">
                            <div class="p_w_title">
                                <h3>Sản phẩm mới nhất</h3>
                            </div>
                            @foreach ($showspm as $inra)
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{asset($inra->images)}}" alt="" width="104px" height="95px">
                                </div>
                                <div class="media-body">
                                    <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                                        <h4>{{$inra->tensp}}</h4>
                                    </a>
                                    <del>{{$inra->giasp}} Đ</del>
                                    <p style="color: red;">{{$inra->giakm}} Đ</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Area =================-->

@endsection