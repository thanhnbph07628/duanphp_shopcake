@extends('frontend.base')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Thanh toán</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="checkout.html">Thanh toán</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Billing Details Area =================-->
    <section class="billing_details_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Điền thông tin</h2>
                    </div>
                    <div class="billing_form_area">
                        <form class="billing_form row" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-6">
                                <label for="first">First Name *</label>
                                <input type="text" class="form-control" id="first" name="name" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">Last Name *</label>
                                <input type="text" class="form-control" id="last" name="name" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">Address *</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Street Address">
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, Suit unit etc (optional)">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="city">Town / City *</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Town /City">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="order_box_price">
                        <div class="main_title">
                            <h2>Cách thức thanh toán</h2>
                        </div>
                        <div class="payment_list">
                            <div class="price_single_cost">
                                <h5>Sản phẩm <span>Tổng</span></h5>
                                @foreach ($items as $inra)
                                <h5>{{$inra->name}}<span>{{$inra->price*$inra->quantity}}</span></h5>
                                @endforeach
                                <h4>Tổng phụ <span>0 VNĐ</span></h4>
                                <h5>Phí vận chuyển<span class="text_f">Miễn phí</span></h5>
                                <h3>Tổng <span>{{\Cart::getTotal()}} VNĐ</span></h3>
                            </div>
                            <div id="accordion" class="accordion_area">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Thanh toán khi nhận hàng
												</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                        Bạn hãy chuẩn bị trước số tiền và kiểm tra hàng trước khi thanh toán.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Thanh toán bằng thẻ
												<img src="img/checkout-card.png" alt="">
												</button>
                                            <a href="#">What is PayPal?</a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Bạn hãy chuẩn bị trước số tiền và kiểm tra hàng trước khi thanh toán.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="submit" class="btn pest_btn">Thanh toán</button>
                            <a href="/getGiohang"><button type="submit" value="submit" class="btn btn-success" style="margin-top: 32px; margin-left:185px">Quay lại</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Billing Details Area =================-->

    @endsection