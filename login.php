<?php

include 'koneksi.php';


if (isset($_POST['buton'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $admin = mysqli_query($coneksi, "SELECT * FROM admin WHERE username = $username");
    // cek username
    if (mysqli_num_rows($admin) === 1) {
        // cek username 
        $row = mysqli_fetch_assoc($admin);
        if ($username == $row['username']) {
            if ($pass == $row['password']) {
                header('location:index.php?msg=benar');
            } else if ($pass != $row['password']) {
                header('location:index.php?msg=lucu');
            }
        }
    } else if (mysqli_num_rows($admin) !== 1) {
        header('location:index.php?msg=LUCU');
    }
}
