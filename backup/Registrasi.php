<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="register.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class=countainer>
<h4 class="text-center">R E G I S T E R</h4>
<hr>
<form method="POST" action="konek.php" enctype="multipart/form-data">
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Masukkan E-mail Anda">
    <label>Password</label>
    <input type="pass" name="password" class="form-control" placeholder="Masukkan Password Anda">
    <label for="exampleFormControlFile1">Upload KTP Anda</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
    </div>
    <label for="exampleFormControlFile1">Status : </label>
            <input type="radio" name="status" value="dosen">Dosen
            <input type="radio" name="status" value="mahasiswa">Mahasiswa<br>
    <button class="btn btn-primary" type="submit" name="submit" value="">Daftar</button>
    <p> Sudah punya account? <a href="login.php">Login</a></p>



</form>
</div>




















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>