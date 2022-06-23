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
        $sql=("SELECT id_product,jumlah_dm,harga,nama_game from tb_product a inner join tb_games b
        on a.id_games = b.id_games;");
        $result=mysqli_query($conn,$sql);
        ?>


        <table class="table table-bordered" cellpadding="0" cellspacing="0">
            <thead>
        <tr>
            <th>No</th>
            <th>Jumlah diamond</th>
            <th>Harga</th>
            <th>Game</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php if(mysqli_num_rows($result)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["jumlah_dm"];?></td>
            <td><?php echo $data["harga"];?></td>
            <td><?php echo $data["nama_game"];?></td>
            <td>
                <a href="deleteVoucher.php?voucher=<?=$data["id_product"];?>"class="btn btn-info">Delete</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>


</body>
</html>