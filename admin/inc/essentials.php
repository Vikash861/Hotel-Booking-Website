<?php
// for frontend process 
define('SITE_URL', 'http://127.0.0.1/Hotel%20Booking%20Website/images/');
define('ABOUT_IMG_PATH',SITE_URL.'aboutus/');
define('CAROUSEL_IMG_PATH',SITE_URL.'carousel/');
define('FACILITIES_IMG_PATH',SITE_URL.'facilities/');
// echo ABOUT_IMG_PATH;


// for backend process
define('UPLOAD_IMAGE_PATH',$_SERVER["DOCUMENT_ROOT"].'/Hotel Booking Website/images/');
// echo UPLOAD_IMAGE_PATH;
define('ABOUT_FOLDER', 'aboutus/');
define('CAROUSEL_FOLDER', 'carousel/');
define('FACILITIES_FOLDER', 'facilities/');
// echo ABOUT_FOLDER;

function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "
        <script>window.location.href = 'index.php';</script>
        ";
    };
}

function redirect($url)
{
    echo "
        <script>window.location.href = '$url';</script>
    ";
}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

function uploadImage($image, $folder)
{
    $valid_mimes = ['image/jpeg', 'image/png', 'image/webp'];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mimes)) {
        return 'inv_img'; //invalid mime or format 
    }
    else if ($image['size']/(1024*1024) > 5) {
        return 'inv_size'; // invalidd size
    }
    else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_'. random_int(1111,9999). ".$ext";
        $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)){
            return $rname;
        }
        else {
            return 'upd failed';
        }
    }
}

function uploadSvgImage($image, $folder)
{
    $valid_mimes = ['image/svg+xml'];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mimes)) {
        return 'inv_img'; //invalid mime or format 
    }
    else if ($image['size']/(1024*1024) > 1) {
        return 'inv_size'; // invalidd size
    }
    else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_'. random_int(1111,9999). ".$ext";
        $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)){
            return $rname;
        }
        else {
            return 'upd failed';
        }
    }
}

function deleteImage($folder, $image){
    if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
        return true;
    }
    else{
        false;
    }
}

?>