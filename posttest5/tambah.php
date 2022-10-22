<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_album = $_POST['nama_album'];
    $jumlah_album = $_POST['jumlah_album'];
    $nama_customer = $_POST['nama_customer'];
    $no_telepon = $_POST['no_telepon'];

    $kirim = mysqli_query($db, "INSERT INTO kpop (nama_album,jumlah_album,nama_customer,no_telepon) VALUES ('$nama_album','$jumlah_album','$nama_customer','$no_telepon')");

    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}