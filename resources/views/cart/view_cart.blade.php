@extends('home')
@section('content')
<section class="area-top">
    <div class="container">
      <div class="row g-2 over">
          <div class="title">
              <a href="">Trang chủ >> &nbsp;</a><p>Giỏ hàng</p>
          </div>
          <div class="name">
              <h4>GIỎ HÀNG CỦA TÔI</h4>
          </div>
      </div>
      <div class="row g-2 mid">
          <table class="table table-inverse table-hover">
              <thead>
                  <tr class="menu-cart">
                      <th>SẢN PHẨM</th>
                      <th>HÌNH ẢNH</th>
                      <th>GIÁ</th>
                      <th>SỐ LƯỢNG</th>
                      <th>THÀNH TIỀN</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Sản phẩm 1</td>
                      <td><img src="images/ao-belike1_master.jpg" alt="" width="100"></td>
                      <td><span class="price-cart">250,000đ</span></td>
                      <td><input type="number" name="" value="1"></td>
                      <td><span class="price-cart">250,000đ</span></td>
                      <td><i class="far fa-trash-alt"></i></td>
                  </tr>
                  <tr>
                      <td>Sản phẩm 2</td>
                      <td><img src="images/ao-belike1_master.jpg" alt="" width="100"></td>
                      <td><span class="price-cart">250,000đ</span></td>
                      <td><input type="number" name="" value="1"></td>
                      <td><span class="price-cart">250,000đ</span></td>
                      <td><i class="far fa-trash-alt"></i></td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="row g-2 below">
          <div class="below-right">
              <p class="total-money">Tổng thanh toán:</p>
              <h4>500,000đ</h4>
              <a href="{{ route('home') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
              <a href="{{ route('view_check_out') }}" class="btn btn-dark">Tiến hành thanh toán</a>
          </div>
      </div>
    </div>
</section>
@endsection