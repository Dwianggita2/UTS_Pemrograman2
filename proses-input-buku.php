<?php

$id_buku=$_POST['id_buku'];
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$penulis_buku=$_POST['penulis_buku'];
$penerbit_buku=$_POST['penerbit_buku'];
$tahun_penerbit=$_POST['tahun_penerbit'];
$stok=$_POST['stok'];

include "koneksi1.php";

$simpan=$koneksi1->query("insert into buku(id_buku,kode_buku,judul_buku,penulis_buku,penerbit_buku,tahun_penerbit,stok) 
                        values('$id_buku','$kode_buku','$judul_buku','$penulis_buku','$penerbit_buku','$tahun_penerbit','$stok')");

if($simpan==true){

    header("location:tampil_buku.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>