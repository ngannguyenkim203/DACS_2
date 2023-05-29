<?php
      include './lib/session.php';
      Session::init();
?>
<?php

      include_once  './lib/database.php';
      include_once  './helpers/format.php';

      spl_autoload_register(function($className){
        include_once "classes/".$className.".php";
      });

      
      $db = new Database();
      $fm = new Format();
      $ct = new cart();
      $us = new user();
      $cat = new category();
      $cus = new customer();
      $product = new product();
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./js/index.js">
    <link rel="stylesheet" href="./css/News.css">
    <link rel="stylesheet" href="/doan2/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Trang chủ</title>
    
</head>
<body>
  <!-- nav -->

  <!-- <div class="navbar navbar-expand-lg bg-white p-4 ">
    <div class="container-fluid ">

    </div>
  </div> -->
 
  <!-- <div class="navbar navbar-expand-lg bg-white p-4  " style="background-image: url(./image/RUBY.png);" > -->
    
    <!-- <div class="container ">
      <form class="d-flex " role="search"> -->
        <!-- <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success" type="submit">Tìm</button> -->
      <!-- </form>
    </div> -->
  
    <!-- <div class="icon1 "> -->

        
      <!-- <a href="./login.php"><i class="fa-solid fa-user text-dark " ></i></a> -->
      <!-- <button class="btn " data-bs-toggle="modal" href="#exampleModalToggle" role="button">Đăng nhập</button> -->
     
    <!-- </div> -->
    <!-- <div class="icon2"> -->

       <!-- <a href="./cart.php" style="text-decoration: none;">Giỏ hàng </a> -->
       <!-- <i  class="fa-solid fa-cart-shopping text-dark" ></i>  -->
       <!-- <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#myModal"><i  class="fa-solid fa-cart-shopping text-dark" ></i>
      </button> -->

        


  
        <!-- <span class="position-absolute top-0 start-30 translate-middle p-2 bg-danger border border-light rounded-circle">
          <span class="visually-hidden">New alerts</span>
        </span> -->
     
    <!-- </div> -->

  </div>

 <!-- Navbar -->

 <nav class="navbar navbar-expand-lg navbar-light bg-white " style="background-image: url(./image/RUBY.png);">
  <!-- Container wrapper -->
  <div class="container pt-5">
  

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="container ">
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm</button>
      </form>
    </div>
      </ul>
      <!-- Left links -->
   
      <div class="d-flex align-items-center">
       
        
        <?php
                    if (isset($_GET['customer_id'])) {
          
                      $delCart = $ct->del_all_data_cart();
            
                        Session::destroy();
                    }
                    ?>
                    <?php
                    $login_check = Session::get('customer_login');
                    if ($login_check == false) {
                        echo '<a href="login.php"><button type="submit" class="btn btn-secondary">Đăng nhập</button></a></div>';
                    } else {
                      echo '<a href="profile.php"><i class="fa-solid fa-user text-dark "></i></a></div>';
                        echo '<a href="?customer_id=' . Session::get('customer_id') . '" ><button type="submit" class="btn btn-secondary " style="   margin-left: 20px;">Đăng xuất</button></a></div>';
                    }
                    ?>
                    <div class="clear"></div>
        
        <ul class="navbar-nav">
      <!-- cart -->
      <li class="nav-item">
        <a class="nav-link" href="./cart.php" style="   margin-left: 20px;">
          <span class="badge badge-pill bg-danger"></span>
          <span><i class="fas fa-shopping-cart"></i></span>
        </a>
      </li>
    </ul>
        <!-- <a
          class="btn btn-dark px-3 "style="   margin-left: 20px;"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a> -->
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>


<!-- Navbar -->

 <div class="menu">
  <nav class="navbar navbar-expand-lg navbar-light bg-light " aria-label="Secondary navigation">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" height="30" style="margin-left: px;" ></a>
      <button class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item ">
            <a class="nav-link " 
              aria-current="page"  href="./index.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./introduce.php">Giới thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Service.php">Thực đơn</a>
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Dịch vụ
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <!-- <li><a class="dropdown-item" href="#">Tại nhà hàng</a></li> -->
              <li><a class="dropdown-item" href="./TableBooking.php">Đặt bàn</a></li>
              <li><a class="dropdown-item" href="./Party.php">Đặt tiệc </a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./News.php">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./contact.php" tabindex="-1" aria-disabled="true">Liên hệ</a>
          </li>

         
                    <?php
                    $customer_id = Session::get('customer_id');
                    $check_order = $ct->check_order($customer_id);
                    if ($check_order) {
                        echo '<li class="nav-item"><a class="nav-link" href="./orderdetails.php">Đơn hàng</a></li>';
                    } else {
                        echo '';
                    }
                    ?>
             
        </ul>
      </div>
    </div>
  </nav>
</div>
      <!-- slide -->
<?php
  include './inc/slider1.php';
  ?>
<!-- main -->

    <section class="page" style="margin-top: 50px;">
        <div class="container pt-5" >
            <div class="row shadow p-3 mb-5 bg-body rounded">
              <div class="col-8 "><h3>Tin tức</h3></div>
              <div class="col-4"><h4>Bài viết nổi bật</h4></div>
                <div class="col-4 ">
                  <div class="card" style="width: 19rem;">
                    <img src="../web/image/tintuc1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="https://vnexpress.net/bi-quyet-de-vang-tro-thanh-mon-qua-y-nghia-trong-dip-tet-4519381.html" style="text-decoration: none;">Bí quyết để vang trở thành món quà ý nghĩa trong dịp Tết</a>
                      </h5>
                      <p class="card-text" style="position: relative;">Sản phẩm có thương hiệu, được đóng gói đẹp đẽ sẽ giúp thể hiện thành ý cũng như sự tôn trọng của người tặng dành cho người nhận...</p>
                    </div>
                  </div>

                  <div class="card" style="width: 19rem; margin-top: 40px;">
                    <img src="../web/image/tintuc2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/la-mieng-voi-mon-mi-y-sot-kem-chuan-nhu-nha-hang-au-1137303" style="text-decoration: none;">Lạ miệng với món mì Ý sốt kem ngon như nhà hàng Âu</a>
                      </h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      <p class="card-text" style="position: relative;">
                      Lâu nay chúng ta đã quá quen thuộc với các món như mì Ý bò bằm hay sốt cà chua. Hôm nay hãy cùng nhau đổi món cho cả gia đình với món mì Ý sốt kem nhé...
                        <!-- <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a> -->
                      </p>
                      <!-- <p class="card-text bg-light" style="transform: rotate(0);">
                        This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
                      </p> -->
                    </div>
                  </div>
                  
                </div>
                <div class="col-4">
                  <div class="card" style="width: 19rem;">
                    <img src="../web/image/tintuc3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="https://vnexpress.net/an-hai-san-giup-phong-ngua-dot-quy-4541845.html" style="text-decoration: none;">Ăn hải sản giúp phòng ngừa đột quỵ</a>
                      </h5>
                      <p class="card-text" style="position: relative;">Hải sản chứa ít natri, nhiều kali, có iốt tự nhiên, giàu axit béo omega-3 giúp bảo vệ não và dây thần kinh, ngăn ngừa đột quỵ và bệnh tim...</p>
                    </div>
                  </div>
                  <div class="card" style="width: 19rem; margin-top: 40px;">
                    <img src="../web/image/tintuc4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="https://vnexpress.net/nhung-loai-hai-san-tot-cho-nguoi-benh-tieu-duong-4452010.html" style="text-decoration: none;">Những loại hải sản tốt cho người bệnh tiểu đường</a>
                      </h5>
                      <p class="card-text" style="position: relative;">Người tiểu đường có thể nên ăn cá hồi, cá rô phi, cá mòi… ít nhất hai lần mỗi tuần vì chúng cung cấp omega-3, chứa nhiều chất béo tốt...</p>
                    </div>
                  </div>
                </div>
                

                
                  <div class="col-4" >
                    <div class="d-flex position-relative" style="margin-left: -30px;" >
                      <img src="../web/image/tintuc5.jpg"  style="width: 100px; height: 100px; "  class="flex-shrink-0 me-3" alt="...">
                      <div>
                        <h5 class="mt-0">
                          <a href="https://vnexpress.net/bi-quyet-chon-va-che-bien-hai-san-4311497.html" style="text-decoration: none;">Bí quyết chọn và chế biến hải sản</a>
                        </h5>
                        <p>Bạn muốn chọn cua ghẹ ngon thì nên lật ngửa con cua, ghẹ dùng ngón tay ấn mạnh lên yếm, nếu yếm cứng không bị lún xuống là cua, ghẹ chắc...</p>
                        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->
                      </div>
                    </div>

                    <div class="d-flex position-relative" style="margin-left: -30px;">
                      <img src="../web/image/tintuc6.jpg"  style="width: 100px; height: 100px; "  class="flex-shrink-0 me-3" alt="...">
                      <div>
                        <h5 class="mt-0">
                          <a href="https://vnexpress.net/cach-pha-nuoc-cham-hai-san-cua-nguoi-chuyen-hoa-4353439.html" style="text-decoration: none;">Cách pha nước chấm hải sản của người 'chuyên Hóa'</a>
                        </h5>
                        <p>Khi bạn đam mê hóa học nhưng mẹ lại bắt đi pha nước chấm, đúng là không chê được điểm gì', một người hài hước...</p>
                        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->
                      </div>
                    </div>
                    
                    <div class="d-flex position-relative" style="margin-left: -30px;">
                      <img src="../web/image/tintuc7.jpg"  style="width: 100px; height: 100px; "  class="flex-shrink-0 me-3" alt="...">
                      <div>
                        <h5 class="mt-0">
                          <a href="https://vnexpress.net/chong-mung-hut-vi-vo-nau-hai-san-4355196.html" style="text-decoration: none;">Chồng mừng hụt vì vợ nấu hải sản</a>
                        </h5>
                        <p>Khi không đi mua được hải sản thì có thể dùng cách này thay thế nhưng món chỉ có trẻ con mới thích thôi', một người hài hước...</p>
                        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->
                      </div>
                    </div>
                    <div class="d-flex position-relative" style="margin-left: -30px;">
                      <img src="../web/image/tintuc8.jpg"  style="width: 100px; height: 100px; "  class="flex-shrink-0 me-3" alt="...">
                      <div>
                        <h5 class="mt-0">
                          <a href="https://vnexpress.net/ruou-vang-do-co-the-lam-thuyen-giam-benh-ve-duong-ho-hap-4508630.html" style="text-decoration: none;">Rượu vang đỏ có thể làm thuyên giảm bệnh về đường hô hấp</a>
                        </h5>
                        <p>Nhâm nhi một ít rượu vang có thể hỗ trợ giảm chất nhầy ở hệ hô hấp do cảm lạnh hoặc căn bệnh hô hấp khác...</p>
                        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->
                      </div>
                    </div>
                    <div class="d-flex position-relative" style="margin-left: -30px;">
                      <img src="../web/image/tintuc9.jpg"  style="width: 100px; height: 100px; "  class="flex-shrink-0 me-3" alt="...">
                      <div>
                        <h5 class="mt-0">
                          <a href="https://vnexpress.net/co-the-nhu-the-nao-khi-uong-can-mot-chai-ruou-vang-4474865.html" style="text-decoration: none;">Cơ thể như thế nào khi uống cạn một chai rượu vang</a>
                        </h5>
                        <p>Tăng cân, khó ngủ, nói ngọng và giảm thính giác là một trong các triệu chứng thường thấy ở những người “vui quá chén"...</p>
                        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>

            <div class="row"></div>
          
        </div>
    </section>
<!-- footer -->

<?php
   include './inc/footer.php';
   
?>
     