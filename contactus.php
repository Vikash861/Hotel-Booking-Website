<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pristhan-Contact Us</title>
  <!-- boot strap links and css  -->
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="css/comon.css">
  <style>
    #a_block{
      display:inline_block;
    }
    .custom-alert{
      position:fixed;
      top:80px;
      right:25px;
    }
  </style>
</head>

<body class="bg-light">
  <!-- navbar file  -->
  <?php require 'inc/header.php'; ?>

  <div class="my-4 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <p class="text-center mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id quibusdam explicabo, vel veritatis quisquam fugit. <br>Sint animi, minima natus harum quidem mollitia perspiciatis fuga nostrum porro iure quo! Vel, eaque.</p>


  <?php
  $q = "SELECT * FROM contact_details WHERE sr_no = ?";
  $values = [1];
  $res = select($q, $values, 'i');
  $contact_r = mysqli_fetch_assoc($res);
  // print_r($contact_r);
 ?>


  <div class="container">
    <div class="row">
      <!-- address details's stuff  -->
      <div class="col-lg-6 col-md-6 mb-3 ">
        <div class="bg-white rounded shadow p-4">
          <?php
          echo<<<data
          <iframe class="w-100 rounded mb-4" src="$contact_r[iframe]" height="320px" loading="lazy"></iframe>
          data;
          ?>
          <h5>Address</h5>
          <?php echo<<<data
          <a href="$contact_r[gmap]" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i>  $contact_r[address]
          data;
          ?>
          <!-- phone number -->
          <?php
          echo<<<data
          <h5>Call us</h5>
          <a id="a_block" href="+$contact_r[pn1]" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +$contact_r[pn1]</a>
          <br>
          data;
          if($contact_r['pn2']!=''){
          echo <<<data
          <a href="+$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
          data;
        }
          ?>

          <!-- Email for contact  -->
          <h5 class="mt-4">Email</h5>
          <?php
          echo<<<data
          <a href="mailto $contact_r[email]" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> $contact_r[email]
          data;
          ?>
          <!-- follow us  -->
          <h5 class="mt-3">Follow us</h5>
          <div class="d-flex">
            <!-- Twitter -->
            <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block text-dark fs-5 me-2">
              <i class="bi bi-twitter me-1"></i>
            </a>
            <br>
            <!-- facebook -->
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block  text-dark fs-5 me-2">
              <i class="bi bi-facebook me-1"></i>
            </a>
            <br>
            <!-- instagram -->
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block  text-dark fs-5">
              <i class="bi bi-instagram me-1"></i>
            </a>
          </div>
        </div>

        <!-- Contact form  -->
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="bg-white rounded shadow p-4 mb-5">
          <h5>Send a Meassage</h5>
          <form method="POST">
            <div class="mt-3">
              <!-- for name  -->
              <label class="form-label" style="font-weight: 600;">Name</label>
              <input type="text" name="name" class="form-control shadow-none">
            </div>
            <!-- for email  -->
            <div class="mt-3">
              <label class="form-label" style="font-weight: 600;">Email</label>
              <input type="Email" name="email" class="form-control shadow-none">
            </div>
            <!-- for subject  -->
            <div class="mt-3">
              <label class="form-label" style="font-weight:600;">Subject</label>
              <input type="text" name="subject" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight:600;">Message</label>
              <textarea class="form-control shadow-none" name="message" rows="5" style="resize:none;"></textarea>
            </div>
            <button type="submit" name="submit_cont" class="btn text-white custom-bg mt-3 ">SEND</button>
          </form>
        </div>
      </div>
    </div>

    <?php 
    if(isset($_POST['submit_cont'])){
      $frm_data = filteration($_POST);
      $q = "INSERT INTO contactus_tb (name,email,subject,message) VALUES(?,?,?,?)";
      $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
      $res = insert($q, $values, "ssss");
      if($res == 1){
        alert("success","Your query sent successfully");
      }
      else{
        alert("error", "something went wrong");
      }
    }
    ?>

    <!-- footer file -->
    <?php require('inc/footer.php'); ?>
</body>

</html>