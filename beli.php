<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From pembelian</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
    <script type="text/javascript">
       function notif(txt){
        alert(txt);
    } </script>
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
    <!-- navbar akhir -->
    <section class="beli" >
    <div class="container mt-5">
        <div class="row mt-5">
          <div class="col">
            <div class="card border-dark border-radius border-success shadow-lg p-4">
            <div class="input-group mb-3">
                <form action="rincian.php" method="post">
                  <div>
                  <h3 class="fw-bold text-warning" style="font-family: LUPINES demo, Lemon milk light;
                        font-size: 45px;"><strong>Coffee kita</strong></h3>
                    <h3>
                      <strong>FORM PEMBELIAN</strong>
                    </h3>
                  </div>
                    <div class="input-group mb-3 mt-3">
                        <span class="input-group-text" id="basic-addon1">Nama</span>
                        <input type="text" class="form-control" placeholder="Masukan nama anda" aria-label="Username" aria-describedby="basic-addon1" name="nama">
                      </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" >No Telp</span> 
                    <input type="text" class="form-control" placeholder="+62" name="telfon" required>
                    <span class="input-group-text">E-mail</span>
                    <input type="text" class="form-control" placeholder="E-mail" name="email" required>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill me-2" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> Alamat Lengkap</span>
                    <textarea class="form-control" placeholder    ="sertakan kode pos" name="alamat" required></textarea>
                  </div>
                  
                <div class="input-group mb-3 mt-3">
                    <select name="jumpes" id="jumpes" class="form-control" required>
                        <option value="-">Berapa Jenis Biji Kopi Yang Ingin Anda Beli </option>
                        <?php
                        $ulang=100;
                        for($i= 1 ; $i <= $ulang ; $i++)
                        {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?> 
                    </select>
                    <!-- <span class="input-group-text" id="basic-addon2">kg</span> -->
                  </div>
            <button type="submit" class="btn btn-warning" onclick="confirm('APAKAH DATA SUDAH BENAR?')">LANJUT</button>
            </form>
            </div>
            
              </div>
          </div>
          <div class="col">
            <div class="card border-dark border-radius border-success shadow-lg p-4">
                <h2>SHIPPING INFORMATION</h2>
                <ul>
                  <li>
                    <p>
                      Silahkan isi form data diri dengan data yang sebenar-benarnya, karena alamat pengiriman akan dikirimkan berdasarkan data yang anda isikan.
                    </p>
                  </li>
                  <li>
                    <p>
                    Pembayaran hanya dilakukan melalui rekening Bank di bawah ini:
                    <strong> BCA 12345678 a/n Dimas Taqbir Ramdani
                    </strong>
                    </p>
                  </li>
                  <li>
                    <p>
                    Pembatalan pemesanan: Kami tidak menerima pembatalan apabila pesanan sudah diteruskan dan dikonfirmasi oleh tim dapur kami.
                    </p>
                  </li>
                  </ul>
            </div>
            </div>
        </div>
        </section>

   
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>