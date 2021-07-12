<?php

require_once 'koneksi.php';

//ambil data dari url


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
	 <section class="box-formulir">
        <h2>Edit Profil</h2>
        <form method="post" action="edit_aksi.php" enctype="multipart/form-data">
          <div class="box">
            <table border="0" class="form-table">
                
                 <?php
                  if (isset($_GET['id_user'])) 
                  {
					$id_user = $_GET['id_user'];
                    $sql= mysqli_query($koneksi, "SELECT * FROM user WHERE id_user=$id_user" );
                    while ($user = mysqli_fetch_array($sql))
                    {
                    ?>
                        <td><input type="hidden" name="foto_lama" value="<?php echo $user["foto_lama"];?>" id="foto_lama" class="input-control" required></td>
                        <td><input type="hidden" name="id_user" value="<?php echo $user["id_user"];?>" id="id_user" class="input-control" required></td>
                        <tr>
                            <td>Nama User</td>
                            <td> :</td>
                            <td><input type="text" name="nama_user" value="<?php echo $user["nama_user"];?>" id="nama_user" class="input-control" required></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> :</td>
                            <td><input type="text" name="alamat_user" value="<?php echo $user["alamat_user"];?>" id="alamat_user" class="input-control" required></td>
                        </tr>
                        <tr>
                            <td>Pilihan</td>
                            <td> :</td>
                            <td>
                                <select name="pilihan" value="<?php echo $user["pilihan"];?>">
                                  <option name="dosen" >dosen</option>
                                  <option name="mahasiswa" >mahasiswa</option>
                                  <option name="umum" >umum</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td> :</td>
                            <td><input type="text" name="username_user" value="<?php echo $user["username_user"];?>" id="username_user" class="input-control"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td> :</td>
                            <td><input type="password_user" name="password_user" id="password_user" value="<?php echo $user["password_user"];?>"  class="input-control"></td>
                        </tr>
                        <tr>
                            <td>Email User</td>
                            <td> :</td>
                            <td><input type="text" name="email_user" id="email_user" value="<?php echo $user["email_user"];?>" id="email_user" class="input-control"></td>
                        </tr>
                        <tr>
                            <td>Upload Foto</td>
                            <td></td>
                            <td><img src="img/<?php echo $user["foto_user"];?>" width="60"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="file" name="foto_user" id="foto_user" ></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td><button class="btn_simpan" type="submit" name="simpan" value="simpan">Simpan</button>
                        </tr>
            </table>
            <?php
                    }
            }
            ?>
          </div> 
        </form>
   </section>  
</body>
</html>