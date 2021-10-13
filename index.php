
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="assets/images/favicon.png" type="image/png" />
  <title>COVID - 19</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
  <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
  <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-scroll-animation="true">
  <div class="body_wrapper">

    <!--================Preloader Area =================-->
    <div class="preloader">
      <div class="three-bounce">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
    <!--================End Preloader Area =================-->

    <!--================Mobile Canvus Menu Area =================-->
    <div class="mobile_canvus_menu">
      <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
      </div>
      <div class="menu_part_lux">
        <ul class="menu_list wd_scroll">
          <li><a href="index.html">Trang chủ</a></li>
          <li>
            <a href="index.html">Phòng chống
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Các triệu chứng thường gặp</a></li>
              <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
              <li><a href="prevention.html">Biện pháp phòng chống</a></li>
              <li><a href="tracker.html">Theo dõi tình hình</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Tư vấn</a></li>
          <li>
            <a href="#">Giới thiệu
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="about.html">Về COVID-19</a></li>
              <li><a href="doctors.html">Đội ngũ bác sĩ</a></li>
              <li><a href="sample-right-sidebar.html">Tin tức</a></li>
              <li><a href="search.html">Tìm kiếm</a></li>
            </ul>
          </li>

          <li>
            <a href="index.html">Tin tức
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="blog.html">Tin tức</a></li>
              <li><a href="single-blog.html">Tin tức chi tiết</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Liên hệ</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"></i> Kiểm tra triệu chứng</a>
      </div>
    </div>
    <!--================End Mobile Canvus Menu Area =================-->
    <!--================Sidebar Form Area =================-->
    <div class="body_capture"></div>
    <section class="sidebar_widget scroll_body">
      <div class="info_sidebar_inner">
        <div class="close_btn">
          <img src="assets/images/icon/close.png" alt="">
        </div>
        <ul class="nav info_social">
          <li>
            <a href="#"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-vimeo-v"></i></a>
          </li>
        </ul>
        <div class="info_title">
          <h2>Liên lạc</h2>
          <p>Nếu bạn có bất kỳ câu hỏi nào trước khi chúng tôi bắt đầu, vui lòng điền vào bên dưới biểu mẫu liên hệ.</p>
        </div>
        <form action="#" class="appoinment_form js-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                <label><i class="far fa-user"></i>Họ tên</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                <label><i class="fas fa-envelope-open"></i></i>Email 
                  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="number" name="number" placeholder="" required />
                <label><i class="fas fa-phone-alt"></i>Số điện thoại
                  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                <label><i class="fas fa-file-alt"></i>Nội dung  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group checkbox_field">
                <div class="checkbox">
                  <input type="checkbox" value="None" id="squared2" name="check" />
                  <label class="l_text" for="squared2">Tôi chấp nhận <span>Chính sách bảo mật</span></label>
                </div>
                <button type="submit" class="green_btn" name="appoinment" id="appoinment" value="appoinment"
                  data-value="appoinment">
                  Gửi
                </button>
              </div>
            </div>
          </div>
          <div class="success-message">
            <i class="fa fa-check text-primary"></i> Cảm ơn bạn!. Phản hồi của bạn đã được gửi thành công ......
          </div>
          <div class="error-message">Chúng tôi xin lỗi, có thông tin bị lỗi</div>
        </form>
        <div class="info_footer">
          <p>© Bản quyền
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.
          </p>
          
        </div>
      </div>
    </section>
    <!--================End Sidebar Form Area =================-->

    <!--================Header Area =================-->
    <header class="header_area">
      <ul class="nav menu_social flex-column">
        <li>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
      <div class="main_menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                srcset="assets/images/logo-2x.png 2x" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="active"><a href="index.php ">Trang chủ</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php" role="button"
                    aria-haspopup="true" aria-expanded="false">Phòng chống </a>
                  <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Các triệu chứng
                        <i class="fas fa-angle-down" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="symptom.php">Các triệu chứng phổ biến</a></li>
                        <li><a href="symptom-checker.php"> Kiểm tra triệu chứng</a></li>
                        <li><a href="prevention.php">Biện pháp phòng chống</a></li>
                        <li><a href="tracker.php">Theo dõi tình hình</a></li>
                      </ul>
                    </li>
                    <li><a href="faq.php">FAQS</a></li>
                  </ul>
                </li>
                <li><a href="appointment.php">Tư vấn</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Giới thiệu</a>
                  <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="about.php">Corona Virus</a></li>
                    <li><a href="doctors.php">Đội ngũ bác sĩ</a></li>
                    <li><a href="sample-right-sidebar.php">Vaccien Phòng COVID-19 </a></li>
                    <li ><a href="search.php">Tìm kiếm</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Tin tức
                  </a>
                  <i class="fas fa-angle-down" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Tin tức</a></li>
                    <li><a href="single-blog.html">Tin tức chi tiết</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Liên hệ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="checker_btn">
                  <a href="#"></i>Kiếm tra triệu chứng</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="right_burger">
          <ul class="nav">
            <li>
              <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                <img src="assets/images/icon/search.png" alt="" />
              </div>
            </li>
            <li>
              <div class="menu_btn">
                <img src="assets/images/icon/burger.png" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--================End Header Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="container">
        <div class="row home_banner_inner">
          <div class="col-sm-7">
            <h5 class="wow fadeInUp" data-wow-delay="300ms">Stop COVID-19</h5>
            <h3 class="wow fadeInUp" data-wow-delay="500ms">CHUNG TAY ĐẨY LÙI DỊCH BỆNH COVID-19
            </h3>
            <p class="wow fadeInUp" data-wow-delay="400ms">
              Chúng ta đều là công dân toàn cầu, và chúng ta đều có một phần trách nhiệm cho cuộc chiến này. Chủng coronavirus mới
              đã đạt tới mức đại dịch.
            </p>
            <a class="main_btn wow fadeInLeft" data-wow-delay="300ms" href="#">Phòng chống dịch</a>
            <div class="row home_option">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="300ms">
                <div class="media">
                  <div class="d-flex">
                    <i class="fas fa-shield-virus"></i>
                  </div>
                  <div class="media-body">
                    <h4>Sự bảo vệ</h4>
                    <p>Làm thế nào để bảo vệ bản thân</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                <div class="media">
                  <div class="d-flex">
                    <i class="fas fa-user-check"></i>
                  </div>
                  <div class="media-body">
                    <h4>Triệu chứng</h4>
                    <p>Kiểm tra các triệu chứng cơ bản</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="500ms">
                <div class="media">
                  <div class="d-flex">
                    <i class="fas fa-comments"></i>                  
                  </div>
                  <div class="media-body">
                    <h4>Tư vấn</h4>
                    <p>Nhận tư vấn trực tuyến</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="600ms">
                <div class="media">
                  <div class="d-flex">
                    <i class="fas fa-file-medical-alt"></i>
                  </div>
                  <div class="media-body">
                    <h4> COVID-19</h4>
                    <p>Đọc thêm về coronavirus</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <img class="img-fluid wow fadeInRight" data-wow-delay="400ms"
              src="assets/images/svg/home-banner-cleaner.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Check Now Area =================-->
    <section class="check_now_area">
      <div class="container">
        <div class="row m-0 justify-content-between">
          <div class="left">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/check-1.png" alt="" />
                <img src="assets/images/check-2.png" alt="" />
                <img src="assets/images/check-3.png" alt="" />
              </div>
              <div class="media-body">
                <h4>Bạn có thể bị mắc Covid-19?</h4>
                <p>
                 Hãy thử trình kiểm tra coronavirus đơn giản của chúng tôi<br> để tìm hiểu những gì bạn cần làm.
                </p>
              </div>
            </div>
          </div>
          <div class="right">
            <a class="icon_btn wow fadeInRight" data-wow-delay="400ms" href="#">Kiểm tra ngay<i class="far fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!--================End Check Now Area =================-->

    <!--================Home About Area =================-->
    <section class="home_about_corona">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="home_ab_img wow fadeInUp" data-wow-delay="400ms">
              <img src="assets/images/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="home_ab_text">
              <div class="home_ab_text_inner">
                <div class="home_ab_item">
                  <h6>DỊCH COVID-19 </h6>
                  <h4>Giới thiệu về Coronavirus</h4>
                  <p>
                   Bệnh Coronavirus 2019 (COVID-19) là một bệnh truyền nhiễm do virus 
                   Corona gây hội chứng hô hấp cấp tính nghiêm trọng 2. 
                   Căn bệnh này được xác định lần đầu tiên vào năm 2019 tại Vũ Hán,
                    thủ phủ của Hồ Bắc, Trung Quốc và từ đó lan rộng ra toàn cầu, 
                    dẫn đến năm 2019–2020 đại dịch do vi-rút corona gây ra.
                  </p>
                </div>
                <div class="home_ab_item">
                  <h4>COVID-19 là gì?</h4>
                  <p>
                    COVID-19 là một dòng coronavirus mới chưa được xác định trước đây ở người. 
                    Nó được xác định lần đầu tiên ở Vũ Hán, tỉnh Hồ Bắc, Trung Quốc, 
                    nơi nó đã gây ra một đợt bùng phát lớn và đang diễn ra. Nó đã lan rộng hơn ở Trung Quốc.
                  </p>
                  <a class="text_btn" href="#">Đọc thêm về <i class="linearicons-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home About Area =================-->

    <!--================Worldwide Tracker Area =================-->
    <section class="world_wide_tracker pad_top">
      <div class="container">
        <img class="tracker_map" src="assets/images/tracker-map-bg.png" alt="" />
        <div class="tracker_text">
          <h5>Theo dõi trên toàn thế giới</h5>
          <h2>Các trường hợp nhiễm COVID-19 đã được xác nhận</h2>
          <p>Ngày cập nhập: <?php echo date("d/m/Y");?></p>
        </div>
        <div class="row tracker_inner">
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="300">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-red-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_cases"></h2>
                <p>Tổng số trường hợp</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="400">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-black-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_deaths"></h2>
                <p>Tổng số người chết</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="500">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-green-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="total_recovered"></h2>
                <p>Đã hồi phục</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="600">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/icon/corona-yellow-1.png" alt="" />
              </div>
              <div class="media-body">
                <h2 id="new_cases"></h2>
                <p>Các trường hợp mới</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tracker_btn">
          <a class="green_btn wow fadeInUp" data-wow-delay="500" href="#"><i class="linearicons-earth-lock"></i> See
            Live
            Track</a>
        </div>
      </div>
    </section>
    <!--================End Worldwide Tracker Area =================-->

    <!--================Symptoms Area =================-->
    <section class="symptoms_area">
      <div class="container">
        <ul class="nav image_list">
          <li><img src="assets/images/symptoms-user/sm-1.png" alt=""></li>
          <li><img src="assets/images/symptoms-user/sm-2.png" alt=""></li>
          <li><img src="assets/images/symptoms-user/sm-3.png" alt=""></li>
        </ul>
        <div class="title_text wow fadeInUp" data-wow-delay="400ms">
          <h5>Các triệu chứng của COVID-19</h5>
          <h2>Các triệu chứng cơ bản của COVID-19</h2>
        </div>
        <div class="row symptoms_inner">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="assets/images/symptoms-user/symptoms-1.png" alt="" />
                </div>
                <div class="media-body">
                  <h4>Sốt cao</h4>
                  <p>
                    Sau thời gian ủ bệnh (từ 2 đến 14 ngày). Sốt được xác định có nguy cơ mắc COVID-19 là đạt ít nhất 39 ° C thường kèm theo giảm chức năng vị giác và khứu giác.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="500ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="assets/images/symptoms-user/symptoms-2.png" alt="" />
                </div>
                <div class="media-body">
                  <h4>Khó thở</h4>
                  <p>
                    Bạn cảm thấy nóng khi chạm vào ngực hoặc lưng Đây là một dấu hiệu phổ biến và cũng có thể xuất hiện sau 2-10 ngày nếu bạn bị ảnh hưởng.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="assets/images/symptoms-user/symptoms-3.png" alt="" />
                </div>
                <div class="media-body">
                  <h4>Ho khan</h4>
                  <p>
                    Ho là một triệu chứng quan trọng khác, nhưng nó không chỉ là bất kỳ cơn ho nào. Đó hẳn là một cơn ho khan mà bạn cảm thấy tức ngực
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="700ms">
            <div class="symptoms_item">
              <div class="media">
                <div class="d-flex">
                  <img src="assets/images/symptoms-user/symptoms-4.png" alt="" />
                </div>
                <div class="media-body">
                  <h4>Đau đầu</h4>
                  <p>
                    Cứ 6 người thì có 1 người nhiễm COVID-19 bị bệnh nặng và khó thở hoặc thở gấp.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Symptoms Area =================-->

    <!--================Protect Yourself Area =================-->
    <section class="protect_yourself_area p_100">
      <div class="container">
        <div class="main_title text-center">
          <h5>Bạn cần làm gì</h5>
          <h2>Bảo vệ bản thân bằng cách nào?</h2>
        </div>
        <div class="row protect_inner">
          <div class="col-lg-6">
            <div class="row protect_list_inner">
              <div class="col-6">
                <div class="protect_list_item">
                  <div class="protect_list_title">
                    <h3>Bạn nên làm</h3>
                    <h6>Hãy làm theo</h6>
                  </div>
                  <ul class="nav flex-column">
                    <li>
                      <a href="#"><i class="linearicons-home4"></i>Ở nhà</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-desk-tape"></i>Đeo khẩu trang</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-tissue"></i>Luôn sử dụng khăn giấy</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-couch"></i>Khử trùng nhà của bạn</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-rain"></i>Luôn rửa tay</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-thermometer"></i>Tự cách li</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-bottle"></i>Ăn uống lành mạnh.</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <div class="col-6">
                <div class="protect_list_item red">
                  <div class="protect_list_title">
                    <h3>Bạn nên tránh</h3>
                    <h6>Hãy làm theo</h6>
                  </div>
                  <ul class="nav flex-column">
                    <li>
                      <a href="#"><i class="linearicons-man-woman"></i>Không tụ tập</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-paw"></i>Tránh động vật</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-woman"></i>Không đưa tay lên mặt</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-hand"></i>Không bắt tay</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-chair"></i>Tránh tiếp xúc các bề mặt</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-drop-crossed"></i>Tránh các giọt bắn</a>
                    </li>
                    <li>
                      <a href="#"><i class="linearicons-plane-crossed"></i>Không đi du lịch</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="protect_self_text">
              <h3>Tự cách li tại nhà như thế nào?</h3>
              <p>
                Nếu bạn cần phải tự cách li, bạn nên hành động ngay lập tức. Bạn phải ở trong nhà và tránh tiếp xúc với người khác.
              </p>
              <a class="text_btn" href="#">Bạn có thể tự bảo vệ mình bằng cách nào khác?
                <i class="linearicons-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="protect_img text-center apps_craft_animation">
              <img class="img-fluid wow fadeIn" data-wow-delay="500ms" src="assets/images/protect01.jpg" alt="" />
              <ul class="nav">
                <li><img src="assets/images/icon/project-virus-1.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-2.png" alt=""></li>
                <li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-3.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-4.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-5.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-6.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-7.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-8.png" alt=""></li>
                <li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-9.png" alt=""></li>
                <li><img src="assets/images/icon/project-virus-10.png" alt=""></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Protect Yourself Area =================-->

    <!--================Washing Process Area =================-->
    <section class="washing_process_area pad_btm">
      <div class="container">
        <div class="main_title text-center white">
          <h5>Quy trình rửa tay</h5>
          <h2>Rửa tay đúng cách</h2>
        </div>
        <div class="washing_process_inner row">
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="400ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-1.png" alt="" />
                <div class="number">
                  1
                </div>
              </div>
              <p><span>Thoa xà phòng</span> và xoa hai tay lại với nhau</p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="500ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-2.png" alt="" />
                <div class="number">
                  2
                </div>
              </div>
              <p>
                <span>Dùng một tay</span> xoa mu bàn tay kia và ngược lại.</p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="600ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-3.png" alt="" />
                <div class="number">
                  3
                </div>
              </div>
              <p>
                <span>Xoa hai bàn tay </span> với nhau và làm sạch giữa các ngón tay của bạn
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="700ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-4.png" alt="" />
                <div class="number">
                  4
                </div>
              </div>
              <p>
                <span>Xoa mu bàn tay</span> vào lòng bàn tay
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="800ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-5.png" alt="" />
                <div class="number">
                  5
                </div>
              </div>
              <p>
                <span>Dùng tay kia</span> xoa ngón tay cái và ngược lại
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 wow fadeIn" data-wow-delay="900ms">
            <div class="washing_item">
              <div class="icon">
                <img src="assets/images/icon/washing-6.png" alt="" />
                <div class="number">
                  6
                </div>
              </div>
              <p>
                <span>Xoa các đầu ngón tay</span> vào lòng bàn tay kia và ngược lại
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Washing Process Area =================-->

    <!--================Prevent Area =================-->
    <section class="prevent_area">
      <div class="container">
        <div class="row prevent_inner">
          <div class="col-lg-6">
            <div class="prevent_item_inner row">
              <div class="col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="prevent_item">
                  <div class="prevent_img">
                    <img class="img-fluid" src="assets/images/prevent/prevent-1.png" alt="" />
                  </div>
                  <div class="prevent_text">
                    <h4>Stay at home</h4>
                    <p>
                      Hãy ở nhà nếu bạn nhận thấy các triệu chứng và hỏi ý kiến ​​bác sĩ qua điện thoại.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="prevent_item">
                  <div class="prevent_img">
                    <img class="img-fluid" src="assets/images/prevent/prevent-2.png" alt="" />
                  </div>
                  <div class="prevent_text">
                    <h4>Rửa tay thường xuyên</h4>
                    <p>
                      Làm sạch tay bằng chất tẩy rửa có cồn hoặc rửa bằng xà phòng trong ít nhất 20 giây
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="prevent_item">
                  <div class="prevent_img">
                    <img class="img-fluid" src="assets/images/prevent/prevent-3.png" alt="" />
                  </div>
                  <div class="prevent_text">
                    <h4>Giãn cách xã hội</h4>
                    <p>
                      Giữ khoảng cách ít nhất 2 m giữa bạn và bất kỳ ai nếu bạn<br> đi giữa mọi người.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeInUp" data-wow-delay="700ms">
                <div class="prevent_item">
                  <div class="prevent_img">
                    <img class="img-fluid" src="assets/images/prevent/prevent-4.png" alt="" />
                  </div>
                  <div class="prevent_text">
                    <h4>Đeo khẩu trang</h4>
                    <p>
                      Khi bạn ở gần những người khác và trước khi bạn vào nhà cung cấp dịch vụ chăm sóc sức khỏe.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="prevent_details">
              <div class="prevent_details_text">
                <h5>Bạn nên làm gì những gì?</h5>
                <h2>Làm thế nào để ngăn chặn Virus Corona?</h2>
                <p>
                  Một số điểm về cách thức lây lan của căn bệnh này đã được xác định. WHO và CDC tuyên bố rằng căn bệnh này chủ yếu lây lan khi tiếp xúc gần và do các giọt bắn tạo ra khi người ta ho hoặc hắt hơi; tiếp xúc gần trong vòng 1 đến 2 mét. Một nghiên cứu ở Singapore đã phát hiện ra rằng một cơn ho khi không đeo khẩu trang có thể dẫn đến những giọt nhỏ bay đến 4,5 mét.
                </p>
                <p>
                  Các giọt bắn qua hô hấp cũng có thể được tạo ra trong quá trình thở ra, kể cả khi nói chuyện, mặc dù vi-rút nói chung không lây nhiễm trong không khí. Những giọt này có thể rơi vào miệng hoặc mũi của những người ở gần đó hoặc có thể bị hít vào phổi...
                </p>
                <a class="green_btn" href="#"><i class="linearicons-shield-check"></i>Đọc thêm về Phòng chống COVID-19</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Prevent Area =================-->

    <!--================Answers Area =================-->
    <section class="answers_area p_100">
      <div class="container">
        <div class="main_title">
          <h5>Bạn có câu hỏi nào? Hãy tìm kiếm câu trả lời!</h5>
          <h2>Các câu hỏi thường gặp</h2>
        </div>
        <div class="row answer_inner">
          <div class="col-lg-4">
            <div class="question_list">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      Đại dịch
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Vi-rút Corona là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Nhiễm COVID-19 như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Sự khác biệt giữa COVID-19 và bệnh cúm là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab"
                            aria-controls="four" aria-selected="false">Virus lây lan như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five-tab" data-toggle="tab" href="#five" role="tab"
                            aria-controls="five" aria-selected="false">Các triệu chứng như thế nào?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Giới thiệu về COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab"
                            aria-controls="home2" aria-selected="true">Vi-rút Corona là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab"
                            aria-controls="profile2" aria-selected="false">Nhiễm COVID-19 như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab"
                            aria-controls="contact2" aria-selected="false">Sự khác biệt giữa COVID-19 và bệnh cúm là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four2-tab" data-toggle="tab" href="#four2" role="tab"
                            aria-controls="four2" aria-selected="false">Virus lây lan như thế nào?
</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five2-tab" data-toggle="tab" href="#five2" role="tab"
                            aria-controls="five2" aria-selected="false">Các triệu chứng như thế nào?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Bảo vệ chống lại COVID-19
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab3" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home3-tab" data-toggle="tab" href="#home3" role="tab"
                            aria-controls="home3" aria-selected="true">Vi-rút Corona là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile3-tab" data-toggle="tab" href="#profile3" role="tab"
                            aria-controls="profile3" aria-selected="false">Nhiễm COVID-19 như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact3-tab" data-toggle="tab" href="#contact3" role="tab"
                            aria-controls="contact3" aria-selected="false">Sự khác biệt giữa COVID-19 và bệnh cúm là gì?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four3-tab" data-toggle="tab" href="#four3" role="tab"
                            aria-controls="four3" aria-selected="false">Virus lây lan như thế nào?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five3-tab" data-toggle="tab" href="#five3" role="tab"
                            aria-controls="five3" aria-selected="false">Các triệu chứng như thế nào?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfour">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      Sắp xếp công việc và đi lại
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab4" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home4-tab" data-toggle="tab" href="#home4" role="tab"
                            aria-controls="home4" aria-selected="true">What are
                            coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile4-tab" data-toggle="tab" href="#profile4" role="tab"
                            aria-controls="profile4" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact4-tab" data-toggle="tab" href="#contact4" role="tab"
                            aria-controls="contact4" aria-selected="false">What is the difference between COVID-19
                            and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four4-tab" data-toggle="tab" href="#four4" role="tab"
                            aria-controls="four4" aria-selected="false">How is
                            the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five4-tab" data-toggle="tab" href="#five4" role="tab"
                            aria-controls="five4" aria-selected="false">What are
                            the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfive">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                      Về trường đại học và trường các cấp
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home5-tab" data-toggle="tab" href="#home5" role="tab"
                            aria-controls="home5" aria-selected="true">What are
                            coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile5-tab" data-toggle="tab" href="#profile5" role="tab"
                            aria-controls="profile5" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact5-tab" data-toggle="tab" href="#contact5" role="tab"
                            aria-controls="contact5" aria-selected="false">What is the difference between COVID-19
                            and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four5-tab" data-toggle="tab" href="#four5" role="tab"
                            aria-controls="four5" aria-selected="false">How is
                            the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five5-tab" data-toggle="tab" href="#five5" role="tab"
                            aria-controls="five5" aria-selected="false">What are
                            the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                     Cách li tại nhà
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab6" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home6-tab" data-toggle="tab" href="#home6" role="tab"
                            aria-controls="home6" aria-selected="true">What are
                            coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile6-tab" data-toggle="tab" href="#profile6" role="tab"
                            aria-controls="profile6" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact6-tab" data-toggle="tab" href="#contact6" role="tab"
                            aria-controls="contact6" aria-selected="false">What is the difference between COVID-19
                            and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four6-tab" data-toggle="tab" href="#four6" role="tab"
                            aria-controls="four6" aria-selected="false">How is
                            the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five6-tab" data-toggle="tab" href="#five6" role="tab"
                            aria-controls="five6" aria-selected="false">What are
                            the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingseven">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                      Dãn cách xã hội
                      <i class="linearicons-chevron-down"></i>
                    </button>
                  </div>
                  <div id="collapseseven" class="collapse" aria-labelledby="headingseven"
                    data-parent="#accordionExample">
                    <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab7" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" id="home7-tab" data-toggle="tab" href="#home7" role="tab"
                            aria-controls="home7" aria-selected="true">What are
                            coronaviruses?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile7-tab" data-toggle="tab" href="#profile7" role="tab"
                            aria-controls="profile7" aria-selected="false">What is the COVID-19 virus?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact7-tab" data-toggle="tab" href="#contact7" role="tab"
                            aria-controls="contact7" aria-selected="false">What is the difference between COVID-19
                            and
                            the
                            flu?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="four7-tab" data-toggle="tab" href="#four7" role="tab"
                            aria-controls="four7" aria-selected="false">How is
                            the virus spread?</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="five7-tab" data-toggle="tab" href="#five7" role="tab"
                            aria-controls="five7" aria-selected="false">What are
                            the symptoms?</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="tab-content answer_details" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h4>What are coronaviruses?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>What is the COVID-19 virus?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h4>What is the difference between COVID-19 and the flu?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
                <h4>How is the virus spread?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="five-tab">
                <h4>What are the symptoms?</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four2" role="tabpanel" aria-labelledby="four2-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five2" role="tabpanel" aria-labelledby="five2-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home3" role="tabpanel" aria-labelledby="home3-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact3-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four3" role="tabpanel" aria-labelledby="four3-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five3" role="tabpanel" aria-labelledby="five3-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home4" role="tabpanel" aria-labelledby="home4-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile4-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact4-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four4" role="tabpanel" aria-labelledby="four4-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five4" role="tabpanel" aria-labelledby="five4-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home5" role="tabpanel" aria-labelledby="home5-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile5-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact5-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four5" role="tabpanel" aria-labelledby="four5-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five5" role="tabpanel" aria-labelledby="five5-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home6" role="tabpanel" aria-labelledby="home6-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile6-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact6" role="tabpanel" aria-labelledby="contact6-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four6" role="tabpanel" aria-labelledby="four6-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five6" role="tabpanel" aria-labelledby="five6-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="home7" role="tabpanel" aria-labelledby="home7-tab">
                <h4>What are coronaviruses? 1</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="profile7" role="tabpanel" aria-labelledby="profile7-tab">
                <h4>What is the COVID-19 virus? 2</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="contact7" role="tabpanel" aria-labelledby="contact7-tab">
                <h4>
                  What is the difference between COVID-19 and the flu? 3
                </h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="four7" role="tabpanel" aria-labelledby="four7-tab">
                <h4>How is the virus spread? 4</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
              <div class="tab-pane fade" id="five7" role="tabpanel" aria-labelledby="five7-tab">
                <h4>What are the symptoms? 5</h4>
                <p>
                  The first symptoms of COVID-19 and influenza (flu)
                  infections are often very similar. They both cause fever and
                  similar respiratory symptoms, which can then range from mild
                  through to severe disease, and sometimes can be fatal.
                </p>
                <p>
                  Both viruses are also transmitted in the same way, by
                  coughing or sneezing, or by contact with hands, surfaces or
                  objects contaminated with the virus. As a result, the same
                  public health measures, such as hand hygiene (hand washing),
                  good respiratory etiquette (coughing into your elbow or into
                  a tissue and immediately disposing of the tissue) and good
                  household cleaning are important actions to prevent both
                  infections.
                </p>
                <p>
                  The speed of transmission is an important difference between
                  the two viruses. Influenza typically has a shorter
                  incubation period (the time from infection to appearance of
                  symptoms) than COVID-19. This means that influenza can
                  spread faster than COVID-19.
                </p>
                <p>
                  While the range of symptoms for the two viruses is similar,
                  the fraction with severe disease appears to be higher for
                  COVID-19. While most people have mild symptoms,
                  approximately 15% of people have severe infections and 5%
                  require intensive care in a hospital ICU. The proportions of
                  severe and critical COVID-19 infections are higher than for
                  influenza infections.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Answers Area =================-->

    <!--================Home Latest Blog Area =================-->
    <section class="home_latest_blog_area">
      <div class="container">
        <div class="main_title text-center">
          <h5>Các tin tức nổi bật</h5>
          <h2>Tin tức nổi bật gần đây</h2>
          <p>
            Tìm hiểu tin tức hàng ngày về COVID-19.


          </p>
        </div>
        <div class="row l_blog_inner">
        <?php
    //1.ket noi den MAY CHU DU LIEU & DEN CSDL
        $ket_noi= mysqli_connect("localhost","root","","btl_db");

    //2.Viet cau lenh truy van lay ra duoc DL mong muon(Tin tuc da luu trong csdl)
        //truy vấn tin tức mới nhất
         $sql1=" SELECT * FROM tbl_tin_tuc ORDER BY tin_tuc_id DESC ";

         //truy vấn tin tức nhiều người xem nhất
        $sql2=" SELECT *
              FROM tbl_tin_tuc
              WHERE so_lan_doc = (SELECT MAX(so_lan_doc) FROM tbl_tin_tuc ORDER BY tin_tuc_id DESC ) ";
        //truy vấn thông tin quan trọng
        $sql3=" SELECT *
              FROM tbl_tin_tuc
              WHERE ghi_chu = 'quan trọng' ORDER BY tin_tuc_id DESC  ";

    //3.Thuc thi cau lenh truy van(muc dich tra ve du lieu cac ban can)
        $noi_dung_tin_tuc1=mysqli_query($ket_noi, $sql1);

        $noi_dung_tin_tuc2=mysqli_query($ket_noi, $sql2);

        $noi_dung_tin_tuc3=mysqli_query($ket_noi, $sql3);


    //4.Hien thi ra du lieu ma cac ban vua lay duoc
        $row1=mysqli_fetch_array($noi_dung_tin_tuc1);
        $row2=mysqli_fetch_array($noi_dung_tin_tuc2);
        $row3=mysqli_fetch_array($noi_dung_tin_tuc3);


        ?>
          <div class="col-lg-8">
            <div class="big_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> <?php echo date("d/m/Y H:i",strtotime($row1["ngay_dang_tin"]));?> </a>
                  <a href="#"><i class="linearicons-bubbles"></i>  <?php echo $row1["so_lan_doc"];?> lượt đọc</a>
                </div>
                <div class="blog_btm_text">
                  <div class="tag"><?php echo $row1["the_loai"];?></div>
                  <div class="author">
                    <a href="#">by <?php echo $row1["tac_gia"];?></a>
                  </div>
                  <a href="#">
                    <h3><?php echo $row1["tieu_de"];?></h3>
                  </a>
                  <a class="text_btn" href="#">Đọc thêm <i class="linearicons-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="small_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog-2.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> <?php echo date("d/m/Y H:i",strtotime($row2["ngay_dang_tin"]));?></a>
                  <a href="#"><i class="linearicons-bubbles"></i> <?php echo $row2["so_lan_doc"];?> lượt đọc</a>
                </div>
                <a href="#">
                  <h3><?php echo $row2["tieu_de"];?></h3>
                </a>
                <a class="text_btn" href="#">Đọc thêm <i class="linearicons-arrow-right"></i></a>
              </div>
            </div>
            <div class="small_l_blog_item">
              <div class="l_blog_img">
                <img class="img-fluid" src="assets/images/blog/latest-blog/l-blog-3.jpg" alt="" />
              </div>
              <div class="l_blog_text">
                <div class="date">
                  <a href="#"><i class="linearicons-calendar-full"></i> <?php echo date("d/m/Y H:i",strtotime($row3["ngay_dang_tin"]));?></a>
                  <a href="#"><i class="linearicons-bubbles"></i> <?php echo $row3["so_lan_doc"];?> lượt đọc</a>
                </div>
                <a href="#">
                  <h3><?php echo $row3["tieu_de"];?></h3>
                </a>
                <a class="text_btn" href="#">Đọc thêm <i class="linearicons-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
      //5.Dong ket noi sau khi su dung
        mysqli_close($ket_noi);
       ;?>
    </section>
    <!--================End Home Latest Blog Area =================-->

    <!--================Client Logo Area =================-->
    <section class="client_logo_area">
      <div class="container">
        <div class="client_slider">
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--================End Client Logo Area =================-->

    <!--================App Area =================-->
    <section class="app_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app_text">
              <h2>Tải ứng dụng<span> epidemic</span></h2>
              <p>
                Tải xuống ứng dụng của chúng tôi ngay bây giờ, theo dõi các trường hợp Coronavirus trong thời gian thực và theo dõi các bản cập nhật tức thì.
              </p>
              <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="assets/images/apple-btn.png" alt="" /></a>
              <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="assets/images/google-btn.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app_mobile">
              <div class="mobile_image">
                <img src="assets/images/mobile-1.png" alt="" />
                <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/mobile-2.png" alt="" />
              </div>
              <ul class="corona_img nav">
                <li>
                  <img src="assets/images/icon/app-virus-1.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-2.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-3.png" alt="" />
                </li>
                <li data-parallax='{"y": -100}'>
                  <img src="assets/images/icon/app-virus-4.png" alt="" />
                </li>
                <li data-parallax='{"y": 100}'>
                  <img src="assets/images/icon/app-virus-5.png" alt="" />
                </li>
                <li>
                  <img src="assets/images/icon/app-virus-6.png" alt="" />
                </li>
                <li data-parallax='{"y": -200}'>
                  <img src="assets/images/icon/app-virus-7.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End App Area =================-->

    <!--================Subscribe Area =================-->
    <section class="subscribe_area apps_craft_animation">
      <ul class="nav">
        <li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/subs-1.png" alt=""></li>
        <li><img src="assets/images/icon/subs-2.png" alt=""></li>
        <li><img src="assets/images/icon/subs-3.png" alt=""></li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="media">
              <div class="d-flex">
                <i class="linearicons-mailbox-full"></i>
              </div>
              <div class="media-body">
                <h4>Đăng kí nhận tin tức</h4>
                <p>
                  Tham gia danh sách người nhận tin tức của chúng tôi để nhận thông tin diễn biến COVID-19 được gửi trong hộp thư</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mail_box">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="&#xe997; Nhập email của bạn"
                  aria-label="Recipient's username" aria-describedby="button-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                    <i class="linearicons-arrow-right"></i>
                  </button>
                </div>
              </div>
              <label class="container-checkbox">Tôi chấp nhận <span>Chính sách bảo mật</span>
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Subscribe Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">

      <div class="footer_widgets_area pad_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-telephone"></i>
                    </div>
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                      <a href="tel:+(84)368121201">
                        <h4> 036 812 1201</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-map-marker"></i>
                    </div>
                    <div class="media-body">
                      <p>
                        Phòng 102, Trụ sở <br>Trung tâm ý tế HANL, <br>12 Chùa Bộc, Đống Đa, Hà Nội
                      </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="fab fa-skype"></i>
                    </div>
                    <div class="media-body">
                      <a href="skype:md.rocky79">
                        <h6>Skype ID: <span>epidemic.org</span></h6>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="media-body">
                      <a href="mailto:rockybd1995@gmail.com">
                        <h6>Email: <span>hi@epidemic.org</span></h6>
                      </a>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Phòng chống</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Các triệu chứng thường gặp</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Cách phòng tránh</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Sự truyền nhiễm</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Nhận tư vấn từ bác sĩ</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Thông tin về COVID-19</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập:</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập:</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <aside class="f_widget about_widget">
                <div class="f_title">
                  <h3>COVID-19</h3>
                </div>
                <p>
                  Căn bệnh này lần đầu tiên được xác định vào năm 2019 tại Vũ Hán, thủ phủ của Hồ Bắc, Trung Quốc và kể từ đó đã lây lan ra toàn cầu, dẫn đến đại dịch coronavirus 2020–2021.
                </p>
                <ul class="nav">
                  <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                  </li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_copyright">
                        <img src="assets/images/f-logo.png" alt="">
                        <p>© Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Epidemic Organisation Ltd.</p>
                        <ul class="nav">
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Dấu ấn</a></li>
                        </ul>
                        <h6>
                            Designed with <i class="linearicons-heart"></i>
                            by <span>nhóm HANL</span>
                        </h6>
                    </div>
    </footer>
    <!--================End Footer Area =================-->
  </div>

  <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <img src="assets/images/icon/close-white.png" alt="">
    </button>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username"
              aria-describedby="button-addon3">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon3"><i
                  class="linearicons-magnifier"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/vendors/corona-live/dashboard.js"></script>
  <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/slick/slick.min.js"></script>
  <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
  <script src="assets/vendors/scroll-animation/parallax.js"></script>
  <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendors/animate-css/wow.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>