<div class="alert alert-success" role="alert">
        <i class="fas fa-crop-alt"></i> Daftar Mata Pelajaran
    </div>
<button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenterMapel"><i class="fas fa-plus-square"></i> Input Data</button>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">KODE</th>
            <th scope="col">MATA PELAJARAN</th>
            <th scope="col">KELAS</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_mapel">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterMapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMapel">
                <div class="form-group">
                        <label for="exampleFormControlInput1">KODE</label>
                        <input type="text" class="form-control" name="createKode" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">KELAS</label>
                        <input type="text" class="form-control" name="createKelas" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addMapel" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterMapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Mapel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formMapel">
                <input type="hidden" name="updateKode">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kelas</label>
                        <input type="text" class="form-control" name="updateKelas" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateMapel " data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>