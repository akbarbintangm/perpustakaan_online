<!-- Books Modal-->
<div class="modal fade" id="addBooksModal" tabindex="-1" aria-labelledby="addBooksModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" id="modal-type">
        <div class="modal-content shadow-lg">
            <div class="modal-header bg-light text-dark">
                <h5 class="modal-title" id="addBooksModalLabel">...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/home/addData" method="POST" enctype="multipart/form-data" id="formMHS">
                <input type="hidden" name="hiddenID" id="hiddenID">
                <div class="modal-body bg-light text-dark">
                    <p id="forValidate"></p>
                    <div class="row" id="standardData">
                        <div class="col-lg" id="standardData">
                            <div class="form-group">
                                <label for="inputName1">Nama Mahasiswa</label>
                                <input type="name" name="inputName1" class="form-control shadow" id="inputName1" placeholder="Masukkan Nama" aria-describedby="nameHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1">Email Mahasiswa</label>
                                <input type="email" name="inputEmail1" class="form-control shadow" id="inputEmail1" placeholder="Masukkan Email" aria-describedby="emailHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputPhone1">Nomor HP Mahasiswa</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="number" name="inputPhone1" id="inputPhone1" class="form-control shadow" placeholder="Masukkan Nomor HP" aria-label="Number Phone" aria-describedby="basic-addon1" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1">Alamat Mahasiswa</label>
                                <textarea type="address" name="inputAddress1" class="form-control shadow" id="inputAddress1" placeholder="Masukkan Alamat" aria-describedby="addressHelp" required="required" style="height: 125px;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg" id="standardData">
                            <div class="form-group">
                                <label for="inputReligion1">Agama Mahasiswa</label>
                                <select class="custom-select shadow" name="inputReligion1" id="inputReligion1" required="required">
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDepartment1">Jurusan Mahasiswa</label>
                                <select class="custom-select shadow" name="inputDepartment1" id="inputDepartment1" required="required">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Sistem Komputer">Sistem Komputer</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    
                                </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputRegistType">Jalur Pendaftaran</label>
                                        <select class="custom-select shadow" name="inputRegistType" id="inputRegistType" required="required">
                                            <option selected>Pilih Tipe</option>
                                            <option value="Reguler">Reguler</option>
                                            <option value="Undangan">Undangan</option>
                                            <option value="Prestasi">Prestasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputGenderType">Jenis Kelamin</label>
                                        <select class="custom-select shadow" name="inputGenderType" id="inputGenderType" required="required">
                                            <option selected>Pilih Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1">Password Mahasiswa</label>
                                <input type="password" name="inputPassword1" class="form-control shadow" id="inputPassword1" placeholder="Masukkan Password" aria-describedby="passwordHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword2">Password Ulang</label>
                                <input type="password" name="inputPassword2" class="form-control shadow" id="inputPassword2" placeholder="Masukkan Password" aria-describedby="repasswordHelp" required="required">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1" id="formCheckRePassword1">
                                    <input type="checkbox" class="custom-control-input inputCheckRePassword" id="inputCheckRePassword1" name="changePassword[]" value="Ganti Password">
                                    <label class="custom-control-label" for="inputCheckRePassword1">Ganti Password.</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg" id="extendedData">
                            <div class="form-group">
                                <label for="inputSemester1" id="detailSemester1">Semester Mahasiswa: 0</label>
                                <input type="range" name="inputSemester1" class="custom-range inputSemester" min="1" max="8" step="1" id="inputSemester1" list="inputSemester1" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputNPM1">NPM Mahasiswa</label>
                                <input type="number" name="inputNPM1" class="form-control shadow" id="inputNPM1" placeholder="Masukkan NPM Mahasiswa" aria-describedby="npmHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputDate1">TTL Mahasiswa</label>
                                <input type="date" name="inputDate1" class="form-control shadow" id="inputDate1" placeholder="Masukkan TTL Mahasisa" aria-describedby="dateHelp" required="required">
                            </div>
                            <div class="form-group">
                                <label for="inputUsername1">Username Mahasiswa</label>
                                <input type="name" name="inputUsername1" class="form-control shadow" id="inputUsername1" placeholder="Masukkan Username Mahasiswa" aria-describedby="usernameHelp" required="required">
                            </div>
                            <p class="mb-2">Foto Mahasiswa</p>
                            <div class="custom-file">
                                <input type="file" name="inputPhoto1" class="custom-file-input shadow" id="inputPhoto1" placeholder="Pilih File..." aria-describedby="photoHelp" required="required" disabled="disabled">
                                <label class="custom-file-label shadow" for="inputPhoto1" id="inputPhoto">Pilih file...</label>
                            </div>
                            <div class="form-group mt-3">
                                <label for="inputDate1">Status Mahasiswa (Pilih Salah Satu)</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input checkStatues" id="inputCheckData1" name="checkStatues1[]" value="Mahasiswa Baru">
                                    <label class="custom-control-label" for="inputCheckData1">Mahasiswa Baru</label>
                                </div>
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input checkStatues" id="inputCheckData2" name="checkStatues1[]" value="Mahasiswa Tetap">
                                    <label class="custom-control-label" for="inputCheckData2">Mahasiswa Tetap</label>
                                </div>
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input checkStatues" id="inputCheckData3" name="checkStatues1[]" value="Mahasiswa Transfer">
                                    <label class="custom-control-label" for="inputCheckData3">Mahasiswa Transfer</label>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="custom-control custom-radio mt-1">
                                    <input type="radio" class="custom-control-input checkDO" id="inputDO1" name="checkDO" value="Tidak Drop Out">
                                    <label class="custom-control-label" for="inputDO1">Tidak Drop Out</label>
                                </div>
                                <div class="custom-control custom-radio mt-1">
                                    <input type="radio" class="custom-control-input checkDO" id="inputDO2" name="checkDO" value="Mahasiswa Drop Out">
                                    <label class="custom-control-label" for="inputDO2">Mahasiswa Drop Out</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body bg-light text-dark">
                    <div class="row">
                        <div class="col text-left">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input inputCheckAgreement" id="inputCheckAgreement1" name="checkAgreement[]" value="Menyetujui Persyaratan">
                                    <label class="custom-control-label" for="inputCheckAgreement1">Saya telah menyetujui Persyaratan dan Ketentuan.</label>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right">
                            <div class="form-group">
                                <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary shadow" name="buttonData" id="buttonData">Input Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>