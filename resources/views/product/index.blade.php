@extends('index')
@section('title', "Danh mục")
@section('content')
<section class="section-wrap pt-60 pb-30 catalog">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="{{ route('home.index') }}">Trang chủ</a>
          </li>
          {{-- <li>
            <a href="index.html">Trang chính</a>
          </li> --}}
          <li class="{{ ($cateParent == null ) ? 'active' : '' }}">
              <a href="{{ route('home.index') }}">Danh sách sản phẩm</a>
          </li>
          @if($cateParent)
          <li>
            <a href="index.html">asjkajskajskas</a>
          </li>
          @endif
        </ol>

        <div class="row">
          <div class="col-lg-9 order-lg-2 mb-40">

            <!-- Filter -->          
            <div class="shop-filter">
              <p class="woocommerce-result-count">
                Hiển thị: 1-{{ ($total < 12) ? $total : 12}} trên {{ $total }} sản phẩm
              </p>
              <span class="woocommerce-ordering-label">Sắp xếp</span>
              <form class="woocommerce-ordering">
                <select class="filter-product">
                  <option value="ASC" data-href="{{ route('product.index', ['cate' => Session::get('cate_id'), 'sort' => 'ASC' ]) }}">Mặc định</option>
                  <option value="price-low-to-high">Giá: từ cao tới thấp</option>
                  <option value="price-high-to-low">Giá: từ thấp tới cao</option>
                  <option value="DESC" data-href="{{ route('product.index', ['cate' => Session::get('cate_id'), 'sort' => 'DESC' ]) }}" >Mới hơn</option>
                </select>
              </form>
            </div>

            <div class="row row-8">
              @foreach($listProduct as $key => $product)
              <div class="col-md-3 col-sm-6 product">
                <div class="product__img-holder">
                  <a href="{{ route('product.detail',['id' => $product->id]) }}" class="product__link">
                    <img src="{{ ($product->cover_path1 != null) ? $product->cover_path1 : url('img/default.png') }}" alt="" class="product__img">
                    <img src="{{ ($product->cover_path2 != null) ? $product->cover_path2 : url('img/default1.jpg') }}" alt="" class="product__img-back">
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
                <a href="#sssssssss" class="product__add-to-wishlist" title="Thêm vào giỏ hàng">
                  <i class="fa fa-cart-plus"></i>
                  <span>Thêm</span>
                </a>
                </div>
                </div>

                <div class="product__details">
                  <h3 class="product__title">
                    <a href="{{ route('product.detail',['id' => $product->id]) }}">{{ $product->name}}</a>
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
              @if( $key % 4 == 3 )
              <div class="w-100"></div>
              @endif
              @endforeach
            
            </div> <!-- end row -->
            
            <!-- Pagination -->
            <div class="pagination clearfix">                
              <nav class="pagination__nav right clearfix">
                <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
                <span class="pagination__page pagination__page--current">1</span>
                <a href="#" class="pagination__page">2</a>
                <a href="#" class="pagination__page">3</a>
                <a href="#" class="pagination__page">4</a>
                <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
              </nav>
            </div>

          </div> <!-- end col -->


          <!-- Sidebar -->
          <aside class="col-lg-3 sidebar left-sidebar">

            <!-- Categories -->
            <div class="widget widget_categories widget--bottom-line">
              <h4 class="widget-title">Sản phẩm</h4>
              <ul>
                @foreach ($listCategory as $item)
                  <li>
                    <a href="{{ route('product.index', ['cate' => $item->id]) }}">{{ $item->cate_name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
            <form method="POST" action="{{ route('web.add.translate') }}">
                {{ csrf_field() }}
            <!-- Size -->
            <div class="widget widget__filter-by-size widget--bottom-line">
              <h4 class="widget-title">Kích thước</h4>
              <ul class="size-select">
                <li>
                  <input type="checkbox" class="checkbox" id="small-size" name="small-size">
                  <label for="small-size" class="checkbox-label">X</label>
                </li>                
                <li>
                  <input type="checkbox" class="checkbox" id="medium-size" name="medium-size">
                  <label for="medium-size" class="checkbox-label">S</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="large-size" name="large-size">
                  <label for="large-size" class="checkbox-label">M</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="xlarge-size" name="xlarge-size">
                  <label for="xlarge-size" class="checkbox-label">L</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="xxlarge-size" name="xxlarge-size">
                  <label for="xxlarge-size" class="checkbox-label">XL</label>
                </li>
              </ul>
            </div>

            <!-- Color -->
            <div class="widget widget__filter-by-color widget--bottom-line">
              <h4 class="widget-title">Màu sắc</h4>
              <ul class="color-select">
                <li>
                  <input type="checkbox" class="checkbox" id="green-color" name="green-color">
                  <label for="green-color" class="checkbox-label">Xanh lá</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="red-color" name="red-color">
                  <label for="red-color" class="checkbox-label">Đỏ</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="blue-color" name="blue-color">
                  <label for="blue-color" class="checkbox-label">Xanh dương</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="white-color" name="white-color">
                  <label for="white-color" class="checkbox-label">Trắng</label>
                </li>
                <li>
                  <input type="checkbox" class="checkbox" id="black-color" name="black-color">
                  <label for="black-color" class="checkbox-label">Đen</label>
                </li>
              </ul>
            </div>

            <!-- Filter by Price -->
            <div class="widget widget__filter-by-price widget--bottom-line">
              <h4 class="widget-title">Lọc theo giá</h4>
               
              <div id="slider-range"></div>
              <p>
                <label for="amount">Mức giá:</label>
                <input type="text" id="amount">
                <button class="btn btn-sm btn-dark"><span>Lọc</span></>
              </p>
            </div>
            </form>

          </aside> <!-- end sidebar -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end catalog -->
@endsection

@section('scripts')
<script>
    var sort = '{{ session('sort') }}';
        if (sort) {
            $('.filter-product').val(sort);
        }
    $('.filter-product').change(function() {
        var href = $(".filter-product option:selected").data('href');
        window.location.href = href;  
    });
</script>
@endsection