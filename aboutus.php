<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pristhan-Facilities</title>
  <!-- boot strap links and css  -->
  <!-- swipper js link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="css/comon.css">
  <style>
    .box:hover {
      border-top-color: var(--teal) !important;
    }
  </style>
</head>

<body class="bg-light">
  <!-- navbar file  -->
  <?php require 'inc/header.php'; ?>

  <div class="my-4 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <p class="text-center mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quibusdam explicabo, vel veritatis quisquam fugit. <br>Sint animi, minima natus harum quidem mollitia perspiciatis fuga nostrum porro iure quo! Vel, eaque.</p>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-6 mb-4 order-2 order-lg-1 order-md-1">
        <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus esse, perferendis quasi voluptates omnis, laborum, veritatis et ratione ducimus iste fugit! Odit obcaecati rem accusamus quia nobis optio ipsam omnis.</p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
        <img src="images/aboutus.jpg" alt="about us" class="w-100">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-md-6 mb-4 mx-4">
        <div class="bg-white rounded shasow p-4 border-top border-4 text-center box">
          <img src="images/aboutus/hospital.svg" alt="error" width="70px">
          <p class="mt-3">100+ ROOMS</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mx-4">
        <div class="bg-white rounded shasow p-4 border-top border-4 text-center box">
          <img src="images/aboutus/customer.png" alt="error" width="70px">
          <p class="mt-3">200+ CUSTOMERS</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mx-4">
        <div class="bg-white rounded shasow p-4 border-top border-4 text-center box">
          <img src="images/aboutus/review.png" alt="error" width="70px">
          <p class="mt-3">150+ REVIEWS</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mx-4">
        <div class="bg-white rounded shasow p-4 border-top border-4 text-center box">
          <img src="images/aboutus/staff.png" alt="error" width="70px">
          <p class="mt-3">200+ STAFFS</p>
        </div>
      </div>
    </div>
  </div>

  <h3 class="my-3 fw-bold h-font text-center">MANAGMENT TEAM</h3>

  <div class="container px-i4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <?php
          $t_name = "team_details";
          $about_t_details = selectall($t_name);
          $path = ABOUT_IMG_PATH;
          while($row = mysqli_fetch_assoc($about_t_details)){
            echo <<<data
              <div class="swiper-slide bg-white text-center overflow-hidden rounded">
              <img src="$path$row[picture]" alt="teammember1" class="w-100" >
              <h5 class="mt-2">$row[name]</h5>
              </div>
            data;
          }
          ?>
        <div class="swiper-pagination"></div>
      </div>
  </div>
  <!-- footer -->
  <?php require('inc/footer.php'); ?>


  
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
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
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          }
        }
      });
    </script>

    <!-- footer file -->
</body>

</html>