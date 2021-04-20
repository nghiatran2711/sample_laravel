<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/home/css/style.css') }}">
		<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome.css"> -->
		<link rel="stylesheet" href="{{ asset('frontend/home/css/all.css') }}">

    <title>Home page</title>
  </head>
  <body>
    <header class="header-top">
    	<div class="container">
    		<li class="top-email"><i class="fas fa-envelope"></i>run01@runtime.vn</li>
    		<li class="top-phone"><i class="fas fa-phone-alt"></i>0908 77 00 95</li>	
    		<li class="top-search">
				  <form>
				  	<input type="text" name="" placeholder=" search..." class="input-search">
				  	<button class="button-search"><i class="fas fa-search"></i></span></button>
				  </form>
			</li>
    		<li class="top-account"><a href="">Đăng nhập</a> / <a href="">Đăng ký</a></li>    		
    	</div>
    </header>
    <header class="header-bottom">
    	<div class="container">
    		<div class="nav">
    			<img src="{{ asset('frontend/home/images/logo.png') }}">
    			<div class="nav-menu">
	    			<nav class="navbar navbar-expand-lg navbar-light">
					    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					        <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#">GIỚI THIỆU</a>
					        </li>
					        <li class="nav-item dropdown">
					          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					            SẢN PHẨM
					          </a>
					          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					            <li><a class="dropdown-item" href="#">Action</a></li>
					            <li><a class="dropdown-item" href="#">Another action</a></li>
					            <li><hr class="dropdown-divider"></li>
					            <li><a class="dropdown-item" href="#">Something else here</a></li>
					          </ul>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#">TIN TỨC</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#">LIÊN HỆ</a>
					        </li>
					      </ul>
					    </div>
					</nav>
				</div>
				<div class="cart">
					<i class="fas fa-shopping-cart"></i>
					<b>Giỏ hàng:</b>
					<span>0 </span>
				</div>
    		</div>
    	</div>
    </header>
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
						  @foreach ($posts as $key => $post )
							<div class="col border">
								<div class="product">
									<a href=""><img src="{{ asset($post->thumbnail) }}" height="180px"></a>
									<a href=""><span style="width:auto;white-space: normal;word-break: break-all">{{ $post->post_name}}</span></a>
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
    <section class="area-bottom">
    	<div class="container">
    		<div class="row row-cols-3">
    			<div class="col support">
			    	<img src="{{ asset('frontend/home/images/support_img_1.png') }}">
			    	<div class="support1">
			    		<h3>24/7</h3>
			    		<p>Hỗ trợ miễn phí</p>
			    	</div>
		    	</div>
		    	<div class="col support">
			    	<img src="{{ asset('frontend/home/images/support_img_2.png') }}">
			    	<div class="support1">
			    		<h3>100% HOÀN TIỀN</h3>
			    		<p>Bảo hành</p>
			    	</div>
		    	</div>
		    	<div class="col support">
			    	<img src="{{ asset('frontend/home/images/support_img_3.png') }}">
			    	<div class="support1">
			    		<h3>MIỄN PHÍ SHIPPING</h3>
			    		<p>Trên 5 đơn hàng</p>
			    	</div>
		    	</div>
    		</div>
    	</div>
    </section>
    <footer>
    	<div class="container">
		  	<div class="row row-cols-4">
			    <div class="col">
			    	<h5>VỀ CHÚNG TÔI</h5>
			    </div>
			    <div class="col">
			     	<h5>TRỢ GIÚP</h5>
				</div>
			    <div class="col">
			    	<h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
			    </div>
			    <div class="col">
			    	<h5>HÃY ĐẾN VỚI CHÚNG TÔI</h5>
			    </div>
			</div>
			<div class="row row-cols-4">
			    <div class="col">
			    	<p><a href="">Giới thiệu</a></p>
			    	<p><a href="">Giao hàng - Đổi trả</a></p>
					<p><a href="">Chính sách bảo mật</a></p>
					<p><a href="">Liên hệ</a></p>
			    </div>
			    <div class="col">
			    	<p><a href="">Hướng dẫn mua hàng</a></p>
			    	<p><a href="">Hướng dẫn thanh toán</a></p>
					<p><a href="">Tài khoản giao dịch</a></p>
				</div>
			    <div class="col">
			    	<p><i class="fab fa-facebook-square"></i><a href="">Facebook</a></p>
			    	<p><i class="fab fa-google-plus"></i><a href="">Google Plus</a></p>
					<p><i class="fab fa-twitter-square"></i><a href="">Twitter</a></p>
					<p><i class="fab fa-flickr"></i><a href="">Flickr</a></p>
			    	      
			    </div>
			    <div class="col">
			    	
			    </div>
			</div>
</div>
    </footer>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>