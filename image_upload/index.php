<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center;">Image Upload</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <form action="islem.php" method="POST" enctype="multipart/form-data">
    <div style="margin: auto;" class="col-md-4">
  <label for="formFile" class="form-label"></label>
  <input class="form-control" name="image_url" type="file" id="formFile">
  <br>
  <button type="submit" name="upload" type="button" class="btn btn-success">Yükle</button>
</div>
</form>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

if (@$_GET['durum']=="dosya") {?>

 <script>
Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Lütfen dosya seçiniz',
  showConfirmButton: false,
  timer: 2000
})
</script>.
<?php }

if (@$_GET['durum']=="basarili") {?>

<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Dosya başarıyla yüklendi',
  showConfirmButton: false,
  timer: 2000
})
</script>
  
<?php }elseif (@$_GET['durum']=="basarisiz") {?>

  <script>
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: 'Dosya yüklenemedi',
  showConfirmButton: false,
  timer: 2000
})
</script>
  
<?php }

if (@$_GET['durum']=="gecersiz") { ?>

<script>
Swal.fire({
  position: 'center',
  icon: 'warning',
  title: 'Sadece Jpg ve Png formatları yüklenebilir ',
  showConfirmButton: false,
  timer: 2000
})
</script>

  
<?php }

if (@$_GET['durum']=="hata") { ?>
  
  <script>
Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Bir hata oluştu',
  showConfirmButton: false,
  timer: 2000
})
</script>

<?php } ?>
 
  </body>
</html>
