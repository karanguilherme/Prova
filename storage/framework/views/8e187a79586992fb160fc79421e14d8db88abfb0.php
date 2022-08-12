<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editarModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Editar Opcional</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" class="needs-validation" id="editar" enctype="multipart/form-data" novalidate>
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="edt_opcional">Nome do Opcional</label>
                                <input type="text" class="form-control" id="edt_opcional" name="edt_opcional" placeholder="Opcional" required>
                                <input type="hidden" id="edt_id" name="edt_id" required>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ganger waves-effect" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" name="upload" id="upload" class="btn btn-success waves-effect waves-light" data-dismiss="modal" data-backdrop="false">Editar</button>
                </div>
            </form>
        </div>

    </div>

</div><?php /**PATH /home/servidor/Sites/ph/resources/views/adm/modulos/opcionais/edit.blade.php ENDPATH**/ ?>