<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pristhan-Home</title>
  <!-- boot strap links  -->
  <?php require('inc/links.php') ?>
  <!-- swipper js for carousel  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <style>
    * {

      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    /* few availability form style  */
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .availability-form {
        margin-top: 25px;
        padding: 35px;
      }
    }
  </style>
</head>

<body class="bg-light">
  <!-- navbar file  -->
  <?php require 'inc/header.php'; ?>
  <!-- carousel  -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper carosuelContainer">
      <div class="swiper-wrapper">
        <?php
        $path = CAROUSEL_IMG_PATH;
        $res = selectall('carousel');
        while($row = mysqli_fetch_assoc($res)){
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
              <div class="swiper-slide">
              <img src="$path$row[picture]" width="100%" height="80%" class="d-block" />
              </div>
            data;
        }
        ?>
      </div>
    </div>
  </div>

  <!-- check form availibility  -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 shadow bg-white rounded p-4">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label">Check In</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label">Check Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label">Adult</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label">Children</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-3 mt-2">
              <button type="sumbit" class="btn text-white shadow-none custom-bg">Sumbit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <h2 class="h-font mt-5 pt-4 mb-4 text-center fw-bold">OUR ROOMS</h2>
  <!-- Room cards  -->
  <div class="container">
    <div class="row">
      <!-- first card  -->
      <div class="col-lg-4 col-md-6 my-3">
        <!-- card dimension few styling -->
        <div class="card border-0 shadow" style="width: 350px; margin:auto;">
          <!-- card image  -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <!-- cardbody -->
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <!-- Features code  -->
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                1 BathRooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                3 sofa Rooms
              </span>
            </div>
            <!-- Facilities code  -->
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                A/C
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Television
            </div>
            <!-- guests-->
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                5 Adult
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                4 Children
              </span>
            </div>
            <!-- Rating  -->
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <spanc class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <!-- Buttons  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Second card  -->
      <div class="col-lg-4 col-md-6 my-3">
        <!-- card dimension few styling -->
        <div class="card border-0 shadow" style="width: 350px; margin:auto;">
          <!-- card image  -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <!-- cardbody -->
          <div class="card-body">
            <h5>Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <!-- Features code  -->
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                1 BathRooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                3 sofa Rooms
              </span>
            </div>
            <!-- Facilities code  -->
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                A/C
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Television
            </div>
            <!-- guests allowed code  -->
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                5 Adult
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                4 Children
              </span>
            </div>
            <!-- Rating  -->
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <spanc class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <!-- Buttons  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Third Card  -->
      <div class="col-lg-4 col-md-6 my-3">
        <!-- card dimension few styling -->
        <div class="card border-0 shadow" style="width: 350px; margin:auto;">
          <!-- card image  -->
          <img class="card-img-top" src="..." alt="Card image cap">
          <!-- cardbody -->
          <div class="card-body">
            <h5>Room Name</h5>
            <h6 class="mb-4">₹200 per night</h6>
            <!-- Features code  -->
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                2 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                1 BathRooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                3 sofa Rooms
              </span>
            </div>
            <!-- Facilities code  -->
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                A/C
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                Television
            </div>
            <!-- guests allowed code  -->
            <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                5 Adult
              </span>
              <span class="badge rounded-pill bg-light text-dark  lh-base text-wrap">
                4 Children
              </span>
            </div>
            <!-- Rating  -->
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <spanc class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
            <!-- Buttons  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

  <!-- our facilities  -->
  <h2 class="h-font mt-5 pt-4 mb-4 text-center fw-bold">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-3">
      <div class="col-lg-2 col-md-2 bg-white shadow text-center my-3 py-4 rounded">
        <img src="images/facilities/wifi.svg" alt="404 error" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white shadow text-center my-3 py-4 rounded">
        <img src="images/facilities/wifi.svg" alt="404 error" width="80px">
        <h5 class="mt-3">A/C</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white shadow text-center my-3 py-4 rounded">
        <img src="images/facilities/wifi.svg" alt="404 error" width="80px">
        <h5 class="mt-3">Dinner</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white shadow text-center my-3 py-4 rounded">
        <img src="images/facilities/wifi.svg" alt="404 error" width="80px">
        <h5 class="mt-3">Breakfast free</h5>
      </div>
      <div class="col-lg-2 col-md-2 bg-white shadow text-center my-3 py-4 rounded">
        <img src="images/facilities/wifi.svg" alt="404 error" width="80px">
        <h5 class="mt-3">Swimming pool</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
      </div>
    </div>
  </div>

  <!-- testimonials -->
  <h2 class="h-font mt-5 pt-4 mb-4 text-center fw-bold">TESTIMONIALS</h2>
  <div class="container">
    <div class="swiper swiperTestinomials">
      <div class="swiper-wrapper mb-4">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor earum quos asperiores vitae porro
            consectetur perferendis dolore repellendus laudantium quam!</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor earum quos asperiores vitae porro
            consectetur perferendis dolore repellendus laudantium quam!</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/facilities/wifi.svg" width="30px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor earum quos asperiores vitae porro
            consectetur perferendis dolore repellendus laudantium quam!</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
  </div>

  <!-- Reach us -->

 <?php
  $q = "SELECT * FROM contact_details WHERE sr_no = ?";
  $values = [1];
  $res = select($q, $values, 'i');
  $contact_r = mysqli_fetch_assoc($res);
  // print_r($contact_r);
 ?>

  <h2 class="h-font mt-5 pt-4 mb-4 text-center fw-bold">Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <?php echo<<<data
          <iframe class="w-100" src="$contact_r[iframe]" height="320px" loading="lazy"></iframe>
          data;
      ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <?php echo<<<data
            <a href="+$contact_r[pn1]" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +$contact_r[pn1]</a>
            <br>
            data;

            if($contact_r['pn2']!=''){
              echo <<<data
              <a href="+$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
              data;
            }

          ?>
          <!-- follow us  -->
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <!-- Twitter -->
          <a href="<?php echo $contact_r['tw'] ?>" target="_blank" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <br>
          <!-- facebook -->
          <a href="<?php echo $contact_r['fb'] ?>" target="_blank" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
          <br>
          <!-- instagram -->
          <a href="<?php echo $contact_r['insta'] ?>" target="_blank" class="d-inline-block ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br>

        </div>
      </div>
    </div>
  </div>

  <!-- footer file -->
  <?php require('inc/footer.php'); ?>

  <!-- swipper js carousel javascript  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- script code for carousel  -->
  <script>
    var swiper = new Swiper(".carosuelContainer", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      }
    });
    // Testimonials javascript
    var swiper = new Swiper(".swiperTestinomials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
  </script>
</body>

</html>