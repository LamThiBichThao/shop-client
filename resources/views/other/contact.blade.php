@extends('index')
@section('title', "Liên hệ")
@section('content')
<section class="section-wrap pb-0">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="index.html">Trang chủ</a>
          </li>
          <li class="active">
            Liên hệ
          </li>
        </ol>
      </div>
    </section> <!-- end google map -->



    <!-- Contact -->
    <section class="section-wrap pb-40">
      <div class="container">
        <div class="row">

          <div class="col-lg-8">
                <div class="map p-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.0331504499852!2d105.81539678551201!3d21.030032979047746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6da4a8fc67%3A0xf248c6c43060ed51!2zNDE3IEtpbSBNw6MsIE5n4buNYyBLaMOhbmgsIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1570948755295!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
          </div> <!-- end col -->

          <div class="col-lg-4">
            <div class="contact-info">
              <ul>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Địa chỉ</h4>
                  <h6 class="contact-info__store-title">Hà Nội: </h6>
                  <address class="address">Số 417 Kim Mã, Q. Ba Đình, Hà Nội</address>
                </li>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Thông tin liên lạc</h4>
                  <ul>
                    <li><span>Hotline: </span><a href="tel:0982472791">0982472791</a></li>
                    <li><span>Email: </span><a href="mailto:themesupport@gmail.com">shophangxuatduxin@gmail.com</a></li>
                    <li><span>Facebook: </span><a href="https://www.facebook.com/Shophangxuatduxin109">Shop Hàng Xuất Dư Xịn</a></li>                    
                  </ul>
                </li>
                <li class="contact-info__item">
                  <h4 class="contact-info__title uppercase">Thời gian mở cửa</h4>
                  <ul>
                    <li>Sáng: 8h30-12h</li>
                    <li>Chiều: 14h-17h</li>
                    <li>Từ thứ 2 tới thứ 7</li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>

        </div>
      </div>
    </section> <!-- end contact -->
@endsection