<div class="alert alert-success" role="alert">
        <i class="fas fa-crop-alt"></i> Daftar Siswa
    </div>
<button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenterSiswa"><i class="fas fa-plus-square"></i> Input Data</button>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">NAMA</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">TTL</th>
            <th scope="col">KOTA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_siswa">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSiswa">
                <div class="form-group">
                        <label for="exampleFormControlInput1">NIS</label>
                        <input type="text" class="form-control" name="createNIS" id="exampleFormControlInput1" placeholder="">
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
                        <label for="exampleFormControlInput1">TTL</label>
                        <input type="date" class="form-control" name="createTgl" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota</label>
                        <input type="text" class="form-control" name="createKota" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addSiswa" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSiswa">
                <input type="hidden" name="updateNIS">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="updateJenisKelamin" placeholder="">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TTL</label>
                        <input type="date" class="form-control" name="updateTgl" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota</label>
                        <input type="text" class="form-control" name="updateKota" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateSiswa " data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>