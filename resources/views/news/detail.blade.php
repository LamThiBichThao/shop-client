@extends('index')
@section('title', "Tin tức")
@section('content')
<section class="section-wrap pb-20">
      <div class="container">

        <!-- Breadcrumbs -->
        <ol class="breadcrumbs">
          <li>
            <a href="index.html">Trang chủ</a>
          </li>
          <li>
            <a href="index.html">Tin tức</a>
          </li>
          <li class="active">
            Tin mới
          </li>
        </ol>

        <div class="row">
          
          <!-- content -->
          <div class="col-lg-8 mb-50">

            <!-- standard post -->
            <article class="entry">
              
              <div class="entry__header">
                <h2 class="entry__title">
                  <a href="blog-single.html">Những xu hướng thời trang thu đông 2019</a>
                </h2>
                <ul class="entry__meta">
                  <li class="entry__meta-date">
                    <span class="entry__meta-label">ngày đăng: </span>03/10/2019
                  </li>
                  <li class="entry__meta-category">
                    <span class="entry__meta-label">loại tin: </span><a href="#">Khuyến mại</a>
                  </li>
                </ul>
              </div>

              <div class="entry__img-holder">
                <a href="blog-single.html">
                  <img src="img/blog/post_1.jpg" alt="" class="entry__img">
                </a>
              </div>

              <div class="entry__article">
                <p>Cầu vai phồng: Những mùa mốt trước, cầu vai dựng phồng chỉ được các NTK biến tấu trên những bộ suit nam tính hay áo khoác quá khổ. Tuy nhiên, năm nay chi tiết độc đáo này còn xuất hiện trên đầm dáng suông. Nếu Richard Quinn khơi gợi vẻ nhẹ nhàng trong trang phục in hoa thì Alexander McQueen sử dụng kỹ thuật xếp nếp cầu vai thành đóa hồng với hiệu ứng 3D.</p>

                <blockquote><p>“Lấy cảm hứng từ âm hưởng thời trang thập niên 1980, các thiết kế với điểm nhấn cầu vai phồng xuất hiện trong BST thời trang của Dolce & Gabbana, Richard Quinn hay Givenchy.”</p>
                <cite>- Steve Maraboli</cite></blockquote>

                <p>Trang phục đính lông: Từ các thiết kế kết mang dấu ấn nữ quyền Balmain cho đến BST nhẹ nhàng của Erdem, mùa mốt thu đông 2019 đánh dấu sự trở lại ấn tượng của xu hướng đính lông vũ. </p>

                <h2>Những bộ cánh được biến tấu mới lạ. </h2>
                
                <p>Kẻ ô màu sắc: Họa tiết kẻ ô vẫn chưa có dấu hiệu hạ nhiệt trong mùa mốt thu đông 2019 với sự hòa quyện màu sắc trên nhiều thiết kế của Burberry, Victoria Beckham, Alexachung. Các mẫu thiết kế mang đậm truyền thống Anh.</p>


                <!-- tags -->
                <div class="entry__tags">
                  Tags: <a href="#" rel="tag">thudong</a>, <a href="#" rel="tag">thoitrang</a>, <a href="#" rel="tag">tintuc</a>
                </div> <!-- end tags -->

                <!-- share -->
                <div class="entry__share">
                  <span class="entry__share-label">Chia sẻ</span>
                  <div class="socials">
                    <a href="#" class="facebook"><i class="ui-facebook"></i></a>
                    <a href="#" class="twitter"><i class="ui-twitter"></i></a>
                    <a href="#" class="instagram"><i class="ui-instagram"></i></a>  
                  </div>
                </div> <!-- end share -->

              </div> <!-- end entry article -->

            </article> <!-- end standard post -->
          </div> <!-- end col -->
          
          <!-- Sidebar -->
          <aside class="col-lg-4 sidebar">

            <div class="sidebar__box">
              
              <!-- About -->
<!--               <div class="widget widget_text">
                <h4 class="widget-title">About</h4>
                <div class="textwidget">
                  <p>Namira is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. 
                  </p>
                </div>
              </div> -->

              <!-- Categories -->
              <div class="widget widget_categories">
                <h4 class="widget-title">Loại tin</h4>
                <ul>
                  <li>
                    <a href="#">Tin tức</a>
                  </li>
                  <li>
                    <a href="#">Khuyến mại</a>
                  </li>
                </ul>
              </div>

              <!-- Recent Posts -->
              <div class="widget widget_recent_entries">
                <h4 class="widget-title">Tin tức mới nhất</h4>
                <ul>
                  <li>
                    <a href="#">Những xu hướng thời trang thu đông 2019</a>
                    <span class="post-date">03/10/2019</span>
                  </li>
                  <li>
                    <a href="#">Những xu hướng thời trang thu đông 2019</a>
                    <span class="post-date">03/10/2019</span>
                  </li>
                  <li>
                    <a href="#">Những xu hướng thời trang thu đông 2019</a>
                    <span class="post-date">03/10/2019</span>
                  </li>
                </ul>
              </div>

              <!-- Follow Us -->
              <div class="widget widget-follow">
                <h4 class="widget-title">Mạng xã hội</h4>
                <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Instagram</a></li>
                </ul>                
              </div>


              <!-- Tags -->
              <div class="widget widget_tags clearfix">
                <h4 class="widget-title">Tags</h4>
                <a href="#">Tin tức</a>
                <a href="#">Khuyến mại</a>
                <a href="#">Giảm giá</a>
                <a href="#">Quốc tế phụ nữ</a>
                <a href="#">Thu đông</a>
                <a href="#">Xuân hè</a>
                <a href="#">Hot</a>
              </div>

            </div> <!-- end sidebar box -->
          </aside> <!-- end sidebar -->
    
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end blog single -->
@endsection