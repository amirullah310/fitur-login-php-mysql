<?php
$con = mysqli_connect('localhost','root','','ecommerce');

 require 'koneksi.php';
 if(isset($_POST['tambah'])){
   
 
     if(tambah($_POST)>0){
         echo "
         <script>
         alert('data berhasil di daftarkan');
         document.location.href = 'index.php';
         </script>
         ";
         }else{
             echo"
         <script>
         alert('data gagal di daftarkan');
         document.location.href = 'registrasi.php';
         </script>
             "; 
         }
         
 }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">

        <h1>REGISTER</h1>
        <form action="" name="form" method="post">
            <label for="username">username :</label>
            <input type="text" placeholder="Isi username" class="username"  name="username" >
            <label for="password">password :</label>
            <input type="text" placeholder="Isi password" class="password" name="password" >
            <label for="email">Email :</label>
            <input type="text" placeholder="Isi Email" name="email" >
            <label for="level">level :</label>
            <input type="text" placeholder="Isi level" name="level" >
            
            <button type="submit" class="tambah" name="tambah" >Submit</button>
        </form> 
    </div>
    </body>
</html>