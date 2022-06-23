<?php
require_once '../db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKB Store - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="ID">
    <meta name="coverage" content="Worldwide">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/alertify.min.js"></script>
    <link rel="stylesheet" href="../css/alertify.min.css" />
    <link rel="stylesheet"
        href="../css/themes/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="../css/dataTables.bootstrap4.min.css" />
    <script type="text/javascript"
        src="../js/jquery.dataTables.min.js">
    </script>
    
    <script type="text/javascript"
        src="../js/dataTables.bootstrap4.min.js">
    </script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                 <img src="../assets/logo.jpg" width="50px"> 
                <strong style="color: #fff;">MKB Store</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color:#fff !important ; " class="navbar-toggler-icon" > <i class="fas fa-bars color-primary2" style="font-size: 26px;"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav" >
                    <li class="nav-item" >
                        <a class="nav-link  active" href="index.php" ><i class="fas fa-home"></i> Home</a >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</script>
<body class="d-flex flex-column min-vh-100">
        <?php
        $booking=$_GET['booking'];
        $sql="SELECT id,id_akun,id_server,jumlah_dm,harga,nama_game,no_hp,jenis_pembayaran,bukti_pembayaran from tb_transaksi a inner join tb_product b
        on a.id_product = b.id_product inner join tb_games c on b.id_games = c.id_games WHERE no_hp='$booking'";
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
   
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
        <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="upload.php?bukti=<?=$booking;?>" role="button">Konfirmasi</a>
    <a class="btn btn-primary" href="index.php" role="button">Batalkan</a>


    
</body>
</html>


