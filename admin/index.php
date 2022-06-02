<?php

require('inc/essentials.php');
require('inc/db_config.php');
session_start();

if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
    redirect('dashboard.php');
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="css/comon.css">
    <style>
        .login_form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login_form text-center rounded bg-white overflow-hidden shadow">
        <form method="POST">
            <h4 class="py-3 text-white bg-dark rounded">ADMIN LOGIN PANNEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" required class="form-control shadow-none text-center" placeholder="admin name" name="admin_name">
                </div>
                <!-- code for password  -->
                <div class="mb-4">
                    <input type="password" required class="form-control shadow-none text-center" placeholder="password" name="admin_pass">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php

    if (isset($_POST['login'])) {
        $frm_data = filteration($_POST);
        // print_r($frm_data);
        $query = "SELECT * FROM administrator WHERE admin_name= ? and admin_pass=?";

        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        $res = select($query, $values, "ss");
        // print_r($res);
        if ($res->num_rows == 1) {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        } else {
            alert('error', 'Login failed- Invalid Credentials');
        }
    }
    ?>

    <?php require('inc/scripts.php') ?>;
</body>

</html>