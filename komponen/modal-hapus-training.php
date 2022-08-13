<!-- Button trigger modal -->
<a href="#konfirmasiHapustraining" data-bs-toggle="modal" class="btn btn-outline-danger btn-sm mb-2 mx-3"><i class="fa fa-trash"></i>&nbsp Reset Data</a>

<!-- Modal -->
<div class="modal fade" id="konfirmasiHapustraining" tabindex="-1" aria-labelledby="konfirmasiHapustrainingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered   modal-sm  ">
        <div class="modal-content">
            <div class="modal-body">
                <span>Yakin Menghapus Seluruh Data Training</span>
            </div>
            <div class="modal-footer">
                <a href="controllers/data-controllers.php?opsi=delete_all&tabel=training" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>&nbsp Reset Data</a>
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal" aria-label="Close">Batal</button>
            </div>
        </div>
    </div>
</div>