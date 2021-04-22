@extends('home')
@section('content')
<section class="area-top">
    <div class="container">
      <div class="row g-2">
        <div class="col-3">
          <div class="p-3 border bg-light">
              <i class="fas fa-bars"></i> <b>DANH MỤC</b>
          </div>
          <div class="category">
              <ul>
                      <li><i class="fa fa-female"></i> <a href=""><b>Thời trang</b></a><i class="fas fa-angle-right" style="float: right;"></i></li>
                      <li><i class="fas fa-utensils"></i> <a href=""><b>Thực phẩm</b></a><i class="fas fa-angle-right" style="float: right;"></i></i></li>
                      <li><i class="fa fa-camera"></i> <a href=""><b>Điện tử</b></a><i class="fas fa-angle-right" style="float: right;"></i></i></li>
                      <li><i class="fa fa-suitcase"></i> <a href=""><b>Nội thất</b></a><i class="fas fa-angle-right" style="float: right;"></i></i></li>
                      <li><i class="far fa-heart"></i> <a href=""><b>Nữ trang</b></a><i class="fas fa-angle-right" style="float: right;"></i></i></li>
                      <li><i class="fa fa-heart"></i> <a href=""><b>Mỹ Phẩm</b></a><i class="fas fa-angle-right" style="float: right;"></i>></i></li>
                      <li><i class="fa fa-puzzle-piece"></i> <a href=""><b>Quà tặng</b></a><i class="fas fa-angle-right" style="float: right;"></i></i></li>
                  </ul>
              </div>
        </div>
        <div class="col-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('frontend/home/images/slideshow_1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/home/images/slideshow_2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/home/images/slideshow_3.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
        </div>
        <div class="col-3">
              <div class="promotion">
                  <b>SẢN PHẨM KHUYẾN MÃI</b>
                  <ul>
                      <li>
                          <div class="image">
                              <img src="{{ asset('frontend/home/images/ao-belike1_master.jpg') }}" width="75" height="88">
                          </div>
                          <div class="info">
                              <a href="">Áo thun nữ Belike</a>
                              <p><del>200.000₫</del> </p>
                              <p>95.200₫</p>
                          </div>
                      </li>
                      <li>
                          <div class="image">
                              <img src="{{ asset('frontend/home/images/ao-belike1_master.jpg') }}" width="75" height="88">
                          </div>
                          <div class="info">
                              <a href="">Áo thun nữ Belike</a>
                              <p><del>200.000₫</del> </p>
                              <p>95.200₫</p>
                          </div>
                      </li>
                      <li>
                          <div class="image">
                              <img src="{{ asset('frontend/home/images/ao-belike1_master.jpg') }}" width="75" height="88">
                          </div>
                          <div class="info">
                              <a href="">Áo thun nữ Belike</a>
                              <p><del>200.000₫</del> </p>
                              <p>95.200₫</p>
                          </div>
                      </li>
                  </ul>
              </div>
        </div>
      </div>
    </div>
</section>
<section class="area-mid">
    <div class="container">
        <div class="border-color">
              <div class="row g-2">
                <div class="col-3">
                  <div class="p-3 border">
                      <div class="fashion">
                          <i class="fa fa-female"></i> <b>Category</b>
                      </div>
                  </div>
                  <div class="category-fashion">
                      <ul>
                              <li class="active"><a href=""><b>Tất cả</b></a></li>
                              @foreach ($categories as $key => $category )
                                  <li><a href=""><b>{{ $category->category_name }}</b></a></li>
                              @endforeach
                              
                              
                          </ul>
                      </div>
                </div>
                <div class="col-6">
                  <div class="row row-cols-3">
                      @foreach ($products as $key => $product )
                        <div class="col border">
                            <div class="product">
                                <a href=""><img src="{{ asset($product->image) }}" height="180px"></a>
                                <a href=""><span style="width:auto;white-space: normal;word-break: break-all">{{ $product->name}}</span></a>
                            </div>
                        </div>
                      @endforeach
                    
                  </div>
                </div>
                <div class="col-3">
                    <div class="image-right">
                        <img src="{{ asset('frontend/home/images/tabs_1_slider_img_1.jpg') }}">
                    </div>
                      
                </div>
              </div>
        </div>
    </div>
</section>
@endsection
