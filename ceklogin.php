<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($con , "SELECT * FROM user WHERE username='$username'and password='$password'");

$cek = mysqli_num_rows($login);
if ( $cek > 0){
    $data = mysqli_fetch_assoc($login);


    if ($data['level'] == 'admin'){
        $_SESSION['username'] = $username ;
        $_SESSION['admin'] = 'admin' ;
        header("location:halamanadmin.php");
    } else if  ($data['level'] == 'user'){
            $_SESSION['username'] = $username ;
            $_SESSION['user'] = 'user' ;
            header("location:halamanuser.php");
    }
;
}
;

?>