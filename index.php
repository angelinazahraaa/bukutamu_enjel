<?php
 require_once("database.php");
 $tampil = kuery("Select * from pengunjung");
 // // var_dump($tampil);
 //   $no =1;
 // foreach($tampil as $data): 
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>nguel</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            qilaa
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href=""></a>
                <a href="l"></a>
                <a href=""></a>
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/luvv.jpeg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
          <h1>
            BIRTHDAY QILAA
          </h1>
          <p>
            Birthday qila yang ke 4 tahun jangan lupa datang temen temen
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- shop section -->


  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/pnk.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                BIRTHDAY QILA AURELIA
              </h2>
            </div>
            <p>
              Hallo Temen-temen jangan lupa dateng di hari ulangtahunku yang ke 4 tahun pada tanggal 3 APRIL 
              Dimulai Pukul 10.00-15.00 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- offer section -->

  <section class="offer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="box offer-box1">
            <img src="images/ucu.jpeg" alt="">
            <div class="detail-box">
              <h2>
                QILAAAAA
              </h2>
              <a href="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5 px-0">
          <div class="box offer-box2">
            <img src="images/iya.jpeg" alt="">
            <div class="detail-box">
              <h2>
                AURELIAAAA
              </h2>
              <a href="">
              </a>
            </div>
          </div>
          <div class="box offer-box3">
            <img src="images/BIRUUU.jpeg" alt="">
            <div class="detail-box">
              <h2>
              
              </h2>
              <a href="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- blog section -->

  <section class="blog_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          ABOUT QILAA
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/ucu.jpeg" alt="">
              <h4 class="blog_date">
                3  <br>
                APRIL
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Qila Aurelia
              </h5>
              <p>
     Qila Aurelia sejak umur 1 taun 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/WhatsApp Image 2024-05-27 at 13.03.03.jpeg" alt="">
              <h4 class="blog_date">
                3  <br>
                APRIL
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Qila Aurelia 
              </h5>
              <p>
        Qila Aurelia sejak umur 3 tahun
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding">
  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Komentar</h1>
                 </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                   
      foreach($tampil as $data):
                ?>
                <div class="testimonial-item bg-light rounded p-5">
                    <p class="fs-5"><?php echo $data['komentar']; ?></p>
                    <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                        <div class="ps-3">
                            <h3 class="mb-1"><?php echo $data['nama']; ?></h3>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                    </div>
                </div>
                <?php 
    endforeach; 
    ?>
            </div>
        </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row info_form_social_row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
          <form action="input.php"  method="POST">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                            <label for="gname">username</label>
                                                <input type="text" name="nama" class="form-control border-0" id="gname" placeholder="nama" style="color: black;" >
                                               
                                            </div>
                                        </div> <br>
                                        <div class="col-12">
                                            <div class="form-floating">
                                            <label for="message">Message</label>
                                                <textarea name="komentar" class="form-control border-0" placeholder="komentar" id="message" style="height: 100px"></textarea>
                                            </div>
                                        </div> <br>
                                        <div class="col-12"> <br>
                                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">

          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row info_main_row">
        <div class="col-md-6 col-lg-3">
          <div class="info_links">
            <h4>
              Menu
            </h4>
            <div class="info_links_menu">
              <a href="index.html">Home</a>
              <a href="about.html">About</a>
              <a href="shop.html">Shop</a>
              <a href="blog.html">Blog</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p class="mb-0">
             BIRTHDAY QILA AURELIA DILAKSANAKAN DI CILEUNYI Rt05/Rw04 
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h4>
            Contact Us
          </h4>
          <div class="info_contact">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call +88802098170
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
                angelinazahra@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>