<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <title>COVID - 19</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />

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
              <li><a href="symptom.html">Các triệu chứng thường gặp</a></li>
              <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
              <li><a href="prevention.html">Biện pháp phòng chống</a></li>
              <li><a href="tracker.html">Theo dõi tình hình</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Tư vấn</a></li>
          <li>
            <a href="#">Giới thiệu
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
              <li><a href="single-blog.html">Blog Details</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Liên hệ</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Kiểm tra triệu chứng</a>
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
                    <h2>Liên hệ</h2>
                    <p>Nếu bạn có bất kỳ câu hỏi nào trước khi chúng tôi bắt đầu, vui lòng điền vào bên dưới biểu mẫu liên hệ.</p>
                </div>
                <form action="#" class="appoinment_form js-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_name" name="a_name" placeholder="" />
                                <label><i class="linearicons-user"></i>Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="a_email" placeholder="" />
                                <label><i class="linearicons-envelope-open"></i>Email
                                    </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="a_number" placeholder="" />
                                <label><i class="linearicons-telephone"></i>Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control">
                                </textarea>
                                <label><i class="linearicons-document"></i>Tin nhắn của bạn</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="a_policy" name="check" />
                                    <label class="l_text" for="a_policy">Tôi đồng ý <span>Chính sách bảo mật</span></label>
                                </div>
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">
                                    Gửi
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="success-message">
                        <i class="fa fa-check text-primary"></i> Cảm ơn bạn! Tin nhắn của bạn đã được gửi thành công
                    </div>
                    <div class="error-message">Chúng tôi xin lỗi, bạn đã nhập sai cú pháp</div>
                </form>
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html"
                                        role="button" aria-haspopup="true" aria-expanded="false">Phòng chống </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Các triệu chứng
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="symptom.html">Các triệu chứng thường gặp</a></li>
                                                <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
                                                <li><a href="prevention.html">Biện pháp phòng chống</a></li>
                                                <li><a href="virus-checker.html">Theo dõi tình hình</a></li>
                                               
                                            </ul>
                                        </li>
                                         <li><a href="faq.html">FAQS</a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.html">Tư vấn</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">về chúng tôi</a></li>
                                        <li><a href="doctors.html">Bác sĩ</a></li>
                                        <li><a href="sample-right-sidebar.html">Tin tức</a></li>
                                        
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="search.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Tìm kiếm
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="search.html">Tiềm kiếm</a></li>
                                                <li><a href="search-nothing.html">Not Found</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="comingsoon.html">Coming Soon</a></li>
                                        <li><a href="404.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button"
                                        aria-haspopup="true" aria-expanded="false">Blog
                                    </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="contact.html">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="#"><i class="linearicons-pulse"></i>Kiếm tra triệu chứng</a>
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

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="container">
                <div class="breadcrumb_text">
                    
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">Liên hệ</h3>
                    <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <div class="row contact_details">
                    <div class="col-lg-3 col-6">
                        <div class="contact_details_item wow fadeInLeft" data-wow-delay="0.2s">
                            <i class="linearicons-map-marker"></i>
                            <h4>Địa chỉ</h4>
                            <p>Phòng 102, Trụ sở <br>Trung tâm ý tế HANL, <br>12 Chùa Bộc, Đống Đa, Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.3s">
                            <i class="linearicons-home4"></i>
                            <h4>Văn phòng của chúng tôi</h4>
                            <p>Phòng 102, Trụ sở <br>Trung tâm ý tế HANL, <br>12 Chùa Bộc, Đống Đa, Hà Nội</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.4s">
                            <i class="linearicons-telephone"></i>
                            <h4>Điện thoại</h4>
                            <a href="tel:+(84)368121201">
                                <h6>Văn phòng: 036 812 1201</h6>
                            </a>
                            <a href="tel:+(84) 0676790690">
                                <h6>Dịch vụ:    028 734 857</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="contact_details_item  wow fadeInLeft" data-wow-delay="0.5s">
                            <i class="linearicons-envelope-open"></i>
                            <h4>E-mail</h4>
                            <a href="mailto:rockybd1995@gmail.com">
                                <h6>support@epidemic.org</h6>
                            </a>
                            <a href="mailto:rockybd1995@gmail.com">
                                <h6>hi@epidemic.org</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    <form class="row contact_us_form appoinment_form js-form">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                                <label class="top_text"><i class="linearicons-user"></i>Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" id="email" name="email" placeholder=""
                                    required />
                                <label class="top_text"><i class="linearicons-envelope-open"></i>E-mail</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" type="text" id="number" name="number" placeholder=""
                                    required />
                                <label class="top_text"><i class="linearicons-telephone"></i>Điện thoại</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                    required></textarea>
                                <label class="top_text"><i class="linearicons-pencil4"></i>Nội dung liên hệ</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="policy" name="check" />
                                    <label class="l_text" for="policy">Tôi đồng ý <span>Chính sách bảo mật</span> và
                                        <span> Điều khoản Sử dụng.</span></label>
                                </div>
                                <button type="submit" value="submit" class="green_btn">
                                    Gửi 
                                </button>
                            </div>
                        </div>
                        <div class="success-message">
                            <i class="fa fa-check text-primary"></i> Cảm ơn bạn! Tin nhắn của bạn đã được gửi thành công
                        </div>
                        <div class="error-message">Xin lỗi! Bạn nhập sai cú pháp</div>
                    </form>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->

        <!--================Map Area =================-->
        <section class="map_area">
            <div id="mapBox" class="mapBox row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12"
                data-marker="assets/images/map-marker.png" data-info="Ngõ 12, Chùa bộc, Đống Đa, Hà Nội "
                data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </section>
        <!--================End Map Area =================-->

        <!--================Subscribe Area =================-->
        <section class="subscribe_area">
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
                                <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="linearicons-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            <label class="container-checkbox">Tôi chấp nhận<span>Chính sách bảo mật.</span>
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
                                            <a href="tel:+8801676790690">
                                                <h4>028 8234 3555</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>
                                                78-66 State Route 33,<br />
                                                Brighton VIC 3186, AUSTRALIA
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
                                    <h3>Prevention</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <aside class="f_widget list_widget">
                                <div class="f_title">
                                    <h3>Protection</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <aside class="f_widget about_widget">
                                <div class="f_title">
                                    <h3>About</h3>
                                </div>
                                <p>
                                    The disease was first identified in 2019 in Wuhan, the
                                    capital of Hubei, China, and has since spread globally,
                                    resulting in the 2019–2020 coronavirus pandemic.
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
                        <input type="text" class="form-control" placeholder="Type here..."
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="linearicons-magnifier"></i>
                            </button>
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
    <script src="assets/vendors/animate-css/wow.min.js"></script>
    <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEQhXdvO2Yz16kSBaeBzLt7wWRkECXmlg"></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script src="assets/js/map-active.js"></script>
    <!-- contact js -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>