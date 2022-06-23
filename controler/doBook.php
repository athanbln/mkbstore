<?php 
require_once '../db/db.php';
session_start();

$idAkun = $_POST['data'];
$idServer = $_POST['zoneid'];
$service = $_POST['service'];
$pembayaran = $_POST['method'];
$nohp = $_POST['nohp'];

    $sql = "INSERT into tb_transaksi(id,id_akun,id_server,id_product,jenis_pembayaran,no_hp) VALUES ('','$idAkun','$idServer','$service','$pembayaran','$nohp')";
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        echo "<script>alert('Data berhasil dimasukan');window.location='../pages/checkout.php?booking=$nohp'</script>";
    }


?>