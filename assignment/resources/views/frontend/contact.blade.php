@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Liên hệ</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="single-blog.html">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Contact Form Area =================-->
    <section class="contact_form_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Liên hệ với chúng tôi</h2>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form class="row contact_us_form" action="" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" name="hoten" placeholder="Họ tên">
                        @if($errors->has('hoten'))
                            <div style="color:red;">{{ $errors->first('hoten') }}</div>
                        @endif
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ Email">
                        @if($errors->has('email'))
                            <div style="color:red;">{{ $errors->first('email') }}</div>
                        @endif
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="subject" name="tieude" placeholder="Tiêu đề">
                        @if($errors->has('tieude'))
                            <div style="color:red; ">{{ $errors->first('tieude') }}</div>
                        @endif
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="noidung" id="message" rows="1" placeholder="Nội dung"></textarea>
                        @if($errors->has('noidung'))
                            <div style="color:red; ">{{ $errors->first('noidung') }}</div>
                        @endif
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" value="submit" class="btn order_s_btn form-control">Gửi ngay</button>
                        </div>
                    </form>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 offset-md-1">
                    <div class="contact_details">
                        <div class="contact_d_item">
                            <h3>Địa chỉ :</h3>
                            <p>Thanh Xuân - Hà Nội</p>
                        </div>
                        <div class="contact_d_item">
                            <h5>Số điện thoại : <a href="tel:01372466790">01372.466.790</a></h5>
                            <h5>Email : <a href="mailto:rockybd1995@gmail.com">rockybd1995@gmail.com</a></h5>
                        </div>
                        <div class="contact_d_item">
                            <h3>Mở của :</h3>
                            <p>8:00 AM – 10:00 PM</p>
                            <p>Thứ 2 – Chủ Nhật</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Contact Form Area =================-->

    <!--================End Banner Area =================-->
    <section class="map_area">
        <div id="mapBox" class="mapBox row m0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0832366283353!2d105.7956131142446!3d20.989300294501678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acb89dfa18fb%3A0x7db44980f0228b18!2zNjcgTMawxqFuZyBUaOG6vyBWaW5oLCBQLiBWxINuIFF1w6FuLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sfr!2s!4v1592904635636!5m2!1sfr!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        </div>
    </section>
    <!--================End Banner Area =================-->

@endsection