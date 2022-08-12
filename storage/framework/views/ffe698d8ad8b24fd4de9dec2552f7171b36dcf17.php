<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Novo Modelo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" class="needs-validation" id="salvarModelo" enctype="multipart/form-data" novalidate>
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                    <select name="marca"  class="form-control">
                                        <?php foreach($marca as $m){?>
                                            <option value="<?php echo $m->mar_id?>"><?php echo $m->mar_titulo?></option>
                                         <?php }?>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="marca">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo: Ex Vectra, Gol, Hilux" value="" required>
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

</div>
<?php /**PATH /home/phmultimarcas/dash.phmultimarcas.com.br/resources/views/adm/modulos/modelos/create.blade.php ENDPATH**/ ?>