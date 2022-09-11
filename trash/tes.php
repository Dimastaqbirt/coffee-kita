<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body>
    

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
    <select name="kopi[]"class='form-select mt-3' size='3' aria-label='size 3 select example' name='kopi'>
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
      <select class="form-control mt-3" name="kg[]" id="kg">
      <?php
                $ulang=100;
                for($u= 1 ; $u <= $ulang ; $u++)
                {
                    echo "<option value='$u'>$u</option>";
                }
                ?> 
      </select>
      <span class="input-group-text mt-3" id="basic-addon2">kg</span>
      <?php } ?>
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

<a href="https://api.whatsapp.com/send?phone=6288218336979&text=Saya%20Telah%20Pesan%20Dengan%20Ketentuan%20%3A%0ANama%20 <?= $nama1;?>%0A"></a>
<script src="../boostrap/js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>