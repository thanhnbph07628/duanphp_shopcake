<!--================Search Box Area =================-->
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
        <div class="search_box_inner">
            <h3>Search</h3>
            <div class="input-group">
                <form action="search" method="get">
                <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <!--================End Search Box Area =================-->
    
<!--================Main Header Area =================-->
<header class="main_header_area">
        <div class="top_header_area row m0">
            <div class="container">
                <div class="float-left">
                    <a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> {{$dulieu->sdt}}</a>
                    <a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$dulieu->email}}</a>
                </div>
                <div class="float-right">
                    <ul class="h_social list_style">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <ul class="h_search list_style">
                        <li><a href="{{route('addgiohang')}}"><i class="lnr lnr-cart"></i></a></li>
                        <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
                    </ul>
                    <ul class="h_search list_style">
                        
                    @if(Auth::check())
                    <li><a>{{ Auth::user()->user_name }}</a></li>
                        <li><a href="{{route('dangxuat')}}">Đăng xuất</a></li>
                    @else
                    <li><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                    @endif
                        @if(Auth::check())
                         @if(Auth::user()->vaitro==1)
                        <li><a href="{{route('admin')}}">Quản trị</a></li>
                        @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu_two">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset($dulieu->images)}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="my_toggle_menu">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav justify-content-end">
                            <li class="dropdown submenu">
                                <a href="{{route('index')}}" role="button" aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                            </li>
                            <li class="dropdown submenu">
                                <a href="{{route('shop')}}" role="button" aria-haspopup="true" aria-expanded="false">Cửa hàng bánh</a>
                            </li>
                            <li class="dropdown submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm</a>
                                <ul class="dropdown-menu">
                                @foreach ($data as $inra)
                                    <li><a href="{{route('showsanphamdm',['id'=>$inra->id])}}">{{$inra->tendm}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="{{route('baiviet')}}" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>
                            </li>
                            <li><a href="{{route('lienhe-phanhoi')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Main Header Area =================-->

    