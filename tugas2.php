<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <!-- from -->
    <form class="form-horizontal" method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option name="matkul" value="DDP">DDP</option>
        <option name="matkul" value="MatKom">Matematika Komputer</option>
        <option name="matkul" value="BasDat">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

    <?php  if(isset($_POST['submit']) ) : ?>

        Nama Lengkap : <?= $_POST['nama'] ?>
        <br>
        Mata Kuliah : <?= $_POST['matkul'] ?>
        <br>
        Nilai UTS : <?= $_POST['uts'] ?>
        <br>
        Nilai UAS : <?= $_POST['uas'] ?>
        <br>
        Nilai Tugas / Praktikum : <?= $_POST['tugas'] ?>
        <br>

        <?php
          $nilaiAkhir = ($_POST['uts'] + $_POST['uas'] + $_POST['tugas']) / 3;
          if( $nilaiAkhir >= 0 && $nilaiAkhir <= 35 ){
            echo 'Grade = E ';
            echo '<br>';
            echo 'Predikat = Sangat Kurang ';
          } elseif ( $nilaiAkhir >= 36 && $nilaiAkhir <= 55 ){
            echo 'Grade = D ';
            echo '<br>';
            echo 'Predikat =  Kurang ';
          } elseif ( $nilaiAkhir >= 56 && $nilaiAkhir <= 69 ){
            echo 'Grade = C ';
            echo '<br>';
            echo 'Predikat = Cukup ';
          } elseif ( $nilaiAkhir >= 70 && $nilaiAkhir <= 84 ){
            echo 'Grade = B ';
            echo '<br>';
            echo 'Predikat = Memuaskan ';
          } elseif ( $nilaiAkhir >= 85 && $nilaiAkhir <= 100 ){
            echo 'Grade = A ';
            echo '<br>';
            echo 'Predikat = Sangat Memuaskan ';
          } else {
            echo 'Grade = I ';
            echo '<br>';
            echo 'Predikat = Tidak Ada ';
          }

          ?>

        <?php endif ?>


</form>
</body>
</html>