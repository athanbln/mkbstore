<?php
require_once '../db/db.php';
session_start();
$username= $_POST['username'];
$password= $_POST['password'];

$query = "SELECT * from ms_admin WHERE username='$username' and password='$password'";
$result = mysqli_query($conn,$query);
if ($username==NULL){
    echo "<script>alert('Username tidak boleh kosong');window.location='../Login.php'</script>";
}
elseif ($password==NULL){
    echo "<script>alert('Password tidak boleh kosong');window.location='../Login.php'</script>";
}
else
{
    if (mysqli_num_rows($result)>0){
        $_SESSION['username']=$username;
        echo "<script>alert('Anda berhasil login');window.location='../admin/index.php'</script>";
    }
    else {
        echo "<script>alert('Data yang dimasukan tidak sesuai');window.location='../Login.php'</script>";
    }
      
}

?>