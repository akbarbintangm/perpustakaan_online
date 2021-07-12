<?php
            require_once 'koneksi.php';

            if (isset($_POST["simpan"])) 
            {

                  $id_user          = $_POST["id_user"]; 
                  $nama_user        = $_POST["nama_user"]; 
                  $alamat_user      = $_POST["alamat_user"];
                  $pilihan          = $_POST["pilihan"];
                  $username         = $_POST["username_user"]; 
                  $password_user    = $_POST["password_user"]; 
                  $email_user       = $_POST["email_user"];
                  $foto_lama        = $_POST["foto_lama"];
                  $foto_user        = $_POST["foto_user"];

                  if($_FILES['foto_user']['error'] === 4) //jika tidak mengedit foto
                  {
                    $foto_user=$foto_lama; //foto pake yang lama
                  }
                  else
                  {
                        $namaFile = $_FILES['foto_user']['name'];
                        $namaSementara = $_FILES['foto_user']['tmp_name'];
                        $dirUpload = "img/";
                        
                        // pindahkan file
                        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
                        
                        if ($terupload) {
                        $query="UPDATE user SET foto_user='$namaFile', nama_user='$nama_user', alamat_user='$alamat_user', pilihan='$pilihan', username_User='$username',
                        password_user='$password_user', email_user='$email_user' WHERE id_user='$id_user'";
                        mysqli_query($koneksi, $query);

                        header('Location:data_user.php');
                        }
                        else
                        {
                              echo "Upload Gagal!";
                        }
                  }

                  

                  
            }

            
?>