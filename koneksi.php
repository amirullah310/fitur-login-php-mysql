<?php
$con = mysqli_connect('localhost','root','','ecommerce');

// if(mysqli_connect_errno()){
//     echo'koneksi database gagal :' mysqli_connect_error();
// }
function tambah($data){
    global $con;
     $username = $data['username'];
     $password = $data['password'];
     $email = $data['email'];
     $level = $data['level'];

     $query = "INSERT INTO user VALUES ('','$username','$password','$email','$level')";
     mysqli_query($con,$query);
     return mysqli_affected_rows($con);
}
?>