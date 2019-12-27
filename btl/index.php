<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Công nghệ Web</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">
                    <img src="images/logo.png" width="450px" alt="">
                </a>
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Đăng nhập</button>
                <button type="submit
                " class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">(+) Đăng ký</button>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="Search" placeholder="Tìm kiếm..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 30px 0 0 0; ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li><a href="#" class="home"><i class="fas fa-home"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                TIN TỨC & THÔNG BÁO
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tin tức</a>
                            <a class="dropdown-item" href="#">Thông báo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">TUYỂN SINH</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Đại học, cao đẳng</a>
                                <a class="dropdown-item" href="#">Thạc sĩ, tiến sĩ</a>
                                <a class="dropdown-item" href="#">Văn bằng 2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">SINH VIÊN</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tradiem">Xem điểm cá nhân</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Đăng ký học</a>
                                <a class="dropdown-item" href="#">Thông tin sinh viên</a>
                            </div>
                        </li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">GIẢNG VIÊN</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Lịch giảng dạy</a>
                                <a class="dropdown-item" href="#">Thông tin giảng viên</a>
                            </div>
                        </li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                KHOA HỌC CÔNG NGHỆ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tin tức</a>
                            <a class="dropdown-item" href="#">Thông báo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                ĐÀO TẠO
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tin tức</a>
                                <a class="dropdown-item" href="#">Thông báo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                GIỚI THIỆU
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tin tức</a>
                                <a class="dropdown-item" href="#">Thông báo</a>
                            </div>
                        </li>     
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                ĐỐI NGOẠI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Tin tức</a>
                                <a class="dropdown-item" href="#">Thông báo</a>
                            </div>
                        </li>         
                    </ul>
                </div>
            </nav>   
        </div>


        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/nhanco.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/chuoi.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/anh3.png" class="d-block w-100 " height="333px" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <div class="container">
            <h4 class="mb-4">Khoa học công nghệ</h4>
            <div class=" card-deck">
                <div class="col md-4">
                  <img class="card-img-top" src="images/khcn1.png" alt="">
                  <div class="card-body">
                    <p class="card-text">
                        <a href="#">Doanh nghiệp với khoa học công nghệ...</a>
                    </p>
                  </div>
            </div>
            <div class="col md-4">
                <img class="card-img-top" src="images/khcn2.png" alt="">
                <div class="card-body">
                <p class="card-text">
                  <a href="#">Hội nghị khoa học công nghệ cơ khí động lực...</a>
                </p>
                </div>
            </div>
            <div class="col md-4">
                <img class="card-img-top" src="images/khcn3.png" alt="">
                <div class="card-body">
                  <p class="card-text">
                      <a href="#">Hội khoa học thủy lợi tiếp tục đẩy mạnh khoa học kỹ thuật...</a>
                  </p>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="new-relas">
                    <li><a href="#">Hợp tác phát triển phòng thí nghiệm công nghiệp</a></li>
                    <li><a href="#">Đẩy mạnh hợp tác với doanh nghiệp nhật bản</a></li>
                    <li><a href="#">Thông báo học bổng ITEC Ấn Độ năm 2019-2020</a></li>
                    <li><a href="#">Tăng cơ hội gắn kết học sinh THPT với trường đại...</a></li>
                </ul>
            </div>
        
        </div>
                <h4 class="mb-4">Hợp tác quốc tế</h4>
                <div class="card-deck">
                    <div class="col md-4">
                      <img class="card-img-top" src="images/doingoai1.png" alt="">
                      <div class="card-body">
                        <p class="card-text">
                            <a href="#">Trường Đại học Thủy lợi có thêm đối tác chiến lược trong đào ...</a>
                        </p>
                      </div>
                    </div>
                <div class="col md-4">
                    <img class="card-img-top" src="images/doingoai2.png" alt="">
                    <div class="card-body">
                    <p class="card-text">
                      <a href="#">Lễ ký biên bản hợp tác giữa Trường Đại học thủy lợi- FECON ...</a>
                    </p>
                    </div>
                </div>
                <div class="col md-4">
                    <img class="card-img-top" src="images/doingoai3.png" alt="">
                    <div class="card-body">
                      <p class="card-text">
                          <a href="#">Đại học Thủy lợi tăng cường hợp tác quốc tế...</a>
                      </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="new-relas">
                        <li><a href="#">Hợp tác phát triển phòng thí nghiệm công nghiệp</a></li>
                        <li><a href="#">Đẩy mạnh hợp tác với doanh nghiệp nhật bản</a></li>
                        <li><a href="#">Thông báo học bổng ITEC Ấn Độ năm 2019-2020</a></li>
                        <li><a href="#">Tăng cơ hội gắn kết học sinh THPT với trường đại...</a></li>
                    </ul>
                </div>    
    </main>            

    
    <footer class = "page-footer">
        <div class="wrapper">
                <div class="footer-col">
                    <h3>TRƯỜNG ĐẠI HỌC THỦY LỢI</h3>
                    <ul>
                        <li>ĐỊA CHỈ: 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI</li>
                        <li>Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351</li>
                        <li>Email: phonghcth@tlu.edu.vn</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ 2</h3>
                    <ul>
                        <li>Địa chỉ : Số 2 - Đường Trường Sa - P.17 - Q.Bình Thạnh - Tp.Hồ Chí Minh</li>
                        <li>Điện thoại: (84)028.38 400 532 - Fax: (84)028.38 400542</li>
                        <li>Email: cs2@tlu.edu.vn</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>TRƯỜNG ĐẠI HỌC THỦY LỢI - CƠ SỞ HY</h3>
                    <ul>
                        <li>ĐỊA CHỈ: KHU ĐẠI HỌC PHỐ HIẾN, HƯNG YÊN</li>
                        <li>Điện thoại: 0386132297</li>
                        <li>Email: dungvm720@wru.vn</li>
                    </ul>
                </div>
                            
                <div class="footer-col social"> 
                    <ul>
                        <li><a href="https://www.facebook.com/vumanhdung.dhtl" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com" class="tw"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.gmail.com" class="gp"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                    <p class="copy">© 2019 - TRƯỜNG ĐẠI HỌC THỦY LỢI</p>
                </div>
            </div>
        
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="taikhoan">Tài khoản</label>
                      <input type="text" class="form-control" id="taikhoan" aria-describedby="emailHelp" placeholder="Account name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mật khẩu</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</div>
    

<div class="modal fade" id="tradiem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tra cứu điểm học phần</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="MSV">Mã sinh viên</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MSV">
                    </div>
                    <div class="form-group">
                      <label for="CMT">Chứng minh thư</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CMT">
                    </div>
                    <button type="submit" class="btn btn-primary">Tra cứu</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/boostrap.min.js"></script>
    
</body>
</html>