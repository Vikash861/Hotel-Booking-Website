<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pristhan-Facilities</title>
  <!-- boot strap links and css  -->
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="css/comon.css">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    .h-font {
      font-family: 'Merienda', cursive;
    }

    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">
  <!-- navbar file  -->
  <?php require 'inc/header.php'; ?>

  <div class="my-4 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <p class="text-center mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quibusdam explicabo, vel veritatis quisquam fugit. <br>Sint animi, minima natus harum quidem mollitia perspiciatis fuga nostrum porro iure quo! Vel, eaque.</p>

  <div class="container">
    <div class="row">
      <?php
      $res = selectall('facilities_tb');
      while($row = mysqli_fetch_assoc($res)){
        $path = FACILITIES_IMG_PATH;
        echo <<<faci
        <div class="col-lg-4 col-md-6 mb-3 ">
          <div class="bg-white rounded shadow p-4 mb-5 mx-4 border-top border-4 border-dark pop">
            <div class="d-flex align-items-center mb-2 ">
              <img src="$path$row[icon]" alt="wifi" width="40px">
              <h5 class="m-0 ms-3">$row[name]</h5>
            </div>
            <p>$row[message]</p>
          </div>
        </div>
        faci;
      }
      ?>
    </div>
  </div>

  <!-- footer file -->
  <?php require('inc/footer.php'); ?>
</body>

</html>