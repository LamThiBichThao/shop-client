@extends('index')
@section('title', "Thông tin sản phẩm")
@section('content')
<section class="section-wrap pb-20 product-single">
<div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumbs">
        <li>
            <a href="{{ route('home.index') }}">Trang chủ</a>
        </li>
        @if($category->parent_cate == null)
        <li>
            <a href="{{ route('product.index', ['category' => $category->id ]) }}">{{ $category->cate_name }}</a>
        </li>
        @else
        <li>
            <a href="{{ route('product.index', ['category' => $category->parent_cate->id ]) }}">{{ $category->parent_cate->cate_name }}</a>
        </li>
        <li class="active">
            <a href="{{ route('product.index', ['category' => $category->id ]) }}">{{ $category->cate_name }}</a>
        </li>
        @endif
    </ol>

    <div class="row">
        <div class="col-md-6 product-slider mb-50">

            <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
            @foreach ($detail->cover_path as $item)
                @if ($item != null)
                <div class="gallery-cell">
                    <a href="#" class="lightbox-img">
                        <img src="{{ $item }}" alt="" />
                    </a>
                </div>
                @endif
            @endforeach
            </div> <!-- end gallery main -->

            <div class="gallery-thumbs" id="gallery-thumbs">
                @foreach ($detail->cover_path as $item)
                @if ($item != null)
                <div class="gallery-cell">
                    <img src="{{ $item }}" alt="" />
                </div>
                @endif
                @endforeach
            </div> <!-- end gallery thumbs -->

        </div> <!-- end col img slider -->
        <div class="col-md-6 product-single">
            <h1 class="product-single__title uppercase">{{ $detail->name }}</h1>
            <span class="product-single__price">
                @if($detail->new_price == 0)
                <ins>
                    <span class="amount">{{ $detail->price }} đ</span>
                </ins>
                @else
                <ins>
                    <span class="amount">{{ $detail->new_price }} đ</span>
                </ins>
                <del>
                    <span>{{ $detail->price }}đ</span>
                </del>
                @endif
            </span>            
            <!-- 
            <div class="colors clearfix">
                <span class="colors__label">Color: <span class="colors__label-selected">Fadaed Blue</span></span>
                <a href="#" class="colors__item colors__item--selected blue"></a>
                <a href="#" class="colors__item black"></a>
                <a href="#" class="colors__item pink"></a>
            </div>
            -->
            <br>

            <div class="size-quantity clearfix">
                <div class="size">
                <label>Kích cỡ</label>
                <select name="size" id="size__select" class="size__select">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
                </div>
                
                <div class="quantity">
                <label>Màu sắc</label>                 
                <select name="quantity" id="quantity__select" class="quantity__select">
                    <option value="1">Xanh</option>
                    <option value="2">Đỏ</option>
                    <option value="3">Tím</option>
                    <option value="4">Vàng</option>
                    <option value="5">Trắng</option>
                </select>
                </div>

                <div class="quantity">
                <label>Số lượng</label>                 
                    <div class="product-count">
                    <button class="button-count no-active btn" disabled>-</button>
                    <input type="text" readonly class="number-product" value="1">
                    <button class="button-count btn">+</button>
                    </div>
                </div>              
            </div>            

            <div class="row row-10 product-single__actions clearfix">
                <div class="col">
                    <a href="#sssssssss" class="btn btn-lg btn-color product-single__add-to-cart">
                    <i class="fa fa-cart-plus"></i>
                    <span>Thêm vào giỏ hàng</span>
                    </a>
                </div>
                <div class="col">
                    <a href="cart.html" class="btn btn-lg btn-dark product-single__add-to-wishlist">
                    <i class="ui-bag"></i>
                    <span>Mua ngay</span>
                    </a>
                </div>
            </div>            

            <div class="product_meta">
                <ul>
                    <li>
                        <span class="product-code">Mã sản phẩm: <span>SP{{ $detail->id }}</span></span>
                    </li>
                    <li>
                        <span class="product-material">Chất liệu: <span>{{ $detail->material }}</span></span>
                    </li>
                    <li>
                        <span class="product-country">Xuất xứ: <span>Trung Quốc</span></span>
                    </li>
                </ul>                              
            </div>

            <!-- Accordion -->
            <div class="accordion mb-50" id="accordion">
                <div class="accordion__panel">
                <div class="accordion__heading" id="headingOne">
                    <a data-toggle="collapse" href="#collapseOne" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapseOne">Mô tả<span class="accordion__toggle">&nbsp;</span>
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                    <div class="accordion__body">
                        {{ $detail->description }}
                    {{-- Áo phông cotton USA. Phom regular, cổ tròn bổ nẹp cài cúc, sát nách,túi ốp ngực. Phù hợp mặc mùa hè, thoải mái, dễ dàng. Kết hợp quần shorts, giày thể thao, sandal .. --}}
                    </div>
                </div>
                </div>

                <div class="accordion__panel">
                <div class="accordion__heading" id="headingTwo">
                    <a data-toggle="collapse" href="#collapseTwo" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseTwo">Phí vận chuyển<span class="accordion__toggle">&nbsp;</span>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="accordion__body">
                    <table class="table shop_attributes">
                        <tbody>
                        <tr>
                            <th>Nội thành Hà Nội:</th>
                            <td>20.000đ</td>
                        </tr>
                        <tr>
                            <th>Ngoại thành Hà Nội:</th>
                            <td>25.000đ</td>
                        </tr>
                        <tr>
                            <th>Các tính thành khác:</th>
                            <td>30.000đ</td>
                        </tr>                                     
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>

                <div class="accordion__panel">
                <div class="accordion__heading" id="headingThree">
                    <a data-toggle="collapse" href="#collapseThree" class="accordion__link accordion--is-closed" aria-expanded="false" aria-controls="collapseThree">Hướng dẫn sử dụng<span class="accordion__toggle">&nbsp;</span>
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
                    <div class="accordion__body">
                    <div class="reviews">
                        <ul class="reviews__list">
                        <li class="reviews__list-item">
                            <div class="reviews__body">
                            <div class="reviews__content">
                                <p>Giặt máy ở chế độ nhẹ nhàng, nhiệt độ thường. Không sử dụng hóa chất tẩy có chứa clo.
                                Phơi trong bóng mát. Sấy khô ở nhiệt độ thấp, nhẹ nhàng. Là ở nhiệt độ trung bình 150 độ c. Giặt với sản phẩm cùng màu. Không là lên chi tiết trang trí.</p>
                            </div>
                            </div>
                        </li>
                        </ul>         
                    </div> <!--  end reviews -->
                    </div>
                </div>
                </div>
            </div> <!-- end accordion -->

        </div> <!-- end col product description -->
    </div> <!-- end row -->
    
    </div> <!-- end container -->
</section> <!-- end single product -->
@endsection