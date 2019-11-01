@extends('index')
@section('title', "Tin tức")
@section('content')
<section class="page-title text-center">
      <div class="container">
        <h1 class=" heading page-title__title">Giỏ hàng</h1>
      </div>
    </section> <!-- end page title -->


    <!-- Cart -->
    <section class="section-wrap cart pt-50 pb-40">
      <div class="container relative">

        <div class="table-wrap">
          <table class="shop_table cart table">
            <thead>
              <tr>
                <th class="product-name" colspan="2">Sản phẩm</th>
                <th class="product-price">Giá</th>
                <th class="product-quantity">Số lượng</th>
                <th class="product-subtotal" colspan="2">Tổng cộng</th>
              </tr>
            </thead>
            <tbody>
              <tr class="cart_item">
                <td class="product-thumbnail">
                  <a href="#">
                    <img src="img/shop/product_1.jpg" alt="">
                  </a>
                </td>
                <td class="product-name">
                  <a href="#">Joeby Tailored Trouser</a>
                  <ul>
                    <li>Size: XL</li>
                    <li>Màu: Trắng</li>
                  </ul>
                </td>
                <td class="product-price">
                  <span class="amount">$1250.00</span>
                </td>
                <td class="product-quantity">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                    <input type="button" value="+" class="plus">
                  </div>
                </td>
                <td class="product-subtotal">
                  <span class="amount">$1250.00</span>
                </td>
                <td class="product-remove">
                  <a href="#" class="remove" title="Remove this item">
                    <i class="ui-close"></i>
                  </a>
                </td>
              </tr>

              <tr class="cart_item">
                <td class="product-thumbnail">
                  <a href="#">
                    <img src="img/shop/product_10.jpg" alt="">
                  </a>
                </td>
                <td class="product-name">
                  <a href="#">Sport Hi Adidas</a>
                  <ul>
                    <li>Size: L</li>
                    <li>Màu: Đen</li>
                  </ul>
                </td>
                <td class="product-price">
                  <span class="amount">$240.00</span>
                </td>
                <td class="product-quantity">
                  <div class="quantity buttons_added">
                    <input type="button" value="-" class="minus">
                    <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                    <input type="button" value="+" class="plus">
                  </div>
                </td>
                <td class="product-subtotal">
                  <span class="amount">$240.00</span>
                </td>
                <td class="product-remove">
                  <a href="#" class="remove" title="Remove this item">
                    <i class="ui-close"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row justify-content-between">
          <div class="col-lg-6 shipping-calculator-form">
            <h2 class="uppercase mb-30">Hình thức thanh toán</h2>
            <ul class="payments-method-select">
                <li>
                  <input type="radio" class="checkbox" id="online-cast" name="payments-methods" checked>
                  <label for="online-cast" class="checkbox-label">Thanh toán online</label>
                </li><br>        
                <li>
                  <input type="radio" class="checkbox" id="cash-on-delivery" name="payments-methods">
                  <label for="cash-on-delivery" class="checkbox-label">Thanh toán khi nhận hàng</label>
                </li>
            </ul>
            <br><br><br>
            <h2 class="uppercase mb-30">Hình thức thanh toán</h2>
            <div class="row row-24">
              <div class="col-md-6">
                <p class="form-row form-row-wide">
                  <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state">
                      <option>Chọn Khu vực</option>
                      <option value="HN">Hà Nội</option>
                      <option value="OR">Khác</option>
                    </select> 
                </p>                  
              </div>
              <div class="col-md-6">
                  <p class="form-row form-row-wide">
                    <input type="text" class="input-text" value placeholder="Họ tên" name="user_name" id="user_name">
                  </p>
              </div>              
      </div>


            <div class="row row-24">
              <div class="col-md-6">
                <p class="form-row form-row-wide">
                  <input type="text" class="input-text" value placeholder="Địa chỉ" name="user_address" id="user_address">
                </p>
              </div>
              <div class="col-md-6">
                <p class="form-row form-row-wide">
                  <input type="text" class="input-text" value placeholder="Số điện thoại" name="phone_number" id="phone_number">
                </p>
              </div>
            </div>

            <p>
              <input type="submit" name="calc_shipping" value="XÁC NHẬN" class="btn btn-md btn-dark btn-button">
            </p>                
          </div> <!-- end col shipping calculator -->

          <div class="col-lg-4">
            <div class="cart_totals">
              <h2 class="uppercase mb-20">Tổng cộng</h2>

              <table class="table shop_table">
                <tbody>
                  <tr class="cart-subtotal">
                    <th>Tổng giỏ hàng</th>
                    <td>
                      <span class="amount">300.000 VNĐ</span>
                    </td>
                  </tr>
                  <tr class="shipping">
                    <th>Phí ship</th>
                    <td>
                      <span>Miễn phí</span>
                    </td>
                  </tr>
                  <tr class="order-total">
                    <th>Tổng tiền</th>
                    <td>
                      <strong><span class="amount">300.000 VNĐ</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div> <!-- end col cart totals -->

        </div> <!-- end row -->     

        
      </div> <!-- end container -->
    </section> <!-- end cart -->
@endsection