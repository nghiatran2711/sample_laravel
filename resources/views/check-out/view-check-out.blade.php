@extends('home')
@section('content')
<section class="area-top">
    <div class="container">
      <div class="row g-2 over">
          <div class="title">
              <a href="{{ route('home') }}">Trang chủ >> &nbsp;</a><p>Thanh toán</p>
          </div>
          <div class="name">
              <h4>THANH TOÁN</h4>
          </div>
      </div>
      <div class="row g-2 mid">
          <div class="col-sm-4">
              <div class="address">
                  <div class="title-address">
                      <p>1. ĐỊA CHỈ THANH TOÁN VÀ GIAO HÀNG</p>
                  </div>
                  <div class="content-address">
                      <h2>THÔNG TIN THANH TOÁN</h2>
                      <a href="">Đăng ký tài khoản mua hàng</a> |
                      <a href="">Đăng nhập</a>
                      <p>Mua hàng không cần tài khoản</p>
                  </div>
                  <div class="form-address">
                      <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Họ & Tên">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ">
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option></option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option></option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ghi chú đơn hàng"></textarea>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="address">
                  <div class="title-address">
                        <p>2. THANH TOÁN VÀ VẬN CHUYỂN</p>
                    </div>
                    <div class="content-address">
                      <h2>THÔNG TIN THANH TOÁN</h2>
                  </div>
                  <div class="form-address">
                      <form> 
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option></option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>						  	
                    </form>
                  </div>
                  <div class="content-address">
                      <h2>THANH TOÁN</h2>
                  </div>
                  <div class="form-radio">
                      <div class="radio">
                          <label>
                              <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                              Thanh toán online qua Credit card
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                              Thanh toán khi giao hàng (COD)
                          </label>
                      </div>
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="address">
                  <div class="title-address">
                        <p>3. THÔNG TIN ĐƠN HÀNG</p>
                    </div>
                    <div class="info-order">
                        <p>Thành tiền: <span>500,000 đ</span></p>
                        <p>Phí vận chuyển: <span>0 đ</span></p>
                        <h5>THANH TOÁN: <span>500,000 đ</span></h5>
                        <button class="btn btn-dark">ĐẶT HÀNG</button>
                    </div>
                </div>
                
          </div>
      </div>
    </div>
</section>
@endsection
