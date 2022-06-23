<?php
require_once '../db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>

        <?php
        $sql="SELECT id,id_akun,id_server,jumlah_dm,harga,nama_game,no_hp,jenis_pembayaran,bukti_pembayaran from tb_transaksi a inner join tb_product b
        on a.id_product = b.id_product inner join tb_games c on b.id_games = c.id_games";
        $result=mysqli_query($conn,$sql);
        ?>

        <table class="table table-bordered" cellpadding="0" cellspacing="0">
            <thead>
        <tr>
            <th>No.</th>
            <th>Id Akun</th>
            <th>Server/Akun</th>
            <th>DM</th>
            <th>Harga</th>
            <th>Game</th>
            <th>Hp</th>
            <th>Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php $nomor=1; ?>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $data["id_akun"];?></td>
            <td><?php echo $data["id_server"];?></td>
            <td><?php echo $data["jumlah_dm"];?></td>
            <td><?php echo $data["harga"];?></td>
            <td><?php echo $data["nama_game"];?></td>
            <td><?php echo $data["no_hp"];?></td>
            <td><?php echo $data["jenis_pembayaran"];?></td>
            <td><img height="75px" src="../bukti/<?php echo $data["bukti_pembayaran"];?>" alt=""></td>
            <td>
                <a href="delete.php?transaksi=<?=$data["id"];?>"class="btn btn-info">Delete</a>
            </td>
        </tr>
        <?php $nomor++ ; ?>
        <?php } ?>
        <?php } ?>

    </table>


</body>
</html>