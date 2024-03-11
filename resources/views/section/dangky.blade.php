<section class="text-light timkiem dangky background-overlay" style="background: url('/upload/bg2.jpg'); background-size: cover;background-position: center;">
  <div class="container">
    <div class="heading heading-center text-center wow bounceInLeft">
      <h2 class="uppercase">Điền thông tin nhận tư vấn và báo giá ngay</h2>
      <p>Vui lòng điền thông tin dưới đây, chúng tôi sẽ liên hệ lại báo giá cho quý khách.</p>
    </div>
    <form class="form-inline wow bounceInRight" data-element="mail-to-admin">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" class="form-control name" name="Họ và tên" value="" placeholder="Họ và tên"><i class="fa fa-user"></i>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" class="form-control phone" name="Số điện thoại" value="" placeholder="Số điện thoại"><i class="fa fa-phone"></i>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="text" class="form-control" name="Email/Facebook của bạn" value="" placeholder="Email/Facebook nếu có"><i class="fa fa-envelope"></i>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="hidden" name="mail-to" value="{!!$site["dia-chi-email"]!!}">
            <input type="hidden" name="subject" value="Đăng ký nhận báo giá">
            <button type="button" class="btn btn-send-mail" data-action="Đăng ký nhận tư vấn dịch vụ miễn phí">Đăng ký báo giá</button>
          </div>
        </div>
    </div>
  </form>
  </div>
</section>