<!-- Button trigger modal -->
<a href="#modalTesting" data-bs-toggle="modal" class="btn btn-outline-dark btn-sm mb-2 ms-3"><i class="fa fa-plus"></i>&nbsp Import</a>

<!-- Modal -->
<div class="modal fade" id="modalTesting" tabindex="-1" aria-labelledby="modalTestingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTestingLabel">Import File Excel Testing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="controllers/data-controllers.php?opsi=import&tabel=testing" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="file" class="mb-1">Pilih File</label>
                        <input type="file" name="file" class="form-control" id="file" accept=".xls,.xlsx" />
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <button type="submit" class="btn btn-outline-dark col-12">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>