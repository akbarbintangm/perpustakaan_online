<!-- Books Modal-->
<div class="modal fade" id="addBooksModal" tabindex="-1" aria-labelledby="addBooksModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal-type">
        <div class="modal-content shadow-sm-sm">
            <div class="modal-header bg-light text-dark">
                <h5 class="modal-title" id="addBooksModalLabel">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/admin/books/actions/actions_add.php" method="POST" enctype="multipart/form-data" id="formBooks">
                <input type="hidden" name="hiddenID" id="hiddenID">
                <div class="modal-body bg-light text-dark">
                    <p id="forValidate"></p>
                    <div class="row" id="">
                        <div class="col-lg">
                            <div class="form-group">
                                <label for="inputBooksName1">Nama Buku</label>
                                <input type="name" name="inputBooksName1" class="form-control shadow-sm" id="inputBooksName1" placeholder="Masukkan Nama Buku" aria-describedby="nameHelp" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="standardData">
                        <div class="col-lg" id="standardData">
                            <div class="form-group">
                                <label for="inputBooksCode">Kode Buku</label>
                                <input type="number" name="inputBooksCode1" class="form-control shadow-sm" id="inputBooksCode1" placeholder="Masukkan Kode Buku" aria-describedby="codeHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputAuthorName1">Penulis Buku</label>
                                <input type="name" name="inputAuthorName1" class="form-control shadow-sm" id="inputAuthorName1" placeholder="Masukkan Nama Penulis" aria-describedby="authorHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputPublisherName1">Penerbit Buku</label>
                                <input type="name" name="inputPublisherName1" class="form-control shadow-sm" id="inputPublisherName1" placeholder="Masukkan Nama Penerbit" aria-describedby="publisherHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputBooksYear1">Tahun Buku</label>
                                <input type="number" name="inputBooksYear1" class="form-control shadow-sm" id="inputBooksYear1" placeholder="Masukkan Tahun Buku" aria-describedby="yearHelp" required="required">
                            </div>
                        </div>
                        <div class="col-lg" id="extendedData">
                            <div class="form-group">
                                <label for="inputBooksCategory1">Pilih Kategori Buku</label>
                                <select class="custom-select shadow-sm" name="inputBooksCategory1" id="inputBooksCategory1" required="required">
                                    <option selected>Pilih Kategori</option>
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputBooksRacks1">Pilih Rak Buku</label>
                                <select class="custom-select shadow-sm" name="inputBooksRacks1" id="inputBooksRacks1" required="required">
                                    <option selected>Pilih Rak</option>
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                            <p class="mb-2">Cover Buku</p>
                            <div class="custom-file">
                                <input type="file" name="inputBooksCover1" class="custom-file-input shadow-sm" id="inputBooksCover1" placeholder="Pilih File Cover..." aria-describedby="photoHelp" required="required">
                                <label class="custom-file-label shadow-sm" for="inputBooksCover1" id="inputCover">Pilih file cover...</label>
                            </div>
                            <p class="mb-2 mt-3">File PDF Buku</p>
                            <div class="custom-file">
                                <input type="file" name="inputBooks1" class="custom-file-input shadow-sm" id="inputBooks1" placeholder="Pilih File..." aria-describedby="booksHelp" required="required">
                                <label class="custom-file-label shadow-sm" for="inputBooks1" id="inputBooks">Pilih file buku...</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body bg-light text-dark">
                    <div class="row">
                        <div class="col text-right">
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary shadow-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary shadow-sm" name="buttonData" id="buttonData">Input Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>