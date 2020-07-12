    @extends('frontend.base')
    @section('content')
    
    <!--================Slider Area =================-->
    @include('frontend.layout.slide')
    <!--================End Slider Area =================-->
    
    <!--================New Arivals Area =================-->
    <section class="new_arivals_area mt-5">
        <div class="container">
            <div class="main_title">
                <h2>Sản phẩm mới</h2>
            </div>
            
            <div class="cake_feature_row row">
            @foreach ($showspm as $inra)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                            <div class="cake_img">
                                <img src="{{asset($inra->images)}}" alt="" width="270px" height="226px">
                            </div>
                        </a>
                        <div class="cake_text">
                            <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                                <h3>{{$inra->tensp}}</h3>
                            </a>
                            <del>{{$inra->giasp}}Đ</del>
                            <p style="color: red;">{{$inra->giakm}} Đ</p>
                            <a class="pest_btn" href="{{route('giohang',['id'=>$inra->id])}}">Thêm giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

    </section>
    <!--================End New Arivals Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_bakery_area cake_feature_main mt-5">
        <div class="container">
            <div class="main_title">
                <h2>Sản phẩm nổi bật</h2>
            </div>
            <div class="cake_feature_row row">
                @foreach ($showspnb as $inra)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <a href="{{route('chitietsp',['id'=>$inra->id])}}">
                            <div class="cake_img">
                                <img src="{{$inra->images}}" alt="" width="270px" height="226px">
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
        </div>
    </section>
    <!--================End Welcome Area =================-->

    <!--================Service We offer Area =================-->
    <section class="service_we_offer_area p_100">
        <div class="container">
            <div class="single_w_title">
                <h2>Tiện ích</h2>
            </div>
            <div class="row we_offer_inner">
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-6"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Cookies Cakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-5"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Tasty Cupcakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-3"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Wedding Cakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-book"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Awesome Recipes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-4"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Menu Planner</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-transport"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Home Delivery</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Service We offer Area =================-->

    <!--================End Client Says Area =================-->
    <section class="our_chef_area mt-5">
        <div class="container">
            <div class="row our_chef_inner">
                <div class="col-lg-3">
                    <div class="chef_text_item">
                        <div class="main_title">
                            <h2>Đầu bếp</h2>
                            <p>Chúng tôi là những đầu bếp của CakeBakery - chúng tôi sẽ mang lại cho các bạn những chiếc bánh ngon nhất</p>
                        </div>
                    </div>
                </div>  
                @foreach ($showdb as $inra)
                <div class="col-lg-3 col-6">
                    <div class="chef_item">
                        <div class="chef_img">
                            <img class="img-fluid" src="{{asset($inra->images)}}" alt="">
                            <ul class="list_style">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4>{{$inra->hoten}}</h4>
                        </a>
                        <h5>{{$inra->chucvu}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Client Says Area =================-->

    <!--================Latest News Area =================-->
    <section class="latest_news_area gray_bg mt-5">
        <div class="container">
            <div class="main_title">
                <h2>Tin tức mới</h2>
            </div>
            <div class="row latest_news_inner">
            @foreach ($showtt as $inra)
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <a href="{{route('chitiettin',['id'=>$inra->id])}}">
                        <div class="l_news_img">
                            <img class="" src="{{asset($inra->images)}}" alt="" width="370px" height="250px">
                        </div>
                        </a>
                        <div class="l_news_text">
                            <a href="#">
                                <h5>{{$inra->created_at}}</h5>
                            </a>
                            <a href="{{route('chitiettin',['id'=>$inra->id])}}">
                                <h4>{{$inra->tieude}}</h4>
                            </a>
                            <p>{!!$inra->mota!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Latest News Area =================-->

    @endsection