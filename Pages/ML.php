<?php 
require_once '../db/db.php';
?>
<html>
<head>
    <title>MKB Store - Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="MKB Store Cara Tercepat Dan Termudah Untuk Pembelian Diamond Mobile Legends.">
    <meta name="robots" content="index,nofollow">
    <meta name="keywords"
        content="diamond ml murah, top up ml murah, diamond mobile legend murah, MKB Store">
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm bg-custom">
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
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row mt-2" style="margin:0px">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <div class="text-center text-md-left mb-2">
                    <img src="../assets/zzz.jpg" class="img-responsive rounded mb-2" width="350px" height="200px">
                </div>
                <h5 style="color:#fff;background-color: #2e2e2e;padding: 10px;margin-right: 20px;text-align: center;border-radius: 10px;">Mobile Legends</h5>
                <span class="strip-primary"></span>
                <p class="mt-4 pr-4"><b><font color="#fff">Top Up Diamond Mobile Legends termurah & tercepat di MKB Store</font></b>
<br/>
<br/>
<font color="#fff">Cara Order :</font> 
<br/>
<font color="#fff">1. Masukan ID dan SERVER <br/></font>
<font color="#ffff">2. Pilih nominal yang ingin kamu beli <br/></font>
<font color="#fff">3. Lakukan pembayaran melalui BCA, BNI, OVO, Shopee Pay, DANA, GOPAY, dan Link-Aja <br/></font>
<font color="#fff">4. Isi nomor Whatsapp kamu dengan benar karena kami akan memberikan notifikasi jika pesanan sudah di proses.</font><br/>
<font color="#fff">5. Selamat ! Diamond akan bertambah langsung ke akunmu setelah pembayaran berhasil / mendapatkan notifikasi Whatsapp dari kami.</br></font>
<br/>
<p><font size="4" color="#fff"><strong>Proses Pesanan 1 - 15 Menit (Maksimal 1 - 6 Jam apabila Event / Error)</font></p></strong>


<p><font size="4" color="#fff"><strong>Layanan Top Up ini Open 24 Jam</font></p></strong></p>
            </div>

            <div class="col-md-12 col-sm-12 col-lg-8">
                <form action="../controler/doBook.php" class="contact-form" id="orderform" method="POST" autocomplete="off">
                    <div class="row">
                    	                        
<div class="col-12 mb-3">
<div class="card">
<div class="card-body">
<div class="text-white text-center position-absolute circle-primary">1</div><h5 style="margin-left: 40px;">Lengkapi data</h5>
			<hr><div class="form-row mt-4">
				<div class="col">
					<input type="number" class="form-control" name="data" placeholder="Masukan UserID" required>
				</div>
				<div class="col">
					<input type="number" class="form-control" name="zoneid" placeholder="Masukan ServerID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required>
				</div>
			</div>
			<div class="mt-3">
				<button type="button" class="btn btn-original btn-sm" data-toggle="modal" data-target="#exampleModal">Petunjuk</button>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="pt-2 pr-3">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class=img-fluid src="../assets/ML1.jpg">

                    <b> Server adalah angka yang berada di dalam kurung </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div id="note"></div>
                        <div class="col-12 mb-3">
                        <div class="card">
                                <div class="card-body">
                                <div class="text-white text-center position-absolute circle-primary">2</div>                      
                                <h5 style="margin-left: 40px; ">Pilih nominal</h5>
                                
                                    <hr><div class="mt-4" >
                                        <div class="panel-topup">
                                        <?php $sql="SELECT * from tb_product a inner join tb_games b
                                                    on a.id_games = b.id_games where nama_game='mobilelegend'"; ?>
                                        <?php $result=mysqli_query($conn,$sql); ?>
                                        <?php if(mysqli_num_rows($result)>0){ ?>
                                        <?php
                                        $service = 'service';
                                        $no=1;                                      
                                            while($data = mysqli_fetch_array($result)){
                                        ?>
                                            <input type="radio" id="service<?php echo $no; ?>" name="service" value="<?php echo $data['id_product']; ?>"><label onclick="ganti('service<?php echo $no; ?>')" id='service<?php echo $no; ?>' for='service<?php echo $no; ?>'><?php echo $data["jumlah_dm"]; ?><img style="margin-right: 3px !important;" height="18px" src="../assets/dm.png"><?php echo $data["harga"];?></label>  
                                                                                 
                                            <?php $no++; } ?>
                                            <?php } ?>  </div>
                                    </div>                                  
                                </div>                               
                            </div>
                        </div>
                        
                        <div class="col-12 mb-3">
                    <div class="card">
                            <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">3</div>
                            <h5 style="margin-left: 40px;">Pilih metode pembayaran</h5>
                                <hr><div class="mt-4">
                                    <div class="methods">
                                        <input class="mtdbtn" type="radio" id="method0" name="method" value="TRANSFER BANK BCA - 5211706512">
                            <label class="mtdlabel" for="method0"><img src="../assets/bca.png" class="img-fluid">
                            <p class="float-right">
                                    <span class="badge badge-success" id="TRANSFER_BANK_BCA"></span>
                                </p>
                            </label><input class="mtdbtn" type="radio" id="method1" name="method" value="QRIS">
                            <label class="mtdlabel" for="method1"><img src="../assets/qris.png" class="img-fluid">
                            <p class="float-right">
                                    <span class="badge badge-success" id="QRIS"></span>
                                </p>
                            </label><input class="mtdbtn" type="radio" id="method2" name="method" value="VA BNI">
                            <label class="mtdlabel" for="method2"><img src="../assets/bni.png" class="img-fluid">
                            <p class="float-right">
                                    <span class="badge badge-success" id="VA_BNI"></span>
                                </p>

                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </div>
                        <div class="col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                <div class="text-white text-center position-absolute circle-primary">4</div>
                                <h5 style="margin-left: 40px;">Masukan nomor whatsapp</h5>
                                    <hr><div class="mt-4 mb-4">
                                        <input type="number" class="form-control" name="nohp" placeholder="08xxxxxxxxx"
                                            required>
                                     </div>
                               </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="submit" value="Beli" id="orderbtn" class="btn btn-original">
                            <input type="hidden" name="cid" value="1">
                        </div>                       

                        <div id="ordermodal" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div id="orderdetail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
       
  
  <div class="container container-1440 mt-4">
    <div class="px-lg-3">
      <div class="row">
        <div class="footer-copyright-row">
          <div class="d-lg-flex">
            <div class="footer-cr">
            © 2021 MKB Store . Semua Hak Cipta
            </div>
         
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>