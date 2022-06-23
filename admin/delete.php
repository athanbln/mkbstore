<?php 
include '../db/db.php';
$transaksi = $_GET['transaksi'];

$sql = "DELETE FROM tb_transaksi WHERE id = '$transaksi'";
$result=mysqli_query($conn,$sql);
if ($result)
{
    echo "<script>alert('Data Berhasil Dihapus');window.location='index.php'</script>";
}
?>