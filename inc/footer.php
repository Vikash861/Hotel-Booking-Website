

<div class="container-fluid mt-5 bg-white">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">PARISTHAN HOTEL</h3>
            <p>
                This is paristhan hotel welcome to the paristhan hotel my name is lorem if you want any help please contact us
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
            <a href="contactus.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
            <a href="aboutus.php" class="d-inline-block mb-2 text-dark text-decoration-none">About us</a><br>
        </div>
        
        <?php
            $q = "SELECT * FROM contact_details WHERE sr_no = ?";
            $values = [1];
            $res = select($q, $values, 'i');
            $contact_r = mysqli_fetch_assoc($res);
            // print_r($contact_r);
        ?>

        <div class="col-lg-4 p-4">
            <h5 class="mb-3">follow us</h5>
            <?php
            if($contact_r['tw']!=''){
            echo <<<data
                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i> Twitter
                    </span>
                </a>
            data;
            }
            ?>
            <br>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook me-1"></i> facebook
                </span>
            </a>
            <br>
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram me-1"></i> Instagram
                </span>
            </a>
            <br>
        </div>
    </div>
</div>
<h6 class="text-center p-3 text-white bg-dark mb-0">Designed and developed by vikash<h6>

        <!-- bootstrap script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    function setActive() {
        let navbar = document.getElementById('nav-bar');
        let a_tags = document.getElementsByTagName('a');
        // console.log(a_tags);
        for(i=0; i<a_tags.length; i++){
            let files = a_tags[i].href.split('/').pop();
            let file_name = files.split('.')[0];
            if(document.location.href.indexOf(file_name)>=0){
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();
</script>