<div class="alert alert-success" role="alert">
        <i class="fas fa-crop-alt"></i> Daftar Guru
    </div>
<button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenterGuru"><i class="fas fa-plus-square"></i> Input Data</button>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">NAMA</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_guru">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formGuru">
                <div class="form-group">
                        <label for="exampleFormControlInput1">NIP</label>
                        <input type="text" class="form-control" name="createNIP" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="createJenisKelamin">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addGuru" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formGuru">
                <input type="hidden" name="updateNIP">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="updateJenisKelamin">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateGuru " data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>