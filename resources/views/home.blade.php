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
					<a href="{{ route('cart') }}">
						<i class="fas fa-shopping-cart"></i>
						<b>Giỏ hàng:</b>
						<span>0 </span>
					</a>
				</div>
    		</div>
    	</div>
    </header>
    @yield('content')
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