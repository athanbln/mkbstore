<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="../controler/doInsert.php">

            <select name="game" id="game">
            <option value="1">Mobile Legend</option>
            <option value="3">PUBG</option>
            <option value="2">Valorant</option>
            </select>
            <br><br>
            
            <div class="input-group mb-3">
            <div class="input-group-text">
            <label for="jumlah_voucher" style="width: 75px;">Jumlah voucher</label>
            </div>
            <input name="jumlah_voucher" type="text" class="form-control-sm"  style="width: 200px;">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-text">
            <label for="harga_voucher" style="width: 75px;">Harga</label>
            </div>
            <input name="harga_voucher" type="text" class="form-control-sm" style="width: 200px;">
            </div>


            <button type="submit" class="btn btn-primary btn-sm mt-3">insert</button>
            
            </form>
    
</body>
</html>

