@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Chi tiết sản phẩm</h3>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="product-details.html">Chi tiết sản phẩm</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Product Details Area =================-->
    <section class="product_details_area p_100">
        <div class="container">
            <div class="row product_d_price">
                <div class="col-lg-6">
                    <div class="product_img"><img class="img-fluid" src="{{asset($dulieuchitiet->images)}}" alt="" width="525px" height="426px"></div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details_text">
                        <h4>{{$dulieuchitiet->tensp}}</h4>
                        <p style="margin-top: -70px;">{!!$dulieuchitiet->mota!!}</p>
                        <p style="float: left;margin-right:20px; font-size:30px; margin-top: -70px;"><del>{{$dulieuchitiet->giasp}}</del></p>
                        <p style="color: red;font-size:30px;margin-top: -70px; margin-left: 130px; ">{{$dulieuchitiet->giakm}}</p>
                        <div class="quantity_box">
                            <label >Số lượng còn : {{$dulieuchitiet->soluong}} sản phẩm</label>
                            <br/>
                            <label for="quantity">Số lượng:</label>
                            <input type="text" placeholder="1"  id="quantity">
                        </div>
                        <a class="pink_more" href="{{route('giohang',['id'=>$dulieuchitiet->id])}}">Thêm giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="product_tab_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true">Bình luận</a>
                        <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Miêu tả</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Chi tiết</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>{!!$dulieuchitiet->mota!!}</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <p>{!!$dulieuchitiet->chitietsp!!}</p>
                    </div>
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="s_comment_list mt-auto">
                            <div class="s_comment_list_inner">
                                @foreach ($dulieubl as $inra)
                                <div class="media">
                                    <div class="media-body">
                                        <h4>@foreach($list_user as $user)
                                                    @if($user->id == $inra->iduser)
                                                        {{$user->user_name}}
                                                    @endif
                                                @endforeach</h4>
                                        <p>{!!$inra->noidung!!}</p>
                                        <div class="date_rep">
                                            <a href="#">{{$inra->created_at}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @if(Auth::check())
                                <div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                <textarea class="form-control" id="summary-ckeditor" name="noidung"></textarea>
                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                        CKEDITOR.replace( 'noidung' );
                                    </script>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn order_s_btn form-control">Gửi ngay</button>
                                    </div>
                                    </form>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================Similar Product Area =================-->
    <section class="similar_product_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Sản phẩm liên quan</h2>
            </div>
            <div class="row similar_product_inner">

            @foreach($list_products as $inra)
            @if($inra->id != $dulieuchitiet->id)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="{{asset($inra->images)}}" alt="" style="width:200px; height:170px">
                        </div>
                        <div class="cake_text">
                            <h3>{{$inra->tensp}}</h3>
                            <del>{{$inra->giasp}} Đ</del>
                            <p style="color: red;">{{$inra->giakm}} Đ</p>
                            <a class="pest_btn" href="{{route('giohang',['id'=>$inra->id])}}">Thêm giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach    
            </div>
        </div>
    </section>
    <!--================End Similar Product Area =================-->

    @endsection