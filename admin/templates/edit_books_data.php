<?php
    $idBooks = $_GET['id_buku'];
    $dataBooks = mysqli_query($connect, "SELECT * FROM buku WHERE id_buku = '$idBooks'") or die(mysql_error()); 
	$dataBooks = mysqli_fetch_assoc($dataBooks);
?>
<form action="<?= BASEURL; ?>/admin/books/actions/actions_edit.php" method="POST" enctype="multipart/form-data" id="formBooks">
    <input value="<?= $dataBooks['cover_buku']; ?>" type="hidden" name="oldCoverFiles" id="oldCoverFiles">
    <input value="<?= $dataBooks['file_buku']; ?>" type="hidden" name="oldBooksFiles" id="oldBooksFiles">
    <input value="<?= $dataBooks['id_buku']; ?>" type="hidden" name="idBooks" id="idBooks">
    <p id="forValidate"></p>
    <div class="row" id="">
        <div class="col-lg">
            <div class="form-group">
                <label for="inputBooksName1">Nama Buku</label>
                <input value="<?= $dataBooks['nama_buku']; ?>" type="name" name="inputBooksName1" class="form-control shadow-sm" id="inputBooksName1" placeholder="Masukkan Nama Buku" aria-describedby="nameHelp" required="required">
            </div>
        </div>
    </div>
    <div class="row" id="">
        <div class="col-lg" id="standardData">
            <div class="form-group">
                <label for="inputBooksCode1">Kode Buku</label>
                <input value="<?= $dataBooks['kode_buku']; ?>" type="number" name="inputBooksCode1" class="form-control shadow-sm" id="inputBooksCode1" placeholder="Masukkan Kode Buku" aria-describedby="codeHelp" required="required">
            </div>
            <div class="form-group">
                <label for="inputAuthorName1">Penulis Buku</label>
                <input value="<?= $dataBooks['penulis_buku']; ?>" type="name" name="inputAuthorName1" class="form-control shadow-sm" id="inputAuthorName1" placeholder="Masukkan Nama Penulis" aria-describedby="authorHelp" required="required">
            </div>
            <div class="form-group">
                <label for="inputPublisherName1">Penerbit Buku</label>
                <input value="<?= $dataBooks['penerbit_buku']; ?>" type="name" name="inputPublisherName1" class="form-control shadow-sm" id="inputPublisherName1" placeholder="Masukkan Nama Penerbit" aria-describedby="publisherHelp" required="required">
            </div>
            <div class="form-group">
                <label for="inputBooksYear1">Tahun Buku</label>
                <input value="<?= $dataBooks['tahun_buku']; ?>" type="number" name="inputBooksYear1" class="form-control shadow-sm" id="inputBooksYear1" placeholder="Masukkan Tahun Buku" aria-describedby="yearHelp" required="required">
            </div>
        </div>
        <div class="col-lg" id="extendedData">
            <div class="form-group">
                <label for="inputBooksCategory1">Pilih Kategori Buku</label>
                <select class="custom-select shadow-sm" name="inputBooksCategory1" id="inputBooksCategory1" required="required">
                    <option selected>Pilih Kategori</option>
                    <?php
                        $viewObjectCategory = mysqli_query($connect, "SELECT * FROM kategori_buku") or die(mysql_error()); 
        		            while($dataObjectCategory = $viewObjectCategory->fetch_assoc()){
                                echo "<option value=$dataObjectCategory[id_kategori_buku]>$dataObjectCategory[nama_kategori]</option>";
                            }
                    ?>
                </select>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="inputBooksRacks1">Pilih Rak Buku</label>
                <select class="custom-select shadow-sm" name="inputBooksRacks1" id="inputBooksRacks1" required="required">
                    <option selected>Pilih Rak</option>
                    <?php
                        $viewObjectRacks = mysqli_query($connect, "SELECT * FROM rak_buku") or die(mysql_error()); 
        		            while($dataObjectRacks = $viewObjectRacks->fetch_assoc()){
                                echo "<option value=$dataObjectRacks[id_rak_buku]>$dataObjectRacks[nama_rak_buku]</option>";
                            }
                    ?>
                </select>
            </div>
            <p class="mb-2">Cover Buku</p>
            <div class="custom-file">
                <input value="" type="file" name="inputBooksCover1" class="custom-file-input shadow-sm disabled" id="inputBooksCover1" placeholder="Pilih File Cover..." aria-describedby="photoHelp" required="required" disabled="disabled">
                <label class="custom-file-label shadow-sm" for="inputBooksCover1" id="inputCover">Pilih file cover...</label>
            </div>
            <p class="mb-2 mt-3">File PDF Buku</p>
            <div class="custom-file">
                <input value="" type="file" name="inputBooks1" class="custom-file-input shadow-sm disabled" id="inputBooks1" placeholder="Pilih File..." aria-describedby="booksHelp" required="required" disabled="disabled">
                <label class="custom-file-label shadow-sm" for="inputBooks1" id="inputBooks">Pilih file buku...</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-right">
            <div class="form-group">
                <button type="submit" class="btn btn-primary shadow-sm" name="buttonData" id="buttonData">Edit Data</button>
            </div>
        </div>
    </div>
</form>