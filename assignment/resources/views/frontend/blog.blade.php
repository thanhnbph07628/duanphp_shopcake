@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Tin tức</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Blog Main Area =================-->
    <section class="main_blog_area p_100">
        <div class="container">
            <div class="blog_area_inner">
                <div class="main_blog_column row">

                @foreach ($showtin as $inra)
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <a href="{{route('chitiettin',['id'=>$inra->id])}}">
                                <div class="blog_img">
                                    <img class="img-fluid" src="{{asset($inra->images)}}" alt="" style="width:570px; height:360px">
                                </div>
                            </a>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">{{$inra->created_at}}</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By :  Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="{{route('chitiettin',['id'=>$inra->id])}}">
                                    <h4>{{$inra->tieude}}</h4>
                                </a>
                                <p>{!!$inra->mota!!}</p>
                                <a class="pink_more" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div style="margin-top: 50px;">
            {{$showtin->links()}}
            </div>
        </div>
    </section>
    <!--================End Blog Main Area =================-->

@endsection