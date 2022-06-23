<?php 
include '../db/db.php';
$voucher = $_GET['voucher'];

$sql = "DELETE FROM tb_product WHERE id_product = '$voucher'";
$result=mysqli_query($conn,$sql);
if ($result)
{
    echo "<script>alert('Data Berhasil Dihapus');window.location='index.php'</script>";
}
?>