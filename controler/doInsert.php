<?php 
require_once '../db/db.php';
session_start();

$game = $_POST['game'];
$jumlahdm = $_POST['jumlah_voucher'];
$harga = $_POST['harga_voucher'];

    $sql = "INSERT into tb_product(id_product,jumlah_dm,harga,id_games) VALUES ('','$jumlahdm','$harga','$game')";
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        echo "<script>alert('Data berhasil dimasukan');window.location='../admin/index.php?halaman=voucher'</script>";
    }


?>