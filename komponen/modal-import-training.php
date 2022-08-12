<!-- Button trigger modal -->
<a href="#modalTraining" data-bs-toggle="modal" class="btn btn-outline-dark btn-sm mb-2 ms-3"><i class="fa fa-plus"></i>&nbsp Import</a>

<!-- Modal -->
<div class="modal fade" id="modalTraining" tabindex="-1" aria-labelledby="modalTrainingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTrainingLabel">Import File Excel Training</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="controllers/data-controllers.php?opsi=import&tabel=training" method="post" enctype="multipart/form-data">
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