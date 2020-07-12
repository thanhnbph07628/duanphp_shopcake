@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Chi tiết tin tức</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="single-blog.html">Chi tiết tin tức</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Blog Main Area =================-->
    <section class="main_blog_area p_100">
        <div class="container">
            <div class="row blog_area_inner">
                <div class="col-lg-9">
                    <div class="main_blog_inner single_blog_inner">
                        <div class="blog_item">
                            <div class="blog_text">
                                <a href="#">
                                    <h1>{{$dulieuchitiet->tieude}}</h1>
                                </a>
                                <p>{!!$dulieuchitiet->chitiet!!} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right_sidebar_area">
                        <aside class="r_widget recent_widget">
                            <div class="r_title">
                                <h3>Tin tức mới nhất</h3>
                            </div>
                            <div class="recent_w_inner">
                                @foreach ($showtinmoi as $inra)
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{asset($inra->images)}}" alt="" width="104px" height="80px">
                                    </div>
                                    <div class="media-body">
                                        <a href="{{route('chitiettin',['id'=>$inra->id])}}">
                                            <h4>{{$inra->tieude}}</h4>
                                        </a>
                                        <a href="#">
                                            <p>{{$inra->created_at}}</p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Main Area =================-->

@endsection