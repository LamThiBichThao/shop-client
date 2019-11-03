@extends('index')
@section('title', "Trang chủ")
@section('content')
<section class="hero">
      <div id="owl-hero" class="owl-carousel owl-theme owl-carousel--dots-inside">        

        <a href=""><div class="hero__slide" style="background-image: url(img/hero/1.jpg)">
<!--           <div class="container text-center">
            <h1 class="hero__title">Got the style? Show us</h1>
            <a href="single-product.html" class="hero__link">Shop Now</a>
          </div>          --> 
        </div></a>

        <a href=""><div class="hero__slide" style="background-image: url(img/hero/2.jpg)">
<!--           <div class="container relative">
            <div class="hero__holder">
              <h1 class="hero__title-1">dope<br>street<br>wear</h1>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-dark"><span>New Arrivals</span></a>
            </div>
          </div> -->
        </div></a>

        <a href=""><div class="hero__slide" style="background-image: url(img/hero/3.jpg)">
<!--           <div class="container text-center">
            <div class="hero__holder-1">
              <h1 class="hero__title-2">new lookbook</h1>
              <h3 class="hero__subtitle">Sale 50% off. Get only trendy items</h3>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-color"><span>Shop the trend</span></a>
            </div>
          </div> -->
        </div></a>

      </div> <!-- end owl -->
    </section> <!-- end hero slider -->

    <!-- Best Seller Slider-->
    <section class="section-wrap pb-30">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h1 class="heading bottom-line bolder">
              Sản phẩm nổi bật
            </h1>
          </div>
        </div>

        <div class="row row-8">
            @foreach ($firstData as $product)
            <div class="col-lg-3 col-sm-4 product">
                <div class="product__img-holder">
                    <a href="{{ route('product.detail',['id' => $product->id]) }}" class="product__link" aria-label="Product">
                        <img src="{{ ($product->cover_path1 != null) ? $product->cover_path1 : url('img/default.png') }}" 
                           onerror="this.onerror=null;this.src='{{ url('img/default.png') }}';" alt="" class="product__img">
                        <img src="{{ ($product->cover_path2 != null) ? $product->cover_path2 : url('img/default1.jpg') }}" 
                           onerror="this.onerror=null;this.src='{{ url('img/default1.jpg') }}';"alt="" class="product__img-back">
                    </a>
                    <div class="product__actions">
                        <a href="quickview.html" class="product__quickview" title="Xem ngay">
                            <i class="ui-eye"></i>
                            <span>Xem ngay</span>
                        </a>
                        <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                            <i class="ui-bag"></i>
                            <span>Mua ngay</span>
                        </a>
                        <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                            <i class="fa fa-cart-plus"></i>
                            <span>Thêm</span>
                        </a>
                    </div>
                </div>

                <div class="product__details">
                    <h3 class="product__title">
                        <a href="{{ route('product.detail',['id' => $product->id]) }}">{{ $product->name }}</a>
                    </h3>
                </div>

                <span class="product__price">
                    @if($product->new_price == 0)
                    <ins>
                        <span class="amount">{{ $product->price }}.000 đ</span>
                    </ins>
                    @else
                    <ins>
                        <span class="amount">{{ $product->new_price }}.000 đ</span>
                    </ins>
                    <del>
                        <span>{{ $product->price }}.000 đ</span>
                    </del>
                    @endif
                </span>
            </div> <!-- end product -->
            @endforeach
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end best seller -->
    @foreach ($category as $key => $value)
    <section class="section-wrap pb-30 {{ ($key % 2 == 0) ? 'bg-home-1' : 'bg-home-2'}}">
      <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line text-left white bolder">
              {{ $value->category->cate_name }}
            </h2>
          </div>
        </div>
        <div style="display: flex; flex-direction: row;">
          <div class="col-md-6" style="padding: 0">
            <div id="owl-demo" class="owl-carousel owl-theme">  
              @foreach($value->product as $product)
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="{{ route('product.detail',['id' => $product->id]) }}" class="product__link" aria-label="Product">
                    <img src="{{ ($product->cover_path1 != null) ? $product->cover_path1 : url('img/default.png') }}" 
                      onerror="this.onerror=null;this.src='{{ url('img/default.png') }}';" alt="" class="product__img">
                    <img src="{{ ($product->cover_path2 != null) ? $product->cover_path2 : url('img/default1.jpg') }}" 
                      onerror="this.onerror=null;this.src='{{ url('img/default1.jpg') }}';"  alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="{{ route('product.detail',['id' => $product->id]) }}">{{ $product->name }}</a>
                  </h3>
                </div>

                <span class="product__price">
                    @if($product->new_price == 0)
                    <ins>
                        <span class="amount">{{ $product->price }}.000 đ</span>
                    </ins>
                    @else
                    <ins>
                        <span class="amount">{{ $product->new_price }}.000 đ</span>
                    </ins>
                    <del>
                        <span>{{ $product->price }}.000 đ</span>
                    </del>
                    @endif
                </span>
              </div> 
              @endforeach
              <!-- end product -->
              {{-- <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div>
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div>
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> --}}
            </div>
          </div>
        </div>
          <div class="text-center">
            <a href="{{ route('product.index', ['cate' => $value->category->id]) }}">
            <h3 class="heading text-right white bolder">
              Xem tất cả 
             <i class="fa fa-arrow-right"></i>
            </h3>
            </a>
          </div>        
      </div>
    </section>
    @endforeach
    {{-- @if($categorySecond != null)
    <section class="section-wrap pb-30" style="background: url(img/background/back2.jpg);">
      <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line text-right white bolder">
              Quần nữ
            </h2>
          </div>
        </div>
        <div style="display: flex; flex-direction: row-reverse;">
          <div class="col-md-6" style="padding: 0">
            <div id="owl-demo1" class="owl-carousel owl-theme">  
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
            </div>
          </div>
        </div>
          <div class="text-center">
            <a href="catalog.html">
            <h3 class="heading text-right white bolder">
              Xem tất cả 
             <i class="fa fa-arrow-right"></i>
            </h3>
            </a>
          </div>           
      </div>
    </section>
    @endif
    @if($categoryThird != null)
    <section class="section-wrap pb-30" style="background: url(img/background/back1.jpg);">
      <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line text-left white bolder">
              Váy và đầm
            </h2>
          </div>
        </div>
        <div style="display: flex; flex-direction: row;">
          <div class="col-md-6" style="padding: 0">
            <div id="owl-demo2" class="owl-carousel owl-theme">  
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
            </div>
          </div>
        </div>
          <div class="text-center">
            <a href="catalog.html">
            <h3 class="heading text-right white bolder">
              Xem tất cả 
             <i class="fa fa-arrow-right"></i>
            </h3>
            </a>
          </div>           
      </div>
    </section>
    @endif
    @if($categoryThird != null)
    <section class="section-wrap pb-30" style="background: url(img/background/back2.jpg);">
      <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line text-right white bolder">
              Đồ ngủ và nội y
            </h2>
          </div>
        </div>
        <div style="display: flex; flex-direction: row-reverse;">
          <div class="col-md-6" style="padding: 0">
            <div id="owl-demo3" class="owl-carousel owl-theme">  
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
            </div>
          </div>
        </div>
          <div class="text-center">
            <a href="catalog.html">
            <h3 class="heading text-right white bolder">
              Xem tất cả 
             <i class="fa fa-arrow-right"></i>
            </h3>
            </a>
          </div>           
      </div>
    </section>
    @endif
    @if($categoryFour != null)
    <section class="section-wrap pb-30" style="background: url(img/background/back1.jpg);">
      <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line text-left white bolder">
              Khác
            </h2>
          </div>
        </div>
        <div style="display: flex; flex-direction: row;">
          <div class="col-md-6" style="padding: 0">
            <div id="owl-demo4" class="owl-carousel owl-theme">  
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
              <div class="product" style="margin: 0 4px;">
                <div class="product__img-holder">
                  <a href="single-product.html" class="product__link" aria-label="Product">
                    <img src="img/shop/product_11.jpg" alt="" class="product__img">
                    <img src="img/shop/product_back_11.jpg" alt="" class="product__img-back">
                  </a>
                  <div class="product__actions">
                    <a href="quickview.html" class="product__quickview" title="Xem ngay" title="Xem ngay">
                      <i class="ui-eye"></i>
                      <span>Xem ngay</span>
                    </a>
                    <a href="cart.html" class="product__add-to-cart" title="Mua ngay">
                      <i class="ui-bag"></i>
                      <span>Mua ngay</span>
                    </a>
                    <a href="#aaaa" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                      <i class="fa fa-cart-plus"></i>
                      <span>Thêm</span>
                    </a>
                  </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="single-product.html">Floral Mini Strappy</a>
                  </h3>
                </div>

                <span class="product__price">
                  <ins>
                    <span class="amount">$15.99</span>
                  </ins>
                  <del>
                    <span>$27.00</span>
                  </del>
                </span>
              </div> <!-- end product -->
            </div>
          </div>
        </div>
          <div class="text-center">
            <a href="catalog.html">
            <h3 class="heading text-right white bolder">
              Xem tất cả 
             <i class="fa fa-arrow-right"></i>
            </h3>
            </a>
          </div>           
      </div>
    </section>
    @endif --}}
    <!-- tin tuc -->
  <section class="section-wrap pb-30">
    <div class="container">
        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line bolder">
              Tin tức
            </h2>
          </div>
        </div>      
        <div class="row" style="margin-top: 1em">
            <div class="col-lg-4 col-md-6">
                <div class="post-module">
                  <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                  </div>
                  <div class="post-content">
                    <div class="category">TIN TỨC</div>
                    <h1 class="title"><a href="" style="color: #0f6eaa">Xu hướng thời trang thu đông</a></h1>
                    <h2 class="sub_title"><a href="" style="color: #e74c3c">Xem tiếp ...</a></h2>
                    <p class="description">Giày mũi vuông hay micro-bag từng là tâm điểm Hè 2019. Nhưng đâu mới là xu hướng thời trang sẽ “lên ngôi” trong mùa Thu – Đông 2019?</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> 23/09/2019</span></div>
                  </div>
                </div>            
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-module">
                  <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                  </div>
                  <div class="post-content">
                    <div class="category">TIN TỨC</div>
                    <h1 class="title"><a href="" style="color: #0f6eaa">Xu hướng thời trang thu đông</a></h1>
                    <h2 class="sub_title"><a href="" style="color: #e74c3c">Xem tiếp ...</a></h2>
                    <p class="description">Giày mũi vuông hay micro-bag từng là tâm điểm Hè 2019. Nhưng đâu mới là xu hướng thời trang sẽ “lên ngôi” trong mùa Thu – Đông 2019?</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> 23/09/2019</span></div>
                  </div>
                </div>            
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-module">
                  <div class="thumbnail">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                  </div>
                  <div class="post-content">
                    <div class="category">Khuyến mãi</div>
                    <h1 class="title"><a href="" style="color: #0f6eaa">Giảm giá hàng loạt sản phẩm</a></h1>
                    <h2 class="sub_title"><a href="" style="color: #e74c3c">Xem tiếp ...</a></h2>
                    <p class="description">Cùng điểm qua những sản phẩm thời trang đang giảm giá sẽ “làm mưa làm gió” trong mùa Thu – Đông 2019</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> 23/09/2019</span></div>
                  </div>
                </div>            
            </div>  
        </div>                                  
    </div>   
  </section> 
    <!-- end tin tuc -->
  <section class="section-wrap pb-30" style="padding: 0">
    <!-- map -->
    <div class="map p-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.0331504499852!2d105.81539678551201!3d21.030032979047746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6da4a8fc67%3A0xf248c6c43060ed51!2zNDE3IEtpbSBNw6MsIE5n4buNYyBLaMOhbmgsIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1570948755295!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </section>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
 
      var owl = $("#owl-demo");     
      owl.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
      });
      var owl1 = $("#owl-demo1");     
      owl1.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoplayTimeout:1000,
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
      });
      var owl2 = $("#owl-demo2");     
      owl2.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoplayTimeout:1000,
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
      });
      var owl3 = $("#owl-demo3");     
      owl3.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoplayTimeout:1000,
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
      });
      var owl4 = $("#owl-demo4");     
      owl4.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
          autoplayTimeout:1000,
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
      });

      var timeout;
	  	$(".fa-cart-plus ").click(function(){
	  		clearTimeout(timeout);
	  		$(".shopping-bag").addClass("shake-animation");
	  		timeout = setTimeout(function(){
	  			$(".shopping-bag").removeClass("shake-animation");
	  		},1200);
	  		product_count = $("#product_count").text();
	  		$("#product_count").text(parseInt(product_count) + 1);
	  	})
    });
  </script>
@endsection