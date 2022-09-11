<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEKOUT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css1/css1.css" />
</head>
<style>
      .logo {
        font-family: LUPINES demo, Lemon milk light;
        font-size: 40px;
      }
      @font-face {
        font-family: "LUPINES demo";
        src: url(lupines/LUPINES\ demo.ttf);
      }
    </style>
<body style="background-image:url(img/about-img.jpeg);
    background-size: cover;
    background-position: center;
    ">
    <!-- navbar pembelian awal -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top shadow-sm">
      <div class="container">
        <a class="navbar-brand logo text- fs-2 fw-bold "
        class="text-warning fw-bolder " style="font-family: LUPINES demo; font-size: 40px;" href="#">COFFEE KITA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-1">
            <li class="nav-item me-4">
              <a class="nav-link " aria-current="page" href="baru.html">Home</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="baru.html#tentang">Tentang</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link active" href="baru.html#produk">Produk</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="baru.html#artikel">Artikel</a>
            </li>
            <li>
              <a href="baru.html#kontak" class="btn btn-info fw-light text-white" role="button" data-bs-toggle="button">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php 

//variable
$nama1 = $_POST ['nama1'];
$alamat1 = $_POST ['alamat1'];
$telfon1 = $_POST ['telfon1'];
$email1= $_POST ['email1'];
$kopi = $_POST['kopi'];
$banyak = $_POST['kg'];
$datake = $_POST['datake'];
$catatan = $_POST ['catatan'];


$datapesanan=[
    "kopi"=>$kopi,
    "kg"=>$banyak,
]
?>
<!-- // simpan data total harga -->
<?php
$totalbayar = array();
?>

<!-- tabel cetak -->
        <div class="container p-1 mt-5 mb-6">
            <div class="card border border-radius border-dark shadow-lg p-4">
                <div class="row text-center mb-2">
                    <div class="col">
                        <h3 class="fw-bold text-warning" style="font-family: LUPINES demo, Lemon milk light;
                        font-size: 45px;"><strong>Coffee kita</strong></h3>
                        <h3 class="fw-bold text-dark">Rincian Pesanan</h3>
                        <hr class="hr">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <div>Nama</div>
                        <div>No telfon</div>
                        <div>Alamat</div>
                    </div>
                    
                    <div class="col-8">
                        <div>: <?php echo $nama1;?></div>
                        <div>: <?php echo $telfon1;?></div>
                        <div>: <?php echo $alamat1;?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="fw-bold">
                                    <tr>
                                        <td>No.</td>
                                        <td>Nama</td>
                                        <td>Harga</td>
                                        <td>Qty</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
<?php
foreach ($datake as $key => $datapesanan):
?>
<!-- KETENTUAN -->
<?php
IF ($kopi[$key] == "1"){
    $bijikopi = "Robusta Dampit";
    $harga = 33000;
    $total = $harga * $banyak[$key];
    array_push($totalbayar,$total);} 

    elseif ($kopi[$key] == "2"){
    $bijikopi = "Arabica Ijen";
    $harga = 78000;
    $total = $harga * $banyak[$key];
    array_push($totalbayar,$total);}

    elseif ($kopi[$key] == "3"){
        $bijikopi = "Arabica Semeru";
        $harga = 65000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
    
    elseif ($kopi[$key] == "4"){
        $bijikopi = "Robusta Toraja";
        $harga = 44000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
    elseif ($kopi[$key] == "5"){
        $bijikopi = "Robusta Bajawa";
        $harga = 44000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
    elseif ($kopi[$key] == "6"){
        $bijikopi = "Robusta Bali";
        $harga = 36000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
    elseif ($kopi[$key] == "7"){
        $bijikopi = "Robusta Gayo";
        $harga = 46000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
    elseif ($kopi[$key] == "8"){
        $bijikopi = "Robusta ijen";
        $harga = 36000;
        $total = $harga * $banyak[$key];
        array_push($totalbayar,$total);}
?>
<!-- akhir ketentuan -->
                                <tbody>
                                    <tr>
                                        <td><?php echo $key+1;?></td>
                                        <td> <?php echo $bijikopi; ?></td>
                                        <td>Rp.<?php echo $harga;?>                                   </td>
                                        <td><?php echo $banyak[$key];?> kg</td>
                                        <td>Rp. <?php echo $total;?></td>
                                    </tr>
                                    <?php endforeach;?>                              <tr class="fw-bold">
                                        <td colspan="3"></td>
                                        <td>Total Bayar</td>
                                        <td>Rp.<?php
                                            $jumlahBayar = 0;
                                            foreach ($totalbayar as $value) {
                                                $jumlahBayar += $value;
                                                
                                            }
                                            echo $jumlahBayar ;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<!-- tabel cetak akhir -->

<div class="card">
<h4>CATATAN PEMBELI:</h4>
<P><?php echo $catatan;?></P>
<div class="ca">
<h4 class="mt-1">SHIPPING INFORMATION:</h4>
<ul>
    <li>
        <p>Pembayaran hanya dilakukan melalui rekening Bank di bawah ini: <br> 
        <Strong>BCA 12345678 a/n Dimas Taqbir Ramdani</Strong></p>
    </li>
    <li>
        <p>ScreenShot laman ini dan bukti Pembayaran<br> 
        Lalu <Strong>KONFIRMASI</Strong> dengan menekan tombol <strong>"Terhubung dgn Hubungi Admin"</strong> </p>
    </li>
    <li>
    <p> Wajib KONFIRMASI WA ke tim CS kami di <strong> 0812 0345 678</Strong> dan <strong> 0876 5432 123 </strong></p>
    </li>
    <li>
        <p>
        <strong>Pembatalan pemesanan:</strong>
    Kami tidak menerima pembatalan apabila pesanan 
        sudah diteruskan dan dikonfirmasi oleh tim dapur kami.</p>
    </li>
</ul></div>
<a href="https://bit.ly/3xDdWHi"><button type="submit" class="btn btn-warning form-control" >Klik Disini Untuk terhubung Dengan Admin Kami</button></a>
</table>
</div>
</div>


<div class="mb-5"></div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>