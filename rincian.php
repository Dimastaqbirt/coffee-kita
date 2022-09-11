<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Rincian</title>
    <style>
       .test {
        display: none;
        position: none;
       }
      .logo {
        font-family: LUPINES demo, Lemon milk light;
        font-size: 40px;
      }
      @font-face {
        font-family: "LUPINES demo";
        src: url(lupines/LUPINES\ demo.ttf);
      }
    
    </style>
<?php
$nama1 = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$telfon = $_POST ['telfon'];
$email= $_POST ['email'];



?>
</head>
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
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="index.html#tentang">Tentang</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link  active" href="index.html#produk">Produk</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="index.html#artikel">Artikel</a>
            </li>
            <li>
              <a href="index.html#kontak" class="btn btn-info fw-light text-white" role="button" data-bs-toggle="button">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
<div class="container mt-5">
        <div class="row mt-5">
          <div class="col">
    <div class="card border border-radius border-dark shadow-lg p-4">
        <div class="row text-center mb-3">
            <div class="col">
                <h3 class="fw-bold text-warning" style="font-family: LUPINES demo, Lemon milk light;
                        font-size: 45px;"><strong>Coffee kita</strong></h3>
            </div>
        </div>
        <form action="cetak.php" method="post">
    <!-- Pemanggilan dari from 1 ke 2 lalu agar bisa di panggil kembali ke halaman ke-3 (cetak) -->
<input name="nama1" class ="test" type="text" value="<?php echo "$nama1" ;?>">
<input name="alamat1" class ="test" type="text" value="<?php echo "$alamat"; ?>">
<input name="telfon1" class ="test" type="text" value="<?php echo "$telfon" ;?>">
<input name="email1" class ="test" type="text" value="<?php echo "$email"; ?>">
<div class="container">
    <div class="mb-3">
    <?php
    $jumlahpesanan = $_POST ['jumpes'];
    for($i=1; $i <= $jumlahpesanan ; $i++){
        ?>
     <div class="input-group flex-nowrap">
  <span class="input-group-text mt-3" id="addon-wrapping"><strong>Datake</strong></span>
  <input type="text" class="form-control mt-3" placeholder="" name="datake[]" value="<?= "$i"?>" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <select name="kopi[]"class='form-select mt-3' size='3' aria-label='size 3 select example' name='kopi' required>
                                <option selected>Pilih Biji Kopi</option>
                                <option value='1'>
                                    Robusta Dampit
                                </option>
                                <option value='2'>
                                    Arabica ijen
                                </option>
                                <option value='3'>
                                    Arabica Semeru
                                </option>
                                <option value='4'>
                                    Robusta Toraja
                                </option>
                                <option value='5'>
                                    Robusta Bajawa
                                </option>
                                <option value='6'>
                                    Robusta Bali
                                </option>
                                <option value='7'>
                                    Robusta Gayo
                                </option>
                                <option value='8'>
                                    Robusta Ijen 
                                </option>
                            </select>
                            <div class="input-group mb-3">
                              <input type="number" step="0.01" min="1" max="100" name="kg[]" id="kg" class="form-control mt-3" >
      <?php } ?>
      <span class="input-group-text mt-3" id="basic-addon2">kg</span>
      <div class="input-group">
                    <span class="input-group-text mt-3">catatan</span>
                    <textarea class="form-control mt-3" aria-label="sertakan kode pos" name="catatan" value="-"></textarea>
                  </div>
</form>

    </div>
    <button type="submit" class="btn btn-warning">CHECK OUT</button>
    </div>
    
</div>

    </div>
    
    <div class="mb-5"></div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>