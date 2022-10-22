<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALBUM KPOP</title>
    <link rel="stylesheet" href="stylesheet/style2.css">
</head>
<body>
    <header>
        <h1><b><center>DATA PEMESANAN ALBUM KPOP</center></b></h1>
    </header>
    
    <div class="form-class">
        <h3>Tambah Pesanan</h3>
        <form action="tambah.php" method="post">
            
            <label for="">Nama Album</label><br>
            <input type="text" name="nama_album" class="form-text"><br>
            
            <label for="">Jumlah Album</label><br>
            <input type="text" name="jumlah_album" class="form-text"><br>
            
            <label for="">Nama Customer</label><br>
            <input type="text" name="nama_customer" class="form-text"><br>
            
            <label for="">Nomor Telepon</label><br>
            <textarea name="no_telepon" id="" cols="135" rows="10"></textarea><br>
            

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>