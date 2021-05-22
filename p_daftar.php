<?php 

include_once('koneksi.php');

if(isset($_post['daftar'])){
$username = $_POST['username'];
$password =$_POST['password'];

$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($query) == 1){
  header('Location: index.php');
}else{
    mysqli_query($con, "INSERT INTO user (username,password) VALUES 
('$username','$password') ");
header('Location: index.php');
}
}


?>