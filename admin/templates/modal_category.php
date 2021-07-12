<!-- Category Modal-->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal-type">
        <div class="modal-content shadow-sm-sm">
            <div class="modal-header bg-light text-dark">
                <h5 class="modal-title" id="addBooksModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/admin/category/actions/actions_add.php" method="POST" enctype="multipart/form-data" id="formCategory">
                <input type="hidden" name="hiddenID" id="hiddenID">
                <div class="modal-body bg-light text-dark">
                    <p id="forValidate"></p>
                    <div class="row" id="">
                        <div class="col-lg">
                            <div class="form-group">
                                <label for="inputCategoryName1">Nama Kategori</label>
                                <input type="name" name="inputCategoryName1" class="form-control shadow-sm" id="inputCategoryName1" placeholder="Masukkan Nama Kategori" aria-describedby="nameHelp" required="required">
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