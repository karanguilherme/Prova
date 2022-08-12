<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Nova Marca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" class="needs-validation" id="salvarMarcas" enctype="multipart/form-data" novalidate>
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="marca">Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option>Selecione o Tipo</option>
                                    <?php foreach($tipos as $t){?>
                                    <option value="<?php echo $t->id_tipo ?>"><?php echo $t->tipo ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="marca">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="" required>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="select_file" id="select_file" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-ganger waves-effect" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="upload" id="upload" class="btn btn-success waves-effect waves-light" data-dismiss="modal" data-backdrop="false">Salvar</button>
                </div>
            </form>
        </div>

    </div>

</div><?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/fabricantes/create.blade.php ENDPATH**/ ?>