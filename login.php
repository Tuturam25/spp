<?php 

include 'koneksi.php';

$admin = mysqli_query($coneksi, "SELECT * FROM administrator");

if(isset($_POST['buton'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    foreach($admin as $row) {
        if($row['username'] == $username) {
            if ($row['password'] == $pass) {
                header('location:index.php?msg=benar');
            } else if ($row['password'] != $pass) {
                header('location:index.php?msg=salah');
            }
        }
        if($row['username'] != $username) {
            header('location:index.php?msg=SALAHH');
        }
        
    }

}
?>