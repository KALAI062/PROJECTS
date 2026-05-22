<?php
include 'db.php'; 
$result = $conn->query("SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Furnitures</title>
<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
<link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
  <div class="hero_area">
  <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="l"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Shop </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> Furniture </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="">
                <img src="images/user.png" alt="">
                <span>
                  Login
                </span>
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
<section class="slider_section ">
      <div class="play_btn">
        <a href="">
          <img src="images/play.png" alt="">
        </a>
      </div>
      <div class="number_box">
        <div>
          <ol class="carousel-indicators indicator-2">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                    The chair is a key figure in the organization, and their role is to
                     ensure the board is effective and that the organization is run smoothly
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                    The chair is a key figure in the organization, and their role is to 
                    ensure the board is effective and that the organization is run smoothly
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                    The chair is a key figure in the organization, and their role is to
                     ensure the board is effective and that the organization is run smoothly
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                    The chair is a key figure in the organization, and their role is to
                     ensure the board is effective and that the organization is run smoothly
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 </div>
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            The chair is a key figure in the organization, and their role is to 
            ensure the board is effective and that the organization is run smoothly
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
 <section class="trending_section layout_padding">
    <div id="accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Trending Categories
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  <div class="number">
                    <h5>
                      01
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Chairs
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  <div class="number">
                    <h5>
                      02
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Tables
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  <div class="number">
                    <h5>
                      03
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Bads
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  <div class="number">
                    <h5>
                      04
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Furnitures
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="images/t-1.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-2.jpg" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="images/t-3.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-4.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="images/t-3.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-4.jpg" alt="">
                  </div>
                </div>
                <div class="box b-2">
                 <div class="img-box">
                <img src="images/t-1.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="images/t-4.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-1.jpg" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="images/t-3.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="images/t-1.jpg" alt="">
                  </div>

                  <div class="img-box">
                    <img src="images/t-4.jpg" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="images/t-3.jpg" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/t-2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
<section class="discount_section  layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              The Latest Collection
            </h2>
            <h2 class="main_heading">
              50% DISCOUNT
            </h2>
           <div class="">
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/discount-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="brand_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Featured Brands
        </h2>
      </div>
     <div class="container mt-5">
    <h2 class="text-center mb-4">Our Products</h2>
<div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <h6 class="text-primary">₹<?php echo $row['price']; ?></h6>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</section>
<section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2 class="">
          Contact Us
        </h2>
      </div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Review
        </h2>
      </div>
    </div>
<div class="container">
      <div class="client_container layout_padding2">
        <div class="client_box b-1">
          <div class="client-id">
            <div class="img-box">
              <img src="images/client-1.png" alt="" />
            </div>
            <div class="name">
              <h5>
                Ram
              </h5>
              <p>
                Manager
              </p>
            </div>
          </div>
          <div class="detail">
            <p>
              a company leader who oversees the board of directors and 
              ensures that the board is effective and strategic
            </p>
            <div>
              <div class="arrow_img">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="client_container layout_padding2">
            <div class="client_box b-1">
              <div class="client-id">
                <div class="img-box">
                  <img src="images/client-2.png" alt="" />
                </div>
                <div class="name">
                  <h5>
                    Ram
                  </h5>
                  <p>
                    Manager
                  </p>
                </div>
              </div>
              <div class="detail">
                <p>
                  a company leader who oversees the board of directors and 
                  ensures that the board is effective and strategic
                </p>
                <div>
                  <div class="arrow_img">
                  </div>
                </div>
              </div>
            </div>
             </section>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Furniture
        </h2>
      </div>
      <div class="row">
 <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +91 1200458904
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                fur@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              The Chair on India and Emerging Asia Economics at CSIS and the history of chairs. 
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        420: {
          items: 2
        },
        1000: {
          items: 5
        }
      }
});
  </script>
  <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function (e) {

      e.preventDefault();
      nav.toggleClass("lg_nav-toggle");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
  </script>
  <script>
    $('.carousel').on('slid.bs.carousel', function () {
      $(".indicator-2 li").removeClass("active");
      indicators = $(".carousel-indicators li.active").data("slide-to");
      a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
      console.log(indicators);

    })
  </script>
</body>
</body>
</html>