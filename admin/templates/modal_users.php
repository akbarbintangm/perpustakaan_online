<!-- Users Modal-->
<div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal-type">
        <div class="modal-content shadow-sm-sm">
            <div class="modal-header bg-light text-dark">
                <h5 class="modal-title" id="addBooksModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/admin/users/actions/actions_add.php" method="POST" enctype="multipart/form-data" id="formUsers">
                <input type="hidden" name="hiddenID" id="hiddenID">
                <div class="modal-body bg-light text-dark">
                    <p id="forValidate"></p>
                    <div class="row" id="">
                        <div class="col-lg">
                            <div class="form-group">
                                <label for="inputName1">Nama User</label>
                                <input type="name" name="inputName1" class="form-control shadow-sm" id="inputName1" placeholder="Masukkan Nama User" aria-describedby="nameHelp" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="standardData">
                        <div class="col-lg" id="standardData">
                            <div class="form-group">
                                <label for="inputNIK">NIK KTP</label>
                                <input type="number" name="inputNIK" class="form-control shadow-sm" id="inputNIK" placeholder="Masukkan NIK User" aria-describedby="nikHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputChoiceUser1">Pilih Pilihan User</label>
                                <select class="custom-select shadow-sm" name="inputChoiceUser1" id="inputChoiceUser1" required="required">
                                    <option selected>Pilih</option>
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputUsername1">Username</label>
                                <input type="name" name="inputUsername1" class="form-control shadow-sm" id="inputUsername1" placeholder="Masukkan Username" aria-describedby="usernameHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputPasswordUser1">Password</label>
                                <input type="password" name="inputPasswordUser1" class="form-control shadow-sm" id="inputPasswordUser1" placeholder="Masukkan Password User" aria-describedby="passwordHelp" required="required">
                            </div>
                        </div>
                        <div class="col-lg" id="extendedData">
                            <div class="form-group">
                                <label for="inputEmailUser1">Email</label>
                                <input type="email" name="inputEmailUser1" class="form-control shadow-sm" id="inputEmailUser1" placeholder="Masukkan Email User" aria-describedby="email dHelp" required="required">
                            </div>
                            <p class="mb-2">E-KTP User</p>
                            <div class="custom-file">
                                <input type="file" name="inputKTPUser1" class="custom-file-input shadow-sm" id="inputKTPUser1" placeholder="Pilih File E-KTP..." aria-describedby="ktpHelp" required="required">
                                <label class="custom-file-label shadow-sm" for="inputKTPUser1" id="inputKTP">Pilih file E-KTP...</label>
                            </div>
                            <p class="mb-2 mt-3">Foto User</p>
                            <div class="custom-file">
                                <input type="file" name="inputPhotoUser1" class="custom-file-input shadow-sm" id="inputPhotoUser1" placeholder="Pilih File Foto..." aria-describedby="photoHelp" required="required">
                                <label class="custom-file-label shadow-sm" for="inputPhotoUser1" id="inputPhoto">Pilih file foto...</label>
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