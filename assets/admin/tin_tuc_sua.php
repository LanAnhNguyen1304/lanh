<?php 
    // Mục đích kiểm tra xem bạn có quyền truy cập trang này không thông qua BIẾN $_SESSION['da_dang_nhap']
    session_start();
    if (!$_SESSION["da_dang_nhap"]) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa tin tức</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/e40576cb0c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
          tinymce.init({
            selector: '#txtMoTa'
          });
        </script>
        <script>
          tinymce.init({
            selector: '#txtNoiDung'
          });
        </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Trung tâm y tế HANL</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Nội dung tìm kiếm..." aria-label="Nội dung tìm kiếm..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Tùy chỉnh</a></li>
                        <li><a class="dropdown-item" href="#!">Nhật ký</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Thoát</a></li>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Danh mục</div>
                            <a class="nav-link" href="quan_tri_nguoi_dung.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị người dùng
                            <a class="nav-link" href="quan_tri_tin_tuc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị tin tức
                            </a>
                            <a class="nav-link" href="quan_tri_kiem_tra.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị người nhận tin
                            </a>
                            <a class="nav-link" href="quan_tri_lien_he.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị liên hệ
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị tin tức</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Hệ thống</a></li>
                            <li class="breadcrumb-item active">Tin tức</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách tin tức |<a href="tin_tuc_them_moi.php"> Thêm mới</a>
                            </div>
                            <div class="card-body">
                            <?php
                            //viết ra các câu lệnh để load dữ liệu và hiển thị lên webpage giúp cho người quản trị hiệu chỉnh nội dung mà họ mong muốn
                            //1. 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muốn LẤY, THÊM MỚI, SỬA, XÓA dữ liệu
                            $ket_noi = mysqli_connect("localhost","root","","btl_db");
                            // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
                            $tin_tuc_id=$_GET["id"];

                            $sql="SELECT * 
                                    FROM tbl_tin_tuc 
                                    WHERE tin_tuc_id= ".$tin_tuc_id."
                                    ORDER BY  tin_tuc_id DESC";
                            // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                            $noi_dung_tin_tuc=mysqli_query($ket_noi,$sql);
                            //4.
                            $row = mysqli_fetch_array($noi_dung_tin_tuc);
                                       
                            ;?>
                                <form method="POST" action="tin_tuc_sua_thuc_hien.php" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTieuDe" name="txtTieuDe" placeholder="Tiêu đề bài viết" value="<?php echo $row['tieu_de'];?>" />
                                            <label for="txtTieuDe">Tiêu đề bài viết</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="txtAnhMinhHoa" name="txtAnhMinhHoa" placeholder="Chọn ảnh minh họa" value="<?php echo $row['anh_minh_hoa'];?>" />
                                                <label for="txtAnhMinhHoa">Ảnh minh họa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTheLoai" name="txtTheLoai" placeholder="Thể loại bài viết" value="<?php echo $row['the_loai'];?>" />
                                            <label for="txtTheLoai">Thể loại bài viết</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="txtMoTa" name="txtMoTa" placeholder="Mô tả bài viết" <?php echo $row['mo_ta'];?>></textarea>
                                            <label for="txtMoTa">Mô tả bài viết</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtNoiDung" name="txtNoiDung" placeholder="Nội dung bài viết" value="<?php echo $row['noi_dung'];?>" />
                                            <label for="txtNoiDung">Nội dung bài viết</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTacGia" name="txtTacGia" placeholder="Tác giả bài viết" value="<?php echo $row['tac_gia'];?>"/>
                                            <label for="txtTacGia">Tác giả bài viết</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                            <input class="form-control" id="txtAnh" name="txtAnh" placeholder="Chọn ảnh minh họa" />
                                                <label for="txtAnh">Ảnh minh họa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtNgayDangTin" name="txtNgayDangTin" placeholder="Chọn ngày đăng tin" value="<?php echo $row['ngay_dang_tin'];?>" />
                                            <label for="txtNgayDangTin">Ngày đăng tin</label>
                                    </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtSoLanDoc" name="txtSoLanDoc" placeholder="Số lần đọc" value="<?php echo $row['so_lan_doc'];?>"/>
                                                <label for="txtSoLanDoc">Số lần đọc</label>
                                        </div>
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtGhiChu" name="txtGhiChu" placeholder="Ghi chú" />
                                            <label for="txtGhiChu">Ghi chú</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                    <input type="hidden" name="txtID" value="<?php echo $row['tin_tuc_id'];?>">
                                        <div class="d-grid"><button type="submit" >Cập nhật</button></a></div>
                                        </div>
                                        </form>    
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
