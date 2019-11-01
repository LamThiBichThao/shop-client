@extends('index')
@section('title', "Thông tin cá nhân")
@section('content')
<section class="section-wrap pb-20">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="index.html">Trang chủ</a>
          </li>
          <li class="active">
            Trang cá nhân
          </li>
        </ol>

        <div class="row">

          <aside class="col-lg-4 sidebar">
            <div class="avatar">
              <div class="w3-white w3-text-grey w3-card-4">
              <div class="w3-display-container">
                <div style="width: 100%; padding-top: 100%; background: img\team\timu.jpg" alt="Vishnu"></div>
                <div class="w3-display-bottomleft w3-container w3-text-white">
                  <br>
                  <h2>Nguyễn Xuân Khoa</h2>
                </div>
              </div>
              <div class="w3-container">

                <!--   Upload file -->
                <input type="file" id="file" style="display:none;" />
                <button type="button" class="btn btn-primary" style="font-size: 13px;color: #7b7b7b;letter-spacing: 1px;line-height: 15px; border: 2px solid #7b7b7b;  border-radius: 40px;  background: transparent;  transition: all 0.3s ease 0s; margin-right: 5px; margin-bottom: 5px; padding-top: 7px"value="Upload" onclick="thisFileUpload();">Đổi ảnh đại diện</button>
                <script>
                      function thisFileUpload() {
                          document.getElementById("file").click();
                      };
                </script>
                <!--  End of Upload file -->


                <button type="button" class="btn btn-primary" style="font-size: 13px;color: #7b7b7b;letter-spacing: 1px;line-height: 15px; border: 2px solid #7b7b7b;  border-radius: 40px;  background: transparent;  transition: all 0.3s ease 0s; margin-right: 5px; margin-bottom: 5px; padding-top: 7px" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3">Đổi mật khẩu</button>
                <button type="button" class="btn btn-primary" style="font-size: 13px;color: #7b7b7b;letter-spacing: 1px;line-height: 15px; border: 2px solid #7b7b7b;  border-radius: 40px;  background: transparent;  transition: all 0.3s ease 0s; margin-right: 5px; margin-bottom: 5px; padding-top: 7px" data-toggle="modal" aria-pressed="false" data-target="#exampleModal4">Sửa thông tin cá nhân</button>          
                <hr>             
                <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>khoa1997hn@gmail.com</p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0975 275 297</p>
              </div>
            </div><br>
            </div>
          </aside>
          <div class="col-lg-8 mb-50">
            <a href="cart-info.html">
              <div class="order-container">
                <div class="order-title">
                  <h4>
                      Đơn hàng #dsfmssf                  
                  </h4>
                </div>
                  <div class="card card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Trạng thái: Đang giao hàng</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Tổng tiền: 200.000vnđ</span>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Địa điểm giao hàng: abc xyz</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Ngày tạo: 22/2/2222</span>
                      </div>
                    </div>
                </div>
              </div>
            </a>
            <a href="cart-info.html">
              <div class="order-container">
                <div class="order-title">
                  <h4>
                      Đơn hàng #dsfmssf                  
                  </h4>
                </div>
                  <div class="card card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Trạng thái: Đang giao hàng</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Tổng tiền: 200.000vnđ</span>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Địa điểm giao hàng: abc xyz</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Ngày tạo: 22/2/2222</span>
                      </div>
                    </div>
                </div>
              </div>
            </a>
            <a href="cart-info.html">
              <div class="order-container">
                <div class="order-title">
                  <h4>
                      Đơn hàng #dsfmssf                  
                  </h4>
                </div>
                  <div class="card card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Trạng thái: Đang giao hàng</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Tổng tiền: 200.000vnđ</span>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Địa điểm giao hàng: abc xyz</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Ngày tạo: 22/2/2222</span>
                      </div>
                    </div>
                </div>
              </div>
            </a>
            <a href="cart-info.html">
              <div class="order-container">
                <div class="order-title">
                  <h4>
                      Đơn hàng #dsfmssf                  
                  </h4>
                </div>
                  <div class="card card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Trạng thái: Đang giao hàng</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Tổng tiền: 200.000vnđ</span>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-lg-8">
                        <span>Địa điểm giao hàng: abc xyz</span>
                      </div>
                      <div class="col-lg-4">
                        <span>Ngày tạo: 22/2/2222</span>
                      </div>
                    </div>
                </div>
              </div>
            </a>
          </div>
    
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end blog single -->
@endsection