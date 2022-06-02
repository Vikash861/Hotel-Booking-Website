 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top" id="nav-bar">
     <div class="container-fluid">
         <a class="navbar-brand" href="#"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon shadow-none"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link me-2"  href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="rooms.php">Rooms</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="facilities.php">Facilities</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="contactus.php">Contact Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link me-2" href="aboutus.php">About Us</a>
                 </li>
                 </li>
             </ul>
             <!-- login button -->
             <button type="button" class="btn btn-outline-dark shadow-none me-lg-4 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                 Login
             </button>
             <!-- button for register  -->
             <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                 Register
             </button>
         </div>
     </div>
 </nav>

 <!--Login Modal -->
 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <form action="#">
                 <!-- modal header section  -->
                 <div class="modal-header">
                     <h5 class="modal-title d-flex align-items-center">
                         <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                     </h5>
                     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <!-- modal body section  -->
                 <div class="modal-body">
                     <!-- form code to take input  -->
                     <!-- code for email  -->
                     <div class="mb-3">
                         <label class="form-label">Email address</label>
                         <input type="email" class="form-control shadow-none">
                     </div>
                     <!-- code for password  -->
                     <div class="mb-4">
                         <label class="form-label">Password</label>
                         <input type="password" class="form-control shadow-none">
                     </div>
                     <!-- button for login  -->
                     <div class="mb-2 d-flex align-items-center justify-content-between">
                         <button class="btn btn-dark shadow-none">
                             Login
                         </button>
                         <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                     </div>

                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- resister model code  -->
 <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <form action="#">
                 <!-- modal header section  -->
                 <div class="modal-header">
                     <h5 class="modal-title d-flex align-items-center">
                         <i class="bi bi-person-lines-fill fs-3 me-2"></i>User register
                     </h5>
                     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <!-- modal body section  -->
                 <div class="modal-body">
                     <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                         Note: Your details must match with your ID(Aadhar Card, Driving Licences, Passport etc). These details
                         will require during check In
                     </span>
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Name</label>
                                     <input type="text" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Email address</label>
                                     <input type="email" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Phone Number</label>
                                     <input type="number" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Picture</label>
                                     <input type="file" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-12 ps0 mb-3">
                                 <div class="mb-3">
                                     <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                     <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="1"></textarea>
                                 </div>
                             </div>

                             <div class="col-md-6 ps0 mb-3">
                                 <label class="form-label">Pincode</label>
                                 <input type="number" class="form-control shadow-none">
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Date of Birth</label>
                                     <input type="date" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <div class="mb-3">
                                     <label class="form-label">Password</label>
                                     <input type="text" class="form-control shadow-none">
                                 </div>
                             </div>
                             <div class="col-md-6 ps0 mb-3">
                                 <label class="form-label">Confirm Password</label>
                                 <input type="email" class="form-control shadow-none">
                             </div>
                         </div>
                         <div class="text-center">
                             <button class="btn btn-dark shadow-none">
                                 Register
                             </button>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <?php 
 require('admin/inc/db_config.php');
 require('admin/inc/essentials.php');
 ?>