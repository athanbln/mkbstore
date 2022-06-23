<?php
	//panggil koneksi database
	include "../db/db.php";

	//pengujian jika tombol upload diklik
	if(isset($_POST['bupload']))
	{
		//ekstensi file yang boleh di upload
        $booking=$_GET['bukti'];
		$ekstensi_diperbolehkan = array('png', 'jpg');
		$nama = $_FILES['file']['name']; // untuk mendapatkan nama file yang diupload
		//nama_file.jpg
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran = $_FILES['file']['size']; //untuk mendapatkan ukuran file yang akan di upload
		$file_tmp = $_FILES['file']['tmp_name']; //untuk mendapatkan temporary file yang akan di upload (tmp)

		//uji jika ekstensi file yang diupload sesuai
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			//boleh upload file
			//uji jika ukuran file dibawah 1mb
			if($ukuran < 1044070){
				//jika ukuran sesuai
				//PINDAHKAN FILE YANG DI UPLOAD KE FOLDER FILE aplikasi
				move_uploaded_file($file_tmp, '../bukti/'.$nama);

				//simpan data ke dalam database
				$simpan = mysqli_query($conn, "UPDATE tb_transaksi SET bukti_pembayaran='$nama' WHERE no_hp='$booking'");
												   
												  
				if($simpan){
					echo "<script>alert('FILE BERHASIL DI UPLOAD'); document.location='../Pages/HomePage.php'</script>";
				}else{
					echo "<script>alert('GAGAL MENGUPLOAD FILE'); document.location='../Pages/upload.php'</script>";
				}

			}else{
				//ukuran tidak sesuai
				echo "<script>alert('UKURAN FILE TERLALU BESAR, MAX. 1MB'); document.location='../Pages/upload.php'</script>";
			}
		}else{
			//ektensi file yang di upload tidak sesuai
			echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN'); document.location='../Pages/upload.php'</script>";
		}


	}



?>