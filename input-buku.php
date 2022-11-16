<!doctype html>
<html>
<head>
        <tittle><center>ISIKAN DATA DI BAWAH INI</tittle></center>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body style="background-image:url(https://i.etsystatic.com/6231007/r/il/4e7069/2815489420/il_1140xN.2815489420_kase.jpg);">
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input-buku.php" method="post">
                        <div class="form-group">
                <label for="nim"><b>Id Buku</b></label>
                <Input type="hidden" name="id_buku" value="<?php echo$row['id_buku']?>" class="form-control">
                <Input type="text" name="id_buku" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim"><b>Kode Buku </b></label>
                <Input type="text" name="kode_buku" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Judul Buku</b></label>
                <Input type="text" name="judul_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penulis Buku</b></label>
                <Input type="text" name="penulis_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Penerbit Buku</b></label>
                <Input type="text" name="penerbit_buku"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Tahun Penerbit</b></label>
                <Input type="text" name="tahun_penerbit"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Stok</b></label>
                <Input type="text" name="stok"class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            <a href="tampil_buku.php" class="btn btn-primary">BACK </a>
          
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>